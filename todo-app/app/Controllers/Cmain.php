<?php

namespace App\Controllers;

class Cmain extends BaseController {

    public function index() {
        $data['jobs'] = $this->getAllJobs();

        //Display in homepage
        return view('vhome', $data);
    }


    #===============================================
    # Publics functions
    #===============================================
    public function new_job() {
        return view('vnew_job');
    }

    public function newJobSubmit() {

        //Verifica se NÃO é um post
        if(!$_SERVER['REQUEST_METHOD'] == 'POST') {
            //Faz um redirecionamento para o main
            return redirect()->to(site_url("cmain"));
        }

        // Recupera o valor do formulário - ACHO que isso é possível pq o 
        // método foi chamado dentro de uma view que abriu o formulário lá
        $job = $this->request->getPost('job_name');

        //guardar os dados no banco de dados
        $params = [
            'job'=> $job
        ];

        //echo $job;
        
        $db = db_connect();
        $db->query("INSERT INTO jobs(job, datetime_created)
            VALUES(:job:, NOW())",
            $params);
        $db->close();

        //redirecinamento para o página inicial
        return redirect()->to(site_url("cmain"));
    }

    public function jobDone($id_job=-1) {
        //atualiza na tabela jobs a tarefa com o id passado no parâmetro
        $params =[
            'id_job'=>$id_job
        ];
        $db = db_connect();
        $db->query("UPDATE jobs
        SET datetime_finished = NOW(),
        datetime_update = NOW()
        WHERE id_job = :id_job:", $params);
        $db->close();

        //atualiza a página inicial
        return redirect()->to(site_url('cmain'));
    
    }

    public function editJob($id_job=-1) {

        $params = [
            'id_job'=>$id_job
        ];

        $db = db_connect();
        $dados = $db->query("SELECT * FROM jobs 
                    WHERE id_job = :id_job:",
                     $params)->getResultObject();
        $db->close();
        $data['job'] = $dados[0];
        return view('vedit_job', $data);
    }

    public function editJobSubmit() {
        
        //atualizar a tarefa na base de dados
        $params =[
            'id_job' => $this->request->getPost('id_job'),
            'job'=> $this->request->getPost('job_name')
        ];

        $db = db_connect();
        $db->query("UPDATE jobs
                    SET job = :job:, 
                    datetime_update = NOW()
                    WHERE id_job = :id_job:"
                    ,$params);
        $db->close();

        //atualiza a página inicial
        return redirect()->to(site_url("cmain"));

    }

    public function deleteJob($id_job=-1) {
        //apresentar uma view para obter a confirmação

        $params = [
            'id_job' => $id_job
        ];

        $db = db_connect();
        $data['job'] = $db->query("SELECT * FROM jobs
                                    WHERE id_job = :id_job:"
                                    , $params)->getResultObject()[0];
        $db->close();

        return view('vdelete_job', $data);
    }

    public function deletejobconfirm($id_job=-1) {

        //deletar a tarefa da base da dados
        $params = [
            'id_job' => $id_job
        ];
        $db = db_connect();
        $db->query("DELETE FROM jobs 
                    WHERE id_job = :id_job:"
                    ,$params);
        $db->close();

        //atualizar a página
        return redirect()->to(site_url("cmain"));
    }


    #===============================================
    # Private functions
    #===============================================
    
    private function getAllJobs() {
        $db = db_connect(); //conecta com o banco de dados

        $dados = $db->query("SELECT * FROM jobs")->getResultObject(); //seleciona todas as tarefas

        $db->close(); //encerra a conexão
        return $dados; 
    }
}

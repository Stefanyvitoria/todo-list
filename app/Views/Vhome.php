<!-- Extende a página do layout "layouts/main_layout" -->
<?= $this-> extend('layouts/main_layout')?>


<!-- Define que está é a section "conteudo" 
    Está section aparecerá dentro do layout onde foi chamada
    "main_layout"-->
<?= $this->section('conteudo')?> 
    <?php log_message('info', 'App foi acessado.');?>

    <header class="container">
        <div class="row">
            <div class="col p-3">
                <h3 >TODO List</h3>
            </div>
            <div class="col-3 p-3 text-right">
                <a href="<?= site_url("cmain/new_job")?>" class="btn btn-primary " >
                    criar nova tarefa
                </a>
            </div>
        </div>
    </header>

    <hr>

    <?php if(count($jobs)==0):?>
        <p class="text-center">Não existem tarefas!</p>

    <?php else:?>
        <table class="table table-striped table-sm">
            <thead class="table-dark">
                <tr>
                    <th class="text-center">Tarefa</th>
                    <th class="text-center">Data de criação</th>
                    <th class="text-center">Data de finalização</th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($jobs as $job):?>
                    <tr>
                        <td class="text-center"><?= $job->job?></td>
                        <td class="text-center"><?= $job->datetime_created?></td>
                        <td class="text-center"><?= $job->datetime_finished?></td>
                        <td class="text-center">
                            <!-- Status da tarefa -->
                            <?php if(empty($job->datetime_finished)):?>
                                <a href="<?=site_url("cmain/jobDone/".$job->id_job)?>" class="btn btn-sm">
                                    <button class="bt btn-success bt-sm">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </a>
                            <?php else:?>
                                <button class="text-danger bt-sm btn-sm mx-2" disabled><i class="fa fa-check"></i></button>
                            <?php endif;?>

                            <!-- Editar tarefa -->
                            <?php if(empty($job->datetime_finished)):?>
                                <a href="<?=base_url("cmain/editjob/".$job->id_job)?>" class="bt bt-sm mx-2"><button class="bt-secondary"><i class="fa fa-pencil"></i></button></a>
                            <?php else:?>
                                <button class="bt mx-2 bt-sm" disabled><i class="fa fa-pencil"></i></button>
                            <?php endif;?>
                                
                            <!-- Excluir tarefa -->
                            <a href="<?= base_url('cmain/deletejob/'.$job->id_job)?>" class="bt bt-sm mx-2"><button class="bt bt-sm"><i class="fa fa-trash"></button></i></a>
                            
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>

        </table>
        <p>N° de tarefas: <strong><?= count(($jobs))?></strong></p>

    <?php endif;?>

<!-- Termina a section "conteúdo" -->
<?= $this->endSection() ?>
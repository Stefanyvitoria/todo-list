<!-- Extende a página do layout "layouts/main_layout" -->
<?= $this-> extend('layouts/main_layout')?>


<!-- Define que está é a section "conteudo" 
    Está section aparecerá dentro do layout onde foi chamada
    ""main_layout-->
<?= $this->section('conteudo')?> 


    <header class="container">
        <div class="row">
            <div class="col p-3">
                <h3 >TODO List</h3>
            </div>
            <div class="col-3 p-3 text-right">
                <h3>Deletar tarefa.</h3>
            </div>
        </div>
    </header>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h3>Deseja Deletar a tarefa:</h3>
                <div class="card p-3 my-3 bg-light">
                    <h4><?=$job->job?></h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col text-center">
                <a href="<?=site_url('cmain')?>" class="btn btn-secondary" >Não</a>
                <a href="<?=site_url('cmain/deletejobconfirm/'.$job->id_job)?>" class="btn btn-primary" >Sim</a>
            </div>
        </div>
    </div>

<!-- Termina a section "conteúdo" -->
<?= $this->endSection() ?>
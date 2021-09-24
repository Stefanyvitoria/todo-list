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
            <h3>Nova tarefa.</h3>
        </div>
    </div>
</header>
<hr>


<?php
    //Carrega o helper do formulário
    helper('form');

    //abre o formulário
    echo form_open('cmain/newjobsubmit');
?>

<div class="container">
    <div class="row-4 text-center">

        <div class="col-4 offset-4">

            <div class="form-group p-2">
                <label>Tarefa:</label>
                <input type="text" name="job_name" class="form-control" required>
            </div>

            <div class="row">
                <div class="col">
                    <a href="<?= base_url("cmain")?>" class="btn btn-secondary">Cancelar</a>
                </div>
                <div class="col text-right">
                    <input type="submit" value="Salvar" class="btn btn-primary">
                </div>
            
        </div>
    </div>
</div>
    

<!-- Fecha o formulário -->
<?= form_close()?>


<!-- Termna a section "conteúdo" -->
<?= $this->endSection() ?>
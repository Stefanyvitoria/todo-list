<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - stefany</title>

    <link rel="stylesheet" href=<?= base_url('assets/bootstrap.min.css')?>>
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome-4.7.0/css/font-awesome.min.css')?>">
</head>
<body>
    
    <!-- Renderiza a section "conteudo" -->
    <?= $this-> renderSection('conteudo')?>

    <hr>
    <footer class="container">
        <div class="row">
            <div class="col text-center">
                TODO List &copy; 20<?= date('y')?>
            </div>
        </div>
    </footer>

    <script src="<?= base_url('assets/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/bootstrap.min.js')?>"></script>

</body>
</html>
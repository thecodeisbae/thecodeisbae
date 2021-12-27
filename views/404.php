
<?php layoutInit() ?>
<?php startSection('head') ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 ERROR</title>
        <link rel="stylesheet" href="<?= assets('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= assets('toastr/toastr.min.css') ?>">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://kit.fontawesome.com/637d7774d7.js" crossorigin="anonymous"></script>
    </head>
<?php endSection('head') ?>

<?php startSection('content') ?>    
    <div class="row justify-content-center align-content-center">
        <div class="card col-md-4 col-sm-4  m-2">
            <div class="card-body">
                <h5 class="card-title" align="center">404 NOT FOUND</h5>
                
            </div>
        </div>
    </div>
<?php endSection('content') ?>

<?php setLayout('app/layout.php') ?>
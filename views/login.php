<?php 
    include_once(_VENDOR_PATH.'\thecodeisbae\LayoutManager\LayoutManager.php');
    use thecodeisbae\LayoutManager\LayoutManager;
    LayoutManager::init();
?>

<?php LayoutManager::start_section('head') ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="<?= assets('css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= assets('toastr/toastr.min.css') ?>">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
        <script src="https://kit.fontawesome.com/637d7774d7.js" crossorigin="anonymous"></script>
    </head>
<?php LayoutManager::end_section('head') ?>

<?php LayoutManager::start_section('content') ?>    
    <div class="row justify-content-center align-content-center">
        <div class="card col-md-4 col-sm-4  m-2">
            <div class="card-body">
                <h5 class="card-title">Login</h5><hr>
                <form method="post" action="/login" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input id="login" class="form-control" type="text" name="login" value="<?php if(array_key_exists('login',$old)){?> <?= $old['login'] ?> <?php } ?>">
                        <?php if(array_key_exists('login',$data)){ ?>
                            <small class="text-danger">
                                <?= $data['login'] ?>
                            </small>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                        <?php if(array_key_exists('password',$data)){ ?>
                            <small class="text-danger">
                                <?= $data['password'] ?>
                            </small>
                        <?php } ?>
                    </div>  
                    <div class="form-group">
                        <label for="file">Filename</label>
                        <input id="file" class="form-control-file" type="file" name="file">
                    </div>  
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>                  
                </form>
            </div>
        </div>
    </div>
<?php LayoutManager::end_section('content') ?>

<?php LayoutManager::start_section('footer') ?>
    <script src="<?= assets('toastr/toastr.min.js') ?>"></script>
    <?php if(array_key_exists('flash',$_SESSION)) { ?>
        <script>
            <?= ($_SESSION['type'] == 'success') ? 'toastr.success("'.$_SESSION['flash'].'");' : 'toastr.error("'.$_SESSION['flash'].'");' ?>
        </script>
    <?php }
        unset($_SESSION['flash']);
        unset($_SESSION['type']);
    ?>
<?php LayoutManager::end_section('footer') ?>

<?php LayoutManager::set(_VIEWS_PATH.'app/layout.php'); ?>
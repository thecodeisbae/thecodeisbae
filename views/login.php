<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/<?= _ASSETS_PATH ?>css/bootstrap.min.css">
</head>

<body class="container-fluid">
    <div class="row justify-content-center align-content-center">
        <div class="card col-md-4 col-sm-4  m-2">
            <div class="card-body">
                <h5 class="card-title">Login</h5><hr>
                <form method="post" action="/login">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input id="login" class="form-control" type="text" name="login" value="<?= $old['login'] ?>">
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
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>                  
                </form>
            </div>
        </div>
    </div>
</body>

</html>
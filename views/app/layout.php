<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link  rel="icon" type="image/png" href="<?= assets('tcb/icon.png') ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>TheCodeIsBae</title>
        <style>
            .glass {
                background-color: rgba(255, 255, 255, .15);
                backdrop-filter: blur(5px);
            }
            .border-none{
                border-style:none;
            }
            @font-face {
                font-family: Exo;
                src: url('<?= assets('/tcb/fonts/Exo2-Regular.ttf') ?>') format('truetype');
            }
            body{
                font-family:Exo!important;
            }
            .tcb-bg{
                background: url(<?= assets('/tcb/thecodeisbae.png') ?>);
            }
        </style>
    </head>
    <body class="bg-dark">
        <?= section('content') ?>
        <div class="container-fluid mt-5 text-light">
            <div class="row justify-content-center mt-5 mb-5">
                <div class="card col-md-6 glass mt-5">
                    <h3 class="mt-5"><strong>TheCodeIsBae</strong></h3>
                    <hr class="border-white">
                    <div class="card-body m-3">
                        <p class="card-text" style="text-style:justify">
                            Mini framework <strong>PHP</strong> on going. 
                            It's based on full POO <strong>PHP</strong> and <strong>MVC</strong> concept using 
                            the <strong>ORM</strong> <em>Eloquent</em> for models and database usage. A lot of 
                            functionnalities are included such as a :<br><br>
                                &ensp;&ensp;- <strong>Commander</strong> file for execute commands helping for
                             time saving while coding.<br>
                                &ensp;&ensp;- <strong>Eloquent</strong> ORM for easy database managing.
                                <br>
                                &ensp;&ensp;- <strong>Params</strong> file for storing important params of your project ( <em>db,email,etc...</em> ).
                                <br>
                                &ensp;&ensp;- <strong>Utilities</strong> classes for managing :<br>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;* <em class="font-weight-bold">files</em><br>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;* <em class="font-weight-bold">mails</em><br>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;* <em class="font-weight-bold">forms validation</em><br>
                                &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;* <em class="font-weight-bold">data storing and transfering to view </em>.
                            <br><br>
                            The current documentation of the framework : 
                             <a class="text-success" href="#">https://thecodeisbae.docs.com</a>
                            <br>
                            Any contributions and ideas are welcome on the main repository of the project :
                             <a class="text-danger" href="https://github.com/thecodeisbae/thecodeisbae.git">https://github.com/thecodeisbae/thecodeisbae.git</a>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities page</title>
    <link rel="stylesheet" href="/<?= _ASSETS_PATH ?>css/bootstrap.min.css">
</head>

<body>
    <a href="/about">About page</a>
    <h1>Table</h1>
    <div lass="row justify-contents-center">
        <table class="table table-bordered">
            <?php foreach($data['activities'] as $value) { ?>
                <tr>
                    <td><?= $value->id ?></td>
                    <td><?= $value->name ?></td>
                    <td><?= $value->location ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>
<?php     
    use thecodeisbae\LayoutManager\LayoutManager;
?>

<!DOCTYPE html>
<html lang="en">
    <?= LayoutManager::section('head') ?>

<body class="container-fluid">
    <?= LayoutManager::section('content') ?>
    <?= LayoutManager::section('footer') ?>
</body>

</html>
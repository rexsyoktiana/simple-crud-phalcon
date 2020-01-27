<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= ($title ? strip_tags($this->escaper->escapeHtml($title)) : 'Untitled') ?></title>
    <?= $this->tag->stylesheetLink('css/bootstrap/bootstrap.min.css') ?>

</head>

<body>
    <div class="container">
        
</br>
<button class="btn btn-danger">Hello TEST</button>
<br>

    </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap/bootstrap.min.js') ?>
</body>

</html>
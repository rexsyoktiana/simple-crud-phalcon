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
        
<br />
User Detail
<br><br>
<table width="100%">
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><?= $users->username ?></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><?= $users->password ?></td>
    </tr>
    <tr>
        <td>Level</td>
        <td>:</td>
        <td><?= $users->level ?></td>
    </tr>
</table>
<br><br>
<button class="btn btn-success" onclick="window.location.href='../users'">Back</button>

    </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap/bootstrap.min.js') ?>
</body>

</html>
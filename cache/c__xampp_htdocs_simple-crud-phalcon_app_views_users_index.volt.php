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

<div class="mb-1">Hello All</div>
<?php echo $this->flashSession->output() ?>
<div class="row">
    <div class="col-md-12">
        user list:
        <br><br>
        <table class="table table-bordered table-hover" style="width:50%">
            <tr>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <?php foreach ($users as $user) { ?>
            <tr>
                <td><?= $user->username ?></td>
                <td><a href="users/<?= $user->id_user ?>">show</a> || <a href="users/edit/<?= $user->id_user ?>">edit</a> || <a href="users/delete/<?= $user->id_user ?>">delete</a></td>
            </tr>
            <?php } ?>
        </table>

    </div>
</div>
<br>
<button class="btn btn-success" onclick="window.location.href='users/create'">Create</button>

    </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap/bootstrap.min.js') ?>
</body>

</html>
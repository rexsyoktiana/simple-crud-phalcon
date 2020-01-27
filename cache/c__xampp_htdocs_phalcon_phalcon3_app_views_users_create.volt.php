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
Hello User!!!
<br><br>
<div class="row">
    <div class="col-md-12">
        <form method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Type your username" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Type your password" required>
            </div>
            <div class="form-group">
                <label>Level</label>
                <input type="text" name="level" class="form-control" placeholder="Type your level" required>
            </div>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='../users'">Cancel</button>
            <input type="submit" value="Save" class="btn btn-success"> 
        </form>
    </div>
</div>

    </div>
    <?= $this->tag->javascriptInclude('js/jquery.min.js') ?>
    <?= $this->tag->javascriptInclude('js/bootstrap/bootstrap.min.js') ?>
</body>

</html>
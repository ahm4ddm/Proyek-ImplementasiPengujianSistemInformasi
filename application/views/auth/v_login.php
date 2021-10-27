<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Login</h1>
</body>
<form method="post" action="<?php base_url('authcon/login'); ?>">
    <div class="form-group">
        <label>Enter Username</label>
        <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
        <span class="text-danger"><?php echo form_error('user_name'); ?></span>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" />
        <span class="text-danger"><?php echo form_error('password'); ?></span>
    </div>
    <div class="form-group">
        <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php base_url(); ?>register">Register</a>
    </div>
</form>

</html>
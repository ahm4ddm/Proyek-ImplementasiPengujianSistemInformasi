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
    <h1>Halaman Registrasi</h1>
</body>
<form method="post" action="<?php base_url('authcon/register'); ?>">
    <div class="form-group">
        <label>Enter Full Name</label>
        <input type="text" name="name_full" class="form-control" value="<?php echo set_value('name_full'); ?>" />
        <span class="text-danger"><?php echo form_error('full_name'); ?></span>
    </div>
    <div class="form-group">
        <label>Enter username</label>
        <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
        <span class="text-danger"><?php echo form_error('user_name'); ?></span>
    </div>
    <div class="form-group">
        <label>Enter Email Address</label>
        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" name="user_password1" class="form-control" />
        <span class="text-danger"><?php echo form_error('user_password1'); ?></span>
    </div>
    <div class="form-group">
        <label>Repeat Password</label>
        <input type="password" name="user_password2" class="form-control" />
        <span class="text-danger"></span>
    </div>
    <div class="form-group">
        <input type="submit" name="register" value="Registrasi" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php base_url(); ?>login">Login</a>
    </div>
</form>

</html>
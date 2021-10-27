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
<?php
if ($this->session->flashdata('message')) {
    echo '
        <div class="alert alert-success">
            ' . $this->session->flashdata("message") . '
        </div>
        ';
}
?>
<form method="post" action="<?php base_url(''); ?>">
    <div class="form-group">
        <label>Enter Email Address</label>
        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('email'); ?>" />
        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
    </div>
    <div class="form-group">
        <label>Enter Password</label>
        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('password'); ?>" />
        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
    </div>
    <div class="form-group">
        <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php base_url(); ?>register">Register</a>
    </div>
</form>

</html>
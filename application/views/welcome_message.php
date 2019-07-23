<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/style/theme.css"> 
        <script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
        <script src="<?php echo base_url('assets/ckfinder/ckfinder.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    </head>

    <body>
        <div class="container">
            <form action="<?php echo site_url('infront/getLoginInfor') ?>" method="POST">
                <label>username</label>
                <input class="form-control" type="text" name="username" />
                <label>password</label>
                <input type="password" name="password" class="form-control" /><br> 
                <input type="submit" value="Login" class="btn btn-danger"/>
            </form>
        </div>
    </body>
</html>
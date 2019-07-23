<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?php echo site_url('uploader/imageUpload')?>" method="POST" enctype="multipart/form-data">
            <label>choose file</label><br>
            <input type="file" name="file" accept="image/*" />
            <br>
            <input type="submit" name="submit" value="submit" />
        </form>
    </body>
    
    <img src="../assets/gambar/31656655872_cfa43d1c6c_h.jpg" />
</html>

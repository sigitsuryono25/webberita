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
        <nav class="navbar navbar-expand-md bg-primary navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Portal Berita Lauwba
                    <br> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo site_url('dashboard/index#daftar-berita') ?>" id="daftar-berita">
                                <i class="fa d-inline fa-lg fa-list-ol"></i>&nbsp;Daftar Berita</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="tulis-berita" href="<?php
                            echo
                            site_url('dashboard/tulis_berita_cke#tulis-berita')
                            ?>">
                                <i class="fa d-inline fa-lg fa-pencil"></i>&nbsp;Tulis Berita</a>
                        </li>
                    </ul>
                    <a class="btn navbar-btn btn-primary ml-2 text-white">
                        <i class="fa d-inline fa-lg fa-user-circle-o"></i>&nbsp;Logout</a>
                </div>
            </div>
        </nav>
        <script>
            var setActiveClass = window.location.href;
            if (setActiveClass.includes("#tulis-berita")) {
                $("#tulis-berita").addClass("active");
            } else {
//            alert("daftar Berita");
                $("#daftar-berita").addClass("active");
            }
        </script>
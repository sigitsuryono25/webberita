<div class="py-5">
    <div class="container">
        <?php echo form_open_multipart('dashboard/proses_berita') ?>
        <label>Judul Berita</label>
        <?php echo form_input(array("name" => "judul_berita", "class" => "form-control my-3")) ?>
        <label>Cover Berita</label>
        <?php echo form_upload(array("name"=>"upload", "accept"=> "image/*", "class"=>"form-control my-3"))?>
        <label>Content Berita</label>
        <?php echo form_textarea(array("name" => "isi_berita")) ?>
        <script>
            var editor = CKEDITOR.replace('isi_berita', {
                removeButtons: 'Save,Print,Source,Templates,Form,CheckboxFind,Replace,Strikethrough,Subscript,Superscript,Textarea,Button,Preview,Maximize,Flash,Smiley'
            });
        </script>
        <?php echo form_submit(array("value" => "Simpan Data", "class" => "btn btn-success my-3")) ?>
        <?php echo form_close() ?>
    </div>
</div>

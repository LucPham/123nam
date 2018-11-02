<html>
<head>

</head>
<body>

<h2>Hello</h2>
<form method="post" id="formdata">
    <input type="file" name="image[]" id="image" multiple="multiple">
    <button id="upload">Upload</button>
</form>

<script src="<?php echo base_url('public/js/jquery-1.12.3.min.js') ?>"></script>
<?php $this->load->view('Test/Ajax/formdata'); ?>
</body>
</html>
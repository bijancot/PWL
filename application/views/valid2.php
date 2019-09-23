<html>
<head>
<title>My Form</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('pertemuan3/tugas'); ?>

<h5>UAS</h5>
<input type="text" name="uas" value="" size="50" />

<h5>UTS</h5>
<input type="text" name="uts" value="" size="50" />

<h5>TUGAS</h5>
<input type="text" name="tugas" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
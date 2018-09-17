<?php
$target_p = "uploads/";
$target_file = $target_p. basename($_FILES["fileUpload"]["name"]);

if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
	$nama_file = basename($_FILES["fileUpload"]["name"]);

	echo "<center> Sukses Upload </center>" ."<br>";
}else{
	echo "Gagal Upload";
}
?>

<center><img width="400px" src="<?php echo $target_p. $nama_file; ?>"></center>

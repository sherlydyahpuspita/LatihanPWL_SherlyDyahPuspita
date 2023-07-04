<?php 

    include('koneksi.php');
    
    $nama       = $_POST['nama'];
	$npm        = $_POST['npm'];
    $jk		    = $_POST['jk'];
    $alamat		= $_POST['alamat'];
    $matakuliah	= $_POST['matkul'];   
    $insert = mysqli_query($connect, "INSERT INTO mhs SET nama_mahasiswa='$nama' ,npm='$npm', jenis_kelamin='$jk', alamat='$alamat', matakuliah='$matakuliah'");
    
?>
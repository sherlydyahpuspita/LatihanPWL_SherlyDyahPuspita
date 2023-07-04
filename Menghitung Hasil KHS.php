<html>
    <head>
        <title>Menghitung Hasil KHS</title>
    </head>
    <body>
        <h1 style="text-align: center">Program Menghitung Hasil KHS</h1>
        <form method="post" action="">
            <div style="margin-left: 25%">
				Nama Mahasiswa : <input type="text" name="nama_mahasiswa" /><br /> <br />
                Nilai Tugas : <input type="text" name="nilai_tugas" /><br /> <br />
                Nilai UTS : <input type="text" name="nilai_uts" /><br /><br />
                Nilai UAS : <input type="text" name="nilai_uas" /><br /><br />
                 
                <input type="submit" name="submit" value="Hitung" />
				<input type="reset" name="reset" value="Hapus" />
            </div>
        </form>
<div style="margin-left: 25%">
            <?php
                if(isset($_POST['submit'])){
					$nama_mahasiswa = $_POST['nama_mahasiswa'];
                    $nilai_tugas = $_POST['nilai_tugas'];
                    $nilai_uts = $_POST['nilai_uts'];
                    $nilai_uas = $_POST['nilai_uas'];
 
                    //Rumus Perhitungan Nilai
                    $hasil = ($nilai_tugas*0.2) + ($nilai_uts*0.3) + ($nilai_uas*0.5);
 
                    if ($hasil>=90) {
                        $grade = "A";
                    } elseif ($hasil>=80) {
                        $grade = "B";
                    } elseif ($hasil>=60) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }
 
                    //Hasil Perhitungan
					echo "Nama Mahasiswa : $nama_mahasiswa <br/>";
                    echo "Nilai Tugas   : $nilai_tugas <br/> ";
                    echo "Nilai UTS : $nilai_uts <br/>";
                    echo "Nilai UAS : $nilai_uas <br/>";
 
                    echo "Perolehan Nilai Akhir Mahasiswa adalah  <b>$hasil</b> <br/> ";
                    echo "Grade : $grade <br/>";
                }
            ?>
        </div>
    </body>
</html>
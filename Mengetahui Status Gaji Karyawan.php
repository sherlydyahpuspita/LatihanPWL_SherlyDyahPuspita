<html>
    <head>
        <title>Mengetahui Status Gaji Karyawan</title>
    </head>
    <body>
        <h1 style="text-align: center">Program Mengetahui Status Gaji Karyawan</h1>
		<form method="post" action="">
            <div style="margin-left: 25%">
				Nama Karyawan : <input type="text" name="nm_karyawan" /><br /><br />
				Gaji Pokok : <input type="text" name="gaji_pokok" /><br /><br />
                Uang Lembur : <input type="text" name="uang_lembur" /><br /><br />
                Tunjangan : <input type="text" name="tunjangan" /><br /><br />
				Hutang	: <input type="text" name="hutang" /><br /><br />
                 
                <input type="submit" name="submit" value="Submit" />
				<input type="reset" value="Hapus"></td>
            </div>
        </form>
<div style="margin-left: 25%">
			<?php
                if(isset($_POST['submit'])){
					$nm_karyawan = $_POST['nm_karyawan'];
                    $gaji_pokok = $_POST['gaji_pokok'];
                    $uang_lembur = $_POST['uang_lembur'];
                    $tunjangan = $_POST['tunjangan'];
					$hutang = $_POST['hutang'];
			
				//Rumus Perhitungan Gaji
				$gaji = $gaji_pokok + $uang_lembur + $tunjangan - $hutang;
				
					if ($gaji>=10000000) {
                        $status = "Karyawan Tetap";
                    } elseif ($gaji>=5000000) {
                        $status = "Karyawan Kontrak";
                    } else {
                        $status = "Karyawan Honor";
                    }
					
				//Hasil Perhitungan Gaji
                    echo "Nama Karyawan	: $nm_karyawan <br/> ";
					echo "Gaji Pokok   : $gaji_pokok <br/> ";
                    echo "Uang Lembur : $uang_lembur <br/>";
                    echo "Tunjangan : $tunjangan <br/>";
					echo "Hutang	: $hutang <br/>";
 
                    echo "Gaji Yang Di Peroleh Karyawan Adalah  <b>$gaji</b> <br/> ";
                    echo "Status : $status <br/>";
                }
            ?>
        </div>
    </body>
</html>
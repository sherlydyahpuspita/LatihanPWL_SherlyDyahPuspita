<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
			<th scope="col">NPM</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Mata Kuliah</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $no=1;
            $query=mysqli_query($connect, "SELECT*FROM mhs");
            while ($result=mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $result['nama_mahasiswa']; ?>
                        </td>
                        <td>
                            <?php echo $result['npm']; ?>
                        </td>
						<td>
                            <?php echo $result['jenis_kelamin']; ?>
                        </td>
                        <td>
                            <?php echo $result['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $result['matakuliah']; ?>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>
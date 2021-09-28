<html>
<center>
    <table border="4" cellpadding="4" cellspacing="20">
        <?php
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kode = $_POST['kode'];
        $matkul = $_POST['matkul'];
        $sks = $_POST['sks'];
        $kelas = $_POST['kelas'];
        $semester = $_POST['semester'];

        foreach($nama as $key => $val){
        ?>

        <tr>
            <td align="center" colspan="2">
                <?php
                echo '<b>DATA MAHASISWA</b><br>';
                ?>
            </td>
        </tr>
        <tr>
            <td><?php echo 'Nim'?></td>
            <td><?php echo $nim[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Nama'?></td>
            <td><?php echo $nama[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Kode'?></td>
            <td><?php echo $kode[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Matkul'?></td>
            <td><?php echo $matkul[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'SKS'?></td>
            <td><?php echo $sks[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Kelas'?></td>
            <td><?php echo $kelas[$key];?></td>
        </tr>
        <tr>
            <td><?php echo 'Semester'?></td>
            <td><?php echo $semester[$key];?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</center>
</html>
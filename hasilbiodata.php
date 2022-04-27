<!DOCTYPE html>
<center>
    <table border="1" cellpadding="2" cellspacing="4">
        <?php
        $nama= $_POST['nama'];
        $ttl=$_POST['ttl'];
        $jk= $_POST['jk'];
        $hobi= $_POST['hobi'];
        foreach ($nama as $key=> $val){
            ?>
            <tr>
                <td align="center" colspan="2">
                    <?php  echo '<b>Hasil Biodata</b><br>';?>
                   
                </td>
            </tr>
            <tr>
                <td ><?php  echo 'Nama'?></td>
                <td ><?php  echo $nama[$key];?></td>

            </tr>
            <tr>
                <td ><?php  echo 'Tempat Tanggal Lahir';?></td>
                <td ><?php  echo $ttl[$key];?></td>

            </tr>
            <tr>
                <td ><?php  echo 'Jenis Kelamin';?></td>
                <td ><?php  echo $jk;?></td>

            </tr>
            <tr>
                <td ><?php  echo 'Hobi';?></td>
                <td ><?php  echo $hobi[$key];?></td>

            </tr>
            <?php
        }
        ?>
    </table>
</center>
</html>


<!DOCTYPE html>
   
        <form action="hasilbiodata.php" method="post">
        <table  align="center" border="1" cellpadding="0" cellspacing="0">
        <tr align="center"><th>Masukkan Biodata Anda</th> </tr>
        
        <tr> 
            <td>

          <table width="400" align="center" border="0" cellpadding="0" cellspacing="5">
               
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama[]" size="40"></td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir</td>
                <td>:</td>
                <td><input type="text" name="ttl[]" size="40"></td>
            </tr>
            <tr>
                <td >Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="laki-laki"><label for="Laki">Laki-laki</label> 
                    <input type="radio" name="jk" value="perempuan"><label for="Perempuan">Perempuan</label> 
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="text" name="hobi[]" size="40"></td>
            </tr>
            <tr>
                <td colspan="4" align="center"><input type="submit" name="btnok" value="simpan"/></td>
            </tr>
        </table> 
</td>
</tr>
</table>
    </form>
    
</html>

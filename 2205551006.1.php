<!DOCTYPE html>
<html>
    <head>
        <title>Tugas Form Tool TI</title>
 
    </head>
    <body>
        <h2>Form Input Data Mahasiswa </h2>
         <form method="POST" action="2205551006.2.php">
            <table>
                <tr><td>NIM : </td><td><input type="text" name="nim"></td></tr>
                <tr><td>Nama :</td><td><input type="text" name="nama"></td></tr>
                <tr><td>Jenis Kelamin</td><td>
                        <input type="radio" name="jenis_kelamin" value="L" checked>Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
                
            <!--Tanggal Lahir -->
            <tr>
              <td>Tanggal Lahir :</td>
              <td><select name="tgl" size="1" id="tgl">
            <?php
             for ($i=1;$i<=31;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
             
            </select>
                <select name="bln" size="1" id="bln">
            <?php
             $bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
             for ($i=1;$i<=12;$i++)
             {
               echo "<option value=".$i.">".$bulan[$i]."</option>";
             }
            ?>            
            </select>
             
            <select name="thn" size="1" id="thn">
            <?php
             for ($i=1980;$i<=2007;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
              </select></td>
            </tr>
          
                <tr><td>Hobby</td><td>
                        <input type="checkbox" name="hobby" value="Sepakbola">Sepakbola
                        <input type="checkbox" name="hobby" value="Bulu_tangkis">Bulu Tangkis
                        <input type="checkbox" name="hobby" value="Membaca">Membaca
                    </td></tr>
                <tr><td>Tempat Lahir :</td><td><input type="text" name="tmptlahir"></td></tr>
                <tr><td>Jurusan :</td><td>
                        <select name="jurusan">
                            <option value="Teknik Sipil">Teknik Sipil</option>
                            <option value="Arsitektur">Arsitektur</option>
                            <option value="Teknik Mesin">Teknik Mesin</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                            <option value="Teknologi Informasi">Teknologi Informasi</option>
                            <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                        </select>
                    </td></tr>
            <tr><td>Tahun Masuk :</td><td>
            <select name="thnmsk" size="1" id="thnmsk">
            <?php
             for ($i=2000;$i<=2022;$i++)
             {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
            </td></tr>
 
            <tr><td colspan="2"><button type="submit" value="simpan">Submit</button></td></tr>
            </table>
        </form>
     </body>
</html>
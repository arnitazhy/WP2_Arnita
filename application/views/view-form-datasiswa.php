<html>

<head>
    <title>Form Input Data Siswa</title>
</head>

<body>
    <center>
        <form    action="<?=    base_url('Datasiswa/cetak');     ?>"
method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Data Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="NIS" id="NIS">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <input type="text" name="Kelas" id="Kelas">
                </td>
            </tr>
            <tr>    
                <th>Tempat Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="Tempat Lahir" id="Tempat Lahir">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="Tanggal Lahir" id="Tanggal Lahir">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="Alamat" id="Alamat">
                </td>
            </tr>
            <tr>
                <th>JenisKelamin</th>
                <td>:</td>
                <td>
                    <input type="radio" name="Jenis kelamin" value="Laki-laki"> Laki-laki<br> 
                    <input type="radio" name="Jenis kelamin" value="Perempuan"> Perempuan<br>
                </td>    
            </tr>
            <tr>
                <th></th>
                <td>:</td>
                <td>
                    <select name="Agama" id="Agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                        <option value="khonghucu">khonghucu</option>
                        
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="6" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
 </center>
</body>

</html>

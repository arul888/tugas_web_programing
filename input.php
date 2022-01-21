<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3> FORM SISWA </h3>
    <form method="post" action="proses.php">
    <table>
        <tr>
            <td>ID SISWA</td>
            <td><input type="text" name="id"></td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td><input type="text" nama="nama"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <input type="radio" name="jeniskelamin" value="pria">pria
                <input type="radio" name="jeniskelamin" value="perempuan">perempuan 
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td><input type="text" name="hobi"></td>
        </tr>
        <tr>
            <td><input type="submit" value="save" name="proses" ></td>
        </tr>
    </table>
    </form>
    
</body>
</html>
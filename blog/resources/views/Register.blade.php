<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Register" method="post">
        @csrf
        <table>
            <tr>
                <th>Nama Depan</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_depan">
                </td>
            </tr>
            <tr>
                <th>Nama Belakang</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_belakang">
                </td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_lahir">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                    <select name="jenis_kelamin" id="">
                        <option value="" disabled selected>-Pilih-</option>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit">Register</button>
    </form>
</body>
</html>

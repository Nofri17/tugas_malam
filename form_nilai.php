<!DOCTYPE html>
<html>

<head>
    <title>Form Nilai</title>
</head>

<body>
    <form method="POST" action="nilai.php">
        <table>
            <tr>
                <td>Nama</td>
                <td>: <input type="text" name="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Nilai Absen</td>
                <td>: <input type="number" name="nilai_absen"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td>: <input type="number" name="nilai_uts"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td>: <input type="number" name="nilai_uas"></td>
            </tr>
        </table>
        <button type="submit">Submit</button>
    </form>
</body>

</html>

<?php

$nama = "";
$NIM = "";
$Jurusan = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $NIM = $_GET['nim'] ?? "";
    $nama = $_GET['nama'] ?? "";
    $Jurusan = $_GET['jurusan'] ?? "";
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Form GET</title>
</head>
<body>

    <h1>Praktikum Form GET</h1>
    <hr>

    <table style="width: 100%;">
        <tbody>
            <tr>
                <th width="200" style="text-align: left;">NIM</th>
                <td width="10">:</td>
                <td>
                    <?php echo htmlspecialchars($NIM); ?>
                </td>
            </tr>

            <tr>
                <th width="200" style="text-align: left;">Nama</th>
                <td width="10">:</td>
                <td>
                    <?php echo htmlspecialchars($nama); ?>
                </td>
            </tr>

            <tr>
                <th width="200" style="text-align: left;">Jurusan</th>
                <td width="10">:</td>
                <td>
                    <?php echo htmlspecialchars($Jurusan); ?>
                </td>
            </tr>
        </tbody>
    </table>

    <hr>

    <!-- Form Data -->
    <h2>Form Data</h2>

    <form action="" method="get">

        <p style="margin: 0px;">NIM</p>
        <input type="number" name="nim" id="nim">
        <br>

        <p style="margin: 0px;">NAMA</p>
        <input type="text" name="nama" id="nama">
        <br>

        <p style="margin: 0px;">JURUSAN</p>
        <select name="jurusan" id="jurusan">
            <option value="">Pilih Jurusan</option>
            <option value="TI">TI</option>
            <option value="RSK">RSK</option>
            <option value="BD">BD</option>
            <option value="DKV">DKV</option>
        </select>

        <hr>

        <button type="submit">Simpan Data</button>

    </form>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6701170137</title>
</head>
<body>
    <form action="class.php" method="post">
        Masukan NIM <input type="text" name="nim"><br>
        Masukan Nama<input type="text" name="nama"><br>
        Masukan Kelas
        <select name="kelas">
            <option value="D3MI-41-01">D3MI-41-01</option>
            <option value="D3MI-41-02">D3MI-41-02</option>
            <option value="D3MI-41-03">D3MI-41-03</option>
            <option value="D3MI-41-04">D3MI-41-04</option>
        </select><br>
        Pilih Operasi
        <select name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
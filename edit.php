<?php 
require_once 'class.php';
$k = new Kalkulator();
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="class.php?update=true" method="post">
    	<?php 
    	$d = mysqli_fetch_array($k->bagi($id));
    	?>
    	<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        Masukan NIM <input type="text" name="nim" value="<?php echo $d['nim']; ?>"><br>
        Masukan Nama<input type="text" name="nama" value="<?php echo $d['nama']; ?>"><br>
        Masukan Kelas
        <select name="kelas">
            <option value="D3MI-41-01" <?php echo $d['nim'] == 'D3MI-41-01' ? 'checked' : ''; ?>>D3MI-41-01</option>
            <option value="D3MI-41-02" <?php echo $d['nim'] == 'D3MI-41-02' ? 'checked' : ''; ?>>D3MI-41-02</option>
            <option value="D3MI-41-03" <?php echo $d['nim'] == 'D3MI-41-03' ? 'checked' : ''; ?>>D3MI-41-03</option>
            <option value="D3MI-41-04" <?php echo $d['nim'] == 'D3MI-41-04' ? 'checked' : ''; ?>>D3MI-41-04</option>
        </select>
        <br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
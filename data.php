<table border=1>
    <thead>
        <th>Nama</th>
        <th>Nim</th>
        <th>Kelas</th>
        <th>Aksi</th>
    </thead>
    <tbody>
<?php
require_once 'class.php';
$kalkulator = new Kalkulator();
$result = $kalkulator->bagi();
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $nim = $row['nim'];
        $id = $row['id'];
        echo "<tr>";
        echo "<td>" . $row["nama"]. "</td>"; 
        echo "<td>" . $row["nim"]. "</td>";
        echo "<td>" . $row["kelas"]. "</td>";
        echo "<td>
            <a href='edit.php?id=$id'>Edit</a> | <a href='class.php?delete=true&id=$id' onclick='return confirm(\'Apakah Anda Yakin?\');'>Delete</a>
            
            </td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}
mysqli_close($kalkulator->db_connection());
?> 
    </tbody>
</table>
<?php
class Kalkulator{
    private $conn;

    public function Kalkulator(){
        $servername = "localhost";
        $username   = "root";
        $password   = "";
        $db         = "ilham_webdas_ewaw";       
        $this->conn = mysqli_connect($servername, $username, 
                           $password, $db);                        
    }    

    public function db_connection(){
        return $this->conn;
    }

    public function tambah(){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $sql    = "INSERT INTO siswa(nim, nama, kelas) 
                    VALUES ('$nim','$nama','$kelas')";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            header('location: data.php');
        }     
    }    
    public function kurang($id){        
        $id = $_GET['id'];
        $sql    = "DELETE FROM siswa WHERE id='$id'";        
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            header('location: data.php');
        }     
    }
    public function bagi($id = null){
        if (isset($id)) {
            $sql    = "SELECT * FROM siswa WHERE id='$id'";
        } else {
            $sql    = "SELECT * FROM siswa";
        }
        return mysqli_query($this->conn, $sql);
    }
    public function update($id,$nim,$nama,$kelas){
        $sql ="UPDATE `siswa` 
                SET `nim`='$nim',
                    `nama`='$nama',
                    `kelas`='$kelas' 
                WHERE id='$id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            header('location: data.php');
        }     
    }
}
$kalkulator = new Kalkulator();
if (isset($_POST["operasi"])) {
    $operasi = $_POST["operasi"];
    if($operasi == "+")
        $kalkulator->tambah();
    if($operasi == "-")
        $kalkulator->kurang();
    if($operasi == "/"){
        header("location: data.php");
    }
}
if(isset($_GET['update'])){
    if ($_GET['update'] == 'true') {
        $id = $_POST['id'];
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $kalkulator->update($id,$nim,$nama,$kelas);
    }
}
if(isset($_GET['delete'])){
    if ($_GET['delete'] == 'true') {
        $id = $_GET['id'];
        $kalkulator->kurang($id);
    }
}
?>

<?php
    class Diskon {
        private $db;
        private static $instance = null;
    
        // Konstruktor untuk menginisialisasi kon
    public function __construct($db_conn) {   
        $this->db = $db_conn;
    }

     // Mengambil instance dari kelas Kategori(Singleton)
    public static function getInstance($pdo) { 
        if (self::$instance == null) {
            self::$instance = new Diskon($pdo);
            // echo "Koneksi klas berhasil!";
        }
        return self::$instance;
    }

    

    //menambah kan data play

public function tambah($nama_diskon, $foto, $nomor) {
    try {
        $stmt = $this->db->prepare("INSERT INTO diskon (nama_diskon, foto, nomor) VALUES (:nama_diskon, :foto, :nomor)");

    $stmt->bindParam(":nama_diskon", $nama_diskon);
    $stmt->bindParam(":foto", $foto);
    $stmt->bindParam(":nomor", $nomor);
     $stmt->execute();
    return true;
} catch (PDOException $e) {
    echo $e->getMessage();
    return false;
    }
} 
    public function getID($id_diskon) {
        try {
            $stmt = $this->db->prepare("SELECT * FROM diskon WHERE id_diskon = :id_diskon");
            $stmt->execute(array(":id_kategori" => $id_diskon));
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch (PDOException $error) {
            echo $error-> getMessage();
            return false;
        }
    }

    // memperbarui data play
  

    //operasi hapus data anggota play
    // public function hapus($id_diskon) {
    //     try {
    //         $stmt = $this->db->prepare("DELETE FROM diskon WHERE id_diskon = :id_diskon");
    //         $stmt->bindParam(":id_diskon", $id_diskon);
    //         $stmt->execute();
    //         return true;
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return false;
    //     }
    // } 


    public function hapus($id_diskon) {
        try {
            // Ambil nama file gambar dari database
            $stmt = $this->db->prepare("SELECT foto FROM diskon WHERE id_diskon = :id_diskon");
            $stmt->bindParam(":id_diskon", $id_diskon);
            $stmt->execute();
            $diskon_info = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Hapus data dari database
            $stmt = $this->db->prepare("DELETE FROM diskon WHERE id_diskon = :id_diskon");
            $stmt->bindParam(":id_diskon", $id_diskon);
            $stmt->execute();
    
            // Hapus file gambar jika ada
            if ($diskon_info && !empty($diskon_info['foto'])) {
                $file_gambar = '../uploads/' . $diskon_info['foto'];
                if (file_exists($file_gambar)) {
                    unlink($file_gambar); // Menghapus file gambar
                }
            }
    
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
    

    // operasi get all anggota play
    public function getAll() {
        try {
            $stmt = $this->db->prepare("SELECT * FROM diskon");
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);  // mengambil semua baris hasil dari query
            return $data;
        } catch (PDOException $error) {
            echo $error->getMessage();
            return false;
        }
    }

}

?>
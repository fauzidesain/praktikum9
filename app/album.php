<?php
namespace App;
class album extends koneksi{

    public function __construct()
    {
        parent::__construct();   
    }
    public function tampil(){
        $sql = "SELECT * FROM album";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;

        }

        return $data;   
    }

    public function input(){
        $i_album_name = $_POST['i_album_name'];
        $i_keterangan = $_POST['i_keterangan'];
        $i_id_photo = $_POST['i_id_photo'];
        

        $sql = "INSERT INTO album VALUES (NULL, :album_name, :keterangan, :photo_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":album_name", $i_album_name);
        $stmt->bindparam(":keterangan", $i_keterangan);
        $stmt->bindparam(":photo_id", $i_id_photo);
        $stmt->execute();  
    }

}
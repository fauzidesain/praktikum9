<?php
namespace App;
class photo extends koneksi{

    public function __construct()
    {
        parent::__construct();   
    }
    public function tampil(){
        $sql = "SELECT * FROM photos";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;

        }

        return $data;   
    }

    public function input(){
        $i_tanggal = $_POST['i_tanggal'];
        $i_judul = $_POST['i_judul'];
        $i_keterangan = $_POST['i_keterangan'];
        $i_id_post = $_POST['i_id_post'];
      

        $sql = "INSERT INTO photos VALUES (NULL, :tanggal, :title, :keterangan, :post_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":tanggal", $i_tanggal);
        $stmt->bindparam(":title", $i_judul);
        $stmt->bindparam(":keterangan", $i_keterangan);
        $stmt->bindparam(":post_id", $i_id_post);
        $stmt->execute();  
    }

    // public function input(){
    //     $i_tanggal = $_POST['i_tanggal'];
    //     $i_judul = $_POST['i_judul'];
    //     $i_keterangan = $_POST['i_keterangan'];
    //     $i_id_post = $_POST['i_id_post'];
        

    //     $sql = "INSERT INTO photos VALUES (NULL, :tanggal, :title, :keterangan, :post_id)";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->bindparam(":tanggal", $i_date);
    //     $stmt->bindparam(":title", $i_title);
    //     $stmt->bindparam(":text", $i_keterangan);
    //     $stmt->bindparam(":post_id", $i_post_id);
    //     $stmt->execute();  
    // }

}
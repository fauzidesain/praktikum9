<?php
namespace App;
class post extends koneksi{

    public function __construct()
    {
        parent::__construct();   
    }
    public function tampil(){
        $sql = "SELECT * FROM post";
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
        $i_slug = $_POST['i_slug'];
        $i_judul = $_POST['i_judul'];
        $i_keterangan = $_POST['i_keterangan'];
        $i_id_category = $_POST['i_id_category'];
      

        $sql = "INSERT INTO post VALUES (NULL, :tanggal, :slug, :title, :keterangan, :cat_id)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":tanggal", $i_tanggal);
        $stmt->bindparam(":slug", $i_slug);
        $stmt->bindparam(":title", $i_judul);
        $stmt->bindparam(":keterangan", $i_keterangan);
        $stmt->bindparam(":cat_id", $i_id_category);
        $stmt->execute();  
    }

    // public function input(){
    //     $i_tanggal = $_POST['i_tanggal'];
    //     $i_slug = $_POST['i_slug'];
    //     $i_judul = $_POST['i_judul'];
    //     $i_keterangan = $_POST['i_keterangan'];
    //     $i_id_category = $_POST['i_id_category'];
        

    //     $sql = "INSERT INTO post VALUES (NULL, :tanggal, :slug, :title, :keterangan, :cat_id )";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->bindparam(":tanggal", $i_tanggal);
    //     $stmt->bindparam(":slug", $i_slug);
    //     $stmt->bindparam(":title", $i_judul);
    //     $stmt->bindparam(":keterangan", $keterangan);
    //     $stmt->bindparam(":cat_id", $i_id_category);
    //     $stmt->execute();  
    // }
}
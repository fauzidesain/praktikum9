<?php
namespace App;
class category extends koneksi{

    public function __construct()
    {
        parent::__construct();   
    }
    public function tampil(){
        $sql = "SELECT * FROM category";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];
        while ($rows = $stmt->fetch()) {
            $data[] = $rows;

        }

        return $data;   
    }

    public function input(){
        $i_name = $_POST['i_name'];
        $i_text = $_POST['i_text'];
        

        $sql = "INSERT INTO category VALUES (NULL, :name, :text)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(":name", $i_name);
        $stmt->bindparam(":text", $i_text);
        $stmt->execute();  
    }

    public function delete(){
        $id = $this->id;        

        $sql = "DELETE FROM category where id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();  
    }   

    

}
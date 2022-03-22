<?php
require_once 'Konektor.php';
class Peserta {
    private $email, $nama;
    
    public function add(){
        $pdo = Konektor::getKonektor();
        $sql = "INSERT into peserta VALUES (?,?)";
        $pdo->prepare($sql)->execute([$this->email,$this->nama]);
    }      
    public function get($email){}
    public function save(){}
    public function delete(){}
    public static function getAll(){}

    public function getEmail(){
        return $this->email;
    }
    public function getNama(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
}

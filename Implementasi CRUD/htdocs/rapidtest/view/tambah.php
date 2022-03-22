<?php
require_once 'model/Peserta.php';

if(adaPermintaanProsesTambah()){
    $peserta = new Peserta($_POST['email'],$_POST['nama']);
    $peserta->add();
} else {
    tampilkanFormulirTambahPeserta();
}

function adaPermintaanProsesTambah(){
    if(isset($_POST['email']) && isset($_POST['nama'])){
        return true;
    } else return false;
}

function tampilkanFormulirTambahPeserta(){
    require_once 'view-tambah-peserta.hmtl';
}

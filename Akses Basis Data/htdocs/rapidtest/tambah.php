<?php
require_once 'Peserta.php';

if(isset($_POST['email']) && isset($_POST['nama'])){
    $peserta = new Peserta();
    $peserta->setEmail($_POST['email']);
    $peserta->setNama($_POST['nama']);
    $peserta->add();
}
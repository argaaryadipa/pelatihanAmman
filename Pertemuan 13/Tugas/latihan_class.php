<?php

class Orang {
    var $nama = "zoro";
    var $alamat = "east blue";
    var $umur = '21';

    function sayHello(?string $nama) {
        if (is_null($nama)) {
            echo "Hello, my name is $this->nama";
        } else {
            echo "Hello, my name is $nama bukan $this->nama";
        }
    }
}

$ini_object = new Orang();
// $ini_object->nama = 'luffy';

$ini_object->sayHello('luffy');

// $ini_object->alamat = 'east blue';
// $ini_object->umur = '19';

// echo "Nama : $ini_object->nama \n";
// echo "Alamat : $ini_object->alamat \n";
// echo "Umur : $ini_object->umur \n";

?>
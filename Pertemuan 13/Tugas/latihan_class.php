<?php

// class Orang {

// properties
//     var $nama = "zoro";
//     var $alamat = "east blue";
//     var $umur = '21';

//     function sayHello(?string $nama) {
//         if (is_null($nama)) {
//             echo "Hello, my name is $this->nama";
//         } else {
//             echo "Hello, my name is $nama bukan $this->nama";
//         }
//     }
// }

// $ini_object = new Orang();

// manupulasi properties
// $ini_object->nama = 'luffy';
// $ini_object->sayHello('luffy');
// $ini_object->alamat = 'east blue';
// $ini_object->umur = '19';

// echo "Nama : $ini_object->nama \n";
// echo "Alamat : $ini_object->alamat \n";
// echo "Umur : $ini_object->umur \n";

// CONSTRUCTOR
/*class Human {
    var $name = 'viola';
    var $address = 'spain';
    var $age = '29';

    public function __construct($name, $address, $age)
    {
        // this keyword, untuk mengakses properties atau function
        // di classs yang sama
        $this->name = $name;
        $this->address = $address;
        $this->age = $age;
    }

    function sayHola(?string $name) {
        if (is_null($name)) {
            echo "Hello, my name is $this->name";
        } else {
            echo "Hello, my name is $name, $this->name is not my name";
        }
    }
}

$ini_object = new Human('reiju', 'japan', '25');
$ini_object->sayHola('hancock');
*/

// INHERITANCE (PEWARISAN)
// class parent
/*
class Minuman {
    var $warna = "terang";
    var $rasa = "manis";
    var $aroma = "harum";

    function sayMinuman($rasa) {
        echo "ini minuman $rasa \n";
    }
}

// class child
class Jus extends Minuman {

}

$rasa = new Jus();
$rasa->sayMinuman('jus');
echo $rasa->aroma;
*/

// NAMESPACE
namespace Main\Beer {
    class Carlsburg {
        var $nama = "eren";
    }
}

namespace Main\Beer2 {
    class Carlsburg {
        var $nama = "yeager";
    }
}

namespace {
    use Main\Beer;
    use Main\Beer2;
    $get1 = new Beer\Carlsburg();
    $get2 = new Beer2\Carlsburg();
    echo "$get1->nama \n";
    echo "$get2->nama \n";
}

?>
<?php

require_once "data/klas.php";
require_once "data/helper.php";

// alias, untuk membuat nama lain dari function atau constant yang ada
use Main\Beer\Carlsburg as singa;
use Main\Ucapan\Say as ucap;

$tampil = new singa();
echo "$tampil->nama \n";

$tampil2 = new ucap();
echo $tampil2->sayHola();

?>
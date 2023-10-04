<?php

require_once "data/klas.php";
require_once "data/helper.php";

use Main\Beer\Carlsburg;
use Main\Ucapan\Say;

$tampil = new Carlsburg();
echo "$tampil->nama \n";

$tampil2 = new Say();
echo $tampil2->sayHola();

?>
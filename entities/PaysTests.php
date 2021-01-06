<?php

require_once 'Pays.php';
$ts = new Pays("200","tes", "Test");
echo $ts->getIdPays() . ":" . $ts->getNomPays();

$ts->setNomPays("TEST");
echo $ts->getIdPays() . ":" . $ts->getNomPays();

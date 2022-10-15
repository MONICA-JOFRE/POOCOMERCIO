<?php

    require_once ('Comercio.php');

    $comercio = new Comercio();
  
    $comercio->leer('comercio.json');

    echo $comercio->getJSON();


<?php
session_start();

include "entities/Membre.php";

include "model/ModelGenerique.php";

include "model/MembreModel.php";

include "controller/MembreController.php";

include "views/header.phtml";
include "views/home.phtml";

$membre = new MembreController();

$membre->membreAction();







include "views/footer.phtml";
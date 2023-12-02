<?php
require_once('function.php');
require_once('init.php');
deactivate_trener($con, $_SESSION['trener_id']);
header("Location: /olimpia/olimpia_website/profile.php");
die();
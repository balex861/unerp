<?php


$bd = new mysqli("localhost", "root", "Sinchrofazatron86","unerp");
if ($bd->connect_error) {
    die("Error bd: " . $bd->connect_error);
}


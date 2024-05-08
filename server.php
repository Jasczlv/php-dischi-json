<?php
$json_raw = file_get_contents(__DIR__ . "/dischi.json"); //restituisce una stringa
$json_decoded = json_decode($json_raw, true); //trasforma la stringa in variabile php

var_dump($json_decoded);
?>
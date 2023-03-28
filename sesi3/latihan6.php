<?php
    $mhs = array(
        array("Mulia" , "2201010385" , "Abiansemal"),
        array("Intan" , "2201010386" , "Abiansemal"),
        array("Zizi" , "11223344" , "Manado"),
        array("Ardika" , "22446688" , "Denpasar"),
    );
    header("content-Type: application/json");
    echo json_encode($mhs);
<?php
    //PHP Associative Array
    //model 1
    // $Age = array("peter" => "35" , "ben" =>"37" , "joe" =>"43");

    //header("content-Type: application/json");
    //echo json_encode($Age);
    

    //model 2
    $Age ['peter'] = "35";
    $Age ['ben'] = "37";
    $Age ['joe'] = "43";
    $Age ['Dahlia'] = "22";
    $Age ['Fizi'] = "20";

    header("content-Type: application/json");
    echo json_encode($Age);
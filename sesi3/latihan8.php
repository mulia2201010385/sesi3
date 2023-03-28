<?php
//fungsi dengan parameter

   echo "luas persegi panjang dengan nilai panjang 3 dan lebar 5 adalah " , hitungluas(3,5);

    function hitungluas($pj,$lb){
    //atau, function hitungluas($pj=3,$lb=5)
        return $pj*$lb;
    }


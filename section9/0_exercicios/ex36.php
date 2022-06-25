<?php 

    // $arr =[];

    // for($x = 0; $x <= 20; $x++){
    //     array_push($arr, $x);
    // }

    // function criandoarray(){
    //     global $arr;
    //     $x = 0;
    //     $arr[$x];
    //     $arrMaiorQueSete = [];

    //     if ($arr[$x] >= 7){
    //         for($a = 7; $a>=20; $a++){
    //             array_push($arrMaiorQueSete, $a);
    //         }
            
    //     }
    // }

    $arr =[];

    for($x = 0; $x <= 20; $x++){
        array_push($arr, $x);
    }

    function criandoarray($array){
        
        $newArr = [];

        for($a = 0; $a < count($array); $a++){
            if($array[$a] > 7){
                array_push($newArr, $array[$a]);
            }
        }

        return $newArr;
    }

    $doly = criandoarray($arr);
    // print_r($doly);
    print_r(implode(" - ", $doly));

?>
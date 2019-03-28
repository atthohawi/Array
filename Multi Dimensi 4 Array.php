<?php
$roti = array(
    "Roti buaya",
    "Roti pizza",
    "Roti sobek"=>array(
        "Coklat"=>array(
            "coklat susu"=>array("coklat vanila",
                       "coklat mocca", "coklat kopi"),
                        "coklat keju",
                        "coklat nanas"),       
        "keju",
        "strawberry",
        "blueberry"),
    "Roti kasur");
    
//echo "<pre>";print_r ($roti);
foreach ($roti["Roti sobek"]["Coklat"]["coklat susu"] as $val)
{
   echo "$val";
    echo "<br>";
}

?>
<?php

    function mypins() {

        //Declaring variable
        $pins = " ";
        
    for($i=1; $i <= 12; $i++){
     $num = rand (0,9);
     $pins = $pins . $num;
     $pins;
}
    print $pins."";
}

    //generating pins up to 200
    for ($x=0; $x<=199; $x++){
    mypins();
}

?>

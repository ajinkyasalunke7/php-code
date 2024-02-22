<?php
    $subjects = array("Maths"=>20,"Science"=>19,"English"=>20);

    // foreach($subjects as $key=>$value){
    //     echo $key." - ".$value;
    //     echo "<br/>";
    // }

    foreach ($subjects as $key=>$value):
        echo $key." - ".$value;
        echo "<br/>";
    endforeach;
?>
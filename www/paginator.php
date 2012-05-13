<?php
function paginate($elems, $elemsperpage , $pagenumber){
    $pagenumber = $pagenumber-1;
    $start =  $elemsperpage*$pagenumber;
    $j = 0;
    for($i = $start ; $i < $start+$elemsperpage; $i++)
    {
        $elemsforpage[$j] = $elems[$i];
        $j++;
    }
    /*for($i = 0; $i < $elemsperpage;$i++)              //Test output
    {
        echo $elemsforpage[$i];
    }*/
    return $elemsforpage;
}
?>

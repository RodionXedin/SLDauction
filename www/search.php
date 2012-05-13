<?php
 function search($searchstring, $category){

    mysql_connect("localhost","root","") OR DIE("Не могу создать соединение "); 
    mysql_select_db("SLDauct") or die(mysql_error());
    $search ="'%".$searchstring."%'";
    $query = "SELECT * FROM ITEMS where name like ".$search." or  description like ".$search." or manufacturer like ".$search;
    if($category) {
        $query = $query." and category_id=".$category;
    }
    $match = mysql_query($query.";");
    return $match;
}


    ?>
<?php 
    // imprime: mysql link
    $c = mysql_connect();
    echo get_resource_type($c) . "\n";
?>

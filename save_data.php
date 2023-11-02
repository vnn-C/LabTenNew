<?php
    $info = $_POST['fName']." ".$POST['lName'];
    $path = '';

    $file = fopen("../../names.txt", 'a');
    fclose($file);
?>
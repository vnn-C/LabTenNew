<?php
    $file = fopen("../../names.txt", 'r');
    $tableStart = "<table name=namesFromFile><tr><th>FirstName</th><th>LastName</th>";
    while(!feof($file)){
        $name = fgets($file);
        $splitNames = explode(',', $name);
        $nameRow = "<tr><td>" . $splitNames[0] . "</td><td>" . $splitNames[1] . "</td></tr>";
        $tableStart.=$nameRow;
    }

    $tableStart.="</table>";
    echo $tableStart;
?>
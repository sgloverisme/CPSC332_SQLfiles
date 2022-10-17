<?php

    $sql = "SELECY accountId FROM previousrental
    UNION
    SELECT accountId FROM customer;
    SELECT videoId FROM video 
    UNION
    SELECT videoId FROM perviousrental;";
    
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_row($result);
    print "<pre>";
    print "<table border=1>";
    print "<tr><td>Account id </td><td> Video id </td>"
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
    {
        print "<\n>";
        print "<tr><td>$row[accountid] </td><td> $row[videoid] </td><tr> ";
    }
    print "</table>";
    print "</pre>";
    mysqli_free_result($result);
    mysqli_close($link);
?>
</center>

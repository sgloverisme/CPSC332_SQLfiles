<?php

    $sql = "SELECY * FROM customerSELECT accountId, COUNT(*) as TOTALR
    FROM rental as r 
    GROUP BY accountId
    ORDER BY COUNT(*) DESC;";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_row($result);
    print "<pre>";
    print "<table border=1>";
    print "<tr><td>Account id </td><td> Video id </td>"
    while($row = mysqli_fetch_array($result, MYSQLI_BOTH))
    {
        print "\n";
        print "<tr><td>$row[accountid] </td><td> $row[videoid] </td><tr> ";
    }
    print "</table>";
    print "</pre>";
    mysqli_free_result($result);
    mysqli_close($link);
?>
</center>

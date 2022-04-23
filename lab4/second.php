<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){

        $itemcode = $_POST["itemcode"];

        $itemname = $_POST["itemname"];

        $unit = $_POST["unit"];

        $rate = $_POST["rate"];

        $icode = explode(",", $itemcode);

        $iname = explode(",", $itemname);

        $iunit = explode(",", $unit);

        $irate = explode(",", $rate);

        $z = count($icode);

        $tamt = 0;

        for ($i = 0; $i < $z; $i++) {
            $tamt += $iunit[$i] * $irate[$i];
        }

        echo "<table align=center border=1>";

        echo "<tr><td> <b>Item Code</b> </td><td> <b>Item Name</b>

        </td><td><b> Units Sold</b> </td><td> <b>Rate </b></td></tr>";

        for ($i = 0; $i < $z; $i++) {
            echo "<tr><td>" .
                $icode[$i] .
                "</td><td>" .
                $iname[$i] .
                "</td>

        <td>" .
                $iunit[$i] .
                "</td><td>" .
                $irate[$i] .
                "</td></tr>";
        }

        echo "<tr><th colspan=3>Total amount </th><td>" . $tamt . "</td></tr>";

        echo "</table>";
    }
}

?>

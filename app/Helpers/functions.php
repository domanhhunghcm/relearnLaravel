<?php
    function splitName($name)
    {
        $trimName=trim($name);
        $nameArray=explode(" ",$trimName);
        $first_name=$nameArray[0];
        $last_name=$nameArray[1];
        return array($first_name,$last_name);
    }
?>
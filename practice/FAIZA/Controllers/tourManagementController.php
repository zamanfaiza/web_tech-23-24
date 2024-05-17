<?php

require_once('../Models/Alldb.php');

function table_element_tourManagement()
{
    $res = get_tourManagement();
    return $res;
}

function table_element_tourManagement2()
{
    $res = get_tourManagement2();
    return $res;
}


function update_database($status, $tourname)
{
    $r = send_update($status, $tourname);
    return $r;
}

function get_details($tourname)
{
    $r = get_tourDetails($tourname);
    return $r;
}

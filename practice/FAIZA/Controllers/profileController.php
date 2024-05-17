<?php

    require_once('../Models/Alldb.php');

    function detailsRequest_profile($username)
    {
        $details = get_details_profile($username);
        return $details;
    }

function update_details_profile_send($username, $name, $email, $phone, $password, $image)
{
    $status = update_details_profile($username, $name, $email, $phone, $password, $image);
    return $status;
}









?>
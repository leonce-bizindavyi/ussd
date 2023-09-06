<?php

    // This is the first request. Note how we start the response with CON
    $response  = "CON What would you want to check \n";
    $response .= "1. My Account \n";
    $response .= "2. My phone number";

    // Echo the response back to the API
    header('Content-type: text/plain');
    echo $response;
?>
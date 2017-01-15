<?php

    $nu = 39241555116;

    /*
        Turkish Identification Number Validator from Republic of Turkey's Ministry of Interior Database in PHP (thanks to SoapClient)
        Written by Batuhan Kök
        Blog: http://batuhan.me | GitHub: http://github.com/batuhankok | Twitter: http://twitter.com/batuhankok
    */

    // Require the function
    require_once 'tur_id_validator.php';

    $data = array(
        "ide_number" => $nu,         // I SET TRUE NUMBER...
        "name" => "BATUHAN",         // Name (must be uppercase)
        "surname" => "KÖK",          // Surname (must be uppercase)
        "birth_year" => 1995         // Birth year (must be 4 integer)
    );

    $response = TUR_ID_VALIDATE( $data );

    if( $response == 1 )
    {
        
        echo 'Turkish Identification Number is <b>true.</b>';
        
    }
    else
    {

        echo 'Turkish Identification Number is <b>false.</b>';
        //echo '<b>False Turkish Identification Number:</b> ' . mb_substr($response, 0, 36, 'UTF-8') . '...';
        
    }

?>
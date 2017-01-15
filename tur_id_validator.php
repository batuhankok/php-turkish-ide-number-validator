<?php

    header('Content-type: text/html; charset=utf-8');

    /*
        Turkish Identification Number Validator from Republic of Turkey's Ministry of Interior Database in PHP (thanks to SoapClient)
        Written by Batuhan Kök
        Blog: http://batuhan.me | GitHub: http://github.com/batuhankok | Twitter: http://twitter.com/batuhankok
    */

    function TUR_ID_VALIDATE( $data )
    {

        // Client address
        $client = new SoapClient("https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL");

        try
        {

            $requestData = array(
                "TCKimlikNo" => $data["ide_number"],
                "Ad" => $data["name"],
                "Soyad" => $data["surname"],
                "DogumYili" => $data["birth_year"]
            );

            // Send data
            $result = $client->TCKimlikNoDogrula($requestData);

            return $result->TCKimlikNoDogrulaResult;

        }
        catch (Exception $er)
        {

            // Error exeption
            return $er->faultstring;

        }

    }

?>
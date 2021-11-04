<?php
    require_once 'vendor/autoload.php';

    // init configuration
    $clientID = '1066254931752-mg263ihn8tp9vdpumqlsjh7k8tok3a39.apps.googleusercontent.com';
    $clientSecret = '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';
    $redirectUri = 'https://localhost/dwes21/Tema-5/Ejercicio_1/oauth-google/google-callback.php';
    
    // create Client Request to access Google API
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);

    // autorizaciones a recursos
    $client->addScope("email");
    $client->addScope("profile");

?>
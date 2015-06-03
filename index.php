<?php

    include("TwitterAPIExchange.php");

    echo "hey!!"; 

    $settings = array(
    'oauth_access_token' => "3119249945-B5jLZ6XTy3PmsnV7P0VdZNhyJSF2l6FOa9vYqjg",
    'oauth_access_token_secret' => "ECOGrJyLmzwiCkpoNCHElLKCMLF5y1dAeoDPaIR9xfqBv",
    'consumer_key' => "YDoLxlgPhnntM4q1PzdpVDLWy",
    'consumer_secret' => "RKDiT47nYLQseL00sJeJ15rEKWINm7sfIOzPKuczRK0X4H3SfK");
    
    /* Recurso del API que queremos consultar */
    $url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
    $variablesGet = '?screen_name=mundogister';
    $requestMethod = 'GET';

    $twitter = new TwitterAPIExchange($settings);
    echo $twitter->setGetfield($variablesGet)
        ->buildOauth($url, $requestMethod)
        ->performRequest();

?>

<?php

$access_token = '17849209550.f42097a.3f2944c35a654453999a42c474389de6';
$user_search = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/self?access_token=" . $access_token);

//$user_id = $user_search->data[0]->id; // or use string 'self' to get your own media
//$return = rudr_instagram_api_curl_connect("https://api.instagram.com/v1/users/" . $user_id . "/media/recent?access_token=" . $access_token);

//var_dump( $return ); // if you want to display everything the function returns

//foreach ($return->data as $post) {
//    echo '<a href="' . $post->images->standard_resolution->url . '"><img src="' . $post->images->thumbnail->url . '" /></a>';/
//}
echo $user_search;


function rudr_instagram_api_curl_connect( $api_url ){
    $connection_c = curl_init(); // initializing
    curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
    curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
    curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
    $json_return = curl_exec( $connection_c ); // connect and get json data
    curl_close( $connection_c ); // close connection
    return json_decode( $json_return ); // decode and return
}
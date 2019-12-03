<?php

if($method === 'POST') {
    
   if($route === '/login') {
    $request = json_decode(file_get_contents('php://input'),true);
    valid($request);
  
    $isValid = valid($request);
    var_dump($isValid);
    
    if ($isValid) {
    $response = [
        'result' => true,
        'message' => 'registration successful, go to login',
    ];
    echo json_encode($response);
 } else {
    $response = [
        'result' => false,
        'message' => $isValid,
    ];
    echo json_encode($response);
 }
}
}

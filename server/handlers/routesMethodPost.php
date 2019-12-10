<?php

if($method === 'POST') {
    
   if($route === '/login') {
    $request = json_decode(file_get_contents('php://input'),true);
    valid($request);
  
    $isValid = valid($request);
    
    if ($isValid) {
    $responseSuccess = [
        'result' => true,
        'message' => 'registration successful, go to login',
    ];
    $responseFail = [
        'result' => false,
        'message' => 'email or phone already exists',
    ];
    
    $request['age'] = 18;
    $isSave = addUser($request);
    if ($isSave) {
        echo json_decode($responseSuccess);
    } else {
        echo json_decode($responseFail);
    }

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

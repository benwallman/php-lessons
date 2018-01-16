<?php
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == 'GET') {
        $data = $_GET['number'];
        $data = (int)$data;
        switch($data) {
            case ($data % 15 == 0):
                $response = 'FizzBuzz';
                break;
            case ($data % 3 == 0):
                $response = 'Fizz';
                break;
            case ($data % 5 == 0):
                $response = 'Buzz';
                break;
            default:
                $response = $data;
                break;
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        http_response_code(404);
    }
?>

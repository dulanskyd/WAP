<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $data = json_decode(file_get_contents('php://input'), true);

  if (isset($data['num1']) && isset($data['num2']) && isset($data['op'])) {

    switch ($data['op']) {
      case 'add':
        $result = $data['num1'] + $data['num2'];
        break;
      case 'sub':
        $result = $data['num1'] - $data['num2'];
        break;
      case 'mul':
        $result = $data['num1'] * $data['num2'];
        break;
      case 'div':
        $result = $data['num1'] / $data['num2'];
        break;
      default:
        http_response_code(400);
        echo json_encode(array('error' => 'Invalid operator'));
        exit();
    }

    http_response_code(200);
    echo json_encode(array('result' => $result));
  } else {

    http_response_code(400);
    echo json_encode(array('error' => 'Invalid request'));
  }
} else {

  http_response_code(405);
  echo json_encode(array('error' => 'Method not allowed'));
}

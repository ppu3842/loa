<?php
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode(array('result' => true, 'msg' => $_REQUEST['msg']));
?>
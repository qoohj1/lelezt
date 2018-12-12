<?php
function jsonReturn($error ,$info = null ,$data = null){
    $callback = isset($_REQUEST['callback'])? $_REQUEST['callback'] : '';
    $callback = htmlspecialchars($callback);

    header('Content-Type:text/json');
    echo $callback.json_encode(array('error' => $error ,'info' => $info ,'data' => $data));

    die();
}




?>

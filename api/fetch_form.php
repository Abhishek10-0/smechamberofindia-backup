<?php

include '../config.php';

class API {
function Select(){
$db = new Connect;
$forms = array();

$data = $db->prepare('SELECT * FROM forms ORDER BY id');
$data->execute();
while($OutputData = $data->fetch(PDO:: FETCH_ASSOC)){
$forms [$OutputData['id']] = array(

'id' => $OutputData['id'],
'f_name' => $OutputData['f_name'],
'l_name' => $OutputData['l_name']
);
}
return json_encode($forms);
}
}
$API = new API;
header('Content-Type: application/json');
echo $API->Select();
?>
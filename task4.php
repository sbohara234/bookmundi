<?php
$id=$_POST['id'];
$value=$_POST['value'];

$data=[];

if (!is_int($id)) {
	// code...
	$data ['error'] = true;
    $data['status_code'] = 403;
    $data ['message'] []= "Please enter Numeric value for ID";
}


if (!is_string($value)) {
	// code...
	$data ['error'] = true;
    $data['status_code'] = 403;
    $data ['message'][] = "Please enter String value for Value";
}
if(!is_set($data ['error'] ))
{

try {
                save_Data();
                $data ['error'] = false;
                $data['status_code'] = 200;
                $data ['message'] = "Data created successfully";
 } catch (\Throwable $t) {

            $data['error'] = true;
            $data['message'] = "failed";
            $data['exception_msg'] = "Some MSG";

        }
}
        return json_encode($data);

?>
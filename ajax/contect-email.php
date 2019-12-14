<?php 
require_once("../Config.php");
require_once('../system/Database.php');
function loadModelAjax($name)
{
    $name=ucfirst(strtolower($name));//đầu là chữ hoa mà sau là chữ thường
    $pathModel='../models/'.$name.'.php';
    if (file_exists($pathModel)) 
    {
        include($pathModel);
        $modelclass=new $name;
        return $modelclass;
    }       
    else
    {
        return NULL;
    }
}   
$contact= loadModelAjax('contact');
$email=$_POST['input'];
if(isset($email))
{
    if($email=="")
    {
    	$err['msg'] = 'Cần nhập vào thông tin';
		$err['success'] = false;
    }elseif ($contact->contact_list($email) !=0) {
    	$err['msg'] = 'Email đã tồn tại';
		$err['success'] = false;
    }
    elseif(!filter_var($_POST['input'],FILTER_VALIDATE_EMAIL))
    {
        $err['msg'] = 'Email không chính xác';
			$err['success'] = false;
    }
    else
    {
        $data =array(
        'contact_fullname'=>"Không xác định",
        'contact_email'=>$_POST['input'],
        'contact_phone'=>"Không xác định",
        'contact_gender'=>"Không xác định",
        'contact_createdat'=>date('Y-m-d H:i:s'),
        'contact_updatedat'=>date('Y-m-d H:i:s'),
        'contact_updatedby'=>1,
        'contact_status'=>1
        );
        $contact->contact_insert($data);
        $err['msg'] = '<div class="swal2-container swal2-center swal2-fade swal2-shown" id="form-err-customer" style="overflow-y: auto;"><div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show" tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display: flex;"><div class="swal2-header"><ul class="swal2-progress-steps" style="display: none;"></ul><div class="swal2-icon swal2-error swal2-animate-error-icon" style="display: flex;"><span class="swal2-x-mark"><span class="swal2-x-mark-line-left"></span><span class="swal2-x-mark-line-right"></span></span></div><div class="swal2-icon swal2-question" style="display: none;"></div><div class="swal2-icon swal2-warning" style="display: none;"></div><div class="swal2-icon swal2-info" style="display: none;"></div><div class="swal2-icon swal2-success" style="display: none;"><div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div><span class="swal2-success-line-tip"></span> <span class="swal2-success-line-long"></span><div class="swal2-success-ring"></div> <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div><div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div></div><img class="swal2-image" style="display: none;"><h2 class="swal2-title" id="swal2-title" style="display: none;"></h2><button type="button" class="swal2-close" aria-label="Close this dialog" style="display: flex;">×</button></div><div class="swal2-content"><div id="swal2-content" style="display: block;">Email đăng ký không hợp lệ! <br></div><input class="swal2-input" style="display: none;"><input type="file" class="swal2-file" style="display: none;"><div class="swal2-range" style="display: none;"><input type="range"><output></output></div><select class="swal2-select" style="display: none;"></select><div class="swal2-radio" style="display: none;"></div><label for="swal2-checkbox" class="swal2-checkbox" style="display: none;"><input type="checkbox"><span class="swal2-label"></span></label><textarea class="swal2-textarea" style="display: none;"></textarea><div class="swal2-validation-message" id="swal2-validation-message" style="display: none;"></div></div><div class="swal2-actions" style="display: flex;"><button type="button" class="swal2-confirm swal2-styled" aria-label="" style="display: inline-block; border-left-color: rgb(48, 133, 214); border-right-color: rgb(48, 133, 214);">OK</button><button type="button" class="swal2-cancel swal2-styled" aria-label="" style="display: inline-block;">Cancel</button></div><div class="swal2-footer" style="display: none;"></div></div></div>';
		$err['success'] = true;


    }
    echo json_encode($err,true);
    die();
}
 ?>
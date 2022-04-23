<?php
include("vocon.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["submit"])){
		

		$str1 = $_POST['string'];
		$check = $_POST["check"];

		if($check=="1"){
			vowel($str1);
		}

		else if($check=="2"){
			palindrome($str1);
		}
		else{
			echo "Error";
		}
	}
}


?>
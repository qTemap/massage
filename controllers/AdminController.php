<?php 

	include_once ROOT.'/models/Login.php';

	class AdminController
	{

		public function actionLogin()
		{
			if(isset($_POST['login'])){
				$user = Login::AdminLogin($_POST['login']);		
				return $user;		
			}

			if(isset($_POST['password'])) {
				$password = Login::AdminPassword($_POST['password']);	
				return $password;
			}

			

			require_once(ROOT.'/views/admin/login.php');

			return true;
		}
	}







?>
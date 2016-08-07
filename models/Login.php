<?php 

	class Login
	{

		public function AdminLogin($login)
		{
			$result = DB :: $dbh->queryFetch('SELECT * FROM `admin` ');
			if($login == $result['login']) {
				echo "Login";
			} else {
				echo "Error";
			}
		}

		public function SetUserCookie($password)
		{
			$password = md5($password);
			setcookie("name", $password, time()+3600);
		}

		public function AdminPassword($password)
		{
			$result = DB :: $dbh->queryFetch('SELECT * FROM admin ');
			if($password == $result['password']) {
				self::SetUserCookie($password);
				echo "Password";
			} else {
				echo "Error";
			}
		}

	} 







?>
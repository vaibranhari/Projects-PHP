<?php 
	use Google\Client as GoogleClient;
	use Google\Service\Oauth2;
	class Home extends CI_Controller{
		
		public function index(){
			$this->load->view('login');
		}

		public function google_login(){
			$client = new GoogleClient();
			$client->setApplicationName('SET YOUR APPLICATION NAME');
			$client->setClientId('SET YOUR CLIENT ID');
			$client->setClientSecret('SET YOUR CLIENT SECRET');
			$client->setRedirectUri('http://localhost/Google/home/google_login');
			$client->addScope(['https://www.googleapis.com/auth/userinfo.email','https://www.googleapis.com/auth/userinfo.profile']);
			if($code = $this->input->get('code')){
				$token = $client->fetchAccessTokenWithAuthCode($code);
				$client->setAccessToken($token);
				$oauth = new Oauth2($client);
				
				$user_info = $oauth->userinfo->get();
				$data['name'] = $user_info->name;
				$data['email'] = $user_info->email;
				$data['image'] = $user_info->picture;
				
				//this function is use to check the sign in process is complete or not
				echo"<pre>";
				print_r($user_info);
				echo"<pre>";
				exit();


				//write a condition if the login process is sucessfull 
				// store the data in the database

			}else{
				$url = $client->createAuthUrl();
				header('Location:'.filter_var($url,FILTER_SANITIZE_URL));
			}
			
			
			
		}

		
	}

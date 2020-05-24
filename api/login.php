<?php
	header('Access-Control-Allow-Origin: http://localhost/projects/nkbhawan/nkbhawan');
    header('Access-Control-Allow-Methods: GET, POST');
    header('Access-Control-Allow-Headers: X-Requested-With, content-type, access-control-allow-origin , authorization, access-control-allow-methods, access-control-allow-headers');
    header('Content-Type: application/json; charset=utf-8');
	header('Access-Control-Allow-Credentials: true');
	
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$logginer = $_POST['logginer'];

	$arr = array();
	$returnObj = new \stdClass();
	if(!empty($userName) && !empty($password) && !empty($logginer)){
		
		// Required file inclusion
		require('./../config/root_url.php');
		require('./../connection/db_connect.php');

		$query = 'SELECT * from admin WHERE userName=?';
		$stmt = $con->prepare($query);
		if ( false===$stmt ) {
			$returnObj->msg = 'Unable to create prepare statement.';
			die('prepare(2222) failed: '. htmlspecialchars($mysqli->error));
		}

		$rc = $stmt->bind_param('s', $userName);
		
		if ( false===$rc ) {
			$returnObj->msg = 'Unable to bind values.';
			die('prepare(33333) failed: '. htmlspecialchars($mysqli->error));
		}
		$rc = $stmt->execute();
		if ( false===$rc ) {
			$returnObj->msg = 'Unable to execute the sql query.';
			die('prepare(11111) failed:'. htmlspecialchars($mysqli->error));
		}else{

			$stmt->store_result();
			$num_of_rows = $stmt->num_rows;

			if($num_of_rows > 0){
				$returnObj->success = 1;
				$returnObj->logginer = $logginer;
				$returnObj->msg = 'Logged in Successfull.';
			}else{
				$returnObj->success = -1;
				$returnObj->msg = 'Either username or password is incorrect.';
			}
		}
	}else{
		$returnObj->success = -1;
		$returnObj->msg = 'Username or Password should not be left blank.';
	}
	echo json_encode($returnObj);
?>
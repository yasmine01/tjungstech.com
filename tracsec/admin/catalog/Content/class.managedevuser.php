<?php
	include_once('class.database.php');

	class manageDevUser{
		public $linker;

		function __construct()
		{
			$db_connection = new dbConnection();
			$this->linker = $db_connection->connect();
			return $this->linker;
		}

		function countDevUser(){
			$query = $this->linker->query("SELECT NULL FROM tbl_userdevice");
			$count = $query->rowCount();
			return $count;
		}

		function listDevUser($limit){
			$query = $this->linker->query("SELECT * FROM tbl_customerinfo,tbl_userdevice WHERE tbl_customerinfo.user_id=tbl_userdevice.user_id ORDER BY device_no $limit");
			$counts = $query->rowCount();
			if($counts >= 1){
				$result = $query->fetchAll();
			}else{
				$result = $counts;
			}
			return $result;
		}

		function listIdDevice($devuserid){
			$query = $this->linker->query("SELECT * FROM tbl_userdevice WHERE device_no='$dev'");
			$count = $query->rowCount();
			if($count == 1){
				$result = $query->fetchAll();
			}else{
				$result = $count;
			}
			return $result;
		}

		function addDeviceUser($deviceno,$deviceimei,$deviceuser){
			$query = $this->linker->prepare("INSERT INTO tbl_userdevice(device_no,device_imei,user_id) VALUES(?,?,?)");
			$values = array($deviceno,$deviceimei,$deviceuser);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts;
		}
		function checkUser($deviceuser){
			$query = $this->linker->query("SELECT fname,mname,lname FROM tbl_customerinfo WHERE user_id='$deviceuser'");
			$count = $query->rowCount();
			if($count == 1){
				$result = $query->fetchAll();
			}else{
				$result = $count;
			}
			return $result;
		}
		function checkImei($deviceno){
			$query = $this->linker->query("SELECT device_imei FROM tbl_device WHERE device_no='$deviceno'");
			$count = $query->rowCount();
			if($count == 1){
				$result = $query->fetchAll();
			}else{
				$result = $count;
			}
			return $result;
		}
		function checkNo($deviceno){
			$query = $this->linker->query("SELECT device_no FROM tbl_device WHERE device_no='$deviceno'");
			$count = $query->rowCount();
			if($count == 1){
				$result = $query->fetchAll();
			}else{
				$result = $count;
			}
			return $result;
		}
		function deleteDevUser($id){
			$query = $this->linker->query("DELETE FROM tbl_userdevice WHERE device_no='$id'");
			$counts = $query->rowCount();
			return $counts;
		}
		function editDevUser($dev_no,$imei,$user){
			$query = $this->linker->query("UPDATE `tbl_userdevice` SET `device_no`='$dev_no',`device_imei`='$imei' WHERE `user_id`='$user'");
			$count = $query->rowCount();
			return $count;
		}
	}
?>

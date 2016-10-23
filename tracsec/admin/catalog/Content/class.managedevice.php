<?php
	include_once('class.database.php');

	class manageDev{
		public $linker;

		function __construct()
		{
			$db_connection = new dbConnection();
			$this->linker = $db_connection->connect();
			return $this->linker;
		}

		function countDevice(){
			$query = $this->linker->query("SELECT NULL FROM tbl_device");
			$count = $query->rowCount();
			return $count;
		}

		function listDevice($limit){
			$query = $this->linker->query("SELECT * FROM tbl_device ORDER BY device_no $limit");
			$counts = $query->rowCount();
			if($counts >= 1){
				$result = $query->fetchAll();
			}else{
				$result = $counts;
			}
			return $result;
		}

		function listIdDevice($devid){
			$query = $this->linker->query("SELECT * FROM tbl_device WHERE device_no='$devid'");
			$count = $query->rowCount();
			if($count == 1){
				$result = $query->fetchAll();
			}else{
				$result = $count;
			}
			return $result;
		}

		function addDevice($no,$imei){
			$status = 0;
			$query = $this->linker->prepare("INSERT INTO `tbl_device` (`device_no`,`device_imei`,`device_status`) VALUES(?,?,?)");
			$values = array($no,$imei,$status);
			$query->execute($values);
			$counts = $query->rowCount();
			return $counts;
		}
			function checkImei($deviceimei){
			$query = $this->linker->query("SELECT device_imei FROM tbl_device WHERE device_imei='$deviceimei'");
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
		function deleteDevice($id){
			$query = $this->linker->query("DELETE FROM tbl_device WHERE device_no='$id'");
			$counts = $query->rowCount();
			return $counts;
		}
		function editDevice($dev_no,$imei){
			$query = $this->linker->query("UPDATE `tbl_device` SET `device_imei`='$imei' WHERE `device_no`='$dev_no'");
			$count = $query->rowCount();
			return $count;
		}// $query = $this->linker->query("UPDATE ebooks SET name='$name',subject='$subject',category='$category',download='$target' WHERE eid='$id'");
		function searchDevice($search){
			$query = $this->linker->query("SELECT * FROM tbl_device WHERE device_no LIKE('%$search%') LIMIT 0,6");
			$count = $query->rowCount();
			if($count > 0){
				$result = $query->fetchAll();
			}else{
				$result = $count;
			}
			return $result;
		}
	}
?>

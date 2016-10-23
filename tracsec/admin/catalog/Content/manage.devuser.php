<?php
	include_once('class.managedevuser.php');
	$init = new manageDevUser();

	if(isset($_GET['devuserid']))
		{
		    $devuserid = $_GET['devuserid'];
		    $list_devuser = $init->listIdDevice($devuserid);
		}else{
	  	$count = $init->countDevUser();
      if ($count == 0) {
       $list_devuser = 0;
      }else{
        if(isset($_GET['pages'])){ // This filter only get variables
          $page = preg_replace("#[^0-9]#","",$_GET['pages']);
        }else{
          $page = 1;
        }
        $perPage = 6;
        // Extra error handler
        $test = $count/$perPage;
        $lastPage = round($count/$perPage); //Round off number so we get certains amount per page
        // page error handller
        if($test > $lastPage){
          $lastPage = $lastPage+1;
        }
        if($page < 1){
          $page = 1;
        }
        elseif($page > $lastPage){
          $page = $lastPage;
        }

        $limit = "LIMIT ".($page-1)*$perPage.",$perPage";

        $list_devuser = $init->listDevUser($limit);

        $pagination = "";
        
        if($lastPage != 1){
          if($page != $lastPage){
          $next = $page+1;
          $pagination.= '<a href="?page=dev_user&pages='.$next.'">Next</a>';
          }
          if($page != 1){
          $prev = $page-1;
          $pagination.= '<a href="?page=dev_user&pages='.$prev.'">Previous</a>';
          }
        }
      }
	}

	if(isset($_POST['dev_no'])){
		$deviceno = $_POST['dev_no'];
		$deviceimei = $_POST['dev_imei'];
    $deviceuser = $_POST['dev_user'];

		$insert = $init->addDeviceUser($deviceno,$deviceimei,$deviceuser);

    if ($insert == 1) {
      echo 'Device user ('.$deviceuser.') added successfully!';
    }

	}
  if(isset($_POST['dev_user'])){
    $deviceuser = $_POST['dev_user'];
    $insert = "";
    $insert = $init->checkUser($deviceuser);

    if ($insert != 0) {
      foreach ($insert as $key => $value) {
        if(isset($value['mname']))
            $cutomer = $value['fname'].' '.$value['mname'].' '.$value['lname'];
        else
            $cutomer = $value['fname'].' '.$value['lname'];
    }
    echo $cutomer;
    }else{
      echo 'User donot exists!';
    }
  }
  if(isset($_POST['dev_imei'])){
    $deviceno = $_POST['dev_imei'];
    $insert = $init->checkImei($deviceno);

    if ($insert != 0) {
      foreach ($insert as $key => $value) {
            $dev_no = $value['device_imei'];
    }
    echo $dev_no;
    }else{
      echo 'Sorry! Donot exists!';
    }
  }

   if(isset($_POST['dev_nos'])){
    $deviceno = $_POST['dev_nos'];
    $insert = $init->checkNo($deviceno);

    if ($insert != 0) {
      foreach ($insert as $key => $value) {
            $dev_no = $value['device_no'];
    }
    echo 'Ok <i class="fa fa-check"></i>';
    }else{
      echo 'Sorry! Donot exists!';
    }
  }

  if(isset($_POST['deldev'])){
    $id = $_POST['deldev'];
    $delete = $init->deleteDevUser($id);
    if($delete == 1)
    {
      echo '<div class="alert alert-danger" style="align:center;">
            <strong>Deleted</strong>'.$id.' successfully!
            </div>';
    }
    else
    {
      echo '<div class="alert alert-danger">
            <strong>Sorry</strong> there was an error!
            </div>';
    }
  }
  if(isset($_POST['edit_devuser'])){
    $dev_no = $_POST['edit_devuser'];
    $imei =$_POST['edit_imei'];
    $user = $_POST['edit_user'];
    echo $user."<br>".$imei."<br>".$dev_no."<br>";
    $insert = $init->editDevUser($dev_no,$imei,$user);

    if ($insert == 1) {
      echo 'Device ('.$dev_no.') edited successfully!';
    }else{
      echo 'There was an error.';
    }
  }

?>
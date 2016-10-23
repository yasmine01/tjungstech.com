<?php
	include_once('class.managedevice.php');
	$init = new manageDev();

	if(isset($_GET['devid']))
		{
		    $devid = $_GET['devid'];
		    $list_device = $init->listIdDevice($devid);
		}else{
	  	$count = $init->countDevice();
      if ($count == 0) {
       $list_device = 0;
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

        $list_device = $init->listDevice($limit);

        $pagination = "";
        
        if($lastPage != 1){
          if($page != $lastPage){
          $next = $page+1;
          $pagination.= '<a href="?page=device&pages='.$next.'">Next</a>';
          }
          if($page != 1){
          $prev = $page-1;
          $pagination.= '<a href="?page=device&pages='.$prev.'">Previous</a>';
          }
        }
      }
	}

 if(isset($_POST['dev_no'])){
    $no = $_POST['dev_no'];
    $imei =$_POST['dev_imei'];

    $insert = $init->addDevice($no,$imei);

    if ($insert == 1) {
      echo 'Device ( '.$no.' ) added successfully!';
    }
  }

  if(isset($_POST['dev_imei'])){
    $deviceimei = $_POST['dev_imei'];
    $insert = $init->checkImei($deviceimei);

    if ($insert != 0) {
      foreach ($insert as $key => $value) {
            $dev_no = $value['device_imei'];
    }
      echo 'Sorry! Already exists!';
    }else{
      echo 'Ok <i class="fa fa-check"></i>';
    }
  }

  if(isset($_POST['dev_nos'])){
    $deviceno = $_POST['dev_nos'];
    $insert = $init->checkNo($deviceno);

    if ($insert != 0) {
      foreach ($insert as $key => $value) {
            $dev_no = $value['device_no'];
    }
      echo 'Sorry! Already exists!';
    }else{
      echo 'Ok <i class="fa fa-check"></i>';
    }
  }

  if(isset($_POST['deldev'])){
    $id = $_POST['deldev'];
    $delete = $init->deleteDevice($id);
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

  if(isset($_POST['edit_dev'])){
    $dev_no = $_POST['edit_dev'];
    $imei =$_POST['edit_imei'];
    $insert = $init->editDevice($dev_no,$imei);

    if ($insert == 1) {
      echo 'Device ('.$dev_no.') edited successfully!';
    }else{
      echo 'There was an error.';
    }
  }

  if (isset($_POST['search'])){
    $search = $_POST['search'];
    if($search != 0){

    $check = $init->searchDevice($search);
    if ($check != 0) {
      echo '
     <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th>
                                    <input type="checkbox" id="check-all" class="flat">

                                </th>
                                <th class="column-title">Devic No. </th>
                                <th class="column-title">Device IMEI </th>
                                <th class="column-title">Status</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                            </thead>

      <tbody>';
    foreach ($check as $key => $value) {
     echo '
      <tr class="even pointer">
        <td class="a-center ">
            <input type="checkbox" class="flat" name="table_records">
        </td>
        <td class=" ">'.$value["device_no"].'</td>
        <td class=" ">'.$value["device_imei"].'</td>
        <td class=" ">'.$value["device_status"].'</td>
        <td class=" last">

        <button style="background-color: #FF8000; border-color: #FF8000;border-radius:0px" type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg'.$value['device_no'].'">Edit</button>
        <?php
        include ("editdev.php");
        ?>

        <input id="txt_delete'.$value["device_no"].'" type="hidden" value="'.$value['device_no'].'">
        <button class="btn btn-primary" id="btn_delete'.$value['device_no'].'" value="'.$value['device_no'].'">Delete</button>
        </td>
      </tr>';
    }
    echo '</tbody>
          </table>';
  }
}
  }

?>
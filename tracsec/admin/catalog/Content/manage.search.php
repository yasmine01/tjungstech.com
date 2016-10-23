<?php
    include_once('class.managedevice.php');
    $init = new manageDev();
    echo "10";

    $search = $_GET['search'];
    echo $search;
    $check = $init->searchDevice($search);

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
  
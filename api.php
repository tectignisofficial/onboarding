<?php

include('include/config.php');


if(isset($_POST['submit'])){


    // $dark=$_POST['dark'];

    $query=mysqli_query($conn,"select * from user");
    $arr=mysqli_fetch_array($query);
    $is_dark=$arr['is_dark'];

    if($is_dark=='dark-layout'){
    $sql=mysqli_query($conn,"UPDATE `user` SET `is_dark`='light-layout'");

    }else{
        $sql=mysqli_query($conn,"UPDATE `user` SET `is_dark`='dark-layout'");

    }


}


?>
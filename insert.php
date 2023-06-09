<?php

    require_once "connect.php";

    // $jsondata=file_get_contents("php://inpt");
    // $data=json_decode($jsondata,true);

    $tempname= ($_FILES['image']['tmp_name']);
    $target_folder= "moon";
    $target_filename= ['image']['name'];
    $target_filesize= ['image']['size'];
    $target_fileerror= ['image']['error'];
    $target_filetype= ['image']['type'];

    $target_file = $target_folder . "/" . basename($target_filename);

    if ($target_fileerror == 0) {

        $file_status = move_uploaded_file($tempname, $target_file);
    }

    $image= $_FILES['image']['name'];
    $name= $_POST['name'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $cpass= $_POST['cpass'];
    $mob= $_POST['mob'];
    $gender= $_POST['gender'];
    $city= $_POST['city'];
    $dob= $_POST['dob'];
    $latitude= $_POST['latitude'];
    $longitude= $_POST['longitude'];

    $query = "INSERT INTO `project`(`image`,`name`, `email`, `pass`, `cpass`, `mob`, `gender`, `city`, `dob`, `latitude`, `longitude`) VALUES
    ('$image','$name','$email','$pass','$cpass','$mob','$gender','$city','$dob','$latitude','$longitude')";

    $result =mysqli_query($conn,$query);

    if($result == 1){

        $status=1;
        $message='Data Insert successful';

    }else{

        $status=0;
        $message='Something Went Wrong';

    }

    $arr=[

        'message'=>$message,
        'status'=>$status
    ];

    echo json_encode($arr,JSON_PRETTY_PRINT);

?>
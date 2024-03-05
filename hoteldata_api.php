<?php
    header("Access-Control-Allow-Origin: *");
    $servername = "localhost";
    $username = "id21959469_sigma945";
    $password = "Sigma945*";
    $dbname = "id21959469_test";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn){
        die("連線錯誤".mysqli_connect_errno());
    }

    $sql = "SELECT * FROM hoteldata";
    $result = mysqli_query($conn, $sql);

    $jsonDATA = array();
    while($row = mysqli_fetch_assoc($result)){
        // echo $row["name"]."<BR>";
        $jsonDATA[] = $row;
    }

    echo json_encode($jsonDATA);

    mysqli_close($conn);
?>
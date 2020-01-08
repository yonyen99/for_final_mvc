<?php

function province_get_data() {
    $query = "select * from tblprovince";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
            $rows[] = $record;
        }
    }
    return $rows;
}
function add_new_province($data) {
    include "connection.php";
    $province = $_POST['pro_name'];

    $query = "INSERT INTO tblprovince(pro_name)
                VALUES('$province')";
    $result = mysqli_query($connection, $query);

    return $result;
}

function delete_province() {
    include "connection.php";
    $id = $_GET['id'];
    $result = mysqli_query($connection, "DELETE FROM tblprovince WHERE pro_id= $id");

    return $result;
}
function province_details() {
    $id = $_GET['id'];
    $query =  "SELECT * FROM tblprovince WHERE pro_id = $id";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    
    return $result;
}
function update_province(){
    if(isset($_POST['edit'])){
    $id = $_GET['id'];
    include "connection.php";
    $province = $_POST['pro_name'];
    $query = "UPDATE tblprovince SET pro_name= '$province' WHERE pro_id = $id";
    $update = mysqli_query($connection, $query);
}
return $update;
}
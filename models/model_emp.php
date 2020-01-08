<?php
function get_employee_data() {
    $query = "SELECT em.emp_id,emp_fname,emp_lname,pr.pro_name 
    FROM tblemployee em 
    LEFT JOIN tblprovince pr ON em.pro_id = pr.pro_id  ";
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


function get_province_data() {
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

function employee_add_data($data) {
    include "connection.php";
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $province = $_POST['province'];

    $query = "INSERT INTO tblemployee(emp_fname,emp_lname,pro_id)
              VALUES('$firstname','$lastname','$province')";
     $result= mysqli_query($connection, $query);
    return $result;
}
function m_delete() {
    include "connection.php";
    $id = $_GET['id'];
    $result = mysqli_query($connection, "DELETE FROM tblemployee WHERE emp_id= $id");
    return $result;
}
function employee_detail() {
    include "connection.php";
    $id = $_GET['id'];
    $query = "SELECT em.emp_id,emp_fname,emp_lname,pr.pro_name 
    FROM tblemployee em 
    LEFT JOIN tblprovince pr ON em.pro_id = pr.pro_id WHERE em.emp_id = $id ";
    $result = mysqli_query($connection,$query);
    return $result;
}
function employee_edit(&$data){
    include_once "connection.php";
    $id = $_GET['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $province = $_POST['province'];
    $query = "UPDATE tblemployee SET emp_fname='$fname',emp_lname='$lname',pro_id='$province'  WHERE emp_id = $id";
    $update = mysqli_query($connection,$query);
    return $update;
}
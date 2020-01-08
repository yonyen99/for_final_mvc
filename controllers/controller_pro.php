<?php
$data = array();
get_action($data);

function get_action(&$data){
    $function = 'list_class';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}
function list_class(&$data){
    $data['employee_data'] = province_get_data();
    $data['page'] = "province/view";
}
function add(&$data){
    $data['page'] = "province/add";
}
function add_form(&$data) {
    $add_data = add_new_province($_POST);
    if($add_data) {
        $action = "list_class";
    }else {
        $action = "add";
    }
    header("Location: index1.php?action=$action");
}
function delete(&$data) {
    //code here
    $result = delete_province();
    if($result) {
        $action = "list_class";
    }else {
        echo "Cannot delete this record!!!";
    }
    header("Location: index1.php?action=$action");
}

function edit_form(&$data) {
    //code here
    $data['province_data'] = province_details();
    $data['page'] = "province/edit";
}
function form_edit(&$data){
    $province = update_province($_POST);
    if($province){
        $action = "list_class";
    }else{
        $action = "edit_form";
    }
    header("Location: index1.php?action=$action");
}
<?php
$data = array();
get_action($data);

function get_action(&$data){
    $function = 'view';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}
function view(&$data) {
    $data['employee_data'] = get_employee_data();
    $data['page'] = "employee/view";
}
function add(&$data) {
    $data['province_data'] = get_province_data();
    $data['page'] = "employee/add";
}
function form_data(&$data) {
    $add_data = employee_add_data($_POST);
    if($add_data) {
        $action = "view";
    }else {
        $action = "add";
    }
    header("Location: index.php?action=$action");
}

function delete(&$data) {
    //code here
    $result = m_delete();
    if($result) {
        $action = "view";
    }else {
        echo "Cannot delete this record!!!";
    }
    header("Location: index.php?action=$action");
}

function edit(&$data) {
    $data['employee_data'] =employee_detail();
    $data['province_data'] = get_province_data();
    $data['page'] = "employee/edit";
}

function edit_data(&$data) {
    $edit = employee_edit($_POST);
    if($edit) {
        $action = "view";
    }else {
        echo "Error";
    }
    header("Location: index.php?action=$action");
}
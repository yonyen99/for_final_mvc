<div class="row">
    <div class="col-md-12">
        <a href="index1.php?action=add" class="btn btn-success">Add New</a>
    </div>
</div>
<table class="table table-bordered mt-3">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Province</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <?php 
    if(isset($data['employee_data'])){
      $id = 1;
        foreach ($data['employee_data'] as $rows) {
        
  ?>
  <tbody>
    <tr>
      <td><?php echo $id;?></td>
      <td><?php echo $rows['pro_name'];?></td>
      <td>
        <a href="index1.php?action=edit_form&id=<?php echo $rows['pro_id'];?>"><i class="material-icons">edit</i></a>
        <a href="index1.php?action=delete&id=<?php echo $rows['pro_id'];?>"><i class="material-icons" onclick="return confirm('Are you sure you want to delete?');">delete</i></a>
      </td>
    </tr>
  </tbody>
  <?php
        $id++;
        }
    }
  ?>
</table>
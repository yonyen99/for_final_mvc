<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary text-center text-white">
                <h2>Student Information Form</h2>
            </div>
            <?php
            if(isset($data['employee_data'])){
                  foreach ($data['employee_data'] as $rows) {
            ?>
            <form action="index.php?action=edit_data&id=<?php echo $rows['emp_id']; ?>" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname" class="form-control" value="<?php echo $rows['emp_fname'];?>">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname" class="form-control" value="<?php echo $rows['emp_lname'];?>">
                    </div>

                    <div class="form-group">
                        <label for="province">Province:</label>
                        <select name="province" id="province" class="form-control">
                            <?php
                            foreach ($data['province_data'] as $row) {
                                ?>
                                <option <?php if($rows['pro_name']== $row['pro_name']){?> selected="selected"<?php }?> value="<?php echo $row['pro_id']; ?>"><?php echo $row['pro_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <!-- <div class="form-group">
                        <label for="class">Class:</label>
                        <select name="class" id="class" class="form-control">
                            <?php
                            foreach ($data['class'] as $row) { ?>
                                <option <?php if($rows['title']== $row['title']){?> selected="selected"<?php }?> value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div> -->

                </div>
                <div class="card-footer">
                    <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                    <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                </div>
            </form>
            <?php
                }
            }
            ?>
        </div>
        </div>
    </div>
</div>
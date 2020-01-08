<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-primary text-center text-white">
                <h2>Employee Information Form</h2>
            </div>
            <form action="index.php?action=form_data" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="province">Province:</label>
                        <select name="province" id="province" class="form-control">
                            <?php
                            foreach ($data['province_data'] as $rows) {
                                ?>
                                <option value="<?php echo $rows['pro_id'];?>"><?php echo $rows['pro_name']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="index.php?action=view" class="btn btn-success">Go Back</a>
                    <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
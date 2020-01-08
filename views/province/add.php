<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-center text-white">
                    <h2>Class Form</h2>
                </div>
                <form action="index1.php?action=add_form" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                            <div class="form-group">
                                <label for="province">Province:</label>
                                <input type="text" name="pro_name" id="name" class="form-control">
                            </div>
                    </div>
                    <div class="card-footer">
                        <a href="index1.php?action=list_class" class="btn btn-success">Go Back</a>
                        <input type="submit" name="create" value="Submit" class="btn btn-primary float-right">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
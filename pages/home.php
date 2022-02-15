<?php include 'pages/include/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Input Student Information</h3>
                        <div class="card-body">
                            <form action="action.php" method="post" enctype="multipart/form-data">
                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Student Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="text" name="Email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Contact number</label>
                                    <div class="col-md-8">
                                        <input type="number" name="Contact_number" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4">Student Profile</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" accept="image/*">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-form-label col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="btn" class="btn btn-outline-success btn-block"value="save student information">
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'pages/include/footer.php'; ?>
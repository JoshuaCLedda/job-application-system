<?php
include '../../layouts/header.php';
include '../../layouts/admin/sidebar.php';
include '../../layouts/admin/navbar.php';
?>

<div id="main">
    <div class="main-container">

        <div class="d-flex justify-content-end my-2">
            <a href="index.php" class="btn btn-success">Back</a>
        </div>

        <div class="card">
            <h3 class="card-title mx-4">
                Information in the Application Form For Business Permit
            </h3>

            <div class="card-body">
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">

                            <label class="form-label">Mode</label>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    New
                                </label>
                            </div>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Renewal
                                </label>
                            </div>
                            <div class="form-check">

                                <input checked class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Additional
                                </label>
                            </div>

                        </div>



                        <div class="col-md-6">

                            <label class="form-label">Mode of Payment</label>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Annually
                                </label>
                            </div>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Bi Annually
                                </label>
                            </div>
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quarterly
                                </label>
                            </div>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">Ammendment<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Choose from below</option>
                                <option selected value="10">Single to partnership</option>
                                <option value="10">Single to corporation</option>
                                <option value="10">Partnership to single</option>
                            </select>
                        </div>

                        <div class="col-md-6">

                            <label class="form-label">Transfer<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option value="">Choose from below</option>
                                <option selected value="10">Ownership</option>
                                <option value="10">Location</option>

                            </select>
                        </div>




                        <hr>


                        <div class="col-md-4">
                            <label class="form-label">Refference Number</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Date of application</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Kind of organization</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-4">
                            <label class="form-label">DTI/SEC/CDA Registration No.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">DTI/SEC/CDA Date of Registration.</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Tin</label>
                            <input type="text" class="form-control">
                        </div>





                        <div class="col-md-6">
                            <label class="form-label">Are you enjoying text incentive from any governmnet entity?</label>
                            <select class="form-select" name="grade_level" required>
                                <option selected value="">Choose from below</option>
                                <option value="10">Yes</option>
                                <option value="10">No</option>

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Please specify the entity</label>
                            <input type="text" class="form-control">
                        </div>

                        <hr>


                        <h6>Name of Taxpayer</h6>
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Middle Name</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Busines Name</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Trade Name Francise</label>
                            <input type="text" class="form-control">
                        </div>

                        <h6 class="font-weight-bold">Name of President/Tresurer of Corporation</h6>
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Middle Name</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>


                        <h6 class="font-weight-bold">Business Address</h6>
                        <div class="col-md-4">
                            <label class="form-label">House No/Bldg No.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Building Name</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Street</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-4">

                            <label class="form-label">Province<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">Municipality<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">Barangay<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Telephone Num.</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control">
                        </div>


                        <h6 class="font-weight-bold">Owners Address</h6>
                        <div class="col-md-4">
                            <label class="form-label">House No/Bldg No.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Building Name</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Street</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-4">

                            <label class="form-label">Province<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">Municipality<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">Barangay<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>

                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Telephone Num.</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control">
                        </div>



                        <h6 class="font-weight-bold">If place of business is rented, please identify the following:</h6>

                        <div class="col-md-4">
                            <label class="form-label">Lessor's Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Middle Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Monthly Rental</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Lessor's Address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">House No.</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Street</label>
                            <input type="text" class="form-control">
                        </div>



                        <div class="col-md-4">

                            <label class="form-label">Province<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">Municipality<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>


                            </select>
                        </div>

                        <div class="col-md-4">

                            <label class="form-label">Barangay<span class="text-danger">*</span></label>
                            <select class="form-select" required>
                                <option selected value="">Choose from below</option>

                            </select>
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Telephone Num.</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email Address</label>
                            <input type="text" class="form-control">
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">In case of emergency (Name of contact person).</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Tel No/Mobile No/Email address(Of contact person)</label>
                            <input type="text" class="form-control">
                        </div>

                        <hr>





                        <h6 class="font-weight-bold">Business Activity</h6>

                        <div class="col-md-6">
                            <label class="form-label">Line of Business</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Capitalization (For new business)</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">No. of Units</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gross Sales</label>
                            <input type="text" class="form-control">
                        </div>


                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Create Business Permit</button>
                </form>
            </div>
        </div>






    </div>




    <?php
    include '../../layouts/footer.php';
    ?>
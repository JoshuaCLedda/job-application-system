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
            <h3 class="card-title mx-4 my-2">
            Create New Job
            </h3>

            <div class="card-body">
            <form>
    <div class="row g-3">

        <div class="col-md-12">
    <label class="form-label">Job Type</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="full_time" id="jobTypeFullTime">
        <label class="form-check-label" for="jobTypeFullTime">Full-Time</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="part_time" id="jobTypePartTime">
        <label class="form-check-label" for="jobTypePartTime">Part-Time</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="contract" id="jobTypeContract">
        <label class="form-check-label" for="jobTypeContract">Contract</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="internship" id="jobTypeInternship">
        <label class="form-check-label" for="jobTypeInternship">Internship</label>
    </div>
</div>



        <div class="col-md-6">
            <label class="form-label">Job Title<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Location<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>

        <hr>

        <h6 class="font-weight-bold">Other Details</h6>
        <div class="col-md-4">
            <label class="form-label">Requirements<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-4">
            <label class="form-label">Salary Range</label>
            <input type="text" class="form-control">
        </div>


        <div class="col-md-4">
            <label class="form-label">Status<span class="text-danger">*</span></label>
            <input type="text" class="form-control" required>
        </div>
      

        <hr>

        <div class="col-md-12">
            <label class="form-label">Job Description</label>
            <textarea class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Create Job</button>
    </div>
</form>

            </div>
        </div>






    </div>




    <?php
    include '../../layouts/footer.php';
    ?>
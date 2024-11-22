<?php
include '../../layouts/header.php';
include '../../layouts/admin/sidebar.php';
include '../../layouts/admin/navbar.php';
?>

<div id="main">
    <div class="main-container">




        <div class="card">
            <h3 class="card-title mx-4 pt-4">
                Generate Report
            </h3>
            <div class="card-body">
            <form>

<div class="row g-3">

    <div class="col-md-4">
        <label class="form-label">Job Type<span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option selected value="">Choose from below</option>
            <option value="full_time">Full Time</option>
            <option value="part_time">Part Time</option>
            <option value="internship">Internship</option>
            <option value="freelance">Freelance</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label">Experience Level<span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option selected value="">Choose from below</option>
            <option value="entry_level">Entry Level</option>
            <option value="mid_level">Mid Level</option>
            <option value="senior_level">Senior Level</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label">Job Location<span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option selected value="">Choose from below</option>
            <option value="remote">Remote</option>
            <option value="onsite">Onsite</option>
            <option value="hybrid">Hybrid</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label">Employment Status<span class="text-danger">*</span></label>
        <select class="form-select" required>
            <option selected value="">Choose from below</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label">Application Month</label>
        <select class="form-select" required>
            <option selected value="">Choose from below</option>
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>
        </select>
    </div>

    <div class="col-md-4">
        <label class="form-label">Application Year</label>
        <select class="form-select" required>
            <option selected value="">Choose from below</option>
            <?php
            // Generate options for the last 10 years
            for ($year = date("Y"); $year >= date("Y") - 10; $year--) {
                echo "<option value='$year'>$year</option>";
            }
            ?>
        </select>
    </div>

</div>

<button type="submit" class="btn btn-danger mt-3">Submit Application</button>
</form>

            </div>
        </div>






    </div>




    <?php
    include '../../layouts/footer.php';
    ?>
<?php
include '../../layouts/header.php';
include '../../layouts/admin/sidebar.php';
include '../../layouts/admin/navbar.php';
?>


<div id="main">
    <div class="main-container">


    <div class="d-flex justify-content-end my-2">
        <a href="create.php" class="btn btn-success">Add</a>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Job Application Data</h5>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                        <table class="table datatable table-striped table-hover" id="datatable">
    <thead>
        <tr>
            <th>Company Name</th>
            <th>Applicant Name</th>
            <th>Job Applied</th>
            <th>Status</th>
            <th>Manage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Company A</td>
            <td>Ana Reyes</td>
            <td>Administrative Assistant</td>
            <td><span class="badge bg-primary">Pending</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company B</td>
            <td>Mark Villanueva</td>
            <td>HR Officer</td>
            <td><span class="badge bg-secondary">On Hold</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company C</td>
            <td>Maria Lopez</td>
            <td>Accountant</td>
            <td><span class="badge bg-danger">Rejected</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company D</td>
            <td>John Santos</td>
            <td>Customer Service Rep</td>
            <td><span class="badge bg-success">Hired</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company E</td>
            <td>Christopher Jamil</td>
            <td>Marketing Specialist</td>
            <td><span class="badge bg-primary">Pending</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company F</td>
            <td>Elena Cruz</td>
            <td>IT Support</td>
            <td><span class="badge bg-warning">Interview Scheduled</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company G</td>
            <td>Nirav Joshi</td>
            <td>Sales Associate</td>
            <td><span class="badge bg-danger">Cancelled</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company H</td>
            <td>Maria Gonzalez</td>
            <td>Graphic Designer</td>
            <td><span class="badge bg-success">Hired</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company I</td>
            <td>Lucas Reyes</td>
            <td>Web Developer</td>
            <td><span class="badge bg-primary">Pending</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
        <tr>
            <td>Company J</td>
            <td>Sophie Tran</td>
            <td>Data Analyst</td>
            <td><span class="badge bg-secondary">On Hold</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Manage</a>
            </td>
        </tr>
    </tbody>
</table>

                        </div>
                    </div>
                </div>
            </div>
    </section>


</div>
</div>
</div>




<?php
include '../../layouts/footer.php';
?>
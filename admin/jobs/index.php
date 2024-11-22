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
                    <div class="card-body ">
                        <h5 class="card-title">Jobs Data</h5>

                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                        <table class="table datatable table-striped table-hover" id="datatable">
    <thead>
        <tr>
            <th>Job Name</th>
            <th>Company</th>
            <th>Status</th>
            <th>Manage</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Software Engineer</td>
            <td>Tech Solutions Inc.</td>
            <td><span class="badge bg-success">Open</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Marketing Specialist</td>
            <td>Global Marketing Group</td>
            <td><span class="badge bg-primary">Pending</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Data Analyst</td>
            <td>Analytics Corp</td>
            <td><span class="badge bg-danger">Closed</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Graphic Designer</td>
            <td>Creative Studio</td>
            <td><span class="badge bg-warning">In Progress</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>HR Manager</td>
            <td>HR Solutions</td>
            <td><span class="badge bg-secondary">On Hold</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Web Developer</td>
            <td>Web Innovations</td>
            <td><span class="badge bg-success">Open</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Sales Associate</td>
            <td>Retail Corp</td>
            <td><span class="badge bg-danger">Closed</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Project Manager</td>
            <td>Construction Co.</td>
            <td><span class="badge bg-warning">In Progress</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Customer Service Rep</td>
            <td>Support Services</td>
            <td><span class="badge bg-primary">Pending</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        <tr>
            <td>Account Manager</td>
            <td>Financial Services</td>
            <td><span class="badge bg-secondary">On Hold</span></td>
            <td>
                <a href="view.php" class="btn btn-sm btn-success">View</a>
                <a href="edit.php" class="btn btn-sm btn-warning">Edit</a>
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
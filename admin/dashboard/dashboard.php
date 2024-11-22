<?php 
include '../../layouts/header.php';
include '../../layouts/admin/sidebar.php';
include '../../layouts/admin/navbar.php';
?>

<div id="main">
<div class="main-container">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                  <div class="mb-3 mb-sm-0">
                    <h5 class="card-title fw-semibold">Job Application Data</h5>
                  </div>
                  <div>
                    <select class="form-select">
                      <option value="1">March 2023</option>
                      <option value="2">April 2023</option>
                      <option value="3">May 2023</option>
                      <option value="4">June 2023</option>
                    </select>
                  </div>
                </div>
                <div id="chart"></div>
              </div>
            </div>
          </div>
          
        </div>

        
        <div class="row">
     
        <div class="col-lg-6 d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <h5 class="card-title fw-semibold mb-4">Recent Job Applications</h5>
            <div class="table">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Applicant Name</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Job Title</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Status</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Ana Reyes</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Office Assistant</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-success rounded-3 fw-semibold">Interviewing</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Mark Villanueva</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">HR Coordinator</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-warning rounded-3 fw-semibold">Pending</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Maria Lopez</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Accounting Clerk</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-danger rounded-3 fw-semibold">Rejected</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">John Santos</h6>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Customer Service Representative</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-success rounded-3 fw-semibold">Hired</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>










          <div class="col-lg-6 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5>
                <div class="table">
                <table class="table text-nowrap mb-0 align-middle">
    <thead class="text-dark fs-4">
        <tr>
            <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Id</h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Name</h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Job Title</h6>
            </th>
            <th class="border-bottom-0">
                <h6 class="fw-semibold mb-0">Status</h6>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">Ana Reyes</h6>
                <span class="fw-normal">Administrative Assistant</span>                          
            </td>
            <td class="border-bottom-0">
                <p class="mb-0 fw-normal">Job Application</p>
            </td>
            <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-primary rounded-3 fw-semibold">Pending</span>
                </div>
            </td>
        </tr> 
        <tr>
            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">Mark Villanueva</h6>
                <span class="fw-normal">HR Officer</span>                          
            </td>
            <td class="border-bottom-0">
                <p class="mb-0 fw-normal">Job Application</p>
            </td>
            <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-secondary rounded-3 fw-semibold">On Hold</span>
                </div>
            </td>
        </tr> 
        <tr>
            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">Maria Lopez</h6>
                <span class="fw-normal">Accountant</span>                          
            </td>
            <td class="border-bottom-0">
                <p class="mb-0 fw-normal">Job Application</p>
            </td>
            <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-danger rounded-3 fw-semibold">Cancelled</span>
                </div>
            </td>
        </tr>      
        <tr>
            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
            <td class="border-bottom-0">
                <h6 class="fw-semibold mb-1">John Santos</h6>
                <span class="fw-normal">Customer Service Rep</span>                          
            </td>
            <td class="border-bottom-0">
                <p class="mb-0 fw-normal">Job Application</p>
            </td>
            <td class="border-bottom-0">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge bg-success rounded-3 fw-semibold">Completed</span>
                </div>
            </td>
        </tr>                       
    </tbody>
</table>

                </div>
              </div>
            </div>
          </div>
        </div>
       
      
      </div>


<?php 
include '../../layouts/footer.php';
?>
<?php
include '../../layouts/header.php';
include '../../layouts/admin/sidebar.php';
include '../../layouts/admin/navbar.php';
?>

<div id="main">
<div class="main-container">




              <h5 class="card-title fw-semibold mb-4">User Profile</h5>
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">First Name</label>
                      <input type="text" class="form-control" value="John">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Last Name</label>
                      <input type="text" class="form-control" value="Doe ">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" value="student@gmail.com">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                 
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                  </form>
                </div>
              </div>
       
         




</div>




<?php
include '../../layouts/footer.php';
?>
<?php
session_start();
include "../controllers/Auth.php";
$auth = new Auth;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $resultCheckLogin = $auth->checkLogin($email, $password);

    if ($resultCheckLogin == 1) {
        // Login successful
        if ($_SESSION['role'] == 1) {
            header("Location: ../admin/dashboard/dashboard.php");
            exit();
        } elseif ($_SESSION['role'] == 2) {
            header("Location: ../application/home.php");
            exit();
        }
    } else {
        // Display the error message
        $message = $resultCheckLogin; // Display detailed error
    }
}
?>

<?php include '../layouts/header.php'; ?>

<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="./index.html" class="text-nowrap logo-img text-center d-block py-1 w-100"></a>
                            
                            <?php if (isset($message)): ?>
                                <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                                    <?php echo $message; ?>
                                </div>
                            <?php endif; ?>

                            <p class="text-center">Job Application System</p>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="password" required>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <a class="text-primary fw-bold" href="forgot_password.php">Forgot Password?</a>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary w-100 py-2 fs-4 mb-4 rounded-2">Sign In</button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Don't have an Account?</p>
                                    <a class="text-primary fw-bold ms-2" href="register.php">Create an account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include '../layouts/footer.php';
?>

<script>
  function validateLogin(event) {
    event.preventDefault(); // Prevent form submission

    // Get values from the input fields
    const email = document.getElementById('exampleInputEmail1').value;
    const password = document.getElementById('exampleInputPassword1').value;

    // Hardcoded credentials
    const validEmail = 'admin@gmail.com';
    const validPassword = '12345678';

    // Validation
    if (email === validEmail && password === validPassword) {
      // Redirect to the dashboard
      window.location.href = 'http://localhost/job-application/admin/dashboard/dashboard.php';
    } else {
      alert('Invalid email or password. Please try again.');
    }
  }
</script>
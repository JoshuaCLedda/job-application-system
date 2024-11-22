<?php
error_reporting(E_ALL); // Enable error reporting
ini_set('display_errors', 1);

session_start();
include "../controllers/Auth.php";
$auth = new Auth;

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform registration
    $result = $auth->register($first_name, $last_name, $email, $password);

    if ($result == 'Registration successful!') {
        $message = "Registered Successfully.";
    } else {
        $message = $result;  // Display the error or success message
    }
}
?>

<?php include '../layouts/header.php'; ?>

<div class="page-wrapper" id="main-wrapper">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <p class="text-center">Job Application System</p>
                            <?php
                            if (isset($message)) {
                                if ($message == 'Registration successful!') {
                                    echo '<div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">';
                                    echo '<i class="fa-sharp fa-solid fa-circle-check"></i>';
                                } else {
                                    echo '<div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">';
                                    echo '<i class="fa-regular fa-circle-xmark"></i>';
                                }
                                echo $message;
                                echo '</div>';
                            }
                            ?>

                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input name="first_name" type="text" class="form-control" id="first_name">
                                </div>

                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input name="last_name" type="text" class="form-control" id="last_name">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input name="email" type="email" class="form-control" id="email">
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="password" type="password" class="form-control" id="password">
                                </div>

                                <button type="submit" name="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>

                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                                    <a class="text-primary fw-bold ms-2" href="login.php">Sign In</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

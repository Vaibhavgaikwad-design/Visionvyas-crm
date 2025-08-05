<!DOCTYPE html>
<html lang="zxx">

<?php include './partials/head.php'?>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="auth-cover-wrapper">
        <div class="auth-cover-content-inner">
            <div class="auth-cover-content-wrapper">
                <div class="auth-img">
                    <img src="assets/images/auth/auth-cover-register-bg.svg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="auth-cover-sidebar-inner">
            <div class="auth-cover-card-wrapper">
                <div class="auth-cover-card p-sm-5">
                    <div class="wd-50 mb-5">
                        <img src="assets/images/logo-abbr.png" alt="" class="img-fluid">
                    </div>
                    <h2 class="fs-20 fw-bolder mb-4">Register</h2>
                    <h4 class="fs-13 fw-bold mb-2">Manage all your Duralux crm</h4>
                    <p class="fs-12 fw-medium text-muted">Let's get you all setup, so you can verify your personal account and begine setting up your profile.</p>
                    <form action="index.php" class="w-100 mt-4 pt-2">
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="mb-4">
                            <input type="tel" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="mb-4 generate-pass">
                            <div class="input-group field">
                                <input type="password" class="form-control password" id="newPassword" placeholder="Password Confirm">
                                <div class="input-group-text c-pointer gen-pass" data-bs-toggle="tooltip" title="Generate Password"><i class="feather-hash"></i></div>
                                <div class="input-group-text border-start bg-gray-2 c-pointer show-pass" data-bs-toggle="tooltip" title="Show/Hide Password"><i></i></div>
                            </div>
                            <div class="progress-bar mt-2">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="Password again" required>
                        </div>
                        <div class="mt-4">
                            <div class="custom-control custom-checkbox mb-2">
                                <input type="checkbox" class="custom-control-input" id="receiveMial" required>
                                <label class="custom-control-label c-pointer text-muted" for="receiveMial" style="font-weight: 400 !important">Yes, I wnat to receive Duralux community emails</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="termsCondition" required>
                                <label class="custom-control-label c-pointer text-muted" for="termsCondition" style="font-weight: 400 !important">I agree to all the <a href="">Terms &amp; Conditions</a> and <a href="">Fees</a>.</label>
                            </div>
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-lg btn-primary w-100">Create Account</button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted">
                        <span>Already have an account?</span>
                        <a href="auth-login-cover.php" class="fw-bold">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>	
</body>

</html>
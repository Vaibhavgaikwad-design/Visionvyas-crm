
<?php
include('db.php');
session_start();

// Handle Approve/Reject Actions
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $userId = $_POST['user_id'];
    $action = $_POST['action'];

    if ($action === 'approve') {
        $role = $_POST['role'];
        $stmt = $conn->prepare("UPDATE users SET status = 'approved', role = :role WHERE id = :id");
        $stmt->execute([':role' => $role, ':id' => $userId]);
    } elseif ($action === 'reject') {
        $stmt = $conn->prepare("UPDATE users SET status = 'rejected' WHERE id = :id");
        $stmt->execute([':id' => $userId]);
    }

    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// Fetch pending users
$pendingUsers = $conn->query("SELECT * FROM users WHERE status = 'pending'")->fetchAll(PDO::FETCH_ASSOC);

// Filter for approved users
$filter = $_GET['filter'] ?? 'latest';
$filterSql = "";
if ($filter === 'today') {
    $filterSql = "AND DATE(created_at) = CURDATE()";
} elseif ($filter === 'week') {
    $filterSql = "AND YEARWEEK(created_at, 1) = YEARWEEK(CURDATE(), 1)";
} elseif ($filter === 'month') {
    $filterSql = "AND MONTH(created_at) = MONTH(CURDATE()) AND YEAR(created_at) = YEAR(CURDATE())";
}

if ($filter === 'latest') {
    $approvedUsers = $conn->query("SELECT * FROM users WHERE status = 'approved' ORDER BY created_at DESC LIMIT 5")->fetchAll(PDO::FETCH_ASSOC);
} else {
    $stmt = $conn->prepare("SELECT * FROM users WHERE status = 'approved' $filterSql ORDER BY created_at DESC");
    $stmt->execute();
    $approvedUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="zxx">
<?php $title='Duralux - Admin & Dashboard PHP Template'?>
<?php include './partials/head.php'?>

<style>
/* Sidebar-aware layout */
.page {
    margin-left: 250px; /* Match sidebar width */
    padding: 2rem;
    transition: margin 0.3s ease-in-out;
    min-height: 100vh;
    overflow-x: hidden;
}

/* Optional: Make it responsive on smaller screens */
@media (max-width: 992px) {
    .page {
        margin-left: 0;
    }
}
<style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
        }
        .card {
            border-radius: 12px;
        }
        .btn-approve {
            background-color: #198754;
            color: white;
            border: none;
        }
        .btn-reject {
            background-color: #dc3545;
            color: white;
            border: none;
        }
        .form-select, .form-control {
            border-radius: 8px;
        }
        h5 {
            font-weight: 600;
        }
        .page {
            margin-left: 250px;
            padding: 2rem;
        }
        @media (max-width: 992px) {
            .page {
                margin-left: 0;
            }
        }
    </style>
<body>
    <!-- Left Sidebar -->
    <?php include './partials/left-sidebar.php'?>

    <!-- Header -->
    <?php include './partials/header.php'?>

    <!-- Page Content -->
    <main class="page">
    <div class="card shadow-sm mb-5">
        <div class="card-header bg-primary text-white">
        <h5 class="mb-0" style="color: white;"><i class="fas fa-user-clock me-2 mt-5"></i>Pending User Registrations</h5>

        </div>
        <div class="card-body">
            <?php if (count($pendingUsers) > 0): ?>
                <?php foreach ($pendingUsers as $user): ?>
                    <form method="post" class="mb-4">
                        <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-4">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" value="<?= $user['full_name'] ?>" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="<?= $user['email'] ?>" disabled>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Assign Role</label>
                                <select name="role" class="form-select" required>
                                    <option value="">Select</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="User">User</option>
                                    <option value="Manager">Manager</option>
                                </select>
                            </div>
                            <div class="col-md-1 d-grid">
                                <button type="submit" name="action" value="approve" class="btn btn-approve"><i class="fas fa-check"></i></button>
                            </div>
                            <div class="col-md-1 d-grid">
                                <button type="submit" name="action" value="reject" class="btn btn-reject"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-muted">No pending user registrations.</p>
            <?php endif; ?>
        </div>
    </div>

    <div class="card shadow-sm">
    <div class="card-header d-flex justify-content-between align-items-center" style="background-color: green; color: white;">
    <h5 class="mb-0" style="color: white;"><i class="fas fa-user-check me-2"></i>Approved Users Overview</h5>

            <form method="get" class="d-flex">
                <select name="filter" class="form-select form-select-sm" onchange="this.form.submit()">
                    <option value="latest" <?= $filter === 'latest' ? 'selected' : '' ?>>Last 5</option>
                    <option value="today" <?= $filter === 'today' ? 'selected' : '' ?>>Today</option>
                    <option value="week" <?= $filter === 'week' ? 'selected' : '' ?>>This Week</option>
                    <option value="month" <?= $filter === 'month' ? 'selected' : '' ?>>This Month</option>
                </select>
            </form>
        </div>
        <div class="card-body">
            <?php if (count($approvedUsers) > 0): ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-success">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Approved Date</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($approvedUsers as $user): ?>
                            <tr>
                                <td><?= $user['full_name'] ?></td>
                                <td><?= $user['email'] ?></td>
                                <td><?= date('d-M-Y', strtotime($user['created_at'])) ?></td>
                                <td><?= $user['role'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <p class="text-muted">No approved users found for selected filter.</p>
            <?php endif; ?>
        </div>
    </div>
</main>




    <!-- This is the code for theme setting  -->
    <div class="theme-customizer">
        <div class="customizer-handle">
            <a href="javascript:void(0);" class="cutomizer-open-trigger bg-primary">
                <i class="feather-settings"></i>
            </a>
        </div>
        <div class="customizer-sidebar-wrapper">
            <div class="customizer-sidebar-header px-4 ht-80 border-bottom d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Theme Settings</h5>
                <a href="javascript:void(0);" class="cutomizer-close-trigger d-flex">
                    <i class="feather-x"></i>
                </a>
            </div>
            <div class="customizer-sidebar-body position-relative p-4" data-scrollbar-target="#psScrollbarInit">
                <!--! BEGIN: [Skins] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Skins</label>
                    <div class="row g-2 theme-options-items app-skin" id="appSkinList">
                        <div class="col-6 text-center position-relative single-option light-button active">
                            <input type="radio" class="btn-check" id="app-skin-light" name="app-skin" value="1" data-app-skin="app-skin-light">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-skin-light">Light</label>
                        </div>
                        <div class="col-6 text-center position-relative single-option dark-button">
                            <input type="radio" class="btn-check" id="app-skin-dark" name="app-skin" value="2" data-app-skin="app-skin-dark">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-skin-dark">Dark</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Skins] !-->
                <!--! BEGIN: [Typography] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-0 border border-gray-2 theme-options-set">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Typography</label>
                    <div class="row g-2 theme-options-items font-family" id="fontFamilyList">
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-lato" name="font-family" value="1" data-font-family="app-font-family-lato">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-lato">Lato</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-rubik" name="font-family" value="2" data-font-family="app-font-family-rubik">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-rubik">Rubik</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-inter" name="font-family" value="3" data-font-family="app-font-family-inter" checked>
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-inter">Inter</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-cinzel" name="font-family" value="4" data-font-family="app-font-family-cinzel">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-cinzel">Cinzel</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-nunito" name="font-family" value="6" data-font-family="app-font-family-nunito">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-nunito">Nunito</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-roboto" name="font-family" value="7" data-font-family="app-font-family-roboto">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-roboto">Roboto</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-ubuntu" name="font-family" value="8" data-font-family="app-font-family-ubuntu">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-ubuntu">Ubuntu</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-poppins" name="font-family" value="9" data-font-family="app-font-family-poppins">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-poppins">Poppins</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-raleway" name="font-family" value="10" data-font-family="app-font-family-raleway">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-raleway">Raleway</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-system-ui" name="font-family" value="11" data-font-family="app-font-family-system-ui">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-system-ui">System UI</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-noto-sans" name="font-family" value="12" data-font-family="app-font-family-noto-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-noto-sans">Noto Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-fira-sans" name="font-family" value="13" data-font-family="app-font-family-fira-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-fira-sans">Fira Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-work-sans" name="font-family" value="14" data-font-family="app-font-family-work-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-work-sans">Work Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-open-sans" name="font-family" value="15" data-font-family="app-font-family-open-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-open-sans">Open Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-maven-pro" name="font-family" value="16" data-font-family="app-font-family-maven-pro">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-maven-pro">Maven Pro</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-quicksand" name="font-family" value="17" data-font-family="app-font-family-quicksand">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-quicksand">Quicksand</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-montserrat" name="font-family" value="18" data-font-family="app-font-family-montserrat">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-montserrat">Montserrat</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-josefin-sans" name="font-family" value="19" data-font-family="app-font-family-josefin-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-josefin-sans">Josefin Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-ibm-plex-sans" name="font-family" value="20" data-font-family="app-font-family-ibm-plex-sans">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-ibm-plex-sans">IBM Plex Sans</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-source-sans-pro" name="font-family" value="5" data-font-family="app-font-family-source-sans-pro">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-source-sans-pro">Source Sans Pro</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-montserrat-alt" name="font-family" value="21" data-font-family="app-font-family-montserrat-alt">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-montserrat-alt">Montserrat Alt</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-font-family-roboto-slab" name="font-family" value="22" data-font-family="app-font-family-roboto-slab">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-font-family-roboto-slab">Roboto Slab</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Typography] !-->
            </div>
            <div class="customizer-sidebar-footer px-4 ht-60 border-top d-flex align-items-center gap-2">
                <div class="flex-fill w-50">
                    <a href="javascript:void(0);" class="btn btn-danger" data-style="reset-all-common-style">Reset</a>
                </div>
                <div class="flex-fill w-50">
                    <a href="javascript:void(0);" class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    </div>
    <!--  end of This is the code for theme setting  -->


    <!-- Scripts -->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <script src="assets/vendors/js/jquery.steps.min.js"></script>
    <script src="assets/vendors/js/jquery.validate.min.js"></script>
    <script src="assets/vendors/js/select2.min.js"></script>
    <script src="assets/vendors/js/select2-active.min.js"></script>
    <script src="assets/vendors/js/quill.min.js"></script>
    <script src="assets/vendors/js/datepicker.min.js"></script>
    <script src="assets/js/common-init.min.js"></script>
    <script src="assets/js/projects-create-init.min.js"></script>
    <script src="assets/js/theme-customizer-init.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>

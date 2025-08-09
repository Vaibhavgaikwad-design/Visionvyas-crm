<?php
// Get the current page from the URL
$current_page = basename($_SERVER['PHP_SELF']); 
?>

<!--! ================================================================ !-->
<!--! [Start] Navigation Menu !-->
<!--! ================================================================ !-->
<nav class="nxl-navigation">
    <div class="navbar-wrapper">
        <div class="m-header">
            <a href="index.php" class="b-brand">
                <!-- ========   change your logo here   ============ -->
                <img src="assets/images/ki.png" alt="" class="logo logo-lg" />
                <img src="assets/images/logo-abbr.png" alt="" class="logo logo-sm" />
            </a>
        </div>
        <div class="navbar-content">
            <ul class="nxl-navbar">
                <li class="nxl-item nxl-caption">
                    <label>Navigation</label>
                </li>

                <!-- Dashboard Menu -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'index.php' || $current_page == 'analytics.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-airplay"></i></span>
                        <span class="nxl-mtext">Dashboards</span></i></span>
                    </a>
                    <!-- <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>" href="index.php">CRM</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'analytics.php') ? 'active' : ''; ?>" href="analytics.php">Analytics</a></li>
                    </ul> -->
                </li>

                <!-- User Management Menu (Admin Only) -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'users.php' || $current_page == 'add-user.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-users"></i></span>
                        <span class="nxl-mtext">User Management</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'users.php') ? 'active' : ''; ?>" href="users.php">User List</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'add-user.php') ? 'active' : ''; ?>" href="add-user.php">Add User</a></li>
                    </ul>
                </li>

                <!-- Approval Requests Menu (Admin Only) -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'pending-approvals.php' || $current_page == 'approved-users.php' || $current_page == 'denied-users.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-check-circle"></i></span>
                        <span class="nxl-mtext">Approval Requests</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'pending-approvals.php') ? 'active' : ''; ?>" href="Approve.php">Pending Approvals</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'approved-users.php') ? 'active' : ''; ?>" href="Approv.php">Approved Users</a></li>
                        <!-- <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'denied-users.php') ? 'active' : ''; ?>" href="denied-users.php">Denied Users</a></li> -->
                    </ul>
                </li>

                <!-- Reports Menu -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'performance-reports.php' || $current_page == 'lead-conversion-reports.php' || $current_page == 'social-campaign-roi.php' || $current_page == 'inventory-feedback.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-file-text"></i></span>
                        <span class="nxl-mtext">Reports & Export Tools</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'performance-reports.php') ? 'active' : ''; ?>" href="Performance_Reports.php">Performance Reports</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'lead-conversion-reports.php') ? 'active' : ''; ?>" href="Leadreport.php">Lead Conversion Reports</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'social-campaign-roi.php') ? 'active' : ''; ?>" href="Social_Campaign_ROI.php">Social Campaign ROI</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'inventory-feedback.php') ? 'active' : ''; ?>" href="inventory-feedback.php">Inventory Feedback</a></li>
                    </ul>
                </li>

                <!-- System Settings Menu (Admin Only) -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'data-recovery.php' || $current_page == 'user-access-control.php' || $current_page == 'global-settings.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-settings"></i></span>
                        <span class="nxl-mtext">System Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'data-recovery.php') ? 'active' : ''; ?>" href="data-recovery.php">Data Recovery / Mistake Fixing</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'user-access-control.php') ? 'active' : ''; ?>" href="user-access-control.php">User Access Control</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'global-settings.php') ? 'active' : ''; ?>" href="global-settings.php">Global Settings</a></li>
                    </ul>
                </li>

                <!-- Settings Menu -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'settings-general.php' || $current_page == 'settings-email.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-settings"></i></span>
                        <span class="nxl-mtext">Settings</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'settings-general.php') ? 'active' : ''; ?>" href="settings-general.php">General</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'settings-email.php') ? 'active' : ''; ?>" href="settings-email.php">Email</a></li>
                    </ul>
                </li>

                <!-- Authentication Menu -->
                <li class="nxl-item nxl-hasmenu <?php echo ($current_page == 'authentication.php' || $current_page == 'auth-register.php') ? 'active' : ''; ?>">
                    <a href="javascript:void(0);" class="nxl-link">
                        <span class="nxl-micon"><i class="feather-lock"></i></span>
                        <span class="nxl-mtext">Authentication</span><span class="nxl-arrow"><i class="feather-chevron-right"></i></span>
                    </a>
                    <ul class="nxl-submenu">
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'authentication.php') ? 'active' : ''; ?>" href="authentication.php">Login</a></li>
                        <li class="nxl-item"><a class="nxl-link <?php echo ($current_page == 'auth-register.php') ? 'active' : ''; ?>" href="auth-register.php">Register</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--! ================================================================ !-->
<!--! [End] Navigation Menu !-->
<!--! ================================================================ !-->

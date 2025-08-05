<!DOCTYPE html>
<html lang="zxx">

    <?php $title='Duralux - Admin & Dashboard PHP Template'?>
    <?php include './partials/head.php'?>

<body>
		<!-- Left sidebar -->
        <?php include './partials/left-sidebar.php'?>
	
	<!-- Header Section Start -->
        <?php include './partials/header.php'?>
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container apps-container apps-tasks">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Tasks</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewTasks">
                            <i class="feather-plus me-2"></i>
                            <span>Add Tasks</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-list"></i>
                                    <span>New</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-watch"></i>
                                    <span>Pending</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-activity"></i>
                                    <span>Inprogress</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-check-circle"></i>
                                    <span>Completed</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Priority</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-dark rounded-circle"></span>
                                    <span>Low</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-success rounded-circle"></span>
                                    <span>Normal</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-primary rounded-circle"></span>
                                    <span>Medium</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-warning rounded-circle"></span>
                                    <span>High</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <span class="wd-7 ht-7 bg-danger rounded-circle"></span>
                                    <span>Urgent</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Overview</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>Overview</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>My Tasks</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>Tasks Activity</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-hash"></i>
                                    <span>Tasks Attachments</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left d-flex align-items-center gap-2">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger me-2">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="btn btn-light-brand dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,16">
                                    <i class="feather-check-circle me-2"></i>
                                    <span>My Tasks</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-hash"></i>
                                        <span>All Tasks</span>
                                    </a>
                                    <a class="dropdown-item active" href="javascript:void(0)">
                                        <i class="feather-check-circle"></i>
                                        <span>My Tasks</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-airplay"></i>
                                        <span>Overviews</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-clock"></i>
                                        <span>Pending Tasks</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:void(0)">
                                        <i class="feather-activity"></i>
                                        <span>InProgress Tasks</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                    <i class="feather-eye"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye me-3"></i>
                                            <span>Read</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Unread</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-star me-3"></i>
                                            <span>Starred</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-shield-off me-3"></i>
                                            <span>Unstarred</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-clock me-3"></i>
                                            <span>Snooze</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-check-circle me-3"></i>
                                            <span>Add Tasks</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-archive me-3"></i>
                                            <span>Archive</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-alert-octagon me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Tags">
                                        <i class="feather-tag"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Office" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Office">Office</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Family">
                                            <label class="custom-control-label c-pointer" for="Family">Family</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Friend" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Friend">Friend</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Marketplace">
                                            <label class="custom-control-label c-pointer" for="Marketplace"> Marketplace </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Development">
                                            <label class="custom-control-label c-pointer" for="Development"> Development </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Tag</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-tag me-3"></i>
                                        <span>Manages Tag</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside" aria-expanded="false">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Labels">
                                        <i class="feather-folder-plus"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu">
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Updates">
                                            <label class="custom-control-label c-pointer" for="Updates">Updates</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Socials">
                                            <label class="custom-control-label c-pointer" for="Socials">Socials</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Primary" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Primary">Primary</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Forums">
                                            <label class="custom-control-label c-pointer" for="Forums">Forums</label>
                                        </div>
                                    </div>
                                    <div class="dropdown-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="Promotions" checked="checked">
                                            <label class="custom-control-label c-pointer" for="Promotions"> Promotions </label>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-plus me-3"></i>
                                        <span>Create Label</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="feather-folder-plus me-3"></i>
                                        <span>Manages Label</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="hstack gap-2">
                                <div class="hstack">
                                    <a href="javascript:void(0)" class="search-form-open-toggle">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search">
                                            <i class="feather-search"></i>
                                        </div>
                                    </a>
                                    <form class="search-form" style="display: none">
                                        <div class="search-form-inner">
                                            <a href="javascript:void(0)" class="search-form-close-toggle">
                                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Search Close">
                                                    <i class="feather-arrow-left"></i>
                                                </div>
                                            </a>
                                            <input type="search" class="py-3 px-0 border-0 w-100" id="tasksSearch" placeholder="Search...">
                                        </div>
                                    </form>
                                </div>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Newest">
                                        <i class="feather-chevron-left"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-none d-sm-flex">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Oldest">
                                        <i class="feather-chevron-right"></i>
                                    </div>
                                </a>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="btn btn-light-brand btn-sm rounded-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,23">Newest</a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Title</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Priority</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Category</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Time & Date</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item active" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                        <li class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Ascending</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Descending</a></li>
                                    </ul>
                                </div>
                                <div class="dropdown d-none d-sm-flex">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,22" data-bs-auto-close="outside">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span>Add to Group</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-user-plus me-3"></i>
                                            <span>Add to Contact</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off me-3"></i>
                                            <span>Make as Unread</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-sliders me-3"></i>
                                            <span>Filter Messages</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-archive me-3"></i>
                                            <span>Make as Archive</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Report Spam</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-sliders me-3"></i>
                                            <span>Report phishing</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-download me-3"></i>
                                            <span>Download Messages</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash me-3"></i>
                                            <span>Block Conversion</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-trash-2 me-3"></i>
                                            <span>Delete Conversion</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body">
                        <div class="card stretch stretch-full">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse" data-bs-target="#tasks_collapse_1">
                                <h5 class="mb-0">Recently Assigned</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_1">
                                <ul class="list-unstyled mb-0">
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask1" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask1"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Video conference with Canada Team <span class="ms-2 badge bg-soft-danger text-danger">High</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">27 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/1.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask2" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask2"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Client objective meeting <span class="ms-2 badge bg-soft-primary text-primary">Normal</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-success text-success d-md-inline-block d-none">Conferences</div>
                                                <div class="d-md-inline-block d-none me-3">22 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/2.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask3" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask3"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Target market trend analysis on the go <span class="ms-2 badge bg-soft-warning text-warning">Medium</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-teal text-teal d-md-inline-block d-none">Meetings</div>
                                                <div class="d-md-inline-block d-none me-3">23 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/3.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask4" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask4"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Send revised proposal to Mr. Dow Jones <span class="ms-2 badge bg-soft-success text-success">Low</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">28 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/4.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-0 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask5" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask5"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Set up first call for demo <span class="ms-2 badge bg-soft-danger text-danger">Urgent</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-warning text-warning d-md-inline-block d-none">Project</div>
                                                <div class="d-md-inline-block d-none me-3">30 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/5.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card stretch stretch-full">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse" data-bs-target="#tasks_collapse_yesterday">
                                <h5 class="mb-0">Yesterday</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_yesterday">
                                <ul class="list-unstyled mb-0">
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask6" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask6"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Client objective meeting <span class="ms-2 badge bg-soft-primary text-primary">Normal</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-success text-success d-md-inline-block d-none">Conferences</div>
                                                <div class="d-md-inline-block d-none me-3">22 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/2.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask7" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask7"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Target market trend analysis on the go <span class="ms-2 badge bg-soft-warning text-warning">Medium</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-teal text-teal d-md-inline-block d-none">Meetings</div>
                                                <div class="d-md-inline-block d-none me-3">23 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/3.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-0 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask8" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask8"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Send revised proposal to Mr. Dow Jones <span class="ms-2 badge bg-soft-success text-success">Low</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">28 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/4.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card mb-0">
                            <a href="javascript:void(0);" class="card-header" data-bs-toggle="collapse" data-bs-target="#tasks_collapse_20_nov">
                                <h5 class="mb-0">20 Nov, 2023</h5>
                            </a>
                            <div class="card-body collapse show" id="tasks_collapse_20_nov">
                                <ul class="list-unstyled mb-0">
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask9" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask9"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Target market trend analysis on the go <span class="ms-2 badge bg-soft-warning text-warning">Medium</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-teal text-teal d-md-inline-block d-none">Meetings</div>
                                                <div class="d-md-inline-block d-none me-3">23 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/3.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask10" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask10"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Send revised proposal to Mr. Dow Jones <span class="ms-2 badge bg-soft-success text-success">Low</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-primary text-primary d-md-inline-block d-none">Calls</div>
                                                <div class="d-md-inline-block d-none me-3">28 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/4.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-3 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask11" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask11"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Client objective meeting <span class="ms-2 badge bg-soft-primary text-primary">Normal</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-success text-success d-md-inline-block d-none">Conferences</div>
                                                <div class="d-md-inline-block d-none me-3">22 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/2.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="single-task-list p-3 mb-0 border border-dashed rounded-3">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-3 me-3">
                                                <div class="custom-control custom-checkbox me-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckTask12" data-checked-action="task-action">
                                                    <label class="custom-control-label c-pointer" for="customCheckTask12"></label>
                                                </div>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="lh-base"><i class="feather-star"></i></div>
                                                    <a href="javascript:void(0);" class="single-task-list-link" data-bs-toggle="offcanvas" data-bs-target="#tasksDetailsOffcanvas">
                                                        <div class="fs-13 fw-bold text-truncate-1-line">Video conference with Canada Team <span class="ms-2 badge bg-soft-danger text-danger">High</span></div>
                                                        <div class="fs-12 fw-normal text-muted text-truncate-1-line">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-shrink-0 align-items-center gap-3">
                                                <div class="badge bg-soft-warning text-warning d-md-inline-block d-none">Meeting</div>
                                                <div class="d-md-inline-block d-none me-3">27 Nov, 2023</div>
                                                <div class="avatar-image avatar-md d-sm-inline-block d-none">
                                                    <img src="assets/images/avatar/1.png" alt="user" class="img-fluid">
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item edit-task" href="#">Edit Task</a>
                                                        <a class="dropdown-item view-task" href="#">View Task</a>
                                                        <a class="dropdown-item delete-task" href="#">Delete Task</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- [ Footer ] start -->
					<?php include './partials/footer.php'?>
                    <!-- [ Footer ] end -->
                </div>
                <!-- [ Content Area ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Add New task Modal !-->
    <!--! ================================================================ !-->
    <div class="modal fade" id="addNewTasks" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New Task</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-4">
                        <label for="taskName" class="form-label">Name</label>
                        <input type="text" id="taskName" class="form-control" placeholder="Task Name">
                        <small class="text-muted">Tasks name for your todo</small>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Note/Description</label>
                        <div class="editor">
                            <div class="ht-150" id="notesEditorAdd"></div>
                        </div>
                        <small class="text-muted">Note/Description max 200 charectars</small>
                    </div>
                    <div id="taskDateRangeAdd" class="mb-4">
                        <label class="form-label">Date Range:</label>
                        <div class="input-group date input-daterange">
                            <input type="text" name="range-start" class="form-control" placeholder="Start date..." autocomplete="off">
                            <span class="input-group-text">to</span>
                            <input type="text" name="range-end" class="form-control" placeholder="End date..." autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Status:</label>
                        <select class="form-control" data-select2-selector="status">
                            <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                            <option value="secondary" data-bg="bg-secondary">Pending</option>
                            <option value="success" data-bg="bg-success">Completed</option>
                            <option value="danger" data-bg="bg-danger">Rejected</option>
                            <option value="warning" data-bg="bg-warning">Upcoming</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Priority:</label>
                        <select class="form-select form-control" data-select2-selector="priority">
                            <option value="primary" data-bg="bg-primary">Low</option>
                            <option value="teal" data-bg="bg-teal">Normal</option>
                            <option value="success" data-bg="bg-success">Medium</option>
                            <option value="warning" data-bg="bg-warning" selected>High</option>
                            <option value="danger" data-bg="bg-danger">Urgent</option>
                        </select>
                    </div>
                    <div class="form-group mb-4">
                        <label class="form-label">Assignee:</label>
                        <select class="form-select form-control" data-select2-selector="user" multiple>
                            <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                            <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                        </select>
                    </div>
                    <div class="form-group mb-0">
                        <label class="form-label">Tags:</label>
                        <select class="form-select form-control" data-select2-selector="tag" multiple>
                            <option value="primary" data-bg="bg-primary">Team</option>
                            <option value="teal" data-bg="bg-teal">Primary</option>
                            <option value="success" data-bg="bg-success">Updates</option>
                            <option value="warning" data-bg="bg-warning" selected>Personal</option>
                            <option value="danger" data-bg="bg-danger">Promotions</option>
                            <option value="indigo" data-bg="bg-indigo">Customs</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Discard</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Add Task</button>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Add New task Modal !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end w-50" tabindex="-1" id="tasksDetailsOffcanvas">
        <div class="offcanvas-header border-bottom" style="padding-top: 20px; padding-bottom: 20px">
            <div class="d-flex align-items-center">
                <div class="avatar-text avatar-md items-details-close-trigger" data-bs-dismiss="offcanvas" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Details Close"><i class="feather-arrow-left"></i></div>
                <span class="vr text-muted mx-4"></span>
                <a href="javascript:void(0);">
                    <h2 class="fs-14 fw-bold text-truncate-1-line">Video conference with Canada Team</h2>
                    <span class="fs-12 fw-normal text-muted text-truncate-1-line">09:00am - 11:00am, Rangpur, Bangladesh.</span>
                </a>
            </div>
            <div class="d-none d-md-flex gap-1 align-items-center justify-content-center">
                <a href="javascript:void(0);" class="d-none d-lg-flex align-items-center fs-9 fw-bold text-uppercase text-dark py-2 px-3 border border-gray-2 rounded">
                    <i class="feather-link-2 me-2"></i>
                    <span class="text-nowrap">Copy Link</span>
                </a>
                <a href="javascript:void(0)" class="d-flex">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Contractors"><i class="feather-plus"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Remainder Notify"><i class="feather-bell"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Favorite"><i class="feather-star"></i></div>
                </a>
                <a href="javascript:void(0)" class="d-flex successAlertMessage">
                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Calendar"><i class="feather-calendar"></i></div>
                </a>
                <div class="dropdown d-none d-sm-block">
                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0,25">
                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                            <i class="feather-more-vertical"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye-off me-3"></i>
                                <span>Make Unread</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-sliders me-3"></i>
                                <span>Filter Messages</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-archive me-3"></i>
                                <span>Make as Archive</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-link-2 me-3"></i>
                                <span>Attach files</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-calendar me-3"></i>
                                <span>Set Due Date</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-eye me-3"></i>
                                <span>Follow Task</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bookmark me-3"></i>
                                <span>Apply Labels</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-alert-triangle me-3"></i>
                                <span>Report Spam</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-alert-octagon me-3"></i>
                                <span>Report phishing</span>
                            </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-bell-off me-3"></i>
                                <span>Mute Conversion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-slash me-3"></i>
                                <span>Block Conversion</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <i class="feather-trash-2 me-3"></i>
                                <span>Delete Conversion</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="offcanvas-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Status:</label>
                        <select class="form-control" data-select2-selector="status">
                            <option value="primary" data-bg="bg-primary" selected>Inprogress</option>
                            <option value="secondary" data-bg="bg-secondary">Pending</option>
                            <option value="success" data-bg="bg-success">Completed</option>
                            <option value="danger" data-bg="bg-danger">Rejected</option>
                            <option value="warning" data-bg="bg-warning">Upcoming</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Priority:</label>
                        <select class="form-select form-control" data-select2-selector="priority">
                            <option value="primary" data-bg="bg-primary">Low</option>
                            <option value="teal" data-bg="bg-teal">Normal</option>
                            <option value="success" data-bg="bg-success">Medium</option>
                            <option value="warning" data-bg="bg-warning" selected>High</option>
                            <option value="danger" data-bg="bg-danger">Urgent</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Labels:</label>
                        <select class="form-select form-control" data-select2-selector="label">
                            <option value="primary" data-bg="bg-primary">Team</option>
                            <option value="teal" data-bg="bg-teal">Primary</option>
                            <option value="success" data-bg="bg-success">Updates</option>
                            <option value="warning" data-bg="bg-warning">Personal</option>
                            <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                            <option value="indigo" data-bg="bg-indigo">Customs</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Types:</label>
                        <select class="form-select form-control" data-select2-selector="type">
                            <option value="primary" data-bg="bg-primary" selected>New</option>
                            <option value="teal" data-bg="bg-teal">Pending</option>
                            <option value="success" data-bg="bg-success">Progress</option>
                            <option value="warning" data-bg="bg-warning">Completed</option>
                            <option value="danger" data-bg="bg-danger">Everythings</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Tags:</label>
                        <select class="form-select form-control" data-select2-selector="tag" multiple>
                            <option value="primary" data-bg="bg-primary">Team</option>
                            <option value="teal" data-bg="bg-teal">Primary</option>
                            <option value="success" data-bg="bg-success">Updates</option>
                            <option value="warning" data-bg="bg-warning" selected>Personal</option>
                            <option value="danger" data-bg="bg-danger">Promotions</option>
                            <option value="indigo" data-bg="bg-indigo">Customs</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group mb-4">
                        <label class="form-label">Assignee:</label>
                        <select class="form-select form-control" data-select2-selector="user" multiple>
                            <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                            <option value="alex@outlook.com" data-user="7">alex@outlook.com</option>
                            <option value="john.deo@outlook.com" data-user="8">john.deo@outlook.com</option>
                            <option value="green.cutte@outlook.com" data-user="9">green.cutte@outlook.com</option>
                            <option value="nancy.elliot@outlook.com" data-user="10">nancy.elliot@outlook.com</option>
                            <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                            <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                        </select>
                    </div>
                </div>
                <div class="col-12">
                    <div id="taskDateRange">
                        <label class="form-label">Date Range:</label>
                        <div class="input-group date input-daterange">
                            <input type="text" name="range-start" class="form-control" placeholder="Start date..." autocomplete="off">
                            <span class="input-group-text">to</span>
                            <input type="text" name="range-end" class="form-control" placeholder="End date..." autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <!--! BEGIN: Checklist !-->
            <div class="checklist">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2 class="fs-16 fw-bold mb-1">Checklist</h2>
                        <span class="fs-12 text-muted">Issues found checklist</span>
                    </div>
                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                        <i class="feather-info"></i>
                    </a>
                </div>
                <ul class="list-unstyled" id="checklist">
                    <li class="checked">Tested, debugged, and shipped 10s of 1000s of lines of code to various development teams.</li>
                    <li>Introduced Kanban Board style ticketing system to promote highly.</li>
                    <li>Utilized HTML, CSS, and JavaScript to create 100+ responsive landing pages for both company and client.</li>
                    <li class="checked">Rewrote HTML to meet industry and company standards for SEO and Accessibility.</li>
                    <li>Led bi-weekly stand-up to ensure team worked effectively.</li>
                    <li>Worked with Quality Assurance to get new pages/products tested.</li>
                </ul>
                <div class="input-group mt-3">
                    <input id="checklistInput" type="text" class="form-control" placeholder="Title...">
                    <a href="javascript:void(0)" class="input-group-text addCheckList" onclick="newElement()">
                        <i class="feather-plus me-2"></i>
                        <span>Add Checklist</span>
                    </a>
                </div>
            </div>
            <!--! END: Checklist !-->
            <hr class="my-5">
            <!--! BEGIN: Notes !-->
            <div class="notes">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2 class="fs-16 fw-bold mb-1">Notes</h2>
                        <span class="fs-12 text-muted">Task note list</span>
                    </div>
                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                        <i class="feather-info"></i>
                    </a>
                </div>
                <div class="editor">
                    <div class="ht-200" id="notesEditor"></div>
                </div>
            </div>
            <!--! END: Notes !-->
            <hr class="my-5">
            <!--! BEGIN: Comments !-->
            <div class="comments">
                <div class="d-flex justify-content-between mb-4">
                    <div>
                        <h2 class="fs-16 fw-700 mb-1">Comments</h2>
                        <small class="text-muted">Responses for this tasks</small>
                    </div>
                    <a href="javascript:void(0);" class="avatar-text avatar-md">
                        <i class="feather-info"></i>
                    </a>
                </div>
                <!--! BEGIN: comment !-->
                <div class="d-flex mb-4">
                    <div class="avatar-image me-3">
                        <a href="javascript:void(0);">
                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                            <span>Alexandra Della</span>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                            <span class="fs-10 text-uppercase text-muted d-none d-sm-block">57 Min Ago</span>
                        </a>
                        <div class="d-flex align-items-center">
                            <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                            <div class="dropdown ms-2">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                    <i class="feather-more-vertical fs-10"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off fs-10 me-3"></i>
                                            <span class="fs-11">Mute</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off fs-10 me-3"></i>
                                            <span class="fs-11">Hide</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash fs-10 me-3"></i>
                                            <span class="fs-11">Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-flag fs-10 me-3"></i>
                                            <span class="fs-11">Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                            <a href="javascript:void(0);" class="text-muted">Like (6)</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">Reply</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">5 Replies</a>
                        </div>
                    </div>
                </div>
                <!--! BEGIN: reply !-->
                <div class="ms-4">
                    <div class="ms-4">
                        <!--! BEGIN: single-reply !-->
                        <div class="d-flex mb-4">
                            <div class="avatar-image me-3">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                    <span>Marianne Audrey</span>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                    <span class="fs-10 text-uppercase text-muted d-none d-sm-block">50 Min Ago</span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Wishing calling is warrant settled was lucky.</p>
                                    <div class="dropdown ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical fs-10"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-bell-off fs-10 me-3"></i>
                                                    <span class="fs-11">Mute</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-eye-off fs-10 me-3"></i>
                                                    <span class="fs-11">Hide</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-slash fs-10 me-3"></i>
                                                    <span class="fs-11">Block</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-flag fs-10 me-3"></i>
                                                    <span class="fs-11">Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                    <a href="javascript:void(0);" class="text-muted">Like</a>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                    <a href="javascript:void(0);" class="text-muted">Reply</a>
                                </div>
                            </div>
                        </div>
                        <!--! BEGIN: single-reply !-->
                        <div class="d-flex mb-4">
                            <div class="avatar-image me-3">
                                <a href="javascript:void(0);">
                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="">
                                <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                                    <span>Curtis Green</span>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                                    <span class="fs-10 text-uppercase text-muted d-none d-sm-block">45 Min Ago</span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection.</p>
                                    <div class="dropdown ms-2">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical fs-10"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-bell-off fs-10 me-3"></i>
                                                    <span class="fs-11">Mute</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-eye-off fs-10 me-3"></i>
                                                    <span class="fs-11">Hide</span>
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-slash fs-10 me-3"></i>
                                                    <span class="fs-11">Block</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">
                                                    <i class="feather-flag fs-10 me-3"></i>
                                                    <span class="fs-11">Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                                    <a href="javascript:void(0);" class="text-muted">Like (2)</a>
                                    <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                                    <a href="javascript:void(0);" class="text-muted">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="ms-4 mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-center text-muted">
                                <i class="feather-more-horizontal fs-12"></i>
                                <span class="fs-10 text-uppercase ms-2 text-truncate-1-line">Load More Replies</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--! BEGIN: comment !-->
                <div class="d-flex mb-4">
                    <div class="avatar-image me-3">
                        <a href="javascript:void(0);">
                            <img src="assets/images/avatar/4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                            <span>Holland Scott</span>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                            <span class="fs-10 text-uppercase text-muted d-none d-sm-block">42 Min Ago</span>
                        </a>
                        <div class="d-flex align-items-center">
                            <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive.</p>
                            <div class="dropdown ms-2">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                    <i class="feather-more-vertical fs-10"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off fs-10 me-3"></i>
                                            <span class="fs-11">Mute</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off fs-10 me-3"></i>
                                            <span class="fs-11">Hide</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash fs-10 me-3"></i>
                                            <span class="fs-11">Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-flag fs-10 me-3"></i>
                                            <span class="fs-11">Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                            <a href="javascript:void(0);" class="text-muted">Like (8)</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">Reply</a>
                        </div>
                    </div>
                </div>
                <!--! BEGIN: comment !-->
                <div class="d-flex mb-4">
                    <div class="avatar-image me-3">
                        <a href="javascript:void(0);">
                            <img src="assets/images/avatar/5.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="">
                        <a href="javascript:void(0);" class="mb-1 d-flex align-items-center">
                            <span>Olive Delarosa</span>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2 d-none d-sm-block"></span>
                            <span class="fs-10 text-uppercase text-muted d-none d-sm-block">34 Min Ago</span>
                        </a>
                        <div class="d-flex align-items-center">
                            <p class="fs-12 text-dark p-3 bg-gray-200 rounded-3 mb-0">Dependent on so extremely delivered by. Yet no jokes worse her why.</p>
                            <div class="dropdown ms-2">
                                <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                    <i class="feather-more-vertical fs-10"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off fs-10 me-3"></i>
                                            <span class="fs-11">Mute</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-eye-off fs-10 me-3"></i>
                                            <span class="fs-11">Hide</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-slash fs-10 me-3"></i>
                                            <span class="fs-11">Block</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-flag fs-10 me-3"></i>
                                            <span class="fs-11">Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="fs-10 text-uppercase d-flex align-items-center mt-2">
                            <a href="javascript:void(0);" class="text-muted">Like (8)</a>
                            <span class="wd-3 ht-3 bg-gray-500 rounded-circle d-flex mx-2"></span>
                            <a href="javascript:void(0);" class="text-muted">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <label class="mb-1">Add Comment</label>
                    <textarea rows="5" class="form-control" placeholder="Your comment...."></textarea>
                    <a href="javascript:void(0);" class="btn btn-primary d-inline-block mt-4">Add Comment</a>
                </div>
            </div>
            <!--! END: Comments !-->
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Tasks Details Offcanvas !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Search Modal !-->
    <!--! ================================================================ !-->
    <div class="modal fade-scale" id="searchModal" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-top modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header search-form py-0">
                    <div class="input-group">
                        <span class="input-group-text">
                            <i class="feather-search fs-4 text-muted"></i>
                        </span>
                        <input type="text" class="form-control search-input-field" placeholder="Search...">
                        <span class="input-group-text">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </span>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="searching-for mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">I'm searching for...</h4>
                        <div class="row g-1">
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-compass"></i>
                                    <span>Recent</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-command"></i>
                                    <span>Command</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-users"></i>
                                    <span>Peoples</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-file"></i>
                                    <span>Files</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <i class="feather-video"></i>
                                    <span>Medias</span>
                                </a>
                            </div>
                            <div class="col-md-4 col-xl-2">
                                <a href="javascript:void(0);" class="d-flex align-items-center gap-2 px-3 lh-lg border rounded-pill">
                                    <span>More</span>
                                    <i class="feather-chevron-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="recent-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Recnet <span class="badge small rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-airplay fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM dashboard redesign</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">/<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-file-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new eocument</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">N /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite project colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1"></i></a>
                        </div>
                    </div>
                    <div class="command-result mb-5">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Command <span class="badge small rounded ms-1 text-dark">5</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user fs-5"></i>
                                <div class="fs-13 fw-semibold">My profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">P /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-users fs-5"></i>
                                <div class="fs-13 fw-semibold">Team profile</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">T /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-user-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Invite colleagues</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">I /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-briefcase fs-5"></i>
                                <div class="fs-13 fw-semibold">Create new project</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">CP /<i class="feather-command ms-1"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-life-buoy fs-5"></i>
                                <div class="fs-13 fw-semibold">Support center</div>
                            </a>
                            <a href="javascript:void(0);" class="badge border rounded text-dark">SC /<i class="feather-command ms-1"></i></a>
                        </div>
                    </div>
                    <div class="file-result mb-4">
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Files <span class="badge small rounded ms-1 text-dark">3</span></h4>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM Desing Project <span class="fs-12 fw-normal text-muted">(56.74 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">Admin Dashboard Project <span class="fs-12 fw-normal text-muted">(46.83 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="javascript:void(0);" class="d-flex align-items-start gap-3">
                                <i class="feather-folder-plus fs-5"></i>
                                <div class="fs-13 fw-semibold">CRM Dashboard Project <span class="fs-12 fw-normal text-muted">(68.59 MB)</span></div>
                            </a>
                            <a href="javascript:void(0);" class="file-download"><i class="feather-download"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Search Modal !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Language Select !-->
    <!--! ================================================================ !-->
    <div class="modal fade-scale" id="languageSelectModal" aria-hidden="true" aria-labelledby="languageSelectModalLabel" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="languageSelectModalLabel">Select Language</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sa.svg" alt="" class="img-fluid"></div>
                                <span>Arabic </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/bd.svg" alt="" class="img-fluid"></div>
                                <span>Bengali </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ch.svg" alt="" class="img-fluid"></div>
                                <span>Chinese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/hr.svg" alt="" class="img-fluid"></div>
                                <span>Croatian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/dk.svg" alt="" class="img-fluid"></div>
                                <span>Danish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/nl.svg" alt="" class="img-fluid"></div>
                                <span>Dutch </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select active">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/us.svg" alt="" class="img-fluid"></div>
                                <span>English </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fi.svg" alt="" class="img-fluid"></div>
                                <span>Filipino </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/fr.svg" alt="" class="img-fluid"></div>
                                <span>French </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/de.svg" alt="" class="img-fluid"></div>
                                <span>German </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/il.svg" alt="" class="img-fluid"></div>
                                <span>Hebrew </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/in.svg" alt="" class="img-fluid"></div>
                                <span>Hindi </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/id.svg" alt="" class="img-fluid"></div>
                                <span>Indonesian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/it.svg" alt="" class="img-fluid"></div>
                                <span>Italian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/jp.svg" alt="" class="img-fluid"></div>
                                <span>Japanese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/kr.svg" alt="" class="img-fluid"></div>
                                <span>Korean </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ir.svg" alt="" class="img-fluid"></div>
                                <span>Persian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pt.svg" alt="" class="img-fluid"></div>
                                <span>Portuguese </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/ru.svg" alt="" class="img-fluid"></div>
                                <span>Russian </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/es.svg" alt="" class="img-fluid"></div>
                                <span>Spanish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/sv.svg" alt="" class="img-fluid"></div>
                                <span>Swedish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/tr.svg" alt="" class="img-fluid"></div>
                                <span>Turkish </span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/pk.svg" alt="" class="img-fluid"></div>
                                <span>Urdo</span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-3 language_select">
                            <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                <div class="avatar-image avatar-sm"><img src="assets/vendors/img/flags/1x1/vi.svg" alt="" class="img-fluid"></div>
                                <span>Vietnamese</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] Language Select !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Downloading Toast !-->
    <!--! ================================================================ !-->
    <div class="position-fixed" style="right: 5px; bottom: 5px; z-index: 999999">
        <div id="toast" class="toast bg-black hide" data-bs-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header px-3 bg-transparent d-flex align-items-center justify-content-between border-bottom border-light border-opacity-10">
                <div class="text-white mb-0 mr-auto">Downloading...</div>
                <a href="javascript:void(0)" class="ms-2 mb-1 close fw-normal" data-bs-dismiss="toast" aria-label="Close">
                    <span class="text-white">&times;</span>
                </a>
            </div>
            <div class="toast-body p-3 text-white">
                <h6 class="fs-13 text-white">Project.zip</h6>
                <span class="text-light fs-11">4.2mb of 5.5mb</span>
            </div>
            <div class="toast-footer p-3 pt-0 border-top border-light border-opacity-10">
                <div class="progress mt-3" style="height: 5px">
                    <div class="progress-bar progress-bar-striped progress-bar-animated w-75 bg-dark" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Downloading Toast !-->
    <!--! ================================================================ !-->
	<?php include './partials/theme-customizer.php'?>
	<!--<< All JS Plugins >>-->
	<?php include './partials/script.php'?>		
    <!--! END: Theme Customizer !-->
    <!--! Checklist JS !-->
    <script>
        // Create a "close" button and append it to each list item
        var myNodelist = document.querySelectorAll("#checklist> li");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            myNodelist[i].appendChild(span);
        }

        // Click on a close button to hide the current list item
        var close = document.getElementsByClassName("close");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            };
        }

        // Add a "checked" symbol when clicking on a list item
        var list = document.getElementById("checklist");
        list.addEventListener(
            "click",
            function(ev) {
                if (ev.target.tagName === "LI") {
                    ev.target.classList.toggle("checked");
                }
            },
            false
        );

        // Create a new list item when clicking on the "Add" button
        function newElement() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("checklistInput").value;
            var t = document.createTextNode(inputValue);
            li.appendChild(t);
            if (inputValue === "") {
                alert("You must write something!");
            } else {
                document.getElementById("checklist").appendChild(li);
            }
            document.getElementById("checklistInput").value = "";

            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            li.appendChild(span);

            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                };
            }
        }
    </script>
</body>

</html>
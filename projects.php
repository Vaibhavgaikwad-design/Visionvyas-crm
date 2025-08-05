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
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Projects</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Projects</li>
                    </ul>
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        <div class="d-flex d-md-none">
                            <a href="javascript:void(0)" class="page-header-right-close-toggle">
                                <i class="feather-arrow-left me-2"></i>
                                <span>Back</span>
                            </a>
                        </div>
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                            <a href="javascript:void(0);" class="btn btn-icon btn-light-brand" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                <i class="feather-bar-chart"></i>
                            </a>
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-filter"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-primary rounded-circle d-inline-block me-3"></span>
                                        <span>Alls</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-indigo rounded-circle d-inline-block me-3"></span>
                                        <span>On Hold</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>Pending</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Finished</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-danger rounded-circle d-inline-block me-3"></span>
                                        <span>Declined</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-teal rounded-circle d-inline-block me-3"></span>
                                        <span>In Progress</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-success rounded-circle d-inline-block me-3"></span>
                                        <span>Not Started</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <span class="wd-7 ht-7 bg-warning rounded-circle d-inline-block me-3"></span>
                                        <span>My Projects</span>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-paperclip"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-pdf me-3"></i>
                                        <span>PDF</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-csv me-3"></i>
                                        <span>CSV</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-xml me-3"></i>
                                        <span>XML</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-txt me-3"></i>
                                        <span>Text</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-exe me-3"></i>
                                        <span>Excel</span>
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-printer me-3"></i>
                                        <span>Print</span>
                                    </a>
                                </div>
                            </div>
                            <a href="projects-create.html" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Create Prject</span>
                            </a>
                        </div>
                    </div>
                    <div class="d-md-none d-flex align-items-center">
                        <a href="javascript:void(0)" class="page-header-right-open-toggle">
                            <i class="feather-align-right fs-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div id="collapseOne" class="accordion-collapse collapse page-header-collapse">
                <div class="accordion-body pb-2">
                    <div class="row">
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Not Started</span>
                                        <span class="fs-24 fw-bolder d-block">04</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Invoices Awaiting</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">$5,569</span>
                                                <span class="fs-11 text-muted">(56%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">In Progress</span>
                                        <span class="fs-24 fw-bolder d-block">06</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Projects In Progress</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">16 Completed</span>
                                                <span class="fs-11 text-muted">(78%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Cancelled</span>
                                        <span class="fs-24 fw-bolder d-block">02</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Converted Leads</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">52 Completed</span>
                                                <span class="fs-11 text-muted">(63%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-6">
                            <div class="card stretch stretch-full">
                                <div class="card-body">
                                    <a href="javascript:void(0);" class="fw-bold d-block">
                                        <span class="d-block">Finished</span>
                                        <span class="fs-24 fw-bolder d-block">25</span>
                                    </a>
                                    <div class="pt-4">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <a href="javascript:void(0);" class="fs-12 fw-medium text-muted">
                                                <span>Conversion Rate</span>
                                                <i class="feather-link-2 fs-10 ms-1"></i>
                                            </a>
                                            <div>
                                                <span class="fs-12 text-muted">$2,254</span>
                                                <span class="fs-11 text-muted">(46%)</span>
                                            </div>
                                        </div>
                                        <div class="progress mt-2 ht-3">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="projectList">
                                        <thead>
                                            <tr>
                                                <th class="wd-30">
                                                    <div class="btn-group mb-1">
                                                        <div class="custom-control custom-checkbox ms-1">
                                                            <input type="checkbox" class="custom-control-input" id="checkAllProject">
                                                            <label class="custom-control-label" for="checkAllProject"></label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Project Name</th>
                                                <th>Customer</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Assigned</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1">
                                                            <label class="custom-control-label" for="checkBox_1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/app-store.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Spark: This name could work well for a project related to innovation, creativity, or inspiration.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Alexandra Della</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-05</td>
                                                <td>2023-04-10</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9" selected>mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary" selected>In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_2">
                                                            <label class="custom-control-label" for="checkBox_2"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/dropbox.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Nexus: This name could work well for a project related to connectivity, bringing different people or ideas together, or solving complex problems.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-02</td>
                                                <td>2023-04-06</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8" selected>nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_3">
                                                            <label class="custom-control-label" for="checkBox_3"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/facebook.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Velocity: This name could work well for a project related to speed, efficiency, or productivity.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Green Cute</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-12</td>
                                                <td>2023-04-15</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7" selected>green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success" selected>On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_4">
                                                            <label class="custom-control-label" for="checkBox_4"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/figma.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Catalyst: This name could work well for a project related to driving change or transformation.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-teal text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Henry Leach</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-20</td>
                                                <td>2023-04-25</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6" selected>erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_5">
                                                            <label class="custom-control-label" for="checkBox_5"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/github.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Odyssey: This name could work well for a project related to exploration, adventure, or discovery.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Marianne Audrey</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-25</td>
                                                <td>2023-04-30</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6" selected>erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal" selected>Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_6">
                                                            <label class="custom-control-label" for="checkBox_6"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/gitlab.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Synergy: This name could work well for a project related to collaboration or teamwork, where multiple parts come together to create a greater whole.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-15</td>
                                                <td>2023-04-20</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5" selected>mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary" selected>In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_7">
                                                            <label class="custom-control-label" for="checkBox_7"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/gmail.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Zenith: This name could work well for a project related to achieving the highest point or peak of success.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Cute Green</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-07</td>
                                                <td>2023-04-12</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4" selected>nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_8">
                                                            <label class="custom-control-label" for="checkBox_8"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/google-drive.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Zenith: This name could work well for a project related to achieving the highest point or peak of success.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-success text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Leach Henry</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-06</td>
                                                <td>2023-04-08</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3" selected>green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success" selected>On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_9">
                                                            <label class="custom-control-label" for="checkBox_9"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/instagram.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Momentum: This name could work well for a project related to maintaining forward motion and progress.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Audrey Marianne</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-04-15</td>
                                                <td>2023-04-25</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1">alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2" selected>john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Declined</option>
                                                        <option value="teal" data-bg="bg-teal">Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_10">
                                                            <label class="custom-control-label" for="checkBox_10"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="project-name-td">
                                                    <div class="hstack gap-4">
                                                        <div class="avatar-image border-0">
                                                            <img src="assets/images/brand/paypal.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <a href="projects-view.html" class="text-truncate-1-line">Horizon: This name could work well for a project related to exploring new frontiers or expanding into new areas.</a>
                                                            <p class="fs-12 text-muted mt-2 text-truncate-1-line project-list-desc">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                                                            <div class="project-list-action fs-12 d-flex align-items-center gap-3 mt-2">
                                                                <a href="javascript:void(0);">Start</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);">Edit</a>
                                                                <span class="vr text-muted"></span>
                                                                <a href="javascript:void(0);" class="text-danger">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="projects-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-primary text-white">E</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Elliot Nancy</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>2023-05-01</td>
                                                <td>2023-05-03</td>
                                                <td>
                                                    <select class="form-select form-control" data-select2-selector="user">
                                                        <option value="alex@outlook.com" data-user="1" selected>alex@outlook.com</option>
                                                        <option value="john.deo@outlook.com" data-user="2">john.deo@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="3">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="4">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="5">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="6">erna.serpa@outlook.com</option>
                                                        <option value="green.cutte@outlook.com" data-user="7">green.cutte@outlook.com</option>
                                                        <option value="nancy.elliot@outlook.com" data-user="8">nancy.elliot@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="9">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="10">erna.serpa@outlook.com</option>
                                                        <option value="mar.audrey@gmail.com" data-user="11">mar.audrey@gmail.com</option>
                                                        <option value="erna.serpa@outlook.com" data-user="12">erna.serpa@outlook.com</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="primary" data-bg="bg-primary">In Projress</option>
                                                        <option value="warning" data-bg="bg-warning">Not Started</option>
                                                        <option value="success" data-bg="bg-success">On Hold</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                        <option value="teal" data-bg="bg-teal" selected>Finished</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="projects-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
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
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
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
    <!--! ================================================================ !-->
    <!--! BEGIN: Theme Customizer !-->
    <!--! ================================================================ !-->
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
                <!--! BEGIN: [Navigation] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Navigation</label>
                    <div class="row g-2 theme-options-items app-navigation" id="appNavigationList">
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-navigation-light" name="app-navigation" value="1" data-app-navigation="app-navigation-light" checked>
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-navigation-light">Light</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-navigation-dark" name="app-navigation" value="2" data-app-navigation="app-navigation-dark">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-navigation-dark">Dark</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Navigation] !-->
                <!--! BEGIN: [Header] !-->
                <div class="position-relative px-3 pb-3 pt-4 mt-3 mb-5 border border-gray-2 theme-options-set mt-5">
                    <label class="py-1 px-2 fs-8 fw-bold text-uppercase text-muted text-spacing-2 bg-white border border-gray-2 position-absolute rounded-2 options-label" style="top: -12px">Header</label>
                    <div class="row g-2 theme-options-items app-header" id="appHeaderList">
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-header-light" name="app-header" value="1" data-app-header="app-header-light" checked>
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-header-light">Light</label>
                        </div>
                        <div class="col-6 text-center single-option">
                            <input type="radio" class="btn-check" id="app-header-dark" name="app-header" value="2" data-app-header="app-header-dark">
                            <label class="py-2 fs-9 fw-bold text-dark text-uppercase text-spacing-1 border border-gray-2 w-100 h-100 c-pointer position-relative options-label" for="app-header-dark">Dark</label>
                        </div>
                    </div>
                </div>
                <!--! END: [Header] !-->
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

    <!--! ================================================================ !-->
    <!--! [End] Theme Customizer !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="assets/vendors/js/dataTables.min.js"></script>
    <script src="assets/vendors/js/dataTables.bs5.min.js"></script>
    <script src="assets/vendors/js/select2.min.js"></script>
    <script src="assets/vendors/js/select2-active.min.js"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="assets/js/common-init.min.js"></script>
    <script src="assets/js/projects-init.min.js"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>
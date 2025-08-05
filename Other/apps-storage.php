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
    <main class="nxl-container apps-container apps-storage">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-md" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Storage</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-header">
                        <a href="javascript:void(0);" class="btn btn-primary w-100">
                            <i class="feather-upload me-2"></i>
                            <span>Upload Files</span>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-image"></i>
                                    <span>Images</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-video"></i>
                                    <span>Videos</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0);">
                                    <span class="d-flex align-items-center">
                                        <i class="feather-folder me-3"></i>
                                        <span>Folders</span>
                                    </span>
                                    <span class="badge bg-soft-danger text-danger">7</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-clock"></i>
                                    <span>History</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-settings"></i>
                                    <span>Settings</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Members</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkboxAlls">
                                        <label class="custom-control-label c-pointer" for="checkboxAlls">Alls</label>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkboxUsers">
                                        <label class="custom-control-label c-pointer" for="checkboxUsers">Users</label>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkboxEditor">
                                        <label class="custom-control-label c-pointer" for="checkboxEditor">Editor</label>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkboxAdmin" checked>
                                        <label class="custom-control-label c-pointer" for="checkboxAdmin">Admin</label>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkboxContributor">
                                        <label class="custom-control-label c-pointer" for="checkboxContributor">Contributor</label>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="nav-link">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkboxContributorAdministrator" checked>
                                        <label class="custom-control-label c-pointer" for="checkboxContributorAdministrator">Administrator</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav flex-column nxl-content-sidebar-item">
                            <li class="px-4 mx-2 my-2 fs-10 fw-bold text-uppercase text-muted text-spacing-1 d-flex align-items-center justify-content-between">
                                <span>Filter</span>
                                <a href="javascript:void(0);">
                                    <span class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New"> <i class="feather-plus"></i> </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-clock"></i>
                                    <span>Recent</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-star"></i>
                                    <span>Favorite</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-bell"></i>
                                    <span>Snoozed</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center justify-content-between" href="javascript:void(0);">
                                    <span class="d-flex align-items-center">
                                        <i class="feather-info me-3"></i>
                                        <span>Important</span>
                                    </span>
                                    <span class="badge bg-soft-success text-success">3</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0);">
                                    <i class="feather-share-2"></i>
                                    <span>Shared Files</span>
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
                            <select class="form-control" data-select2-selector="storage">
                                <option value="box" data-storage="box">Box</option>
                                <option value="icloud" data-storage="icloud">iCloud</option>
                                <option value="dropbox" data-storage="dropbox" selected>Dropbox</option>
                                <option value="onedrive" data-storage="onedrive">Onedrive</option>
                                <option value="google-drive" data-storage="google-drive">G-Drive</option>
                                <option value="local-storage" data-storage="local-storage">Local</option>
                            </select>
                            <div class="dropdown d-none d-sm-block">
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
                                                <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Back">
                                                    <i class="feather-arrow-left"></i>
                                                </div>
                                            </a>
                                            <input type="search" class="py-3 px-0 border-0 w-100" id="storageSearch" placeholder="Search..." autocomplete="off">
                                        </div>
                                    </form>
                                </div>
                                <a href="javascript:void(0)" class="d-flex d-none d-sm-block">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Grid View">
                                        <i class="feather-grid"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex d-none d-sm-block">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="List View">
                                        <i class="feather-list"></i>
                                    </div>
                                </a>
                                <div class="dropdown d-none d-sm-block">
                                    <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-auto-close="outside" data-bs-offset="0, 22">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add New">
                                            <i class="feather-plus"></i>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-file-plus me-3"></i>
                                                <span>New File</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-file-text me-3"></i>
                                                <span>New Note</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-folder-plus me-3"></i>
                                                <span>New Folder</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-image me-3"></i>
                                                <span>New Image</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-music me-3"></i>
                                                <span>New Audio</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-video me-3"></i>
                                                <span>New Video</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-hard-drive me-3"></i>
                                                <span>Add New Drive</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-database me-3"></i>
                                                <span>Add New Storage</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown d-none d-sm-block">
                                    <a href="javascript:void(0)" class="d-flex" data-bs-toggle="dropdown" data-bs-offset="0, 22" data-bs-auto-close="outside">
                                        <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="More Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-sliders me-3"></i>
                                                <span>Filter</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-eye-off me-3"></i>
                                                <span>Unread</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-archive me-3"></i>
                                                <span>Archive</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-alert-triangle me-3"></i>
                                                <span>Spam</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-alert-octagon me-3"></i>
                                                <span>phishing</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-bell-off me-3"></i>
                                                <span>Mute</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-slash me-3"></i>
                                                <span>Block</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item">
                                                <i class="feather-trash-2 me-3"></i>
                                                <span>Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-area-body">
                        <!--! BEGIN: [cloud-storage-section] !-->
                        <div class="recent-section mb-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="me-4">
                                    <h2 class="fs-16 fw-bold mb-1">Cloud Storage</h2>
                                    <div class="fs-12 text-muted text-truncate-1-line">Total Storage 100 GB (Free space 53.64 GB)</div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View More</a>
                            </div>
                            <div class="row">
                                <div class="col-xxl-4 col-md-6 d-xxl-none">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between storage-icon-name">
                                                <div class="d-flex align-items-center">
                                                    <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                        <img src="assets/images/storage-icons/local-storage.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="d-block ms-3">
                                                        <a href="javascript:void(0)" class="fs-13 fw-bold d-block text-truncate-1-line" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">Local Storage</a>
                                                        <small class="fw-normal text-muted text-truncate-1-line">286.45GB / 500.00GB</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                                <i class="feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                                <i class="feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-4 storage-status">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <h2 class="fs-10 fw-bold text-uppercase tx-spacing-1 mb-0">Storage</h2>
                                                    <div class="fs-10 text-muted text-uppercase">
                                                        <span class="text-truncate-1-line">286.45GB used</span>
                                                    </div>
                                                </div>
                                                <div class="progress ht-5">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 26%"></div>
                                                </div>
                                                <div class="d-flex align-items-center mt-2">
                                                    <div class="me-1">
                                                        <i class="feather-clock fs-10 text-muted"></i>
                                                    </div>
                                                    <div class="fs-11 fw-normal text-muted text-truncate-1-line">Last Activity: 36 Mins Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between storage-icon-name">
                                                <div class="d-flex align-items-center">
                                                    <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                        <img src="assets/images/storage-icons/dropbox.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="d-block ms-3">
                                                        <a href="javascript:void(0)" class="fs-13 fw-bold d-block text-truncate-1-line" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">Dropbox Storage</a>
                                                        <small class="fw-normal text-muted text-truncate-1-line">5.68GB / 15.00GB</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                                <i class="feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                                <i class="feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-4 storage-status">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <h2 class="fs-10 fw-bold text-uppercase tx-spacing-1 mb-0">Storage</h2>
                                                    <div class="fs-10 text-muted text-uppercase">
                                                        <span class="text-truncate-1-line">5.68GB used</span>
                                                    </div>
                                                </div>
                                                <div class="progress ht-5">
                                                    <div class="progress-bar bg-texl" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 56%"></div>
                                                </div>
                                                <div class="d-flex align-items-center mt-2">
                                                    <div class="me-1">
                                                        <i class="feather-clock fs-10 text-muted"></i>
                                                    </div>
                                                    <div class="fs-11 fw-normal text-muted text-truncate-1-line">Last Activity: 3 Hours Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between storage-icon-name">
                                                <div class="d-flex align-items-center">
                                                    <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                        <img src="assets/images/storage-icons/google-drive.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="d-block ms-3">
                                                        <a href="javascript:void(0)" class="fs-13 fw-bold d-block text-truncate-1-line" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">Google Drive</a>
                                                        <small class="fw-normal text-muted text-truncate-1-line">4.75GB / 10GB</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                                <i class="feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                                <i class="feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-4 storage-status">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <h2 class="fs-10 fw-bold text-uppercase tx-spacing-1 mb-0">Storage</h2>
                                                    <div class="fs-10 text-muted text-uppercase">
                                                        <span class="text-truncate-1-line">4.75GB used</span>
                                                    </div>
                                                </div>
                                                <div class="progress ht-5">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                                </div>
                                                <div class="d-flex align-items-center mt-2">
                                                    <div class="me-1">
                                                        <i class="feather-clock fs-10 text-muted"></i>
                                                    </div>
                                                    <div class="fs-11 fw-normal text-muted text-truncate-1-line">Last Activity: 5 Hours Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-4 col-md-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between storage-icon-name">
                                                <div class="d-flex align-items-center">
                                                    <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                        <img src="assets/images/storage-icons/box.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="d-block ms-3">
                                                        <a href="javascript:void(0)" class="fs-13 fw-bold d-block text-truncate-1-line" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">Box Storage</a>
                                                        <small class="fw-normal text-muted text-truncate-1-line">3.64GB / 10.00GB</small>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                        <i class="feather-more-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-share-2 me-3"></i>
                                                                <span>Share</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                                <i class="feather-info me-3"></i>
                                                                <span>Details</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-edit-2 me-3"></i>
                                                                <span>Rename</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item file-download">
                                                                <i class="feather-download me-3"></i>
                                                                <span>Download</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-copy me-3"></i>
                                                                <span>Copy to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item">
                                                                <i class="feather-move me-3"></i>
                                                                <span>Move to...</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                                <i class="feather-link-2 me-3"></i>
                                                                <span>Open with...</span>
                                                            </a>
                                                        </li>
                                                        <li class="dropdown-divider"></li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                                <i class="feather-scissors me-3"></i>
                                                                <span>Backup</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                <i class="feather-trash-2 me-3"></i>
                                                                <span>Remove</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="mt-4 storage-status">
                                                <div class="d-flex justify-content-between align-items-center mb-1">
                                                    <h2 class="fs-10 fw-bold text-uppercase tx-spacing-1 mb-0">Storage</h2>
                                                    <div class="fs-10 text-muted text-uppercase">
                                                        <span class="text-truncate-1-line">3.64GB used</span>
                                                    </div>
                                                </div>
                                                <div class="progress ht-5">
                                                    <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 36%"></div>
                                                </div>
                                                <div class="d-flex align-items-center mt-2">
                                                    <div class="me-1">
                                                        <i class="feather-clock fs-10 text-muted"></i>
                                                    </div>
                                                    <div class="fs-11 fw-normal text-muted text-truncate-1-line">Last Activity: 26 Aug, 2022</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: [cloud-storage-section] !-->
                        <!--! BEGIN: [recent-section] !-->
                        <div class="recent-section mb-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="me-4">
                                    <h2 class="fs-16 fw-bold mb-1">Recent Files</h2>
                                    <div class="fs-12 text-muted text-truncate-1-line">Recent access files <span class="fs-11 fw-normal text-muted">(Last access 24 min ago)</span></div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View More</a>
                            </div>
                            <div class="row">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0 ht-250">
                                            <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas"> <img src="assets/images/file-icons/zip.png" class="img-fluid wd-80 ht-80" alt=""> </a>
                                        </div>
                                        <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-muted">Webapps</span></small>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                    <i class="feather-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-share-2 me-3"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                            <i class="feather-info me-3"></i>
                                                            <span>Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-edit-2 me-3"></i>
                                                            <span>Rename</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item file-download">
                                                            <i class="feather-download me-3"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-copy me-3"></i>
                                                            <span>Copy to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-move me-3"></i>
                                                            <span>Move to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                            <i class="feather-link-2 me-3"></i>
                                                            <span>Open with...</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                            <i class="feather-scissors me-3"></i>
                                                            <span>Backup</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                            <i class="feather-trash-2 me-3"></i>
                                                            <span>Remove</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0 ht-250">
                                            <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas"> <img src="assets/images/file-icons/png.png" class="img-fluid wd-100 ht-100" alt=""> </a>
                                        </div>
                                        <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-muted">Webapps</span></small>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                    <i class="feather-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-share-2 me-3"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                            <i class="feather-info me-3"></i>
                                                            <span>Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-edit-2 me-3"></i>
                                                            <span>Rename</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item file-download">
                                                            <i class="feather-download me-3"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-copy me-3"></i>
                                                            <span>Copy to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-move me-3"></i>
                                                            <span>Move to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                            <i class="feather-link-2 me-3"></i>
                                                            <span>Open with...</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                            <i class="feather-scissors me-3"></i>
                                                            <span>Backup</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                            <i class="feather-trash-2 me-3"></i>
                                                            <span>Remove</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0 ht-250">
                                            <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas"> <img src="assets/images/file-icons/pdf.png" class="img-fluid wd-100 ht-100" alt=""> </a>
                                        </div>
                                        <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-muted">Webapps</span></small>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                    <i class="feather-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-share-2 me-3"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                            <i class="feather-info me-3"></i>
                                                            <span>Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-edit-2 me-3"></i>
                                                            <span>Rename</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item file-download">
                                                            <i class="feather-download me-3"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-copy me-3"></i>
                                                            <span>Copy to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-move me-3"></i>
                                                            <span>Move to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                            <i class="feather-link-2 me-3"></i>
                                                            <span>Open with...</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                            <i class="feather-scissors me-3"></i>
                                                            <span>Backup</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                            <i class="feather-trash-2 me-3"></i>
                                                            <span>Remove</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0 ht-250">
                                            <a href="javascript:void(0);" class="w-100 h-100 d-flex align-items-center justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas"> <img src="assets/images/file-icons/psd.png" class="img-fluid wd-100 ht-100" alt=""> </a>
                                        </div>
                                        <div class="card-footer p-4 d-flex align-items-center justify-content-between">
                                            <div>
                                                <h2 class="fs-13 mb-1 text-truncate-1-line">UI/UX Design Templates</h2>
                                                <small class="fs-10 text-uppercase"><a href="javascript:void(0);">Project</a> / <a href="javascript:void(0);">Dashboard</a> / <span class="text-muted">Webapps</span></small>
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                    <i class="feather-more-vertical"></i>
                                                </a>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-share-2 me-3"></i>
                                                            <span>Share</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                            <i class="feather-info me-3"></i>
                                                            <span>Details</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-edit-2 me-3"></i>
                                                            <span>Rename</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item file-download">
                                                            <i class="feather-download me-3"></i>
                                                            <span>Download</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-copy me-3"></i>
                                                            <span>Copy to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item">
                                                            <i class="feather-move me-3"></i>
                                                            <span>Move to...</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://themeforest.net/user/theme_ocean/" target="_blank" class="dropdown-item">
                                                            <i class="feather-link-2 me-3"></i>
                                                            <span>Open with...</span>
                                                        </a>
                                                    </li>
                                                    <li class="dropdown-divider"></li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item successAlertMessage">
                                                            <i class="feather-scissors me-3"></i>
                                                            <span>Backup</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                            <i class="feather-trash-2 me-3"></i>
                                                            <span>Remove</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: [recent-section] !-->
                        <!--! BEGIN: [folder-section] !-->
                        <div class="folder-section mb-5">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="me-4">
                                    <h2 class="fs-16 fw-bold mb-1">Folders</h2>
                                    <div class="text-muted text-truncate-1-line">Recent access folders <span class="fs-11 fw-normal text-muted">(Last access 2 hours ago)</span></div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View More</a>
                            </div>
                            <div class="row">
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/zip.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/psd.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/png.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/pdf.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/psd.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/png.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/pdf.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6">
                                    <div class="card mb-4 stretch stretch-full">
                                        <div class="card-body p-0">
                                            <a href="javascript:void(0);" class="d-flex align-items-center border-bottom p-3" data-bs-toggle="offcanvas" data-bs-target="#fileFolderDetailsOffcanvas">
                                                <div class="p-2 avatar-image bg-gray-200 rounded-3">
                                                    <img src="assets/images/file-icons/psd.png" alt="" class="img-fluid">
                                                </div>
                                                <div class="ms-3">
                                                    <span class="d-block">UX/UI Templates</span>
                                                    <span class="fs-10 text-muted text-uppercase d-block">2,478 Files</span>
                                                </div>
                                            </a>
                                            <div class="img-group lh-0 p-3" style="margin-left: 15px">
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                    <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                    <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                    <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                </a>
                                                <a href="javascript:void(0)" class="avatar-text avatar-sm bg-soft-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                    <i class="feather-more-horizontal"></i>
                                                </a>
                                                <div class="text-truncate-1-line">
                                                    <span class="text-muted fs-12 ms-2">862+ members recently access</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: [folder-section] !-->
                        <!--! BEGIN: [project-section] !-->
                        <div class="project-section">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="me-4">
                                    <h2 class="fs-16 fw-bold mb-1">Project Files</h2>
                                    <div class="fs-12 text-muted text-truncate-1-line">Recent project files <span class="fs-11 fw-normal text-muted">(Last access 24 min ago)</span></div>
                                </div>
                                <a href="javascript:void(0);" class="btn btn-sm btn-light-brand">View More</a>
                            </div>
                            <div class="card mb-0">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Size</th>
                                                    <th scope="col">Upload</th>
                                                    <th scope="col">Members</th>
                                                    <th scope="col" class="text-end">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/html.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">HTML5 Webpages - V2.3.4</a>
                                                        </div>
                                                    </td>
                                                    <td>5.34 MB</td>
                                                    <td>25 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">852+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/css.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">CSS3 Stylesheeth - V2.1.4</a>
                                                        </div>
                                                    </td>
                                                    <td>2.67 MB</td>
                                                    <td>20 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">753+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/pdf.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">PDF Documentations - V3.2.1</a>
                                                        </div>
                                                    </td>
                                                    <td>2.85 MB</td>
                                                    <td>20 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">654+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/html.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">HTML5 Webpages - V2.3.4</a>
                                                        </div>
                                                    </td>
                                                    <td>5.34 MB</td>
                                                    <td>25 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">852+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/css.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">CSS3 Stylesheeth - V2.1.4</a>
                                                        </div>
                                                    </td>
                                                    <td>2.67 MB</td>
                                                    <td>20 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">753+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/pdf.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">PDF Documentations - V3.2.1</a>
                                                        </div>
                                                    </td>
                                                    <td>2.85 MB</td>
                                                    <td>20 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">654+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/html.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">HTML5 Webpages - V2.3.4</a>
                                                        </div>
                                                    </td>
                                                    <td>5.34 MB</td>
                                                    <td>25 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">852+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center gap-3">
                                                            <img src="assets/images/file-icons/css.png" class="img-fluid rounded wd-30" alt="">
                                                            <a href="javascript:void(0)">CSS3 Stylesheeth - V2.1.4</a>
                                                        </div>
                                                    </td>
                                                    <td>2.67 MB</td>
                                                    <td>20 March, 2023</td>
                                                    <td>
                                                        <div class="img-group lh-lg">
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Janette Dalton">
                                                                <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Michael Ksen">
                                                                <img src="assets/images/avatar/3.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Socrates Itumay">
                                                                <img src="assets/images/avatar/4.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/5.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-image avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Marianne Audrey">
                                                                <img src="assets/images/avatar/6.png" class="img-fluid" alt="image">
                                                            </a>
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Explorer More">
                                                                <i class="feather-more-horizontal"></i>
                                                            </a>
                                                            <div>
                                                                <span class="text-muted fs-12 ms-2">753+ members</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown hstack text-end justify-content-end">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                                <i class="feather-more-vertical"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-eye me-3"></i>
                                                                        <span>Open</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-share-2 me-3"></i>
                                                                        <span>Share</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                                        <i class="feather-scissors me-3"></i>
                                                                        <span>Backup</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="dropdown-item" data-action-target="#fileFolderDeleteAction">
                                                                        <i class="feather-x me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <ul class="list-unstyled d-flex align-items-center gap-2 mb-0 pagination-common-style">
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-arrow-left"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);" class="active">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-dot"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);">8</a></li>
                                        <li><a href="javascript:void(0);">9</a></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="bi bi-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--! END: [project-section] !-->
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
    <!--! BEGIN: File or Folder  Details [file-manager-folder-details] !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end file-manager-folder-details" tabindex="-1" id="fileFolderDetailsOffcanvas">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="staticBackdropLabel">Storage Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="fileDetailsTab">
                    <div class="p-4 d-flex align-items-center justify-content-center">
                        <img src="assets/images/storage-icons/undefined.png" class="img-fluid wd-200" alt="">
                    </div>
                    <!--! BEGIN: [drive-specifications] !-->
                    <div class="drive-specifications">
                        <div class="px-4 py-2 fw-bold text-dark border-top border-bottom sticky-top bg-gray-100">Specifications</div>
                        <div class="p-4 fs-12">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Type</span>
                                <span class="text-muted">Folder</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Location</span>
                                <span class="text-muted">Files & Documents</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Contributing</span>
                                <span class="text-muted">Specify</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Album</span>
                                <span class="text-muted">Specify</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Genre</span>
                                <span class="text-muted">Specify</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Year</span>
                                <span class="text-muted">2021</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Size</span>
                                <span class="text-muted">65.52 MB</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Track</span>
                                <span class="text-muted">Specify</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Artist</span>
                                <span class="text-muted">Specify</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Title</span>
                                <span class="text-muted">All Folder</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Bit Rate</span>
                                <span class="text-muted">512kbps</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Date Modification</span>
                                <span class="text-muted">10/10/2022</span>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="fw-semibold text-dark">Date Created</span>
                                <span class="text-muted">05/05/2022</span>
                            </div>
                        </div>
                    </div>
                    <!--! BEGIN: [drive-settings] !-->
                    <div class="drive-settings">
                        <div class="px-4 py-2 fw-bold text-dark border-top border-bottom sticky-top bg-gray-100">Settings</div>
                        <div class="p-4">
                            <div class="form-group mb-4">
                                <div class="form-item custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" id="checkboxSynchronization">
                                    <label class="custom-control-label ps-2" for="checkboxSynchronization">
                                        <span class="fw-semibold" style="margin-top: -5px">Synchronization</span>
                                        <span class="fs-11 fw-normal text-muted text-truncate-1-line">Lorem ipsum quia dolor sit amet adipisci quia dolor</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="form-item custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" id="checkboxAutoBackup" checked>
                                    <label class="custom-control-label ps-2" for="checkboxAutoBackup">
                                        <span class="fw-semibold" style="margin-top: -5px">Auto Backup</span>
                                        <span class="fs-11 fw-normal text-muted text-truncate-1-line">Lorem ipsum quia dolor sit amet adipisci quia dolor</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="form-item custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" id="checkboxMuteNotification">
                                    <label class="custom-control-label ps-2" for="checkboxMuteNotification">
                                        <span class="fw-semibold" style="margin-top: -5px">Mute Notification</span>
                                        <span class="fs-11 fw-normal text-muted text-truncate-1-line">Lorem ipsum quia dolor sit amet adipisci quia dolor</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="form-item custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" id="checkboxPushNotification" checked>
                                    <label class="custom-control-label ps-2" for="checkboxPushNotification">
                                        <span class="fw-semibold" style="margin-top: -5px">Push Notification</span>
                                        <span class="fs-11 fw-normal text-muted text-truncate-1-line">Lorem ipsum quia dolor sit amet adipisci quia dolor</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="form-item custom-control custom-checkbox checkbox-primary">
                                    <input type="checkbox" class="custom-control-input" id="checkboxGetNotification">
                                    <label class="custom-control-label ps-2" for="checkboxGetNotification">
                                        <span class="fw-semibold" style="margin-top: -5px">Get Notification</span>
                                        <span class="fs-11 fw-normal text-muted text-truncate-1-line">Lorem ipsum quia dolor sit amet adipisci quia dolor</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--! BEGIN: [drive-status] !-->
                    <div class="drive-status">
                        <div class="px-4 py-2 fw-bold text-dark border-top border-bottom sticky-top bg-gray-100">Statistics</div>
                        <div class="p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-soft-primary text-primary border-soft-primary rounded-3">
                                        <i class="feather-image"></i>
                                    </div>
                                    <div class="ms-3">
                                        <div class="fw-bold text-dark">Images</div>
                                        <span class="fs-11 fw-normal text-muted">1,252 Files</span>
                                    </div>
                                </div>
                                <div class="badge bg-gray-100 text-dark">2.25 GB</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-soft-danger text-danger border-soft-danger rounded-3">
                                        <i class="feather-video"></i>
                                    </div>
                                    <div class="ms-3">
                                        <div class="fw-bold text-dark">Video Files</div>
                                        <span class="fs-11 fw-normal text-muted">3,586 Files</span>
                                    </div>
                                </div>
                                <div class="badge bg-gray-100 text-dark">9.75 GB</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-soft-success text-success border-soft-success rounded-3">
                                        <i class="feather-file-text"></i>
                                    </div>
                                    <div class="ms-3">
                                        <div class="fw-bold text-dark">Documents</div>
                                        <span class="fs-11 fw-normal text-muted">2,147 Files</span>
                                    </div>
                                </div>
                                <div class="badge bg-gray-100 text-dark">3.47 GB</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-soft-teal text-teal border-soft-teal rounded-3">
                                        <i class="feather-music"></i>
                                    </div>
                                    <div class="ms-3">
                                        <div class="fw-bold text-dark">Audio Files</div>
                                        <span class="fs-11 fw-normal text-muted">2,354 Files</span>
                                    </div>
                                </div>
                                <div class="badge bg-gray-100 text-dark">3.49 GB</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-soft-warning text-warning border-soft-warning rounded-3">
                                        <i class="feather-monitor"></i>
                                    </div>
                                    <div class="ms-3">
                                        <div class="fw-bold text-dark">UI/UX Design</div>
                                        <span class="fs-11 fw-normal text-muted">3,456 Files</span>
                                    </div>
                                </div>
                                <div class="badge bg-gray-100 text-dark">2.94 GB</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div class="d-flex align-items-center">
                                    <div class="avatar-text bg-soft-info text-info border-soft-info rounded-3">
                                        <i class="feather-layers"></i>
                                    </div>
                                    <div class="ms-3">
                                        <div class="fw-bold text-dark">Other Files</div>
                                        <span class="fs-11 fw-normal text-muted">2,258 Files</span>
                                    </div>
                                </div>
                                <div class="badge bg-gray-100 text-dark">2.00 GB</div>
                            </div>
                        </div>
                    </div>
                    <!--! BEGIN: [drive-comments] !-->
                    <div class="drive-comments">
                        <div class="px-4 py-2 fw-bold text-dark border-top border-bottom sticky-top bg-gray-100">Comments</div>
                        <div class="p-4">
                            <div class="mb-4 d-flex align-items-start">
                                <div class="me-3 avatar-image">
                                    <img src="assets/images/avatar/3.png" class="rounded-circle img-fluid" alt="image">
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="me-2"> Marianne Audrey </a>
                                        <div class="fs-11 fw-normal text-muted">(Mar 2, 5:26 am)</div>
                                    </div>
                                    <div class="fs-12 text-muted mt-1 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo scing elit aenean commodo</div>
                                </div>
                            </div>
                            <div class="mb-4 d-flex align-items-start">
                                <div>
                                    <div class="me-3 bg-warning text-white avatar-text">N</div>
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="me-2"> Nancy Elliot </a>
                                        <div class="fs-11 fw-normal text-muted">(Mar 2, 5:26 am)</div>
                                    </div>
                                    <div class="fs-12 text-muted mt-1 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo scing elit aenean commodo</div>
                                </div>
                            </div>
                            <div class="mb-4 d-flex align-items-start">
                                <div class="me-3 avatar-image">
                                    <img src="assets/images/avatar/4.png" class="rounded-circle img-fluid" alt="image">
                                </div>
                                <div>
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="me-2"> Holland Scott </a>
                                        <div class="fs-11 fw-normal text-muted">(Mar 2, 2:21 pm)</div>
                                    </div>
                                    <div class="fs-12 text-muted mt-1 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo scing elit aenean commodo</div>
                                </div>
                            </div>
                            <textarea rows="5" class="form-control" placeholder="Comment"></textarea>
                            <a href="javascript:void(0);" class="btn btn-primary mt-4">Post Comment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: File  or Folder  Details [file-manager-folder-details] !-->
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
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Recnet <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
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
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Command <span class="badge small bg-gray-200 rounded ms-1 text-dark">5</span></h4>
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
                        <h4 class="fs-13 fw-normal text-gray-600 mb-3">Files <span class="badge small bg-gray-200 rounded ms-1 text-dark">3</span></h4>
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
</body>

</html>
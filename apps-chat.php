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
    <main class="nxl-container apps-container apps-chat">
        <div class="nxl-content without-header nxl-full-content">
            <!-- [ Main Content ] start -->
            <div class="main-content d-flex">
                <!-- [ Content Sidebar ] start -->
                <div class="content-sidebar content-sidebar-xl" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-sidebar-header bg-white sticky-top hstack justify-content-between">
                        <h4 class="fw-bolder mb-0">Chat</h4>
                        <a href="javascript:void(0);" class="app-sidebar-close-trigger d-flex">
                            <i class="feather-x"></i>
                        </a>
                    </div>
                    <div class="content-sidebar-body">
                        <div class="py-0 px-4 d-flex align-items-center justify-content-between border-bottom">
                            <form class="sidebar-search">
                                <input type="search" class="py-3 px-0 border-0" id="chattingSearch" placeholder="Search...">
                            </form>
                            <div class="dropdown sidebar-filter">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="d-flex align-items-center justify-content-center dropdown-toggle" data-bs-offset="0, 15"> Newest </a>
                                <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Oldest</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item active">Newest</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Replied</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Snoozed</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Ascending</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Descending</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Mute Conversion</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Block Conversion</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item">Delete Conversion</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="content-sidebar-items">
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Erna Serpa</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">2 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 fw-semibold text-dark mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-success text-white avatar-text">N</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Norman Byrd</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-danger"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">5 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 fw-semibold text-dark mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/11.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Laura Foreman</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">7 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-warning text-white avatar-text">B</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Bryan Waters</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-gray-500"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">10 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/12.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Ursula Sanders</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">9 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-danger text-white avatar-text">E</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Edward Andrade</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">13 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Alexandra Della</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">15 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="bg-gray-200 text-dark avatar-text">T</div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Timothy Boyd</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">13 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                            <div class="p-4 d-flex position-relative border-bottom c-pointer single-item">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid" alt="image">
                                </div>
                                <div class="ms-3 item-desc">
                                    <div class="w-100 d-flex align-items-center justify-content-between">
                                        <a href="javascript:void(0);" class="hstack gap-2 me-2">
                                            <span>Curtis Green</span>
                                            <div class="wd-5 ht-5 rounded-circle opacity-75 me-1 bg-success"></div>
                                            <span class="fs-10 fw-medium text-muted text-uppercase d-none d-sm-block">20 min ago</span>
                                        </a>
                                        <div class="dropdown">
                                            <a href="javascript:void(0)" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                                <i class="feather-more-vertical"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-menu-end overflow-auto">
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-check-circle me-3"></i>
                                                        <span>Make as Read</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-star me-3"></i>
                                                        <span>Add to Favorite</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-bell-off me-3"></i>
                                                        <span>Mute Notifications</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                                        <i class="feather-phone-call me-3"></i>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                                        <i class="feather-video me-3"></i>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-mail me-3"></i>
                                                        <span>Send eMail</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-divider"></li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-alert-triangle me-3"></i>
                                                        <span>Report Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-trash-2 me-3"></i>
                                                        <span>Delete Chat</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="dropdown-item">
                                                        <i class="feather-archive me-3"></i>
                                                        <span>Archive Chat</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="fs-12 text-muted mt-2 mb-0 text-truncate-2-line">Lorem ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo ipsum dolor sit amet, consec tetuer adipi scing elit aenean commodo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:void(0);" class="content-sidebar-footer px-4 py-3 fs-11 text-uppercase d-block text-center">Load More</a>
                </div>
                <!-- [ Content Sidebar  ] end -->
                <!-- [ Main Area  ] start -->
                <div class="content-area" data-scrollbar-target="#psScrollbarInit">
                    <div class="content-area-header sticky-top">
                        <div class="page-header-left hstack gap-4">
                            <a href="javascript:void(0);" class="app-sidebar-open-trigger">
                                <i class="feather-align-left fs-20"></i>
                            </a>
                            <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center gap-3" data-bs-toggle="offcanvas" data-bs-target="#userProfileDetails">
                                <div class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                </div>
                                <div class="d-none d-sm-block">
                                    <div class="fw-bold d-flex align-items-center">Alexandra Della</div>
                                    <div class="d-flex align-items-center mt-1">
                                        <span class="wd-7 ht-7 rounded-circle opacity-75 me-2 bg-success"></span>
                                        <span class="fs-9 text-uppercase fw-bold text-success">Active Now</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="page-header-right ms-auto">
                            <div class="d-flex align-items-center justify-content-center gap-2">
                                <a href="javascript:void(0)" class="d-flex" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Voice Call">
                                        <i class="feather-phone-call"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex d-flex" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Video Call">
                                        <i class="feather-video"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="d-flex d-none d-sm-block successAlertMessage">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add to Favorite">
                                        <i class="feather-star"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0)" class="ac-info-sidebar-open-trigger" data-bs-toggle="offcanvas" data-bs-target="#userProfileDetails">
                                    <div class="avatar-text avatar-md" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Profile Info">
                                        <i class="feather-info"></i>
                                    </div>
                                </a>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,22">
                                        <i class="feather-more-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-plus me-3"></i>
                                            <span> Join Group</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-user-plus me-3"></i>
                                            <span>Invite People</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-star me-3"></i>
                                            <span>Add to Favorite</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-bell-off me-3"></i>
                                            <span>Mute Conversion</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-phone-call me-3"></i>
                                            <span>Group Audio Call</span>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class="feather-video me-3"></i>
                                            <span>Group Video Call</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
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
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:32 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">Hi,</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">How are you?</p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:35 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">Hello Alex!!! Welcome to Live Chat!!!</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">My name is Green & How can I help you today???</p>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:40 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">Hi, I wanted to check my order status....</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">My order number is <a href="javascript:void(0);">#NXL0458</a></p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:42 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">No problem, let me check that for you.</p>
                                <p class="py-2 px-3 rounded-5 bg-white">Thanks for the information!!! Give me one moment please while I check on that for you.</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Thanks for your times, Your order <a href="javascript:void(0);">#NXL0458</a> will arive on this weekend.</p>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:45 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">Thanks. I'm worried😳 it won't arrive in time⌚ for my daughter's birthday🎂 party🎉 this weekend.</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Order tracking number is: <a href="javascript:void(0);">#698745</a></p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:48 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">I understand your concern… I wouldn't want my child's gift to arrive late either.</p>
                                <p class="py-2 px-3 rounded-5 bg-white">It looks like your order is set to arrive in 2 business days, so it should arrive by Friday, just in time!</p>
                                <div class="mb-3 d-flex align-items-center justify-content-between bg-white border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                            <img src="assets/images/file-icons/zip.png" class="img-fluid" alt="image">
                                        </a>
                                        <div class="d-block ms-3">
                                            <a href="javascript:void(0)" class="fs-13 fw-700 text-dark d-block">Order.zip</a>
                                            <small class="fw-300 text-dark">402.65/KB</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border-start">
                                        <a href="javascript:void(0)" class="avatar-text file-download">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="mb-3 d-flex align-items-center justify-content-between bg-white border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                            <img src="assets/images/file-icons/png.png" class="img-fluid" alt="image">
                                        </a>
                                        <div class="d-block ms-3">
                                            <a href="javascript:void(0)" class="fs-13 fw-700 text-dark d-block">Document.png</a>
                                            <small class="fw-300 text-dark">480.14/KB</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border-start">
                                        <a href="javascript:void(0)" class="avatar-text file-download">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between bg-white border rounded-3">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                                            <img src="assets/images/file-icons/psd.png" class="img-fluid" alt="image">
                                        </a>
                                        <div class="d-block ms-3">
                                            <a href="javascript:void(0)" class="fs-13 fw-700 text-dark d-block">Photos.psd</a>
                                            <small class="fw-300 text-dark">248.54/KB</small>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center p-3 border-start">
                                        <a href="javascript:void(0)" class="avatar-text file-download">
                                            <i class="feather-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:50 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <p class="py-2 px-3 rounded-5 bg-white">The birthday🎂 ceremony preparation almost completed</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Thank your so much.....!!!!</p>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                        <!--! BEGIN: Single Message [Reply] !-->
                        <div class="single-chat-item mb-5">
                            <div class="d-flex flex-row-reverse align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/2.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex flex-row-reverse align-items-center gap-2">
                                    <a href="javascript:void(0);">Green Cute</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">10:53 PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200 ms-auto">
                                <p class="py-2 px-3 rounded-5 bg-white">I understand your concern......!!</p>
                                <p class="py-2 px-3 rounded-5 bg-white mb-0">Anything else can I help you???</p>
                            </div>
                        </div>
                        <!--! END: Single Message [Reply] !-->
                        <!--! BEGIN: Single Message [start] !-->
                        <div class="single-chat-item mb-0">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <a href="javascript:void(0)" class="avatar-image">
                                    <img src="assets/images/avatar/1.png" class="img-fluid rounded-circle" alt="image">
                                </a>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:void(0);">Alexandra Della</a>
                                    <span class="wd-5 ht-5 bg-gray-400 rounded-circle"></span>
                                    <span class="fs-11 text-muted">00:00 AM/PM</span>
                                </div>
                            </div>
                            <div class="wd-500 p-3 rounded-5 bg-gray-200">
                                <div class="py-2 px-3 rounded-5 bg-white d-flex align-items-center text typing chat-message-items">
                                    <div class="fs-12 fw-semibold text-success">Typing</div>
                                    <div class="wave">
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--! END: Single Message  [start] !-->
                    </div>
                    <!--! BEGIN: Message Editor !-->
                    <div class="d-flex align-items-center justify-content-between border-top border-gray-5 bg-white sticky-bottom">
                        <div class="d-flex align-center">
                            <div class="dropdown border-end border-gray-5">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Pick Template" style="height: 59px"><i class="feather-hash"></i></div>
                                </a>
                                <ul class="dropdown-menu wd-300">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Welcome you message</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Your issues solved</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Thank you message</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Make a offer message</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Add the Unsubscribe option</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file-text me-3"></i>Thank your customer for joining</a>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-save me-3"></i>Save as Template</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-sun me-3"></i>Manage Template</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown border-end border-gray-5">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Upload Attachments" style="height: 59px"><i class="feather-link"></i></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-image me-3"></i>Upload Images</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-mic me-3"></i>Upload Audios</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-video me-3"></i>Upload Videos</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="feather-file me-3"></i>Upload Documents</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown border-end border-gray-5 d-none d-sm-block">
                                <a href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <div class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Calling Options" style="height: 59px"><i class="feather-phone-call"></i></div>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#voiceCallingModalScreen"><i class="feather-phone-call me-3"></i>Audio Call</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#videoCallingModalScreen"><i class="feather-video me-3"></i>Video Call</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input class="form-control border-0 emoji-picker" placeholder="Type your message here...">
                        <div class="border-start border-gray-5 send-message">
                            <a href="javascript:void(0)" class="wd-60 d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Send Message" style="height: 59px"><i class="feather-send"></i></a>
                        </div>
                    </div>
                    <!--! END: Message Editor !-->
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
    <!--! [Start] User Profile Info !-->
    <!--! ================================================================ !-->
    <div class="offcanvas offcanvas-end" id="userProfileDetails" aria-hidden="true" tabindex="-1">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title">Profile Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="p-4 text-center position-relative">
                <img src="assets/images/avatar/1.png" alt="" class="wd-100 ht-100 rounded-circle border border-5 img-fluid">
                <h2 class="text-dark fs-13 fw-bold mt-3 mb-0">Alexandra Della <i class="bi bi-patch-check text-success fs-11 ms-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Verified"></i><i class="bi bi-patch-question text-warning fs-11 ms-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Feedback"></i><i class="bi bi-patch-plus text-primary fs-11 ms-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Milestone"></i></h2>
                <span class="fs-12 text-muted d-block mb-3">alex.della@outlook.com</span>
                <a href="javascript:void(0)" class="btn btn-sm btn-primary d-inline-block rounded-pill">Software Engineer</a>
                <div class="d-flex justify-content-center mt-3 social-profile">
                    <a href="javascript:void(0)" class="avatar-text avatar-md me-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Github" aria-label="Github"><i class="feather-github"></i></a>
                    <a href="javascript:void(0)" class="avatar-text avatar-md me-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Codepen" aria-label="Codepen"><i class="feather-codepen"></i></a>
                    <a href="javascript:void(0)" class="avatar-text avatar-md me-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Gitlab" aria-label="Gitlab"><i class="feather-gitlab"></i></a>
                    <a href="javascript:void(0)" class="avatar-text avatar-md me-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Linkdein" aria-label="Linkdein"><i class="feather-linkedin"></i></a>
                    <a href="javascript:void(0)" class="avatar-text avatar-md me-1" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Instagram" aria-label="Instagram"><i class="feather-instagram"></i></a>
                </div>
            </div>
            <!-- Info -->
            <a class="py-2 px-4 fs-12 fw-bold d-block bg-gray-200 border-top border-bottom sticky-top sticky-bar" data-bs-toggle="collapse" href="#PersonalInfo">Personal</a>
            <div class="p-4 fs-13 collapse show" id="PersonalInfo">
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-clock"></i>
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="wd-10 ht-10 rounded-circle opacity-75 me-1 bg-success"></span>
                        <span class="fs-9 text-uppercase fw-bold text-success">Active Now</span>
                    </div>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-calendar"></i>
                    </div>
                    <a href="javascript:void(0)">26 Mar, 2022</a>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-phone"></i>
                    </div>
                    <a href="javascript:void(0)">759-479-5968</a>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-globe"></i>
                    </div>
                    <a href="javascript:void(0)">GMT: +06, 12:56 PM</a>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-map-pin"></i>
                    </div>
                    <a href="javascript:void(0)">San Diego, California</a>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-mail"></i>
                    </div>
                    <a href="javascript:void(0)">alex.della@outlook.com</a>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-external-link"></i>
                    </div>
                    <a href="javascript:void(0)">https://www.wrapcoders.com</a>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="me-3">
                        <i class="feather-activity"></i>
                    </div>
                    <div><span class="fw-medium text-muted">Recent activity by </span> <a href="javascript:void(0)" class="ac-info-sidebar-open-trigger">Alexandra Della</a></div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="me-3"><i class="feather-users"></i></div>
                    <div class="img-group lh-0 ms-3">
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
                        <span class="text-muted fs-12 ms-3">886+ members connections</span>
                    </div>
                </div>
                <div class="d-flex align-items-start about-text">
                    <div class="me-3">
                        <i class="feather-user"></i>
                    </div>
                    <p class="fs-12 text-muted mb-0 text-truncate-2-line">The story is about a weary detective who can"t resist a fight. It takes place in a jungle commonwealth on a world of forbidden magic. The threat of bioterrorism plays a major part in this story.</p>
                </div>
            </div>
            <!-- / Info -->
            <!-- Experience -->
            <a class="py-2 px-4 fs-12 fw-bold d-block bg-gray-200 border-top border-bottom sticky-top sticky-bar" data-bs-toggle="collapse" href="#ExperienceInfo">Experience</a>
            <div class="p-4 collapse show" id="ExperienceInfo">
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-gray-200 wd-60 ht-60 d-flex align-items-center justify-content-center rounded-3">
                        <i class="feather-briefcase"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="fs-13 fw-bold mb-1">Sr. Web Designer</h6>
                        <span class="fs-12 text-muted text-truncate-1-line">Gaibandha Computer &amp; IT Education, Bangladesh</span>
                        <span class="fs-11 fw-medium text-muted d-block">2014 - 2016</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-gray-200 wd-60 ht-60 d-flex align-items-center justify-content-center rounded-3">
                        <i class="feather-briefcase"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="fs-13 fw-bold mb-1">Jr. Web Desinger &amp; Developer</h6>
                        <span class="fs-12 text-muted text-truncate-1-line">Gaibandha Computer &amp; IT Education, Bangladesh</span>
                        <span class="fs-11 fw-medium text-muted d-block">2016 - 2019</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-center">
                    <div class="bg-gray-200 wd-60 ht-60 d-flex align-items-center justify-content-center rounded-3">
                        <i class="feather-briefcase"></i>
                    </div>
                    <div class="ms-3">
                        <h6 class="fs-13 fw-bold mb-1">Full-Stack Desinger &amp; Developer</h6>
                        <span class="fs-12 text-muted text-truncate-1-line">Gaibandha Computer &amp; IT Education, Bangladesh</span>
                        <span class="fs-11 fw-medium text-muted d-block">2019 - Present</span>
                    </div>
                </div>
            </div>
            <!--/ Experience -->
            <!-- Skills -->
            <a class="py-2 px-4 fs-12 fw-bold d-block bg-gray-200 border-top border-bottom sticky-top sticky-bar" data-bs-toggle="collapse" href="#SkillsInfo">Skills</a>
            <div class="p-4 collapse show" id="SkillsInfo">
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-1 fs-11 fw-medium text-uppercase">HTML <span class="ms-auto">80%</span></div>
                    <div class="progress ht-3 mb-4">
                        <div class="progress-bar bg-secondary" style="width: 80%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-1 fs-11 fw-medium text-uppercase">CSS <span class="ms-auto">90%</span></div>
                    <div class="progress ht-3 mb-4">
                        <div class="progress-bar bg-success" style="width: 90%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-1 fs-11 fw-medium text-uppercase">UI/UX <span class="ms-auto">80%</span></div>
                    <div class="progress ht-3 mb-4">
                        <div class="progress-bar bg-danger" style="width: 80%"></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-1 fs-11 fw-medium text-uppercase">JavaScript <span class="ms-auto">90%</span></div>
                    <div class="progress ht-3 mb-4">
                        <div class="progress-bar bg-warning" style="width: 90%"></div>
                    </div>
                </div>
                <div class="mb-0">
                    <div class="d-flex align-items-center mb-1 fs-11 fw-medium text-uppercase">Communication <span class="ms-auto">95%</span></div>
                    <div class="progress ht-3">
                        <div class="progress-bar bg-primary" style="width: 95%"></div>
                    </div>
                </div>
            </div>
            <!-- / Skills -->
            <!-- Followers -->
            <a class="py-2 px-4 fs-12 fw-bold d-block bg-gray-200 border-top border-bottom sticky-top sticky-bar" data-bs-toggle="collapse" href="#FollowersInfo">Followers</a>
            <div class="p-4 collapse show" id="FollowersInfo">
                <ul class="list-unstyled mb-0">
                    <li class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar-text me-3 bg-info text-white">G</div>
                            <div class="lh-sm">
                                <h2 class="fs-13 fw-bold mb-0"><a href="javascript:void(0);">Gregory Miller</a></h2>
                                <span class="fs-12 text-muted">gregory.miller@live.com</span>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand ml-auto d-none d-sm-block successAlertMessage">Follow</a>
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar-image me-3">
                                <img src="assets/images/avatar/5.png" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="lh-sm">
                                <h2 class="fs-13 fw-bold mb-0"><a href="javascript:void(0);">Olive Delarosa</a></h2>
                                <span class="fs-12 text-muted">olive.delarosa@hotmail.com</span>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand ml-auto d-none d-sm-block successAlertMessage">Follow</a>
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar-text me-3 bg-warning text-white">N</div>
                            <div class="lh-sm">
                                <h2 class="fs-13 fw-bold mb-0"><a href="javascript:void(0);">Nancy Elliot</a></h2>
                                <span class="fs-12 text-muted">nancy.elliot@yahoo.com</span>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand ml-auto d-none d-sm-block successAlertMessage">Follow</a>
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar-image me-3">
                                <img src="assets/images/avatar/6.png" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="lh-sm">
                                <h2 class="fs-13 fw-bold mb-0"><a href="javascript:void(0);">Daniel Khoury</a></h2>
                                <span class="fs-12 text-muted">daniel.khoury@gmail.com</span>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand ml-auto d-none d-sm-block successAlertMessage">Follow</a>
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar-text me-3 bg-teal text-white">H</div>
                            <div class="lh-sm">
                                <h2 class="fs-13 fw-bold mb-0"><a href="javascript:void(0);">Henry Leach</a></h2>
                                <span class="fs-12 text-muted">henry.leach@live.com</span>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-light-brand ml-auto d-none d-sm-block successAlertMessage">Follow</a>
                    </li>
                    <li class="d-flex align-items-center justify-content-between mb-0">
                        <div class="d-flex align-items-center">
                            <div class="avatar-image me-3">
                                <img src="assets/images/avatar/7.png" alt="" class="img-fluid rounded-circle">
                            </div>
                            <div class="lh-sm">
                                <h2 class="fs-13 fw-bold mb-0"><a href="javascript:void(0);">Angie Miller</a></h2>
                                <span class="fs-12 text-muted">angie.miller@hotmail.com</span>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="btn btn-sm btn-light-brand ml-auto d-none d-sm-block successAlertMessage">Follow</a>
                    </li>
                </ul>
            </div>
            <!-- / Followers -->
            <!-- Attachments -->
            <a class="py-2 px-4 fs-12 fw-bold d-block bg-gray-200 border-top border-bottom sticky-top sticky-bar" data-bs-toggle="collapse" href="#Attachments">Attachments</a>
            <div class="p-4 collapse show" id="Attachments">
                <div class="mb-4 text-dark d-flex align-items-center justify-content-between border rounded-3">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                            <img src="assets/images/file-icons/zip.png" class="img-fluid" alt="image">
                        </a>
                        <div class="d-block ms-3">
                            <a href="javascript:void(0)" class="fs-13 fw-bold d-block">Projects.zip</a>
                            <small class="fw-300 text-muted">40.65/MB</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3 border-start">
                        <a href="javascript:void(0)" class="avatar-text file-download">
                            <i class="feather-download"></i>
                        </a>
                    </div>
                </div>
                <div class="mb-4 text-dark d-flex align-items-center justify-content-between border rounded-3">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                            <img src="assets/images/file-icons/png.png" class="img-fluid" alt="image">
                        </a>
                        <div class="d-block ms-3">
                            <a href="javascript:void(0)" class="fs-13 fw-bold d-block">Document.png</a>
                            <small class="fw-300 text-muted">480.148/KB</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3 border-start">
                        <a href="javascript:void(0)" class="avatar-text file-download">
                            <i class="feather-download"></i>
                        </a>
                    </div>
                </div>
                <div class="mb-4 text-dark d-flex align-items-center justify-content-between border rounded-3">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                            <img src="assets/images/file-icons/psd.png" class="img-fluid" alt="image">
                        </a>
                        <div class="d-block ms-3">
                            <a href="javascript:void(0)" class="fs-13 fw-bold d-block">Project.psd</a>
                            <small class="fw-300 text-muted">32.423/MB</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3 border-start">
                        <a href="javascript:void(0)" class="avatar-text file-download">
                            <i class="feather-download"></i>
                        </a>
                    </div>
                </div>
                <div class="text-dark d-flex align-items-center justify-content-between border rounded-3">
                    <div class="d-flex align-items-center">
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center border-end wd-70 ht-70">
                            <img src="assets/images/file-icons/pdf.png" class="img-fluid" alt="image">
                        </a>
                        <div class="d-block ms-3">
                            <a href="javascript:void(0)" class="fs-13 fw-bold d-block">Photos.pdf</a>
                            <small class="fw-300 text-muted">48.254/MB</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-center p-3 border-start">
                        <a href="javascript:void(0)" class="avatar-text file-download">
                            <i class="feather-download"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- / Attachments -->
            <!-- Medias -->
            <a class="py-2 px-4 fs-12 fw-bold d-block bg-gray-200 border-top border-bottom sticky-top sticky-bar" data-bs-toggle="collapse" href="#MediasInfo">Medias</a>
            <div class="p-4 collapse show" id="MediasInfo">
                <div class="row g-3 media-list">
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/1.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/2.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/3.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/4.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/5.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/6.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/7.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/8.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/9.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/10.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/11.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="javascript:void(0)" class="d-block px-3 py-2 border rounded">
                            <img src="assets/images/gallery/12.png" class="img-fluid" alt="image">
                        </a>
                    </div>
                </div>
            </div>
            <!-- / Medias -->
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! [End] User Profile Info !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Calling Modal [Voice] !-->
    <!--! ================================================================ !-->
    <div class="modal fade calling-modal-screen" id="voiceCallingModalScreen" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="voiceCallingModalScreen" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
            <div class="modal-content rounded-0">
                <div class="h-100 d-flex aling-items-center justify-content-center">
                    <div class="w-100 chat-calling-content">
                        <!--! BEGIN: [chat-calling-info] !-->
                        <div class="d-flex align-items-center justify-content-between px-4 py-3">
                            <div class="d-flex align-items-center justify-content-center content-sub-header-left chat-calling-info">
                                <div class="avatar-image me-3">
                                    <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center">Erna Serpa</a>
                                    <div class="text typing">
                                        <div class="ringing active">
                                            <div class="d-flex align-items-baseline">
                                                <div class="fs-11 fw-semibold text-success">Contacting</div>
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fs-12 fw-medium text-success timetracker">00:00:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="avatar-text avatar-md me-2 d-none d-lg-flex chat-message-sidebar-toggle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Text Message"><i class="feather-message-circle fs-11"></i></a>
                                <a href="javascript:void(0)" class="avatar-text avatar-md bg-soft-danger d-flex close-icon call-ended" data-bs-dismiss="modal" onClick="javascript:$('.timetracker').timetracker('reset');">
                                    <i class="feather-x text-danger"></i>
                                </a>
                            </div>
                        </div>
                        <!--! END: [chat-calling-info] !-->
                        <!--! BEGIN: [voice-call-content] !-->
                        <div class="d-flex align-items-center justify-content-center flex-column voice-call-content">
                            <div class="wd-150 ht-150">
                                <img src="assets/images/avatar/1.png" class="rounded-circle border border-5 img-fluid animation-infinite" alt="image">
                            </div>
                            <div class="my-4 text-center">
                                <h2 class="fs-13 fw-bold text-dark mb-1">Alexandra Della</h2>
                                <span class="fs-12 text-muted d-block">alex.della@outlook.com</span>
                            </div>
                            <div class="gap-2 d-flex align-items-center justify-content-center calling-receiver-action">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Mute Call"><i class="feather-mic-off fs-12"></i></a>
                                <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Switch Video">
                                    <span class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-target="#videoCallingModalScreen" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="feather-video fs-12"></i></span>
                                </a>
                                <a href="javascript:void(0)" class="call-received btn btn-icon btn-success rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Received Call" onClick="javascript:$('.timetracker').timetracker('start');"><i class="feather-phone-call fs-12"></i></a>
                                <a href="javascript:void(0)" class="btn btn-icon btn-danger rounded-circle call-ended" data-bs-toggle="tooltip" data-bs-trigger="hover" title="End Call" data-bs-dismiss="modal" style="display: none" onClick="javascript:$('.timetracker').timetracker('reset');"><i class="feather-phone-off fs-12"></i></a>
                                <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Calls"><i class="feather-plus fs-12"></i></a>
                                <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Hold Call" onClick="javascript:$('.timetracker').timetracker('stop');"><i class="feather-pause fs-12"></i></a>
                            </div>
                        </div>
                        <!--! END: [voice-call-content] !-->
                    </div>
                    <!--! BEGIN: [chat-calling-text-message-sidebar] !-->
                    <div class="d-none d-lg-block chat-calling-text-message-sidebar active">
                        <div class="p-4 fs-16 fw-bold text-dark border-bottom">In-call messages</div>
                        <div class="d-flex flex-column position-relative in-call-messages-items" data-scrollbar-target="#psScrollbarInit">
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Hello Erna!!! Welcome to Live Chat!!!</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Hi, I wanted to check my order status.....</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Thanks for the information!!! Give me one moment please while I check on that for you.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Thanks. I'm worried😳 it won't arrive in time⌚ for my daughter's birthday🎂 party🎉 this weekend.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">I understand your concern… I wouldn't want my child's gift to arrive late either.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">The birthday🎂 ceremony preparation almost completed</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">I understand your concern......!!</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="d-flex align-items-baseline text typing">
                                                <div class="fs-11 text-success">Typing</div>
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 fs-16 fw-bold border-top">
                            <input class="form-control border-0 emoji-picker" placeholder="Type your message here...">
                        </div>
                    </div>
                    <!--! END: [chat-calling-text-message-sidebar] !-->
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Calling Modal [Voice] !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Calling Modal [Video] !-->
    <!--! ================================================================ !-->
    <div class="modal fade calling-modal-screen" id="videoCallingModalScreen" data-bs-backdrop="static" aria-hidden="true" aria-labelledby="videoCallingModalScreen" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen" role="document">
            <div class="modal-content">
                <div class="h-100 d-flex aling-items-center justify-content-center">
                    <div class="w-100 chat-calling-content">
                        <!--! BEGIN: [chat-calling-info] !-->
                        <div class="d-flex align-items-center justify-content-between px-4 py-3">
                            <div class="d-flex align-items-center justify-content-center content-sub-header-left chat-calling-info">
                                <div class="avatar-image me-3">
                                    <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center">Erna Serpa</a>
                                    <div class="text typing">
                                        <div class="ringing active">
                                            <div class="d-flex align-items-baseline">
                                                <div class="fs-11 fw-semibold text-success">Contacting</div>
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fs-12 fw-medium text-success timetracker">00:00:00</div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="javascript:void(0)" class="avatar-text avatar-md me-2 d-none d-lg-flex chat-message-sidebar-toggle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Text Message"><i class="feather-message-circle fs-11"></i></a>
                                <a href="javascript:void(0)" class="avatar-text avatar-md bg-soft-danger d-flex close-icon call-ended" data-bs-dismiss="modal" onClick="javascript:$('.timetracker').timetracker('reset');">
                                    <i class="feather-x text-danger"></i>
                                </a>
                            </div>
                        </div>
                        <!--! END: [chat-calling-info] !-->
                        <!--! BEGIN: [video-call-content] !-->
                        <div class="d-flex align-items-end justify-content-start position-relative video-call-content">
                            <video autoplay loop playsinline>
                                <source src="assets/images/general/video_bg_1.mp4" type="video/mp4">
                            </video>
                            <div class="m-4 border border-5 rounded-3" style="z-index: 1">
                                <img src="assets/images/avatar/10.png" class="img-fluid" alt="Image">
                            </div>
                        </div>
                        <div class="p-4 gap-2 d-flex align-items-center justify-content-center calling-receiver-action">
                            <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Mute Call"><i class="feather-mic-off fs-12"></i></a>
                            <a href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Switch Voice">
                                <span class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-target="#voiceCallingModalScreen" data-bs-toggle="modal" data-bs-dismiss="modal"><i class="feather-video-off fs-12"></i></span>
                            </a>
                            <a href="javascript:void(0)" class="btn btn-icon btn-success rounded-circle call-received" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Received Call" onClick="javascript:$('.timetracker').timetracker('start');"><i class="feather-phone-call fs-12"></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon btn-danger rounded-circle call-ended" data-bs-toggle="tooltip" data-bs-trigger="hover" title="End Call" data-bs-dismiss="modal" style="display: none" onClick="javascript:$('.timetracker').timetracker('reset');"><i class="feather-phone-off fs-12"></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Add Calls"><i class="feather-plus fs-12"></i></a>
                            <a href="javascript:void(0)" class="btn btn-icon bg-white rounded-circle rounded-circle" data-bs-toggle="tooltip" data-bs-trigger="hover" title="Hold Call" onClick="javascript:$('.timetracker').timetracker('stop');"><i class="feather-pause fs-12"></i></a>
                        </div>
                        <!--! END: [video-call-content] !-->
                    </div>
                    <!--! BEGIN: [chat-calling-text-message-sidebar] !-->
                    <div class="d-none d-lg-block chat-calling-text-message-sidebar active">
                        <div class="p-4 fs-16 fw-bold text-dark border-bottom">In-call messages</div>
                        <div class="d-flex flex-column position-relative in-call-messages-items" data-scrollbar-target="#psScrollbarInit">
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Hello Erna!!! Welcome to Live Chat!!!</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Hi, I wanted to check my order status.....</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Thanks for the information!!! Give me one moment please while I check on that for you.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">Thanks. I'm worried😳 it won't arrive in time⌚ for my daughter's birthday🎂 party🎉 this weekend.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">I understand your concern… I wouldn't want my child's gift to arrive late either.</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">The birthday🎂 ceremony preparation almost completed</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark border-bottom single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/1.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Alexandra Della</a>
                                            <div class="fs-12 fw-normal text-muted text-truncate-2-line">I understand your concern......!!</div>
                                        </div>
                                    </div>
                                    <div class="dropdown ms-3">
                                        <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown">
                                            <i class="feather-more-vertical"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-eye-off me-3"></i>Hide Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-trash-2 me-3"></i>Delete Message</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item"><i class="feather-alert-triangle me-3"></i>Report Message</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-4 text-dark single-item">
                                <div class="w-100 d-flex align-items-start justify-content-between">
                                    <div class="d-flex align-items-start">
                                        <div class="avatar-image me-3">
                                            <img src="assets/images/avatar/10.png" class="img-fluid" alt="image">
                                        </div>
                                        <div>
                                            <a href="javascript:void(0)" class="fs-13 fw-bold d-flex align-items-center mb-1">Erna Serpa</a>
                                            <div class="d-flex align-items-baseline text typing">
                                                <div class="fs-11 text-success">Typing</div>
                                                <div class="wave">
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                    <span class="dot"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-3 py-2 fs-16 fw-bold border-top">
                            <input class="form-control border-0 emoji-picker" placeholder="Type your message here...">
                        </div>
                    </div>
                    <!--! END: [chat-calling-text-message-sidebar] !-->
                </div>
            </div>
        </div>
    </div>
    <!--! ================================================================ !-->
    <!--! END: Calling Modal Screen [Video] !-->
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
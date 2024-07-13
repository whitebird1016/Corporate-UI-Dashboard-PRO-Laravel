<x-app-layout>

    <div class="bg-gray-100 main-content position-relative max-height-vh-100 h-100">
        <nav class=" d-block d-lg-none px-0 mx-5 rounded shadow-none z-index-2 navbar navbar-main navbar-expand-lg"
            navbar-scroll="true" id="navbarBlur">
            <div class="container px-2 py-1 min-w-100">
                <nav aria-label="breadcrumb">
                    <ol class="px-0 pt-1 pb-0 mb-1 bg-transparent breadcrumb me-sm-6 me-5">
                        <li class="text-sm breadcrumb-item"><a class="opacity-5 p-0 breadcrumb-text  text-dark "
                                href="javascript:;">Dashboard</a></li>
                        <li class="text-sm breadcrumb-item  breadcrumb-text  text-dark  active" aria-current="page">
                            Messages</li>
                    </ol>
                    <h6 class="mb-0 font-weight-bold breadcrumb-text  text-dark ">Messages</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body bg-white  border-end-0 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </span>
                            <input type="text" class="form-control ps-0" placeholder="Search">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="p-0 nav-link" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class=" bg-dark  sidenav-toggler-line"></i>
                                    <i class=" bg-dark  sidenav-toggler-line"></i>
                                    <i class=" bg-dark  sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="px-3 nav-item d-flex align-items-center">
                            <a href="javascript:;" class="p-0 nav-link ">
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                    class="cursor-pointer fixed-plugin-button-nav" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="p-0 nav-link " id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="currentColor" class="cursor-pointers">
                                    <path fill-rule="evenodd"
                                        d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <ul class="px-2 py-3 dropdown-menu dropdown-menu-end me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="py-1 d-flex">
                                            <div class="my-auto">
                                                <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
                                                    alt="user image">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-1 text-sm font-weight-normal">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="mb-0 text-xs text-secondary">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="py-1 d-flex">
                                            <div class="my-auto">
                                                <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 " alt="logo spotify">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-1 text-sm font-weight-normal">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="mb-0 text-xs text-secondary">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="py-1 d-flex">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-1 text-sm font-weight-normal">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="mb-0 text-xs text-secondary">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item d-flex align-items-center ps-2">
                            <a href="../../pages/authentication/signin/illustration.html"
                                class="nav-link  text-white  font-weight-bold px-0" target="_blank">
                        <li class="nav-item dropdown d-flex align-items-center">
                            <div class="avatar avatar-sm position-relative">
                                <img src="../../assets/img/team-1.jpg" alt="profile_image"
                                    class="w-100 border-radius-md">
                            </div>
                        </li>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="pb-6 bg-cover pt-7"
            style="background-image: url('../../assets/img/header-orange-purple.jpg'); background-position: bottom;">
        </div>
        <div class="container">
            <div class="py-2 bg-transparent border-0 shadow-none card card-body">
                <div class="row">
                    <div class="col-auto">
                        <div
                            class="border border-4 border-gray-100 avatar avatar-2xl rounded-circle position-relative mt-n7">
                            <img src="../../assets/img/team-1.jpg" alt="profile_image" class="w-100">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h3 class="mb-0 font-weight-bold">
                                Noah Mclaren
                            </h3>
                            <p class="mb-0">
                                noah_mclaren@mail.com
                            </p>
                        </div>
                    </div>
                    <div class="mx-auto mt-3 col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 text-sm-end">
                        <div class="nav-wrapper position-relative">
                            <div class="btn-group" role="tablist">
                                <input class="btn-check active" type="radio" name="headertab" id="headertab1"
                                    autocomplete="off" role="tab" aria-selected="true" checked>
                                <label class="px-4 mb-0 btn btn-white" for="headertab1">Applications</label>
                                <input class="btn-check active" type="radio" name="headertab" id="headertab2"
                                    autocomplete="off" role="tab" aria-selected="false">
                                <label class="px-4 mb-0 btn btn-white" for="headertab2">Messages</label>
                                <input class="btn-check active" type="radio" name="headertab" id="headertab3"
                                    autocomplete="off" role="tab" aria-selected="false">
                                <label class="px-4 mb-0 btn btn-white" for="headertab3">Settings</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-3 my-3">
            <div class="row">
                <div class="col-4">
                    <div class="mb-5 overflow-auto overflow-x-hidden card h-100 max-height-vh-70 mb-lg-0">
                        <div class="p-3 card-header">
                            <h6>Friends</h6>
                            <input type="email" class="form-control" placeholder="Search Contact"
                                aria-label="Email">
                        </div>
                        <div class="p-2 card-body">
                            <a href="javascript:;" class="p-2 d-block border-radius-lg bg-dark">
                                <div class="p-2 d-flex">
                                    <img alt="Image" src="../../assets/img/bruce-mars.jpg" class="shadow avatar">
                                    <div class="ms-3">
                                        <div class="justify-content-between align-items-center">
                                            <h6 class="mb-0 text-white">Charlie Watson
                                                <span class="badge badge-success"></span>
                                            </h6>
                                            <p class="mb-0 text-sm text-white">Typing...</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" class="p-2 d-block">
                                <div class="p-2 d-flex">
                                    <img alt="Image" src="../../assets/img/team-1.jpg" class="shadow avatar">
                                    <div class="ms-3">
                                        <h6 class="mb-0">Jane Doe</h6>
                                        <p class="mb-2 text-xs text-muted">1 hour ago</p>
                                        <span class="p-0 text-sm text-muted col-11 text-truncate d-block">Computer
                                            users & programs</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" class="p-2 d-block">
                                <div class="p-2 d-flex">
                                    <img alt="Image" src="../../assets/img/team-3.jpg" class="shadow avatar">
                                    <div class="ms-3">
                                        <h6 class="mb-0">Mila Skylar</h6>
                                        <p class="mb-2 text-xs text-muted">24 min ago</p>
                                        <span class="p-0 text-sm text-muted col-11 text-truncate d-block">You can
                                            subscribe to receive weekly...</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" class="p-2 d-block">
                                <div class="p-2 d-flex">
                                    <img alt="Image" src="../../assets/img/team-5.jpg" class="shadow avatar">
                                    <div class="ms-3">
                                        <h6 class="mb-0">Sofia Scarlett</h6>
                                        <p class="mb-2 text-xs text-muted">7 hours ago</p>
                                        <span class="p-0 text-sm text-muted col-11 text-truncate d-block">It’s an
                                            effective resource regardless..</span>
                                    </div>
                                </div>
                            </a>
                            <a href="javascript:;" class="p-2 d-block">
                                <div class="p-2 d-flex">
                                    <img alt="Image" src="../../assets/img/team-4.jpg" class="shadow avatar">
                                    <div class="ms-3">
                                        <div class="justify-content-between align-items-center">
                                            <h6 class="mb-0">Tom Klein</h6>
                                            <p class="mb-2 text-xs text-muted">1 day ago</p>
                                        </div>
                                        <span class="p-0 text-sm text-muted col-11 text-truncate d-block">Be sure to
                                            check it out if your dev pro...</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card h-100 max-height-vh-70">
                        <div class="card-header border-bottom">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="d-flex align-items-center">
                                        <img alt="Image" src="../../assets/img/bruce-mars.jpg" class="avatar">
                                        <div class="ms-3">
                                            <h6 class="mb-0 d-block">Charlie Watson</h6>
                                            <span class="text-sm text-dark opacity-8">last seen today at 1:53am</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-auto col-1 pe-0">
                                    <button class="mb-0 shadow-none btn btn-icon-only text-dark me-3 me-sm-0"
                                        type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="" data-bs-original-title="Video call">
                                        <i class="fa fa-camera"></i>
                                    </button>
                                </div>
                                <div class="my-auto col-1 ps-0">
                                    <div class="dropdown">
                                        <button class="mb-0 shadow-none btn btn-icon-only text-dark" type="button"
                                            data-bs-toggle="dropdown">
                                            <i class="fa fa-cog"></i>
                                        </button>
                                        <ul class="p-2 dropdown-menu dropdown-menu-end me-sm-n2"
                                            aria-labelledby="chatmsg">
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    Mute conversation
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    Block
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-md" href="javascript:;">
                                                    Clear chat
                                                </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-md text-danger"
                                                    href="javascript:;">
                                                    Delete chat
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="overflow-auto overflow-x-hidden card-body">
                            <div class="mb-4 row justify-content-start">
                                <div class="col-auto">
                                    <div class="card ">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-1 text-dark">
                                                It contains a lot of good lessons about effective practices
                                            </p>
                                            <div class="text-sm text-secondary d-flex align-items-center opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>3:14am</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 text-right row justify-content-end">
                                <div class="col-auto">
                                    <div class="bg-gray-300 card">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-1 text-dark">
                                                Can it generate daily design links that include essays and data
                                                visualizations ?<br>
                                            </p>
                                            <div
                                                class="text-sm text-secondary d-flex align-items-center justify-content-end opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:42pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 row">
                                <div class="text-center col-md-12">
                                    <span class="badge text-dark">Wed, 3:27pm</span>
                                </div>
                            </div>
                            <div class="mb-4 row justify-content-start">
                                <div class="col-auto">
                                    <div class="card ">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-1 text-dark">
                                                Yeah! Responsive Design is geared towards those trying to build web apps
                                            </p>
                                            <div class="text-sm text-secondary d-flex align-items-center opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:31pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 text-right row justify-content-end">
                                <div class="col-auto">
                                    <div class="bg-gray-300 card">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-1 text-dark">
                                                Excellent, I want it now !
                                            </p>
                                            <div
                                                class="text-sm text-secondary d-flex align-items-center justify-content-end opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:42pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row justify-content-start">
                                <div class="col-auto">
                                    <div class="card ">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-1 text-dark">
                                                You can easily get it; The content here is all free
                                            </p>
                                            <div class="text-sm text-secondary d-flex align-items-center opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:42pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 text-right row justify-content-end">
                                <div class="col-auto">
                                    <div class="bg-gray-300 card">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-1 text-dark">
                                                Awesome, blog is important source material for anyone who creates apps?
                                                <br>
                                                Beacuse these blogs offer a lot of information about website
                                                development.
                                            </p>
                                            <div
                                                class="text-sm text-secondary d-flex align-items-center justify-content-end opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:42pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 row justify-content-start">
                                <div class="col-5">
                                    <div class="card ">
                                        <div class="p-2 card-body">
                                            <div class="p-0 col-12">
                                                <img src="https://images.unsplash.com/photo-1602142946018-34606aa83259?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1762&q=80"
                                                    alt="Rounded image" class="mb-2 img-fluid border-radius-lg">
                                            </div>
                                            <div class="text-sm text-secondary d-flex align-items-center opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:47pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 text-right row justify-content-end">
                                <div class="col-auto">
                                    <div class="bg-gray-300 card">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-0 text-dark">
                                                At the end of the day … the native dev apps is where users are
                                            </p>
                                            <div
                                                class="text-sm text-secondary d-flex align-items-center justify-content-end opacity-6">
                                                <i class="text-sm ni ni-check-bold me-1"></i>
                                                <small>4:42pm</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-start">
                                <div class="col-auto">
                                    <div class="card ">
                                        <div class="px-3 py-2 card-body">
                                            <p class="mb-0 text-dark">
                                                Charlie is Typing...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-block">
                            <form class="align-items-center">
                                <div class="d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type here"
                                            aria-label="Message example input">
                                    </div>
                                    <button class="mb-0 btn btn-dark ms-2">
                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.4472 11.3944C17.786 11.225 18 10.8788 18 10.5C18 10.1212 17.786 9.77498 17.4472 9.60558L3.4472 2.60558C3.0925 2.42823 2.6665 2.47724 2.3614 2.7305C2.0562 2.98376 1.9295 3.39342 2.0385 3.77473L3.467 8.77472C3.5897 9.20402 3.9821 9.5 4.4286 9.5H9C9.5523 9.5 10 9.94772 10 10.5C10 11.0523 9.5523 11.5 9 11.5L4.4286 11.5C3.9821 11.5 3.5897 11.796 3.467 12.2253L2.0385 17.2253C1.9295 17.6066 2.0562 18.0163 2.3614 18.2695C2.6665 18.5228 3.0925 18.5718 3.4472 18.3944L17.4472 11.3944Z"
                                                fill="white" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </div>

</x-app-layout>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

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
                            Teams</li>
                    </ol>
                    <h6 class="mb-0 font-weight-bold breadcrumb-text  text-dark ">Teams</h6>
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
                                                <img src="../../../assets/img/team-2.jpg"
                                                    class="avatar avatar-sm  me-3 " alt="user image">
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
                                                <img src="../../../assets/img/small-logos/logo-spotify.svg"
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
                            <a href="../../../pages/authentication/signin/illustration.html"
                                class="nav-link  text-white  font-weight-bold px-0" target="_blank">
                        <li class="nav-item dropdown d-flex align-items-center">
                            <div class="avatar avatar-sm position-relative">
                                <img src="../../../assets/img/team-1.jpg" alt="profile_image"
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
            style="background-image: url('../../../assets/img/header-orange-purple.jpg'); background-position: bottom;">
        </div>
        <div class="container">
            <div class="py-2 bg-transparent border-0 shadow-none card card-body">
                <div class="row">
                    <div class="col-auto">
                        <div
                            class="border border-4 border-gray-100 avatar avatar-2xl rounded-circle position-relative mt-n7">
                            <img src="../../../assets/img/team-1.jpg" alt="profile_image" class="w-100">
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
                <div class="col-12">
                    <div class="overflow-scroll card">
                        <div class="card-body d-flex">
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="bg-cover avatar avatar-lg border-1 rounded-circle "
                                    style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: center;">
                                    <i class="text-white fas fa-plus"></i>
                                </a>
                                <p class="mb-0 text-sm" style="margin-top:6px;">Add story</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-1.jpg">
                                </a>
                                <p class="mb-0 text-sm">Abbie W</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-2.jpg">
                                </a>
                                <p class="mb-0 text-sm">Boris U</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-3.jpg">
                                </a>
                                <p class="mb-0 text-sm">Kay R</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-4.jpg">
                                </a>
                                <p class="mb-0 text-sm">Tom M</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1" src="../../../assets/img/team-5.jpg">
                                </a>
                                <p class="mb-0 text-sm">Nicole N</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1" src="../../../assets/img/marie.jpg">
                                </a>
                                <p class="mb-0 text-sm">Marie P</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;" class="border avatar avatar-lg rounded-circle border-primary">
                                    <img alt="Image placeholder" class="p-1"
                                        src="../../../assets/img/bruce-mars.jpg">
                                </a>
                                <p class="mb-0 text-sm">Bruce M</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;"
                                    class="border avatar avatar-lg rounded-circle border-secondary">
                                    <img alt="Image placeholder" class="p-1"
                                        src="../../../assets/img/ivana-squares.jpg">
                                </a>
                                <p class="mb-0 text-sm">Sandra A</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;"
                                    class="border avatar avatar-lg rounded-circle border-secondary">
                                    <img alt="Image placeholder" class="p-1"
                                        src="../../../assets/img/kal-visuals-square.jpg">
                                </a>
                                <p class="mb-0 text-sm">Katty L</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;"
                                    class="border avatar avatar-lg rounded-circle border-secondary">
                                    <img alt="Image placeholder" class="p-1"
                                        src="../../../assets/img/ivana-square.jpg">
                                </a>
                                <p class="mb-0 text-sm">Emma O</p>
                            </div>
                            <div class="text-center col-lg-1 col-md-2 col-sm-3 col-4">
                                <a href="javascript:;"
                                    class="border avatar avatar-lg rounded-circle border-secondary">
                                    <img alt="Image placeholder" class="p-1"
                                        src="https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/team-9.jpg">
                                </a>
                                <p class="mb-0 text-sm">Tao G</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12 col-lg-6">
                    <div class="card mb-3 mt-lg-0 mt-4">
                        <div class="card-body pb-0">
                            <div class="row align-items-center mb-3">
                                <div class="col-9">
                                    <h5 class="mb-1 text-dark">
                                        <a href="javascript:;">Digital Marketing</a>
                                    </h5>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="dropstart">
                                        <a href="javascript:;" class="text-secondary" id="dropdownMarketingCard"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                            aria-labelledby="dropdownMarketingCard">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Edit
                                                    Team</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Add
                                                    Member</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">See
                                                    Details</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item border-radius-md text-danger"
                                                    href="javascript:;">Remove Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>A group of people who collectively are responsible for all of the work necessary to
                                produce working, validated assets.</p>
                            <ul class="list-unstyled mx-auto">
                                <li class="d-flex">
                                    <p class="mb-0">Industry:</p>
                                    <span class="badge badge-md bg-gray-300 text-dark my-auto ms-auto">Marketing
                                        Team</span>
                                </li>
                                <li>
                                    <hr class="horizontal dark">
                                </li>
                                <li class="d-flex">
                                    <p class="mb-0">Rating:</p>
                                    <div class="rating ms-auto">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </li>
                                <li>
                                    <hr class="horizontal dark">
                                </li>
                                <li class="d-flex">
                                    <p class="mb-0">Members:</p>
                                    <div class="avatar-group ms-auto">
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Alexa Tompson">
                                            <img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                            <img alt="Image placeholder" src="../../../assets/img/team-2.jpg">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Alexander Smith">
                                            <img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Martin Doe">
                                            <img alt="Image placeholder" src="../../../assets/img/team-4.jpg">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-4 mb-3">
                        <div class="card-body pb-0">
                            <div class="row align-items-center mb-3">
                                <div class="col-9">
                                    <h5 class="mb-1 text-dark">
                                        <a href="javascript:;">Design</a>
                                    </h5>
                                </div>
                                <div class="col-3 text-end">
                                    <div class="dropstart">
                                        <a href="javascript:;" class="text-secondary" id="dropdownDesignCard"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3"
                                            aria-labelledby="dropdownDesignCard">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Edit
                                                    Team</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Add
                                                    Member</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">See
                                                    Details</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item border-radius-md text-danger"
                                                    href="javascript:;">Remove Team</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>Because it's about motivating the doers. Because I’m here to follow my dreams and inspire
                                other people to follow their dreams, too.</p>
                            <ul class="list-unstyled mx-auto">
                                <li class="d-flex">
                                    <p class="mb-0">Industry:</p>
                                    <span class="badge badge-md bg-gray-300 text-dark my-auto ms-auto">Design
                                        Team</span>
                                </li>
                                <li>
                                    <hr class="horizontal dark">
                                </li>
                                <li class="d-flex">
                                    <p class="mb-0">Rating:</p>
                                    <div class="rating ms-auto">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </li>
                                <li>
                                    <hr class="horizontal dark">
                                </li>
                                <li class="d-flex">
                                    <p class="mb-0">Members:</p>
                                    <div class="avatar-group ms-auto">
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Martin Doe">
                                            <img alt="Image placeholder" src="../../../assets/img/team-4.jpg">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                            <img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Alexa Tompson">
                                            <img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
                                        </a>
                                        <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="Alexandra Smith">
                                            <img alt="Image placeholder" src="../../../assets/img/team-5.jpg">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="avatar avatar-lg">
                                    <img alt="Image placeholder" src="../../../assets/img/small-logos/logo-slack.svg">
                                </div>
                                <div class="ms-2 my-auto">
                                    <h6 class="mb-0">Slack Meet</h6>
                                    <p class="text-xs mb-0">11:00 AM</p>
                                </div>
                            </div>
                            <p class="mt-3"> You have an upcoming meet for Marketing Planning</p>
                            <p class="mb-0"><b>Meeting ID:</b> 902-128-281</p>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <button type="button" class="btn btn-sm btn-dark mb-0">
                                    Join
                                </button>
                                <div class="avatar-group ms-auto">
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexa Tompson">
                                        <img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                        <img alt="Image placeholder" src="../../../assets/img/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                        <img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Martin Doe">
                                        <img alt="Image placeholder" src="../../../assets/img/ivana-squares.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="avatar avatar-lg">
                                    <img alt="Image placeholder"
                                        src="../../../assets/img/small-logos/logo-invision.svg">
                                </div>
                                <div class="ms-2 my-auto">
                                    <h6 class="mb-0">Invision</h6>
                                    <p class="text-xs mb-0">4:50 PM</p>
                                </div>
                            </div>
                            <p class="mt-3"> You have an upcoming video call for <span class="text-primary">Soft
                                    Design</span> at 5:00 PM.</p>
                            <p class="mb-0"><b>Meeting ID:</b> 111-968-981</p>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <button type="button" class="btn btn-sm btn-dark mb-0">
                                    Join
                                </button>
                                <div class="avatar-group ms-auto">
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexa Tompson">
                                        <img alt="Image placeholder" src="../../../assets/img/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                        <img alt="Image placeholder" src="../../../assets/img/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                        <img alt="Image placeholder" src="../../../assets/img/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-lg avatar-xs rounded-circle"
                                        data-bs-toggle="tooltip" data-bs-placement="bottom" title="Martin Doe">
                                        <img alt="Image placeholder" src="../../../assets/img/ivana-squares.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="py-3 card-header d-flex align-items-center border-bottom">
                            <div class="d-flex align-items-center">
                                <a href="javascript:;">
                                    <img src="../../../assets/img/team-2.jpg" class="avatar" alt="profile-image">
                                </a>
                                <div class="mx-3">
                                    <a href="javascript:;" class="text-sm text-dark font-weight-600">John Snow</a>
                                    <small class="d-block text-muted">3 days ago</small>
                                </div>
                            </div>
                            <div class="text-end ms-auto">
                                <button type="button" class="mb-0 btn btn-sm btn-dark">
                                    <i class="fas fa-plus pe-2"></i> Follow
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="mb-4">
                                Personal profiles are the perfect way for you to grab their attention and persuade
                                recruiters to continue reading your CV because you’re telling them from the off exactly
                                why they should hire you.
                            </p>
                            <img alt="Image placeholder" src="../../../assets/img/feed-image.jpeg"
                                class="shadow-lg img-fluid border-radius-lg">
                            <div class="px-2 mt-4 mb-2 row align-items-center">
                                <div class="col-sm-6">
                                    <div class="d-flex">
                                        <div class="d-flex align-items-center">
                                            <i class="cursor-pointer ni ni-like-2 me-1"></i>
                                            <span class="text-sm me-3 ">150</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="cursor-pointer ni ni-chat-round me-1"></i>
                                            <span class="text-sm me-3">36</span>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <i class="cursor-pointer ni ni-curved-next me-1"></i>
                                            <span class="text-sm me-2">12</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 d-none d-sm-block">
                                    <div class="d-flex align-items-center justify-content-sm-end">
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                data-toggle="tooltip" data-original-title="Jessica Rowland">
                                                <img alt="Image placeholder" src="../../../assets/img/team-5.jpg"
                                                    class="">
                                            </a>
                                            <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                data-toggle="tooltip" data-original-title="Audrey Love">
                                                <img alt="Image placeholder" src="../../../assets/img/team-2.jpg"
                                                    class="rounded-circle">
                                            </a>
                                            <a href="javascript:;" class="avatar avatar-xs rounded-circle"
                                                data-toggle="tooltip" data-original-title="Michael Lewis">
                                                <img alt="Image placeholder" src="../../../assets/img/team-1.jpg"
                                                    class="rounded-circle">
                                            </a>
                                        </div>
                                        <small class="ps-2 font-weight-bold">and 30+ more</small>
                                    </div>
                                </div>
                                <hr class="my-3 horizontal dark">
                            </div>
                            <!-- Comments -->
                            <div class="mb-1">
                                <div class="d-flex">
                                    <div class="flex-shrink-0">
                                        <img alt="Image placeholder" class="avatar rounded-circle"
                                            src="../../../assets/img/bruce-mars.jpg">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mt-0 h5">Michael Lewis</h6>
                                        <p class="text-sm">I always felt like I could do anything. That’s the main
                                            thing people are controlled by! Thoughts- their perception of themselves!
                                        </p>
                                        <div class="d-flex">
                                            <div>
                                                <i class="cursor-pointer ni ni-like-2 me-1"></i>
                                            </div>
                                            <span class="text-sm me-2">3 likes</span>
                                            <div>
                                                <i class="cursor-pointer ni ni-curved-next me-1"></i>
                                            </div>
                                            <span class="text-sm me-2">2 shares</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 d-flex">
                                    <div class="flex-shrink-0">
                                        <img alt="Image placeholder" class="avatar rounded-circle"
                                            src="../../../assets/img/team-4.jpg">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mt-0 h5">Jessica Stones</h6>
                                        <p class="text-sm">Society has put up so many boundaries, so many limitations
                                            on what’s right and wrong that it’s almost impossible to get a pure thought
                                            out. It’s like a little kid, a little boy.</p>
                                        <div class="d-flex">
                                            <div>
                                                <i class="cursor-pointer ni ni-like-2 me-1"></i>
                                            </div>
                                            <span class="text-sm me-2">10 likes</span>
                                            <div>
                                                <i class="cursor-pointer ni ni-curved-next me-1"></i>
                                            </div>
                                            <span class="text-sm me-2">1 share</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 d-flex">
                                    <div class="flex-shrink-0">
                                        <img alt="Image placeholder" class="avatar rounded-circle me-3"
                                            src="../../../assets/img/team-1.jpg">
                                    </div>
                                    <div class="my-auto flex-grow-1">
                                        <form>
                                            <textarea class="form-control" placeholder="Write your comment" rows="1"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </div>
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

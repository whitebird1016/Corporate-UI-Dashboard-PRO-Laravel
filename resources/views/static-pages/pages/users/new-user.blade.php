<x-app-layout>
    <nav class=" d-block d-lg-none px-0 mx-5 rounded shadow-none z-index-2 navbar navbar-main navbar-expand-lg"
        navbar-scroll="true" id="navbarBlur">
        <div class="container px-2 py-1 min-w-100">
            <nav aria-label="breadcrumb">
                <ol class="px-0 pt-1 pb-0 mb-1 bg-transparent breadcrumb me-sm-6 me-5">
                    <li class="text-sm breadcrumb-item"><a class="opacity-5 p-0 breadcrumb-text  text-dark "
                            href="javascript:;">Dashboard</a></li>
                    <li class="text-sm breadcrumb-item  breadcrumb-text  text-dark  active" aria-current="page">New User
                    </li>
                </ol>
                <h6 class="mb-0 font-weight-bold breadcrumb-text  text-dark ">New User</h6>
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
                                class="cursor-pointer fixed-plugin-button-nav" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item dropdown pe-2 d-flex align-items-center">
                        <a href="javascript:;" class="p-0 nav-link " id="dropdownMenuButton" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="currentColor" class="cursor-pointers">
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
                                            <img src="../../../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 "
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
                                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                        fill-rule="nonzero">
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
    <div class="pt-5 pb-5 bg-cover"
        style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
    </div>
    <div class="container py-3 my-3">
        <div class="mt-4 row">
            <h3 class="mb-5 font-weight-bold">Add new user</h3>
            <h5 class="text-lg font-weight-semibold">Let's start with the basic information</h5>
            <p class="text-sm">Let us know your name and email address. Use an address you don't mind other users
                contacting you at.</p>
            <hr class="my-2 horizontal dark">
        </div>
        <div class="mt-4 row">
            <div class="col-12">
                <div class="mb-5 multisteps-form">
                    <!--progress bar-->
                    <div class="row">
                        <div class="mx-auto my-4 col-2 col-lg-5">
                            <div>
                                <h6 class="font-weight-semibold">Basic Information</h6>
                                <p class="text-sm">We’ll credit your account if you need to downgrade during the
                                    billing cycle.</p>
                            </div>
                            <div class="multisteps-form__progress">
                                <div class="mb-3">
                                    <button id="form-btn-1"
                                        class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle js-active"
                                        type="button" title="User Info">1</button>
                                    <label for="form-btn-1">User Info</label>
                                </div>
                                <div class="mb-3">
                                    <button id="form-btn-2"
                                        class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle"
                                        type="button" title="Address">2</button>
                                    <label for="form-btn-2">Address</label>
                                </div>
                                <div class="mb-3">
                                    <button id="form-btn-3"
                                        class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle"
                                        type="button" title="Socials">3</button>
                                    <label for="form-btn-3">Socials</label>
                                </div>
                                <div class="mb-3">
                                    <button id="form-btn-4"
                                        class="p-2 me-2 multisteps-form__progress-btn btn btn-outline-secondary rounded-circle"
                                        type="button" title="Profile">4</button>
                                    <label for="form-btn-4">Profile</label>
                                </div>
                            </div>
                        </div>
                        <!--form panels-->
                        <div class="m-auto col-10 col-lg-7">
                            <form class="mb-8 multisteps-form__form">
                                <!--single form panel-->
                                <div class="p-4 bg-white card multisteps-form__panel js-active"
                                    data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Add your details</h5>
                                    <p class="text-sm">Here you can set all the personal details.</p>
                                    <div class="multisteps-form__content">
                                        <div class="mt-3 row">
                                            <div class="col-12 col-sm-6">
                                                <label>First Name</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. Michael" />
                                            </div>
                                            <div class="mt-3 col-12 col-sm-6 mt-sm-0">
                                                <label>Last Name</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. Prior" />
                                            </div>
                                        </div>
                                        <div class="mt-3 row">
                                            <div class="col-12 col-sm-6">
                                                <label>Company</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. Creative Tim" />
                                            </div>
                                            <div class="mt-3 col-12 col-sm-6 mt-sm-0">
                                                <label>Email Address</label>
                                                <input class="multisteps-form__input form-control" type="email"
                                                    placeholder="eg. soft@dashboard.com" />
                                            </div>
                                        </div>
                                        <div class="mt-3 row">
                                            <div class="col-12 col-sm-6">
                                                <label>Password</label>
                                                <input class="multisteps-form__input form-control" type="password"
                                                    placeholder="******" />
                                            </div>
                                            <div class="mt-3 col-12 col-sm-6 mt-sm-0">
                                                <label>Repeat Password</label>
                                                <input class="multisteps-form__input form-control" type="password"
                                                    placeholder="******" />
                                            </div>
                                        </div>
                                        <div class="mt-4 button-row d-flex">
                                            <button class="mb-0 text-white btn bg-dark ms-auto js-btn-next"
                                                type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="p-4 bg-white card multisteps-form__panel" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Address</h5>
                                    <div class="multisteps-form__content">
                                        <div class="mt-3 row">
                                            <div class="col">
                                                <label>Address 1</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. Street 111" />
                                            </div>
                                        </div>
                                        <div class="mt-3 row">
                                            <div class="col">
                                                <label>Address 2</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. Street 221" />
                                            </div>
                                        </div>
                                        <div class="mt-3 row">
                                            <div class="col-12 col-sm-6">
                                                <label>City</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="eg. Tokyo" />
                                            </div>
                                            <div class="mt-3 col-6 col-sm-3 mt-sm-0">
                                                <label>State</label>
                                                <select class="multisteps-form__select form-control">
                                                    <option selected="selected">...</option>
                                                    <option value="1">State 1</option>
                                                    <option value="2">State 2</option>
                                                </select>
                                            </div>
                                            <div class="mt-3 col-6 col-sm-3 mt-sm-0">
                                                <label>Zip</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="7 letters" />
                                            </div>
                                        </div>
                                        <div class="mt-4 button-row d-flex">
                                            <button class="mb-0 btn btn-white js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="mb-0 text-white btn bg-dark ms-auto js-btn-next"
                                                type="button" title="Next">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="p-4 bg-white card multisteps-form__panel" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Socials</h5>
                                    <div class="multisteps-form__content">
                                        <div class="mt-3 row">
                                            <div class="col-12">
                                                <label>Twitter Handle</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="@soft" />
                                            </div>
                                            <div class="mt-3 col-12">
                                                <label>Facebook Account</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="https://..." />
                                            </div>
                                            <div class="mt-3 col-12">
                                                <label>Instagram Account</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="https://..." />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mt-4 button-row d-flex col-12">
                                                <button class="mb-0 btn btn-white js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="mb-0 text-white btn bg-dark ms-auto js-btn-next"
                                                    type="button" title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--single form panel-->
                                <div class="p-4 bg-white card multisteps-form__panel" data-animation="FadeIn">
                                    <h5 class="font-weight-bolder">Profile</h5>
                                    <div class="mt-3 multisteps-form__content">
                                        <div class="row">
                                            <div class="col-12">
                                                <label>Public Email</label>
                                                <input class="multisteps-form__input form-control" type="text"
                                                    placeholder="Use an address you don't use frequently." />
                                            </div>
                                            <div class="mt-3 col-12">
                                                <label>Bio</label>
                                                <textarea class="multisteps-form__textarea form-control" rows="5"
                                                    placeholder="Say a few words about who you are or what you're working on."></textarea>
                                            </div>
                                        </div>
                                        <div class="mt-4 button-row d-flex">
                                            <button class="mb-0 btn btn-white js-btn-prev" type="button"
                                                title="Prev">Prev</button>
                                            <button class="mb-0 text-white btn bg-dark ms-auto" type="button"
                                                title="Send">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script src="../../../assets/js/plugins/multistep-form.js"></script>

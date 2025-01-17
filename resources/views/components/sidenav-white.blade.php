<!-- Navbar -->
<nav
    class="navbar navbar-expand-lg bg-white rounded-2 top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('default') }}">
            Corporate UI Dashboard PRO
        </a>
        <button class="shadow-none navbar-toggler ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mt-2 navbar-toggler-icon">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="pt-3 pb-2 collapse navbar-collapse w-100 py-lg-0" id="navigation">
            <ul class="mx-auto navbar-nav navbar-nav-hover">
                <li class="mx-2 nav-item dropdown dropdown-hover">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  text-dark "
                        id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                        <img src=" ../../assets/img/down-arrow-dark.svg  " alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="p-3 mt-0 dropdown-menu dropdown-menu-animation dropdown-xl mt-lg-3"
                        aria-labelledby="dropdownMenuPages">
                        <div class="row d-none d-lg-block">
                            <div class="col-12 px-4 py-2">
                                <div class="row">
                                    <div class="col-4 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg width="16px" height="16px" viewBox="0 0 16 17"
                                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="color-background"
                                                            d="M3.1001 4.29998C3.1001 3.91338 3.4135 3.59998 3.8001 3.59998H12.2001C12.5867 3.59998 12.9001 3.91338 12.9001 4.29998V5.69998C12.9001 6.08657 12.5867 6.39998 12.2001 6.39998H3.8001C3.4135 6.39998 3.1001 6.08657 3.1001 5.69998V4.29998Z" />
                                                        <path class="color-background"
                                                            d="M3.1001 8.49999C3.1001 8.11338 3.4135 7.79999 3.8001 7.79999H8.0001C8.38671 7.79999 8.7001 8.11338 8.7001 8.49999V12.7C8.7001 13.0866 8.38671 13.4 8.0001 13.4H3.8001C3.4135 13.4 3.1001 13.0866 3.1001 12.7V8.49999Z" />
                                                        <path class="color-background" opacity="0.6"
                                                            d="M10.8001 7.79999C10.4135 7.79999 10.1001 8.11338 10.1001 8.49999V12.7C10.1001 13.0866 10.4135 13.4 10.8001 13.4H12.2001C12.5867 13.4 12.9001 13.0866 12.9001 12.7V8.49999C12.9001 8.11338 12.5867 7.79999 12.2001 7.79999H10.8001Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Dashboards
                                        </div>
                                        <a href="{{ route('default') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Default</span>
                                        </a>
                                        <a href="{{ route('automotive') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Automotive</span>
                                        </a>
                                        <a href="{{ route('charts') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Smart Home</span>
                                        </a>
                                        <a href="{{ route('CRM') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">CRM</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" width="16px" height="16px">
                                                        <path
                                                            d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Users
                                        </div>
                                        <a href="{{ route('reports') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Reports</span>
                                        </a>
                                        <a href="{{ route('new-user') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">New User</span>
                                        </a>
                                        <hr class="vertical dark">
                                    </div>
                                    <div class="col-4 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" width="16px" height="16px">
                                                        <path fill-rule="evenodd"
                                                            d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Profile
                                        </div>
                                        <a href="{{ route('overview') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Overview</span>
                                        </a>
                                        <a href="{{ route('teams') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Teams</span>
                                        </a>
                                        <a href="{{ route('all_projects') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Projects</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" width="16px" height="16px">
                                                        <path fill-rule="evenodd"
                                                            d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Projects
                                        </div>
                                        <a href="{{ route('general') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">General</span>
                                        </a>
                                        <a href="{{ route('timeline') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Timeline</span>
                                        </a>
                                        <a href="{{ route('new_projects') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">New Project</span>
                                        </a>
                                        <hr class="vertical dark">
                                    </div>
                                    <div class="col-4">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" height="16px" width="16px">
                                                        <path fill-rule="evenodd"
                                                            d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Account
                                        </div>
                                        <a href="{{ route('settings') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Settings</span>
                                        </a>
                                        <a href="{{ route('billing') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Billing</span>
                                        </a>
                                        <a href="{{ route('invoice') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Invoice</span>
                                        </a>
                                        <a href="{{ route('security') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Security</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" width="16px" height="16px">
                                                        <path fill-rule="evenodd"
                                                            d="M2.25 4.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875V17.25a4.5 4.5 0 11-9 0V4.125zm4.5 14.25a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z"
                                                            clip-rule="evenodd" />
                                                        <path
                                                            d="M10.719 21.75h9.156c1.036 0 1.875-.84 1.875-1.875v-5.25c0-1.036-.84-1.875-1.875-1.875h-.14l-8.742 8.743c-.09.089-.18.175-.274.257zM12.738 17.625l6.474-6.474a1.875 1.875 0 000-2.651L15.5 4.787a1.875 1.875 0 00-2.651 0l-.1.099V17.25c0 .126-.003.251-.01.375z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Extra
                                        </div>
                                        <a href="{{ route('pricing-page') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Pricing Page</span>
                                        </a>
                                        <a href="{{ route('messages') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Messages</span>
                                        </a>
                                        <a href="{{ route('widgets') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Widgets</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- responsive -->
                        <div class="d-lg-none">
                            <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg width="16px" height="16px" viewBox="0 0 16 17" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path class="color-background"
                                                d="M3.1001 4.29998C3.1001 3.91338 3.4135 3.59998 3.8001 3.59998H12.2001C12.5867 3.59998 12.9001 3.91338 12.9001 4.29998V5.69998C12.9001 6.08657 12.5867 6.39998 12.2001 6.39998H3.8001C3.4135 6.39998 3.1001 6.08657 3.1001 5.69998V4.29998Z" />
                                            <path class="color-background"
                                                d="M3.1001 8.49999C3.1001 8.11338 3.4135 7.79999 3.8001 7.79999H8.0001C8.38671 7.79999 8.7001 8.11338 8.7001 8.49999V12.7C8.7001 13.0866 8.38671 13.4 8.0001 13.4H3.8001C3.4135 13.4 3.1001 13.0866 3.1001 12.7V8.49999Z" />
                                            <path class="color-background" opacity="0.6"
                                                d="M10.8001 7.79999C10.4135 7.79999 10.1001 8.11338 10.1001 8.49999V12.7C10.1001 13.0866 10.4135 13.4 10.8001 13.4H12.2001C12.5867 13.4 12.9001 13.0866 12.9001 12.7V8.49999C12.9001 8.11338 12.5867 7.79999 12.2001 7.79999H10.8001Z" />
                                        </svg>
                                    </div>
                                </div>
                                Dashboards
                            </div>
                            <a href="{{ route('default') }}" class="dropdown-item rounded-2">
                                Default
                            </a>
                            <a href="{{ route('automotive') }}" class="dropdown-item rounded-2">
                                Automotive
                            </a>
                            <a href="{{ route('smart_home') }}" class="dropdown-item rounded-2">
                                Smart Home
                            </a>
                            <a href="{{ route('CRM') }}" class="dropdown-item rounded-2">
                                CRM
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" width="12px" height="12px">
                                            <path
                                                d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z" />
                                        </svg>
                                    </div>
                                </div>
                                Users
                            </div>
                            <a href="{{ route('reports') }}" class="dropdown-item rounded-2">
                                Reports
                            </a>
                            <a href="{{ route('new-user') }}" class="dropdown-item rounded-2">
                                New user
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" width="12px" height="12px">
                                            <path fill-rule="evenodd"
                                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                Profile
                            </div>
                            <a href="{{ route('overview') }}" class="dropdown-item rounded-2">
                                Overview
                            </a>
                            <a href="{{ route('teams') }}" class="dropdown-item rounded-2">
                                Teams
                            </a>
                            <a href="{{ route('all_projects') }}" class="dropdown-item rounded-2">
                                Projects
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" width="12px" height="12px">
                                            <path fill-rule="evenodd"
                                                d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.04 16.5l.5-1.5h6.42l.5 1.5H8.29zm7.46-12a.75.75 0 00-1.5 0v6a.75.75 0 001.5 0v-6zm-3 2.25a.75.75 0 00-1.5 0v3.75a.75.75 0 001.5 0V9zm-3 2.25a.75.75 0 00-1.5 0v1.5a.75.75 0 001.5 0v-1.5z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                Projects
                            </div>
                            <a href="{{ route('general') }}" class="dropdown-item rounded-2">
                                General
                            </a>
                            <a href="{{ route('timeline') }}" class="dropdown-item rounded-2">
                                Timeline
                            </a>
                            <a href="{{ route('new_projects') }}" class="dropdown-item rounded-2">
                                New Project
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" height="12px" width="12px">
                                            <path fill-rule="evenodd"
                                                d="M4.5 3.75a3 3 0 00-3 3v10.5a3 3 0 003 3h15a3 3 0 003-3V6.75a3 3 0 00-3-3h-15zm4.125 3a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zm-3.873 8.703a4.126 4.126 0 017.746 0 .75.75 0 01-.351.92 7.47 7.47 0 01-3.522.877 7.47 7.47 0 01-3.522-.877.75.75 0 01-.351-.92zM15 8.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15zM14.25 12a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H15a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3.75a.75.75 0 000-1.5H15z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                Account
                            </div>
                            <a href="{{ route('settings') }}" class="dropdown-item rounded-2">
                                Settings
                            </a>
                            <a href="{{ route('billing') }}" class="dropdown-item rounded-2">
                                Billing
                            </a>
                            <a href="{{ route('invoice') }}" class="dropdown-item rounded-2">
                                Invoice
                            </a>
                            <a href="{{ route('security') }}" class="dropdown-item rounded-2">
                                Security
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" width="12px" height="12px">
                                            <path fill-rule="evenodd"
                                                d="M2.25 4.125c0-1.036.84-1.875 1.875-1.875h5.25c1.036 0 1.875.84 1.875 1.875V17.25a4.5 4.5 0 11-9 0V4.125zm4.5 14.25a1.125 1.125 0 100-2.25 1.125 1.125 0 000 2.25z"
                                                clip-rule="evenodd" />
                                            <path
                                                d="M10.719 21.75h9.156c1.036 0 1.875-.84 1.875-1.875v-5.25c0-1.036-.84-1.875-1.875-1.875h-.14l-8.742 8.743c-.09.089-.18.175-.274.257zM12.738 17.625l6.474-6.474a1.875 1.875 0 000-2.651L15.5 4.787a1.875 1.875 0 00-2.651 0l-.1.099V17.25c0 .126-.003.251-.01.375z" />
                                        </svg>
                                    </div>
                                </div>
                                Extra
                            </div>
                            <a href="{{ route('pricing-page') }}" class="dropdown-item rounded-2">
                                Pricing Page
                            </a>
                            <a href="{{ route('messages') }}" class="dropdown-item rounded-2">
                                Messages
                            </a>
                            <a href="{{ route('widgets') }}" class="dropdown-item rounded-2">
                                Widgets
                            </a>
                        </div>
                    </div>
                </li>
                <li class="mx-2 nav-item dropdown dropdown-hover">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  text-dark "
                        id="dropdownMenuAccount" data-bs-toggle="dropdown" aria-expanded="false">
                        Authentication
                        <img src=" ../../assets/img/down-arrow.svg " alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="p-0 border-0 mt-0 dropdown-menu dropdown-menu-animation dropdown-lg mt-lg-3"
                        aria-labelledby="dropdownMenuAccount">
                        <div class="row d-none d-lg-flex">
                            <div class="col-6 ps-0">
                                <div class="py-6 h-100 w-100 d-flex rounded-start-2 position-relative dropdown-image"
                                    style="background-image:url('../../assets/img/img-6.jpg')">
                                    <div class="mask bg-gradient-primary rounded-start-2"></div>
                                    <div
                                        class="d-flex justify-content-center align-items-center text-center text-white font-weight-bold w-100 z-index-1 flex-column">
                                        <span class="text-lg mt-2">Explore our<br>utilities pages</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 p-3 ps-0 d-flex justify-content-center flex-column">
                                <ul class="list-group">
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item rounded-2 ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownSignIn">
                                            <span>Sign In</span>
                                            <img src="../../assets/img/down-arrow.svg" alt="down-arrow"
                                                class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignIn">
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('basic-signin') }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('cover-signin') }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('illustration-signin') }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item rounded-2 ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownSignUp">
                                            <span>Sign Up</span>
                                            <img src="../../assets/img/down-arrow.svg" alt="down-arrow"
                                                class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownSignUp">
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('basic-signup') }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('cover-signup') }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('illustration-signup') }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item rounded-2 ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownPasswordReset">
                                            <span>Reset Password</span>
                                            <img src="../../assets/img/down-arrow.svg" alt="down-arrow"
                                                class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2"
                                            aria-labelledby="dropdownPasswordReset">
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('basic-reset-password') }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('cover-reset-password') }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('illustration-reset-password') }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item rounded-2 ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownLock">
                                            <span>Lock</span>
                                            <img src="../../assets/img/down-arrow.svg" alt="down-arrow"
                                                class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownLock">
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('basic-lock') }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('cover-lock') }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('illustration-lock') }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item rounded-2 ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdown2fa">
                                            <span>2-Step Verification</span>
                                            <img src="../../assets/img/down-arrow.svg" alt="down-arrow"
                                                class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdown2fa">
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('basic-validation') }}">
                                                <span>Basic</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('cover-validation') }}">
                                                <span>Cover</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1"
                                                href="{{ route('illustration-validation') }}">
                                                <span>Illustration</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                        <a class="dropdown-item rounded-2 ps-3 d-flex align-items-center justify-content-between mb-1"
                                            id="dropdownError">
                                            <span>Error</span>
                                            <img src="../../assets/img/down-arrow.svg" alt="down-arrow"
                                                class="arrow">
                                        </a>
                                        <div class="dropdown-menu mt-0 py-3 px-2" aria-labelledby="dropdownError">
                                            <a class="dropdown-item ps-3 rounded-2 mb-1" href="{{ route('404') }}">
                                                <span>404</span>
                                            </a>
                                            <a class="dropdown-item ps-3 rounded-2 mb-1" href="{{ route('500') }}">
                                                <span>500</span>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row d-lg-none">
                            <div class="col-12 d-flex justify-content-center flex-column">
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                    Sign In
                                </h6>
                                <a href="{{ route('basic-signin') }}" class="dropdown-item rounded-2">
                                    Basic
                                </a>
                                <a href="{{ route('cover-signin') }}" class="dropdown-item rounded-2">
                                    Cover
                                </a>
                                <a href="{{ route('illustration-signin') }}" class="dropdown-item rounded-2">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Sign Up
                                </h6>
                                <a href="{{ route('basic-signup') }}" class="dropdown-item rounded-2">
                                    Basic
                                </a>
                                <a href="{{ route('cover-signup') }}" class="dropdown-item rounded-2">
                                    Cover
                                </a>
                                <a href="{{ route('illustration-signup') }}" class="dropdown-item rounded-2">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Reset Password
                                </h6>
                                <a href="{{ route('basic-reset-password') }}" class="dropdown-item rounded-2">
                                    Basic
                                </a>
                                <a href="{{ route('cover-reset-password') }}" class="dropdown-item rounded-2">
                                    Cover
                                </a>
                                <a href="{{ route('illustration-reset-password') }}" class="dropdown-item rounded-2">
                                    Illustation
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Lock
                                </h6>
                                <a href="{{ route('basic-lock') }}" class="dropdown-item rounded-2">
                                    Basic
                                </a>
                                <a href="{{ route('cover-lock') }}" class="dropdown-item rounded-2">
                                    Cover
                                </a>
                                <a href="{{ route('illustration-lock') }}" class="dropdown-item rounded-2">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    2-Step Verification
                                </h6>
                                <a href="{{ route('basic-validation') }}" class="dropdown-item rounded-2">
                                    Basic
                                </a>
                                <a href="{{ route('cover-validation') }}" class="dropdown-item rounded-2">
                                    Cover
                                </a>
                                <a href="{{ route('illustration-validation') }}" class="dropdown-item rounded-2">
                                    Illustration
                                </a>
                                <h6
                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center mt-3 px-0">
                                    Error
                                </h6>
                                <a href="{{ route('404') }}" class="dropdown-item rounded-2">
                                    404
                                </a>
                                <a href="{{ route('500') }}" class="dropdown-item rounded-2">
                                    500
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mx-2 nav-item dropdown dropdown-hover">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  text-dark "
                        id="dropdownMenuBlocks" data-bs-toggle="dropdown" aria-expanded="false">
                        Applications
                        <img src=" ../../assets/img/down-arrow-dark.svg " alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="p-3 mt-0 dropdown-menu dropdown-menu-animation dropdown-md dropdown-md-responsive mt-lg-3"
                        aria-labelledby="dropdownMenuBlocks">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" href="{{ route('kanban') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path
                                                        d="M6 3a3 3 0 00-3 3v2.25a3 3 0 003 3h2.25a3 3 0 003-3V6a3 3 0 00-3-3H6zM15.75 3a3 3 0 00-3 3v2.25a3 3 0 003 3H18a3 3 0 003-3V6a3 3 0 00-3-3h-2.25zM6 12.75a3 3 0 00-3 3V18a3 3 0 003 3h2.25a3 3 0 003-3v-2.25a3 3 0 00-3-3H6zM17.625 13.5a.75.75 0 00-1.5 0v2.625H13.5a.75.75 0 000 1.5h2.625v2.625a.75.75 0 001.5 0v-2.625h2.625a.75.75 0 000-1.5h-2.625V13.5z" />
                                                </svg>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Kanban</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" href="{{ route('wizard') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Wizard</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" href="{{ route('wallet') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex text-primary mt-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path
                                                        d="M2.273 5.625A4.483 4.483 0 015.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 3H5.25a3 3 0 00-2.977 2.625zM2.273 8.625A4.483 4.483 0 015.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 6H5.25a3 3 0 00-2.977 2.625zM5.25 9a3 3 0 00-3 3v6a3 3 0 003 3h13.5a3 3 0 003-3v-6a3 3 0 00-3-3H15a.75.75 0 00-.75.75 2.25 2.25 0 01-4.5 0A.75.75 0 009 9H5.25z" />
                                                </svg>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Wallet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" href="{{ route('datatables') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">DataTables</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" href="{{ route('calendar') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path
                                                        d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                                    <path fill-rule="evenodd"
                                                        d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Calendar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li
                                    class="nav-item dropdown dropdown-hover dropdown-subitem list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" href="{{ route('analytics') }}">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.54 15h6.42l.5 1.5H8.29l.5-1.5zm8.085-8.995a.75.75 0 10-.75-1.299 12.81 12.81 0 00-3.558 3.05L11.03 8.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 001.146-.102 11.312 11.312 0 013.612-3.321z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="w-100 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <p class="dropdown-header text-dark p-0">Analytics</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- responsive -->
                        <div class="row d-lg-none">
                            <div class="col-md-12">
                                <a class="py-2 ps-3 rounded-2" href="{{ route('kanban') }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path
                                                    d="M6 3a3 3 0 00-3 3v2.25a3 3 0 003 3h2.25a3 3 0 003-3V6a3 3 0 00-3-3H6zM15.75 3a3 3 0 00-3 3v2.25a3 3 0 003 3H18a3 3 0 003-3V6a3 3 0 00-3-3h-2.25zM6 12.75a3 3 0 00-3 3V18a3 3 0 003 3h2.25a3 3 0 003-3v-2.25a3 3 0 00-3-3H6zM17.625 13.5a.75.75 0 00-1.5 0v2.625H13.5a.75.75 0 000 1.5h2.625v2.625a.75.75 0 001.5 0v-2.625h2.625a.75.75 0 000-1.5h-2.625V13.5z" />
                                            </svg>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Kanban</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 rounded-2" href="{{ route('wizard') }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M9 4.5a.75.75 0 01.721.544l.813 2.846a3.75 3.75 0 002.576 2.576l2.846.813a.75.75 0 010 1.442l-2.846.813a3.75 3.75 0 00-2.576 2.576l-.813 2.846a.75.75 0 01-1.442 0l-.813-2.846a3.75 3.75 0 00-2.576-2.576l-2.846-.813a.75.75 0 010-1.442l2.846-.813A3.75 3.75 0 007.466 7.89l.813-2.846A.75.75 0 019 4.5zM18 1.5a.75.75 0 01.728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 010 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 01-1.456 0l-.258-1.036a2.625 2.625 0 00-1.91-1.91l-1.036-.258a.75.75 0 010-1.456l1.036-.258a2.625 2.625 0 001.91-1.91l.258-1.036A.75.75 0 0118 1.5zM16.5 15a.75.75 0 01.712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 010 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 01-1.422 0l-.395-1.183a1.5 1.5 0 00-.948-.948l-1.183-.395a.75.75 0 010-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0116.5 15z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Wizard</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 rounded-2" href="{{ route('wallet') }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex text-primary mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path
                                                    d="M2.273 5.625A4.483 4.483 0 015.25 4.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 3H5.25a3 3 0 00-2.977 2.625zM2.273 8.625A4.483 4.483 0 015.25 7.5h13.5c1.141 0 2.183.425 2.977 1.125A3 3 0 0018.75 6H5.25a3 3 0 00-2.977 2.625zM5.25 9a3 3 0 00-3 3v6a3 3 0 003 3h13.5a3 3 0 003-3v-6a3 3 0 00-3-3H15a.75.75 0 00-.75.75 2.25 2.25 0 01-4.5 0A.75.75 0 009 9H5.25z" />
                                            </svg>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Wallet</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 rounded-2" href="{{ route('datatables') }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M1.5 5.625c0-1.036.84-1.875 1.875-1.875h17.25c1.035 0 1.875.84 1.875 1.875v12.75c0 1.035-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 18.375V5.625zM21 9.375A.375.375 0 0020.625 9h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zm0 3.75a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5a.375.375 0 00.375-.375v-1.5zM10.875 18.75a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375h7.5zM3.375 15h7.5a.375.375 0 00.375-.375v-1.5a.375.375 0 00-.375-.375h-7.5a.375.375 0 00-.375.375v1.5c0 .207.168.375.375.375zm0-3.75h7.5a.375.375 0 00.375-.375v-1.5A.375.375 0 0010.875 9h-7.5A.375.375 0 003 9.375v1.5c0 .207.168.375.375.375z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">DataTables</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 rounded-2" href="{{ route('calendar') }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path
                                                    d="M12.75 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM7.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM8.25 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM9.75 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM10.5 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM12 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM12.75 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM14.25 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 17.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 15.75a.75.75 0 100-1.5.75.75 0 000 1.5zM15 12.75a.75.75 0 11-1.5 0 .75.75 0 011.5 0zM16.5 13.5a.75.75 0 100-1.5.75.75 0 000 1.5z" />
                                                <path fill-rule="evenodd"
                                                    d="M6.75 2.25A.75.75 0 017.5 3v1.5h9V3A.75.75 0 0118 3v1.5h.75a3 3 0 013 3v11.25a3 3 0 01-3 3H5.25a3 3 0 01-3-3V7.5a3 3 0 013-3H6V3a.75.75 0 01.75-.75zm13.5 9a1.5 1.5 0 00-1.5-1.5H5.25a1.5 1.5 0 00-1.5 1.5v7.5a1.5 1.5 0 001.5 1.5h13.5a1.5 1.5 0 001.5-1.5v-7.5z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Calendar</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="py-2 ps-3 rounded-2" href="{{ route('analytics') }}">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 2.25a.75.75 0 000 1.5H3v10.5a3 3 0 003 3h1.21l-1.172 3.513a.75.75 0 001.424.474l.329-.987h8.418l.33.987a.75.75 0 001.422-.474l-1.17-3.513H18a3 3 0 003-3V3.75h.75a.75.75 0 000-1.5H2.25zm6.54 15h6.42l.5 1.5H8.29l.5-1.5zm8.085-8.995a.75.75 0 10-.75-1.299 12.81 12.81 0 00-3.558 3.05L11.03 8.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l2.47-2.47 1.617 1.618a.75.75 0 001.146-.102 11.312 11.312 0 013.612-3.321z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="w-100 d-flex align-items-center justify-content-between">
                                            <div>
                                                <p class="dropdown-header text-dark p-0">Analytics</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mx-2 nav-item dropdown dropdown-hover">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  text-dark "
                        id="dropdownMenuEcommerce" data-bs-toggle="dropdown" aria-expanded="false">
                        Ecommerce
                        <img src=" ../../assets/img/down-arrow-dark.svg  " alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="p-3 mt-0 dropdown-menu dropdown-menu-animation dropdown-lg mt-lg-3"
                        aria-labelledby="dropdownMenuEcommerce">
                        <div class="row d-none d-lg-block">
                            <div class="col-12 px-4 py-2">
                                <div class="row">
                                    <div class="col-6 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" height="16px" width="16px">
                                                        <path fill-rule="evenodd"
                                                            d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                                            clip-rule="evenodd" />
                                                        <path fill-rule="evenodd"
                                                            d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Orders
                                        </div>
                                        <a href="{{ route('list') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Order List</span>
                                        </a>
                                        <a href="{{ route('details') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Order Details</span>
                                        </a>
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" height="16px" width="16px">
                                                        <path
                                                            d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            General
                                        </div>
                                        <a href="{{ route('overview-ecommerce') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Overview</span>
                                        </a>
                                        <a href="{{ route('referral') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Referral</span>
                                        </a>
                                        <hr class="vertical dark">
                                    </div>
                                    <div class="col-6 position-relative">
                                        <div
                                            class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                            <div class="d-inline-block">
                                                <div class="icon me-3 text-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="currentColor" height="16px" width="16px">
                                                        <path
                                                            d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            Products
                                        </div>
                                        <a href="{{ route('new-product') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">New Product</span>
                                        </a>
                                        <a href="{{ route('edit-product') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Edit Product</span>
                                        </a>
                                        <a href="{{ route('product-page') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Product Page</span>
                                        </a>
                                        <a href="{{ route('products-list') }}" class="dropdown-item rounded-2">
                                            <span class="ps-3">Products List</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- responsive -->
                        <div class="d-lg-none">
                            <div class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" height="16px" width="16px">
                                            <path fill-rule="evenodd"
                                                d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                                clip-rule="evenodd" />
                                            <path fill-rule="evenodd"
                                                d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                Orders
                            </div>
                            <a href="{{ route('list') }}" class="dropdown-item rounded-2">
                                Order List
                            </a>
                            <a href="{{ route('details') }}" class="dropdown-item rounded-2">
                                Order Details
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" height="16px" width="16px">
                                            <path
                                                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
                                        </svg>
                                    </div>
                                </div>
                                General
                            </div>
                            <a href="{{ route('overview-ecommerce') }}" class="dropdown-item rounded-2">
                                Overview
                            </a>
                            <a href="{{ route('referral') }}" class="dropdown-item rounded-2">
                                Referral
                            </a>
                            <div
                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-0 mt-3">
                                <div class="d-inline-block">
                                    <div class="icon me-3 text-primary ms-n3">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            fill="currentColor" height="16px" width="16px">
                                            <path
                                                d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
                                        </svg>
                                    </div>
                                </div>
                                Products
                            </div>
                            <a href="{{ route('new-product') }}" class="dropdown-item rounded-2">
                                New Product
                            </a>
                            <a href="{{ route('edit-product') }}" class="dropdown-item rounded-2">
                                Edit Product
                            </a>
                            <a href="{{ route('product-page') }}" class="dropdown-item rounded-2">
                                Product Page
                            </a>
                            <a href="{{ route('products-list') }}" class="dropdown-item rounded-2">
                                Products List
                            </a>
                        </div>
                    </div>
                </li>
                <li class="mx-2 nav-item dropdown dropdown-hover">
                    <a role="button"
                        class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center  text-dark "
                        id="dropdownMenuDocs" data-bs-toggle="dropdown" aria-expanded="false">
                        Docs
                        <img src=" ../../assets/img/down-arrow-dark.svg " alt="down-arrow"
                            class="arrow ms-1 d-lg-block d-none">
                        <img src="../../assets/img/down-arrow-dark.svg" alt="down-arrow"
                            class="arrow ms-1 d-lg-none d-block">
                    </a>
                    <div class="p-3 mt-0 dropdown-menu dropdown-menu-animation dropdown-lg mt-lg-3"
                        aria-labelledby="dropdownMenuDocs">
                        <div class="d-none d-lg-block">
                            <ul class="list-group">
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                        href="https://www.creative-tim.com/learning-lab/bootstrap/installation-guide/corporate-ui-dashboard">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"
                                                        clip-rule="evenodd" />
                                                    <path
                                                        d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Getting Started</h6>
                                                <span class="text-sm">All about overview, quick start, license and
                                                    contents</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                        href="https://www.creative-tim.com/learning-lab/bootstrap/colors/corporate-ui-dashboard">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Foundation</h6>
                                                <span class="text-sm">See our colors, icons and typography</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                        href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/corporate-ui-dashboard">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path
                                                        d="M11.25 5.337c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.036 1.007-1.875 2.25-1.875S15 2.34 15 3.375c0 .369-.128.713-.349 1.003-.215.283-.401.604-.401.959 0 .332.278.598.61.578 1.91-.114 3.79-.342 5.632-.676a.75.75 0 01.878.645 49.17 49.17 0 01.376 5.452.657.657 0 01-.66.664c-.354 0-.675-.186-.958-.401a1.647 1.647 0 00-1.003-.349c-1.035 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401.31 0 .557.262.534.571a48.774 48.774 0 01-.595 4.845.75.75 0 01-.61.61c-1.82.317-3.673.533-5.555.642a.58.58 0 01-.611-.581c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.035-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959a.641.641 0 01-.658.643 49.118 49.118 0 01-4.708-.36.75.75 0 01-.645-.878c.293-1.614.504-3.257.629-4.924A.53.53 0 005.337 15c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.036 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.369 0 .713.128 1.003.349.283.215.604.401.959.401a.656.656 0 00.659-.663 47.703 47.703 0 00-.31-4.82.75.75 0 01.83-.832c1.343.155 2.703.254 4.077.294a.64.64 0 00.657-.642z" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Components</h6>
                                                <span class="text-sm">Explore our collection of fully designed
                                                    components</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                        href="https://www.creative-tim.com/learning-lab/bootstrap/charts/corporate-ui-dashboard">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Plugins</h6>
                                                <span class="text-sm">Check how you can integrate our plugins</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item list-group-item border-0 p-0">
                                    <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                        href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/corporate-ui-dashboard">
                                        <div class="d-flex">
                                            <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor" height="14px" width="14px">
                                                    <path fill-rule="evenodd"
                                                        d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                                        clip-rule="evenodd" />
                                                    <path
                                                        d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                                                    <path fill-rule="evenodd"
                                                        d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div>
                                                <h6
                                                    class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                    Utility Classes</h6>
                                                <span class="text-sm">For those who want flexibility, use our utility
                                                    classes</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="row d-lg-none">
                            <div class="col-md-12 g-0">
                                <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/installation-guide/corporate-ui-dashboard">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M9.315 7.584C12.195 3.883 16.695 1.5 21.75 1.5a.75.75 0 01.75.75c0 5.056-2.383 9.555-6.084 12.436A6.75 6.75 0 019.75 22.5a.75.75 0 01-.75-.75v-4.131A15.838 15.838 0 016.382 15H2.25a.75.75 0 01-.75-.75 6.75 6.75 0 017.815-6.666zM15 6.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"
                                                    clip-rule="evenodd" />
                                                <path
                                                    d="M5.26 17.242a.75.75 0 10-.897-1.203 5.243 5.243 0 00-2.05 5.022.75.75 0 00.625.627 5.243 5.243 0 005.022-2.051.75.75 0 10-1.202-.897 3.744 3.744 0 01-3.008 1.51c0-1.23.592-2.323 1.51-3.008z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Getting Started</h6>
                                            <span class="text-sm">All about overview, quick start, license and
                                                contents</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/colors/corporate-ui-dashboard">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M7.502 6h7.128A3.375 3.375 0 0118 9.375v9.375a3 3 0 003-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 00-.673-.05A3 3 0 0015 1.5h-1.5a3 3 0 00-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6zM13.5 3A1.5 1.5 0 0012 4.5h4.5A1.5 1.5 0 0015 3h-1.5z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd"
                                                    d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 013 20.625V9.375zM6 12a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V12zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 15a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V15zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75zM6 18a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H6.75a.75.75 0 01-.75-.75V18zm2.25 0a.75.75 0 01.75-.75h3.75a.75.75 0 010 1.5H9a.75.75 0 01-.75-.75z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Foundation</h6>
                                            <span class="text-sm">See our colors, icons and typography</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/corporate-ui-dashboard">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path
                                                    d="M11.25 5.337c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.036 1.007-1.875 2.25-1.875S15 2.34 15 3.375c0 .369-.128.713-.349 1.003-.215.283-.401.604-.401.959 0 .332.278.598.61.578 1.91-.114 3.79-.342 5.632-.676a.75.75 0 01.878.645 49.17 49.17 0 01.376 5.452.657.657 0 01-.66.664c-.354 0-.675-.186-.958-.401a1.647 1.647 0 00-1.003-.349c-1.035 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401.31 0 .557.262.534.571a48.774 48.774 0 01-.595 4.845.75.75 0 01-.61.61c-1.82.317-3.673.533-5.555.642a.58.58 0 01-.611-.581c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.035-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959a.641.641 0 01-.658.643 49.118 49.118 0 01-4.708-.36.75.75 0 01-.645-.878c.293-1.614.504-3.257.629-4.924A.53.53 0 005.337 15c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.036 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.369 0 .713.128 1.003.349.283.215.604.401.959.401a.656.656 0 00.659-.663 47.703 47.703 0 00-.31-4.82.75.75 0 01.83-.832c1.343.155 2.703.254 4.077.294a.64.64 0 00.657-.642z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Components</h6>
                                            <span class="text-sm">Explore our collection of fully designed
                                                components</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/charts/corporate-ui-dashboard">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M2.25 13.5a8.25 8.25 0 018.25-8.25.75.75 0 01.75.75v6.75H18a.75.75 0 01.75.75 8.25 8.25 0 01-16.5 0z"
                                                    clip-rule="evenodd" />
                                                <path fill-rule="evenodd"
                                                    d="M12.75 3a.75.75 0 01.75-.75 8.25 8.25 0 018.25 8.25.75.75 0 01-.75.75h-7.5a.75.75 0 01-.75-.75V3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Plugins</h6>
                                            <span class="text-sm">Check how you can integrate our plugins</span>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item py-2 ps-3 rounded-2" target="_blank"
                                    href="https://www.creative-tim.com/learning-lab/bootstrap/utilities/corporate-ui-dashboard">
                                    <div class="d-flex">
                                        <div class="icon h-10 me-3 d-flex mt-1 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor" height="14px" width="14px">
                                                <path fill-rule="evenodd"
                                                    d="M12 6.75a5.25 5.25 0 016.775-5.025.75.75 0 01.313 1.248l-3.32 3.319c.063.475.276.934.641 1.299.365.365.824.578 1.3.64l3.318-3.319a.75.75 0 011.248.313 5.25 5.25 0 01-5.472 6.756c-1.018-.086-1.87.1-2.309.634L7.344 21.3A3.298 3.298 0 112.7 16.657l8.684-7.151c.533-.44.72-1.291.634-2.309A5.342 5.342 0 0112 6.75zM4.117 19.125a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75h-.008a.75.75 0 01-.75-.75v-.008z"
                                                    clip-rule="evenodd" />
                                                <path
                                                    d="M10.076 8.64l-2.201-2.2V4.874a.75.75 0 00-.364-.643l-3.75-2.25a.75.75 0 00-.916.113l-.75.75a.75.75 0 00-.113.916l2.25 3.75a.75.75 0 00.643.364h1.564l2.062 2.062 1.575-1.297z" />
                                                <path fill-rule="evenodd"
                                                    d="M12.556 17.329l4.183 4.182a3.375 3.375 0 004.773-4.773l-3.306-3.305a6.803 6.803 0 01-1.53.043c-.394-.034-.682-.006-.867.042a.589.589 0 00-.167.063l-3.086 3.748zm3.414-1.36a.75.75 0 011.06 0l1.875 1.876a.75.75 0 11-1.06 1.06L15.97 17.03a.75.75 0 010-1.06z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h6
                                                class="dropdown-header text-dark font-weight-bolder d-flex align-items-center p-0">
                                                Utility Classes</h6>
                                            <span class="text-sm">All about overview, quick start, license and
                                                contents</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <a href="javascript:;" class="btn btn-sm  btn-dark  mb-0 me-1"
                        onclick="smoothToPricing('pricing-soft-ui')">Buy Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <img src="../../assets/img/header-blue-purple.jpg" alt="pattern-lines"
                            class="top-0 rounded-2 position-absolute start-0 w-100 h-100">
                        <div class="px-4 bg-cover card-body z-index-1">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <h3 class="text-white">Collect your benefits 🔥</h3>
                                    <p class="mb-4 text-white">Check all the advantages and choose the best.</p>
                                    <button class="btn btn-outline-white">
                                        <i class="fas fa-gift me-2"></i>
                                        Watch more
                                    </button>
                                </div>
                                <div class="text-end col-lg-4 col-12">
                                    <img class="w-50 ms-auto me-n4 mt-n5 mt-lg-n7 d-none d-md-block"
                                        src="../../assets/img/cube-3d.png" alt="cube image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">Members list</h5>
                                    <p class="mb-0 text-sm">
                                        See information about all members
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn btn-white">
                                        View all
                                    </button>
                                    <button class="btn btn-dark">
                                        <i class="fas fa-user-plus me-2"></i>
                                        Add member
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-basic">
                                <thead class="bg-gray-100 thead-light">
                                    <tr>
                                        <th class="text-xs text-secondary font-weight-bolder opacity-7">Member</th>
                                        <th class="text-xs text-secondary font-weight-bolder opacity-7">Function</th>
                                        <th class="text-xs text-secondary font-weight-bolder opacity-7">Status</th>
                                        <th class="text-xs text-secondary font-weight-bolder opacity-7">Employed</th>
                                        <th class="text-xs text-secondary font-weight-bolder opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-1.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">John Michael</h6>
                                                    <p class="mb-0 text-sm text-secondary">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Organization</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-2.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Alexa Liras</h6>
                                                    <p class="mb-0 text-sm text-secondary">alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-3.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Laurent Perrier</h6>
                                                    <p class="mb-0 text-sm text-secondary">laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Executive</h6>
                                            <p class="mb-0 text-sm text-secondary">Projects</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-4.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Michael Levi</h6>
                                                    <p class="mb-0 text-sm text-secondary">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-5.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Richard Gran</h6>
                                                    <p class="mb-0 text-sm text-secondary">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Executive</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-6.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Miriam Eric</h6>
                                                    <p class="mb-0 text-sm text-secondary">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-1.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">John Michael</h6>
                                                    <p class="mb-0 text-sm text-secondary">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Organization</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-2.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Alexa Liras</h6>
                                                    <p class="mb-0 text-sm text-secondary">alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-3.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Laurent Perrier</h6>
                                                    <p class="mb-0 text-sm text-secondary">laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Executive</h6>
                                            <p class="mb-0 text-sm text-secondary">Projects</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-4.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Michael Levi</h6>
                                                    <p class="mb-0 text-sm text-secondary">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-5.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Richard Gran</h6>
                                                    <p class="mb-0 text-sm text-secondary">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Executive</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-6.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Miriam Eric</h6>
                                                    <p class="mb-0 text-sm text-secondary">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-1.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">John Michael</h6>
                                                    <p class="mb-0 text-sm text-secondary">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Organization</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-2.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Alexa Liras</h6>
                                                    <p class="mb-0 text-sm text-secondary">alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-3.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Laurent Perrier</h6>
                                                    <p class="mb-0 text-sm text-secondary">laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Executive</h6>
                                            <p class="mb-0 text-sm text-secondary">Projects</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-4.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Michael Levi</h6>
                                                    <p class="mb-0 text-sm text-secondary">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-5.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Richard Gran</h6>
                                                    <p class="mb-0 text-sm text-secondary">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Executive</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-6.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Miriam Eric</h6>
                                                    <p class="mb-0 text-sm text-secondary">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-1.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">John Michael</h6>
                                                    <p class="mb-0 text-sm text-secondary">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Organization</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-2.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Alexa Liras</h6>
                                                    <p class="mb-0 text-sm text-secondary">alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-3.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Laurent Perrier</h6>
                                                    <p class="mb-0 text-sm text-secondary">laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Executive</h6>
                                            <p class="mb-0 text-sm text-secondary">Projects</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-4.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Michael Levi</h6>
                                                    <p class="mb-0 text-sm text-secondary">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-5.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Richard Gran</h6>
                                                    <p class="mb-0 text-sm text-secondary">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Executive</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-6.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Miriam Eric</h6>
                                                    <p class="mb-0 text-sm text-secondary">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-1.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">John Michael</h6>
                                                    <p class="mb-0 text-sm text-secondary">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Organization</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-2.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Alexa Liras</h6>
                                                    <p class="mb-0 text-sm text-secondary">alexa@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-3.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Laurent Perrier</h6>
                                                    <p class="mb-0 text-sm text-secondary">laurent@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Executive</h6>
                                            <p class="mb-0 text-sm text-secondary">Projects</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-4.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Michael Levi</h6>
                                                    <p class="mb-0 text-sm text-secondary">michael@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">Online</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-5.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Richard Gran</h6>
                                                    <p class="mb-0 text-sm text-secondary">richard@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Manager</h6>
                                            <p class="mb-0 text-sm text-secondary">Executive</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <img src="../../assets/img/team-6.jpg"
                                                        class="avatar avatar-sm rounded-circle me-3">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-dark">Miriam Eric</h6>
                                                    <p class="mb-0 text-sm text-secondary">miriam@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <h6 class="mb-0 text-dark">Programator</h6>
                                            <p class="mb-0 text-sm text-secondary">Developer</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-secondary">Offline</span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="text-secondary font-weight-normal">23/04/18</span>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">Recent transactions</h5>
                                    <p class="mb-0 text-sm">
                                        These are details about the last transactions
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <button class="btn btn-dark">
                                        <i class="fas fa-download me-2"></i>
                                        Download
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-flush" id="datatable-search">
                                <thead class="bg-gray-100 thead-light">
                                    <tr>
                                        <th class="text-xs">Transaction</th>
                                        <th class="text-xs">Amount</th>
                                        <th class="text-xs">Date</th>
                                        <th class="text-xs">Status</th>
                                        <th class="text-xs">Account</th>
                                        <th class="text-xs"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Spotify</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-invision.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Invision</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 1:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-jira.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Jira</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Mon 7:40pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-warning">
                                                <i class="fas me-1 fa-clock"></i>
                                                Pending
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-slack.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Slack</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 5:00pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-webdev.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Webdev</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$14,000</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Wed 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-success">
                                                <i class="fas me-1 fa-check"></i>
                                                Paid
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="avatar h-30 p-1">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex">
                                                <div>
                                                    <img src="../../assets/img/small-logos/logo-xd.svg"
                                                        class="avatar avatar-sm rounded-circle me-2">
                                                </div>
                                                <div class="my-auto">
                                                    <h6 class="mb-0">Adobe XD</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">$2,300</p>
                                        </td>
                                        <td>
                                            <p class="mb-0 text-sm font-weight-normal">Tue 3:30pm</p>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <span class="badge border-radius-lg badge-danger">
                                                <i class="fas me-1 fa-times"></i>
                                                Cancelled
                                            </span>
                                        </td>
                                        <td class="text-sm font-weight-normal">
                                            <div class="d-flex">
                                                <div class="my-auto me-3">
                                                    <div
                                                        class="border d-flex align-items-center justify-content-center rounded-2 h-100">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="avatar p-1 h-30">
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                    <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-sm text-end font-weight-normal">
                                            <i class="fas text-secondary me-3 fa-pencil"></i>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../assets/js/plugins/datatables.js"></script>
<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: true,
        ordering: false,
        fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        orderClasses: false,
        fixedHeight: true
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

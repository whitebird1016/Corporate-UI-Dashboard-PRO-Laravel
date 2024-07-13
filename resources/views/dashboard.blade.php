<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mx-2 mb-3 d-md-flex align-items-center">
                        <div class="mb-3 mb-md-0">
                            <h3 class="mb-0 font-weight-bold">Hello, Noah</h3>
                            <p class="mb-0">Apps you might like!</p>
                        </div>
                        <button type="button"
                            class="mb-0 mb-2 btn btn-sm btn-white btn-icon d-flex align-items-center ms-md-auto mb-sm-0 me-2">
                            <span class="btn-inner--icon">
                                <span class="p-1 bg-success rounded-circle d-flex ms-auto me-2">
                                    <span class="visually-hidden">New</span>
                                </span>
                            </span>
                            <span class="btn-inner--text">Messages</span>
                        </button>
                        <button type="button" class="mb-0 btn btn-sm btn-dark btn-icon d-flex align-items-center">
                            <span class="btn-inner--icon">
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="d-block me-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </span>
                            <span class="btn-inner--text">Sync</span>
                        </button>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="row">
                <div class="position-relative overflow-hidden">
                    <div class="swiper mySwiper mt-4 mb-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div>
                                    <div
                                        class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                        <div class="full-background bg-cover"
                                            style="background-image: url('../../assets/img/img-2.jpg')"></div>
                                        <div class="card-body text-start px-3 py-0 w-100">
                                            <div class="row mt-12">
                                                <div class="col-sm-3 mt-auto">
                                                    <h4 class="text-dark font-weight-bolder">#1</h4>
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name
                                                    </p>
                                                    <h5 class="text-dark font-weight-bolder">Secured</h5>
                                                </div>
                                                <div class="col-sm-3 ms-auto mt-auto">
                                                    <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">
                                                        Category</p>
                                                    <h5 class="text-dark font-weight-bolder">Banking</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../../assets/img/img-1.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#2</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Cyber</h5>
                                            </div>
                                            <div class="col-sm-3 ms-auto mt-auto">
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category
                                                </p>
                                                <h5 class="text-dark font-weight-bolder">Security</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../../assets/img/img-3.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#3</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Alpha</h5>
                                            </div>
                                            <div class="col-sm-3 ms-auto mt-auto">
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category
                                                </p>
                                                <h5 class="text-dark font-weight-bolder">Blockchain</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../../assets/img/img-4.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#4</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Beta</h5>
                                            </div>
                                            <div class="col-sm-3 ms-auto mt-auto">
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category
                                                </p>
                                                <h5 class="text-dark font-weight-bolder">Web3</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../../assets/img/img-5.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#5</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Gama</h5>
                                            </div>
                                            <div class="col-sm-3 ms-auto mt-auto">
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category
                                                </p>
                                                <h5 class="text-dark font-weight-bolder">Design</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div
                                    class="card card-background shadow-none border-radius-xl card-background-after-none align-items-start mb-0">
                                    <div class="full-background bg-cover"
                                        style="background-image: url('../../assets/img/img-1.jpg')"></div>
                                    <div class="card-body text-start px-3 py-0 w-100">
                                        <div class="row mt-12">
                                            <div class="col-sm-3 mt-auto">
                                                <h4 class="text-dark font-weight-bolder">#6</h4>
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Name</p>
                                                <h5 class="text-dark font-weight-bolder">Rompro</h5>
                                            </div>
                                            <div class="col-sm-3 ms-auto mt-auto">
                                                <p class="text-dark opacity-6 text-xs font-weight-bolder mb-0">Category
                                                </p>
                                                <h5 class="text-dark font-weight-bolder">Security</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="my-4 row">
                <div class="mb-4 col-lg-4 col-md-6 mb-md-0">
                    <div class="card shadow-xs border h-100">
                        <div class="card-header border-0 pb-0">
                            <h6 class="font-weight-semibold text-lg mb-0">Balances over time</h6>
                            <p class="text-sm">Here you have details about the balance.</p>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                    autocomplete="off" checked>
                                <label class="btn btn-white px-3 mb-0" for="btnradio1">12 months</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                    autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradio2">30 days</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                    autocomplete="off">
                                <label class="btn btn-white px-3 mb-0" for="btnradio3">7 days</label>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="chart mb-2">
                                <canvas id="chart-bars" class="chart-canvas" height="240"></canvas>
                            </div>
                            <button class="btn btn-white mb-0 ms-auto">View report</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="border shadow-xs card">
                        <div class="pb-0 card-header border-bottom">
                            <div class="mb-3 d-sm-flex align-items-center">
                                <div>
                                    <h6 class="mb-0 text-lg font-weight-semibold">Recent transactions</h6>
                                    <p class="mb-2 text-sm mb-sm-0">These are details about the last transactions</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <button type="button" class="mb-0 btn btn-sm btn-white me-2">
                                        View report
                                    </button>
                                    <button type="button"
                                        class="mb-0 btn btn-sm btn-dark btn-icon d-flex align-items-center">
                                        <span class="btn-inner--icon">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" class="d-block me-2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3" />
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">Download</span>
                                    </button>
                                </div>
                            </div>
                            <div class="pb-3 d-sm-flex align-items-center">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable1"
                                        autocomplete="off" checked>
                                    <label class="px-3 mb-0 btn btn-white" for="btnradiotable1">All</label>
                                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable2"
                                        autocomplete="off">
                                    <label class="px-3 mb-0 btn btn-white" for="btnradiotable2">Monitored</label>
                                    <input type="radio" class="btn-check" name="btnradiotable" id="btnradiotable3"
                                        autocomplete="off">
                                    <label class="px-3 mb-0 btn btn-white" for="btnradiotable3">Unmonitored</label>
                                </div>
                                <div class="input-group w-sm-25 ms-auto">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </div>
                        <div class="px-0 py-0 card-body">
                            <div class="p-0 table-responsive">
                                <table class="table mb-0 align-items-center justify-content-center">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th class="text-xs text-secondary font-weight-semibold opacity-7">
                                                Transaction</th>
                                            <th class="text-xs text-secondary font-weight-semibold opacity-7 ps-2">
                                                Amount</th>
                                            <th class="text-xs text-secondary font-weight-semibold opacity-7 ps-2">Date
                                            </th>
                                            <th class="text-xs text-secondary font-weight-semibold opacity-7 ps-2">
                                                Account</th>
                                            <th
                                                class="text-xs text-center text-secondary font-weight-semibold opacity-7">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="px-2 d-flex">
                                                    <div class="my-2 bg-gray-100 avatar avatar-sm rounded-circle me-2">
                                                        <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                            class="w-80" alt="spotify">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Spotify</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-normal">$2,500</p>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">Wed 3:00pm</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex">
                                                    <div
                                                        class="px-1 py-1 my-auto text-center border max-width-50 d-flex align-items-center border-radius-sm">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="mx-auto w-90" alt="visa">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                        <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-xs text-secondary font-weight-bold"
                                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                                    <svg width="14" height="14" viewBox="0 0 15 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 d-flex">
                                                    <div class="my-2 bg-gray-100 avatar avatar-sm rounded-circle me-2">
                                                        <img src="../../assets/img/small-logos/logo-invision.svg"
                                                            class="w-80" alt="invision">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Invision</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-normal">$5,000</p>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">Wed 1:00pm</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex">
                                                    <div
                                                        class="px-1 py-1 my-auto text-center border max-width-50 d-flex align-items-center border-radius-sm">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="mx-auto w-90" alt="mastercard">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                        <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-xs text-secondary font-weight-bold"
                                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                                    <svg width="14" height="14" viewBox="0 0 15 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 d-flex">
                                                    <div class="my-2 bg-gray-100 avatar avatar-sm rounded-circle me-2">
                                                        <img src="../../assets/img/small-logos/logo-jira.svg"
                                                            class="w-80" alt="jira">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Jira</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-normal">$3,400</p>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">Mon 7:40pm</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex">
                                                    <div
                                                        class="px-1 py-1 my-auto text-center border max-width-50 d-flex align-items-center border-radius-sm">
                                                        <img src="../../assets/img/logos/mastercard.png"
                                                            class="mx-auto w-90" alt="mastercard">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="mb-0 text-sm text-dark">Mastercard 1234</p>
                                                        <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-xs text-secondary font-weight-bold"
                                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                                    <svg width="14" height="14" viewBox="0 0 15 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-2 d-flex">
                                                    <div class="my-2 bg-gray-100 avatar avatar-sm rounded-circle me-2">
                                                        <img src="../../assets/img/small-logos/logo-slack.svg"
                                                            class="w-80" alt="slack">
                                                    </div>
                                                    <div class="my-auto">
                                                        <h6 class="mb-0 text-sm">Slack</h6>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-normal">$1,000</p>
                                            </td>
                                            <td>
                                                <span class="text-sm font-weight-normal">Wed 5:00pm</span>
                                            </td>
                                            <td class="align-middle">
                                                <div class="d-flex">
                                                    <div
                                                        class="px-1 py-1 my-auto text-center border max-width-50 d-flex align-items-center border-radius-sm">
                                                        <img src="../../assets/img/logos/visa.png"
                                                            class="mx-auto w-90" alt="visa">
                                                    </div>
                                                    <div class="ms-4">
                                                        <p class="mb-0 text-sm text-dark">Visa 1234</p>
                                                        <p class="mb-0 text-sm text-secondary">Expiry 06/2026</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <a href="javascript:;" class="text-xs text-secondary font-weight-bold"
                                                    data-bs-toggle="tooltip" data-bs-title="Edit user">
                                                    <svg width="14" height="14" viewBox="0 0 15 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z"
                                                            fill="#64748B" />
                                                    </svg>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 mb-xl-0">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-body text-start p-3 w-100">
                            <div
                                class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 4C2.89543 4 2 4.89543 2 6V7H18V6C18 4.89543 17.1046 4 16 4H4Z" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18 9H2V14C2 15.1046 2.89543 16 4 16H16C17.1046 16 18 15.1046 18 14V9ZM4 13C4 12.4477 4.44772 12 5 12H6C6.55228 12 7 12.4477 7 13C7 13.5523 6.55228 14 6 14H5C4.44772 14 4 13.5523 4 13ZM9 12C8.44772 12 8 12.4477 8 13C8 13.5523 8.44772 14 9 14H10C10.5523 14 11 13.5523 11 13C11 12.4477 10.5523 12 10 12H9Z" />
                                </svg>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="w-100">
                                        <p class="text-sm text-secondary mb-1">Revenue</p>
                                        <h4 class="mb-2 font-weight-bold">$99,118.5</h4>
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-success font-weight-semibold px-2">
                                                <i class="fa fa-chevron-up text-xs me-1"></i>10.5%
                                            </span>
                                            <span class="text-sm ms-3">from $89,740.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-body text-start p-3 w-100">
                            <div
                                class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.3001 4.80001V4.00001C5.3001 2.67453 6.37462 1.60001 7.7001 1.60001H9.3001C10.6256 1.60001 11.7001 2.67453 11.7001 4.00001V4.80001H13.3001C14.1838 4.80001 14.9001 5.51635 14.9001 6.40001V9.25665C12.9078 9.99577 10.752 10.3999 8.5001 10.3999C6.24821 10.3999 4.09239 9.99577 2.1001 9.25657V6.40001C2.1001 5.51635 2.81644 4.80001 3.7001 4.80001H5.3001ZM6.9001 4.00001C6.9001 3.55818 7.25827 3.20001 7.7001 3.20001H9.3001C9.74194 3.20001 10.1001 3.55818 10.1001 4.00001V4.80001H6.9001V4.00001ZM7.7001 8.00001C7.7001 7.55818 8.05827 7.20001 8.5001 7.20001H8.5081C8.94994 7.20001 9.3081 7.55818 9.3081 8.00001C9.3081 8.44185 8.94994 8.80001 8.5081 8.80001H8.5001C8.05827 8.80001 7.7001 8.44185 7.7001 8.00001Z" />
                                    <path
                                        d="M2.1001 10.9538V12.8C2.1001 13.6837 2.81644 14.4 3.7001 14.4H13.3001C14.1838 14.4 14.9001 13.6837 14.9001 12.8V10.9538C12.8899 11.6323 10.7372 11.9999 8.5001 11.9999C6.263 11.9999 4.11033 11.6323 2.1001 10.9538Z" />
                                </svg>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="w-100">
                                        <p class="text-sm text-secondary mb-1">Transactions</p>
                                        <h4 class="mb-2 font-weight-bold">376</h4>
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-success font-weight-semibold px-2">
                                                <i class="fa fa-chevron-up text-xs me-1"></i>55%
                                            </span>
                                            <span class="text-sm ms-3">from 243</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 mb-xl-0">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-body text-start p-3 w-100">
                            <div
                                class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.6001 8.8C1.6001 8.35816 1.95827 8 2.4001 8H4.0001C4.44192 8 4.8001 8.35816 4.8001 8.8V12.8C4.8001 13.2418 4.44192 13.6 4.0001 13.6H2.4001C1.95827 13.6 1.6001 13.2418 1.6001 12.8V8.8Z" />
                                    <path
                                        d="M6.3999 5.6C6.3999 5.15818 6.75808 4.8 7.1999 4.8H8.7999C9.24174 4.8 9.5999 5.15818 9.5999 5.6V12.8C9.5999 13.2418 9.24174 13.6 8.7999 13.6H7.1999C6.75808 13.6 6.3999 13.2418 6.3999 12.8V5.6Z" />
                                    <path
                                        d="M11.2 3.19999C11.2 2.75817 11.5581 2.39999 12 2.39999H13.6C14.0418 2.39999 14.4 2.75817 14.4 3.19999V12.8C14.4 13.2418 14.0418 13.6 13.6 13.6H12C11.5581 13.6 11.2 13.2418 11.2 12.8V3.19999Z" />
                                </svg>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="w-100">
                                        <p class="text-sm text-secondary mb-1">Avg. Transaction</p>
                                        <h4 class="mb-2 font-weight-bold">$450.53</h4>
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-success font-weight-semibold px-2">
                                                <i class="fa fa-chevron-up text-xs me-1"></i>22%
                                            </span>
                                            <span class="text-sm ms-3">from $369.30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-body text-start p-3 w-100">
                            <div
                                class="icon icon-shape icon-sm bg-dark text-white text-center border-radius-sm d-flex align-items-center justify-content-center mb-3">
                                <svg width="17" height="16" viewBox="0 0 17 16" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M14.6658 7.43432C14.9782 7.74674 14.9782 8.25329 14.6658 8.56569L9.06578 14.1657C8.75338 14.4781 8.24683 14.4781 7.93441 14.1657L2.33441 8.56569C2.17818 8.40945 2.10007 8.20465 2.1001 7.99991V4.00001C2.1001 2.67453 3.17462 1.60001 4.5001 1.60001H8.50034C8.70498 1.60006 8.90962 1.67817 9.06578 1.83432L14.6658 7.43432ZM4.5001 4.80001C4.94192 4.80001 5.3001 4.44183 5.3001 4.00001C5.3001 3.55818 4.94192 3.20001 4.5001 3.20001C4.05827 3.20001 3.7001 3.55818 3.7001 4.00001C3.7001 4.44183 4.05827 4.80001 4.5001 4.80001Z" />
                                </svg>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="w-100">
                                        <p class="text-sm text-secondary mb-1">Coupon Sales</p>
                                        <h4 class="mb-2 font-weight-bold">$23,364.55</h4>
                                        <div class="d-flex align-items-center">
                                            <span class="text-sm text-success font-weight-semibold px-2">
                                                <i class="fa fa-chevron-up text-xs me-1"></i>18%
                                            </span>
                                            <span class="text-sm ms-3">from $19,800.40</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="border shadow-xs card">
                        <div class="pb-0 card-header border-0">
                            <div class="mb-3 d-sm-flex align-items-center">
                                <div>
                                    <h6 class="mb-0 text-lg font-weight-semibold">Overview balance</h6>
                                    <p class="mb-2 text-sm mb-sm-0">Here you have details about the balance.</p>
                                </div>
                                <div class="ms-auto d-flex">
                                    <button type="button" class="mb-0 btn btn-sm btn-white me-2">
                                        View report
                                    </button>
                                </div>
                            </div>
                            <div class="d-sm-flex align-items-center">
                                <h3 class="mb-0 font-weight-semibold">$87,982.80</h3>
                                <span
                                    class="px-2 border badge badge-sm border-success text-success bg-success border-radius-sm ms-sm-3">
                                    <svg width="9" height="9" viewBox="0 0 10 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M0.46967 4.46967C0.176777 4.76256 0.176777 5.23744 0.46967 5.53033C0.762563 5.82322 1.23744 5.82322 1.53033 5.53033L0.46967 4.46967ZM5.53033 1.53033C5.82322 1.23744 5.82322 0.762563 5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967L5.53033 1.53033ZM5.53033 0.46967C5.23744 0.176777 4.76256 0.176777 4.46967 0.46967C4.17678 0.762563 4.17678 1.23744 4.46967 1.53033L5.53033 0.46967ZM8.46967 5.53033C8.76256 5.82322 9.23744 5.82322 9.53033 5.53033C9.82322 5.23744 9.82322 4.76256 9.53033 4.46967L8.46967 5.53033ZM1.53033 5.53033L5.53033 1.53033L4.46967 0.46967L0.46967 4.46967L1.53033 5.53033ZM4.46967 1.53033L8.46967 5.53033L9.53033 4.46967L5.53033 0.46967L4.46967 1.53033Z"
                                            fill="#67C23A"></path>
                                    </svg>
                                    10.5%
                                </span>
                            </div>
                        </div>
                        <div class="p-3 card-body">
                            <div class="chart">
                                <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>
</x-app-layout>
@push('scripts')
    <script>
        if (document.getElementsByClassName('mySwiper')) {
            var swiper = new Swiper(".mySwiper", {
                effect: "cards",
                grabCursor: true,
                initialSlide: 1,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        };

        var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
            type: "bar",
            data: {
                labels: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"],
                datasets: [{
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderSkipped: false,
                        backgroundColor: "#55A6F8",
                        data: [450, 200, 100, 220, 500, 100, 400, 230, 500, 200],
                        maxBarThickness: 6
                    },
                    {
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderSkipped: false,
                        backgroundColor: "#774DD3",
                        data: [200, 300, 200, 420, 400, 200, 300, 430, 400, 300],
                        maxBarThickness: 6
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: '#fff',
                        titleColor: '#1e293b',
                        bodyColor: '#1e293b',
                        borderColor: '#e9ecef',
                        borderWidth: 1,
                        usePointStyle: true
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        stacked: true,
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [4, 4],
                        },
                        ticks: {
                            beginAtZero: true,
                            padding: 10,
                            font: {
                                size: 12,
                                family: "Noto Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#64748B"
                        },
                    },
                    x: {
                        stacked: true,
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false
                        },
                        ticks: {
                            font: {
                                size: 12,
                                family: "Noto Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                            color: "#64748B"
                        },
                    },
                },
            },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx2.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(85, 166, 248, 0.1)');
        gradientStroke1.addColorStop(0, 'rgba(21, 137, 255, 0.0001)');

        var gradientStroke2 = ctx2.createLinearGradient(0, 230, 0, 50);
        gradientStroke2.addColorStop(1, 'rgba(22, 93, 255, 0.2)');
        gradientStroke2.addColorStop(0, 'rgba(22, 93, 255, 0.0001)');

        new Chart(ctx2, {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                        label: "Organic Search",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#55A6F8",
                        borderColor: "#55A6F8",
                        borderWidth: 3,
                        backgroundColor: gradientStroke1,
                        fill: true,
                        data: [340, 550, 350, 750, 650, 250, 500, 150, 600, 550, 400, 950],
                        maxBarThickness: 6
                    },
                    {
                        label: "Referral",
                        tension: 0.4,
                        borderWidth: 0,
                        pointRadius: 2,
                        pointBackgroundColor: "#774DD3",
                        borderColor: "#774DD3",
                        borderWidth: 3,
                        backgroundColor: gradientStroke2,
                        fill: true,
                        data: [100, 500, 200, 550, 250, 500, 250, 750, 400, 650, 250, 750],
                        maxBarThickness: 6
                    }
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        align: 'end',
                        labels: {
                            boxWidth: 6,
                            boxHeight: 6,
                            padding: 20,
                            pointStyle: 'circle',
                            borderRadius: 50,
                            usePointStyle: true,
                            font: {
                                weight: 600,
                            },
                        },
                        tooltip: {
                            backgroundColor: '#fff',
                            titleColor: '#1e293b',
                            bodyColor: '#1e293b',
                            borderColor: '#e9ecef',
                            borderWidth: 1,
                            pointRadius: 2,
                            usePointStyle: true,
                            boxWidth: 8,
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: true,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#9ca2b7'
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: true,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10
                        }
                    },
                },
            },
        });

        // new Chart(ctx2, {
        //   plugins: [{
        //     beforeInit(chart) {
        //       const originalFit = chart.legend.fit;
        //       chart.legend.fit = function fit() {
        //         originalFit.bind(chart.legend)();
        //         this.height += 40;
        //       }
        //     },
        //   }],
        //   type: "line",
        //   data: {
        //     labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"],
        //     datasets: [{
        //         label: "Volume",
        //         tension: 0,
        //         borderWidth: 2,
        //         pointRadius: 3,
        //         borderColor: "#2ca8ff",
        //         pointBorderColor: '#2ca8ff',
        //         pointBackgroundColor: '#2ca8ff',
        //         backgroundColor: gradientStroke1,
        //         fill: true,
        //         data: [2828, 1291, 3360, 3223, 1630, 980, 2059, 3092, 1831, 1842, 1902, 1478, 1123, 2444, 2636, 2593, 2885, 1764, 898, 1356, 2573, 3382, 2858, 4228],
        //         maxBarThickness: 6

        //       },
        //       {
        //         label: "Trade",
        //         tension: 0,
        //         borderWidth: 2,
        //         pointRadius: 3,
        //         borderColor: "#832bf9",
        //         pointBorderColor: '#832bf9',
        //         pointBackgroundColor: '#832bf9',
        //         backgroundColor: gradientStroke2,
        //         fill: true,
        //         data: [2797, 2182, 1069, 2098, 3309, 3881, 2059, 3239, 6215, 2185, 2115, 5430, 4648, 2444, 2161, 3018, 1153, 1068, 2192, 1152, 2129, 1396, 2067, 1215, 712, 2462, 1669, 2360, 2787, 861],
        //         maxBarThickness: 6
        //       },
        //     ],
        //   },
        //   options: {
        //     responsive: true,
        //     maintainAspectRatio: false,
        //     plugins: {
        //       legend: {
        //         display: true,
        //         position: 'top',
        //         align: 'end',
        //         labels: {
        //           boxWidth: 6,
        //           boxHeight: 6,
        //           padding: 20,
        //           pointStyle: 'circle',
        //           borderRadius: 50,
        //           usePointStyle: true,
        //           font: {
        //             weight: 400,
        //           },
        //         },
        //       },
        //       tooltip: {
        //         backgroundColor: '#fff',
        //         titleColor: '#1e293b',
        //         bodyColor: '#1e293b',
        //         borderColor: '#e9ecef',
        //         borderWidth: 1,
        //         pointRadius: 2,
        //         usePointStyle: true,
        //         boxWidth: 8,
        //       }
        //     },
        //     interaction: {
        //       intersect: false,
        //       mode: 'index',
        //     },
        //     scales: {
        //       y: {
        //         grid: {
        //           drawBorder: false,
        //           display: true,
        //           drawOnChartArea: true,
        //           drawTicks: false,
        //           borderDash: [4, 4]
        //         },
        //         ticks: {
        //           callback: function (value, index, ticks) {
        //             return parseInt(value).toLocaleString() ;
        //           },
        //           display: true,
        //           padding: 10,
        //           color: '#b2b9bf',
        //           font: {
        //             size: 12,
        //             family: "Noto Sans",
        //             style: 'normal',
        //             lineHeight: 2
        //           },
        //           color: "#64748B"
        //         }
        //       },
        //       x: {
        //         grid: {
        //           drawBorder: false,
        //           display: false,
        //           drawOnChartArea: false,
        //           drawTicks: false,
        //           borderDash: [4, 4]
        //         },
        //         ticks: {
        //           display: true,
        //           color: '#b2b9bf',
        //           padding: 20,
        //           font: {
        //             size: 12,
        //             family: "Noto Sans",
        //             style: 'normal',
        //             lineHeight: 2
        //           },
        //           color: "#64748B"
        //         }
        //       },
        //     },
        //   },
        // });


        // new Chart(ctx2, {
        //   type: "line",
        //   data: {
        //     labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        //     datasets: [
        //       {
        //         label: "eGold",
        //         tension: 0.4,
        //         borderWidth: 0,
        //         pointRadius: 0,
        //         borderColor: "#3A416F",
        //         borderWidth: 3,
        //         backgroundColor: gradientStroke2,
        //         fill: true,
        //         data: [30, 90, 40, 140, 290, 290, 340, 230, 400],
        //         maxBarThickness: 6
        //       },
        //     ],
        //   },
        //   options: {
        //     responsive: true,
        //     maintainAspectRatio: false,
        //     plugins: {
        //       legend: {
        //         display: false,
        //       }
        //     },
        //     interaction: {
        //       intersect: false,
        //       mode: 'index',
        //     },
        //     scales: {
        //       y: {
        //           grid: {
        //           drawBorder: false,
        //           display: true,
        //           drawOnChartArea: true,
        //           drawTicks: false,
        //           borderDash: [5, 5]
        //         },
        //         ticks: {
        //           display: true,
        //           padding: 10,
        //           color: '#b2b9bf',
        //           font: {
        //             size: 11,
        //             family: "Open Sans",
        //             style: 'normal',
        //             lineHeight: 2
        //           },
        //         }
        //       },
        //       x: {
        //           grid: {
        //           drawBorder: false,
        //           display: false,
        //           drawOnChartArea: false,
        //           drawTicks: false,
        //           borderDash: [5, 5]
        //         },
        //         ticks: {
        //           display: true,
        //           color: '#b2b9bf',
        //           padding: 20,
        //           font: {
        //             size: 11,
        //             family: "Open Sans",
        //             style: 'normal',
        //             lineHeight: 2
        //           },
        //         }
        //       },
        //     },
        //   },
        // });
    </script>
@endpush

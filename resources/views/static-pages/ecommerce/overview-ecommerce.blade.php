<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-6 row">
                <div class="col-sm-4">
                    <div class="card blur">
                        <div class="p-3 card-body position-relative">
                            <div class="row">
                                <div class="col-7 text-start">
                                    <p class="text-sm text-capitalize font-weight-bold">Sales</p>
                                    <h5 class="font-weight-bolder">
                                        $230,220
                                    </h5>
                                    <span class="mt-auto mb-0 text-sm text-end text-success font-weight-bolder">+55%
                                        <span class="ms-2 font-weight-normal text-secondary">since last
                                            month</span></span>
                                </div>
                                <div class="col-5">
                                    <div class="dropdown text-end">
                                        <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers1"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="text-xs text-secondary">6 May - 7 May</span>
                                        </a>
                                        <ul class="px-2 py-3 dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownUsers1">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7
                                                    days</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last
                                                    week</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30
                                                    days</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-sm-4 mt-sm-0">
                    <div class="card blur">
                        <div class="p-3 card-body position-relative">
                            <div class="row">
                                <div class="col-7 text-start">
                                    <p class="text-sm text-capitalize font-weight-bold">Today's Money</p>
                                    <h5 class="font-weight-bolder">
                                        3.200
                                    </h5>
                                    <span class="mt-auto mb-0 text-sm text-end text-success font-weight-bolder">+12%
                                        <span class="ms-2 font-weight-normal text-secondary">since last
                                            month</span></span>
                                </div>
                                <div class="col-5">
                                    <div class="dropdown text-end">
                                        <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers2"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="text-xs text-secondary">6 May - 7 May</span>
                                        </a>
                                        <ul class="px-2 py-3 dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownUsers2">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7
                                                    days</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last
                                                    week</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30
                                                    days</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-sm-4 mt-sm-0">
                    <div class="card blur">
                        <div class="p-3 card-body position-relative">
                            <div class="row">
                                <div class="col-7 text-start">
                                    <p class="text-sm text-capitalize font-weight-bold">Average Revenue</p>
                                    <h5 class="font-weight-bolder">
                                        $1.200
                                    </h5>
                                    <span class="text-sm font-weight-normal text-secondary"><span
                                            class="font-weight-bolder text-success me-2">+$213</span> since last
                                        month</span>
                                </div>
                                <div class="col-5">
                                    <div class="dropdown text-end">
                                        <a href="javascript:;" class="cursor-pointer text-secondary" id="dropdownUsers3"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="text-xs text-secondary">6 May - 7 May</span>
                                        </a>
                                        <ul class="px-2 py-3 dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownUsers3">
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 7
                                                    days</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last
                                                    week</a></li>
                                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Last 30
                                                    days</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-lg-5 col-sm-6">
                    <div class="card h-100">
                        <div class="p-3 pb-0 card-header">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0">Referrals</h6>
                                <button type="button"
                                    class="mb-0 btn btn-icon-only btn-rounded btn-white ms-2 btn-sm d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                    data-bs-original-title="See traffic channels">
                                    <i class="fas fa-info" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-3 pb-0 mt-4 card-body">
                            <div class="row">
                                <div class="col-7 text-start">
                                    <div class="chart">
                                        <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                                    </div>
                                </div>
                                <div class="my-auto col-5">
                                    <span class="badge badge-md badge-dot me-4 d-block text-start">
                                        <i class="bg-info"></i>
                                        <span class="text-xs text-dark">Facebook Ads</span>
                                    </span>
                                    <span class="badge badge-md badge-dot me-4 d-block text-start">
                                        <i class="bg-primary"></i>
                                        <span class="text-xs text-dark">Google Ads</span>
                                    </span>
                                    <span class="badge badge-md badge-dot me-4 d-block text-start">
                                        <i class="bg-dark"></i>
                                        <span class="text-xs text-dark">Instagram Ads</span>
                                    </span>
                                    <span class="badge badge-md badge-dot me-4 d-block text-start">
                                        <i class="bg-secondary"></i>
                                        <span class="text-xs text-dark">Organic</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="p-3 pt-0 pb-0 card-footer d-flex align-items-center">
                            <div class="w-60">
                                <p class="text-sm">
                                    More than <b>1,200,000</b> sales are made using referral marketing, and
                                    <b>700,000</b> are from social media.
                                </p>
                            </div>
                            <div class="w-40 text-end">
                                <a class="mb-0 btn btn-dark text-end" href="javascript:;">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-lg-7 col-sm-6 mt-sm-0">
                    <div class="card">
                        <div class="p-3 pb-0 card-header">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0">Revenue</h6>
                                <button type="button"
                                    class="mb-0 btn btn-icon-only btn-rounded btn-white ms-2 btn-sm d-flex align-items-center justify-content-center"
                                    data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                    data-bs-original-title="See which ads perform better">
                                    <i class="fas fa-info" aria-hidden="true"></i>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="badge badge-md badge-dot me-4">
                                    <i class="bg-primary"></i>
                                    <span class="text-xs text-dark">Facebook Ads</span>
                                </span>
                                <span class="badge badge-md badge-dot me-4">
                                    <i class="bg-dark"></i>
                                    <span class="text-xs text-dark">Google Ads</span>
                                </span>
                                <span class="badge badge-md badge-dot me-4">
                                    <i class="bg-info"></i>
                                    <span class="text-xs text-dark">Instagram Ads</span>
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
            <div class="mt-4 row">
                <div class="col-lg-6">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0">Sales by Age</h6>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="chart-bar" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-lg-6 mt-lg-0">
                    <div class="card">
                        <div class="card-header pb-0 p-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="mb-0">Sales by Country</h6>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group list-group-flush list my--3">
                                <li class="list-group-item px-0 border-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Country flag -->
                                            <img src="../../assets/img/icons/flags/US.png" alt="Country flag">
                                        </div>
                                        <div class="col">
                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                            <h6 class="text-sm mb-0">United States</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                            <h6 class="text-sm mb-0">2500</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                            <h6 class="text-sm mb-0">29.9%</h6>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-1">
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Country flag -->
                                            <img src="../../assets/img/icons/flags/DE.png" alt="Country flag">
                                        </div>
                                        <div class="col">
                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                            <h6 class="text-sm mb-0">Germany</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                            <h6 class="text-sm mb-0">3.900</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                            <h6 class="text-sm mb-0">40.22%</h6>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-1">
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Country flag -->
                                            <img src="../../assets/img/icons/flags/GB.png" alt="Country flag">
                                        </div>
                                        <div class="col">
                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                            <h6 class="text-sm mb-0">Great Britain</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                            <h6 class="text-sm mb-0">1.400</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                            <h6 class="text-sm mb-0">23.44%</h6>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-1">
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Country flag -->
                                            <img src="../../assets/img/icons/flags/BR.png" alt="Country flag">
                                        </div>
                                        <div class="col">
                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                            <h6 class="text-sm mb-0">Brasil</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                            <h6 class="text-sm mb-0">562</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                            <h6 class="text-sm mb-0">32.14%</h6>
                                        </div>
                                    </div>
                                    <hr class="horizontal dark mt-3 mb-1">
                                </li>
                                <li class="list-group-item px-0 border-0">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <!-- Country flag -->
                                            <img src="../../assets/img/icons/flags/AU.png" alt="Country flag">
                                        </div>
                                        <div class="col">
                                            <p class="text-xs font-weight-bold mb-0">Country:</p>
                                            <h6 class="text-sm mb-0">Australia</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Sales:</p>
                                            <h6 class="text-sm mb-0">400</h6>
                                        </div>
                                        <div class="col text-center">
                                            <p class="text-xs font-weight-bold mb-0">Bounce:</p>
                                            <h6 class="text-sm mb-0">56.83%</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="mb-4 card">
                        <div class="pb-0 card-header">
                            <h6>Top Selling Products</h6>
                        </div>
                        <div class="px-0 pt-0 pb-2 card-body">
                            <div class="p-0 table-responsive">
                                <table class="table mb-0 align-items-center">
                                    <thead>
                                        <tr>
                                            <th
                                                class="border-top-0 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Product</th>
                                            <th
                                                class="border-top-0 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                Value</th>
                                            <th
                                                class="text-center border-top-0 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Ads Spent</th>
                                            <th
                                                class="text-center border-top-0 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Refunds</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="px-3 py-1 d-flex">
                                                    <div>
                                                        <img src="../../assets/img/nora-topicals-ErNCyAsDgfg-unsplash.jpg"
                                                            class="avatar me-3" alt="image">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Beauty Oil</h6>
                                                        <p class="mb-0 text-sm font-weight-bold text-secondary"><span
                                                                class="text-success">8.232</span> orders</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-bold">$130.992</p>
                                            </td>
                                            <td class="text-sm text-center align-middle">
                                                <p class="mb-0 text-sm font-weight-bold">$9.500</p>
                                            </td>
                                            <td class="align-middle text-end">
                                                <div
                                                    class="px-3 py-1 d-flex justify-content-center align-items-center">
                                                    <p class="mb-0 text-sm font-weight-bold">13</p>
                                                    <i class="mt-1 text-sm ni ni-bold-down ms-1 text-danger"></i>
                                                    <button type="button"
                                                        class="mb-0 btn btn-sm btn-icon-only btn-rounded btn-white ms-2 d-flex align-items-center justify-content-center ms-3"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title=""
                                                        data-bs-original-title="Refund rate is lower with 97% than other products">
                                                        <i class="fas fa-info" aria-hidden="true"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-3 py-1 d-flex">
                                                    <div>
                                                        <img src="../../assets/img/kadarius-seegars-4XA5kdch2pk-unsplash.jpg"
                                                            class="avatar me-3" alt="image">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Lavender Oil</h6>
                                                        <p class="mb-0 text-sm font-weight-bold text-secondary"><span
                                                                class="text-success">12.821</span> orders</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-bold">$80.250</p>
                                            </td>
                                            <td class="text-sm text-center align-middle">
                                                <p class="mb-0 text-sm font-weight-bold">$4.200</p>
                                            </td>
                                            <td class="align-middle text-end">
                                                <div
                                                    class="px-3 py-1 d-flex justify-content-center align-items-center">
                                                    <p class="mb-0 text-sm font-weight-bold">40</p>
                                                    <i class="mt-1 text-sm ni ni-bold-up ms-1 text-success"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-3 py-1 d-flex">
                                                    <div>
                                                        <img src="../../assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg"
                                                            class="avatar me-3" alt="image">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Yellow Chair</h6>
                                                        <p class="mb-0 text-sm font-weight-bold text-secondary"><span
                                                                class="text-success">2.421</span> orders</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-bold">$40.600</p>
                                            </td>
                                            <td class="text-sm text-center align-middle">
                                                <p class="mb-0 text-sm font-weight-bold">$9.430</p>
                                            </td>
                                            <td class="align-middle text-end">
                                                <div
                                                    class="px-3 py-1 d-flex justify-content-center align-items-center">
                                                    <p class="mb-0 text-sm font-weight-bold">54</p>
                                                    <i class="mt-1 text-sm ni ni-bold-up ms-1 text-danger"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-3 py-1 d-flex">
                                                    <div>
                                                        <img src="../../assets/img/spacejoy-NpF_OYE301E-unsplash.jpg"
                                                            class="avatar me-3" alt="image">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Gray Sofa</h6>
                                                        <p class="mb-0 text-sm font-weight-bold text-secondary"><span
                                                                class="text-success">5.921</span> orders</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-bold">$91.300</p>
                                            </td>
                                            <td class="text-sm text-center align-middle">
                                                <p class="mb-0 text-sm font-weight-bold">$7.364</p>
                                            </td>
                                            <td class="align-middle text-end">
                                                <div
                                                    class="px-3 py-1 d-flex justify-content-center align-items-center">
                                                    <p class="mb-0 text-sm font-weight-bold">5</p>
                                                    <i class="mt-1 text-sm ni ni-bold-down ms-1 text-danger"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="px-3 py-1 d-flex">
                                                    <div>
                                                        <img src="../../assets/img/michael-oxendine-GHCVUtBECuY-unsplash.jpg"
                                                            class="avatar me-3" alt="image">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">Brown Sofa</h6>
                                                        <p class="mb-0 text-sm font-weight-bold text-secondary"><span
                                                                class="text-success">921</span> orders</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-sm font-weight-bold">$140.925</p>
                                            </td>
                                            <td class="text-sm text-center align-middle">
                                                <p class="mb-0 text-sm font-weight-bold">$20.531</p>
                                            </td>
                                            <td class="align-middle text-end">
                                                <div
                                                    class="px-3 py-1 d-flex justify-content-center align-items-center">
                                                    <p class="mb-0 text-sm font-weight-bold">121</p>
                                                    <i class="mt-1 text-sm ni ni-bold-up ms-1 text-success"></i>
                                                    <button type="button"
                                                        class="mb-0 btn btn-sm btn-icon-only btn-rounded btn-white ms-2 d-flex align-items-center justify-content-center ms-3"
                                                        data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                        title=""
                                                        data-bs-original-title="Refund rate is higher with 70% than other products">
                                                        <i class="fas fa-info" aria-hidden="true"></i>
                                                    </button>
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
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");
    var ctx2 = document.getElementById("chart-pie").getContext("2d");
    var ctx3 = document.getElementById("chart-bar").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

    var gradientStroke2 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke2.addColorStop(1, 'rgba(20,23,39,0.2)');
    gradientStroke2.addColorStop(0.2, 'rgba(72,72,176,0.0)');
    gradientStroke2.addColorStop(0, 'rgba(20,23,39,0)'); //purple colors

    // Line chart
    new Chart(ctx1, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
                    label: "Facebook Ads",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#774DD3",
                    borderColor: "#774DD3",
                    borderWidth: 3,
                    backgroundColor: gradientStroke1,
                    fill: false,
                    data: [50, 250, 650, 490, 950, 550, 800, 450, 900],
                    maxBarThickness: 6
                },
                {
                    label: "Google Ads",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#1E293B",
                    borderColor: "#1E293B",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: false,
                    data: [10, 300, 40, 420, 250, 620, 580, 850, 480],
                    maxBarThickness: 6
                },
                {
                    label: "Instagram Ads",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 2,
                    pointBackgroundColor: "#55A6F8",
                    borderColor: "#55A6F8",
                    borderWidth: 3,
                    backgroundColor: gradientStroke2,
                    fill: false,
                    data: [60, 170, 140, 220, 150, 320, 480, 250, 380],
                    maxBarThickness: 6
                }
            ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
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


    // Pie chart
    new Chart(ctx2, {
        type: "pie",
        data: {
            labels: ['Facebook', 'Direct', 'Organic', 'Referral'],
            datasets: [{
                label: "Projects",
                weight: 9,
                cutout: 0,
                tension: 0.9,
                pointRadius: 2,
                borderWidth: 2,
                backgroundColor: ['#17c1e8', '#774DD3', '#1E293B', '#a8b8d8'],
                data: [15, 20, 12, 60],
                fill: false
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            interaction: {
                intersect: false,
                mode: 'index',
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false
                    }
                },
                x: {
                    grid: {
                        drawBorder: false,
                        display: false,
                        drawOnChartArea: false,
                        drawTicks: false,
                    },
                    ticks: {
                        display: false,
                    }
                },
            },
        },
    });

    // Bar chart
    new Chart(ctx3, {
        type: "bar",
        data: {
            labels: ['16-20', '21-25', '26-30', '31-36', '36-42', '42+'],
            datasets: [{
                label: "Sales by age",
                weight: 5,
                borderWidth: 0,
                borderRadius: 4,
                backgroundColor: '#1E293B',
                data: [15, 20, 12, 60, 20, 15],
                fill: false
            }],
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false,
                }
            },
            scales: {
                y: {
                    grid: {
                        drawBorder: false,
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
                        display: false,
                        drawOnChartArea: true,
                        drawTicks: true,
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

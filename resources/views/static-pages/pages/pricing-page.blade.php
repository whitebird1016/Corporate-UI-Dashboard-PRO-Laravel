<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <div class="top-0 overflow-visible bg-cover page-header w-100 start-0 position-relative"
        style="background-image: url('../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        <span class="mask bg-gradient-dark opacity-3"></span>
        <div class="container mt-8 postion-relative z-index-2">
            <div class="row">
                <div class="mx-auto text-center col-md-6">
                    <h5 class="text-white font-weight-black">Pricing</h5>
                    <h2 class="text-white">Choose Your Favorite Plan</h2>
                    <p class="text-lg text-white">Buy once and get lifetime access for each plan mentioned below.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="mx-auto text-center px-5 col-lg-4 col-md-6 col-7">
                    <div class="nav-wrapper top-50 position-relative end-0">
                        <ul class="nav nav-pills nav-pills-lg nav-fill blur" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 active" data-bs-toggle="tab" href="#monthly" role="tab"
                                    aria-controls="monthly" aria-selected="true">
                                    Monthly Billing
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0" data-bs-toggle="tab" href="#yearly" role="tab"
                                    aria-controls="yearly" aria-selected="false">
                                    Yearly Billing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-8">
        <div class="container">
            <div class="tab-content tab-space">
                <div class="tab-pane active" id="monthly">
                    <div class="justify-content-center align-items-lg-start align-items-center row">
                        <div class="mb-4 col-10 col-md-8 col-lg-4 mb-lg-0">
                            <div class="card">
                                <div class="pt-4 pb-3 card-header ">
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <h1 class="font-weight-bold">
                                            $9<small class="text-lg">/month</small>
                                        </h1>
                                        <div class="text-center shadow icon icon-shape bg-dark">
                                            <i class="fas fa-user opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 card-body text-start">
                                    <h4 class="text-dark font-weight-bold">Starter</h4>
                                    <p class="font-weight-semibold">Everything you need to get you started</p>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>100,000</b> Datapoints/month</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>1</b> User</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>10</b> Websites</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Events and campaigns</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Aggregated export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center border shadow icon icon-shape icon-xs rounded-circle border-secondary">
                                            <i class="text-secondary fas fa-minus"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Complete Documentation</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="javascript:;" class="mb-0 btn btn-icon btn-dark d-lg-block">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-10 col-md-8 col-lg-4 mb-lg-0">
                            <div class="card h-100">
                                <div class="pt-4 pb-3 card-header ">
                                    <div class="w-100 position-absolute mt-n5 ms-n4 d-flex justify-content-center">
                                        <span
                                            class="mt-2 text-base bg-cover shadow-lg border-radius-xl font-weight-bolder badge"
                                            style="background-image: url('../../assets/img/pricing-badge.png'); background-position: bottom;">
                                            <h5 class="mb-0 text-base text-white font-weight-bolder">Most Popular</h5>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <h1 class="font-weight-bold">
                                            $49<small class="text-lg">/month</small>
                                        </h1>
                                        <div class="text-center shadow icon icon-shape bg-dark">
                                            <i class="fas fa-user-group opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 card-body text-start">
                                    <h4 class="text-dark font-weight-bold">Business</h4>
                                    <p class="font-weight-semibold">Work together on growing your business</p>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>1,000,000</b> Datapoints/month</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>10</b> User</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>100</b> Websites</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Events and campaigns</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Aggregated export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Raw level export</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="javascript:;" class="mb-0 btn btn-icon btn-dark d-lg-block">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-10 col-md-8 col-lg-4 mb-lg-0">
                            <div class="card h-100">
                                <div class="pt-4 pb-3 card-header ">
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <h1 class="font-weight-bold">
                                            $89<small class="text-lg">/month</small>
                                        </h1>
                                        <div class="text-center shadow icon icon-shape bg-dark">
                                            <i class="fas fa-briefcase opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 card-body text-start">
                                    <h4 class="text-dark font-weight-bold">Company</h4>
                                    <p class="font-weight-semibold">Get everything needed to grow your business</p>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>1,000,000+</b> Datapoints/month</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>10+</b> User</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>100+</b> Websites</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Events and campaigns</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Aggregated export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Raw level export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Priority support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="javascript:;" class="mb-0 btn btn-icon btn-dark d-lg-block">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="yearly">
                    <div class="justify-content-center align-items-lg-start align-items-center row">
                        <div class="mb-4 col-10 col-md-8 col-lg-4 mb-lg-0">
                            <div class="card h-100">
                                <div class="pt-4 pb-3 card-header ">
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <h1 class="font-weight-bold">
                                            $5<small class="text-lg">/month</small>
                                        </h1>
                                        <div class="text-center shadow icon icon-shape bg-dark">
                                            <i class="fas fa-user opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 card-body text-start">
                                    <h4 class="text-dark font-weight-bold">Starter</h4>
                                    <p class="font-weight-semibold">Everything you need to get you started</p>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>100,000</b> Datapoints/month</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>1</b> User</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>10</b> Websites</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Events and campaigns</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Aggregated export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center border shadow icon icon-shape icon-xs rounded-circle border-secondary">
                                            <i class="text-secondary fas fa-minus"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Complete Documentation</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="javascript:;" class="mb-0 btn btn-icon btn-dark d-lg-block">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-10 col-md-8 col-lg-4 mb-lg-0">
                            <div class="card h-100">
                                <div class="pt-4 pb-3 card-header ">
                                    <div class="w-100 position-absolute mt-n5 ms-n4 d-flex justify-content-center">
                                        <span
                                            class="mt-2 text-base bg-cover shadow-lg border-radius-xl font-weight-bolder badge"
                                            style="background-image: url('../../assets/img/pricing-badge.png'); background-position: bottom;">
                                            <h5 class="mb-0 text-base text-white font-weight-bolder">Most Popular</h5>
                                        </span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <h1 class="font-weight-bold">
                                            $39<small class="text-lg">/month</small>
                                        </h1>
                                        <div class="text-center shadow icon icon-shape bg-dark">
                                            <i class="fas fa-user-group opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 card-body text-start">
                                    <h4 class="text-dark font-weight-bold">Business</h4>
                                    <p class="font-weight-semibold">Work together on growing your business</p>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>1,000,000</b> Datapoints/month</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>10</b> User</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>100</b> Websites</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Events and campaigns</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Aggregated export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Raw level export</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="javascript:;" class="mb-0 btn btn-icon btn-dark d-lg-block">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-10 col-md-8 col-lg-4 mb-lg-0">
                            <div class="card h-100">
                                <div class="pt-4 pb-3 card-header ">
                                    <div class="d-flex justify-content-between align-items-center flex-nowrap">
                                        <h1 class="font-weight-bold">
                                            $59<small class="text-lg">/month</small>
                                        </h1>
                                        <div class="text-center shadow icon icon-shape bg-dark">
                                            <i class="fas fa-briefcase opacity-10"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-0 card-body text-start">
                                    <h4 class="text-dark font-weight-bold">Company</h4>
                                    <p class="font-weight-semibold">Get everything needed to grow your business</p>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>1,000,000+</b> Datapoints/month</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>10+</b> User</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3"><b>100+</b> Websites</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Events and campaigns</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Aggregated export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Raw level export</span>
                                        </div>
                                    </div>
                                    <div class="p-2 d-flex justify-content-start">
                                        <div
                                            class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                            <i class="fas fa-check opacity-10"></i>
                                        </div>
                                        <div>
                                            <span class="ps-3">Priority support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-center">
                                    <a href="javascript:;" class="mb-0 btn btn-icon btn-dark d-lg-block">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-6">
        <div class="row">
            <div class="table">
                <table class="table border-0 table-responsive">
                    <thead>
                        <tr>
                            <th class="border-0 text-dark">Features</th>
                            <th class="text-center border-0 text-dark">Starter</th>
                            <th class="text-center border-0 text-dark">Business</th>
                            <th class="text-center border-0 text-dark">Company</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-0 bg-light bg-opacity-3">
                            <td class="border-0">Documentation</td>
                            <td class="text-center border-0">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                            <td class="text-center border-0">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                            <td class="text-center border-0">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>CSM integration</td>
                            <td class="text-center">
                                <div
                                    class="text-center border shadow icon icon-shape icon-xs rounded-circle border-secondary">
                                    <i class="text-secondary fas fa-minus"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-light bg-opacity-3">
                            <td>Advanced Analytics</td>
                            <td class="text-center">
                                <div
                                    class="text-center border shadow icon icon-shape icon-xs rounded-circle border-secondary">
                                    <i class="text-secondary fas fa-minus"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>CSM integration</td>
                            <td class="text-center">
                                <div
                                    class="text-center border shadow icon icon-shape icon-xs rounded-circle border-secondary">
                                    <i class="text-secondary fas fa-minus"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                        </tr>
                        <tr class="bg-light bg-opacity-3">
                            <td>Advanced Analytics</td>
                            <td class="text-center">
                                <div
                                    class="text-center border shadow icon icon-shape icon-xs rounded-circle border-secondary">
                                    <i class="text-secondary fas fa-minus"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="text-center shadow icon icon-shape icon-xs rounded-circle bg-primary">
                                    <i class="fas fa-check opacity-10"></i>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mt-6 row">
            <div class="mx-auto text-center col-8">
                <h6 class="opacity-5"> More than 50+ brands trust Soft</h6>
            </div>
        </div>
        <div class="mt-4 row">
            <div class="mb-4 col-lg-2 col-md-4 col-6">
                <img class="w-100 opacity-9" src="../../assets/img/logos/gray-logos/logo-coinbase.svg"
                    alt="logo_coinbase">
            </div>
            <div class="mb-4 col-lg-2 col-md-4 col-6">
                <img class="w-100 opacity-9" src="../../assets/img/logos/gray-logos/logo-nasa.svg" alt="logo_nasa">
            </div>
            <div class="mb-4 col-lg-2 col-md-4 col-6">
                <img class="w-100 opacity-9" src="../../assets/img/logos/gray-logos/logo-netflix.svg"
                    alt="logo_netflix">
            </div>
            <div class="mb-4 col-lg-2 col-md-4 col-6">
                <img class="w-100 opacity-9" src="../../assets/img/logos/gray-logos/logo-pinterest.svg"
                    alt="logo_pinterest">
            </div>
            <div class="mb-4 col-lg-2 col-md-4 col-6">
                <img class="w-100 opacity-9" src="../../assets/img/logos/gray-logos/logo-spotify.svg"
                    alt="logo_spotify">
            </div>
            <div class="mb-4 col-lg-2 col-md-4 col-6">
                <img class="w-100 opacity-9" src="../../assets/img/logos/gray-logos/logo-vodafone.svg"
                    alt="logo_vodafone">
            </div>
        </div>
        <div class="mt-8 row">
            <div class="mx-auto text-center col-md-6">
                <h2>Frequently Asked Questions</h2>
                <p>A lot of people don&#39;t appreciate the moment until it’s passed. I&#39;m not trying my hardest, and
                    I&#39;m not trying to do </p>
            </div>
        </div>
        <div class="row">
            <div class="mx-auto col">
                <div class="accordion" id="accordionRental">
                    <div class="mb-3 accordion-item">
                        <h5 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-bottom font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                How do I order?
                                <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute end-0 me-3"></i>
                                <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionRental">
                            <div class="text-sm accordion-body text-dark opacity-8">
                                We’re not always in the position that we want to be at. We’re constantly growing. We’re
                                constantly making mistakes. We’re constantly trying to express ourselves and actualize
                                our dreams. If you have the opportunity to play this game
                                of life you need to appreciate every moment. A lot of people don’t appreciate the moment
                                until it’s passed.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 accordion-item">
                        <h5 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed border-bottom font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                How can i make the payment?
                                <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute end-0 me-3"></i>
                                <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionRental">
                            <div class="text-sm accordion-body text-dark opacity-8">
                                It really matters and then like it really doesn’t matter. What matters is the people who
                                are sparked by it. And the people who are like offended by it, it doesn’t matter.
                                Because it&#39;s about motivating the doers. Because I’m here to follow my dreams and
                                inspire other people to follow their dreams, too.
                                <br>
                                We’re not always in the position that we want to be at. We’re constantly growing. We’re
                                constantly making mistakes. We’re constantly trying to express ourselves and actualize
                                our dreams. If you have the opportunity to play this game of life you need to appreciate
                                every moment. A lot of people don’t appreciate the moment until it’s passed.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 accordion-item">
                        <h5 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed border-bottom font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                How much time does it take to receive the order?
                                <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute end-0 me-3"></i>
                                <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionRental">
                            <div class="text-sm accordion-body text-dark opacity-8">
                                The time is now for it to be okay to be great. People in this world shun people for
                                being great. For being a bright color. For standing out. But the time is now to be okay
                                to be the greatest you. Would you believe in what you believe in, if you were the only
                                one who believed it?
                                If everything I did failed - which it doesn&#39;t, it actually succeeds - just the fact
                                that I&#39;m willing to fail is an inspiration. People are so scared to lose that they
                                don&#39;t even try. Like, one thing people can&#39;t say is that I&#39;m not trying, and
                                I&#39;m not trying my hardest, and I&#39;m not trying to do the best way I know how.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 accordion-item">
                        <h5 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed border-bottom font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                Can I resell the products?
                                <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute end-0 me-3"></i>
                                <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionRental">
                            <div class="text-sm accordion-body text-dark opacity-8">
                                I always felt like I could do anything. That’s the main thing people are controlled by!
                                Thoughts- their perception of themselves! They&#39;re slowed down by their perception of
                                themselves. If you&#39;re taught you can’t do anything, you won’t do anything. I was
                                taught I could do everything.
                                <br><br>
                                If everything I did failed - which it doesn&#39;t, it actually succeeds - just the fact
                                that I&#39;m willing to fail is an inspiration. People are so scared to lose that they
                                don&#39;t even try. Like, one thing people can&#39;t say is that I&#39;m not trying, and
                                I&#39;m not trying my hardest, and I&#39;m not trying to do the best way I know how.
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 accordion-item">
                        <h5 class="accordion-header" id="headingFifth">
                            <button class="accordion-button collapsed border-bottom font-weight-bold" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFifth" aria-expanded="false"
                                aria-controls="collapseFifth">
                                Where do I find the shipping details?
                                <i class="pt-1 text-xs collapse-close fa fa-plus position-absolute end-0 me-3"></i>
                                <i class="pt-1 text-xs collapse-open fa fa-minus position-absolute end-0 me-3"></i>
                            </button>
                        </h5>
                        <div id="collapseFifth" class="accordion-collapse collapse" aria-labelledby="headingFifth"
                            data-bs-parent="#accordionRental">
                            <div class="text-sm accordion-body text-dark opacity-8">
                                There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s
                                my skill. I’m not really specifically talented at anything except for the ability to
                                learn. That’s what I do. That’s what I’m here for. Don’t be afraid to be wrong because
                                you can’t learn anything from a compliment.
                                I always felt like I could do anything. That’s the main thing people are controlled by!
                                Thoughts- their perception of themselves! They&#39;re slowed down by their perception of
                                themselves. If you&#39;re taught you can’t do anything, you won’t do anything. I was
                                taught I could do everything.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-app.footer />

</x-app-layout>

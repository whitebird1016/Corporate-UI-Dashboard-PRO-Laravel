<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <img src="../../../assets/img/header-blue-white.png" alt="pattern-lines"
                            class="top-0 rounded-2 position-absolute start-0 w-100 h-100">
                        <div class="px-4 bg-cover card-body z-index-1">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <h3 class="text-white">Check Order List 🔥</h3>
                                    <p class="mb-4 text-white">See all details about your all orders.</p>
                                    <button class="mb-0 btn btn-dark">
                                        <i class="fas fa-plus me-1"></i>
                                        New Order
                                    </button>
                                </div>
                                <div class="text-end col-lg-4 col-12">
                                    <img class="w-35 ms-auto me-5 d-none d-md-block"
                                        src="../../../assets/img/globe-3d.png" alt="cube image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <div class="pb-0 card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h5 class="">All orders</h5>
                                    <p class="mb-0 text-sm">
                                        A lightweight, extendable, dependency-free javascript HTML table plugin.
                                    </p>
                                </div>
                                <div class="col-6 text-end">
                                    <button type="button" class="mb-0 btn btn-white" data-bs-toggle="modal"
                                        data-bs-target="#import">
                                        <svg class="me-2" width="14" height="15" viewBox="0 0 20 21"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3 17.5C3 16.9477 3.44772 16.5 4 16.5H16C16.5523 16.5 17 16.9477 17 17.5C17 18.0523 16.5523 18.5 16 18.5H4C3.44772 18.5 3 18.0523 3 17.5ZM6.29289 9.79289C6.68342 9.40237 7.31658 9.40237 7.70711 9.79289L9 11.0858V3.5C9 2.94772 9.44771 2.5 10 2.5C10.5523 2.5 11 2.94771 11 3.5V11.0858L12.2929 9.79289C12.6834 9.40237 13.3166 9.40237 13.7071 9.79289C14.0976 10.1834 14.0976 10.8166 13.7071 11.2071L10.7071 14.2071C10.5196 14.3946 10.2652 14.5 10 14.5C9.73478 14.5 9.48043 14.3946 9.29289 14.2071L6.29289 11.2071C5.90237 10.8166 5.90237 10.1834 6.29289 9.79289Z"
                                                fill="#111827" />
                                        </svg>Import
                                    </button>
                                    <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog mt-lg-10">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                                                    <i class="fas fa-upload ms-3"></i>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>You can browse your computer for a file.</p>
                                                    <input type="text" placeholder="Browse file..."
                                                        class="mb-3 form-control">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="importCheck" checked="">
                                                        <label class="custom-control-label" for="importCheck">I accept
                                                            the terms and conditions</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn bg-gradient-secondary btn-sm"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="button"
                                                        class="btn bg-gradient-primary btn-sm">Upload</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="mt-1 mb-0 btn btn-white export mt-sm-0" data-type="csv"
                                        type="button" name="button">
                                        <svg class="me-2" width="14" height="15" viewBox="0 0 20 21"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3 17.5C3 16.9477 3.44772 16.5 4 16.5H16C16.5523 16.5 17 16.9477 17 17.5C17 18.0523 16.5523 18.5 16 18.5H4C3.44772 18.5 3 18.0523 3 17.5ZM6.29289 7.20711C5.90237 6.81658 5.90237 6.18342 6.29289 5.79289L9.29289 2.79289C9.48043 2.60536 9.73478 2.5 10 2.5C10.2652 2.5 10.5196 2.60536 10.7071 2.79289L13.7071 5.79289C14.0976 6.18342 14.0976 6.81658 13.7071 7.20711C13.3166 7.59763 12.6834 7.59763 12.2929 7.20711L11 5.91421V13.5C11 14.0523 10.5523 14.5 10 14.5C9.44771 14.5 9 14.0523 9 13.5V5.91421L7.70711 7.20711C7.31658 7.59763 6.68342 7.59763 6.29289 7.20711Z"
                                                fill="#111827" />
                                        </svg>Export
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-0 card-body">
                            <div class="table-responsive">
                                <table class="table table-flush" id="datatable-search">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-xxs border-top-0 text-uppercase">Id</th>
                                            <th class="text-xxs border-top-0 text-uppercase">Date</th>
                                            <th class="text-xxs border-top-0 text-uppercase">Status</th>
                                            <th class="text-xxs border-top-0 text-uppercase">Customer</th>
                                            <th class="text-xxs border-top-0 text-uppercase">Product</th>
                                            <th class="text-xxs border-top-0 text-uppercase">Revenue</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck1">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10421</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../../assets/img/team-2.jpg"
                                                        class="avatar avatar-xs rounded-circle me-2" alt="user image">
                                                    <span>Orlando Imieto</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">Sofa Yellow</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$89,53</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="pt-0 form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck2">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10422</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 10:53 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <img src="../../../assets/img/team-1.jpg"
                                                        class="avatar avatar-xs rounded-circle me-2" alt="user image">
                                                    <span>Alice Murinho</span>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">Valvet T-shirt</span>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">$42,00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck3">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10423</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 11:13 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-dark me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-undo" aria-hidden="true"></i></button>
                                                    <span>Refunded</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xs rounded-circle me-2 bg-gradient-dark">
                                                        <span>M</span>
                                                    </div>
                                                    <span>Michael Mirra</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Leather Wallet
                                                    <span class="text-secondary ms-2"> +1 more </span>
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$25,50</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck4">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10424</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 12:20 PM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../../assets/img/team-3.jpg"
                                                            class="avatar avatar-xs rounded-circle me-2"
                                                            alt="user image">
                                                        <span>Andrew Nichel</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Bracelet Onu-Lino
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$19,40</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck5">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10425</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 1:40 PM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-danger me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-times" aria-hidden="true"></i></button>
                                                    <span>Canceled</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../../assets/img/team-4.jpg"
                                                            class="avatar avatar-xs rounded-circle me-2"
                                                            alt="user image">
                                                        <span>Sebastian Koga</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Phone Case Pink
                                                    <span class="text-secondary ms-2"> x 2 </span>
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$44,90</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck6">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10426</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 2:19 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="avatar avatar-xs rounded-circle me-2 bg-gradient-primary">
                                                        <span>L</span>
                                                    </div>
                                                    <span>Laur Gilbert</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Backpack Niver
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$112,50</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck7">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10427</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">1 Nov, 3:42 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xs rounded-circle me-2 bg-gradient-dark">
                                                        <span>I</span>
                                                    </div>
                                                    <span>Iryna Innda</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Adidas Vio
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$200,00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck8">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10428</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">2 Nov, 9:32 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xs rounded-circle me-2 bg-gradient-dark">
                                                        <span>A</span>
                                                    </div>
                                                    <span>Arrias Liunda</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Airpods 2 Gen
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$350,00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck9">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10429</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">2 Nov, 10:14 AM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../../assets/img/team-5.jpg"
                                                            class="avatar avatar-xs rounded-circle me-2"
                                                            alt="user image">
                                                        <span>Rugna Ilpio</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Bracelet Warret
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$15,00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck10">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10430</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">2 Nov, 12:56 PM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-dark me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-undo" aria-hidden="true"></i></button>
                                                    <span>Refunded</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <img src="../../../assets/img/ivana-squares.jpg"
                                                            class="avatar avatar-xs rounded-circle me-2"
                                                            alt="user image">
                                                        <span>Anna Landa</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Watter Bottle India
                                                    <span class="text-secondary ms-2"> x 3 </span>
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$25,00</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck11">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10431</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">2 Nov, 3:12 PM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xs rounded-circle me-2 bg-gradient-dark">
                                                        <span>K</span>
                                                    </div>
                                                    <span>Karl Innas</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Kitchen Gadgets
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$164,90</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck12">
                                                    </div>
                                                    <p class="mb-0 text-xs font-weight-bold ms-2">#10432</p>
                                                </div>
                                            </td>
                                            <td class="font-weight-bold">
                                                <span class="my-2 text-xs">2 Nov, 5:12 PM</span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <button disabled
                                                        class="mb-0 btn btn-icon-only btn-rounded btn-outline-success me-2 btn-sm d-flex align-items-center justify-content-center"><i
                                                            class="fas fa-check" aria-hidden="true"></i></button>
                                                    <span>Paid</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-xs rounded-circle me-2 bg-gradient-info">
                                                        <span>O</span>
                                                    </div>
                                                    <span>Oana Kilas</span>
                                                </div>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">
                                                    Office Papers
                                                </span>
                                            </td>
                                            <td class="text-xs font-weight-bold">
                                                <span class="my-2 text-xs">$23,90</span>
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
<script src="../../../assets/js/plugins/datatables.js"></script>
<script>
    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: false,
        perPageSelect: false
    });

    document.querySelectorAll(".export").forEach(function(el) {
        el.addEventListener("click", function(e) {
            var type = el.dataset.type;

            var data = {
                type: type,
                filename: "soft-ui-" + type,
            };

            if (type === "csv") {
                data.columnDelimiter = "|";
            }

            dataTableSearch.export(data);
        });
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

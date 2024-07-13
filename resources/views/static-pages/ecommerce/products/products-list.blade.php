<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="card">
                        <img src="../../../assets/img/header-orange-purple.jpeg" alt="pattern-lines"
                            class="top-0 rounded-2 position-absolute start-0 w-100 h-100">
                        <div class="px-4 bg-cover card-body z-index-1">
                            <div class="row">
                                <div class="col-lg-8 col-12">
                                    <h3 class="text-white">Check Product List</h3>
                                    <p class="mb-4 text-white">See all details about your all orders.</p>
                                    <button class="mb-1 btn btn-dark">
                                        <i class="fas fa-plus me-1"></i>
                                        New Product
                                    </button>
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
                            <div class="d-lg-flex">
                                <div>
                                    <h5 class="mb-0">All Products</h5>
                                    <p class="mb-0 text-sm">
                                        A lightweight, extendable, dependency-free javascript HTML table plugin.
                                    </p>
                                </div>
                                <div class="my-auto mt-4 ms-auto mt-lg-0">
                                    <div class="my-auto ms-auto">
                                        <a href="./new-product.html" class="me-2 mb-0 btn btn-dark" target="_blank">
                                            <i class="fas fa-plus me-1"></i>
                                            New Product
                                        </a>
                                        <button type="button" class="me-2 mb-0 btn btn-white" data-bs-toggle="modal"
                                            data-bs-target="#import">
                                            <svg width="14" height="15" viewBox="0 0 20 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="importCheck" checked="">
                                                            <label class="custom-control-label" for="importCheck">I
                                                                accept the terms and conditions</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white btn-sm"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button"
                                                            class="btn btn-dark btn-sm">Upload</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="mt-1 mb-0 btn btn-white export mt-sm-0" data-type="csv"
                                            type="button" name="button">
                                            <svg width="14" height="15" viewBox="0 0 20 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3 17.5C3 16.9477 3.44772 16.5 4 16.5H16C16.5523 16.5 17 16.9477 17 17.5C17 18.0523 16.5523 18.5 16 18.5H4C3.44772 18.5 3 18.0523 3 17.5ZM6.29289 7.20711C5.90237 6.81658 5.90237 6.18342 6.29289 5.79289L9.29289 2.79289C9.48043 2.60536 9.73478 2.5 10 2.5C10.2652 2.5 10.5196 2.60536 10.7071 2.79289L13.7071 5.79289C14.0976 6.18342 14.0976 6.81658 13.7071 7.20711C13.3166 7.59763 12.6834 7.59763 12.2929 7.20711L11 5.91421V13.5C11 14.0523 10.5523 14.5 10 14.5C9.44771 14.5 9 14.0523 9 13.5V5.91421L7.70711 7.20711C7.31658 7.59763 6.68342 7.59763 6.29289 7.20711Z"
                                                    fill="#111827" />
                                            </svg>Export
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-0 pb-0 card-body">
                            <div class="table-responsive">
                                <table class="table table-flush" id="products-list">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-xs">Product</th>
                                            <th class="text-xs">Category</th>
                                            <th class="text-xs">Price</th>
                                            <th class="text-xs">SKU</th>
                                            <th class="text-xs">Quantity</th>
                                            <th class="text-xs">Status</th>
                                            <th class="text-xs">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck1" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-NpF_OYE301E-unsplash.jpg"
                                                        alt="sofa">
                                                    <h6 class="my-auto ms-3">Gray Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$89.53</td>
                                            <td class="text-sm">243598234</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck2" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/volant-CUFOVnctleY-unsplash.jpg"
                                                        alt="pillow">
                                                    <h6 class="my-auto ms-3">Pillow</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Deco</td>
                                            <td class="text-sm">$1,869</td>
                                            <td class="text-sm">877712</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck3">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/kelly-sikkema-Pvse_0mSm6Y-unsplash.jpg"
                                                        alt="metro-chair">
                                                    <h6 class="my-auto ms-3">Metro Bar Stool</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$99</td>
                                            <td class="text-sm">0134729</td>
                                            <td class="text-sm">978</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck10">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg"
                                                        alt="alchimia chair">
                                                    <h6 class="my-auto ms-3">Alchimia Chair</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$2,999</td>
                                            <td class="text-sm">113213</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck5">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/collov-home-design-js8AQlw71HA-unsplash.jpg"
                                                        alt="sofa">
                                                    <h6 class="my-auto ms-3">White Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck6">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-Kh4tedFdHz4-unsplash.jpg"
                                                        alt="beige sofa">
                                                    <h6 class="my-auto ms-3">Beige Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$1,869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck7" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-c0JoR_-2x3E-unsplash.jpg"
                                                        alt="cotton sofa">
                                                    <h6 class="my-auto ms-3">Cotton Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">In Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck1" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-NpF_OYE301E-unsplash.jpg"
                                                        alt="sofa">
                                                    <h6 class="my-auto ms-3">Gray Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$89.53</td>
                                            <td class="text-sm">243598234</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck2" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/volant-CUFOVnctleY-unsplash.jpg"
                                                        alt="pillow">
                                                    <h6 class="my-auto ms-3">Pillow</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Deco</td>
                                            <td class="text-sm">$1,869</td>
                                            <td class="text-sm">877712</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck3">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/kelly-sikkema-Pvse_0mSm6Y-unsplash.jpg"
                                                        alt="metro-chair">
                                                    <h6 class="my-auto ms-3">Metro Bar Stool</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$99</td>
                                            <td class="text-sm">0134729</td>
                                            <td class="text-sm">978</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck10">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/kam-idris-_HqHX3LBN18-unsplash.jpg"
                                                        alt="alchimia chair">
                                                    <h6 class="my-auto ms-3">Alchimia Chair</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$2,999</td>
                                            <td class="text-sm">113213</td>
                                            <td class="text-sm">0</td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Out of Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck5">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/collov-home-design-js8AQlw71HA-unsplash.jpg"
                                                        alt="sofa">
                                                    <h6 class="my-auto ms-3">White Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck6">
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-Kh4tedFdHz4-unsplash.jpg"
                                                        alt="beige sofa">
                                                    <h6 class="my-auto ms-3">Beige Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$1,869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">in Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck7" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-c0JoR_-2x3E-unsplash.jpg"
                                                        alt="cotton sofa">
                                                    <h6 class="my-auto ms-3">Cotton Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">In Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="my-auto form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="customCheck7" checked>
                                                    </div>
                                                    <img class="avatar avatar-md ms-3"
                                                        src="../../../assets/img/spacejoy-c0JoR_-2x3E-unsplash.jpg"
                                                        alt="cotton sofa">
                                                    <h6 class="my-auto ms-3">Cotton Sofa</h6>
                                                </div>
                                            </td>
                                            <td class="text-sm">Furniture</td>
                                            <td class="text-sm">$869</td>
                                            <td class="text-sm">634729</td>
                                            <td class="text-sm">725</td>
                                            <td>
                                                <span class="badge badge-success badge-sm">In Stock</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Preview product">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Edit product">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Delete product">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>SKU</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
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
    if (document.getElementById('products-list')) {
        const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
            searchable: true,
            fixedHeight: false,
            perPage: 7
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
    };
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

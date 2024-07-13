<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-10 row">
                <div class="col-lg-6">
                    <h4>Make the changes below</h4>
                    <p>We’re constantly trying to express ourselves and actualize our dreams. If you have the
                        opportunity to play.</p>
                </div>
                <div class="text-right col-lg-6 d-flex flex-column justify-content-center">
                    <button type="button" class="mt-2 mb-0 btn btn-dark ms-lg-auto me-lg-0 me-auto mt-lg-0">
                        <svg class="me-1" width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5.39341 7.20504C5.12004 6.93167 4.67683 6.93167 4.40346 7.20504C4.1301 7.47839 4.1301 7.92163 4.40346 8.19498L6.50346 10.295C6.77683 10.5683 7.22006 10.5683 7.49341 10.295L9.59341 8.19498C9.86676 7.92163 9.86676 7.47839 9.59341 7.20504C9.32006 6.93167 8.87682 6.93167 8.60347 7.20504L7.69844 8.11007V4.20001H11.1984C11.9717 4.20001 12.5984 4.82681 12.5984 5.60001V10.5C12.5984 11.2732 11.9717 11.9 11.1984 11.9H2.79844C2.02524 11.9 1.39844 11.2732 1.39844 10.5V5.60001C1.39844 4.82681 2.02524 4.20001 2.79844 4.20001H6.29844V8.11007L5.39341 7.20504Z"
                                fill="#F9FAFB" />
                            <path
                                d="M6.30078 2.79998C6.30078 2.41338 6.61419 2.09998 7.00078 2.09998C7.38739 2.09998 7.70078 2.41338 7.70078 2.79998V4.19998H6.30078V2.79998Z"
                                fill="#F9FAFB" />
                        </svg>
                        Save
                    </button>
                </div>
            </div>
            <hr class="horizontal dark">
            <div class="mt-4 row">
                <div class="col-lg-5">
                    <div class="card card-plain pe-lg-10">
                        <h5 class="font-weight-semibold">General Information</h5>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Product Information</h5>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <label>Name</label>
                                    <input class="form-control" type="text" value="e.g. Yellow Sofa" />
                                </div>
                                <div class="mt-3 col-12 col-sm-6 mt-sm-0">
                                    <label>Weight</label>
                                    <input class="form-control" type="number" value="20" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <label class="mt-4">Collection</label>
                                    <input class="form-control" type="text" value="e.g. Luxury" />
                                </div>
                                <div class="col-3">
                                    <label class="mt-4">Price</label>
                                    <input class="form-control" type="text" value="$990" />
                                </div>
                                <div class="col-3">
                                    <label class="mt-4">Quantity</label>
                                    <input class="form-control" type="number" value="20" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 h-100">
                                    <label class="mt-4">Description</label>
                                    <p class="text-xs form-text text-muted ms-1 d-inline">
                                        (optional)
                                    </p>
                                    <div id="edit-deschiption-edit" class="h-100">
                                        Some initial <b>Bold</b> text
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label class="mt-4">Category</label>
                                    <select class="form-control" name="choices-category" id="choices-category-edit">
                                        <option value="Choice 1" selected="">e.g. Furniture</option>
                                        <option value="Choice 2">Real Estate</option>
                                        <option value="Choice 3">Electronics</option>
                                        <option value="Choice 4">Clothing</option>
                                        <option value="Choice 5">Others</option>
                                    </select>
                                    <label>Color</label>
                                    <select class="form-control" name="choices-color" id="choices-color-edit">
                                        <option value="Choice 1" selected="">e.g. Yellow</option>
                                        <option value="Choice 2">White</option>
                                        <option value="Choice 3">Blue</option>
                                        <option value="Choice 4">Orange</option>
                                        <option value="Choice 5">Green</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-lg-5">
                    <div class="card card-plain pe-lg-10">
                        <h5 class="font-weight-semibold">Visual Information</h5>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="col-6">
                                    <h5 class="font-weight-bolder">Product Image</h5>
                                </div>
                                <div class="col-lg-6 text-end">
                                    <button class="mb-0 btn btn-white me-2 btn-sm" type="button" name="button">
                                        <svg width="14" height="15" viewBox="0 0 20 21" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M9 2.5C8.62123 2.5 8.27497 2.714 8.10557 3.05279L7.38197 4.5H4C3.44772 4.5 3 4.94772 3 5.5C3 6.05228 3.44772 6.5 4 6.5V16.5C4 17.6046 4.89543 18.5 6 18.5H14C15.1046 18.5 16 17.6046 16 16.5V6.5C16.5523 6.5 17 6.05228 17 5.5C17 4.94772 16.5523 4.5 16 4.5H12.618L11.8944 3.05279C11.725 2.714 11.3788 2.5 11 2.5H9ZM7 8.5C7 7.94772 7.44772 7.5 8 7.5C8.55228 7.5 9 7.94772 9 8.5V14.5C9 15.0523 8.55228 15.5 8 15.5C7.44772 15.5 7 15.0523 7 14.5V8.5ZM12 7.5C11.4477 7.5 11 7.94772 11 8.5V14.5C11 15.0523 11.4477 15.5 12 15.5C12.5523 15.5 13 15.0523 13 14.5V8.5C13 7.94772 12.5523 7.5 12 7.5Z"
                                                fill="#111827" />
                                        </svg>
                                        Remove
                                    </button>
                                    <button class="mb-0 btn btn-dark btn-sm" type="button" name="button">
                                        <svg width="14" height="15" viewBox="0 0 14 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.50816 3.01006C10.0549 2.46332 10.9413 2.46332 11.488 3.01006C12.0348 3.55679 12.0348 4.44322 11.488 4.98995L10.933 5.54498L8.95312 3.56508L9.50816 3.01006Z"
                                                fill="#F9FAFB" />
                                            <path
                                                d="M7.96665 4.55502L2.10156 10.4201V12.4H4.08146L9.94653 6.53492L7.96665 4.55502Z"
                                                fill="#F9FAFB" />
                                        </svg>
                                        Edit
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img class="mt-3 shadow-lg w-100 border-radius-lg"
                                        src="../../../assets/img/spacejoy-c0JoR_-2x3E-unsplash.jpg"
                                        alt="product_image">
                                </div>
                                <div class="mt-4 col-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-lg-5">
                    <div class="card card-plain pe-lg-10">
                        <h5 class="font-weight-semibold">About Price</h5>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h5 class="font-weight-bolder">Pricing</h5>
                                <div class="col-3">
                                    <label>Price</label>
                                    <input class="form-control" type="number" value="99" />
                                </div>
                                <div class="col-4">
                                    <label>Currency</label>
                                    <select class="form-control" name="choices-sizes" id="choices-currency-edit">
                                        <option value="Choice 1" selected="">USD</option>
                                        <option value="Choice 2">EUR</option>
                                        <option value="Choice 3">GBP</option>
                                        <option value="Choice 4">CNY</option>
                                        <option value="Choice 5">INR</option>
                                        <option value="Choice 6">BTC</option>
                                    </select>
                                </div>
                                <div class="col-5">
                                    <label>SKU</label>
                                    <input class="form-control" type="text" value="71283476591" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="mt-4">Tags</label>
                                    <select class="form-control" name="choices-tags" id="choices-tags-edit" multiple>
                                        <option value="Choice 1" selected>In Stock</option>
                                        <option value="Choice 2">Out of Stock</option>
                                        <option value="Choice 3">Sale</option>
                                        <option value="Choice 4">Black Friday</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-lg-5">
                    <div class="card card-plain pe-lg-10">
                        <h5 class="font-weight-semibold">Social Media</h5>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="font-weight-bolder">Socials</h5>
                            <label>Shoppify Handle</label>
                            <input class="form-control" type="text" value="@corporate" />
                            <label class="mt-4">Facebook Account</label>
                            <input class="form-control" type="text" value="https://" />
                            <label class="mt-4">Instagram Account</label>
                            <input class="form-control" type="text" value="https://" />
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script src="../../../assets/js/plugins/quill.min.js"></script>
<script>
    if (document.getElementById('edit-deschiption-edit')) {
        var quill = new Quill('#edit-deschiption-edit', {
            theme: 'snow' // Specify theme in configuration
        });
    };

    if (document.getElementById('choices-category-edit')) {
        var element = document.getElementById('choices-category-edit');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-color-edit')) {
        var element = document.getElementById('choices-color-edit');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-currency-edit')) {
        var element = document.getElementById('choices-currency-edit');
        const example = new Choices(element, {
            searchEnabled: false
        });
    };

    if (document.getElementById('choices-tags-edit')) {
        var tags = document.getElementById('choices-tags-edit');
        const examples = new Choices(tags, {
            removeItemButton: true
        });

        examples.setChoices(
            [{
                    value: 'One',
                    label: 'Expired',
                    disabled: true
                },
                {
                    value: 'Two',
                    label: 'Out of Stock',
                    selected: true
                }
            ],
            'value',
            'label',
            false,
        );
    }
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

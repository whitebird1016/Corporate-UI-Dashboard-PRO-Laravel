<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="mb-4 col-lg-6 col-6">
                            <div class="border card">
                                <div class="p-4 text-start card-body">
                                    <div class="mb-3 text-center shadow bg-dark icon icon-shape border-radius-md">
                                        <i class="text-lg text-white fas fa-cog opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="mb-1 numbers">
                                        <h5 class="mb-0 text-lg text-dark font-weight-bolder">
                                            50 %
                                        </h5>
                                    </div>
                                    <div class="numbers">
                                        <p class="mb-0 text-sm text-capitalize font-weight-bold opacity-7">Battery
                                            Remaining</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 col-lg-6 col-6">
                            <div class="border card">
                                <div class="p-4 text-start card-body">
                                    <div class="mb-3 text-center shadow bg-dark icon icon-shape border-radius-md">
                                        <i class="text-lg text-white fa-solid fa-sun opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="mb-1 numbers">
                                        <h5 class="mb-0 text-dark font-weight-bolder">
                                            22°C
                                        </h5>
                                    </div>
                                    <div class="numbers">
                                        <p class="mb-0 text-sm text-dark text-capitalize font-weight-bold opacity-7">A/C
                                            Temperature</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-4 mb-lg-0 col-lg-6 col-6">
                            <div class="border card">
                                <div class="p-4 text-start card-body">
                                    <div class="mb-3 text-center shadow bg-dark icon icon-shape border-radius-md">
                                        <i class="text-lg text-white fas fa-cog opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="mb-1 numbers">
                                        <h4 class="mb-0 text-xl text-dark font-weight-bolder">
                                            342 <small class="text-sm">Km</small>
                                        </h4>
                                    </div>
                                    <div class="numbers">
                                        <p class="mb-0 text-sm text-dark text-capitalize font-weight-bold opacity-7">
                                            Today's Trip</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4 mb-lg-0 col-lg-6 col-6">
                            <div class="border card">
                                <div class="p-4 text-start card-body">
                                    <div class="mb-3 text-center shadow bg-dark icon icon-shape border-radius-md">
                                        <i class="text-lg text-white fas fa-cog opacity-10" aria-hidden="true"></i>
                                    </div>
                                    <div class="mb-1 numbers">
                                        <h5 class="mb-0 text-dark font-weight-bolder">
                                            24.327 <small class="text-sm">Km</small>
                                        </h5>
                                    </div>
                                    <div class="numbers">
                                        <p class="mb-0 text-sm text-dark text-capitalize font-weight-bold opacity-7">
                                            Total Distance</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-auto col-md-6 col-12">
                    <img class="mx-auto w-lg-80 w-80 w-xl-70 d-none d-md-block" src="../../assets/img/tesla.jpg"
                        alt="car image">
                </div>
            </div>
            <div class="mt-4 row">
                <div class="mb-4 col-xxl-6 col-12 mb-2xl-0">
                    <div class="overflow-hidden w-100 card">
                        <img class="top-0 position-absolute start-40 top-10 w-80" src="../../assets/img/iphone-14.png"
                            alt="car image">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7 h-100">
                                    <h5 class="mb-1 text-dark">Devices</h5>
                                    <p class="mb-0">Pick a device and connect it via bluetooth.</p>
                                    <div class="my-2 row">
                                        <div class="col-xl-7 col-8">
                                            <h6 class="mb-0 text-dark">Noah’s Iphone</h6>
                                        </div>
                                        <div class="col-xl-5 col-4 text-end">
                                            <span class="badge badge-lg badge-success">Connected</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-transparent h-100 card">
                                                <div class="overflow-hidden bg-cover h-100 position-relative border-radius-md"
                                                    style="background-image: url('../../assets/img/mj-automotive.png');">
                                                    <img class="p-2 w-25"
                                                        src="../../assets/img/small-logos/logo-spotify.svg"
                                                        alt="car image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <p class="mb-0 text-dark font-weight-bold">New World</p>
                                            <p class="mb-2">Michael Jackson</p>
                                            <div class="mb-2 row">
                                                <div class="col-4 text-start">
                                                    <i class="text-sm text-dark fa-solid fa-backward"></i>
                                                </div>
                                                <div class="text-center col-4">
                                                    <i class="text-sm text-dark fa-solid fa-pause"></i>
                                                </div>
                                                <div class="col-4 text-end">
                                                    <i class="text-sm text-dark fa-solid fa-forward"></i>
                                                </div>
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-primary w-50" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="mb-2 row">
                                                <div class="col-6 text-start">
                                                    <span class="text-sm">1:34</span>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <span class="text-sm">1:20</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-12">
                    <div class="overflow-hidden card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8 col-8 h-100">
                                    <h5 class="mb-1 text-dark">Settings</h5>
                                    <p class="">Here you can set preferences.</p>
                                    <div class="my-3 mt-2 row">
                                        <div class="col-7">
                                            <h6 class="">Driver’s Seat:</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div
                                                        class="flex-wrap gap-2 flex-column d-flex justify-content-start ">
                                                        <button class="py-3 mb-0 btn btn-dark">
                                                            <span class="text-xs">1</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="flex-wrap gap-2 flex-column d-flex justify-content-start ">
                                                        <button class="py-3 mb-0 btn btn-white">
                                                            <span class="text-secondary text-xs">2</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-3 row">
                                                <div class="col-6">
                                                    <div
                                                        class="flex-wrap gap-2 flex-column d-flex justify-content-start ">
                                                        <button class="py-3 mb-0 btn btn-white">
                                                            <span class="text-secondary text-xs">3</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div
                                                        class="flex-wrap gap-2 flex-column d-flex justify-content-start ">
                                                        <button class="py-3 mb-0 btn btn-white">
                                                            <span class="text-secondary text-xs">4</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 col-2">
                                            <div class="progress progress-vertical">
                                                <div class="progress-bar bg-primary h-50" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                    <!-- progress-bar -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 d-flex">
                                            <p class="mb-0 align-self-end text-dark">22°C</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-3 d-flex z-index-1 justify-content-center align-items-center">
                                    <img class="w-md-20 w-xxl-30 w-lg-15 w-35 z-index-2 position-absolute end-20 top-15"
                                        src="../../assets/img/car-seat.png" alt="car image">
                                    <svg class="position-absolute" width="110" height="110"
                                        viewBox="0 0 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.300409" cx="55" cy="55" r="54"
                                            stroke="#DDDFE5" />
                                    </svg>
                                    <svg class="position-absolute" width="159" height="159"
                                        viewBox="0 0 159 159" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.249442" cx="79.5" cy="79.5" r="78.5"
                                            stroke="#DDDFE5" />
                                    </svg>
                                    <svg width="202" height="202" viewBox="0 0 202 202" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle opacity="0.148135" cx="101" cy="101" r="100"
                                            stroke="#DDDFE5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row">
                <div class="col-12">
                    <div class="p-0 card-map card">
                        <div id="mapid" class="overflow-hidden leaflet"></div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>

<script src="../../assets/js/plugins/leaflet.js"></script>
<script src="../../assets/js/plugins/nouislider.min.js"></script>
<script>
    // Initialize the map and assign it to a variable for later use
    // there's a few ways to declare a VARIABLE in javascript.
    // you might also see people declaring variables using `const` and `let`
    var map = L.map('mapid', {
        // Set latitude and longitude of the map center (required)
        center: [37.728, -122.475],
        fillColor: "#fff",
        // fill: false,
        color: "#fff",
        // Set the initial zoom level, values 0-18, where 0 is most zoomed-out (required)
        zoom: 15
    });


    // Create a Tile Layer and add it to the map
    var tiles = new L.tileLayer('https://{s}.tile.jawg.io/jawg-sunny/{z}/{x}/{y}{r}.png?access-token={accessToken}', {
        attribution: '<a href="http://jawg.io" title="Tiles Courtesy of Jawg Maps" target="_blank">&copy; <b>Jawg</b>Maps</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        minZoom: 0,
        maxZoom: 22,
        subdomains: 'abcd',
        accessToken: 'ZpC8JXnSh7IVbHpOrZf5HywKIqd65v6CIpUuLpRkYPqy1vOSSxymrQBMdL0tQU3G'
    }).addTo(map);


    // Init slider
    var slider = document.getElementById("sliderRegular");
    noUiSlider.create(slider, {
        start: 40,
        connect: [true, false],
        range: {
            min: 0,
            max: 100
        }
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

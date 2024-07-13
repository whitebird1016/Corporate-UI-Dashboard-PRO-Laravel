<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-8 places-sweet-alerts">
                <h2 class="">Sweet Alerts</h2>
                <p class="category">A beautiful plugin, that replace the classic alert, Handcrafted by our friend <a
                        target="_blank" href="https://twitter.com/t4t5">Tristan Edwards</a>. Please check out the <a
                        href="https://sweetalert2.github.io/" target="_blank">full documentation.</a></p>
            </div>
            <div class="mt-5 d-flex justify-content-center align-items-center row">
                <div class="col-md-4 col-lg-3">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">Basic example</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('basic')">Try me!</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-4 col-lg-3 mt-md-0">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">A success message</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('success-message')">Try
                                me!</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-4 col-lg-3 mt-md-0">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">Custom HTML description</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('custom-html')">Try me!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row d-flex justify-content-center align-items-center">
                <div class="col-md-4 col-lg-3">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">Gitgub avatar request</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('input-field')">Try me!</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-4 col-lg-3 mt-md-0">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">A title with a text under</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('title-and-text')">Try me!</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-4 col-lg-3 mt-md-0">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">A message with auto close</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('auto-close')">Try me!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 mb-5 row d-flex justify-content-center align-items-center">
                <div class="col-md-4 col-lg-3">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">A warning message, with a function attached to the "Confirm" Button...
                            </p>
                            <button class="mb-0 btn btn-dark"
                                onclick="soft.showSwal('warning-message-and-confirmation')">Try me!</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-4 col-lg-3 mt-md-0">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">...and by passing a parameter, you can execute something else for
                                "Cancel"</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('warning-message-and-cancel')">Try
                                me!</button>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-4 col-lg-3 mt-md-0">
                    <div class="card">
                        <div class="text-center card-body">
                            <p class="card-text">Right-to-left support for Arabic, Persian, Hebrew, and other RTL
                                languages</p>
                            <button class="mb-0 btn btn-dark" onclick="soft.showSwal('rtl-language')">Try me!</button>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../assets/js/plugins/sweetalert.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

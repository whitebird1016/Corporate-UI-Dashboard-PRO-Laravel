<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-8 row">
                <div class="col-md-3">
                    <div class="card card-plain">
                        <h5 class="font-weight-semibold">Basic Alerts</h5>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="pb-0 card-header">
                            <h5 class="mb-0">Alerts</h5>
                            <p class="mb-0">Alerts on this page use Toasts from Bootstrap. Read more details <a
                                    href="https://getbootstrap.com/docs/5.0/components/toasts/"
                                    target="_blank">here</a>.</p>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-primary alert-dismissible" role="alert">
                                A simple primary alert with <a href="javascript:;" class="alert-link">an example
                                    link</a>. Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-secondary alert-dismissible" role="alert">
                                A simple secondary alert with <a href="javascript:;" class="alert-link">an example
                                    link</a>. Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                A simple success alert with <a href="javascript:;" class="alert-link">an example
                                    link</a>. Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                A simple danger alert with <a href="javascript:;" class="alert-link">an example
                                    link</a>. Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-warning alert-dismissible" role="alert">
                                A simple warning alert with <a href="javascript:;" class="alert-link">an example
                                    link</a>. Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-info alert-dismissible" role="alert">
                                A simple info alert with <a href="javascript:;" class="alert-link">an example link</a>.
                                Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-light alert-dismissible" role="alert">
                                A simple light alert with <a href="javascript:;" class="alert-link">an example link</a>.
                                Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                            <div class="alert alert-dark alert-dismissible" role="alert">
                                A simple dark alert with <a href="javascript:;" class="alert-link">an example link</a>.
                                Give it a click if you like.
                                <button type="button" class="py-3 text-lg btn-close opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="mx-auto col-md-3">
                    <div class="mt-4 bard-body card-plain card">
                        <h5 class="mb-0">Basic Notifications</h5>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="mx-auto col-md-9">
                    <div class="mt-4 card">
                        <div class="p-3 card-header">
                            <h5 class="mb-0">Notifications</h5>
                            <p class="mb-0 text-sm">
                                Notifications on this page use Toasts from Bootstrap. Read more details <a
                                    href="https://getbootstrap.com/docs/5.0/components/toasts/"
                                    target="
              ">here</a>.
                            </p>
                        </div>
                        <div class="p-3 card-body">
                            <div class="row">
                                <div class="col-lg-3 col-sm-6 col-12">
                                    <button class="mb-0 btn btn-success w-100 toast-btn" type="button"
                                        data-target="successToast">Success Notification</button>
                                </div>
                                <div class="mt-2 col-lg-3 col-sm-6 col-12 mt-sm-0">
                                    <button class="mb-0 btn btn-info w-100 toast-btn" type="button"
                                        data-target="infoToast">Info Notification</button>
                                </div>
                                <div class="mt-2 col-lg-3 col-sm-6 col-12 mt-lg-0">
                                    <button class="mb-0 btn btn-danger w-100 toast-btn" type="button"
                                        data-target="dangerToast">Danger Notification</button>
                                </div>
                                <div class="mt-2 col-lg-3 col-sm-6 col-12 mt-lg-0">
                                    <button class="mb-0 btn btn-warning w-100 toast-btn" type="button"
                                        data-target="warningToast">Warning Notification</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-fixed bottom-1 end-1 z-index-2">
                <div class="p-2 bg-white toast fade hide" role="alert" aria-live="assertive" id="successToast"
                    aria-atomic="true">
                    <div class="border-0 toast-header">
                        <i class="ni ni-check-bold text-success me-2"></i>
                        <span class="me-auto font-weight-bold">Corporate UI Dashboard</span>
                        <small class="text-body">11 mins ago</small>
                        <i class="cursor-pointer fas fa-times text-md ms-3" data-bs-dismiss="toast"
                            aria-label="Close"></i>
                    </div>
                    <hr class="m-0 horizontal dark">
                    <div class="toast-body">
                        Hello, world! This is a notification message.
                    </div>
                </div>
                <div class="p-2 mt-2 toast fade hide bg-gradient-info" role="alert" aria-live="assertive"
                    id="infoToast" aria-atomic="true">
                    <div class="bg-transparent border-0 toast-header">
                        <i class="text-white ni ni-bell-55 me-2"></i>
                        <span class="text-white me-auto font-weight-bold">Corporate UI Dashboard</span>
                        <small class="text-white">11 mins ago</small>
                        <i class="text-white cursor-pointer fas fa-times text-md ms-3" data-bs-dismiss="toast"
                            aria-label="Close"></i>
                    </div>
                    <hr class="m-0 horizontal light">
                    <div class="text-white toast-body">
                        Hello, world! This is a notification message.
                    </div>
                </div>
                <div class="p-2 mt-2 bg-white toast fade hide" role="alert" aria-live="assertive" id="dangerToast"
                    aria-atomic="true">
                    <div class="border-0 toast-header">
                        <i class="ni ni-notification-70 text-danger me-2"></i>
                        <span class="me-auto  text-danger font-weight-bold">Corporate UI Dashboard</span>
                        <small class="text-body">11 mins ago</small>
                        <i class="cursor-pointer fas fa-times text-md ms-3" data-bs-dismiss="toast"
                            aria-label="Close"></i>
                    </div>
                    <hr class="m-0 horizontal dark">
                    <div class="toast-body">
                        Hello, world! This is a notification message.
                    </div>
                </div>
                <div class="p-2 mt-2 bg-white toast fade hide" role="alert" aria-live="assertive"
                    id="warningToast" aria-atomic="true">
                    <div class="border-0 toast-header">
                        <i class="ni ni-spaceship text-warning me-2"></i>
                        <span class="me-auto font-weight-bold">Corporate UI Dashboard</span>
                        <small class="text-body">11 mins ago</small>
                        <i class="cursor-pointer fas fa-times text-md ms-3" data-bs-dismiss="toast"
                            aria-label="Close"></i>
                    </div>
                    <hr class="m-0 horizontal dark">
                    <div class="toast-body">
                        Hello, world! This is a notification message.
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

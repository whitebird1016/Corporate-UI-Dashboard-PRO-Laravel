<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content main-content-bg mt-0">
        <section>
            <div class="page-header min-vh-90">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-xl-4 col-lg-5 col-md-6 d-flex flex-column">
                            <div class="border-0 card card-plain">
                                <div class="text-center card-body px-lg-4 py-lg-5">
                                    <div class="mb-4 text-center text-muted">
                                        <h2>2-Step Verification</h2>
                                    </div>
                                    <div class="px-3 row gx-2">
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg"
                                                    maxlength="1" autocomplete="off" autocapitalize="off">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg"
                                                    maxlength="1" autocomplete="off" autocapitalize="off">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg"
                                                    maxlength="1" autocomplete="off" autocapitalize="off">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-lg"
                                                    maxlength="1" autocomplete="off" autocapitalize="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-dark w-100">Send code</button>
                                        <span class="text-sm text-muted">Haven't received it?<a href="javascript:;">
                                                Resend a new code</a>.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-0 w-45 end-0 position-absolute h-100 d-md-block d-none">
                                <div class="bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 me-n8 border-radius-lg"
                                    style="background-image:url('../../../assets/img/bg-gray.jpg'); background-position-x: 100%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-app.footer />

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

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
                            <div class="border-0 card card-plain py-lg-3">
                                <div class="text-center card-body">
                                    <h4 class="mb-0 font-weight-bolder">Mike Priesler</h4>
                                    <p class="mb-4">Enter password to unlock your account.</p>
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Insert password"
                                                aria-label="password">
                                        </div>
                                        <div class="text-center">
                                            <button type="button"
                                                class="mb-0 btn btn-lg w-100 btn-dark">Unlock</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-0 position-absolute h-100 d-md-block d-none w-45 end-0">
                                <div class="bg-cover border-radius-lg position-absolute fixed-top ms-auto h-100 z-index-0 me-n8"
                                    style="background-image:url('../../../assets/img/bg-orange.jpg'); background-position-x: -120px;">
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

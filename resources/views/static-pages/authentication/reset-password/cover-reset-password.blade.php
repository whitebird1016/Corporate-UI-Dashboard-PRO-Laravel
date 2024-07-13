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
                        <div class="px-5 col-xl-5 col-lg-6 col-md-8 col-12 d-flex flex-column">
                            <div class="mt-8 border-0 card card-plain">
                                <div class="pb-0 text-left card-header">
                                    <h3 class="text-dark">Reset Password</h3>
                                    <p class="mb-0">You will receive an e-mail in maximum 60 seconds</p>
                                </div>
                                <div class="pb-3 card-body">
                                    <form role="form">
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Enter your e-mail"
                                                aria-label="Email">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="mt-4 mb-0 btn btn-dark w-100">Reset</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-0 w-45 position-absolute h-100 d-md-block end-0 d-none">
                                <div class="bg-cover position-absolute fixed-top h-100 z-index-0 me-n8 border-radius-lg"
                                    style="background-image:url('../../../assets/img/bg-cubes.jpg')"></div>
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

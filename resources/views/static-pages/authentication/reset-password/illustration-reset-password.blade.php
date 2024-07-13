<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0">
                            <div class="border-0 card card-plain">
                                <div class="pb-0 text-left card-header">
                                    <h4 class="font-weight-bolder">Reset password</h4>
                                    <p class="mb-0">You will receive an e-mail in maximum 60 seconds</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Enter your email address" aria-label="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" class="form-control form-control-lg"
                                                placeholder="Enter the verification code" aria-label="code">
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="my-4 btn btn-dark btn-lg w-100">Send</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div
                            class="top-0 my-auto text-center col-6 d-lg-flex d-none h-100 pe-0 position-absolute end-0 justify-content-center flex-column">
                            <div class="bg-cover position-relative bg-gradient-primary h-100 px-7 d-flex flex-column justify-content-center"
                                style="background-image: url('../../../assets/img/bg-cubes-2.jpg'); background-position-x: 65%; background-position-y: 85%;">
                                <div
                                    class="p-5 mt-auto mb-4 border border-white shadow mx-n5 blur position-relative z-index-1 d-flex flex-column border-radius-md">
                                    <h3 class="mt-4 text-dark font-weight-bolder">Corporate Dashboard UI</h3>
                                    <p class="text-dark">Just as it takes a company to sustain a product, it takes a
                                        community to sustain a protocol.</p>
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

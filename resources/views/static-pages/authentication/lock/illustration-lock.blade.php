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
                            <div class="border-0 card card-plain py-lg-3">
                                <div class="text-center card-body">
                                    <h4 class="mb-0 font-weight-bolder">Mike Priesler</h4>
                                    <p class="mb-4">Enter password to unlock your account.</p>
                                    <form role="form">
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Password"
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
                        <div
                            class="top-0 my-auto text-center col-6 d-lg-flex d-none h-100 pe-0 position-absolute end-0 justify-content-center flex-column">
                            <div class="bg-cover position-relative bg-gradient-primary h-100 px-7 d-flex flex-column justify-content-center"
                                style="background-image: url('../../../assets/img/bg-orange-2.jpg'); background-position-x: 55%; background-position-y: 5%;">
                                <span class="opacity-4 mask bg-gradient-warning"></span>
                                <div
                                    class="p-5 mt-auto mb-4 border border-white shadow mx-n5 blur position-relative z-index-1 d-flex flex-column border-radius-md">
                                    <h3 class="mt-4 text-dark font-weight-bolder">"Attention is the new currency"</h3>
                                    <p class="text-dark">The more effortless the writing looks, the more effort the
                                        writer actually put into the process.</p>
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

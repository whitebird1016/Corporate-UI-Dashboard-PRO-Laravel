<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content main-content-bg mt-0">
        <section class="min-vh-90">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-5 col-md-7">
                        <div class="mb-4 card z-index-0 mt-sm-12 mt-9">
                            <div class="pt-4 pb-1 text-center card-header">
                                <h4 class="mb-1 font-weight-bolder">Reset password</h4>
                                <p class="mb-0">You will receive an e-mail in maximum 60 seconds</p>
                            </div>
                            <div class="card-body">
                                <form role="form">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email"
                                            aria-label="Email">
                                    </div>
                                    <div class="text-center">
                                        <button type="button" class="my-4 mb-2 btn btn-dark btn-lg w-100">Send</button>
                                    </div>
                                </form>
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

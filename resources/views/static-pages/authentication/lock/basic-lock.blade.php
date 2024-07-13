<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="pt-5 m-3 page-header align-items-start min-vh-40 pb-11 border-radius-lg"
            style="background-image: url('../../../assets/img/bg-orange.jpg'); background-position-y: 30%;">
        </div>
        <div class="container min-vh-65">
            <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
                <div class="mx-auto col-xl-4 col-lg-5 col-md-7">
                    <div class="card py-lg-3">
                        <div class="py-2 text-center card-body">
                            <div class="mb-3 info">
                                <img class="avatar avatar-xxl" alt="Image placeholder"
                                    src="../../../assets/img/team-2.jpg">
                            </div>
                            <h4 class="mb-0 font-weight-bolder">Mike Priesler</h4>
                            <p class="mb-4">Enter password to unlock your account.</p>
                            <form role="form">
                                <div class="mb-3">
                                    <input type="password" class="form-control" placeholder="Password"
                                        aria-label="password">
                                </div>
                                <div class="text-center">
                                    <button type="button" class="mt-3 mb-0 btn btn-lg btn-dark">Unlock</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

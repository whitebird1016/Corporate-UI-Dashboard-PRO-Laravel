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
            <div class="page-header min-vh-85">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-xl-4 col-lg-5 col-md-6 d-flex flex-column">
                            <div class="mt-8 border-0 card card-plain">
                                <div class="pb-0 card-header text-start">
                                    <h3 class="font-weight-bolder text-dark">Welcome back</h3>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form" class="text-start">
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control"
                                                placeholder="Enter your email address" aria-label="Email">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder=""
                                                aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe"
                                                checked="">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="mt-4 mb-0 btn btn-dark w-100">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-1 pt-0 text-center card-footer px-lg-2">
                                    <p class="mx-auto mb-4 text-sm">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-dark  font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-0 position-absolute w-45 h-100 d-md-block end-0 d-none">
                                <div class="bg-cover position-absolute fixed-top me-n8 border-radius-lg ms-auto h-100 z-index-0"
                                    style="background-image:url('../../../assets/img/bg-blue.jpg'); background-position: 50%;">
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

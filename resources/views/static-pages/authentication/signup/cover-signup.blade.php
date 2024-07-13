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
                            <div class="border-0 card card-plain mt-sm-8 mt-7 mt-md-5">
                                <div class="pb-0 text-left card-header">
                                    <h2 class="text-dark">Join us today</h2>
                                    <p class="mb-0 font-sm">Enter your email and password to register</p>
                                </div>
                                <div class="pb-3 card-body">
                                    <form role="form">
                                        <label>Name</label>
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="Enter your name"
                                                aria-label="Name">
                                        </div>
                                        <label>Email</label>
                                        <div class="mb-2">
                                            <input type="email" class="form-control"
                                                placeholder="Enter your email address" aria-label="Email">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control" placeholder="Create a password"
                                                aria-label="Password">
                                        </div>
                                        <div class="text-left form-check form-check-info">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                I agree the <a href="../../../pages/privacy.html"
                                                    class="text-dark font-weight-bolder">Terms and Conditions</a>
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="mt-4 mb-0 btn btn-dark w-100">Sign up</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-1 pt-0 text-center card-footer px-sm-4">
                                    <p class="mx-auto mb-4">
                                        Already have an account?
                                        <a href="../../../pages/sign-in/sign-in-cover.html"
                                            class="text-primary  font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="top-0 position-absolute h-100 end-0 d-md-block d-none w-45">
                                <div class="bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 me-n8 border-radius-lg"
                                    style="background-image:url('../../../assets/img/bg-purple.jpg')"></div>
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

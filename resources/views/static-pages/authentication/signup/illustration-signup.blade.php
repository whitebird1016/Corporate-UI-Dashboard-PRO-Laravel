<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <x-sidenav-white />
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
                                    <h1 class="font-weight-bolder">Sign Up</h1>
                                    <p class="mb-0">Enter your email and password to register</p>
                                </div>
                                <div class="pb-3 card-body">
                                    <form role="form">
                                        <label>Name</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Enter your name"
                                                aria-label="Name">
                                        </div>
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control"
                                                placeholder="Enter your email address" aria-label="Email">
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" class="form-control"
                                                placeholder="Enter your password" aria-label="Password">
                                        </div>
                                        <div class="text-left form-check form-check-info">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault" checked>
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
                                            class="text-dark  font-weight-bold">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="top-0 my-auto text-center col-6 d-lg-flex d-none h-100 pe-0 position-absolute end-0 justify-content-center flex-column">
                            <div class="bg-cover position-relative bg-gradient-primary h-100 px-7 d-flex flex-column justify-content-center"
                                style="background-image: url('../../../assets/img/bg-purple.jpg'); background-position-x: 65%; background-position-y: 85%;">
                                <div
                                    class="p-5 mt-auto mb-4 border border-white shadow mx-n5 blur position-relative z-index-1 d-flex flex-column border-radius-md">
                                    <h3 class="mt-4 text-white font-weight-bolder">Your journey starts here</h3>
                                    <p class="text-white">Just as it takes a company to sustain a product, it takes a
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

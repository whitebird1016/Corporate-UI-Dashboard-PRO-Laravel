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
                                <div class="pb-0 card-header text-start">
                                    <h4 class="font-weight-bolder">Sign In</h4>
                                    <p class="mb-0">Enter your email and password to sign in</p>
                                </div>
                                <div class="card-body">
                                    <form role="form">
                                        <div class="mb-3">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control"
                                                placeholder="Enter your email address" aria-label="Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder=""
                                                aria-label="Password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember me</label>
                                        </div>
                                        <div class="text-center">
                                            <button type="button" class="mt-4 mb-0 btn btn-lg btn-dark w-100">Sign
                                                in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="px-1 pt-0 text-center card-footer px-lg-2">
                                    <p class="mx-auto mb-4 text-sm">
                                        Don't have an account?
                                        <a href="javascript:;" class="text-primary  font-weight-bold">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="top-0 my-auto text-center col-6 d-lg-flex d-none h-100 pe-0 position-absolute end-0 justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 px-7 d-flex flex-column justify-content-center"
                                style="background-image: url('../../../assets/img/bg-blue.jpg'); background-position: 50%;">
                                <div
                                    class="p-5 mt-auto mb-4 border border-white shadow mx-n5 blur position-relative z-index-1 d-flex flex-column border-radius-md">
                                    <h4 class="mt-5 opacity-10 text-dark font-weight-bolder">"Attention is the new
                                        currency"</h4>
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

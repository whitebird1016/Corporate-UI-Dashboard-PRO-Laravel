<nav
    class="navbar navbar-expand-lg bg-white rounded-2 top-0 mt-4 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('default') }}">
            Corporate UI Dashboard PRO
        </a>
        <button class="shadow-none navbar-toggler ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="mt-2 navbar-toggler-icon">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="pt-3 pb-2 collapse navbar-collapse w-100 py-lg-0 align-items-center" id="navigation">
            <div class="col-9 d-flex justify-content-center">
                <span>
                    <p class=" text-m text-center d-inline p-3"><a href="login"
                            class="text-dark font-weight-bolder">Sign in</a></p>
                </span>
                <span>
                    <p class=" text-m text-center d-inline p-3"><a href="register"
                            class="text-dark font-weight-bolder">Sign up</a></p>
                </span>
            </div>
            <div class="col">
                <span>
                    <ul class="navbar-nav d-lg-block  justify-content-end d-lg-flex ">
                        <li class="nav-item ">
                            <a href="https://www.creative-tim.com/product/corporate-ui-dashboard-pro-laravel"
                                class=" btn btn-sm  btn-dark  mb-0 me-1 " target="_blank"
                                onclick="smoothToPricing('pricing-corporate-ui')">Buy Now</a>
                        </li>
                    </ul>
                </span>
            </div>
            </ul>
        </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg bg-white rounded-2 top-0 mt-4 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid">
      <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{ route('dashboard') }}">
        Corporate UI Dashboard PRO
      </a>
      <button class="shadow-none navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="mt-2 navbar-toggler-icon">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="pt-3 pb-2 collapse navbar-collapse w-100 py-lg-0 align-items-center" id="navigation">
        <ul class="mx-auto navbar-nav navbar-nav-hover align-items-center">
          <span>
            <p class=" text-m text-center d-inline p-5"><a href="login" class="text-dark font-weight-bolder">Sign in</a></p>
          </span>
          <span>
            <p class=" text-m text-center d-inline p-3"><a href="register" class="text-dark font-weight-bolder">Sign up</a></p>
          </span>
        </ul>
        <ul class="navbar-nav d-lg-block d-none">
          <li class="nav-item">
            <a href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" class="btn btn-sm  btn-dark  mb-0 me-1" onclick="smoothToPricing('pricing-soft-ui')">Buy Now</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> --}}
<!-- End Navbar -->

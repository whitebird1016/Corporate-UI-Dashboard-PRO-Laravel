<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section class="mt-9">
            <div class="container">
                <div class="row">
                    <div class="my-auto text-center col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <h1 class="display-1 text-bolder text-danger text-primary">500</h1>
                            <h1 class="display-1 text-bolder text-dark">Ooops!</h1>
                            <h2>Something went wrong.</h2>
                            <img class="w-100 me-auto ms-0 position-relative" src="../../../assets/img/bg-500.jpeg"
                                alt="404-error">
                            <p class="px-12 lead">This page doesn’t exist or was removed!</p>
                            <p class="px-12 lead">We suggest you to go back home.</p>
                            <button type="button" class="mx-auto mt-4 btn btn-dark">
                                <i class="text-xs fas me-1 fa-home"></i>
                                <span>Go to Homepage</span>
                            </button>
                            <div class="card-footer"></div>
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

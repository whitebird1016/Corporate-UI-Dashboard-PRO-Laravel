<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-3 mt-lg-4 row">
                <div class="mx-auto col-md-8 col-sm-10">
                    <form class="" action="index.html" method="post">
                        <div class="border border-white shadow-xs card blur my-sm-5">
                            <div class="px-4 pt-4 text-center bg-transparent card-header">
                                <div class="row justify-content-between">
                                    <div class="mt-3 col-md-4 text-start">
                                        <h6>
                                            St. Independence Embankment, 050105 Bucharest, Romania
                                        </h6>
                                        <p class="d-block text-secondary">tel: +4 (074) 1090873</p>
                                    </div>
                                    <div class="mt-3 col-lg-3 col-md-7 text-md-end text-start">
                                        <h6 class="mt-2 mb-0 d-block">Billed to: John Doe</h6>
                                        <p class="text-secondary">4006 Locust View Drive<br>
                                            San Francisco CA<br>
                                            California
                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="row justify-content-md-between">
                                    <div class="mt-auto col-md-4">
                                        <h6 class="mb-0 text-start text-secondary">
                                            Invoice no
                                        </h6>
                                        <h5 class="mb-0 text-start">
                                            #0453119
                                        </h5>
                                    </div>
                                    <div class="mt-auto col-lg-5 col-md-7">
                                        <div class="mt-4 row mt-md-5 text-md-end text-start">
                                            <div class="col-md-6">
                                                <h6 class="mb-0 text-secondary">Invoice date:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="mb-0 text-dark">20/07/2021</h6>
                                            </div>
                                        </div>
                                        <div class="row text-md-end text-start">
                                            <div class="col-md-6">
                                                <h6 class="mb-0 text-secondary">Due date:</h6>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="mb-0 text-dark">29/07/2021</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table text-right">
                                                <thead class="text-white bg-dark">
                                                    <tr>
                                                        <th scope="col" class="rounded-start pe-2 text-start ps-2">
                                                            Item</th>
                                                        <th scope="col" class="pe-2">Qty</th>
                                                        <th scope="col" class="pe-2" colspan="2">Rate</th>
                                                        <th scope="col" class="rounded-end pe-2">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-sm text-dark text-start">Premium Support</td>
                                                        <td class="text-sm text-dark ps-4">1</td>
                                                        <td class="text-sm text-dark ps-4" colspan="2">$ 9.00</td>
                                                        <td class="text-sm text-dark ps-4">$ 9.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-sm text-dark text-start">Corporate - Dashboard
                                                            PRO</td>
                                                        <td class="text-sm text-dark ps-4">3</td>
                                                        <td class="text-sm text-dark ps-4" colspan="2">$ 99.00</td>
                                                        <td class="text-sm text-dark ps-4">$ 297.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-sm text-dark text-start">Parts for service</td>
                                                        <td class="text-sm text-dark ps-4">1</td>
                                                        <td class="text-sm text-dark ps-4" colspan="2">$ 89.00</td>
                                                        <td class="text-sm text-dark ps-4">$ 89.00</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th class="h5 ps-4" colspan="2">Total</th>
                                                        <th colspan="1" class="text-right h5 ps-4">$ 395.00</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 pb-4 mt-4 card-footer mt-md-5">
                                <div class="row">
                                    <div class="text-left col-lg-5">
                                        <h5>Thank you!</h5>
                                        <p class="text-sm text-secondary">If you encounter any issues related to the
                                            invoice you can contact us at:</p>
                                        <h6 class="mb-0 text-secondary">
                                            email:
                                            <span class="text-dark">support@creative-tim.com</span>
                                        </h6>
                                    </div>
                                    <div class="mt-3 col-lg-7 text-md-end mt-md-0">
                                        <button class="mb-0 text-white btn bg-dark mt-lg-7" onClick="window.print()"
                                            type="button" name="button"><i
                                                class="fa-solid fa-print me-2"></i>Print</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

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

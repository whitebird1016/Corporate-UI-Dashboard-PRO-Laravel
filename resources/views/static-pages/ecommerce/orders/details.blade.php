<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-4 row min-vh-80">
                <div class="mx-auto col-lg-8">
                    <div class="mb-4 blur card">
                        <div class="pb-0 card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6>Order Details</h6>
                                    <p class="mb-0 text-sm">
                                        Order no. <b>241342</b> from <b>23.02.2021</b>
                                    </p>
                                    <p class="text-sm">
                                        Code: <b>KF332</b>
                                    </p>
                                </div>
                                <a href="javascript:;"
                                    class="mb-0 btn btn-dark ms-auto d-flex justify-content-center align-items-center">
                                    <svg class="me-2" width="14" height="14" viewBox="0 0 14 14" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M2.80078 2.80002C2.80078 2.02683 3.42758 1.40002 4.20078 1.40002H7.41084C7.78212 1.40002 8.13821 1.54752 8.40078 1.81008L10.7907 4.20002C11.0533 4.46257 11.2008 4.81867 11.2008 5.18997V11.2C11.2008 11.9732 10.574 12.6 9.80078 12.6H4.20078C3.42758 12.6 2.80078 11.9732 2.80078 11.2V2.80002Z"
                                            fill="#F9FAFB" />
                                    </svg>
                                    Invoice</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <hr class="mt-0 mb-4 horizontal dark">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="d-flex">
                                        <div>
                                            <img src="../../../assets/img/kadarius-seegars-0FHNXqyqgg4-unsplash.jpg"
                                                class="avatar avatar-xxl me-3" alt="product image">
                                        </div>
                                        <div>
                                            <h6 class="mt-2 mb-0 text-lg">Aromatherapy Oil</h6>
                                            <p class="mb-3 text-sm">Order was delivered 2 days ago.</p>
                                            <span class="badge badge-sm badge-success">
                                                <i class="fas fa-check"></i>
                                                Delivered</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-auto col-lg-6 col-md-6 col-12 text-end">
                                    <a href="javascript:;" class="mb-0 btn btn-white">Contact Us</a>
                                    <p class="mt-2 mb-0 text-sm">Do you like the product? Leave us a review <a
                                            href="javascript:;">here</a>.</p>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4 horizontal dark">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-12">
                                    <h6 class="mb-3">Track order</h6>
                                    <div class="timeline timeline-one-side">
                                        <div class="mb-3 timeline-block">
                                            <span class="timeline-step">
                                                <i class="ni ni-bell-55 text-info"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <h6 class="mb-0 text-sm text-dark font-weight-bold">Order received</h6>
                                                <p class="mt-1 mb-0 text-xs text-secondary font-weight-bold">22 DEC 7:20
                                                    AM</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 timeline-block">
                                            <span class="timeline-step">
                                                <i class="ni ni-html5 text-info"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <h6 class="mb-0 text-sm text-dark font-weight-bold">Generate order id
                                                    #1832412</h6>
                                                <p class="mt-1 mb-0 text-xs text-secondary font-weight-bold">22 DEC 7:21
                                                    AM</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 timeline-block">
                                            <span class="timeline-step">
                                                <i class="ni ni-cart text-info"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <h6 class="mb-0 text-sm text-dark font-weight-bold">Order transmited to
                                                    courier</h6>
                                                <p class="mt-1 mb-0 text-xs text-secondary font-weight-bold">22 DEC 8:10
                                                    AM</p>
                                            </div>
                                        </div>
                                        <div class="mb-3 timeline-block">
                                            <span class="timeline-step">
                                                <i class="ni ni-check-bold text-info"></i>
                                            </span>
                                            <div class="timeline-content">
                                                <h6 class="mb-0 text-sm text-dark font-weight-bold">Order delivered</h6>
                                                <p class="mt-1 mb-0 text-xs text-secondary font-weight-bold">22 DEC 4:54
                                                    PM</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-12">
                                    <h6 class="mb-3">Payment details</h6>
                                    <div
                                        class="flex-row border card card-body card-plain border-radius-lg d-flex align-items-center">
                                        <img class="w-10 mb-0 me-3" src="../../../assets/img/logos/mastercard.png"
                                            alt="logo">
                                        <h6 class="mb-0">
                                            ****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                                        <button type="button"
                                            class="mb-0 btn btn-icon-only btn-rounded btn-white ms-2 btn-sm d-flex align-items-center justify-content-center ms-auto"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="We do not store card details">
                                            <i class="fas fa-info" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                    <h6 class="mt-4 mb-3">Billing Information</h6>
                                    <ul class="list-group">
                                        <li
                                            class="p-4 mb-2 bg-gray-100 border-0 list-group-item d-flex border-radius-lg">
                                            <div class="d-flex flex-column">
                                                <h6 class="mb-3 text-sm">Oliver Liam</h6>
                                                <span class="mb-2 text-xs">Company Name: <span
                                                        class="text-dark font-weight-bold ms-2">Viking
                                                        Burrito</span></span>
                                                <span class="mb-2 text-xs">Email Address: <span
                                                        class="text-dark ms-2 font-weight-bold">oliver@burrito.com</span></span>
                                                <span class="text-xs">VAT Number: <span
                                                        class="text-dark ms-2 font-weight-bold">FRB1235476</span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-12 ms-auto">
                                    <h6 class="mb-3">Order Summary</h6>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">
                                            Product Price:
                                        </span>
                                        <span class="text-dark font-weight-bold ms-2">$90</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="mb-2 text-sm">
                                            Delivery:
                                        </span>
                                        <span class="text-dark ms-2 font-weight-bold">$14</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="text-sm">
                                            Taxes:
                                        </span>
                                        <span class="text-dark ms-2 font-weight-bold">$1.95</span>
                                    </div>
                                    <div class="mt-4 d-flex justify-content-between">
                                        <span class="mb-2 text-lg">
                                            Total:
                                        </span>
                                        <span class="text-lg text-dark ms-2 font-weight-bold">$105.95</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

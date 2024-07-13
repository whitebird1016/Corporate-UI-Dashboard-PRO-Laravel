<x-app-layout>

    <div class="container top-0 position-sticky z-index-sticky">
        <div class="row">
            <div class="col-12">
                <x-sidenav-white />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header min-vh-100" style="background-image: url('../../../assets/img/bg-gray.jpg');">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-7">
                        <div class="card">
                            <div class="text-center card-body px-lg-4 py-lg-5">
                                <div class="mb-4 info">
                                    <div class="py-3 mx-auto text-center bg-cover rounded shadow icon icon-shape icon-lg"
                                        style="background-image: url('../../../assets/img/header-blue-purple.jpg');">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.99922 3.2002C8.88287 3.2002 9.59922 3.91655 9.59922 4.8002V6.4002H11.1992C12.0829 6.4002 12.7992 7.11655 12.7992 8.0002C12.7992 8.88384 12.0829 9.60019 11.1992 9.60019H9.59922V11.2002C9.59922 12.0838 8.88287 12.8002 7.99922 12.8002C7.11557 12.8002 6.39922 12.0838 6.39922 11.2002V9.60019H4.79922C3.91557 9.60019 3.19922 8.88384 3.19922 8.0002C3.19922 7.11655 3.91557 6.4002 4.79922 6.4002H6.39922V4.8002C6.39922 3.91655 7.11557 3.2002 7.99922 3.2002ZM7.99922 19.2002C8.88287 19.2002 9.59922 19.9165 9.59922 20.8002V22.4002H11.1992C12.0829 22.4002 12.7992 23.1165 12.7992 24.0002C12.7992 24.8839 12.0829 25.6002 11.1992 25.6002H9.59922V27.2002C9.59922 28.0839 8.88287 28.8002 7.99922 28.8002C7.11557 28.8002 6.39922 28.0839 6.39922 27.2002V25.6002H4.79922C3.91557 25.6002 3.19922 24.8839 3.19922 24.0002C3.19922 23.1165 3.91557 22.4002 4.79922 22.4002H6.39922V20.8002C6.39922 19.9165 7.11557 19.2002 7.99922 19.2002Z"
                                                fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M19.2014 3.2002C19.9275 3.2002 20.5624 3.68896 20.7483 4.39077L22.635 11.5185L28.0011 14.6143C28.4963 14.9001 28.8014 15.4284 28.8014 16.0002C28.8014 16.572 28.4963 17.1004 28.0011 17.3861L22.635 20.482L20.7483 27.6096C20.5624 28.3114 19.9275 28.8002 19.2014 28.8002C18.4755 28.8002 17.8404 28.3114 17.6547 27.6096L15.768 20.482L10.402 17.3861C9.90671 17.1004 9.60156 16.572 9.60156 16.0002C9.60156 15.4284 9.90671 14.9 10.402 14.6143L15.768 11.5185L17.6547 4.39077C17.8404 3.68896 18.4755 3.2002 19.2014 3.2002Z"
                                                fill="white" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="mb-4 text-center text-muted">
                                    <h2>2-Step Verification</h2>
                                </div>
                                <div class="px-3 row gx-2">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" maxlength="1"
                                                autocomplete="off" autocapitalize="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" maxlength="1"
                                                autocomplete="off" autocapitalize="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" maxlength="1"
                                                autocomplete="off" autocapitalize="off">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg" maxlength="1"
                                                autocomplete="off" autocapitalize="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" class="btn btn-dark w-100">Send code</button>
                                    <span class="text-sm text-muted">Haven't received it?<a href="javascript:;"> Resend
                                            a new code</a>.</span>
                                </div>
                            </div>
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

<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-6 pt-2 row">
                <div class="col-sm-6">
                    <select class="form-control" name="choices-questions" id="choices-questions">
                        <option value="Question 1">Question</option>
                        <option value="Question 2">Question 2</option>
                        <option value="Question 3">Question 3</option>
                        <option value="Your Question" disabled>Your Question</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Enter your answer">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mt-4">
                        <div class="card">
                            <div class="card-header pb-0 p-3">
                                <h6 class="mb-0">Security Settings</h6>
                            </div>
                            <div class="card-body p-3">
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <span class="text-sm">Notify me via email when logging in</span>
                                    <div class="form-check form-switch ms-3">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault30"
                                            checked="" onchange="visible()">
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <span class="text-sm">Send SMS confirmation for all online payments</span>
                                    <div class="form-check form-switch ms-3">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault31"
                                            onchange="visible()">
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <span class="text-sm">Check which devices accessed your account</span>
                                    <div class="form-check form-switch ms-3">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault32"
                                            checked="" onchange="visible()">
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <span class="text-sm">Find My Device, make sure your device can be found if it gets
                                        lost</span>
                                    <div class="form-check form-switch ms-3">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault33"
                                            onchange="visible()">
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <span class="text-sm">Lock your device with a PIN, pattern, or password</span>
                                    <div class="form-check form-switch ms-3">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault34"
                                            onchange="visible()">
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <span class="text-sm">Manage what apps have access to app-usage data on your
                                        device</span>
                                    <div class="form-check form-switch ms-3">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault35"
                                            checked="" onchange="visible()">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-8 col-12 actions text-end ms-auto">
                                        <button class="btn btn-white btn-sm mb-0" type="reset">Cancel</button>
                                        <button class="btn btn-dark btn-sm mb-0" type="button">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="card">
                            <div class="card-header p-3 pb-0">
                                <h6 class="mb-1">Change password</h6>
                                <p class="text-sm mb-0">
                                    We will send you an email with the verification code.
                                </p>
                            </div>
                            <div class="card-body p-3">
                                <label class="form-label">Current password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Current password">
                                </div>
                                <label class="form-label">New password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="New password">
                                </div>
                                <label class="form-label">Confirm new password</label>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Confirm password">
                                </div>
                                <button class="btn btn-dark w-100 mb-0">Update password</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4 col-md-6 mt-md-0">
                    <div class="mt-4">
                    </div>
                    <div class="card">
                        <img src="../../../assets/img/header-blue-purple.jpg" alt="pattern-lines"
                            class="top-0 rounded-2 position-absolute start-0 w-100 h-100">
                        <div class="p-3 card-body z-index-2 border-radius-lg">
                            <h6 class="mb-0 text-white">
                                Questions about security?
                            </h6>
                            <p class="mb-4 text-sm text-white">
                                Two-factor authentication adds an additional layer of security to your account by
                                requiring more than just a password to log in.
                            </p>
                            <button class="mb-0 btn btn-outline-white">Contact Us</button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="card">
                            <div class="p-3 pb-0 card-header">
                                <div class="d-flex align-items-center">
                                    <h6 class="mb-0">
                                        Two factor authentication
                                    </h6>
                                    <button class="mb-0 btn btn-sm btn-dark ms-auto">
                                        Enable
                                    </button>
                                </div>
                            </div>
                            <div class="p-3 card-body">
                                <p class="text-sm text-muted">
                                    Two-factor authentication adds an additional
                                    layer of security to your account by requiring more
                                    than just a password to log in.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="card">
                            <div class="card-header p-3 pb-0">
                                <h6 class="mb-1">
                                    Password requirements
                                </h6>
                                <p class="text-sm mb-0">
                                    Please follow this guide for a strong password:
                                </p>
                            </div>
                            <div class="card-body p-3">
                                <ul class="text-muted ps-4 mb-0">
                                    <li>
                                        <span class="text-sm">One special characters</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">Min 6 characters</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">One number (2 are recommended)</span>
                                    </li>
                                    <li>
                                        <span class="text-sm">Change it often</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 row gx-4">
                <div class="col-md-6">
                </div>
                <div class="mt-4 col-md-6 mt-md-0">
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script>
    if (document.getElementById('choices-questions')) {
        var element = document.getElementById('choices-questions');
        const example = new Choices(element);
    }
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

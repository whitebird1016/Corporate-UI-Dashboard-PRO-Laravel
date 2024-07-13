<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="top-0 bg-cover z-index-n1 min-height-100 max-height-200 h-25 position-absolute w-100 start-0 end-0"
            style="background-image: url('../../../assets/img/header-blue-purple.jpg'); background-position: bottom;">
        </div>
        <div class="px-5 py-4 container-fluid">
            <div class="mt-5 mb-5 mt-lg-9 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Profile</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card card-body" id="profile">
                        <img src="../../../assets/img/header-orange-purple.jpg" alt="pattern-lines"
                            class="top-0 rounded-2 position-absolute start-0 w-100 h-100">
                        <div class="row z-index-2 justify-content-center align-items-center">
                            <div class="col-sm-auto col-4">
                                <div class="avatar avatar-xl position-relative">
                                    <img src="../../../assets/img/team-1.jpg" alt="bruce"
                                        class="w-100 border-radius-lg shadow-sm">
                                </div>
                            </div>
                            <div class="col-sm-auto col-8 my-auto">
                                <div class="h-100">
                                    <h5 class="mb-1 font-weight-bolder">
                                        Alexa Johnson
                                    </h5>
                                    <p class="mb-0 font-weight-bold text-sm">
                                        CEO / Co-Founder
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                                <div class="form-check form-switch ms-2">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23"
                                        checked onchange="visible()">
                                </div>
                                <label class="text-white form-check-label mb-0">
                                    <small id="profileVisibility">
                                        Switch to invisible
                                    </small>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Basic Info</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="basic-info">
                        <div class="card-header">
                            <h5>Basic Info</h5>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label">First Name</label>
                                    <div class="input-group">
                                        <input id="firstName" name="firstName" class="form-control" type="text"
                                            placeholder="e.g. Alexa" required="required">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Last Name</label>
                                    <div class="input-group">
                                        <input id="lastName" name="lastName" class="form-control" type="text"
                                            placeholder="e.g. Johnson" required="required">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4 col-6">
                                    <label class="mt-4 form-label">I'm</label>
                                    <select class="form-control" name="choices-gender" id="choices-gender">
                                        <option value="Female">Female</option>
                                        <option value="Male">Male</option>
                                    </select>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-5 col-5">
                                            <label class="mt-4 form-label">Birth Date</label>
                                            <select class="form-control" name="choices-month"
                                                id="choices-month"></select>
                                        </div>
                                        <div class="col-sm-4 col-3">
                                            <label class="mt-4 form-label">&nbsp;</label>
                                            <select class="form-control" name="choices-day" id="choices-day"></select>
                                        </div>
                                        <div class="col-sm-3 col-4">
                                            <label class="mt-4 form-label">&nbsp;</label>
                                            <select class="form-control" name="choices-year" id="choices-year"></select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="mt-4 form-label">Email</label>
                                    <div class="input-group">
                                        <input id="email" name="email" class="form-control" type="email"
                                            placeholder="example@email.com">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label class="mt-4 form-label">Phone Number</label>
                                    <div class="input-group">
                                        <input id="phone" name="phone" class="form-control" type="number"
                                            placeholder="+40 941 538 024">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label class="mt-4 form-label">Your location</label>
                                    <div class="input-group">
                                        <input id="location" name="location" class="form-control" type="text"
                                            placeholder="Sydney, A">
                                    </div>
                                </div>
                                <div class="col-md-6 align-self-center">
                                    <label class="mt-4 form-label">Language</label>
                                    <select class="form-control" name="choices-language" id="choices-language">
                                        <option value="English">English</option>
                                        <option value="French">French</option>
                                        <option value="Spanish">Spanish</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mt-4 form-label">Skills</label>
                                    <input class="form-control" id="choices-skills" type="text"
                                        value="vuejs, angular, react" placeholder="Enter something" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Password Settings</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="password">
                        <div class="card-header">
                            <h5>Change Password</h5>
                        </div>
                        <div class="pt-0 card-body">
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
                            <h5 class="mt-5">Password requirements</h5>
                            <p class="mb-2 text-muted">
                                Please follow this guide for a strong password:
                            </p>
                            <ul class="mb-0 text-muted ps-4 float-start">
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
                            <button class="mt-6 mb-0 btn btn-white btn-sm float-end">Update password</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Authentication</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="2fa">
                        <div class="card-header d-flex">
                            <h5 class="mb-0">Two-factor authentication</h5>
                            <span class="my-auto badge badge-success ms-auto">ENABLED</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="my-auto">Security keys</p>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">No Security Keys</p>
                                <button class="mb-0 btn btn-sm btn-white" type="button">Add</button>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <p class="my-auto">SMS number</p>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">+4012374423</p>
                                <button class="mb-0 btn btn-sm btn-white" type="button">Edit</button>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <p class="my-auto">Authenticator app</p>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">Not Configured</p>
                                <button class="mb-0 btn btn-sm btn-white" type="button">Set up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Other Accounts</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="accounts">
                        <div class="card-header">
                            <h5>Accounts</h5>
                            <p class="text-sm">Here you can setup and manage your integration settings.</p>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="d-flex">
                                <img class="width-48-px" src="../../../assets/img/small-logos/logo-slack.svg"
                                    alt="logo_slack">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Slack</h5>
                                        <a class="text-sm text-body" href="javascript:;">Show less <i
                                                class="text-xs fas fa-chevron-up ms-1" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">Enabled</p>
                                <div class="my-auto form-check form-switch">
                                    <input class="form-check-input" checked type="checkbox"
                                        id="flexSwitchCheckDefault1">
                                </div>
                            </div>
                            <div class="pt-3 ps-5 ms-3">
                                <p class="mb-0 text-sm">You haven't added your Slack yet or you aren't authorized.
                                    Please add our Slack Bot to your account by clicking on <a
                                        href="javascript">here</a>. When you've added the bot, send your verification
                                    code that you have received.</p>
                                <div class="p-2 my-4 bg-gray-100 d-sm-flex border-radius-lg">
                                    <p class="my-auto text-sm font-weight-bold ps-sm-2">Verification Code</p>
                                    <input class="w-40 mt-2 form-control form-control-sm ms-sm-auto mt-sm-0 w-sm-15"
                                        type="text" value="1172913" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Copy!">
                                </div>
                                <div class="p-2 my-4 bg-gray-100 d-sm-flex border-radius-lg">
                                    <p class="my-auto text-sm font-weight-bold ps-sm-2">Connected account</p>
                                    <h6 class="my-auto text-sm ms-auto me-3">hello@creative-tim.com</h6>
                                    <button class="mt-2 mb-0 btn btn-sm bg-gradient-danger my-sm-auto" type="button"
                                        name="button">Delete</button>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <img class="width-48-px" src="../../../assets/img/small-logos/logo-spotify.svg"
                                    alt="logo_spotify">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Spotify</h5>
                                        <p class="mb-0 text-sm">Music</p>
                                    </div>
                                </div>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">Enabled</p>
                                <div class="my-auto form-check form-switch">
                                    <input class="form-check-input" checked type="checkbox"
                                        id="flexSwitchCheckDefault2">
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <img class="width-48-px" src="../../../assets/img/small-logos/logo-atlassian.svg"
                                    alt="logo_atlassian">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Atlassian</h5>
                                        <p class="mb-0 text-sm">Payment vendor</p>
                                    </div>
                                </div>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">Enabled</p>
                                <div class="my-auto form-check form-switch">
                                    <input class="form-check-input" checked type="checkbox"
                                        id="flexSwitchCheckDefault3">
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex">
                                <img class="width-48-px" src="../../../assets/img/small-logos/logo-asana.svg"
                                    alt="logo_asana">
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <h5 class="mb-0">Asana</h5>
                                        <p class="mb-0 text-sm">Organize your team</p>
                                    </div>
                                </div>
                                <div class="my-auto form-check form-switch ms-auto">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Notifications</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="notifications">
                        <div class="card-header">
                            <h5>Notifications</h5>
                            <p class="text-sm">Choose how you receive notifications. These notification settings apply
                                to the things you’re watching.</p>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="ps-1" colspan="4">
                                                <p class="mb-0">Activity</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">Email</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">Push</p>
                                            </th>
                                            <th class="text-center">
                                                <p class="mb-0">SMS</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <span class="text-sm text-dark d-block">Mentions</span>
                                                    <span class="text-xs font-weight-normal">Notify when another user
                                                        mentions you in a comment</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault11">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault12">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault13">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <span class="text-sm text-dark d-block">Comments</span>
                                                    <span class="text-xs font-weight-normal">Notify when another user
                                                        comments your item.</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault14">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault15">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault16">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <span class="text-sm text-dark d-block">Follows</span>
                                                    <span class="text-xs font-weight-normal">Notify when another user
                                                        follows you.</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault17">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault18">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckDefault19">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="ps-1" colspan="4">
                                                <div class="my-auto">
                                                    <p class="mb-0 text-sm">Log in from a new device</p>
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault20">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault21">
                                                </div>
                                            </td>
                                            <td>
                                                <div
                                                    class="mb-0 form-check form-switch d-flex align-items-center justify-content-center">
                                                    <input class="form-check-input" checked type="checkbox"
                                                        id="flexSwitchCheckDefault22">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">All Sessions</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="sessions">
                        <div class="pb-3 card-header">
                            <h5>Sessions</h5>
                            <p class="text-sm">This is a list of devices that have logged into your account. Remove
                                those that you do not recognize.</p>
                        </div>
                        <div class="pt-0 card-body">
                            <div class="d-flex align-items-center">
                                <div class="w-5 text-center">
                                    <i class="text-lg fas fa-desktop opacity-6"></i>
                                </div>
                                <div class="my-auto ms-3">
                                    <div class="h-100">
                                        <p class="mb-1 text-sm">
                                            Bucharest 68.133.163.201
                                        </p>
                                        <p class="mb-0 text-xs">
                                            Your current session
                                        </p>
                                    </div>
                                </div>
                                <span class="my-auto badge badge-success badge-sm ms-auto me-3">Active</span>
                                <p class="my-auto text-sm text-secondary me-3">EU</p>
                                <a href="javascript:;" class="my-auto text-sm text-primary icon-move-right">See more
                                    <i class="text-xs fas fa-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex align-items-center">
                                <div class="w-5 text-center">
                                    <i class="text-lg fas fa-desktop opacity-6"></i>
                                </div>
                                <p class="my-auto ms-3">Chrome on macOS</p>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">US</p>
                                <a href="javascript:;" class="my-auto text-sm text-primary icon-move-right">See more
                                    <i class="text-xs fas fa-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                            <hr class="horizontal dark">
                            <div class="d-flex align-items-center">
                                <div class="w-5 text-center">
                                    <i class="text-lg fas fa-mobile opacity-6"></i>
                                </div>
                                <p class="my-auto ms-3">Safari on iPhone</p>
                                <p class="my-auto text-sm text-secondary ms-auto me-3">US</p>
                                <a href="javascript:;" class="my-auto text-sm text-primary icon-move-right">See more
                                    <i class="text-xs fas fa-arrow-right ms-1" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 row">
                <div class="col-lg-3 col-12">
                    <div class="card card-plain pe-lg-5">
                        <h6 class="font-weight-semibold">Delete Account</h6>
                        <p class="text-sm">We’ll credit your account if you need to downgrade during the billing cycle.
                        </p>
                    </div>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="card" id="delete">
                        <div class="card-header">
                            <h5>Delete Account</h5>
                            <p class="mb-0 text-sm">Once you delete your account, there is no going back. Please be
                                certain.</p>
                        </div>
                        <div class="pt-0 card-body d-sm-flex">
                            <div class="mb-4 d-flex align-items-center mb-sm-0">
                                <div>
                                    <div class="mb-0 form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault0">
                                    </div>
                                </div>
                                <div class="ms-2">
                                    <span class="text-sm text-dark font-weight-bold d-block">Confirm</span>
                                    <span class="text-xs d-block">I want to delete my account.</span>
                                </div>
                            </div>
                            <button class="mb-0 btn btn-white ms-auto" type="button"
                                name="button">Deactivate</button>
                            <button class="mb-0 btn bg-gradient-danger ms-2" type="button" name="button">Delete
                                Account</button>
                        </div>
                    </div>
                </div>
            </div>
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script src="../../../assets/js/plugins/choices.min.js"></script>
<script>
    if (document.getElementById('choices-gender')) {
        var gender = document.getElementById('choices-gender');
        const example = new Choices(gender);
    }

    if (document.getElementById('choices-language')) {
        var language = document.getElementById('choices-language');
        const example = new Choices(language);
    }

    if (document.getElementById('choices-skills')) {
        var skills = document.getElementById('choices-skills');
        const example = new Choices(skills, {
            delimiter: ',',
            editItems: true,
            maxItemCount: 5,
            removeItemButton: true,
            addItems: true
        });
    }

    if (document.getElementById('choices-year')) {
        var year = document.getElementById('choices-year');
        setTimeout(function() {
            const example = new Choices(year);
        }, 1);

        for (y = 1900; y <= 2020; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 2020) {
                optn.selected = true;
            }

            year.options.add(optn);
        }
    }

    if (document.getElementById('choices-day')) {
        var day = document.getElementById('choices-day');
        setTimeout(function() {
            const example = new Choices(day);
        }, 1);


        for (y = 1; y <= 31; y++) {
            var optn = document.createElement("OPTION");
            optn.text = y;
            optn.value = y;

            if (y == 1) {
                optn.selected = true;
            }

            day.options.add(optn);
        }

    }

    if (document.getElementById('choices-month')) {
        var month = document.getElementById('choices-month');
        setTimeout(function() {
            const example = new Choices(month);
        }, 1);

        var d = new Date();
        var monthArray = new Array();
        monthArray[0] = "January";
        monthArray[1] = "February";
        monthArray[2] = "March";
        monthArray[3] = "April";
        monthArray[4] = "May";
        monthArray[5] = "June";
        monthArray[6] = "July";
        monthArray[7] = "August";
        monthArray[8] = "September";
        monthArray[9] = "October";
        monthArray[10] = "November";
        monthArray[11] = "December";
        for (m = 0; m <= 11; m++) {
            var optn = document.createElement("OPTION");
            optn.text = monthArray[m];
            // server side month start from one
            optn.value = (m + 1);
            // if june selected
            if (m == 1) {
                optn.selected = true;
            }
            month.options.add(optn);
        }
    }

    function visible() {
        var elem = document.getElementById('profileVisibility');
        if (elem) {
            if (elem.innerHTML == "Switch to visible") {
                elem.innerHTML = "Switch to invisible"
            } else {
                elem.innerHTML = "Switch to visible"
            }
        }
    }

    var openFile = function(event) {
        var input = event.target;

        // Instantiate FileReader
        var reader = new FileReader();
        reader.onload = function() {
            imageFile = reader.result;

            document.getElementById("imageChange").innerHTML = '<img width="200" src="' + imageFile +
                '" class="rounded-circle w-100 shadow" />';
        };
        reader.readAsDataURL(input.files[0]);
    };
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

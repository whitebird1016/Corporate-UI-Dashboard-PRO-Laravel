<x-guest-layout>
    <main class="main-content main-content-bg mt-0">
        <section class="min-vh-90">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-5 col-md-7">
                        <div class="mb-4 card z-index-0 mt-sm-12 mt-9">
                            <div class="pt-4 pb-1 text-center card-header">
                                <h4 class="mb-1 font-weight-bolder">Reset password</h4>
                                <p class="mb-0">Reset your password</p>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div>
                                        <div>Something went wrong!</div>

                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form role="form" action="/reset-password" method="POST">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email"
                                            aria-label="Email" id="email" name="email"
                                            value="{{ old('email', $request->email) }}" required autofocus>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" id="password" class="form-control" name="password"
                                            placeholder="Enter your password" aria-label="Password" id="password"
                                            name="password"required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" id="password_confirmation" class="form-control"
                                            name="password_confirmation" placeholder="Confirm your password"
                                            aria-label="Password" id="password_confirmation"
                                            name="password_confirmation" required>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="my-4 mb-2 btn btn-dark btn-lg w-100">Send</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>

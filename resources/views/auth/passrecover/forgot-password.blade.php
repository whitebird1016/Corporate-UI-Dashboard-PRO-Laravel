<x-guest-layout>
    <main class="main-content main-content-bg mt-0">
        <section class="min-vh-90">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-lg-5 col-md-7">
                        <div class="mb-4 card z-index-0 mt-sm-12 mt-9">
                            <div class="pt-4 pb-1 text-center card-header">
                                <h4 class="mb-1 font-weight-bolder">Reset password</h4>
                                <p class="mb-0">You will receive an e-mail in maximum 60 seconds</p>
                                @if ($errors->any())
                                    <div class="alert alert-danger text-sm" role="alert">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-info text-sm" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger text-sm" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
                            </div>
                            <div class="card-body">
                                <form role="form" action="/forgot-password" method="POST">
                                    {{ csrf_field() }}
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Email"
                                            aria-label="Email" id="email" name="email" value="{{ old('email') }}"
                                            required autofocus>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="my-4 mb-2 btn btn-dark btn-lg w-100">Send</button>
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

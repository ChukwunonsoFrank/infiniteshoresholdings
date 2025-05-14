<x-marketing>
    <!-- Start Sign In Area -->
    <section class="sign-in-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sign-in-image"></div>
                </div>

                <div class="col-lg-6">
                    <div class="sign-in-form">
                        <h2>Sign in</h2>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            @if (session('message'))
                                <div class="alert alert-danger show" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <div class="form-group">
                                <label>Account Number</label>
                                <input type="text" class="form-control" name="account_number" required>
                                <x-input-error :messages="$errors->get('account_number')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div class="form-group">
                                <div class="g-recaptcha mt-4" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 lost-your-password">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="lost-your-password">Forgot your password?</a>
                                    @endif
                                </div>
                            </div>

                            <button type="submit" class="default-btn">Proceed</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign In Area -->
</x-marketing>

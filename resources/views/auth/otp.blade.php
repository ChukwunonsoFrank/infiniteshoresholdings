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
                        <h2>Enter OTP Token</h2>
                        <p class="mb-4">An OTP token has been sent to your email. Input the token to complete the login process.</p>
                        <form method="POST" action="{{ route('login.otp.verify') }}">
                            @csrf
                            @if (session('message'))
                                <div class="alert alert-danger show" role="alert">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <input type="hidden" name="account_number" value="{{ $account_number }}">
                            <input type="hidden" name="password" value="{{ $password }}">
                            <div class="form-group">
                                <label>OTP Token</label>
                                <input type="text" class="form-control" name="token" required>
                            </div>

                            <button type="submit" class="default-btn">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Sign In Area -->
</x-marketing>

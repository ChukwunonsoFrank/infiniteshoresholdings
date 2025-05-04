<x-marketing>
    <!-- Start Open Account Banner -->
    <section class="open-account-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Password Reset</h2>
            </div>

            <div class="open-account-form">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    @if (session('message'))
                        <div class="alert alert-danger show" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" autofocus required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="banner-form-btn">
                                <button type="submit" class="default-btn">
                                    Email Password Reset Link
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- End Open Account Banner -->
</x-marketing>

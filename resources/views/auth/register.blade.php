<x-marketing>
    <!-- Start Open Account Banner -->
    <section class="open-account-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Open An Account</h2>
            </div>

            <div class="open-account-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @if (session('message'))
                        <div class="alert alert-danger show" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}"
                                    required>
                                <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    required>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Gender</label>
                                <select style="display: none;" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Male</span>
                                    <ul class="list">
                                        <li data-value="Male" class="option selected">Male</li>
                                        <li data-value="Female" class="option">Female</li>
                                    </ul>
                                </div>
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" placeholder="dd/mm/yy" name="date_of_birth"
                                    required>
                                <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" name="country" required>
                                <x-input-error :messages="$errors->get('country')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="phone" required>
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required>
                                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Marital Status</label>
                                <select style="display: none;" name="marital_status">
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Other">Other</option>
                                </select>
                                <div class="nice-select" tabindex="0"><span class="current">Single</span>
                                    <ul class="list">
                                        <li data-value="Single" class="option selected">Single</li>
                                        <li data-value="Married" class="option">Married</li>
                                        <li data-value="Divorced" class="option">Divorced</li>
                                        <li data-value="Widowed" class="option">Widowed</li>
                                        <li data-value="Other" class="option">Other</li>
                                    </ul>
                                </div>
                                <x-input-error :messages="$errors->get('marital_status')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="g-recaptcha mt-4" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                        </div>

                        <div class="col-lg-12">
                            <div class="banner-form-btn">
                                <button type="submit" class="default-btn">
                                    Submit
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

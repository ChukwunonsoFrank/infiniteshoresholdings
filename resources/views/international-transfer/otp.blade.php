<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-fluid flex-grow-1 container-p-y">


            <div class="container-fluid px-0">
                <div class="row">

                    <h6 class="text-uppercase fw-bold">OTP Token</h6>
                    @if (session('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif

                    <div class="col-md-12 px-0">
                        <div class="card px-0">
                            <div class="card-body">
                                <form action="/international-transfer" method="POST">
                                    @csrf
                                    <input name="amount" value="{{ $amount }}" required="" hidden="">
                                    <input name="account_number" value="{{ $account_number }}" required=""
                                        hidden="">
                                    <input name="receipient_name" value="{{ $receipient_name }}" required=""
                                        hidden="">
                                    <input name="receipient_bank" value="{{ $receipient_bank }}" required=""
                                        hidden="">
                                    <input name="swift_code" value="{{ $swift_code }}" required="" hidden="">
                                    <input name="description" value="{{ $description }}" required="" hidden="">
                                    <input name="bank_country" value="{{ $bank_country }}" required="" hidden="">
                                    <input name="account_type" value="{{ $account_type }}" required="" hidden="">
                                    <div class="mb-4">
                                        <p>An OTP Token was sent to your email address. Please provide the token below
                                            to continue your transaction.</p>
                                    </div>
                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Token</label>
                                        <input type="text" class="form-control" id="amount" name="otp_token"
                                            placeholder="">
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end">Make Transfer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- / Content -->

        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
</x-app-layout>

<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-fluid flex-grow-1 container-p-y">


            <div class="container-fluid px-0">
                <div class="row">

                    <h6 class="text-uppercase fw-bold">International Transfer</h6>
                    @if (session('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif

                    <div class="col-md-12 px-0">
                        <div class="card px-0">
                            <div class="card-body">
                                <form action="/international-transfer/otp" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Amount</label>
                                        <input type="text" class="form-control" id="amount" name="amount"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Account Number</label>
                                        <input type="text" class="form-control" id="amount" name="account_number"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Account Type</label>
                                        <input type="text" class="form-control" id="amount" name="account_type"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Account Name</label>
                                        <input type="text" class="form-control" id="amount" name="receipient_name"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Bank Name</label>
                                        <input type="text" class="form-control" id="amount" name="receipient_bank"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Bank Country</label>
                                        <input type="text" class="form-control" id="amount" name="bank_country"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">SWIFT Code</label>
                                        <input type="text" class="form-control" id="amount" name="swift_code"
                                            placeholder="">
                                    </div>

                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">Description</label>
                                        <input type="text" class="form-control" id="amount" name="description"
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

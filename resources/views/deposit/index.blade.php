<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-fluid flex-grow-1 container-p-y">


            <div class="container-fluid px-0">
                <div class="row">

                  <h6 class="text-uppercase fw-bold">Deposits</h6>
                    @if (session('message'))
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                        </div>
                    @endif

                    <div class="col-md-12 px-0">
                        <div class="card px-0">
                            <div class="card-body">
                                <form action="/deposit/initiate" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label id="amount_label" for="amount" class="form-label">How much
                                            would you like to add? </label>
                                        <input type="text" class="form-control" id="amount" name="amount"
                                            placeholder="Enter the amount (Numbers only)">
                                    </div>

                                    <div class="mb-4">
                                        <label for="method" class="form-label">Select your payment method</label>
                                        <select class="form-select" id="method" name="payment_method" required>
                                            <option readonly disabled selected>--- Select payment method ---</option>
                                            <option value="bitcoin">Bitcoin</option>
                                            <option value="ethereum">Ethereum</option>
                                            <option value="usdt">USDT(BEP 20)</option>
                                            <option value="binance">Binance Coin(BNB)</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary float-end">Proceed</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12 mt-4 px-0">
                        <div class="card px-0">
                            <div class="card-header text-uppercase" style="font-size: 12px;">
                              Pending Deposits
                          </div>
                            <div class="card-body px-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Reference</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-capitalize">
                                            @if (count($pending_deposits) >= 1)
                                                @foreach ($pending_deposits as $deposit)
                                                    <tr class="">
                                                        <td style="font-size: 13px;">{{ $deposit->created_at }}</td>
                                                        <td style="font-size: 13px;">{{ $deposit->hash }}</td>
                                                        <td style="font-size: 13px;" scope="row">{{ $deposit->amount / 100 }}</td>
                                                        <td style="font-size: 13px;">
                                                            @if ($deposit->confirmation_status === 'pending')
                                                                <div class="badge small bg-danger">
                                                                    {{ $deposit->confirmation_status }}
                                                                </div>
                                                            @endif
                                                            @if ($deposit->confirmation_status === 'confirmed')
                                                                <div class="badge small bg-success">
                                                                    {{ $deposit->confirmation_status }}
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td style="font-size: 13px;">{{ $deposit->description }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="5" class="text-center" style="font-size: 13px;">No transactions yet</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <script>
                function c_wallet() {
                    var wallet = document.getElementById("wallet").value
                    document.getElementById("amount").placeholder = "Enter the amount in " + wallet + " (Numbers only)";
                    document.getElementById("amount_label").innerHTML = "How much " + wallet + " would you like to add?"
                }
            </script>


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

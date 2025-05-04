<x-app-layout>
    <section class="section">
        <div class="section-header">
            <h1>Payment page</h1>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-lg-2 col-xs-2 col-md-2">
                </div>

                <div class="col-lg-8 col-xs-8 col-md-8" style="background-color: white; color: black;">
                    <form action="/withdraw" method="POST">
                        @csrf
                        <input name="amount" value="{{ $amount }}" required="" hidden="">
                        <input name="payment_method" value="{{ $payment_method }}" required="" hidden="">

                        <div class="empty-state" style="margin-top: 150px; height: 400px;" data-height="400">
                            <div class="empty-state-icon bg-success">
                                <i class="fas fa-university"></i>
                            </div><br>
                            <h4>Process Withdrawal</h4>

                            <div class="col-12 col-md-12 col-lg-12 col-lg-6">
                                <div class="card">
                                    <h4 style="text-align: center;">Transaction Details</h4>

                                    <p>Amount - ${{ $amount }}</p>
                                    <p>Payment Method - {{ $payment_method }}</p>


                                    <input placeholder="Wallet Address" type="text" required=""
                                        style="color: grey;" name="wallet_address">


                                </div>

                                <button type="submit" class="btn btn-info mb-3">Process Payment</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>

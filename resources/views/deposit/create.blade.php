<x-app-layout>

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-fluid flex-grow-1">



            <div class="container-fluid px-0">
                <h6 class="text-uppercase fw-bold">Payment Page</h6>
                <form action="/deposit" method="post">
                    @csrf
                    <input name="amount" value="{{ $amount }}" required="" hidden="">
                    <input name="payment_method" value="{{ $payment_method }}" required="" hidden="">

                    <div class="row">
                        <div class="col-md-12 px-0">
                            <div class="card px-0">
                                <div class="card-body px-4">
                                    <p style="font-size: 13px;"> Make a transfer <span
                                            class="fw-bold">${{ $amount }}</span> to the <span
                                            class="fw-bold">{{ ucfirst($payment_method) }}</span> wallet address below
                                        and click on
                                        "Process Payment" to process your deposit.</p>
                                    <div class="mt-4">
                                        <div class="mx-auto">
                                            <input id="myInput" class="form-control" type="text" readonly=""
                                                style="color: grey;" value="{{ trim($wallet_address) }}">
                                            <a class="btn btn-primary mt-2" style="width: 100%;"
                                                onclick="myFunction1()"><span style="color:white;">Copy
                                                    {{ ucfirst($payment_method) }}
                                                    Address
                                                </span></a><br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 px-0">
                            <div class="card px-0 mt-4">
                                <div class="card-body px-4">
                                    <div class="mt-2">
                                        <span style="font-size: 13px;">After making payment, input your transaction hash below for
                                            payment confirmation.</span><br>

                                        <input placeholder="Enter Transaction Hash" class="mx-auto mt-2 form-control"
                                            type="text" required="" style="color: grey;" name="payment_hash">
                                    </div>

                                    <button type="submit" class="btn btn-primary mt-2" style="width: 100%;">Process
                                        Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


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

    <script>
        function myFunction1() {
            /* Get the text field */
            var copyText = document.getElementById("myInput");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /*For mobile devices*/

            /* Copy the text inside the text field */
            document.execCommand("copy");

            /* Alert the copied text */
            alert("Copied Address: " + copyText.value);
        }
    </script>
</x-app-layout>

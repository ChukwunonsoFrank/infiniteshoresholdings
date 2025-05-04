<x-admin>
    <div class="container-fluid">
        <div class="row">
            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Withdrawal Details</h1>

                <form action="#">
                    @csrf
                    <label for="">Transaction ID:</label> <br>
                    <input type="text" name="hash" class="form-control" value="{{ $withdrawal->hash }}" readonly> <br>

                    <label for="">Amount:</label> <br>
                    <input type="text" name="amount" class="form-control" value="{{ '$'.$withdrawal->amount }}" readonly> <br>

                    <label for="">Payment Method:</label> <br>
                    <input type="text" name="payment_method" class="form-control" value="{{ $withdrawal->payment_method }}" readonly> <br>

                    <label for="">Wallet Address:</label> <br>
                    <input type="text" name="wallet_address" class="form-control" value="{{ $withdrawal->wallet_address }}" readonly> <br>

                    <label for="">Status:</label> <br>
                    <input type="text" name="confirmation_status" class="form-control" value="{{ $withdrawal->confirmation_status }}" readonly> <br>

                    {{-- <label for="">Status:</label> <br>
                    <select name="confirmation_status" class="form-control">
                        <option value="{{ $withdrawal->confirmation_status }}" selected>{{ ucfirst($withdrawal->confirmation_status) }}</option>
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                    </select> <br> --}}

                    <br>
                    {{-- <input type="submit" class="btn btn-primary" value="Save Changes"> --}}


                </form>

            </div>
        </div>
    </div>
</x-admin>

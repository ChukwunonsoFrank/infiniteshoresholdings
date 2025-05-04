<x-admin>
    <div class="container-fluid">
        <div class="row">
            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Edit deposit</h1>

                <form action="/admin/deposits/details?id={{ $deposit->id }}" method="POST">
                    @csrf
                    <label for="">Transaction ID:</label> <br>
                    <input type="text" name="hash" class="form-control" value="{{ $deposit->hash }}"> <br>

                    <label for="">Transaction Hash:</label> <br>
                    <input type="text" name="payment_hash" class="form-control" value="{{ $deposit->payment_hash }}"> <br>

                    <label for="">Description:</label> <br>
                    <input type="text" name="description" class="form-control" value="{{ $deposit->description }}"> <br>

                    <label for="">Payment Method:</label> <br>
                    <select name="payment_method" class="form-control">
                        <option value="Bitcoin" {{ $deposit->payment_method === 'Bitcoin' ? 'selected' : '' }}>Bitcoin</option>
                        <option value="Ethereum" {{ $deposit->payment_method === 'Ethereum' ? 'selected' : '' }}>Ethereum</option>
                    </select> <br>

                    <label for="">Amount:</label> <br>
                    <input type="text" name="amount" class="form-control" value="{{ $deposit->amount / 100 }}"> <br>

                    <label for="">Status:</label> <br>
                    <select name="confirmation_status" class="form-control">
                        <option value="pending" {{ $deposit->confirmation_status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ $deposit->confirmation_status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    </select> <br>

                    <label for="">Date:</label> <br>
                    <input type="datetime-local" step="any" name="created_at" class="form-control" value="{{ $deposit->created_at }}"> <br>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Save Changes">


                </form>

            </div>
        </div>
    </div>
</x-admin>

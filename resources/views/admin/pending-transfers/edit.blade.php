<x-admin>
    <div class="container-fluid">
        <div class="row">
            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Edit transfer</h1>

                <form action="/admin/transfers/details?id={{ $transfer->id }}" method="POST">
                    @csrf
                    <label for="">Amount:</label> <br>
                    <input type="text" name="amount" class="form-control" value="{{ $transfer->amount / 100 }}"> <br>

                    <label for="">Invoice Number:</label> <br>
                    <input type="text" name="hash" class="form-control" value="{{ $transfer->hash }}"> <br>

                    <label for="">Receipient's Name:</label> <br>
                    <input type="text" name="receipient_name" class="form-control" value="{{ $transfer->receipient_name }}"> <br>

                    <label for="">Receipient's Account Number:</label> <br>
                    <input type="text" name="account_number" class="form-control" value="{{ $transfer->account_number }}"> <br>

                    <label for="">Receipient's Bank:</label> <br>
                    <input type="text" name="receipient_bank" class="form-control" value="{{ $transfer->receipient_bank }}"> <br>

                    @if($transfer->swift_code)
                        <label for="">SWIFT Code:</label> <br>
                        <input type="text" name="swift_code" readonly class="form-control" value="{{ $transfer->swift_code }}"> <br>
                    @endif

                    <label for="">Description:</label> <br>
                    <input type="text" name="description" class="form-control" value="{{ $transfer->description }}"> <br>

                    <label for="">Status:</label> <br>
                    <select name="status" class="form-control">
                        <option value="pending" {{ $transfer->status === 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="confirmed" {{ $transfer->status === 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                    </select> <br>

                    <label for="">Date:</label> <br>
                    <input type="datetime-local" step="any" name="created_at" class="form-control" value="{{ $transfer->created_at }}"> <br>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Save Changes">


                </form>

            </div>
        </div>
    </div>
</x-admin>

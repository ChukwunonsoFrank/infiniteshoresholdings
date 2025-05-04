<x-admin>
    <div class="container-fluid">
        <div class="row">
            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Investment Details</h1>

                {{-- FUTURE TODO:: Incase one bastard says investments should be editable --}}
                {{-- <form action="/admin/investment/details?id={{ $investment->id }}" method="POST"> --}}

                <form action="#">
                    @csrf
                    <label for="">Transaction ID:</label> <br>
                    <input type="text" name="hash" class="form-control" value="{{ $investment->hash }}" readonly> <br>

                    <label for="">Amount:</label> <br>
                    <input type="text" name="amount" class="form-control" value="{{ '$'.$investment->amount }}" readonly> <br>

                    <label for="">Type:</label> <br>
                    <input type="text" name="type" class="form-control" value="{{ $investment->type . ' Plan' }}" readonly> <br>

                    <label for="">Status:</label> <br>
                    <input type="text" name="confirmation_status" class="form-control" value="{{ $investment->confirmation_status }}" readonly> <br>

                    <label for="">Running Balance:</label> <br>
                    <input type="text" name="running_balance" class="form-control" value="{{ '$'.$investment->running_balance }}" readonly> <br>

                    <label for="">Total Profit:</label> <br>
                    <input type="text" name="total_profit" class="form-control" value="{{ '$'.$investment->total_profit }}" readonly> <br>

                    <label for="">Daily Profit:</label> <br>
                    <input type="text" name="daily_profit" class="form-control" value="{{ '$'.$investment->daily_profit }}" readonly> <br>

                    <label for="">ROI:</label> <br>
                    <input type="text" name="roi" class="form-control" value="{{ $investment->roi * 100 . '%' }}" readonly> <br>

                    <label for="">Duration:</label> <br>
                    <input type="text" name="duration" class="form-control" value="{{ $investment->duration . 'hrs' }}" readonly> <br>

                    {{-- <label for="">Status:</label> <br>
                    <select name="confirmation_status" class="form-control">
                        <option value="{{ $investment->confirmation_status }}" selected>{{ ucfirst($investment->confirmation_status) }}</option>
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

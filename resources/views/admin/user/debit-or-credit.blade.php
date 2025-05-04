<x-admin>
    <div class="container-fluid">
        <div class="row">

            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        <strong>{{ session('message') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                
                <h1 class="page-header">Credit or Debit User</h1>

                <form action="/admin/users/debit-or-credit" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user_id }}">
                    <label for="">Amount:</label> <br>
                    <input type="text" name="amount" class="form-control" required=""> <br>

                    
                    <label for="">Transaction Type</label> <br>
                    <select name="transaction_type" class="form-control" required="">
                        <option value="credit">Credit</option>
                        <option value="debit">Debit</option>
                    </select> <br>
                    
                    <label for="">Transaction Description:</label> <br>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>

                    <!--<label for="">Transaction Status</label> <br>-->
                    <!--<select name="status" class="form-control" required="">-->
                    <!--    <option value="confirmed">Success</option>-->
                    <!--    <option value="pending">Pending</option>-->
                    <!--    <option value="failed">Failed</option>-->
                    <!--</select>-->
                    <br>

                    {{-- <label for="">Date/Time of Transaction</label>
                    <input type="datetime-local" name="created_at" class="form-control"> --}}
                    
                    <br>
                    <input type="submit" class="btn btn-primary" value="Submit">


                </form>

            </div>
        </div>
    </div>
</x-admin>

<x-admin>
    <div class="container-fluid">
        <div class="row">
            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">User Profile</h1>

                <form action="/admin/users/details?id={{ $user->id }}" method="POST">
                    @csrf
                    <label for="">Fullname:</label> <br>
                    <input type="text" name="fullname" class="form-control" value="{{ $user->fullname }}"> <br>

                    <label for="">Email:</label> <br>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}"> <br>

                    <label for="">Account Number:</label> <br>
                    <input type="text" value="{{ $user->account_number}}" class="form-control" readonly> <br>

                    <label for="">Country:</label> <br>
                    <input type="text" name="country" class="form-control" value="{{ $user->country }}"> <br>

                    <label for="">Address:</label> <br>
                    <input type="text" name="address" class="form-control" value="{{ $user->address }}"> <br>

                    <label for="">Gender:</label> <br>
                    <input type="text" name="gender" class="form-control" value="{{ $user->gender }}"> <br>

                    <label for="">Date Of Birth:</label> <br>
                    <input type="date" name="date_of_birth" class="form-control" value="{{ $user->date_of_birth }}"> <br>

                    <label for="">Marital Status:</label> <br>
                    <input type="text" name="marital_status" class="form-control" value="{{ $user->marital_status }}"> <br>

                    <label for="">Account Type:</label> <br>
                    <input type="text" name="account_type" class="form-control" value="{{ $user->account_type }}"> <br>

                    <label for="">Phone Number:</label> <br>
                    <input type="text" name="phone" value="{{ $user->phone }}" class="form-control"> <br>

                    <label for="">Password:</label> <br>
                    <input type="text" value="{{ $user->unhashed_password }}" class="form-control" readonly> <br>

                    <label for="">Balance:</label> <br>
                    <input type="text" name="balance" class="form-control" value="{{ $user->balance / 100 }}"> <br>

                    <label for="">Total Deposited:</label> <br>
                    <input type="text" name="total_deposited" class="form-control"
                        value="{{ $user->total_deposited / 100 }}"> <br>

                    <label for="">Total Withdrawn:</label> <br>
                    <input type="text" name="total_withdrawn" class="form-control"
                        value="{{ $user->total_withdrawn / 100 }}"> <br>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Save Changes">


                </form>

            </div>
        </div>
    </div>
</x-admin>

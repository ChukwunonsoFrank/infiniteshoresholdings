<x-admin>
    <div class="container-fluid">
        <div class="row">
            <x-admin-navbar></x-admin-navbar>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                <h1 class="page-header">Create Account</h1>

                <form action="/admin/create-account" method="POST">
                    @csrf
                    <label for="">Fullname:</label> <br>
                    <input type="text" name="fullname" class="form-control" required=""> <br>

                    <label for="">Email:</label> <br>
                    <input type="email" name="email" class="form-control" required=""> <br>

                    <label for="">Country:</label> <br>
                    <input type="text" name="country" class="form-control" required=""> <br>

                    <label for="">Address:</label> <br>
                    <input type="text" name="address" class="form-control" required=""> <br>

                    <label for="">Gender:</label> <br>
                    <select name="gender" class="form-control" required="">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select> <br>

                    <label for="">Date Of Birth:</label> <br>
                    <input type="date" name="date_of_birth" class="form-control" required=""> <br>

                    <label for="">Phone Number:</label> <br>
                    <input type="text" name="phone" class="form-control" required=""> <br>

                    <label for="">Marital Status:</label> <br>
                    <select name="marital_status" class="form-control" required="">
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Other">Other</option>
                    </select> <br>

                    <label for="">Account Type:</label> <br>
                    <select name="account_type" class="form-control" required="">
                        <option value="Savings">Savings</option>
                        <option value="Current">Current</option>
                        <option value="Business">Business</option>
                        <option value="Offshore">Offshore</option>
                        <option value="Personalized">Personalized</option>
                    </select> <br>

                    <label for="">Password:</label> <br>
                    <input type="password" name="password" class="form-control" required=""> <br>

                    <label for="">Confirm Password:</label> <br>
                    <input type="password" name="password_confirmation" class="form-control" required=""> <br>

                    <br>
                    <input type="submit" class="btn btn-primary" value="Create Account">


                </form>

            </div>
        </div>
    </div>
</x-admin>

<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-fluid flex-grow-1">



            <div class="container-fluid px-0">
                <h6 class="text-uppercase fw-bold">Transaction Details</h6>
                <div class="row">

                    <div class="col-md-12 px-0">

                        <div class="card px-0">
                            <div class="card-body px-0">
                                <div class="table-borderless">
                                    <table class="table">
                                        <tbody class="text-capitalize">
                                            <tr>
                                                <td><b>Amount</b>: ${{ $data->amount / 100 }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Date</b>: {{ $data->created_at }}</td>
                                            </tr>
                                            @if ($data->confirmation_status)
                                                <tr>
                                                    <td><b>Payment Method</b>:
                                                        {{ ucfirst($data->payment_method) }}</td>
                                                </tr>
                                            @endif
                                            @if ($data->status)
                                                <tr>
                                                    <td><b>To</b>:
                                                        {{ ucfirst($data->receipient_name) }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Account</b>:
                                                        {{ ucfirst($data->account_number) }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b>Destination Bank</b>:
                                                        {{ ucfirst($data->receipient_bank) }}</td>
                                                </tr>
                                            @endif
                                            @if ($data->swift_code)
                                                <tr>
                                                    <td><b>SWIFT Code</b>:
                                                        {{ $data->swift_code }}</td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td><b>Transaction Reference</b>: {{ $data->hash }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Description</b>: {{ $data->description }}</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span><b>Status</b>: </span>
                                                    @if ($data->confirmation_status)
                                                        <span class="text-uppercase"
                                                            style="background-color: {{ $data->confirmation_status === 'pending' ? '#ffbf43' : '#22d172' }}; color: #fff; font-size: 13px; width: fit-content; padding: 2px 5px; border-radius: 5px; font-weight: bold;">{{ $data->confirmation_status === 'pending' ? 'Pending' : 'Successful' }}</span>
                                                    @else
                                                        <span class="text-uppercase"
                                                            style="background-color: {{ $data->status === 'pending' ? '#ffbf43' : '#22d172' }}; color: #fff; font-size: 13px; width: fit-content; padding: 2px 5px; border-radius: 5px; font-weight: bold;">{{ $data->status === 'pending' ? 'Pending' : 'Successful' }}</span>
                                                    @endif
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="w-100" style="text-align: end;">
                    <a href="/transactions/receipt?data={{ $data }}">
                        <button type="submit" class="btn btn-sm btn-primary fw-bold mt-4"><i
                            class="bx bx-receipt"></i> Generate Statement</button>
                    </a>
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
</x-app-layout>

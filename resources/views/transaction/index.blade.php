<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-fluid flex-grow-1">
          
          
          
          <div class="container-fluid px-0">
              <h6 class="text-uppercase fw-bold">Transactions</h6>
                <div class="row">

                    <div class="col-md-12 px-0">

                        <div class="card px-0">
                            <div class="card-body px-0">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Date</th>
                                                <th scope="col">Reference</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Description</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-capitalize">
                                            @if (count($deposits) >= 1 || count($transfers) >= 1)
                                                @foreach ($deposits as $deposit)
                                                    <tr onclick="window.location.href='/transactions/{{ $deposit->hash }}'"
                                                        style="cursor:pointer;">
                                                        <td style="font-size: 13px;">{{ $deposit->created_at }}</td>
                                                        <td style="font-size: 13px;">{{ $deposit->hash }}</td>
                                                        <td style="font-size: 13px;">Deposit</td>
                                                        <td style="font-size: 13px;">${{ $deposit->amount / 100 }}</td>
                                                        <td style="font-size: 13px;">
                                                            @if ($deposit->confirmation_status === 'pending')
                                                                <div class="badge small bg-danger">
                                                                    {{ $deposit->confirmation_status }}
                                                                </div>
                                                            @endif
                                                            @if ($deposit->confirmation_status === 'confirmed')
                                                                <div class="badge small bg-success">
                                                                    {{ $deposit->confirmation_status }}
                                                                </div>
                                                            @endif
                                                        </td>
                                                        <td style="font-size: 13px;">{{ $deposit->description }}</td>
                                                    </tr>
                                                @endforeach

                                                @foreach ($transfers as $transfer)
                                                    <tr onclick="window.location.href='/transactions/{{ $transfer->hash }}'"
                                                        style="cursor:pointer;">
                                                        <td style="font-size: 13px;">{{ $transfer->created_at }}</td>
                                                        <td style="font-size: 13px;">{{ $transfer->hash }}</td>
                                                        <td style="font-size: 13px;">{{ $transfer->transaction_type }}</td>
                                                        <td style="font-size: 13px;">${{ $transfer->amount / 100 }}</td>
                                                        <td style="font-size: 13px;">
                                                            <div class="badge small bg-success">
                                                                {{ $transfer->status }}
                                                            </div>
                                                        </td>
                                                        <td style="font-size: 13px;">{{ $transfer->description }}</td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="6" class="text-center" style="font-size: 13px;">No transactions yet</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


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

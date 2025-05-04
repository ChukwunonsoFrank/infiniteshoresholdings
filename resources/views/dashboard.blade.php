<x-app-layout>
    <div class="container-fluid flex-grow-1 container-p-y px-0">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('dash/assets/img/trade.png') }}"
                                    alt="Credit Card" class="rounded">
                            </div>

                        </div>
                        <span class="d-block mb-1 fw-medium text-uppercase" style="font-size: 12px;">Balance</span>
                        <h3 class="card-title mb-2 fw-bold" style="font-size: 24px;">${{ auth()->user()->balance / 100 }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('dash/assets/img/deposit.png') }}"
                                    alt="chart success" class="rounded">
                            </div>

                        </div>
                        <span class="fw-medium d-block mb-1 text-uppercase" style="font-size: 12px;">Total Debit</span>
                        <h3 class="card-title mb-2 fw-bold" style="font-size: 24px;">
                            ${{ auth()->user()->total_withdrawn / 100 }}</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('dash/assets/img/earning.png') }}"
                                    alt="Credit Card" class="rounded">
                            </div>
                        </div>
                        <span class="fw-medium d-block mb-1 text-uppercase" style="font-size: 12px;">Total Credit</span>
                        <h3 class="card-title text-nowrap mb-2 fw-bold" style="font-size: 24px;">
                            ${{ auth()->user()->total_deposited / 100 }}</h3>
                    </div>
                </div>
            </div>

            <!-- Total Revenue -->
            <div class="col-12 mb-4">
                <div class="card">
                    <div class="card-header text-uppercase" style="font-size: 12px;">
                        Recent Transactions
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody class="text-capitalize">
                                @if (count($pending_deposits) >= 1)
                                    @foreach ($pending_deposits as $deposit)
                                        <tr class="">
                                            <td style="font-size: 13px;">{{ $deposit->created_at }}</td>
                                            <td style="font-size: 13px;">{{ $deposit->hash }}</td>
                                            <td style="font-size: 13px;" class="text-uppercase">${{ $deposit->amount / 100 }}</td>
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
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center" style="font-size: 12px">No transactions yet</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>

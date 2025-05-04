<x-app-layout>
    <h1>Referral Statistics</h1>
    <p><b>Referral balance</b>: ${{ $referral_balance }}</p>
<br><br>
    <div class="card">
        <div class="card-header">
            <h4>View your referral statistics below</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="table-2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-striped dataTable no-footer" id="table-2" role="grid"
                                aria-describedby="table-2_info">
                                <thead>
                                    <tr role="row">
                                            <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 253.8px;" aria-label="Currency">Username</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1"
                                            colspan="1" style="width: 234.8px;"
                                            aria-label="Amount: activate to sort column ascending">Date Joined</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 313.783px;" aria-label="Status">Status</th>
                                            <th class="sorting_asc" rowspan="1" colspan="1" style="width: 277.617px;"
                                            aria-label="Date">Commission</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    @foreach($referrals as $referral)
                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{ $referral->user->username }}</td>
                                        <td>{{ $referral->user->created_at }}</td>
                                        
                                        @if($referral->paid)
                                            <td>Paid</td>
                                        @else
                                            <td>Unpaid</td>
                                        @endif

                                        <td>
                                            <div class="badge badge-warning">${{ $referral->amount }}</div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

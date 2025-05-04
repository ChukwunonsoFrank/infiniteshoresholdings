<x-app-layout>
    <h1>Approved withdrawals history</h1>
    <p><b>Total approved withdrawals</b>: ${{ $total_approved }}</p>
<br><br>
    <div class="card">
        <div class="card-header">
            <h4>View your approved withdrawal history below</h4>
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
                                        <th class="sorting_asc" rowspan="1" colspan="1" style="width: 277.617px;"
                                            aria-label="Date">Date</th>
                                        <th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1"
                                            colspan="1" style="width: 234.8px;"
                                            aria-label="Amount: activate to sort column ascending">Amount</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 253.8px;" aria-label="Currency">Currency</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1"
                                            style="width: 313.783px;" aria-label="Status">Status</th>
                                    </tr>
                                </thead>
                                <tbody>




                                    @foreach($approved_withdrawals as $withdrawal)
                                    <tr role="row" class="odd">

                                        <td class="sorting_1">{{ $withdrawal->created_at }}</td>
                                        <td>{{ $withdrawal->amount }}</td>
                                        <td>{{ $withdrawal->payment_method }}</td>

                                        <td>
                                            <div class="badge badge-warning">{{ $withdrawal->confirmation_status }}</div>
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

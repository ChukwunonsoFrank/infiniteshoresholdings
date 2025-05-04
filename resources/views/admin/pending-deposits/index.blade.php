<x-admin>
    <div class="container-fluid">
        <div class="row">
      
          <x-admin-navbar></x-admin-navbar>
      
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <h1 class="sub-header">
              <div class="btn-group pull-right" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary">Print</button>
              <button type="button" class="btn btn-primary">Export</button>
            </div>
              Pending Deposits
            </h1>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Payment Method</th>
                    <th>Transaction Hash</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pending_deposits as $deposit)
                    <tr>
                      <td>#</td>
                      <td>{{ $deposit->user->fullname }}</td>
                      <td>${{ $deposit->amount / 100 }}</td>
                      <td>{{ $deposit->payment_method }}</td>
                      <td>{{ $deposit->payment_hash }}</td>
                      <td>{{ $deposit->description }}</td>
                      <td>{{ $deposit->confirmation_status }}</td>
                      <td>{{ $deposit->created_at }}</td>
                      <td>
                        <a href="/admin/deposits/approve?id={{ $deposit->id }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve deposit"><span class="fas fa-check"></span></a>
                      </td>
                      <td style="width: 100px">
                        <a href="/admin/deposits/details?id={{ $deposit->id }}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit deposit">
                          <span class="fas fa-pen"></span>
                        </a>
                        <a href="/admin/deposits/delete?id={{ $deposit->id }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure?')" data-original-title="Delete deposit">
                          <span class="fas fa-trash"></span>
                        </a>
                      </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
      
          </div>
      
      
      
      </div>
      </div>
</x-admin>
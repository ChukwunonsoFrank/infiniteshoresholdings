<x-admin>
    <div class="container-fluid">
        <div class="row">
      
          <x-admin-navbar></x-admin-navbar>
      
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
      
            <section class="row text-center placeholders">
              <div class="col-6 col-sm-3">
                <div class="panel panel-info">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="panel panel-success">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="panel panel-warning">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="panel panel-danger">
                  <div class="panel-heading">Header</div>
                  <div class="panel-body">
                    <h4>123</h4>
                    <p>Data</p>
                  </div>
                </div>
              </div>
            </section>
      
      
      
            <h1 class="sub-header">
              <div class="btn-group pull-right" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-primary">Print</button>
              <button type="button" class="btn btn-primary">Export</button>
            </div>
              Table
            </h1>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>Transaction ID</th>
                    <th>Amount</th>
                    <th>Wallet Address</th>
                    <th>Payment Method</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pending_withdrawals as $withdrawal)
                    <tr>
                      <td>#</td>
                      <td>{{ $withdrawal->hash }}</td>
                      <td>${{ $withdrawal->amount }}</td>
                      <td>{{ $withdrawal->wallet_address }}</td>
                      <td>{{ $withdrawal->payment_method }}</td>
                      <td>{{ $withdrawal->confirmation_status }}</td>
                      <td>
                        <a href="/admin/withdrawals/approve?id={{ $withdrawal->id }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve withdrawal"><span class="fas fa-check"></span></a>
                      </td>
                      <td style="width: 100px">
                        <a href="/admin/withdrawals/details?id={{ $withdrawal->id }}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Withdrawal Details">
                          <span class="fas fa-list"></span>
                        </a>
                        <a href="/admin/investments/delete?id={{ $withdrawal->id }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure?')" data-original-title="Delete withdrawal">
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
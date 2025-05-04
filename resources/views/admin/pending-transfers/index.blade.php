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
              Pending Transfers
            </h1>
            <div class="table-responsive">
              <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Amount</th>
                    <th>Method</th>
                    <th>Invoice</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pending_transfers as $transfer)
                    <tr>
                      <td>#</td>
                      <td>{{ $transfer->user->fullname }}</td>
                      <td>${{ $transfer->amount / 100 }}</td>
                      <td>Bank Transfer</td>
                      <td>{{ $transfer->hash }}</td>
                      <td>{{ $transfer->description }}</td>
                      <td>{{ $transfer->status }}</td>
                      <td>{{ $transfer->created_at }}</td>
                      <td>
                        <a href="/admin/transfers/approve?id={{ $transfer->id }}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Approve transfer"><span class="fas fa-check"></span></a>
                      </td>
                      <td style="width: 100px">
                        <a href="/admin/transfers/details?id={{ $transfer->id }}" class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit transfer">
                          <span class="fas fa-pen"></span>
                        </a>
                        <a href="/admin/transfers/delete?id={{ $transfer->id }}" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="" onclick="return confirm('Are you sure?')" data-original-title="Delete transfer">
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
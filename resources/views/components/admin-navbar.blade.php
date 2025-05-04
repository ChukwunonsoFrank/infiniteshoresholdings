<div class="col-sm-3 col-md-2 sidebar collapse" id="sidebar">
    <div class="list-group">
      <a href="/admin/users" class="list-group-item active"><span class="fas fa-fw fa-user"></span> Users</a>
      <a href="/admin/deposits/pending" class="list-group-item"><span class="fas fa-fw fa-bank"></span> Pending Deposits</a>
      <a href="/admin/transfers/pending" class="list-group-item"><span class="fas fa-fw fa-download"></span> Pending Transfers</a>
      <a href="/admin/transactions" class="list-group-item"><span class="fas fa-fw fa-dollar"></span> Transactions</a>
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a href="route('logout')" onclick="event.preventDefault();
      this.closest('form').submit();" class="list-group-item"><span class="fas fa-fw fa-power-off"></span> Logout</a>
    </form>
      
    </div>
</div>
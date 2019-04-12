<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
  <ul class="list-group panel">
    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>SIDE PANEL</b></li>
    <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
    <li class="list-group-item"><a href="{{ url('admin/category') }}"><i class="glyphicon glyphicon-list-alt"></i>Category </a></li>
    <li class="list-group-item"><a href="{{ url('admin/product') }}"><i class="glyphicon glyphicon-list-alt"></i>Product</a></li>
    <li class="list-group-item"><a href="{{ url('admin/publisher') }}"><i class="glyphicon glyphicon-list-alt"></i>Pulisher</a></li>
    <li class="list-group-item"><a href="{{ url('admin/status-od') }}"><i class="glyphicon glyphicon-list-alt"></i>Status Order</a></li>
    <li class="list-group-item"><a href="{{ url('admin/role') }}"><i class="glyphicon glyphicon-list-alt"></i>Role</a></li>
    <li class="list-group-item"><a href="{{ url('admin/bill') }}"><i class="glyphicon glyphicon-list-alt"></i>Bill</a></li>
    <li>
      <a href="#demo4" class="list-group-item " data-toggle="collapse">Item 4  <span class="glyphicon glyphicon-chevron-right"></span></a>
      <li class="collapse" id="demo4">
        <a href="{{ url('admin/author') }}" class="list-group-item">Author</a>
        <a href="{{ url('admin/role-user') }}" class="list-group-item">Role Users</a>
        <a href="{{ url('admin/status-pro') }}" class="list-group-item">Status Product</a>
        <a href="{{ url('admin/user') }}" class="list-group-item">User</a>
      </li>
    </li>
  </ul>
</div>
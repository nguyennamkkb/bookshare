<div class="col-xs-12 col-sm-9 content" style="">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> @yield('title2')</h3>
    </div>
    <div class="panel-body">
      <div class="content-row">
        @yield('search')
        @yield('success')
      </div>

      <div class="content-row" >
        @yield('table-content')
      </div>
      <div class="content-row" style="height: 500px;"></div>
    </div>
  </div>
</div>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('product.index') }}">Brand</a>
    </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('product.shoppingCart') }}"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="badge badge-light">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> User Management <span class="caret"></span></a>

          <ul class="dropdown-menu">
            @if(!Auth::check())
            <li><a href="{{ route('user.signup') }}">Signup</a></li>
            <li><a href="{{ route('user.signin') }}">Signin</a></li>
            @else
            <li><a href="{{ route('user.profile') }}">User Profile</a></li>
              <li role="separator" class="divider"></li>
            <li>
              <form action="{{ route('user.logout') }}" method="post">
                {{ csrf_field() }}
                <input type="submit" style="text-decoration: none; color: black" class="btn btn-link" value="logout">
              </form>
            </li>
            @endif
          </ul>

        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Shopping Cart <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i> User Management</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(!Auth::check())

            <a class="dropdown-item" href="{{ route('user.signup') }}">Signup</a>
            <a class="dropdown-item" href="{{ route('user.signin') }}">Signin</a>
          @else
            <div class="dropdown-item">
              <form action="{{ route('user.logout') }}" method="post">
                {{ csrf_field() }}
                <input type="submit" style="text-decoration: none; color: black" class="btn btn-link" value="logout">
              </form>
            </div>
          @endif
      </li>

    </ul>
  </div>
</nav>

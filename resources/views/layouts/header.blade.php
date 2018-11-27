
<div class="container">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Navbar</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
                </li>
                @if(Auth::user()->type == 'HR')
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-view') }}">Register</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee.index') }}">show employees</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="{{ route('employee.create') }}">Create employe</a>
                    </li>

                @endif
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <input class="btn btn-success" type="submit" value="Logout" />
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login-view') }}">Login</a>
                </li>
            @endif
            </ul>
        </div>
    </nav>
</div>

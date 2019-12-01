<nav class="navbar navbar-expand-xl navbar-dark bg-dark">
  <a class="navbar-brand" href="/">IICP Appointment Making System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbars">
    <ul class="navbar-nav mr-auto">

      @if (!Auth::guest())
        @if (Auth::user()->usertype == 'Admin')
          <li class="nav-item">
            <a class="nav-link" href="/users">Dashboard</a>
          </li>

        @elseif (Auth::user()->usertype == 'Lecturer')
          <li class="nav-item">
            <a class="nav-link" href="/lecturer">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/manage">Manage Timeslots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/history">History</a>
          </li>

        @else
          <li class="nav-item">
            <a class="nav-link" href="/student">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/makeappointment">Make Appointment</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="/history">History</a>
            </li>
        @endif
      @endif
    </ul>

    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
        <li class="nav-item">
          <a class="nav-link" href="/login">Log In</a>
        </li>

        @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
        @endif

        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
      @endguest
    </ul>
  </div>
</nav>
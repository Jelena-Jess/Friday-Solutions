<nav class="mb-1 navbar navbar-expand-lg bg-blue d-none d-sm-none d-md-none d-lg-block">
  <div class="main d-flex justify-content-between">
    <div class="my-auto">
      <a class="logo" href="{{ route('home') }}">FRIDAY SOLUTIONS
      </a>
    </div>
    <div>
      <ul class="nav navbar-nav d-flex bd-highlight mb-7">
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav">
          <a class="nav-link hvr-underline-from-center" href="/admin">DASHBOARD</a>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav">
          <a class="nav-link hvr-underline-from-center" href="/posts/create">CREATE POST</a>
        </li>
        <li class="px-xl-2 px-lg-0 nav-item bd-highlight nav hvr-underline-from-center">
          <a class="nav-link" href="/contact">CONTACT</a>
        </li>


        @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
          </li>
          @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
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
                      {{ __('LOGOUT') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
            </li>
        @endguest


      </ul>
    </div>
    
  </div>
</nav>
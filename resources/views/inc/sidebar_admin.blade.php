<div id="mySidebar" class="sidebar">
  <div class="mobile side-nav fixed d-lg-none d-xl-none">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="far fa-window-close fa-sm"></i></a>
    <ul class="custom-scrollbar nav flex-column text-center ml-auto mr-auto">
      <li class="nav-item mt-5 mb-3">
          <a class="mt-5 nav-link hvr-underline-from-center" href="/admin">
            DASHBOARD</a>
        </li>
        <li class="nav-item my-3">
          <a class="nav-link hvr-underline-from-center" href="/posts/create">CREATE POST</a>
        </li>
        <li class="nav-item my-3">
          <a class="nav-link hvr-underline-from-center" href="/register">REGISTER USER</a>
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
          <li class="dropdown show nav-item mt-2 mb-2">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <a class="pb-2 nav-link-small-sidebar hvr-underline-from-center" href="{{ route('logout') }}"
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
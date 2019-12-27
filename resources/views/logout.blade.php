
<ul class="navbar-nav ml-auto">
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
</ul>


<form class="needs-validation" novalidate>
  <select class="mdb-select validate md-form" searchable="Search here..">
    <option value="" disabled selected>Choose your country</option>
    <option value="1">USA</option>
    <option value="2">Germany</option>
    <option value="3">France</option>
    <option value="4">Poland</option>
    <option value="5">Japan</option>
  </select>
  <button class="btn btn-default btn-sm">Submit</button>
</form>
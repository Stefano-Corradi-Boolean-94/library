<header class="p-3">

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }} " href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'books' ? 'active' : '' }}" href="{{ route('books') }}">Elenco libri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}" href="{{ route('contacts') }}">Contatti</a>
        </li>
      </ul>

</header>

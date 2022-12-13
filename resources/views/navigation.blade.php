@php
    $routeName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link {{ $routeName == 'increment-decrement' ? 'active' : '' }} " href="{{ route('increment-decrement') }}">Inc./Dec. Number </a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ $routeName == 'reviews' ? 'active' : '' }}" href="{{ route('reviews') }}">Reviews</a>
        </li>

    </ul>
    </div>
</nav>

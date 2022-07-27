















<li class="nav-item">
    <a href="{{ route('roles.index') }}"
       class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <p>Roles</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('categories.index') }}"
       class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <p>Categories</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('sizes.index') }}"
       class="nav-link {{ Request::is('sizes*') ? 'active' : '' }}">
        <p>Sizes</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cities.index') }}"
       class="nav-link {{ Request::is('cities*') ? 'active' : '' }}">
        <p>Cities</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('colors.index') }}"
       class="nav-link {{ Request::is('colors*') ? 'active' : '' }}">
        <p>Colors</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('users.index') }}"
       class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('subscriptions.index') }}"
       class="nav-link {{ Request::is('subscriptions*') ? 'active' : '' }}">
        <p>Subscriptions</p>
    </a>
</li>



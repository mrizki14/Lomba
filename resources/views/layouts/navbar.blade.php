<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
            <form action="/logout" method="POST">
                @csrf
                
                <button type="submit" class="btn">Logout</button>
            </form>
        </li>
    </ul>
</nav>
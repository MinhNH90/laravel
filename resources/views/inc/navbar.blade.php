<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{Request::is('about') ? 'active' : ''}}">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item {{Request::is('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item {{Request::is('messages') ? 'active' : ''}}">
                    <a class="nav-link" href="/messages">Messages</a>
                </li>
                <li class="nav-item {{Request::is('register') ? 'active' : ''}}">
                    <a class="nav-link" href="/register">Register</a>
                </li>
                <li class="nav-item {{Request::is('people') ? 'active' : ''}}">
                    <a class="nav-link" href="/people">People</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
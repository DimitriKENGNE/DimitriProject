<div class="container">
    <nav class="nav blog-nav">
        <a class="nav-link active" href="/">Home</a>
        <a class="nav-link" href="/register">Register</a>
        @if (!Auth::check())
        <a class="nav-link" href="/login">Login</a>
        @endif
        @if (Auth::check())
            <a class="nav-link" href="/posts/create">Create a post</a>

            <div class="w3-dropdown-hover nav-link ml-auto">
                <button class="w3-button w3-blue"> {{ Auth::user()->name }}<span class="caret"></span></button>
                <div class="w3-dropdown-content w3-bar-block w3-border">
                    <a href="/account/{{ Auth::user()->id }}" class="w3-bar-item w3-button">My account</a>
                    <a href="/register/{{ Auth::user()->id }}/edit" class="w3-bar-item w3-button">Edit my account</a>
                    <a href="/logout" class="w3-bar-item w3-button">Logout</a>
                </div>
            </div>
        @endif
    </nav>
</div>
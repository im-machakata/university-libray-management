<nav class="py-2 border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item">
                <a href="/" class="nav-link link-body-emphasis px-2">Home</a>
            </li>
            <li class="nav-item">
                <a href="/read-books" class="nav-link link-body-emphasis px-2">Read Books</a>
            </li>
            <li class="nav-item">
                <a href="/chat-with-a-librarian" class="nav-link link-body-emphasis px-2">Chat with us</a>
            </li>
            <li class="nav-item">
                <a href="/system-tutorials" class="nav-link link-body-emphasis px-2">System Tutorials</a>
            </li>
        </ul>
        <ul class="nav">
            <li class="nav-item">
                <a href="/login" class="nav-link link-body-emphasis px-2">Login</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link link-body-emphasis px-2">Sign up</a>
            </li>
        </ul>
    </div>
</nav>
<header class="py-3 mb-4 border-bottom">
    <div class="container d-flex flex-wrap justify-content-center">
        <a href="/search-books" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="/static/images/bookshelf.svg" alt="Bookshelf icon" height="40">
            <span class="fs-4 ms-lg-2">Find Books</span>
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search" action="/search-books">
            <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
    </div>
</header>
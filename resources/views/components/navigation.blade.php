<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid ms-4">
        <a class="navbar-brand" href="/">
            <span class="m-2 fs-4 fw-bold" style="">Blog</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse fs-7 fw-bold" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                @auth
                    @if (request()->is('/'))           
                        <a href="/dashboard" class="btn btn-primary me-4 fw-bold" type="button">Dashboard</a>
                    @elseif (request()->is('dashboard'))
                        <a href="/new" class="btn btn-primary me-4 fw-bold" type="button">Add post</a>
                    @elseif (request()->is('new'))
                        <a href="/dashboard" class="btn btn-primary me-4 fw-bold" type="button">Dashboard</a>
                    @endif
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger fw-bold">Log out</button>
                    </form>
                @else           
                    <a href="/sign-in" class="btn btn-primary me-4 fw-bold" type="button">Sign in</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://clevelandpoet.com">ClevelandPoet.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item active">
                    <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <span class="ml-auto d-flex">
                <span class="user-image">
                    <img src="{{ Auth::user()->photo_url }}" />
                </span>
                <span class="user-name">{{ Auth::user()->name }}</span>
            </span>
        </div>
    </div>
</nav>

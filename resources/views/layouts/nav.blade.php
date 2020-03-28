<div class="blog-masthead bg-primary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
          <a class="navbar-brand" href="/"><img src="/image/au.png" class="au-logo" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mr-4">
                        <a class="nav-link" href="/posts">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="/posts/create">Publish</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="/notices">Notice</a>
                    </li>
                    <li class="nav-item mr-4">
                        <form class="form-inline my-2 my-lg-0" action="/posts/search">
                            <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ml-auto row align-items-center">
                        <img src="https://randomuser.me/api/portraits/women/17.jpg" alt="" class="img-rounded"
                             style="border-radius:500px; height: 30px">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{\Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/user/{{Auth::id()}}">My Homepage</a>
                            <a class="dropdown-item" href="/user/me/setting">Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>

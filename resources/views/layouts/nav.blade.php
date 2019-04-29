<div class="blog-masthead bg-primary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            {{--     <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                --}}
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mr-4">
                        <a class="nav-link" href="/posts">首页 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="/posts/create">写文章</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">通知</a>
                    </li>
                    <li class="nav-item mr-4">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
                            <a class="dropdown-item" href="#">我的主页</a>
                            <a class="dropdown-item" href="#">个人设置</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">退出</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>

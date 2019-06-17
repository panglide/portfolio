


        <div class="sticky">
            <ul class="nav" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>

                

                @if (Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                </li>
                @endif

                    <!-- User area dropdown available after login -->
                    <!--To Do: fix collapsed nav UI
                        Add route for account management-->
                        <li class="nav-link ml-auto">
                    @if (Auth::check())
                    <div class="dropdown dropdown-nav">
                        <a class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/posts/create">Create New Post</a>
                        <a class="dropdown-item" href="#">My Account</a>
                        <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                    @endif
                    </li>

            </ul>
        </div>
        </div>
    </nav>


    <!-- <div class="blog-masthead"> -->
      <!-- <div class="container"> -->
    <!-- <nav class="navbar" data-toggle="sticky-onscroll">
      <a class="blog-nav-item active" href="/">Home</a>
      <a class="blog-nav-item" href="#">New features</a>
      <a class="blog-nav-item" href="#">Press</a>
      <a class="blog-nav-item" href="#">New hires</a>
      <a class="blog-nav-item" href="#">About</a>


    </nav> -->
  <!-- </div> -->
<!-- </div> -->

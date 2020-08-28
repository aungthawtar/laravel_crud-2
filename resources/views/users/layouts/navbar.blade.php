<!-- <div class="container-fluid"> -->
        <nav class="navbar navbar-expand navbar-primary navbar-dark mr-auto">
            <!-- Left navbar links -->
            <ul class="navbar-nav "> 
                <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url("/post")}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- SEARCH FORM -->
            <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>

            <ul class="navbar-nav ml-auto">

            @if(! Auth::user()->status == 'admin')
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Login</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">Register</a>
                </li>
            @else
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="" class="nav-link" onclick="event.preventDefault(); if(confirm('Are You Sure?')){document.getElementById('logout').submit();} ">Logout</a>
                </li>
                <form id="logout" style="display:none;" action="{{url("/logout")}}" method ="post">@csrf</form>
            @endif
            </ul>
        </nav>
<!-- </div> -->
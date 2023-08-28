 <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <div class="container">
      <div class="logo">
        <a class="navbar-brand" href="#">
        <img src="{{asset('admin/images//icon/booklogo-4.png')}}" alt="logo" width="80" class="d-inline-block"/>
        </a>
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0">
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link {{ ( $title === 'About' ) ? 'active' : '' }}" href="/about">About</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route ('login')}}">Login</a>
        </li>
          <li class="nav-item">
           <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
        </ul>
        </form>

        <div class="card-tools"> 
                <form action="/searchbook" class="form-inline d-flex" method="GET">
                  <input type="search" name="table_search" class="form-control float-right" placeholder="search">
                    <div class="input-group-append">
                      <button  type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                </form>
              </div>
        </div>
      </div>
    </nav>
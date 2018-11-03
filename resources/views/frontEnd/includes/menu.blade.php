<body>
  <nav class="navbar navbar-light navbar-expand-md fixed-top">
    <div class="container">
      <a class="navbar-brand text-info" href="">SH SUMON</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="{{url('/about')}}" id="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="{{url('/service')}}" id="services">Services</a>
          </li>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Skill
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Project</a>
                  <a class="dropdown-item" href="{{url('/project')}}">Graphics</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="#" id="resume">Resume</a>
          </li>
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Function
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="{{url('/presentation')}}">Presentation</a>
                  <a class="dropdown-item" href="#">Project</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link scroll" href="{{url('/contact')}}" >Contact Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


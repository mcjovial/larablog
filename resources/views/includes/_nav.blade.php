<!-- Default Bootstrap Navbar -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Larablog</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="#"><a href="{{ route('home') }}">Home</a></li>
          <li class="#"><a href="/blog">Blog</a></li>
          <li class="#"><a href="{{ route('about') }}">About</a></li>
          <li class="#"><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">          
          <li class="dropdown">
            <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello User<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Posts</a></li>
              <li><a href="#">Categories</a></li>
              <li><a href="#">Tags</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
                    
            <a href="#" class="btn btn-default">Login</a>  
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
 <!-- ======= Header/Navbar ======= -->
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarDefault" aria-controls="navbarDefault" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><span class="color-b">Real Estate Property  
        </span></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="/home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="/contact">Contact</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="home" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
            <div class="dropdown-menu">
              @if(auth()->check())
              <a class="dropdown-item " href="logout">Logout</a> 
              @else      
              <a class="dropdown-item " href="registerUser">Register</a>
              <a class="dropdown-item " href="login">Login</a>    
              @endif
            </div>
            </li>   
          
          <!-- <li class="nav-item">
            <a class="nav-link " href="blog-grid.html">Blog</a>
          </li> -->

         
          <!-- <li class="nav-item">
            <a class="nav-link " href="contact.html">Register</a>
          </li> -->
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" 
      data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->
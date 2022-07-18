 
 
   
  <!-- ======= Header/Navbar ======= -->

 <br> <br><br> <br> <br> <br> <br><br> <br> <br> <br> <br><br> <br> <br>
 <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarDefault" aria-controls="navbarDefault" 
      aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
      <a class="navbar-brand text-brand" href="index.html"><span class="color-b">Real Estate Property <br /> Admin Dashboard  
        </span></a>
        

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="/login">Log In!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/registerUser">Register!</a>
          </li>

         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Property</a>
            <div class="dropdown-menu">
            @if(auth()->check())
              <a class="dropdown-item " href="add-property">Add Property</a>
            @endif
              <a class="dropdown-item " href="property-list">View Property Lists/Update</a>
             
            </div>
          </li>

           
            
           
          </div>
   
        </nav>
       
 

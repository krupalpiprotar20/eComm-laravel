<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">E-Comm</a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Orders</a>
          </li>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          {{-- <ul class="navbar-nav ml-auto"> <!-- Changed class from nav navbar-nav navbar-right to navbar-nav ml-auto -->
            <li class="nav-item">
                <a class="nav-link" href="#">Add To Cart</a> <!-- Removed additional <li> wrapper -->
            </li>
        </ul> --}}

         
        
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a class="nav-link" href="#">Add To Cart </a>
            </li>
        </ul>
        
      </div>
    </div>
  </nav>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href={{route('home')}}>FarmaciaCRUD</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Farmacos restringidos
            </a>
            <ul class="dropdown-menu">
               <li><a class="dropdown-item"  href={{route('far.create')}}>Ingreso Farmacos</a></li> 
               <li><a class="dropdown-item"  href={{route('far.index')}}>Tablas</a></li> 
            </ul>
          </li>
       
        </ul>
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/login">Login<span class="sr-only"></span></a>
          <li>
            <a class="nav-link " href="/logout">Logout<span class="sr-only"></span></a>
          </li>
    
        </li>
     
       </ul>
      </div>
    </div>
</nav>
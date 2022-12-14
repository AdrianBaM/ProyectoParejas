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
              Medicinas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item"  href={{route('post.create')}}>Ingreso Medicinas</a></li>
              <li><a class="dropdown-item" href={{route('post.index')}}>Tabla Medicinas</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Miscelaneos
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item"  href={{route('mis.create')}}>Ingreso Miscelaneos</a></li>
              <li><a class="dropdown-item" href={{route('mis.index')}}>Tabla Miscelaneos</a></li>
            </ul>
          </li>
       
        </ul>
       <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="/login">Login<span class="sr-only"></span></a>
          <li>
            <form style="display: inline"  action="/logout" method="POST">
                @csrf
                <a class="nav-link" href="#" onclick="this.closest('form').submit()">Logout</a>
            </form>
          </li>
    
        </li>
     
       </ul>
      </div>
    </div>
</nav>
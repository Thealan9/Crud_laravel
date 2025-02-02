<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-light fa-gem" style="color: #5bb62b;"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-store" style="color: #ffcb0f;"></i> Dulces
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('products.create') }}">Registrar</a></li>
              <li><a class="dropdown-item" href="{{ route('products.index') }}">Inventario</a></li>
              <li><a class="dropdown-item" href="#">Marcas</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-person-rays" style="color: #ffc014;"></i> Clientes
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nuevo</a></li>
              <li><a class="dropdown-item" href="#">Agenda</a></li>
              <li><a class="dropdown-item" href="#">Direcciones</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-money-check-dollar"></i> Ventas
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Registrar</a></li>
              <li><a class="dropdown-item" href="#">Salidas</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
  <div class="offcanvas-header bg-primary text-white">
    <h5 class="offcanvas-title">Menú ElectroEGAM</h5>
  </div>
  <div class="offcanvas-body">
    <div class="d-grid">
      <a href="/electroegam.com/public/" class="btn btn-primary mb-2">Inicio</a>
      <a href="/electroegam.com/public/catalogo" class="btn btn-primary mb-2">Catálogo</a>
      <a href="/electroegam.com/public/conocenos" class="btn btn-primary mb-2">Conócenos</a>
      <a href="/electroegam.com/public/cuenta" class="btn btn-primary mb-2">Cuenta</a>
      <a href="/electroegam.com/public/contacto" class="btn btn-primary mb-2">Contacto</a>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg px-4" style="background-color:var(--color-principal);">
  <a class="navbar-brand" href="/electroegam.com/public/">
    ElectroEGAM
  </a>

  <div class="d-flex mx-3 flex-grow-1 position-relative">
    <input id="search-input" class="form-control" placeholder="Buscar productos...">
    <div id="suggestions-container" class="position-absolute w-100"></div>
  </div>

  <div class="d-flex align-items-center">
    <a href="/electroegam.com/public/catalogo" class="me-3 text-white">
      <i class="fas fa-shopping-cart"></i>
      <span id="cart-count" class="badge bg-danger">0</span>
    </a>
    <button class="btn btn-warning" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>

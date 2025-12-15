<section class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card-form shadow-lg">
                <h2 class="text-center mb-4 color-principal-texto">Crear Nueva Cuenta</h2>
                <form id="register-form">
                <div class="mb-3">
                    <label for="nombreCompleto" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombreCompleto" placeholder="Ej: Juan Pérez" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" minlength="8" required>
                    <div class="form-text">Mínimo 8 caracteres.</div>
                </div>
                <div class="mb-4">
                    <label for="confirmPassword" class="form-label">Confirmar Contraseña</label>
                    <input type="password" class="form-control" id="confirmPassword" minlength="8" required>
                </div>
                <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="terminos" required>
                    <label class="form-check-label" for="terminos">Acepto los <a href="#" id="ver-terminos">Términos y condiciones</a>
                </div>

                <button type="submit" class="btn-principal-acento w-100">Registrar Cuenta</button>
                    <p class="text-center mt-3">¿Ya tienes una cuenta? <a href="login.php" class="enlace-acento">Inicia Sesión aquí</a></p>
                </form>
            </div>
        </div>
    </div>
    </section>
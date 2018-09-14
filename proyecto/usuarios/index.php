  <?php include '../extend/header.php'; ?>
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Alta de usuarios</span>
            <form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">

              <div class="input-field">
                <input type="text" name="usuario" required autofocus title="Entre 8 y 15 caracteres, solo letras" pattern="[A-Za-z]{8,15}" id="usuario" onblur="may(this.value, this.id)">
                <label for="usuario">Usuario</label>
                <div class="validacion"></div>
              </div>

              <div class="input-field">
                <input type="password" name="pass1" required title="La contraseña debe contener mayusculas, minusculas y números, entre 8 y 15 caracteres"  pattern="[A-Za-z0-9]{8,15}" id="pass1">
                <label for="pass1">Contraseña</label>
              </div>

              <div class="input-field">
                <input type="password" required title="La contraseña debe contener mayusculas, minusculas y números, entre 8 y 15 caracteres"  pattern="[A-Za-z0-9]{8,15}" id="pass2">
                <label for="pass2">Verificar contraseña</label>
              </div>

              <select name="nivel" required>
                <option value="" disabled selected>Selecciona un nivel del usuario</option>
                <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                <option value="ASESOR">ASESOR</option>
              </select>

              <div class="input-field">
                <input type="text" name="nombre" required title="Nombre del usuario" id="nombre" onblur="may(this.value, this.id)" pattern="[A-Z/s ]+"><!-- Ingresar solor letras con espacios -->
                <label for="nombre">Nombre completo del usuario</label>
              </div>

              <div class="input-field">
                <input type="email" name="correo" title="Correo electrónico" id="correo">
                <label for="email">Correo electrónico</label>
              </div>

              <div class="file-field input-field">
                <div class="btn">
                  <span>Foto</span>
                  <input type="file" name="foto">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text">
                </div>
              </div>

              <button class="btn black waves-effect waves-light" type="submit" id="btn_guardar">Guardar<i class="material-icons right">save</i></button>

            </form>
          </div>
        </div>
      </div>
    </div>
  <?php include '../extend/scripts.php'; ?>
  <script type="text/javascript" src="../js/validacion.js"></script>
</body>
</html>

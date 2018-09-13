  <?php include '../extend/header.php'; ?>
    <div class="row">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <span class="card-title">Alta de usuarios</span>
            <form class="form" action="ins_usuarios.php" method="post" enctype="multipart/form-data">
              <div class="input-field">
                <input type="text" name="nick" required autofocus title="Entre 8 y 15 caracteres, solo letras" pattern="[A-Za-z]{8,15}" id="nick" onblur="may(this.value, this.id)">
                <div class="validacion">

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php include '../extend/scripts.php'; ?>
  <script type="text/javascript">
    $('#nick').change(function(){
      $.post('ajax_validacion_nick.php',{
        nick: $('#nick').value(),
        beforeSend: function(){
          $('.validacion').html("Espere un momento");
        }
      },)
    });
  </script>
</body>
</html>

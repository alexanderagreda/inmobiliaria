  </main>
  <!--1. Import jQuery-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!--2. Import materialize.js-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <!--3. Import sweetalert2.js-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.26.28/sweetalert2.js"></script>
  <script type="text/javascript">
    $('.sidenav').sidenav(); //inicializar sidenav
     $('select').formSelect(); //inicializar select

    //funcion para trasformar a mayusculas
    function may(obj, id){
      obj =  obj.toUpperCase();
      document.getElementById(id).value = obj;
    }
    //funcion de filtrado de filas en una tabla
    $('#buscar').keyup(function(){
      var contenido = new RegExp($(this).val(), 'i'); //Crea un objeto 'expresión regular' para encontrar un texto de acuerdo a un patrón.
      $('tr').hide(); // oculta todas las filas
      $('tr').filter(function(){
        return contenido.test($(this).text());
      }).show();
      $('.cabecera').attr('style','');
    });

  </script>

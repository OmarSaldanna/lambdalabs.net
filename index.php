<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Lambda Labs</title>
  <!-- icon -->
  <link rel="icon" href="https://res.cloudinary.com/dddfztayk/image/upload/v1716424086/assets/puicxkpexno06kqtonej.ico" type="image/x-icon">
  <!-- materialize js, css and icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- index.css -->
  <link href="css/index.css" rel="stylesheet">
</head>
<body>
  <!-- footer -->
  <?php require("components/header.php"); ?>


  <!-- first section: text and video -->
  <div class="top-space row bottom-border">
    <div class="col l4 m10 offset-m1 s10 offset-s1 center padding-sides">
      <!-- title -->
      <h3>Lambda IA</h3>
      <!-- text -->
      <p class="text justify">Descubre Lambda IA, la revolución en inteligencia artificial que va <span class="remark">más allá de las capacidades de chatGPT. Imagina interactuar con documentos, audios, videos de YouTube, imágenes y hasta robótica, todo desde un solo chat</span>. Lambda no solo iguala, sino que amplía las fronteras de lo posible, ofreciendo un arsenal de herramientas de IA de última generación. <span class="remark">Diseñada meticulosamente para estudiantes, maestros y profesionales</span>, Lambda se posiciona como la herramienta definitiva para integrar la IA en la educación y en el día a día. <span class="remark">Únete a la vanguardia con Lambda, donde las posibilidades son infinitas y el aprendizaje nunca se detiene.</span></p>
    </div>
    <div class="col l8 m10 offset-m1 s10 offset-s1 padding">
      <!-- video -->
      <video autoplay muted controls="false" src="https://res.cloudinary.com/dddfztayk/video/upload/v1716424092/assets/fwtufucqn8viatgay8ue.mp4" type="video/mp4">
      </video>
      <!-- buttons -->
      <a href="#!" class="extra-button btn hide-on-small-only" onclick="playVideo()"><i class="material-icons right">play_circle_outline</i>Video</a>
      &nbsp;
      <a href="#funciones" class="extra-button btn hide-on-small-only">Funciones</a>
      &nbsp;
      <a class="extra-button btn"><i class="material-icons right">arrow_forward</i>Probar Chat</a>
    </div>
  </div>


  <!-- second section: about us -->
  <div class="row top-space bottom-border">
    <!-- first column -->
    <div class="col m4 top-space-x2 right-border">
      <div class="icon-block padding-sides">
        <div class="center blue-text">
          <!-- big icon -->
          <i class="material-icons medium">people</i>
        </div>
        <!-- title -->
        <h5 class="center">Nosotros</h5>
        <!-- text -->
        <p class="text justify">Desde de México, somos una startup pionera en tecnología, <span class="remark">dedicada a forjar el futuro con soluciones de IA diseñadas específicamente para el sector educativo y corporativo</span>. En nuestra fase inicial, nos enfocamos en perfeccionar y optimizar nuestros productos, garantizando un rendimiento excepcional y la máxima seguridad. <span class="remark">Únete a nosotros en este viaje hacia la innovación y descubre cómo estamos redefiniendo los límites de la educación y el mundo empresarial con inteligencia artificial.</span></p>
      </div>
    </div>
    <!-- seccond column -->
    <div class="col m4 top-space-on-small">
      <div class="icon-block padding-sides">
        <div class="center pink-text">
          <!-- big icon -->
          <i class="material-icons medium">fingerprint</i>
        </div>
        <!-- title -->
        <h5 class="center">Visión</h5>
        <!-- text -->
        <p class="text justify">Imagina un futuro donde la inteligencia artificial no solo es avanzada sino también accesible. En nuestra visión, creamos <span class="remark">herramientas de IA que combinan la facilidad de uso con la sofisticación necesaria</span> para profesionales y el sector educativo. Nuestro objetivo es <span class="remark">unificar estos productos en un ecosistema inteligente conectado a través de un solo chat</span>, simplificando la interacción y maximizando la eficiencia.</p>
        <!-- image -->
        <img src="https://res.cloudinary.com/dddfztayk/image/upload/v1716424086/assets/p31x9nweglyafdxpimrw.png">
      </div>
    </div>
    <!-- third column -->
    <div class="col m4 top-space-x2 left-border">
      <div class="icon-block padding-sides">
        <div class="center orange-text">
          <!-- big icon -->
          <i class="material-icons medium">layers</i>
        </div>
        <!-- title -->
        <h5 class="center">Productos</h5>
        <!-- text -->
        <p class="text justify">Nos enorgullece ofrecer sistemas de IA altamente versátiles, diseñados para integrarse sin esfuerzo en los procesos educativos y empresariales. <span class="remark">Nuestros productos están pensados para revolucionar el aprendizaje y la comunicación, optimizando cada aspecto de estos campos</span>. Paralelamente, estamos a la vanguardia del desarrollo de sistemas de Internet de las Cosas (IoT) para el hogar, potenciados por IA, <span class="remark">marcando el camino hacia un futuro más conectado e inteligente.</span></p>
      </div>
    </div>
  </div>


  <!-- third section: function galery -->
  <div class="row top-space hide-on-small-only scrollspy" id="funciones">
    <div class="col s10 offset-s1">
      <h3>Galería de Funciones de Lambda</h3>
      <ul class="collapsible">

        <?php
          $first_functions = [];
          // Datos de conexión a la base de datos
          $username = "u168632632_omarsaldanna"; $dbname = "u168632632_lambdalabs";
          // $username = "omarsaldanna"; $dbname = "lambdalabs";
          // host and password
          $servername = "localhost";
          $password = "*7y-Ez.nBRDXfxS";
          // Crear la conexión
          $conn = new mysqli($servername, $username, $password, $dbname);
          // query para seleccionar los grupos de funciones
          $base_sql = "SELECT * FROM function_collection ORDER BY fid;";
          // Ejecutar la query y obtener el resultado
          $function_groups = $conn->query($base_sql);
          // contador para el tema de first functions
          $gid_counter = 0;
          // Recorrer los resultados y mostrarlos
          while($row = $function_groups->fetch_assoc()) {
            // per each role, make the query for the functions with a fid
            $functions = $conn->query("SELECT * FROM functions WHERE fid = {$row['fid']};");
            // count the functions
            $function_number = $functions->num_rows;;
        ?>

        <!-- collapsible item -->
        <li class="<?php echo ($row["fid"] == 0) ? "active" : ""; ?>">

          <!-- collapsible header -->
          <div class="gray collapsible-header text">
            <!-- Icon -->
            <i class="material-icons function-icon"><?php echo $row["icon"]; ?></i>
            <!-- Group Name -->
            <?php echo $row["name"]; ?>
            <!-- Function Count -->
            <span class="badge black right white-text"><?php echo $function_number; ?> funciones</span>
          </div>

          <!-- collapsible body -->
          <div class="collapsible-body row-no-margin row center">
            
            <!-- function buttons -->
            <div class="col m3 collection center">
              <?php
                // iterate the rows of the functions
                while($function = $functions->fetch_assoc()) {
                  // append the first function
                  if ($gid_counter == $row["fid"]) {
                    // append the first function
                    array_push($first_functions, $function["name"]);
                    // and change the counter
                    $gid_counter += 1;
                  }
              ?>
              <!-- these are the funcion buttons -->
              <a href="#!" onclick="change_funcion_content('<?php echo $function["name"]; ?>', <?php echo $row['fid']; ?>)" class="collection-item extra-button-function"><?php echo $function["name"]; ?></a>
              <?php } ?>
            </div>
            
            <!-- description -->
            <div class="col m4 collection">
              <h5 class="" id="function-title-<?php echo $row["fid"]; ?>">Titulo de Función</h5>
              <p class="container justify function-text" id="function-text-<?php echo $row["fid"]; ?>">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </p>
            </div>

            <!-- and image -->
            <div class="col m5">
              <img id="function-image-<?php echo $row["fid"]; ?>" src="assets/404.png">
            </div>
          </div>
        </li>

        <?php 
          } // end of while
        ?>


      </ul>
    </div>
  </div>


  <!-- fourth section: advantages -->

  <!-- footer -->
  <?php require("components/footer.php"); ?>
</body>
<script>
  // Auto init Materialize
  M.AutoInit();

  // php variables of the functions: an object
  // name : [description, image]
  var functions = { 
    <?php 
      $gid = 0;
      // select all the funcions
      $all_functions = $conn->query("SELECT * FROM functions ORDER BY fid;");
      // iterate functions
      while($f = $all_functions->fetch_assoc()) {
        // print name: [description, image]
        ?> 
        // prine the javascript item
        "<?php echo $f["name"]; ?>": ["<?php echo $f["description"]; ?>", "<?php echo $f["file"]; ?>"],
        <?php
      }
      // finally close connection
      $conn->close();
    ?>
  };

  // with php get the initial names
  var first_function_names = [<?php 
    foreach ($first_functions as &$name) {
      echo '"'.$name.'"'.",";
    }; 
  ?>];

  // function to change the funcion text and image content
  function change_funcion_content(name, sect_id) {
    // seleccionar la info [description, file]
    let info = functions[name];
    // seleccionar los componentes
    let function_text = document.getElementById("function-text-" + sect_id);
    let function_title = document.getElementById("function-title-" + sect_id);
    let function_image = document.getElementById("function-image-" + sect_id);
    // change the content with the info
    function_text.innerHTML = info[0];
    function_title.innerHTML = name;
    function_image.src = info[1];
  }

  // function to copy stuff to clipboard
  function copy(stuff) {
    navigator.clipboard.writeText(stuff).then(function() {
      M.toast({html: 'Email Copiado'})
    }, function() {
      M.toast({html: 'Ups, algo salió mal'})
    });
  }

  // select the video component
  var video = document.querySelector('video');
  // funcion to play the video, from the start
  function playVideo() {
    video.currentTime = 0;
    video.play();
  }

  // Enevnt that load the window
  window.addEventListener('load', function() {
    // run the video
    playVideo()
    video.controls = false;
    // and set the functions content
    let counter = 0;
    first_function_names.map((name) => {
      // set the sections text
      change_funcion_content(name, counter++);
    })

  });

  document.addEventListener('DOMContentLoaded', function() {
    // function to init sthe scrollspy
    var elems = document.querySelectorAll('.scrollspy');
    var instances = M.ScrollSpy.init(elems);
  });

</script>
</html>

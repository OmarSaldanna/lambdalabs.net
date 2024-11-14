<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lambda</title>
	<!-- icon -->
	<link rel="icon" href="https://res.cloudinary.com/dddfztayk/image/upload/v1716919620/lambda-logo-cut-removebg_zc48yk.png" type="image/png">
	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<!-- icons from google -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- materialize css and mine -->
    <link rel="stylesheet" type="text/css" href="styles/materialize.import.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<style type="text/css">
	:root {
		/* background colors */
		--primary: #131314;
		--secondary: #212121;
		--hover: #2a2a2a;
		/* font colors */
		--font: #FFFFFF;
		--subtitle: #616161;
		/* special colors */
		--special-1: #FFFFFF;
		--special-2: #E02E8C;
		--special-3: #FCE14E;
		--special-4: #1BB4F2;
	}
	* {
		margin: 0;
		font-family: "Roboto", sans-serif;
		font-weight: 400;
		font-style: normal;
		line-height: 1.3;
		color: var(--font);
		transition: background .5s, color .5s;
	}
	body {
		display: flex;
		flex-wrap: wrap;
		background-color: var(--primary);
	}
	h1 {
		font-weight: 500; font-size: 72px;
        	background: linear-gradient(to right, var(--special-1), var(--special-2), var(--special-3), var(--special-4)); 
        	-webkit-text-fill-color: transparent; 
        	-webkit-background-clip: text;
	}
	h2 {
		font-weight: 300;
		font-size: 64px;
		margin-top: -2vh;
		color: var(--subtitle);
	}
	/* grid */
	.menus {
		position: fixed;
		height: 100vh;
		width: 25vw;
		background-color: var(--secondary);
	}
	.chat {
		width: 70vw;
		margin-left: 25vw;
	}
	.modes {
		position: fixed;
		height: 100vh;
		width: 5vw;
		right: 0;
		background-color: var(--secondary);
	}
	.line {
		display: flex;
		flex-wrap: wrap;
	}
	.p-text {
		font-size: 1.1em;
		text-align: justify;
		font-family: "Roboto", sans-serif;
		font-weight: 400;
		font-style: normal;
	}
	/* helpers */
	.chat-title {
		width: 80%;
		margin-left: 10%;
		margin-top: 6vh;
	}
	.chat-cards {
		position: fixed;
		width: 60vw;
		top: 34vh;
		left: 30vw;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
	.card {
		width: 22%;
		height: 12rem;
		border-radius: 20px;
		transition: background .3s, box-shadow .3s;
		cursor: pointer;
		background-color: var(--secondary);
	}
	.card:hover {
		background-color: var(--hover);
	}
	.card-icon {
		width: 3rem;
		height: 3rem;
		margin: .6rem .6rem;
		border-radius: 15px;
		justify-content: center;
		align-content: center;
		align-items: center;
		text-align: center;
		background-color: var(--primary);
	}
	.card-icon i {
		font-size: 2.5rem;
	}
	.card-text {
		width: 80%;
		margin-left: 10%;
		margin-top: 8%;
		font-size: 20px;
	}
	/* cards and icons colors */
	.c1:hover{ box-shadow: var(--special-1) 0px 0px 0px 3px; }
	.c2:hover{ box-shadow: var(--special-2) 0px 0px 0px 3px; }
	.c3:hover{ box-shadow: var(--special-3) 0px 0px 0px 3px; }
	.c4:hover{ box-shadow: var(--special-4) 0px 0px 0px 3px; }
	.i1 { color: var(--special-1); }
	.i2 { color: var(--special-2); }
	.i3 { color: var(--special-3); }
	.i4 { color: var(--special-4); }
	/* input styles */
	.chat-input {
		position: fixed;
		bottom: 3vh;
		left: 28vw;
		width: 62vw;
		height: auto;
		padding: 1vw;
		border-radius: 60px;
		justify-content: space-between;
		cursor: pointer;
		background-color: var(--secondary);
	}
	textarea {
		border: none;
		background-color: transparent;
	    width: 88%;
	    overflow: auto;
	    outline: none;
	    height: 3vh;
	    font-size: 1.4em;
	    font-weight: 300;
	    resize: none;
	    box-sizing: border-box;
	    max-height: 30vh;
	    margin-top: .5%;
	}
	.chat-input button {
		bottom: 10px;
		border: none;
		border-radius: 50px;
		cursor: pointer;
		padding: 6px;
		height: 2.8em;
	}
	.chat-input button.button-file {
		background-color: transparent;
	}
	.chat-input button.button-file i {
		color: white;
		font-weight: 800;
	}
	.chat-input button.button-submit i {
		background-color: var(--font);
		font-size: 2em !important;
	}
	.chat-input button i {
		color: var(--primary);
	}

	/* menu collapsible */
	.collapsible { margin: 0 !important; border: none; }
	.collapsible-header { background-color: var(--primary) !important; border: none; }
	.collapsible-body { background-color: var(--secondary) !important; border: none; }
	.collapsible-header { transition: background .3s; font-size: 1.3em; }
	.collapsible-header:hover { background-color: var(--hover) !important; }
	/* this was to delete a '-' that appeared in the collapsible*/
	li.active::after { content: none !important; }

	/* mode buttons */
	.modes {
		padding: 25vh 0;
		justify-content: center;
		text-align: center;
		align-items: center;
	}
	.mode-button {
		border: none !important;
		width: 100%;
		height: 6vh;
		margin-bottom: 3vh;
		border: solid;
		background-color: transparent;
		cursor: pointer;
		transition: background .3s;
	}
	.mode-button:hover {
		background-color: var(--hover); !important;
	}
	.mode-button i {
		font-size: 2em;
	}
	/* materialize corrections */
	button:focus {
		background-color: transparent !important;
	}
	.input-field input[type=text], textarea { font-size: 1.3em !important; }
	.input-field input[type=text]:focus, textarea#personality:focus {
		border-bottom: 1px solid var(--font) !important;
	}

	td, th {
		padding: 8px 5px;
	}
	table.striped>tbody>tr:nth-child(odd) {
		background-color: var(--hover) !important;
	}

	.table-button {
		cursor: pointer;
		background-color: transparent;
		border-radius: 10px;
		border: solid 2px var(--font);
		padding: 3px;
		font-size: 1em;
	}
	.table-button:nth-child(even), .personality-button:nth-child(even) { margin-left: .6em; }
	
	.personality-button {
		background-color: transparent;
		border-radius: 10px;
		border: solid 2px var(--font);
		padding: 8px;
		font-size: 1em;
		cursor: pointer;
	}


</style>
<body>
	<!-- menus -->
	<div class="menus">
		<div class="row">
			<div class="s12">
				<ul class="collapsible">
					<!-- Recursos Zone -->
					<li>
						<div class="collapsible-header"><i class="material-icons">assessment</i>Recursos</div>
						<div class="collapsible-body">
							<div class="row">								
								<p class="p-text">
									En esta sección encontrarás cuantos recursos de IA te quedan por utilizar, se actualizan en tiempo real
								</p>
							</div>
							<div class="row">
								<table class="striped">
							        <tbody>
							          	<tr>
							            	<td>Imágenes</td>
							            	<td>10 imágenes</td>
							          	</tr>
							          	<tr>
							            	<td>Audios</td>
							            	<td>1000 caracteres</td>
							          	</tr>
							        </tbody>
							    </table>
							</div>
						</div>
					</li>

					<!-- Memoria Zone -->
					<li class="hide">
						<div class="collapsible-header"><i class="material-icons">sd_storage</i>	Memoria</div>
						<div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
					</li>

					<!-- Personalidad Zone -->
					<li class="active">
						<div class="collapsible-header"><i class="material-icons">fingerprint</i>	Personalidad</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="col s12">
									<p class="p-text"><strong>Describe y da instrucciones a Lambda de qué y cómo</strong> quieres que responda.</p>
								</div>
								<div class="input-field col s12">
									<textarea id="personality" class="materialize-textarea" placeholder="¿Cómo quieres tus respuestas?"></textarea>
								</div>
								<div class="col s12 left">
									<button class="personality-button">Guardar Cambios</button>
									<button class="personality-button">Restablecer</button>
								</div>
							</div>
						</div>
					</li>

					<!-- Archivos Zone -->
					<li>
						<div class="collapsible-header"><i class="material-icons">folder_open</i>	Archivos</div>
						<div class="collapsible-body">
							<div class="row">
								<p class="p-text">
									Selecciona de entre tus archivos disponibles el que quieras usar, o elimina los que ya no vayas a usar. <br>
								</p>
							</div>
							<div class="row">
								<table class="striped">
							        <tbody>
							          <tr>
							            <td><strong>ensayo.pdf</strong></td>
							            <td>
								            <!-- boton de eliminar -->
							            	<button class="table-button tooltipped" data-position="top" data-tooltip="Eliminar">
							            		<i class="material-icons">delete</i>
							            	</button>
								            <!-- boton de incluir -->
							            	<button class="table-button tooltipped" data-position="top" data-tooltip="Incluir">
							            		<i class="material-icons">attach_file</i>
							            	</button>
							            </td>
							          </tr>
							          <tr>
							            <td><strong>lambda-logo-cut.png</strong></td>
							            <td>
								            <!-- boton de eliminar -->
							            	<button class="table-button tooltipped" data-position="top" data-tooltip="Eliminar">
							            		<i class="material-icons">delete</i>
							            	</button>
								            <!-- boton de incluir -->
							            	<button class="table-button tooltipped" data-position="top" data-tooltip="Incluir">
							            		<i class="material-icons">attach_file</i>
							            	</button>
							            </td>
							          </tr>
							          <tr>
							            <td><strong>costos-lambda.xlsx</strong></td>
							            <td>
								            <!-- boton de eliminar -->
							            	<button class="table-button tooltipped" data-position="top" data-tooltip="Eliminar">
							            		<i class="material-icons">delete</i>
							            	</button>
								            <!-- boton de incluir -->
							            	<button class="table-button tooltipped" data-position="top" data-tooltip="Incluir">
							            		<i class="material-icons">attach_file</i>
							            	</button>
							            </td>
							          </tr>
							        </tbody>
							      </table>
							</div>
						</div>
					</li>
					
					<!-- Funciones Zone -->
					<li class="active">
						<div class="collapsible-header"><i class="material-icons">apps</i>Funciones</div>
						<div class="collapsible-body">
							<div class="row">
								<div class="col s12">
									<p class="p-text">Busca por <strong>conceptos o nombre y selecciona</strong> la función para que se autocomplete en el chat.</p>
								</div>
								<div class="input-field col s12">
									<input placeholder="¿Qué quieres hacer?" type="text" class="autocomplete">
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- chat -->
	<div class="chat">
		<!-- chat dropdown -->

		<!-- chat title -->
		<div class="chat-title">
			<h1 class="title-color">Hola Omar</h1>
			<h2 class="title-color">¿Qué haremos hoy?</h2>
		</div>

		<!-- chat cards -->
		<div class="chat-cards">
				
			<div class="card c1 side-color">
				<div class="card-icon">
					<i class="i1 material-icons">insert_link</i>
				</div>
				<div class="card-text">
					<p>Creemos un código QR para difundir un link</p>
				</div>
			</div>
			
			<div class="card c2 side-color">
				<div class="card-icon bg">
					<i class="i2 material-icons">insert_drive_file</i>
				</div>
				<div class="card-text">
					<p>¿Quieres hacer preguntas de un archivo PDF?</p>
				</div>
			</div>

			<div class="card c3 side-color">
				<div class="card-icon bg">
					<i class="i3 material-icons">photo_filter</i>
				</div>
				<div class="card-text">
					<p>Genera tus propias imágenes con IA con DALL-E 3</p>
				</div>
			</div>

			<div class="card c4 side-color">
				<div class="card-icon bg">
					<i class="i4 material-icons">video_library</i>
				</div>
				<div class="card-text">
					<p>¿Quieres hacerle preguntas a un video de YouTube?</p>
				</div>
			</div>

		</div>

		<!-- chat input -->
		<div class="line chat-input side-color">
			<!-- input files -->
			<input type="file" multiple style="display: none;">
			<button 
				class="button-file tooltipped" data-position="top"
				data-tooltip="Subir Archivo: CTRL+O" 
				onclick="document.querySelector('input[type=file]').click()"
			>
				<i class="material-icons">attach_file</i>
			</button>
			<!-- textarea -->
			<textarea id="textarea" placeholder="Escribe tu mensaje" rows="1"></textarea>
			<!-- send button -->
        	<button class="button-submit tooltipped" data-position="top"
				data-tooltip="Enviar: SHIFT+ENTER" >
        		<i class="material-icons">arrow_forward</i>
        	</button>
		</div>
	</div>
	
	<!-- buttons -->
	<div class="modes">
		<button class="mode-button tooltipped" data-position="left"
				data-tooltip="Modo Programador">
			<i class="material-icons">polymer</i>
		</button>
		<button class="mode-button tooltipped" data-position="left"
				data-tooltip="Estudio de Audio">
			<i class="material-icons">audiotrack</i>
		</button>
		<button class="mode-button tooltipped" data-position="left"
				data-tooltip="Diseñador de Imágenes">
			<i class="material-icons">photo_filter</i>
		</button>
		<button class="mode-button tooltipped" data-position="left"
				data-tooltip="Galería de Imágenes">
			<i class="material-icons">photo_library</i>
		</button>
		<button class="mode-button tooltipped" data-position="left"
				data-tooltip="IoT Cloud">
			<i class="material-icons">developer_board</i>
		</button>
		<button class="mode-button tooltipped" data-position="left"
				data-tooltip="Tutoriales y Consejos">
			<i class="material-icons">help_outline</i>
		</button>
	</div>

	<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
	<script type="text/javascript">
		
		// simple function used to redirect
		function redirect (url) {
			window.open(url, '_blank');
		}

		// select the textarea
		const textarea = document.getElementById('textarea');
		// add an event to resize the textarea
		textarea.addEventListener('input', auto_resize, false);
		// function to auto resize the textarea
		function auto_resize() {
			this.style.height = 'auto';
			this.style.height = this.scrollHeight + 'px';
		}

		// when the page is loaded1
		document.addEventListener('DOMContentLoaded', function() {
			// start the collapsible
		    var elems = document.querySelectorAll('.collapsible');
		    var instances = M.Collapsible.init(elems, { accordion: false });
			// start all the tooltips
		    var elems = document.querySelectorAll('.tooltipped');
		    var instances = M.Tooltip.init(elems, {});
		    // and the functions autocomplete
		    var elems = document.querySelectorAll('.autocomplete');
		    var instances = M.Autocomplete.init(elems, {
		    	data: {
			        "crear imagen": null,
			        "crear qr": null,
			        "preguntar a gpt4": null,
			        "investigar con gemini": null
			      }
		    });
	  	});


		// detectar comandos de teclado
	  	document.addEventListener('keydown', function(event) {
	  		// para hacer el submit
		    if (event.shiftKey && event.key === 'Enter') {
		        // Aquí va el código a ejecutar cuando se presiona SHIFT + ENTER
		        console.log('pressed')
		    }
		    // para subir archivos
		    if ((event.ctrlKey || event.metaKey) && event.key === 'o') {
	        	// Aquí va el código a ejecutar cuando se presiona CTRL + O
	        	document.querySelector('input[type=file]').click()
	    	}
	    	// para activar el input del buscador de funciones
	    	if ((event.ctrlKey || event.metaKey) && event.key === 'k') {
	        	// Aquí va el código a ejecutar cuando se presiona CTRL + O
	        	console.log('p')
	    	}
		});

	</script>
</body>
</html>
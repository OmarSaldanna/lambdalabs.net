CREATE TABLE function_collection (
    name VARCHAR(1000),
    icon VARCHAR(50),
    fid INT UNIQUE, 
    PRIMARY KEY (fid)
) DEFAULT CHARSET=utf8;

CREATE TABLE functions (
    fid INT,
    name VARCHAR(100) UNIQUE,
    description VARCHAR(1000),
    file VARCHAR(1000),
    PRIMARY KEY (name),
    FOREIGN KEY (fid) REFERENCES function_collection(fid)
) DEFAULT CHARSET=utf8;


-- Function Collection Inserts
insert into function_collection values ("Documentos", "picture_as_pdf", 0);
insert into function_collection values ("Imágenes", "photo_library", 1);
insert into function_collection values ("Audios", "audiotrack", 2);
insert into function_collection values ("Videos", "ondemand_video", 3);
insert into function_collection values ("Texto", "textsms", 4);
insert into function_collection values ("IoT", "wb_incandescent", 5);
insert into function_collection values ("Administrativas", "subdirectory_arrow_right", 6);
insert into function_collection values ("Manual", "assistant", 7);

-- formato de las imagenes: f[funcion number]_[group].png

-- Function Inserts
-- Group 0: Documentos
insert into functions values(0,"Leer PDFs", "Esta función permite que Lambda lea un archivo PDF de aproximadamente 12 mil palabras y que responda a preguntas basadas en la información del PDF. Básicamente podría resumir el documento, obtener los puntos más importantes y mucho más.", "https://res.cloudinary.com/dddfztayk/image/upload/v1716424141/assets/functions/eknhwmvrg2h3p9jzebww.png");
insert into functions values(0,"Recortar PDFs", "Esta función permite recortar PDFs, solo dile entre qué páginas cortar y Lambda te dará el archivo recortado, además este archivo recortado estará disponible para que se use en siguientes funciones como la de leer PDFs.", "https://res.cloudinary.com/dddfztayk/image/upload/v1716424142/assets/functions/hxpcrbxzn1ozvpoadkmq.png");

-- Group 1: Imágenes
insert into functions values(1,"Visión Inteligente","Esta función permitirá que Lambda analice imágenes y puedas preguntar sobre ellas, desde diagramas, plantas, animales, países, ecuaciones, arte y mucho más.", "https://res.cloudinary.com/dddfztayk/image/upload/v1716424142/assets/functions/mpv2d81y9utjcvjdhcuv.png");
insert into functions values(1,"Generar Imágenes", "Esta función es la que crea imágenes con DALL-E 3. Proporciona las descripciones de las imágenes en inglés. El modelo actual solamente permite crear solo una imagen a la vez. Además ahora podrás crear imágenes en formatos vertical, horizontal y cuadrado.", "https://res.cloudinary.com/dddfztayk/image/upload/v1716424142/assets/functions/vm9irvxrwbxk9j86fq7p.png");
insert into functions values(1,"Generar QRs", "Esta función se encarga de generar códigos QR de links o de textos. Solo proporciona el contenido del QR y Lambda lo creará.", "https://res.cloudinary.com/dddfztayk/image/upload/v1716424143/assets/functions/fzfkno3pqfn0bkizqhgv.png");

-- Group 2: Audios
insert into functions values(2,"Traducir Audios", "Esta función hará que Lambda traduzca a texto en cualquier idioma (a español por default); un audio en cualquier idioma. Ideal para traducir fragmentos de videos, o diálogos con extranjeros. Sólo sube tu archivo o graba el audio y ocupa la función.", "assets/functions/f0-2.png");
insert into functions values(2,"Generar Audios", "Esta función te permitirá generar audios a partir de un texto, todo por inteligencia artificial. Solo manda el texto y Lambda generará el audio al instante. El modelo puede generar audio en casi cualquier idioma.", "assets/functions/f1-2.png");
insert into functions values(2,"Preguntas a Audios", "Esta función permite a Lambda transcribir el texto de audios para después hacer preguntas específicas sobre la información del audio. Sólo sube o graba el audio y después puedes preguntar.", "assets/functions/f2-2.png");
insert into functions values(2,"Transcribir Audios", "Esta función permite a Lambda transcribir el texto de audios, dichos pueden ser en casi cualquier idioma. Sólamente sube tu archivo o graba un audio desde Discord y ocupa la función.", "assets/functions/f3-2.png");
insert into functions values(2,"Calificar Inglés", "Esta función te permitirá evaluar tus audios en inglés, Lambda evaluará tu audio y te dará retroalimentación sobre tu diálogo, vocabulario, gramática y más. Esta función es ideal para practicar tu inglés. Solo sube o graba tu audio y usa la función. Ideal para profesores de inglés.", "assets/functions/f4-2.png");
insert into functions values(2,"Calificar Idioma", "Esta función te permitirá evaluar tus audios en cualquier idioma, Lambda evaluará tu audio y te dará retroalimentación sobre tu diálogo, vocabulario, gramática y más. Esta función es ideal para practicar tu aprendizaje de idioma. No tienes que especificar el lenguaje, Lambda lo va a detectar. Ideal para profesores de idiomas", "assets/functions/f5-2.png");

-- Group 3: Videos
insert into functions values(3,"Preguntas a Videos", "Esta función te permitirá hacerle preguntas a Lambda sobre videos de YouTube, solamente debes de pasarle a Lambda el link del video. IMPORTANTE: el link del video de YouTube debe de ser copiado desde el botón de 'compartir'", "assets/functions/f0-3.png");

-- Group 4: Texto
insert into functions values(4,"Usar GPT-4", "Es básicamente la misma función que la conversación convencional, también almacena la conversación, el detalle es usa GPT-4, que es el modelo más capaz de OpenAI. Se recomienda usar únicamente en casos excepcionales.", "assets/functions/f0-4.png");
insert into functions values(4,"Conversación", "Esta función es la que ocupa lambda para las conversaciones, también es implementada en el comando de 'Lambda, ...'. Permite tener conversaciones con gpt 3.5-turbo.", "assets/functions/f1-4.png");
insert into functions values(4,"Traducir Textos", "Es una función de Lambda que permite hacer traducciones al instante a casi cualquier idioma del mundo.", "assets/functions/f2-4.png");
insert into functions values(4,"Conversiones de Unidades", "Es un conversor universal de unidades, solo dile a que unidades o código quieres convertir algo y listo. Este comando no aplica para conversiones a monedas.", "assets/functions/f3-4.png");
insert into functions values(4,"Ajustar la Personalidad", "Permite ajustar la 'personalidad' con la que Lambda responde, podrás pedir que Lambda responda como algún célebre científico, como un poeta o literato, o que responda con sarcasmo o entusiasmo. Además podrías pedirle que escriba en manera de lista, remarque conceptos, etc. Esta función elimina la conversación y esta vuelve a empezar desde cero.", "assets/functions/f5-4.png");
insert into functions values(4,"Programar", "Lambda te escribirá programas basados en una descripción del programa, puede ser casi cualquier tipo de programa.", "assets/functions/f6-4.png");
insert into functions values(4,"Limpiar Conversación", "Esta función borra el contexto almacenado, es decir, Lambda borra tu historial de conversación (manualmente);. Esta función es recomendable para cuando quieres hablar con lambda sobre un tema diferente, pues te permite empezar una nueva conversación.", "assets/functions/f7-4.png");

-- Group 5: IoT
insert into functions values(5,"Encender Dispositivos IoT", "Permite a Lambda encender dispositivos conectados a la red de dispositivos de IoT de Lambda. Manda un valor de 255. Para más información técnica consulta https://github.com/OmarSaldanna/", "assets/404.png");
insert into functions values(5,"Apagar dispositivos IoT", "Permite apagar dispositivos conectados a la red de dispositivos de Lambda para IoT. Manda un valor de 0. Para más información consulta https://github.com/OmarSaldanna/lambda-iot-client.", "assets/404.png");
insert into functions values(5,"Enviar mensajes IoT", "Permite mandar valores específicos a los dispositivos conectados a la red de Lambda IoT, esos valores van desde números hasta strings de texto. Para más información consulta https://github.com/OmarSaldanna/lambda-iot-client.", "assets/404.png");
insert into functions values(5,"Lectura de datos IoT", "Esta función permite que Lambda lea el valor de sensores o estados de dispositivos (o cualquier variable) conectados a los Arduinos en la red de Lambda para IoT. Para más información consulta https://github.com/OmarSaldanna/lambda-iot-client.", "assets/404.png");

-- Group 6: Administrativas
insert into functions values(6,"Obtener ID", "Esta función permite al usuario mostrarle su ID de discord. Esta ID se utiliza para otras funciones de Lambda, como las conexiones de IoT para robótica. Además quizá te la pida un administrador para registrarte.", "assets/functions/f0-6.png");
insert into functions values(6,"Mostrar de Recursos", "Esta función sirve para mostrar cuántos recursos de Lambda te quedan por usar: imágenes, tokens de conversación, audios y lo demás que lambda cuente como uso. Esto te ayudará a que vayas midiendo tu uso de Lambda.", "assets/functions/f1-6.png");

-- Grupo 7: Manual
insert into functions values(7, "Pregunta Específica", "Esta función lee los comandos de las funciones y responderá preguntas acerca de como usar las funciones, por ejemplo: como hacer preguntas a videos de YouTube, como usar la visión inteligente, como generar códigos QR, etc.", "assets/functions/f0-7.png");
insert into functions values(7, "Pregunta General", "Esta función lee la lista de funciones de Lambda y permite hacerle preguntar respecto a esta lista, por ejemplo: que funciones tienen que ver con audio, que hace la función de visión inteligente, mostrar la lista completa de funciones, etc.", "assets/functions/f1-7.png");


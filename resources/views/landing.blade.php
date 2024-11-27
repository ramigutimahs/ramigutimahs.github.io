<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de DigitalForge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilo personalizado */
        header {
            padding: 1rem; /* Reducir padding */
            background-color: #347CE7FF; /* Verde */
            color: white;
        }

        header h1 {
            font-size: 1.5rem;
            margin: 0;
            white-space: nowrap; /* Mantener en una línea */
            overflow: hidden; /* Ocultar texto extra */
            border-right: 3px solid white; /* Cursor efecto escritura */
            width: 0; /* Texto invisible al inicio */
            animation: typing 6s steps(30, end), blink 0.9s step-end infinite alternate;
            animation-iteration-count: infinite;
        }

        @keyframes typing {
            0% {
                width: 0;
            }
            50% {
                width: 100%;
            }
            100% {
                width: 0; /* Vuelve al inicio */
            }
        }

        @keyframes blink {
            from { border-right-color: white; }
            to { border-right-color: transparent; }
        }
        .custom-blue {
        background-color: #007BFF; /* Cambia el código hexadecimal al color deseado */
    }

        header p {
            font-size: 0.9rem; /* Reducir tamaño del subtítulo */
            margin: 0;
        }

        .carousel-inner img {
            max-height: 400px; /* Limitar la altura de las imágenes */
            object-fit: cover; /* Mantener la imagen centrada */
        }

        #details {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f8f9fa; /* Fondo claro */
            border: 1px solid #dee2e6; /* Borde suave */
            border-radius: 0.5rem;
        }

        .section-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

    /* Estilos del chatbot */
    .chatbot-section {
        position: fixed;
        bottom: 10px;
        right: 10px;
        width: 300px;
        background-color: #f1f1f1;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        transition: all 0.3s;
    }

    .chatbox {
        display: flex;
        flex-direction: column;
        height: 400px;
    }

    /* Título del chatbot */
    .chatbot-title {
        font-size: 1.2rem;
        font-weight: bold;
        padding: 10px;
        background-color: #007BFF;
        color: white;
        text-align: center;
        border-radius: 8px 8px 0 0;
        cursor: pointer; /* Hacer que sea clickeable */
        display: block; /* Siempre visible */
    }

    .chat-log {
        flex: 1;
        overflow-y: auto;
        padding: 10px;
        background-color: white;
        border-radius: 8px;
        margin-bottom: 10px;
        max-height: 300px;
    }

    .chat-input {
        padding: 10px;
        width: calc(100% - 20px);
        border: none;
        border-radius: 4px;
        margin-bottom: 10px;
        font-size: 1rem;
    }

    .send-button {
        padding: 10px;
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 1rem;
    }

    .send-button:hover {
        background-color: #007BFF;
    }

    .minimize-button {
        background-color: #007BFF;
        color: white;
        border: none;
        padding: 5px 10px;
        cursor: pointer;
        font-size: 1.5rem;
        border-radius: 50%;
        align-self: flex-end;
        margin-top: 10px;
    }

    .minimize-button:hover {
        background-color: #007BFF;
    }

    .chat-message {
        margin-bottom: 15px;
    }

    .chatbot-message {
        color: green;
        font-weight: bold;
    }

    .user-message {
        color: blue;
    }

    /* Cuando el chatbot está minimizado */
    .chatbot-section.minimized .chatbox {
        height: 50px; /* Solo muestra el botón para abrir */
    }

    .chatbot-section.minimized .chat-log {
        display: none;
    }

    .chatbot-section.minimized #chat-input {
        display: none;
    }

    .chatbot-section.minimized #send-button {
        display: none;
    }

    /* Mantener el título visible incluso cuando el chatbot está minimizado */
    .chatbot-section.minimized .chatbot-title {
        display: block;
    }
    </style>
</head>
<body>
<!-- Menú de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://cdn-icons-png.flaticon.com/512/8365/8365315.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 30px;">
            DigitalForge
        </a>
        <header class="text-center">
            <h1>Bienvenidos a Digital Forge</h1>
            <p>Soluciones innovadoras para el campo</p>
        </header>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#" onclick="showDetails('mission')">Misión</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="showDetails('vision')">Visión</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="showDetails('history')">Historia</a></li>
                <li class="nav-item"><a class="nav-link" href="#" onclick="showDetails('privacy')">Política de Privacidad</a></li>
            </ul>
        </div>
    </div>
</nav>


    <main class="container my-5">
        <!-- Carrusel de imágenes -->
        <section id="carousel" class="mb-5">
            <h2 class="text-center">Nuestros Productos</h2>
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://cdn.prod.website-files.com/5ec333ed5f9f2b6c7886f157/65e74c987b7026098dde9467_New%20Digital%20Forge%20Logo.png" class="d-block w-100" alt="Producto 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://contentstatic.techgig.com/thumb/msid-98517027,width-800,resizemode-4/5-Best-tips-to-write-a-cover-letter-as-a-software-developer.jpg?24886" class="d-block w-100" alt="Producto 2">
                    </div>
                    <div class="carousel-item">
                        <img src="https://media.istockphoto.com/id/1530256492/es/vector/concepto-de-desarrollo-de-software-ordenador-port%C3%A1til-con-pantalla-abierta-colgando-sobre-el.jpg?s=612x612&w=0&k=20&c=BCvNmU3KwP5LtQXIA8dmf7-ebXn7tenm6OBHXDWr8pU=" class="d-block w-100" alt="Producto 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Siguiente</span>
                </button>
            </div>
        </section>

        <!-- Detalles dinámicos -->
        <section id="details" class="text-center">
            <div id="details-content">
                <p>Selecciona una opción del menú superior para ver más detalles.</p>
            </div>
        </section>

        <!-- Contactos -->
        <section id="contact" class="mt-5">
            <h2 class="text-center">Contáctanos</h2>
            <div class="row">
                <div class="col-md-4 text-center">
                    <i class="fas fa-map-marker-alt fa-2x text-success"></i>
                    <p>Av. Central 3er anillo interno #685</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-phone-alt fa-2x text-success"></i>
                    <p>+591 61326028</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-envelope fa-2x text-success"></i>
                    <p>info@digitalforge.com</p>
                </div>
            </div>
        </section>

        <!-- Redes Sociales -->
        <section id="social" class="text-center mt-5">
            <h2>Síguenos en nuestras redes sociales</h2>
            <div class="d-flex justify-content-center gap-4">
                <a href="https://www.facebook.com/groups/1137063154608734" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="https://wa.me/+59161326028" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-whatsapp fa-2x"></i>
                </a>
                <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
            </div>
        </section>
        
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 DigitalForge. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Contenido de las secciones
        const content = {
            mission: "<h3 class='section-title'>Nuestra Misión</h3><p> Nuestra misión como empresa y equipo es la de facilitar la vida de las personas mediante el uso de la tecnología, desarrollando soluciones innovadoras enfocadas a la calidad y personalización del resultado, que proporcionen una grata experiencia de usuario, y que aporten valor y tengan un impacto positivo en el día a día de nuestra sociedad.</p>",
            vision: "<h3 class='section-title'>Nuestra visión de aquello en lo que nos queremos convertir se resume en: Llegar a ser un referente como empresa de desarrollo, en los productos y servicios ofrecidos. Diseñar y desarrollar servicios y soluciones software diferenciales, que aporten un gran valor. Ser una empresa atractiva, como proveedor tecnológico y también como lugar de trabajo</p>",
            history: "<h3 class='section-title'>Historia</h3><p> DigitalForge, es una empresa dedicada al desarrollo de software con base en Santa Cruz de la Sierra, inicia sus actividades de forma comercial el 2 de octubre de 2013, pasando por una reestructuración estratégica el 30 de noviembre de 2015, dando una mejor estructura a la firma tanto en la administración como en la parte comercial, para poder dar un mejor servicio y satisfacer al cliente con un producto de calidad.</p>",
            privacy: "<h3 class='section-title'>Política de Privacidad</h3><p>Nos comprometemos a proteger la información de nuestros clientes.</p>"
        };

        // Mostrar contenido dinámico
        function showDetails(section) {
            const detailsContent = document.getElementById("details-content");
            detailsContent.innerHTML = content[section] || "<p>Sección no encontrada.</p>";
        }
    </script>
    
<!-- Sección del Chatbot -->
<section id="chatbot" class="chatbot-section">
    <div id="chatbox" class="chatbox">
        <!-- Título visible solo en modo maximizado -->
        <div id="chatbot-title" class="chatbot-title">Chatbot</div>

        <div id="chat-log" class="chat-log">
            <!-- Mensajes del chatbot -->
        </div>
        <input id="chat-input" type="text" class="chat-input" placeholder="Escribe tu mensaje..." />
        <button id="send-button" class="send-button">Enviar</button>
        <button id="minimize-button" class="minimize-button">-</button> <!-- Botón para minimizar -->
    </div>
</section>



<script>
    // Función para agregar un mensaje al chat
    function addMessage(message, sender) {
        const chatLog = document.getElementById("chat-log");
        const messageElement = document.createElement("div");
        messageElement.classList.add("chat-message");
        messageElement.classList.add(sender); // user-message o chatbot-message

        const messageText = document.createElement("span");
        messageText.innerText = message;

        messageElement.appendChild(messageText);
        chatLog.appendChild(messageElement);

        // Desplazar hacia el último mensaje
        chatLog.scrollTop = chatLog.scrollHeight;
    }

    // Función para obtener una respuesta automática
    function getChatbotResponse(userMessage) {
        const message = userMessage.toLowerCase();

        if (message.includes("productos")) {
            return "Tenemos una variedad de sistemas de gestion que pueden ayudar a mejorar tu empresa. ¿Te gustaría saber más sobre algún sistema en especifico?";
        } else if (message.includes("mision")) {
            return "Todo sobre crecimiento Tomamos la mejora de la productividad agrícola como nuestro deber. Con soluciones eficientes y sustentables, protegemos cuidadosamente los cultivos mientras cuidamos el medio ambiente. Nos esforzamos por aumentar el rendimiento de las cosechas y trabajamos junto con nuestros empleados, socios y agricultores de todo el mundo, con el objetivo de lograr un crecimiento mutuo donde todos ganen.";
        } else if (message.includes("vision")) {
            return "Nuestra visión es ser líderes en innovación y sostenibilidad agroindustrial.";
        } else if (message.includes("historia")) {
            return "Desde 1990, estamos transformando el campo con soluciones efectivas y sostenibles.";
        } else if (message.includes("privacidad")) {
            return "Nos comprometemos a proteger la información de nuestros clientes y respetar su privacidad.";
        } else if(message.includes("chau")){
            return "Hasta luego, pero si tienes quieres saber mas informacion sobre nosotros no dudes en preguntar."
        }else if (message.includes("hola")){
            return "Dime que informacion deseas saber de Digital Forge?"
        }else if(message.includes("gracias")){
            return "De nada, puedes volver a preguntar si deseas saber mas sobre Digital Forge"
        }
        {
            return "Lo siento, no entendí tu pregunta. ¿Podrías reformularla?";
        }
    }

    // Función para saludar automáticamente cuando la página carga
    window.onload = function() {
        setTimeout(() => {
            addMessage("¡Hola! ¿En qué te puedo ayudar hoy?", "chatbot-message");
        }, 1000); // Saludo inicial con retardo
    };

    // Enviar mensaje cuando el usuario presiona el botón de enviar
    document.getElementById("send-button").addEventListener("click", function() {
        const userMessage = document.getElementById("chat-input").value.trim();
        
        if (userMessage) {
            addMessage(userMessage, "user-message");

            // Respuesta del chatbot
            const response = getChatbotResponse(userMessage);
            setTimeout(() => {
                addMessage(response, "chatbot-message");
            }, 1000); // Simular un pequeño retardo en la respuesta del chatbot

            // Limpiar el campo de entrada
            document.getElementById("chat-input").value = "";
        }
    });

    // Enviar el mensaje cuando el usuario presiona Enter
    document.getElementById("chat-input").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            document.getElementById("send-button").click();
        }
    });

    // Función para minimizar/restaurar el chat al hacer clic en el título
    document.getElementById("chatbot-title").addEventListener("click", function() {
        const chatbotSection = document.getElementById("chatbot");
        chatbotSection.classList.toggle("minimized");

        // Cambiar el texto del botón de minimizar
        if (chatbotSection.classList.contains("minimized")) {
            document.getElementById("minimize-button").innerText = "+";
        } else {
            document.getElementById("minimize-button").innerText = "-";
        }
    });

    // Función para minimizar/restaurar el chat con el botón de minimizar
    document.getElementById("minimize-button").addEventListener("click", function() {
        const chatbotSection = document.getElementById("chatbot");
        chatbotSection.classList.toggle("minimized");

        // Cambiar el texto del botón de minimizar
        if (chatbotSection.classList.contains("minimized")) {
            document.getElementById("minimize-button").innerText = "+";
        } else {
            document.getElementById("minimize-button").innerText = "-";
        }
    });
</script>


</body>

</html>

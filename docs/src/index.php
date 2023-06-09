<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@3.0.9/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </head>

    <body class="bg-gray-800">
        <header class="bg-white py-4 border-gray-800 border-solid border-t-2 border-b-2 border-l-2 border-r-2">
            <div class="container mx-auto px-4">
                <nav class="flex items-center justify-between">
                    <a href="#" class="text-2xl font-bold text-gray-800"> MW </a>
                    <ul class="flex space-x-4">
                        <li><a href="#" class="text-gray-800 hover:text-gray-600">Inicio</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-600">Servicios</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-600">Equipo</a></li>
                        <li><a href="#" class="text-gray-800 hover:text-gray-600">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <main class="bg-white container mx-auto px-4 py-8">
        <section>
            <h1 class="text-3xl font-semibold text-gray-800 text-center">Landing Page Tailwind CSS</h1>
            <p class="text-gray-600 mt-4 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
            ullamcorper consequat enim, vel vestibulum ipsum vestibulum nec.</p>
        </section>
        
        <section class="mt-8">
                <h2 class="text-2xl font-bold text-gray-800 text-center">¿Porqué elegirnos?</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
                    <div class="bg-gray-800 p-6 rounded shadow-md">
                        <h3 class="text-xl font-bold text-gray-100">Punto 1</h3>
                        <p class="text-gray-100 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            ullamcorper
                            consequat enim, vel vestibulum ipsum vestibulum nec.</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded shadow-md">
                        <h3 class="text-xl font-bold text-gray-100">Punto 2</h3>
                        <p class="text-gray-100 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            ullamcorper
                            consequat enim, vel vestibulum ipsum vestibulum nec.</p>
                    </div>
                    <div class="bg-gray-800 p-6 rounded shadow-md">
                        <h3 class="text-xl font-bold text-gray-100">Punto 3</h3>
                        <p class="text-gray-100 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                            ullamcorper
                            consequat enim, vel vestibulum ipsum vestibulum nec.</p>
                    </div>
                </div>
        </section>
        </main>
        <section class="bg-gray-800 py-8">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-semibold text-white text-center mb-8">Nuestros Servicios Ofrecidos</h2>
                <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <li class="bg-white p-4 rounded shadow-md transform transition duration-300 ease-in-out hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800">Título del Servicio 1</h3>
                        <p class="text-gray-600 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum sapiente officia, est corrupti alias hic adipisci optio assumenda voluptates odio at quidem error quisquam minima cumque fugiat perferendis? Rem, vel?</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-6 py-2 rounded">Información</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded">Precio</button>
                        </div>
                    </li>
                    <li class="bg-white p-4 rounded shadow-md transform transition duration-300 ease-in-out hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800">Título del Servicio 2</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores eveniet aperiam molestiae cupiditate, aut perferendis veniam autem, ipsam nobis molestias ex, fugit doloremque natus quibusdam dolorum delectus quaerat eaque quidem.</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-6 py-2 rounded">Información</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded">Precio</button>
                        </div>
                    </li>
                    <li class="bg-white p-4 rounded shadow-md transform transition duration-300 ease-in-out hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800">Título del Servicio 3</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, magni accusantium! Velit repudiandae voluptates dignissimos voluptatibus dicta, rem provident veritatis illo temporibus, neque aut saepe possimus odit sed amet maxime?</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-6 py-2 rounded">Información</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded">Precio</button>
                        </div>
                    </li>
                    <li class="bg-white p-4 rounded shadow-md transform transition duration-300 ease-in-out hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800">Título del Servicio 4</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint ratione sit minima, non vero doloremque consequatur voluptate et soluta temporibus cumque, labore, alias atque autem quaerat! In pariatur repudiandae ullam!</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-6 py-2 rounded">Información</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded">Precio</button>
                        </div>
                    </li>
                    <li class="bg-white p-4 rounded shadow-md transform transition duration-300 ease-in-out hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800">Título del Servicio 5</h3>
                        <p class="text-gray-600 mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit ipsam at doloremque non consequuntur placeat quidem animi corporis repellendus dolore nemo quod magni soluta, omnis exercitationem ea ex quis laboriosam.</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-6 py-2 rounded">Información</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded">Precio</button>
                        </div>
                    </li>
                    <li class="bg-white p-4 rounded shadow-md transform transition duration-300 ease-in-out hover:scale-105">
                        <h3 class="text-xl font-bold text-gray-800">Título del Servicio 6</h3>
                        <p class="text-gray-600 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident labore repellat id architecto maxime natus veritatis vero dolores, dolor enim veniam fuga consequuntur eligendi? Aspernatur et esse optio explicabo vel.</p>
                        <div class="mt-4 flex justify-between">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-6 py-2 rounded">Información</button>
                            <button class="bg-green-500 hover:bg-green-600 text-white text-sm font-semibold px-6 py-2 rounded">Precio</button>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        
        <section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-2">
            <div class="container mx-auto px-4">
                <ul class="list-none">
                    <li class="bg-center bg-gray-50 p-12 rounded shadow-md transition duration-300 ease-in-out transform hover:scale-105">
                        <div class="flex items-center justify-center h-full mb-6">
                            <section class="text-center">
                                <h3 class="text-3xl font-semibold text-gray-800">Texto demostrativo</h3>
                                <p class="text-gray-800">Descripción del texto demostrativo</p>
                                <div class="border-x-gray-800 mx-auto w-48 border-t-8 border-b-8 mt-4 border-l-4 border-gray-800 p-2">
                                    <img src="/img/r900*500.gif" alt="GIF" class="w-full h-auto">
                                    <div class="mx-auto w-48 border-t-8 border-b-8 mt-2 border-l-4 border-gray-800 p-2"></div>
                                </div>
                            </section>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
       
        <section>
         <div class="bg-gray-800 text-white py-48 w-3/4 mx-auto">
         <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl text-center font-semibold mb-6">¡Aumenta las vistas mes a mes!</h2>
         </div>
         </div>
        </section>

        <section class="bg-gray-800 mb-8">
        <div class="w-3/4">
        <canvas id="myChart" width="400" height="130"></canvas>

        </div>

        <script src="/javascript/chart1.js"></script>

        </section>

        <section class="bg-gray-800 text-white py-24">
            <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl text-center font-semibold mb-6">Nuestro Equipo</h2>
            </div>
        </section> 

        <section class="flex flex-wrap justify-center">
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-32 object-cover" src="/img/user100*100.png" alt="Imagen del miembro">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-center">Nombre del Miembro</h3>
                <p class="text-gray-600 text-center">Cargo</p>
            </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-32 object-cover" src="/img/user100*100.png" alt="Imagen del miembro">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-center">Nombre del Miembro</h3>
                <p class="text-gray-600 text-center">Cargo</p>
            </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-32 object-cover" src="/img/user100*100.png" alt="Imagen del miembro">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-center">Nombre del Miembro</h3>
                <p class="text-gray-600 text-center">Cargo</p>
            </div>
            </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 xl:w-1/4 p-4">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
            <img class="w-full h-32 object-cover" src="/img/user100*100.png" alt="Imagen del miembro">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-center">Nombre del Miembro</h3>
                <p class="text-gray-600 text-center">Cargo</p>
            </div>
            </div>
        </div>
        </section>

        <section class="bg-gray-800 text-white py-24">
            <div class="max-w-4xl mx-auto px-4">
            <h2 class="text-3xl text-center font-semibold mb-6">¡Descubre el poder de la creatividad!</h2>
            <p class="text-center mb-8">Nuestro equipo de expertos está listo para ayudarte a alcanzar tus metas.</p>
            </div>
        </section>      

        <section class="min-h-fit flex items-center justify-center">
            <div class="bg-white p-8 rounded-md shadow-md w-full sm:w-4/5">
                <h2 class="text-center text-2xl font-semibold mb-4">Deja un mensaje</h2>
                <form action="/php/enviar_mensaje.php" method="post">
                    <div class="mb-4">
                        <label for="email" class="block font-medium">Correo electrónico</label>
                        <input type="email" id="email" name="email" required
                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="correo@ejemplo.com">
                    </div>
                    <div class="mb-4">
                        <label for="mensaje" class="block font-medium">Mensaje</label>
                        <textarea id="mensaje" name="mensaje" required rows="4"
                            class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"
                            placeholder="Escribe tu mensaje"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="enviar"
                            class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-600">Enviar
                            mensaje</button>
                    </div>
                </form>
                <?php 
                    include("/opt/lampp/htdocs/tailwindv2/php/enviar_mensaje.php");
                ?>
            </div>
        </section>
		
        <footer class="mt-4 bg-white py-8 border-gray-800 border-solid border-t-8 border-b-2 border-l-2 border-r-2">
            <div class="container mx-auto px-4">
                <p class="text-center text-gray-800">© 2023 Todos los derechos reservados. Landing Page Tailwind CSS.</p>
            </div>
        </footer>

    </body>

</html>
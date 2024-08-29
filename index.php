<?php
$PLACE_HOLDER = 'https://www.mirringo.com.co/Portals/mirringo/Images/articulos-actualidad-gatuna/ciclo-de-vida-de-los-gatos/Interna-1-ciclo-de-vida-de-los-gatos.jpg?ver=2024-03-20-160432-910';
$empresa = [
    'nombre' => 'Technosymphony S.A.',
    'slogan' => 'Armonizando tu negocio con la tecnologiá',
    'historia' => 'Fundada en 2010, Technosymphony S.A. ha sido líder en...',
    'mision' => 'Nuestra misión es proporcionar soluciones innovadoras...',
    'vision' => 'Ser reconocidos como líderes globales en...',
    'servicios' => ['Consultoría', 'Desarrollo de software', 'Diseño web', 'Marketing digital'],
    'equipo' => [
        ['nombre' => 'Ana García', 'cargo' => 'CEO', 'imagen' => $PLACE_HOLDER],
        ['nombre' => 'Carlos Rodríguez', 'cargo' => 'CTO', 'imagen' => $PLACE_HOLDER],
        ['nombre' => 'Laura Martínez', 'cargo' => 'Directora de Marketing', 'imagen' => $PLACE_HOLDER],
        ['nombre' => 'David Sánchez', 'cargo' => 'Líder de Desarrollo', 'imagen' => $PLACE_HOLDER],
    ]
];
?>

<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $empresa['nombre']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        naranja: '#FF6600',
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }
    </style>
</head>
<body class="bg-gray-900 text-white">
    <!-- Barra de navegación -->
    <nav class="bg-gray-800 fixed w-full z-10">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="#" class="text-naranja text-xl font-bold"><?php echo $empresa['nombre']; ?></a>
                <div class="hidden md:flex space-x-4">
                    <a href="#inicio" class="hover:text-naranja transition duration-300">Inicio</a>
                    <a href="#quienes-somos" class="hover:text-naranja transition duration-300">Quiénes Somos</a>
                    <a href="#equipo" class="hover:text-naranja transition duration-300">Equipo</a>
                    <a href="#servicios" class="hover:text-naranja transition duration-300">Servicios</a>
                    <a href="#contacto" class="hover:text-naranja transition duration-300">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sección de inicio -->
    <section id="inicio" class="min-h-screen flex items-center justify-center text-center">
        <div class="container mx-auto px-4 animate-fadeIn">
            <h1 class="text-5xl font-bold mb-4"><?php echo $empresa['nombre']; ?></h1>
            <p class="text-xl text-naranja"><?php echo $empresa['slogan']; ?></p>
        </div>
    </section>

    <!-- Sección Quiénes Somos -->
    <section id="quienes-somos" class="py-20 bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Quiénes Somos</h2>
            <div class="grid md:grid-cols-2 gap-10">
                <div class="animate-fadeIn">
                    <h3 class="text-2xl font-semibold mb-4 text-naranja">Historia</h3>
                    <p><?php echo $empresa['historia']; ?></p>
                </div>
                <div class="animate-fadeIn" style="animation-delay: 0.3s;">
                    <h3 class="text-2xl font-semibold mb-4 text-naranja">Misión y Visión</h3>
                    <p class="mb-4"><strong>Misión:</strong> <?php echo $empresa['mision']; ?></p>
                    <p><strong>Visión:</strong> <?php echo $empresa['vision']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección del Equipo con Carrusel -->
    <section id="equipo" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Nuestro Equipo</h2>
            <div class="relative max-w-2xl mx-auto">
                <div id="carousel" class="overflow-hidden">
                    <div id="carouselInner" class="flex transition-transform duration-300 ease-in-out">
                        <?php foreach ($empresa['equipo'] as $miembro): ?>
                            <div class="w-full flex-shrink-0 text-center">
                                <img src="<?php echo $miembro['imagen']; ?>" alt="<?php echo $miembro['nombre']; ?>" class="w-48 h-48 mx-auto rounded-full mb-4">
                                <h3 class="text-xl font-semibold text-naranja"><?php echo $miembro['nombre']; ?></h3>
                                <p><?php echo $miembro['cargo']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <button id="prevBtn" class="absolute top-1/2 left-0 transform -translate-y-1/2 bg-naranja text-white p-2 rounded-full">&#10094;</button>
                <button id="nextBtn" class="absolute top-1/2 right-0 transform -translate-y-1/2 bg-naranja text-white p-2 rounded-full">&#10095;</button>
            </div>
        </div>
    </section>

    <!-- Sección de Servicios -->
    <section id="servicios" class="py-20 bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Nuestros Servicios</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php foreach ($empresa['servicios'] as $index => $servicio): ?>
                    <div class="bg-gray-700 p-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-300 animate-fadeIn" style="animation-delay: <?php echo $index * 0.2; ?>s;">
                        <h3 class="text-xl font-semibold mb-4 text-naranja"><?php echo $servicio; ?></h3>
                        <p>Descripción breve del servicio <?php echo $servicio; ?>.</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section id="contacto" class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-10 text-center">Contacto</h2>
            <div class="max-w-md mx-auto">
                <form class="space-y-4">
                    <div>
                        <label for="nombre" class="block mb-2">Nombre</label>
                        <input type="text" id="nombre" class="w-full p-2 bg-gray-700 rounded" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2">Email</label>
                        <input type="email" id="email" class="w-full p-2 bg-gray-700 rounded" required>
                    </div>
                    <div>
                        <label for="mensaje" class="block mb-2">Mensaje</label>
                        <textarea id="mensaje" rows="4" class="w-full p-2 bg-gray-700 rounded" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-naranja text-white py-2 px-4 rounded hover:bg-orange-700 transition duration-300">Enviar</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-center py-6">
        <div class="container mx-auto px-4">
            <p>&copy; 2024 <?php echo $empresa['nombre']; ?>. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script>
        // Animación de aparición al hacer scroll
        function revelar() {
            var revelaciones = document.querySelectorAll(".animate-fadeIn");
            for (var i = 0; i < revelaciones.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = revelaciones[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    revelaciones[i].classList.add("opacity-100");
                } else {
                    revelaciones[i].classList.remove("opacity-100");
                }
            }
        }

        window.addEventListener("scroll", revelar);
        revelar(); // Para elementos visibles al cargar la página

        // Carrusel
        const carousel = document.getElementById('carousel');
        const carouselInner = document.getElementById('carouselInner');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const slides = carouselInner.children;
        let currentIndex = 0;

        function showSlide(index) {
            carouselInner.style.transform = `translateX(-${index * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            showSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            showSlide(currentIndex);
        }

        nextBtn.addEventListener('click', nextSlide);
        prevBtn.addEventListener('click', prevSlide);

        // Cambio automático de diapositivas cada 5 segundos
        setInterval(nextSlide, 5000);
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Corporación Red de Justicia y del Derecho</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- ── NAVBAR ── -->
    <nav class="navbar" id="navbar">
        <div class="nav-inner">
            <a href="#inicio" class="nav-logo">
                <div class="nav-logo-icon">RJD</div>
                <div class="nav-logo-text">
                    <span class="nav-logo-title">Red de Justicia y del Derecho</span>
                    <span class="nav-logo-sub">Corporación · Sin ánimo de lucro</span>
                </div>
            </a>
            <ul class="nav-links">
                <li><a href="#quienes">Quiénes Somos</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#ambitos">Ámbitos</a></li>
                <li><a href="#contacto" class="nav-cta">Contacto</a></li>
            </ul>
            <div class="hamburger" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    @yield('main')

    <footer>
        <div class="footer-inner">
            <div class="footer-top">
                <div class="footer-brand">
                    <a href="#inicio" class="nav-logo" style="margin-bottom: 0.75rem; display: inline-flex;">
                        <div class="nav-logo-icon">RJD</div>
                        <div class="nav-logo-text">
                            <span class="nav-logo-title">Red de Justicia y del Derecho</span>
                            <span class="nav-logo-sub">Corporación · Sin ánimo de lucro</span>
                        </div>
                    </a>
                    <p>Facilitando el acceso a la justicia para todos los colombianos, de forma virtual y accesible a
                        nivel
                        nacional.</p>
                </div>
                <div class="footer-links">
                    <h4>Navegación</h4>
                    <ul>
                        <li><a href="#quienes">Quiénes Somos</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#ambitos">Ámbitos</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Servicios</h4>
                    <ul>
                        <li><a href="#contacto">Derechos de Petición</a></li>
                        <li><a href="#contacto">Tutelas</a></li>
                        <li><a href="#contacto">Demandas</a></li>
                        <li><a href="#contacto">Consultas Jurídicas</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contacto</h4>
                    <ul>
                        <li><a href="https://wa.me/3225141594">WhatsApp: 322 514 1594</a></li>
                        <li><a href="tel:3114252911">Cel: 311 425 2911</a></li>
                        <li><a href="mailto:Corporacionrjd2021@gmail.com">Correo electrónico</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>© 2025 Corporación Red de Justicia y del Derecho. Todos los derechos reservados.</p>
                <p>Hecho con <span>♥</span> para la justicia colombiana</p>
            </div>
        </div>
    </footer>

    <!-- ── WHATSAPP FLOTANTE ── -->
    <div class="wa-float">
        <div class="wa-tooltip">¡Escríbenos por WhatsApp!</div>
        <a href="https://wa.me/3225141594" target="_blank" class="wa-btn" aria-label="Contactar por WhatsApp">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z" />
                <path
                    d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.984-1.407A9.94 9.94 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.72 0-3.328-.463-4.714-1.268l-.338-.2-3.508.99.941-3.44-.22-.352A7.944 7.944 0 0 1 4 12c0-4.418 3.582-8 8-8s8 3.582 8 8-3.582 8-8 8z" />
            </svg>
        </a>
    </div>

    @if($errors->any())
        <script>
            window.location.href = "#contacto"
        </script>
    @endif

    <script>
        // Navbar scroll effect
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
        navbar.classList.toggle('scrolled', window.scrollY > 40);
        });

        // Hamburger menu
        function toggleMenu() {
        const links = document.querySelector('.nav-links');
        const isOpen = links.style.display === 'flex';
        links.style.display = isOpen ? 'none' : 'flex';
        links.style.flexDirection = 'column';
        links.style.position = 'absolute';
        links.style.top = '72px';
        links.style.left = '0';
        links.style.right = '0';
        links.style.background = 'rgba(13,31,60,0.98)';
        links.style.padding = '1rem 2rem 1.5rem';
        links.style.gap = '0.25rem';
        links.style.borderBottom = '1px solid rgba(200,151,58,0.2)';
        }

        // Smooth active nav link highlight
        const sections = document.querySelectorAll('section[id]');
        const navAnchors = document.querySelectorAll('.nav-links a');
        const observer = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
            navAnchors.forEach(a => a.style.color = '');
            const active = document.querySelector(`.nav-links a[href="#${e.target.id}"]`);
            if (active) active.style.color = 'var(--gold-light)';
            }
        });
        }, { threshold: 0.45 });
        sections.forEach(s => observer.observe(s));

        function btnLoader(){
            const form = document.getElementById('contact-form');
            const button = form.querySelector('button[type="submit"]');
            
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                button.disabled = true;
                button.innerHTML = `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                        <line x1="22" y1="2" x2="11" y2="13" />
                        <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg> Enviando...`;
                if(form.checkValidity()) {
                    form.submit();
                }
            });
        }

        btnLoader();

    </script>

</body>

@if (session('success'))
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm">
        <div class="bg-white rounded-2xl shadow-2xl p-8 max-w-md w-full mx-4 text-center">
            <h2 class="text-2xl font-bold text-navy mb-3">¡Gracias por contactarnos!</h2>
            <p class="text-gray-500 mb-6">{{ session('success') }}</p>
            <button 
                class="nav-cta" 
                onclick="this.closest('.fixed').remove()">
                Cerrar
            </button>
        </div>
    </div>
@endif

</html>
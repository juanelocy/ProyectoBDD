<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración de Mercado</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1>Administración de Mercado</h1>
            <div class="menu-icon" onclick="toggleMenu()">
                &#9776;
            </div>
            <nav id="dropdown-menu" class="dropdown-menu">
                <ul>
                    <li>
                        <a href="{{ url('/gestion-principal') }}">Gestión de Espacios y Puestos de Venta</a>
                        <ul class="submenu">
                            <li><a href="puesto.php">Ingreso de puestos</a></li>
                            <li><a href="comer.php">Ingreso de Comerciante</a></li>
                            <li><a href="arre.php">Ingreso de Arrendamiento</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/inventario-principal') }}">Inventario y Gestión de Productos</a>
                        <ul class="submenu">
                            <li><a href="productos.php">Ingreso de Productos</a></li>
                            <li><a href="in.php">Ingreso de Inventario</a></li>
                            <li><a href="ventas.php">Ventas del dia</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/transacciones-principal') }}">Transacciones y Finanzas</a>
                        <ul class="submenu">
                            <li><a href="pagos.php">Pagos</a></li>
                            <li><a href="gastos.php">Gastos</a></li>
                            <li><a href="ingresos.php">Ingresos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ url('/mantenimiento-principal') }}">Mantenimiento</a>
                        <ul class="submenu">
                            <li><a href="man.php">Mantenimiento de Puestos</a></li>
                            <li><a href="insp.php">Inspeccion Puestos</a></li>
                            <li><a href="tmante.php">Tarea de Mantenimiento</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <h2>Bienvenidos al Sistema de Administración de Mercados</h2>
            <h3>Transformando la Gestión de Mercados para un Futuro Digital</h3>
            <p>En un mundo donde la eficiencia y la precisión son clave para el éxito, nuestro Sistema de Administración de Mercados se destaca como una solución integral diseñada para optimizar y modernizar la gestión de mercados. Con nuestra plataforma, te ofrecemos una herramienta poderosa y fácil de usar que revolucionará la forma en que administras tu mercado.</p>
        </main>
    </div>
    <script>
        function toggleMenu() {
            const menu = document.getElementById('dropdown-menu');
            if (menu.style.display === 'none' || menu.style.display === '') {
                menu.style.display = 'block';
            } else {
                menu.style.display = 'none';
            }
        }
    </script>
</body>
</html>

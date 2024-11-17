<?php 

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

include 'partials/header.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos Icónicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="content container text-center mt-5">
        <h1 style="font-weight: bold;">Juegos Icónicos de la Historia</h1>
        <br>
        <hr>
        <article>
            <h3 style="font-weight: bold;" >Super Nintendo Entertainment System (SNES)</h3>
            <ul  class="list-unstyled text-center">
                <li><strong>Super Mario World</strong>: Este título fue el pináculo del género de plataformas 2D, introduciendo nuevas mecánicas como la capa voladora y el dinosaurio Yoshi.</li>
                <li><strong>The Legend of Zelda: A Link to the Past</strong>: Considerado uno de los mejores títulos de la saga, este juego introdujo una historia profunda y un innovador sistema de puzzles.</li>
                <li><strong>Donkey Kong Country</strong>: Con gráficos pre-renderizados que asombraron a los jugadores, DKC elevó los estándares visuales para los juegos de plataformas.</li>
                <li><strong>Final Fantasy VI</strong>: Una joya del RPG que presentó una historia madura y compleja, con personajes profundos y escenarios increíbles.</li>
                <li><strong>Street Fighter II</strong>: Este juego popularizó el género de lucha, ofreciendo personajes carismáticos y mecánicas de combate muy ajustadas.</li>
            </ul>
        </article>
        <br>
        <hr>
        <article>
            <h3 style="font-weight: bold;">PlayStation 5</h3>
            <ul  class="list-unstyled text-center">
                <li><strong>Demon's Souls</strong>: El remake de este título fundacional de los juegos de acción-RPG recibió elogios por sus impresionantes gráficos y su desafiante jugabilidad.</li>
                <li><strong>Ratchet & Clank: Rift Apart</strong>: Con su impresionante uso de la tecnología de portales, este título aprovechó al máximo el hardware de la PS5 para ofrecer una experiencia inmersiva.</li>
                <li><strong>Returnal</strong>: Un shooter en tercera persona que combina la acción frenética con mecánicas de roguelike, todo dentro de un ambiente sci-fi.</li>
                <li><strong>Spider-Man: Miles Morales</strong>: Este juego sigue las aventuras del joven Miles Morales mientras asume el papel de Spider-Man en un mundo abierto lleno de acción.</li>
                <li><strong>Kena: Bridge of Spirits</strong>: Un título de acción y aventuras con impresionantes gráficos animados y una historia emotiva.</li>
            </ul>
        </article>
        <br>
        <hr>
        <article>
            <h3 style="font-weight: bold;">PlayStation 2</h3>
            <ul  class="list-unstyled text-center">
                <li><strong>Grand Theft Auto: San Andreas</strong>: Un juego de mundo abierto que ofrece una experiencia inmersiva, permitiendo a los jugadores explorar una vasta ciudad y realizar misiones variadas.</li>
                <li><strong>Final Fantasy X</strong>: Con su increíble historia y combate por turnos refinado, FFX sigue siendo uno de los juegos más queridos de la franquicia.</li>
                <li><strong>Metal Gear Solid 2: Sons of Liberty</strong>: Innovador en su narrativa cinematográfica y mecánicas de sigilo, este juego rompió barreras en la industria.</li>
                <li><strong>Shadow of the Colossus</strong>: Este juego rompió con las normas del diseño tradicional al ofrecer una historia profunda en un vasto mundo sin diálogos.</li>
                <li><strong>Kingdom Hearts</strong>: Una sorprendente combinación de los mundos de Disney y los personajes de Final Fantasy en un RPG de acción inolvidable.</li>
            </ul>
        </article>
    </div>
    <?php include 'partials/footer.php'; ?>
</body>
</html>

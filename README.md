Este proyecto se centra en la reconstrucción de la web de Nature and Culture International, una organización dedicada a la conservación de la biodiversidad y al apoyo de las comunidades locales. El desarrollo de este repositorio busca reflejar la esencia de una web institucional con un enfoque social y ambiental. Al trabajar en esta estructura, se pone especial atención en la jerarquía de contenidos, la navegación intuitiva y la integración de elementos visuales que comuniquen los valores de la organización, utilizando como base las herramientas modernas de diseño y desarrollo web.

Para convertir el proyecto en PHP, las páginas tendrían la extensión '.php' y el index.php llevaría este código:

NOTA: El código que tiene index.html se pasaría al archivo principal.php y estaría en la carpeta de pages

<?php

header('Location: ./pages/principal.php');

exit();

?>


Y para el menú y el footer lo mismo `header.php´ y `footer.php´, que iría en la carpeta components en la raíz ddel proyecto y poniendo este código en todas las páginas:

<?php include_once "../../components/header.php"; ?>

<?php include_once "../../components/footer.php"; ?>

Y cambiar el código de enlace de los submenú por esto y así con todos dentro de `header.php´:

`<a href="/pages/hacemos/bosques.php" class="block px-2.5 py-3 text-[14px] tracking-[1.5px] bg-white text-[rgb(72,81,79)]
    hover:text-[rgb(15,125,63)] hover:bg-[rgb(195,214,219)]
    <?= basename($_SERVER['PHP_SELF']) === 'bosques.php'
        ? '!bg-[rgb(176,190,175)] !text-white'
        : '' 
    ?>">BOSQUES</a>´

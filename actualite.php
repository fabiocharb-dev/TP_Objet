<?php
    require 'presentation/header.php';
?>
    <h2>Dernières actualités</h2>

<?php foreach ($articles as $article): ?>
    <article>
        <h3><?= $article['Nom'] ?></h3>
        <p><?= $article['Contenu'] ?></p>
        <small><?= $article['Date'] ?></small>
    </article>
<?php endforeach;
    include 'presentation/footer.php';
?>
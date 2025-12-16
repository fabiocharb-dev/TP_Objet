<?php 
    include 'presentation/header.php';
?>

<h2>Dernières actualités</h2>

<?php foreach ($articles as $article): ?>
    <article>
        <h3><a href="actualite.php?id=<?= $article['id_article'] ?>"><?= $article['Nom'] ?></a></h3>
        <small>Publié le <?= $article['Date'] ?></small>
    </article>
<?php endforeach;
    include 'presentation/footer.php';
?>
<?php
include("partials/header.php");
include("partials/navbar.php");
include("partials/hero.php");

$articleId = isset($_GET['id']) ? (int)$_GET['id'] : null;

if ($articleId) {

    $article = new Article();
    $articleData = $article->getArticleById($articleId);
    // var_dump($articleData);

} else {
    echo "Article not found";
    exit;
}



?>

<main class="container my-5">

    <h2 style="text-align: center;"><?php echo $articleData->title; ?></h2>
    <!-- Featured Image -->
    <div class="mb-4">
        <!-- agr image hngi tu show warna show place holder -->
        <?php if (!empty($articleData->image)): ?>

            <img
                src="<?php echo htmlspecialchars($articleData->image) ?>"
                class="img-fluid w-100"
                alt="Featured Image">

        <?php else: ?>

            <img
                src="https://via.placeholder.com/1200x600"
                class="img-fluid w-100"
                alt="Featured Image">

        <?php endif; ?>
    </div>
    <!-- Article Content -->
    <article>
        <?php echo htmlspecialchars($articleData->content) ?>
    </article>

    <!-- Comments Section Placeholder -->
    <section class="mt-5">
        <h3>Comments</h3>
        <p>
            <!-- Placeholder for comments -->
            Comments functionality will be implemented here.
        </p>
    </section>

    <!-- Back to Home Button -->
    <div class="mt-4">
        <a href="index.html" class="btn btn-secondary">← Back to Home</a>
    </div>
</main>


<?php
include("partials/footer.php");
?>
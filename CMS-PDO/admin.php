<?php
include('partials/admin/header.php');
include('partials/admin/navbar.php');
isLoggedIn();

$article = new Article();

$userId = $_SESSION['user_id'];

$userArticle = $article->getArticlesByUser($userId);

// var_dump($_SESSION);


?>


<!-- Main Content -->
<main class="container my-5">
    <h2 class="mb-4" <?php echo $_SESSION['username'] ?>>Admin Dashboard</h2>

    <!-- Articles Table -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-dark">
                <tr>
                      <th><input type="checkbox" id="selectAll"></th>
                 <th>ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Published Date</th>
                <th>Excerpt</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Ajax DELETE</th>
                </tr>
            </thead>
            <tbody>
                <!-- Example Article Row -->
                <?php if (!empty($userArticle)): ?>
                    <?php foreach ($userArticle as $articleItem): ?>
                        <tr>
                            <td><input type="checkbox" class="articleCheckbox" value="<?php echo $articleItem->id;?>"></td>
                            <td><?php echo $articleItem->id; ?></td>
                            <td><?php echo $articleItem->title; ?></td>
                            <td><?php echo $_SESSION['username']; ?></td>
                            <td><?php echo $article->formatCreatedAt($articleItem->created_at); ?></td>
                            <td>
                                <?php echo $article->getExcerpt($articleItem->content); ?>
                            </td>
                            <td>
                                <a href="edit-article.php?id=<?php echo $articleItem->id; ?>" class="btn btn-sm btn-primary me-1">Edit</a>
                            </td>
                            <td>
                                <form onsubmit="confirmDelete(<?php echo $articleItem->id; ?>)" method="POST" action="<?php echo base_url("delete_article.php") ?>">
                                    <input name="id" value="<?php echo $articleItem->id; ?>" type="hidden">
                                    <!--                        <button class="btn btn-sm btn-danger" onclick="confirmDelete(1)">Delete</button>-->
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                            <td> <button data-id="<?php echo $articleItem->id; ?>" class="btn btn-sm btn-danger delete-single">ajax delete</button></td>
                        </tr>

                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>

</main>


<?php
include('partials/admin/footer.php');
?>
<?php
include "../navbar.php";
include "../packages/article.php";

$article = new article();
if(isset($_GET['updateId'])){
    $articleId = $_GET['updateId'];
}

if(isset($_POST['update'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $article->select_update_article($title, $content, $articleId);
}
?>
<body>
    <main>
        <div class="d-flex flex-column align-items-center">
            <div class="mt-5 d-flex justify-content-center">
                <h2 class="article-headers">Update Article Info</h2>
            </div>
            <form class="w-50 mt-5" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Article Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="exampleInputPassword1"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="update" class="btn btn-outline-warning">Submit</button>
                </div>
                
            </form>
        </div>
    </main>
</body>
<?php
include "../navbar.php";
include "../packages/article.php";


$article = new article();


if(isset($_POST['ok'])){
    $title = $_POST['title'];
    $contenu = $_POST['content'];
    $date_create = date('y-m-d h:i:s');

    $article->add($title, $contenu, $date_create, 1);
}

if(isset($_GET['deleteId'])){
    $articleID = $_GET['deleteId'];
    $article->delete_article($articleID);
}


?>

<body>
    <main>
        <div class="d-flex flex-column align-items-center">
            <div class="mt-5 d-flex justify-content-center">
                <h2 class="article-headers">Add Article</h2>
            </div>
            <form class="w-50 mt-5 " method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Article Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="exampleInputPassword1"></textarea>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="ok" class="btn btn-outline-warning">Submit</button>
                </div>
                
            </form>
        </div>
        <div class="d-flex flex-column align-items-center">
            <div>
                <h2 class="mt-5 article-headers">All The Articles</h2>
            </div>
            <table class="mt-5 w-75 table align-middle bg-white shadow">
                <thead class="bg-light">
                    <tr>
                        <th class="w-25 text-center">Article Title</th>
                        <th class="w-25 text-center">Article Content</th>
                        <th class="text-center">Delete</th>
                        <th class="text-center">Update</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $rows = $article->select_article();
                foreach($rows as $row){?>
                <tr>
                    <td class=""> <?= $row['title'] ?> </td>
                    <td class=""> <?= $row['contenu'] ?> </td>
                    <td class="text-center"><a href="homeArticle.php?deleteId=<?= $row['article_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#d0021b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></td>
                    <td class="text-center"><a href="updateArticle.php?updateId=<?= $row['article_id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="none" stroke="#417505" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg></a></td>
                </tr>

                <?php }
                ?>
                
                </tbody>
                
                
            </table>
            
        </div>
    </main>
</body>
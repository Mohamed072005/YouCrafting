<?php
include "../navbar.php";
include "../packages/article.php";

$article = new article();
if(isset($_POST['ok'])){
    $title = $_POST['title'];
    $contenu = $_POST['article'];
    $date_create = date('y-m-d h:i:s');

    $article->add($title, $contenu, $date_create, 1);
}

?>

<main>
    <div class="container-fluid row bg-primary d-flex justify-content-around mt-5">
        <div class="col-sm-4 bg-danger">
            <div>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.nnibi  fv jvnuf,vkorio</p>
            </div>
        </div>
        <div class="col-sm-4 bg-success">
            <div class="w-100">
                <img class="img-fluid" src="../img/Online article-rafiki.png" alt="">
            </div>
        </div>
    </div>
    <form action="" method="post">
        <label for="">Article Title</label>
        <input type="text" name="title">
        <label for="">Article</label>
        <input type="text" name="article">
        <button name="ok">submit</button>
    </form>

    <div class="mt-5">
        <table>
            <tr>
                <th>Title</th>
                <th>Article</th>
            </tr>
            <?php 
            $rows = $article->select_article();
            
            foreach ($rows as $row) {
                ?>
                <tr>
                    <th><?= $row['title'] ?></th>
                    <th><?= $row['contenu'] ?></th>
                </tr>
        <?php
    }
            ?>
        </table>
    </div>
</main>
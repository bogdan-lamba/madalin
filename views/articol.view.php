<?php foreach($articles as $article){ ?>

<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $article['title']; ?></h2>
    <p class="blog-post-meta"><?php echo $article['data']; ?> by <a href="#"><?php echo $article['autor']; ?></a></p>
    <p><?php echo $article['body']; ?></p>
</div>

<?php } ?>

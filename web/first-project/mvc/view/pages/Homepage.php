<h2>Thông báo mới</h2>
<?php $posts = $data['informations']; ?>
<div class="post__list row">     
    <?php foreach($posts as $post) { ?>
        <div class ="col-12 col-md-6 col-lg-3 mb-4">
            <div class="post__item text-center">
                <div class="post_header">
                    <img src=<?php echo BASE_URL . $post->image ?> >
                    <div class="post_date">
                        <i class="far fa-calendar"></i>
                        <b class="text__green fw-bold"><?php echo post_date($post->create_at)  ?></b>
                    </div>
                </div>
                <div class="post_body">
                    <p class="h6 fw-bold mb-3">
                        <a href=<?php echo BASE_URL."/information/".$post->id ?> 
                        title="<?php echo $post->title ?>">
                            <?php echo $post->title ?>
                        </a>
                    </p>
                    <div class="summary_item_blog">
                        <?php echo mb_substr($post->title, 0, 105, "UTF-8")."..." ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <span class="page-link">2</span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

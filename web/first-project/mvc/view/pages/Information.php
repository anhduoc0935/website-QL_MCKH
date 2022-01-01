<?php $information = $data['information']; ?>
<h2><?php echo  $information->title ?></h2>
<p><?php echo post_date($information->create_at) ?></p>
<?php echo $information->content ?>
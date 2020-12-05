<?php $render('header');?>

<?php foreach($posts as $post): ?>
<h3><?php echo $post['titulo']; ?></h3>
<p><?php echo $post['corpo']; ?></P>
<?php endforeach; ?>
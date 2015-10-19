<div class="container-fluid">
	<div class="row">
	<?php foreach ($newses as $news): ?>
		<?php if (isset($news->feature_img) && $news->feature_img != null): ?>
			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 news_item">
				<img src="">
			</div>
			<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 news_item">
				<div class="news_title"><?php echo $news->title; ?></div>
				<div class="new_publish_date"><?php echo $news->publish_date; ?></div>
				<div class="news_body"><?php echo $news->content; ?></div>
			</div>
		<?php else: ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news_item">
				<div class="news_title"><?php echo $news->title; ?></div>
				<div class="new_publish_date"><?php echo $news->publish_date; ?></div>
				<div class="news_body"><?php echo $news->content; ?></div>
			</div>
		<?php endif ?>
	<?php endforeach ?>
	</div>
	<?php echo $links ?>
</div>

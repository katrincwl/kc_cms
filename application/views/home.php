


<div class="container">
    <!-- Banner Slider -->
    <?php include APPPATH.'views/home/slider.php' ?>

    <!-- News and products -->
    <div class="row">
        <div class="col-md-6">
            <div class="headline">
                <h2>
                    <a href="<?php echo site_url('news'); ?>">Company News</a>
                </h2>
            </div>
            <div class="owl-carousel">
            <?php foreach ($newses as $count => $news): ?>
                <div class="news_item">
                    <h4 class="news_title"><?php echo $news->title; ?></h4>
                    <div class="news_publish_date">
                        <?php echo my_format_date($news->publish_date); ?>
                    </div>
                    <div class="news_body">
                        <?php echo $news->content; ?>
                    </div>
                </div>
                <?php if ($count < sizeof($newses) - 1): ?>
                    <hr />
                <?php endif ?>
            <?php endforeach ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="headline">
                <h2>
                    <a href="">Products</a>
                </h2>
            </div>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        
    </div>

    <hr>

    <footer>
        <p>&copy; Company 2014</p>
    </footer>
</div> <!-- /container -->
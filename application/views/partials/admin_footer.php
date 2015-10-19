</div>
</div>
<!-- /#page-content-wrapper -->

</div>

<!-- /#wrapper -->
<?php if (isset($custom_js)): ?>
    <?php if (isset($custom_js['bottom'])): ?>
        <?php foreach ($custom_js['bottom'] as $bottom_js): ?>
            <script src="<?php echo base_url($bottom_js);?>"></script>
        <?php endforeach ?>
    <?php endif ?>
<?php endif ?>
<?php echo $this->debugbarRenderer->render() ?>
</body>
</html>
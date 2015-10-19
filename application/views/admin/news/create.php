<h2><?php echo $title; ?></h2>

<?php echo form_open_multipart('admin/save_news', array("id" => "creation_form", "method" => "POST")); ?>

<div class="row">

	<div class='col-xs-12 col-sm-12 col-md-6'>
		<label for="title">Publish Date</label>
		<input type='text' class="form-control" id='publish_date' name="publish_date" value="<?php echo $publish_date ?>"/>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<label for="title">Title</label>
		<input type="text" name="title" id="title" class="form-control" value="" required="required" >
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<label for="content">Content</label>
		<textarea name="content" id="input" class="form-control" rows="3" required="required"></textarea>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<input id="fileupload" type="file" name="files[]" multiple
		data-url="/path/to/upload/handler.json"
		data-sequential-uploads="true"
		data-form-data='{"script": "true"}'>
	</div>


	<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-md-offset-8" style="margin-top:25px;">
		<button type="submit" class="btn btn-default btn-block">Save</button>
	</div>


</div>

<?php echo form_close(); ?>
<script type="text/javascript">
	$(function () {
		$('#publish_date').datetimepicker({
			format:'YYYY-MM-DD HH:mm:ss',
			sideBySide: true,
			icons:{
				time: 'fa fa-clock-o',
				date: 'fa fa-calendar',
				up: 'fa fa-sort-up',
				down: 'fa fa-sort-down',
				previous: 'fa fa-angle-left',
				next: 'fa fa-angle-right',
				today: 'fa fa-calendar-check-o',
				clear: 'fa fa-trash',
				close: 'fa fa-close'
			}
		});

		$('#creation_form').fileupload({
		});
	});

</script>
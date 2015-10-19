
<div class="row">
    <div class="col-lg-12">
        <h1>Company News</h1>
        <div class="table-responsive">
            <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <td>Publish Date</td>
                        <td>Title</td>
                        <td>Content</td>
                        <td>Last Updated</td>
                        <td>Action</td>
                    </tr>

                </thead>
                <tbody>
                    <?php foreach ($newses as $news): ?>
                        <tr>
                            <td><?php echo $news->publish_date; ?></td>
                            <td><?php echo $news->title; ?></td>
                            <td><?php echo $news->content; ?></td>
                            <td><?php echo $news->updated_at; ?></td>
                            <td>
                                <a class="btn btn-sm btn-default" href="<?php echo site_url('admin/edit_news/'.$news->id); ?>" role="button"><i class="fa fa-edit fa-fw"></i></a>
                                <a data-nid="<?php echo $news->id ?>" class="remove-btn btn btn-sm btn-danger" href="<?php echo site_url('admin/remove_news/'.$news->id) ?>" role="button"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div> 
    <div class="col-xs-12 col-md-4 col-lg-4 col-md-offset-8">
        <a class="btn btn-default btn-block" href="<?php echo site_url('admin/create_news') ?>" role="button">Create a news</a>
    </div>
</div>

<script>
    $(document).ready(function() {
        /* Init datatables */
        var $table = $('#table').DataTable({
            "order" :[[3, "desc"]]
        });

        /* Showing the confim box for news remove */
        $('.remove-btn').on('click', function(e){
            //get the news id for remove
            var $nid = $(this).data('nid');
            var $row = $(this).parents('tr');

            console.log($nid);

            e.preventDefault();
            $.confirm({
                theme: 'supervan',
                title: 'Confirm remove the news?',
                content: 'Once removed, it cannot be undone',
                confirmButton: 'Yes',
                cancelButton: 'NO',
                confirm: function(){
                    $.ajax({
                        url: "<?php echo site_url('admin/delete_news') ?>",
                        type: 'POST',
                        data: {id: $nid},
                        success:function($res){
                            if ($res == "<?php echo SUCCESS ?>"){
                                $table.row($row).remove().draw();
                            }else{
                                console.log("fail");
                            }
                        }
                    });
                    
                },
                cancel: function(){
                }
            });     
       });

    } );
</script>
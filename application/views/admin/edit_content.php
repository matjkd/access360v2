<div style="background:#cccccc; padding:10px;">

    <?php foreach ($content as $row): ?>


        <?php $id = $row->content_id; ?>


        <?= form_open_multipart("admin/edit_content/$row->content_id") ?> 
        <div>    
            Title: <br/><?= form_input('title', $row->title) ?><br/>
            Menu link: <br/><?= form_input('menu', $row->menu) ?>
        </div>
        <div>
            <textarea cols=65 rows=20 name="content" id="content" class='wymeditor'><?= $row->content ?></textarea>
        </div>
        <div style="clear:both"></div>
        <div style="float:left; width:400px;">
            Meta Description<br/>
            <textarea  cols=65 rows=2 name="meta_desc"><?= $row->meta_desc ?></textarea>
            <br/>

            Meta Title<br/>
            <textarea  cols=65 rows=2 name="meta_title"><?= $row->meta_title ?></textarea>
            <br/>

            Extra: 
            <br/><?= form_input('extra', $row->extra) ?><br/>
            Sidebox:
            <br/><?= form_input('sidebox', $row->sidebox) ?><br/>
        </div>
        <div style="float:left; width:400px;">
            Add Image<br/>
            <?=form_upload('userfile')?>
        </div>

        <div style="clear:both"></div>
        <input type="submit" class="wymupdate" value="update"/>
        <?= form_close() ?> 
    <?php endforeach ?>
</div>
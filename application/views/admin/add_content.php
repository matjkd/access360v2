<style>

    label {
        width:100px;
        color:#ffffff;
        float:left;
    }
</style>
<?= form_open("admin/submit_content") ?> 
<label>Title:</label>
<?= form_input('title', set_value('title')) ?><br/>
<label>Menu link:</label>
<?= form_input('menu', set_value('menu')) ?>
<br/>
<label>Added By:</label> 
<?= form_input('added_by') ?><br/>
<label>Date:</label> 
<input type="text" name="date_added" id="datepicker" value=""><br/>
<?php
if (!isset($category)) {
    $category = "";
}
?>
<label>Category:</label>
<input type="text" name="categoryvisible" id="datepicker" value="<?= set_value('categoryvisible', $categoryvisible) ?>"  disable="disabled" onFocus="this.blur();"><br/>
<input type="hidden" name="category" id="datepicker" value="<?= set_value('category', $category) ?>"  >
<label>Content:</label>
<textarea cols=75 rows=20 name="content" id="content"  class='wymeditor'></textarea>


<input type="submit" class="wymupdate" />
<?= form_close() ?> 

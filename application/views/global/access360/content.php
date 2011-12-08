
<!-- content page for news-->
<div class="page_header">
   
    <ul id="topnav">
      <li class="menu_87"><?= anchor('/', 'home') ?></li>
    <li class="menu_87"><?= anchor('http://www.360experiential.co.uk/', 'experiential') ?></li>
    <li class="menu_87"><?= anchor('http://www.360exhibition.co.uk/', 'exhibitions') ?></li>
    <li class="menu_87"><?= anchor('http://www.360signage.co.uk/', 'signage') ?></li>
    <li class="menu_87"><?= anchor('http://www.360pos.co.uk/', 'point of sale') ?></li>
    <li class="menu_177"><?= anchor('http://www.360digitalsignage.co.uk/', 'digital signage') ?></li>
    <li class="menu_87"><?= anchor('/news', 'news') ?></li>
    <li class="menu_87"> <a href="#contactdialog" name="contactmodal" rel="#contactoverlay" id="contact">contact</a></li>
</ul>

</div>
<div class="text_content">
    
    

    
    <div style="width:640px; float:left;">
    <?php foreach ($content as $row): ?>

        <h1><?= $row->title ?></h1>

        <?php
        $is_logged_in = $this->session->userdata('is_logged_in');
        if (!isset($is_logged_in) || $is_logged_in == true) {
            echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit page...</a><br/>";
        }
        ?>

        <?php
        if (isset($age)) {
            $body = str_replace("[age]", "$age", "$row->content");
        } else {
            $body = $row->content;
        }
        ?>

        <?php if ($row->news_image != NULL) { ?>
            <!-- trigger elements -->
            <div id="newsimage" style="float:right; margin-left:20px;">
                <img src="<?= base_url() ?>images/uploads/thumbs/<?= $row->news_image ?>" rel="#photo<?=$row->content_id?>"/>
            </div>
            <!-- overlay for the first trigger. id matches the rel- attribute -->
          
<div class="overlaynews" id="photo<?=$row->content_id?>">
                <img height="400px" src="<?= base_url() ?>images/uploads/<?= $row->news_image ?>" />

               
                

                    <p>
 <?= $row->title ?>
                    </p>
               
            </div>

        <?php } ?>

        <?php $body = str_replace("Access360", "<strong>Access360</strong>", "$body"); ?>
        <?php $body = str_replace("Flyer Direct", "<strong>Flyer Direct</strong>", "$body"); ?>
        <?= $body ?>

    <?php endforeach; ?>


    <?php foreach ($content as $row): ?>
        <?php if ($row->extra != NULL) { ?>
            <?= $this->load->view('extra/' . $row->extra) ?>
        <?php } ?>
    <?php endforeach; ?>
    </div>
    <div style="float:left; width:280px; background:#dddddd;">
        
        
    </div>
    <div style="clear:both;"></div>
   
    
</div>

   <div class="page_footer">
   
    
</div>
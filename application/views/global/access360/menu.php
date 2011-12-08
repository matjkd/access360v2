
<ul>
     <li class=""><?= anchor('/', 'home') ?></li>
    <li class=""><?= anchor('http://www.360experiential.co.uk/', 'experiential') ?></li>
    <li class=""><?= anchor('http://www.360exhibition.co.uk/', 'exhibitions') ?></li>
    <li class=""><?= anchor('http://www.360signage.co.uk/', 'signage') ?></li>
    <li class=""><?= anchor('http://www.360pos.co.uk/', 'point of sale') ?></li>
    <li class=""><?= anchor('http://www.360digitalsignage.co.uk/', 'digital signage') ?></li>
    <li class=""><?= anchor('/news', 'news') ?></li>
    <li class=""> <a href="#contactdialog" name="contactmodal" rel="#contactoverlay" id="contact">contact</a></li>
    
     <li class=""><a href="<?=base_url()?>images/downloads/purchaseterms.pdf">Purchase T&amp;C's</a></li>
          <li class=""><a href="<?=base_url()?>images/downloads/saleterms.pdf">Sale T&amp;C's </a></li>
    <?php
    $is_logged_in = $this->session->userdata('is_logged_in'); 
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo anchor('admin', 'Admin');
    }
    ?>

</ul>


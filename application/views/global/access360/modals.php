
<div id="boxes">
 
     
    <!-- #customize your modal window here -->
 
    <div id="dialog" class="window">
        
         
        <!-- close button is defined as close class -->
        <a href="#" class="close"><img src="<?=base_url()?>/images/icons/cross.png"/></a>
        
        <div class="site_content">
            
            <img src="<?=base_url()?>/images/ajax-loader.gif"/>
            
        </div>
 
    </div>
 
     
    <!-- Do not remove div#mask, because you'll need it to fill the whole screen --> 
    <div id="mask"></div>
</div>


<div id="contactboxes">
 
     
    <!-- #customize your modal window here -->
 
    <div id="contactdialog" class="contactwindow">
        
         
        <!-- close button is defined as close class -->
        <a href="#" class="contactclose"><img src="<?=base_url()?>/images/icons/cross.png"/></a>
        
        <div class="contact_content">
            
            <?=$this->load->view('extra/contact_form')?>
            
        </div>
 
    </div>
 
     
    <!-- Do not remove div#mask, because you'll need it to fill the whole screen --> 
    <div id="contactmask"></div>
</div>
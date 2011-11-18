<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>

        <?= $this->load->view('template/access360/header') ?>

    </head>

    <body>
        <div id="header_container">
            <div id="header">

                <div  class="container_24" >


                </div>
                <div style="clear:both"></div>

                <div id="menutop">

                    <div style="width:960px; margin:0 auto;">

                        <?= $this->load->view('global/access360/menu') ?>
                    </div> 
                </div>



            </div>
        </div>   
        <div id="container">

<div class="container_24" id="bodycontainer">
          
    <?=$this->load->view('global/access360/cogs')?>


</div>
            <div class="container_24" id="footer">
                <div class="grid_18">
                    <?= $this->load->view('global/access360/links') ?>
                </div>
                <div class="grid_6">
                    <?= $this->load->view('global/access360/social_icons') ?>
                </div>
            </div>



        </div> 

        <div  id="backfooter" >
            <div class="container_24" >
                <div class="grid_14">
                    <?= $this->load->view('global/access360/seo_menu') ?>

                </div>

                <div class="grid_10">
                    <?= $this->load->view('global/access360/footer_menu') ?>
                </div>

            </div>
        </div>

        <!--! end of #container -->
        <?= $this->load->view('template/access360/footer') ?>

    </body>
</html>
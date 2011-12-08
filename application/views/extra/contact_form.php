<style>
    textarea {
        width:400px;
        height:220px;
        border:0px;
    }
    input {
        width: 190px;
        height:20px;
        border:0px;
        margin-bottom:4px;
    }

    #captchaborder {
        border:2px solid #333333;
        text-align: center;
        width:190px;
        padding: 5px 0px;
        background: #999999;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }
    #captchaborder input {
    
        width:180px;
      
    }


</style>
<h1>Contact Us</h1>
<div style="clear:both;">
    Access360 Ltd,<br/>
    Ilgars Manor,<br/>
    Workhouse Lane,<br/>
    South Woodham Ferrers,<br/>
    Essex CM3 8RD<br/><br/>

    t. 0845 074 5656<br/>
    e. sales@access360.co.uk <br/>

</div>
<div id="contact_form">


    <?= form_open(base_url() . 'welcome/send'); ?>
    <br/>

    <div style="float:left; width:200px; margin-right:10px;">

        <?= form_label('Full Name') ?><br/>
        <?= form_input('name', set_value('name')) ?>





        <?= form_label('Phone Number') ?><br/>
        <?= form_input('phone', set_value('phone')) ?>




        <?= form_label('Email') ?>

        <?= form_input('email', set_value('email')) ?>





        <?= form_label('Subject') ?>

        <?= form_input('subject', set_value('subject')) ?>
        
         <div id="captchaborder">
            Enter the word you see below



            <input type="text" name="captcha" value="" />

            <div style="width:150px; padding:5px 15px 2px; background:#dddddd; margin:0 auto;">
                <?= form_label($captcha['image']) ?>
            </div>

            <?= form_hidden('ip_address', $this->input->ip_address()) ?>
            <?= form_hidden('time', $captcha['time']) ?>
        </div>

    </div>

    <div style="float:left; width:400px;">
        <?= form_label('Message') ?>
        <p class="form_message">
            <?= form_textarea('message', set_value('message')) ?>
        </p>

       <div id="contact_submit" style="float:right;"><?= form_submit('submit', 'Submit') ?></div>
    </div>


</div>
<div style="clear:both; padding-top: 10px;">
    
    <?= form_close() ?>
</div>





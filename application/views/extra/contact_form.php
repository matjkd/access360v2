<style>
    textarea {
        width:200px;
        height:70px;
        border:0px;
    }
    input {
        width: 180px;
        height:20px;
        border:0px;
        margin-bottom:4px;
    }

    #captchaborder {
border:2px solid #333333;
text-align: center;
width:200px;
padding: 5px 0;
background: #999999;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
    }


</style>


<div id="contact_form">
    <?= form_open(base_url().'welcome/send'); ?>
    <br/>
    <div style="float:left; width:200px;">
       
            <?= form_label('Full Name') ?><br/>
            <?= form_input('name', set_value('name')) ?>
       



      
            <?= form_label('Phone Number') ?><br/>
            <?= form_input('phone', set_value('phone')) ?>
       



        <?= form_label('Email') ?>
      
            <?= form_input('email', set_value('email')) ?>
        




        <?= form_label('Subject') ?>
       
            <?= form_input('subject', set_value('subject')) ?>
     
    </div>

    <div style="float:left; width:200px;">
        <?= form_label('Message') ?>
        <p class="form_message">
            <?= form_textarea('message', set_value('message')) ?>
        </p>

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
</div>
<div style="clear:both">
    <div id="contact_submit"><?= form_submit('submit', 'Submit') ?></div><br/>
    <?= form_close() ?>
</div>
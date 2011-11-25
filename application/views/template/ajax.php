<!--Main content page for site loaded with ajax-->



<?php foreach ($content as $row): ?>

    <h1><?= $row->title ?></h1>

    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    if (!isset($is_logged_in) || $is_logged_in == true) {
        echo "<a href='" . base_url() . "admin/edit/" . $row->content_id . "'>edit this page</a><br/>";
    }
    ?>

    <?php
    if (isset($age)) {
        $body = str_replace("[age]", "$age", "$row->content");
    } else {
        $body = $row->content;
    }
    ?>


    <?php $body = str_replace("Access360", "<strong>Access360</strong>", "$body"); ?>
    <?php $body = str_replace("Access 360", "<strong>Access 360</strong>", "$body"); ?>
    <?= $body ?>

<?php endforeach; ?>


<?php foreach ($content as $row): ?>
    <?php if ($row->extra != NULL) { ?>
        <?= $this->load->view('extra/' . $row->extra) ?>
    <?php } ?>
<?php endforeach; ?>
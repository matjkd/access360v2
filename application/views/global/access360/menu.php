
<ul>
    <li><?= anchor('/', 'home') ?></li>
    <li><?= anchor('/', 'experiential') ?></li>
    <li><?= anchor('/', 'exhibitions') ?></li>
    <li><?= anchor('/', 'signage') ?></li>
    <li><?= anchor('/', 'point of sale') ?></li>
    <li><?= anchor('/', 'digital signage') ?></li>
    <li><?= anchor('/news', 'news') ?></li>
    <li><?= anchor('/', 'contact') ?></li>
    <?php
    $is_logged_in = $this->session->userdata('is_logged_in');
    $role = $this->session->userdata('role');
    if ($is_logged_in != 0 || $role == 1) {

        echo anchor('admin', 'Admin');
    }
    ?>

</ul>


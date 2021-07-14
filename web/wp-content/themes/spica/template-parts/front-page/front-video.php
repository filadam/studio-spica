<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="row m-0 p-0 g-0 d-flex justify-content-center align-items-center h-100">
    <div class="col-xl-6 col e">
        <h1><?php _e('Latasz i szukasz swojej WWW?') ?></h1>
    </div>
    <div class="rocket">
        <?php \get_template_part('template-parts/content/rocket', 'svg'); ?>
    </div>
    <div class="rocket-trail">
        <?php \get_template_part('template-parts/content/rocket-trail', 'svg'); ?>
    </div>
    <div class="rocket-path">
        <?php \get_template_part('template-parts/content/rocket-path', 'svg'); ?>
    </div>
    <div class="moon-bg align-self-end">
    </div>

    <i class="bi bi-arrow-down-circle-fill video-mouse-overlay"></i>
</div>
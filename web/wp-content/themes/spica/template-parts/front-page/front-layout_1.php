<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="row front-demo align-items-end">
    <div class="col-6">
        <svg viewBox="0 0 600 100">
        <symbol id="s-text-3">
            <text text-anchor="middle" x="27%" y="50%" dy=".35em"><?php _e('KIM') ?></text>
        </symbol>
        <use class="text-3" xlink:href="#s-text-3"></use>
        <use class="text-3" xlink:href="#s-text-3"></use>
        <use class="text-3" xlink:href="#s-text-3"></use>
        <use class="text-3" xlink:href="#s-text-3"></use>
        <use class="text-3" xlink:href="#s-text-3"></use>
        </svg>
    </div>
</div>
<div class="row align-items-end">
    <div class="col-6">
        <svg viewBox="0 0 600 100">
        <symbol id="s-text-2">
            <text text-anchor="middle" x="40%" y="50%" dy=".35em"><?php _e('Jesteśmy') ?></text>
        </symbol>
        <use class="text-2" xlink:href="#s-text-2"></use>
        <use class="text-2" xlink:href="#s-text-2"></use>
        <use class="text-2" xlink:href="#s-text-2"></use>
        <use class="text-2" xlink:href="#s-text-2"></use>
        <use class="text-2" xlink:href="#s-text-2"></use>
        </svg>
    </div>
    <div class="col align-self-center">
        <h1><?php _e('Jesteśmy zespołem interdyscyplinarnych twórców i myślicieli, zaangażowanych w tworzenie stron internetowych, indentyfikacji wizualnej i materiałów marketingowych.') ?></h1>
    </div>
</div>
<div class="row front-projects align-items-end pt-5">
    <?php \get_template_part('template-parts/front-page/front-projects') ?>
</div>
<!--<div class="row m-0 p-0">
    <video class=' front-video' playsinline="playsinline" autoplay="" muted="" loop>
        <source src="http://studiospica.local/wp-content/uploads/2021/06/stars.mp4" type="video/mp4">
    </video>s
</div>-->

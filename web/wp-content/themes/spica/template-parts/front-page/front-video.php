<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="row m-5 p-0 g-0 video">
    <div class="overlay d-flex align-items-center justify-content-end">
        <div class="col-xl-6 col">
            <svg viewBox="0 0 600 300">
            <symbol id="s-text-2">
                <text text-anchor="middle" x="50%" y="20%" dy=".35em"><?php _e('Szukasz') ?></text>
                <text text-anchor="middle" x="50%" y="50%" dy=".35em"><?php _e('swojej') ?></text>
                <text text-anchor="middle" x="50%" y="80%" dy=".35em"><?php _e('strony?') ?></text>
            </symbol>
            <use class="text-2" xlink:href="#s-text-2"></use> 
            <use class="text-2" xlink:href="#s-text-2"></use>
            <use class="text-2" xlink:href="#s-text-2"></use>
            <use class="text-2" xlink:href="#s-text-2"></use>
            <use class="text-2" xlink:href="#s-text-2"></use>
            </svg>
        </div>

    </div>

    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <body>
        <div class="rocket">
            <div class="rocket-body">
                <div class="body"></div>
                <div class="fin fin-left"></div>
                <div class="fin fin-right"></div>
                <div class="window"></div>
            </div>
            <div class="exhaust-flame"></div>
        </div>
    </body>
    <video class='front-video' playsinline="playsinline" autoplay="" muted="" loop>
        <!--<source src="http://studiospica.local/wp-content/uploads/2021/06/stars.mp4" type="video/mp4">-->
    </video>

    <i class="bi bi-arrow-down-circle-fill video-mouse-overlay"></i>
</div>

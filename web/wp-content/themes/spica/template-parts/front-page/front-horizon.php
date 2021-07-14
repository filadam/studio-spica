<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="row m-0 p-0 g-0 d-flex justify-content-center align-items-center h">
    <div class="sun"></div>
    <?php 
    $el = '<div class="sky"></div>';
    $count = 146;
    foreach ( range(1,$count) as $item) {
        echo $el;
    };
    ?>
    <h1>SATURN</h1>
</div>
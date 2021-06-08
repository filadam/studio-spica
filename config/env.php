<?php
$variables = array(
    /**
     * Environment
     * Supported environments:
     * 1. local - developer's desktop/workstation
     * 2. development - development server acting as a sandbox where unit testing may be performed by the developer
     * 3. production - serves end-users/clients
     */
    'WP_ENV' => 'local',

    /**
     * Cache
     */
    'WP_CACHE' => false,

    /**
     * URLs
     */
    'WP_HOME' => 'http://studiospica.local/',
    'WP_SITEURL' => 'http://studiospica.local/',

    /**
     * MySQL Settings - Local DB
     */
    'DB_NAME' => 'wp_spica',
    'DB_USER' => 'root',
    'DB_PASSWORD' => '',
    'DB_HOST' => 'localhost',
    'DB_CHARSET' => 'utf8',
    'DB_PREFIX' => 'hg4_',

    /**
     * Authentication Unique Keys and Salts.
     * Generate your keys here: https://api.wordpress.org/secret-key/1.1/salt/
     */
    'AUTH_KEY' => '){81ffAL(sSA:B|6.iP6!Mh5Z{*ne95}}byQ}7/[<)D/ !DeyXzxz%6gZjz_r-*#',
    'SECURE_AUTH_KEY' => '-&z]_8zlDQ]vVDvfa>d{j<5ozn,1a7[E5B^-Kcuq?[(gV9::dvX:+mc}7-m RNb,',
    'LOGGED_IN_KEY' => 'evWig4x:||pe-+lnD%_:x,X{,m!x%YdS.3[Dma3iS(bP=M0xZcDkeup)nbS?sI`-',
    'NONCE_KEY' => 'M|l`X70J>-*TEV+qR:k^ 95c:e:i*|x!;x/p*-:mnh_Mer-x ll|E@UZ$iN|wj^K',
    'AUTH_SALT' => 'XnsNmn py&^uBA)<.=3+!|,-Y-Oec,7XKbDWbgnHj0$3S8nZ9v#1VI8=:/aoL[<5',
    'SECURE_AUTH_SALT' => 'l|r/|i[4$Mm0RHO-=1M:|{T<~FfM^EOp|zKNR7:+7$>|;X{UbG1IXfT+eeSBib2>',
    'LOGGED_IN_SALT' => 'E@@#`WyLvnFdo[8}]u>w_}c/AvKg13@CNN[Z~PXFVP`k}#v]gh=a<t|MN(Ei:[ 4',
    'NONCE_SALT' => 'wuHO}i*pJeY+-@N(xay3 `DUQ<Q/W*f1o=YU|v oh_2@C0!lVG[e4~5`wA.D+$V{',

    /**
     * WordPress debugging mode
     */
    'WP_DEBUG' => 'true',
    'WP_DEBUG_LOG' => 'true',
    'WP_DEBUG_DISPLAY' => 'true',
);

foreach ($variables as $key => $value) {
    $value = json_encode($value);
    putenv("$key=$value");
}

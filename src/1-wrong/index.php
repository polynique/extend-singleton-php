<?php

require './Singleton.php';
require './ExtendedSingleton.php';

$extended_singleton = ExtendedSingleton::get_instance();
echo get_class( $extended_singleton );
echo '<br />';
$extended_singleton->print_hello();

<?php

add_action('admin_head', 'commonmark_admin_header_assets');

function commonmark_admin_header_assets() {
  print '<style>'.file_get_contents(__DIR__.'/../resources/admin.css').'</style>';
}

<?php
// メニュー機能追加
function mytheme_setup() {
  register_nav_menus(array(
    'global' => 'グローバルナビ',
  ));
}
add_action('after_setup_theme', 'mytheme_setup');

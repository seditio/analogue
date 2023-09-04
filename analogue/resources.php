<?php
/* ====================
[BEGIN_COT_THEME]
Name=Analogue
Version=1.00b
[END_COT_THEME]
==================== */

/**
 * Analogue icon pack for Cotonti Siena
 * @package Cotonti
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 */

defined('COT_CODE') or die('Wrong URL');

/**
 * Arrow Icons
 */

$R['icon_down'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-270.png" alt="" />';
$R['icon_right'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow.png" alt="" />';
$R['icon_left'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-180.png" alt="" />';
$R['icon_up'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-090.png" alt="" />';
$R['icon_vert_active']['desc'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/sort-quantity.png" alt="" />';
$R['icon_vert_active']['asc'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/sort-quantity-descending.png" alt="" />';

/**
 * Main Icons
 */

$R['icon_comments'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/baloon.png" alt="" />';
$R['icon_delete'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/bin.png" alt="" />';
$R['icon_folder'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/folder-horizontal.png" alt="" />';
$R['icon_follow'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/hand-shake.png" alt="" />';
$R['icon_forums'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/baloon-box.png" alt="" />';
$R['icon_lock'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/lock.png" alt="" />';
$R['icon_page'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/document.png" alt="" />';
$R['icon_prefs'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/gear.png" alt="" />';
$R['icon_subfolder'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/folder-horizontal-open.png" alt="" />';
$R['icon_undo'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-curve-180-left.png" alt="" />';
$R['icon_unread'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/document--plus.png" alt="" />';

/**
 * Admin Icons
 */

// Icons 16x16
$R['admin_icon_blank'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/blank.png" alt="" />'; // OUT?
$R['admin_icon_comments'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/baloon.png" alt="" />';
$R['admin_icon_delete'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/bin.png" alt="" />'; // JUST 1 CASE
$R['admin_icon_forums'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/baloon-box.png" alt="" />';
$R['admin_icon_forums_posts'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/baloon-box.png" alt="" />';
$R['admin_icon_forums_topics'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/baloon-box.png" alt="" />';
$R['admin_icon_join1'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-000-medium.png" alt="" />'; // OUT?
$R['admin_icon_join2'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-000-small.png" alt="" />'; // OUT?
$R['admin_icon_page'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/document.png" alt="" />';
$R['admin_icon_tools'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/wrench.png" alt="" />';
$R['admin_icon_user'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/user.png" alt="" />';

// Icons 24x24
$R['admin_icon_auth_1'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-number-1.png" alt="" />';
$R['admin_icon_auth_2'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-number-2.png" alt="" />';
$R['admin_icon_auth_3'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-number-3.png" alt="" />';
$R['admin_icon_auth_4'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-number-4.png" alt="" />';
$R['admin_icon_auth_5'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-number-5.png" alt="" />';
$R['admin_icon_auth_a'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-attribute.png" alt="" />';
$R['admin_icon_auth_r'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-attribute-r.png" alt="" />';
$R['admin_icon_auth_w'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/document-attribute-w.png" alt="" />';
$R['admin_icon_discheck0'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/cross-shield.png" alt="" />';
$R['admin_icon_discheck1'] = '<img src="'.$cfg['icons_dir'].'/analogue/24/tick-shield.png" alt="" />';

// Icons 32x32
$R['admin_icon_core'] = '<img src="'.$cfg['icons_dir'].'/analogue/32/core.png" alt="" />';
$R['admin_icon_plugin'] = '<img src="'.$cfg['icons_dir'].'/analogue/32/plug-disconnect.png" alt="" />';
$R['admin_icon_users'] = '<img src="'.$cfg['icons_dir'].'/analogue/32/users.png" alt="" />';
$R['admin_icon_usergroup0'] = '<img src="'.$cfg['icons_dir'].'/analogue/32/users-off.png" title="'.$L['Group0'].'" alt="'.$L['Group0'].'" />';
$R['admin_icon_usergroup1'] = '<img src="'.$cfg['icons_dir'].'/analogue/32/users.png" title="'.$L['Group1'].'" alt="'.$L['Group1'].'" />';

// Default Icon
$R['admin_icon_extension_default'] = '<img src="'.$cfg['icons_dir'].'/analogue/default.png" alt="" />';

// Core Config

$R['icon_cfg_info'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/info.png" alt="" />';
$R['icon_cfg_locale'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/locale.png" alt="" />';
$R['icon_cfg_main'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/main.png" alt="" />';
$R['icon_cfg_menus'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/menus.png" alt="" />';
$R['icon_cfg_performance'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/performance.png" alt="" />';
$R['icon_cfg_phpinfo'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/server.png" alt="" />';
$R['icon_cfg_security'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/security.png" alt="" />';
$R['icon_cfg_sessions'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/sessions.png" alt="" />';
$R['icon_cfg_theme'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/theme.png" alt="" />';
$R['icon_cfg_title'] = '<img src="'.$cfg['icons_dir'].'/analogue/cfg/title.png" alt="" />';

// 1. Modules
$R['icon_module_forums'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/forums.png" alt="" />';
$R['icon_module_index'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/index.png" alt="" />';
$R['icon_module_page'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/page.png" alt="" />';
$R['icon_module_pfs'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/pfs.png" alt="" />';
$R['icon_module_pm'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/pm/pm.png" alt="" />';
$R['icon_module_polls'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/polls.png" alt="" />';
$R['icon_module_rss'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/rss.png" alt="" />';
$R['icon_module_users'] = '<img src="'.$cfg['icons_dir'].'/analogue/modules/users.png" alt="" />';

// 2. Plugins
$R['icon_plug_adminboard'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/adminboard.png" alt="" />';
$R['icon_plug_admindesktops'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/admindesktops.png" alt="" />';
$R['icon_plug_adminstats'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/adminstats.png" alt="" />';
$R['icon_plug_attach2'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/attach2.png" alt="" />';
$R['icon_plug_banlist'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/banlist.png" alt="" />';
$R['icon_plug_bbcode'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/bbcode.png" alt="" />';
$R['icon_plug_bootstrap'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/bootstrap.png" alt="" />';
$R['icon_plug_catlist'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/catlist.png" alt="" />';
$R['icon_plug_ckeditor'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/ckeditor.png" alt="" />';
$R['icon_plug_cleaner'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/cleaner.png" alt="" />';
$R['icon_plug_comlist'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/comments.png" alt="" />';
$R['icon_plug_comments'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/comments.png" alt="" />';
$R['icon_plug_contact'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/contact.png" alt="" />';
$R['icon_plug_csv'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/csv.png" alt="" />';
$R['icon_plug_csv_import'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/csv.png" alt="" />';
$R['icon_plug_customlogs'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/customlogs.png" alt="" />';
$R['icon_plug_fonts'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/fonts.png" alt="" />';
$R['icon_plug_hiddengroups'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/hiddengroups.png" alt="" />';
$R['icon_plug_hits'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/hits.png" alt="" />';
$R['icon_plug_html'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/html.png" alt="" />';
$R['icon_plug_htmlpurifier'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/htmlpurifier.png" alt="" />';
$R['icon_plug_i18n'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/i18n.png" alt="" />';
$R['icon_plug_icons'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/icons.png" alt="" />';
$R['icon_plug_ipsearch'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/ipsearch.png" alt="" />';
$R['icon_plug_listcount'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/listcount.png" alt="" />';
$R['icon_plug_markup'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/markup.png" alt="" />';
$R['icon_plug_mcaptcha'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/mcaptcha.png" alt="" />';
$R['icon_plug_pagecount'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/pagecount.png" alt="" />';
$R['icon_plug_pagelist'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/pagelist.png" alt="" />';
$R['icon_plug_ratings'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/ratings.png" alt="" />';
$R['icon_plug_reading_time'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/reading_time.png" alt="" />';
$R['icon_plug_referers'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/referers.png" alt="" />';
$R['icon_plug_search'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/search.png" alt="" />';
$R['icon_plug_sitemap'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/sitemap.png" alt="" />';
$R['icon_plug_statistics'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/statistics.png" alt="" />';
$R['icon_plug_tags'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/tags.png" alt="" />';
$R['icon_plug_trashcan'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/trashcan.png" alt="" />';
$R['icon_plug_urleditor'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/urleditor.png" alt="" />';
$R['icon_plug_userimages'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/userimages.png" alt="" />';
$R['icon_plug_whosonline'] = '<img src="'.$cfg['icons_dir'].'/analogue/plugins/whosonline.png" alt="" />';

// Custom Extras
$R['admin_icon_cache'] = '<img src="'.$cfg['icons_dir'].'/analogue/new/database-network.png" alt="" />';
$R['admin_icon_cache_disk'] = '<img src="'.$cfg['icons_dir'].'/analogue/new/drive-network.png" alt="" />';
$R['admin_icon_log'] = '<img src="'.$cfg['icons_dir'].'/analogue/new/radar.png" alt="" />';


// $R['admin_icon_allow'] = '<img class="icon" src="system/admin/img/allow.png" alt="" />'; // need to change for checkbox?
// $R['admin_icon_allow_locked'] = '<img class="icon" src="system/admin/img/allow_locked.png" alt="" />'; // need to change for checkbox?
// $R['admin_icon_deny'] = '<img class="icon" src="system/admin/img/deny.png" alt="" />'; // need to change for checkbox?
// $R['admin_icon_deny_locked'] = '<img class="icon" src="system/admin/img/deny_locked.png" alt="" />'; // need to change for checkbox?

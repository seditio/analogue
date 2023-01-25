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
$R['icon_up'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/arrow-90.png" alt="" />';
$R['icon_vert_active']['desc'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/sort-quantity.png" alt="" />';
$R['icon_vert_active']['asc'] = '<img src="'.$cfg['icons_dir'].'/analogue/16/sort-quantity-descending.png" alt="" />';;

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

// $R['admin_icon_allow'] = '<img class="icon" src="system/admin/img/allow.png" alt="" />'; // need to change for checkbox?
// $R['admin_icon_allow_locked'] = '<img class="icon" src="system/admin/img/allow_locked.png" alt="" />'; // need to change for checkbox?
// $R['admin_icon_deny'] = '<img class="icon" src="system/admin/img/deny.png" alt="" />'; // need to change for checkbox?
// $R['admin_icon_deny_locked'] = '<img class="icon" src="system/admin/img/deny_locked.png" alt="" />'; // need to change for checkbox?

<?php
/**
* Common Template
* 
* @package templateSystem
* @copyright Copyright 2003-2005 Zen Cart Development Team
* @copyright Portions Copyright 2003 osCommerce
* @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
* @version $Id: tpl_box_default_left.php 2975 2006-02-05 19:33:51Z birdbrain $
*/
// Used by tpl_product_info_display to display the product notifications box, if enabled.
// The variables $show_product_notifications and $notification_exists are set by tpl_product_info_display's previous
//   require of /includes/modules/sideboxes/product_notifications.php
//
if ($show_product_notifications) {
?>
<div id="productInfoNotify"><?php echo $content; ?></div>
<?php
}
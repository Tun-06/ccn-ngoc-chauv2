<?php
/**
 * Chuyển hướng tất cả các trang Chuyên mục (Category) về trang Tin tức chính (/tin-tuc/)
 * Theo đúng yêu cầu không muốn hiển thị trang chuyên mục riêng lẻ.
 */
wp_redirect(home_url('/tin-tuc/'), 301);
exit;

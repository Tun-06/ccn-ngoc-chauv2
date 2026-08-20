<?php
/**
 * Chuyển hướng tất cả các trang Lưu trữ (Archive) về trang Tin tức chính (/tin-tuc/)
 */
wp_redirect(home_url('/tin-tuc/'), 301);
exit;

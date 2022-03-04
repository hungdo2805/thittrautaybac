<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'project_thittrautaybac' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'po1vbVqF,UOwP -Ysh4xlC|.LX!y{z9)_4~fvMlmhw?*L%51) ma|=KCi_jng64X' );
define( 'SECURE_AUTH_KEY',  ':xtHRsza]m3W9onX8L(xEun{CIAKR&oXkz}=E<)X.Kb!Z2e/^L9a~<:1fCut:.EZ' );
define( 'LOGGED_IN_KEY',    'zCCEnF7-4V4gj7-%XjTn]haS,VgUA]0469$|v7SDBCy4MA}i+iiYn/h{+#3CZ)[j' );
define( 'NONCE_KEY',        '}f;[d2}yVJ8eX[JpU/bEd](.]U9/a%uy|h#aX157EOw 6I)&@N!uD<tCXK/[6j5c' );
define( 'AUTH_SALT',        'W|%naS~CX{u2sb[Ocm}N,!__U;e,~4GIHNx6y#@tS&98nmX1GI)sgKbM?i!0%l_C' );
define( 'SECURE_AUTH_SALT', 'yXiT|Q7wca}K4/.;]}`F$V-5:Bc3Z-YV8u;Nzr<e.JGGQQacN)T2]<@1V[AmXC8v' );
define( 'LOGGED_IN_SALT',   'Y#|zCxO-IW>5llC5Vp/2o.L-;eFHSqs$iXS0[Z1Cug;J1fhccqbd:e@v+~Ji[ f~' );
define( 'NONCE_SALT',       'ua`Z[kO5 ;3TQy-|&$>XZ&+jY*M#41!8qnZOv[_ ]zU2M6;_0Tj#>[S:i?iL3v^c' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');

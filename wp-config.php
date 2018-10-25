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
define('DB_NAME', 'wp_woo');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', 'root');

/** Hostname của database */
define('DB_HOST', '127.0.0.1');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'YP}DI6VMVXfrVY &@A/>8OabVOA^poxK2A2*[1h2jO`eF.Z3fI?1I;Ql[8<oc/Kn');
define('SECURE_AUTH_KEY',  '07A3rxME2K|L>?1q0/[&m;d&/3`xsm<90[l}-+vX[3KC<PUe{#$Pt9N;Qx),W{yU');
define('LOGGED_IN_KEY',    'jNe0B&bdK7pi>9_=<_2wJ-mCDs`5Ep/0=cKNxFU=Y)q`TA[CC9OF[dEC|R&nN*K[');
define('NONCE_KEY',        'XcAj9^726p[]%[sQ_}OI[b9aa@m^{R}l+M]g*hVOHZ-!!dxd>_9/y9-P(3rXsla#');
define('AUTH_SALT',        'p4n>8$m8@D4:P,j-X+-tAwol*Itci(KpGLX^/M#;f62d+Q<S6poDK{Hg5C62s[Tt');
define('SECURE_AUTH_SALT', 'aa2#RNVUhdM wyeQgiqHCE{8!d>JZ`?:B^(Z8u&It@b=h:aK@e]?-Kvvx^0MoWG(');
define('LOGGED_IN_SALT',   'pA0kuuN2bL#,|or{OPNqf._$.WFc)@bTvWF7:oM,[ks?CLRh=syQBvu/9LI(b<WU');
define('NONCE_SALT',       ',#wpyLO9+j^2SPyphQ~x_ #rh3Fe2,^G#iFR.K]=tRv`OJ@x{[0N$XD7zMjO)pZf');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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


<?php 

// Biến môi trường, dùng chung toàn hệ thống
// Khai báo dưới dạng HẰNG SỐ để không phải dùng $GLOBALS

define('BASE_URL'       , 'http://localhost/duan1/du_an_1/');
// Duong dan vao phan models
define('BASE_URL_AMIN'       , 'http://localhost/duan1/du_an_1/admin/');

define('BASE_URL_QUANLI'       , 'http://localhost/duan1/du_an_1/quanli/');



define('DB_HOST'    , 'localhost');
define('DB_PORT'    , 3306);
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME'    , 'database_cua_binh_2');  // Tên database

define('PATH_ROOT'    , __DIR__ . '/../');

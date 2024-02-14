# MasterLogin
Merupakan project laravel yang digunakan untuk multi role login user. Dapat menggunakan login dengan username, password atau email username. 

# Cara Penggunaan
    1. lakukan perintah : git clone <repository-url>
    2. rename project folder 
    3. arahkan path ke project folder
    4. lakukan perintah : composer install
    5. lakukan perintah : cp .env.example .env (Untuk membuat .env)
    6. Sesuaikan konfigurasi database di folder .env
    7. lakukan perintah : php artisan key:generate
    8. lakukan perintah : php artisan migrate --seed
    9. lakukan perintah : php artisan serve
    10. Buka url laravel project

# Penjelasan Alur Program
    1. Perhatikan schema database pada migrasi create_users_table dan create_role_table
    2. Berdasarkan schema, table role memiliki banyak user dengan foreign key di tabel user adalah role_id
    3. Pada model user dan role diberikan fungsi untuk mengenali foreign key (fungsi role di tabel user, dan fungsi user di tabel role)
    ----
    4. Pada model user, juga terdapat fungsi hasRole yang digunakan untuk pengecekan middleware role name pada route
    5. Pengecekan dilakukan di middleware CheckRole (App\Http\Middleware\ChekcRole.php)
    6. Pada route (web.php) terdapat Grup Route dengan middleware auth dan role:superadmin
    7. Group route ini digunakan supaya user tidak dapat melakukan bypass ke route yang telah terdaftar (akan muncul halaman unauthorized)
    ----
    8. Pada project ini juga sudah tersedia login dan register menggunakan route web dan api.
    9. Project ini juga menggunakan sanctum untuk generate key yang digunakan pada route api.
    10. Controller yang digunakan untuk route web dan api juga sudah terpisah (Di Folder Api merupakan controller untuk route dari api)
    11. Pada project ini, pengguna dapat melakukan login dengan username atau dengan email, dan dapat disesuaikan dengan kebutuhan project selanjutnya.

# Penjelasan Middleware
Middleware merupakan fitur yang berupa class yang telah disediakan laravel untuk mencegah pengguna melakukan bypass pada program yang dibuat. Middleware sendiri berjalan pada saat sebelum request dijalankan.

Sederhananya, Middleware pada Laravel layaknya seperti filter sebagai penghubung antara permintaan HTTP dengan aplikasi Laravel kita yang dapat membantu memeriksa permintaan dan menentukan apa yang harus dilakukan sebelum permintaan tersebut diproses (source : buildwithangga.com).

# Source
Project ini menggunakan framework laravel dengan template html, css, dan javascript sneat.

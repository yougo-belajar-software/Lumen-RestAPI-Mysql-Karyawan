# Lumen - Mysql - RestAPI Karyawan
Really Simple RESTful API using Lumen.

## Requirements
1. Composer
2. XAMPP or PHP >= 7.2.x

## Endpoints
1. Karyawan
   - **GET** Tampilkan semua karyawan
     > http://localhost:port/karyawan
   - **GET** Tampilkan Karyawan dengan spesifik ID
     > http://localhost:port/karyawan/{id}
   - **POST** Tambah Karyawan Baru (_id, nama, email, gender, lamaKerja)
     > http://localhost:port/karyawan
   - **PUT** Update Data Karyawan dengan body (_id, nama, email, gender, lamaKerja)
     > http://localhost:port/karyawan/{id}
   - **DELETE** Hapus Data Karyawan dengan spesifik Id
     > http://localhost:port/karyawan/{id}
     
## How to Use
1. Clone this repository to your desired location.
2. Run command `composer install`
3. Create database and configure it on `.env` file.
4. Run migration `php artisan migrate`.
5. Run migration `php artisan db:seed`.
6. Run server `php -S localhost:8000 -t public`.
7. Do-what-you-want-with-it!

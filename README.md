# Sistem Inventaris Perpustakaan (SIP)

Aplikasi Sistem Inventaris Sekolah adalah suatu proyek yang bertujuan untuk melakukan rekap inventaris dan peminjaman terhadap perpustakaan ,sehingga perpustakaan dapat Transaksi Peminjaman Buku dan Keluar MAsuknya Buku

# Alur Penggunaan Sistem Inventaris Perpustakaan
1. Admin masuk kedalam sistem dengan menggunakan email dan password yang telah terdaftar, anda juga bisa masuk dengan menggunakan google ,namun harus dipastikan bahwa emailo sudah ada di database 
2. Admin kemudian dapat memilih menu yang diinginkan
    1. Menu Dashboard
        Pada menu ini tidak menampilkan apa apa 
    2. Menu Jenis Buku
        Disini adalah menu yang digunakan untuk mengeloala jenis buku ,disini admin bisa menambahkan jenis buku ,mengedit jenis buku dan menghapus jenis buku , namun harus dipastikan bahwa jenis buku ini sudah tidak ada kalau tidak tidak akan bisa dihapus.
    3. Menu Buku
        Disini adalah menu yang digunakan untuk mengelola buku , disini admin bisa menambahkan buku ,mengedit buku dan menghapus buku ,namun harus dipastikan bahwa buku ini sedang tidak ada di transaksi peminjamana kalau tidak tidak aklan bisa dihapus.
    4. Menu Peminjaman
        Disini adalam menu untuk mengelola peminjam , disini admin bisa menambahkan peminjam ,mengedit peminjam dan menghapus peminjam ,namun harus diperhatika bahwa hanya bisa dihapus jika peminjam tidak memiliki transaksi apapun.
    5. Menu transakasi Peminjaman
        Disini admin bisa mengelola transaksi untuk peminjaman , disini admin bisa menambahkan transaksi baru ,mengubah transaksi peminjaman menjadi telah dikembalikan ,admin juga bisa menghapus data transaksi yang diras sudah tidak relevan
    6. Profile 
        Admin bisa mengubah informasi basic dari akunnya ,mulai dari nama ,email dan password

> [Instlasi & Cara penggunaan](#cara-penggunaan)

## Fitur Utama

>[!NOTE]
>
>## Framework dan Library Yang Digunakan
>
>- [Laravel 11](https://laravel.com/)------(Laravel-Breeze Starter Kit)
>- [Tailwind CSS](https://tailwindcss.com/)
>- [Flowbite Admin Template](https://flowbite.com/)

## Cara Penggunaan

> [!CAUTION]
>
> ### Persyaratan
>
> - [Composer](https://getcomposer.org/).
> - PHP 8.1+ dan MySQL/MariaDB atau menggunakn [laragon](https://laragon.org/) untuk lebih mudahnya.
>
> ### Instalasi
> - Tambahkan google client agar bisa login with google
> - 
> - GOOGLE_CLIENT_ID="Client ID Anda"
> - GOOGLE_CLIENT_SECRET="Clinet Secret anda"
> - GOOGL_CALLBACK_REDIRECTS="http://127.0.0.1:8000/auth/google/call-back"
>
> - Clone/Download source code proyek ini.
>
> - Pastikan sudah masuk ke folder yang sesuai,dengan menulis di terminal:
>
> - Install Depedencies yang diperlukan dengan menjalankan perintah di terminal :
>   ```shell
>   composer install
>   ```
> 
> - Jika belum terdapat file `.env`, copy file `.env example` dan ubah menjadi `.env`
> 
> - Generate key pada code agar web dapat dijalankan dengan menulis di terminal :
> 
>   ```shell
>   php artisan key:generate
>   ```
>   
> - Install Dependencies yang lain unyuk tampilan dengan menjalankan perintah di terminal :
> 
>   ```shell
>   npm install
>   ```
>
> - jangan lupa untuk migrasi dan seeder databse dengan menjalankan perintah di terminal :
>   ```shell
>   php artisan migrate --seed
>   ```
> - jika ingin memuat ulang database ke bentuk semula dapat menggunakan perinta :
>   ```shell
>   php artisan migrate:fresh --seed
>   ```
> - untuk menjalankan perlu menulis perintah di dua terminal yang berbeda yaitu:
>   ```shell
>   php artisan serve
>   ```
> - dan
>   ```shell
>   npm run dev
>   ```
>
> - Klik kanan localhost yang telah didapat dari perintah php artisan serve
> - jangan lupa bahwa laragion/XAMPP harus menyala untuk connect ke PHPmyadmin
> - jika terdapat eror mungkin perlu menjalankan perintah :
>   ```shell
>   composer update
>   ```
>
> - untuk fitur login with google perlu menggunakan protocol HTTPS,jika tidak akan eror.

> [!TIP]
> - email darus terdaftar di gmail dan database untuk bisa login
> - jika ingin merubah database menggunakan selain MYSQL dapat dilakukan di `.env`
> - dikarenakan menggunakan API dari Google maka akan ada google client dan lainnya di `.env` agar bisa menggunakn login with google
> - disarankan untuk mendaftarkan di google cloud console untuk dapat mengakses login with google
> - dikarenakan menggunakan starter kit laravel breeze beberapa path bawaan masih bisa diakses


> ### Akun
> - Akun admin 
> - email : `andre.eka.ferdiansyah123@gmail.com`
> - password : `admin123`
>
> Anda dapat menambahkan akun lain namun lewat code ataupun server

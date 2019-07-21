# inventaris

1. ini merupakan aplikasi inventaris menggunakan laravel 5.7, dan menggunakan ajax
2. folder vendor tidak di upload, silakan gunakan aplikasi ini dengan menambahkan folder vendor laravel 5.7
3. aplikasi ini menggunakan database mysql
4. pastikan anda telah menginstal composer atau apapun untuk menjalankan laravel

Konfigurasi
1. Download atau clone file ini
2. pastikan step no. 2 diatas sudah di laksanakan.
3. buka cmd lalu aktifkan direktori/folder yang telah Anda download.
4. di aplikasi ini saya menggunakan yajra Datatables maka perlu Anda tambahkan di composer, ketik sebagai berikut di cmd
    
    composer require yajra/laravel-datatables-oracle:"~8.0"
    
    tambahkan kode ini di config/app.php
    
    'providers' => [
      Yajra\DataTables\DataTablesServiceProvider::class,
    ]

    'aliases' => [
      'DataTables' => Yajra\DataTables\Facades\DataTables::class,
    ]
    
5. silakan import file inventaris.sql ke database Anda karena sudah tersedia akun superadmin
6. atau bisa juga dengan memanfaatkan CLI 'php artisan migrate', lalu masuk ke php artisan tinker untuk membuat akun
  dengan role = 'admin' atau 'superadmin'
  atau copy kode di bawah ini ke tinker, copy secara perbaris lalu enter
  
  $data = new \App\User;
  $data->name = 'Yourname';
  $data->email = 'Youremail';
  $data->password = Hash::make('Yourpassword');
  $data->roles = 'superadmin;
  $data->phone = '082123123123';
  $data->noreg = '829.KD.XVII.18';
  $data->save();
  
  maka akan menghasilkan true
  lalu silakan login
  jika step no.5 dijalankan maka step no. 6 tidak diperlukan, karena Anda dapat menambahkan user setelah login.
7. lalu buka browser ketik 'localhost:8000' .... silakan login

note: aplikasi ini menggunakan library jquery online, dibutuhkan koneksi internet saat menjalankan aplikasi ini saat pertama kali.

# CodeIgniter 4 Framework

## Apa itu Kisa?

Kisa adalah aplikasi berbasis web yang mempunyai konsep buku tamu digital. Kisa menggambarkan dirinya sebagai aplikasi buatan kampus (Universitas Widyatama) yang 
digunakan untuk memasukkan data tamu yang ingin berkunjung ke kampus tersebut. Aplikasi ini bentuknya sederhana dan mirip dengan program input data tamu yang 
ingin berkunjung di Pustakaloka Universitas Widyatama.

## Apa saja yang mesti dipersiapkan?

1) CodeIgniter 4 [official site](https://codeigniter.com).
2) XAMPP [official site](https://www.apachefriends.org/).
3) Composer [official_site](https://getcomposer.org/).
4) Salah satu teks editor, contohnya Visual Studio Code [official site](https://code.visualstudio.com/).
5) File import database (yang ada di dalam folder Task Distribution, Database SQL, dan Implementasi OOP)
6) (Opsional) Extensions (PHP Intelephense dan Prettier).

## Cara konfigurasi Apache di XAMPP

1) Nyalakan (Start) Apache.
2) Tekan Config di samping kanan Admin (masih bagian Apache).
3) Klik PHP (php.ini).
4) Gunakan Ctrl+F untuk mencari huruf/angka/simbol, lalu cari intl. Arahkan Direction ke bawah (Down).
5) Hapus tanda titik koma (;) di depan baris ;extension=intl.
6) Gunakan Ctrl+S untuk menyimpan file.
7) Restart Apache dengan mematikan (Stop) dan menyalakannya (Start) kembali.

## Cara Melakukan Integrasi Project Kisa

1) Tekan Code di samping kanan Add file, lalu tekan Download ZIP.
2) Ekstrak file zip dan diarahkan ke C:\xampp\htdocs.
3) Nyalakan Apache dan MySQL, kemudian buat database dengan nama kisa.
4) Silahkan Anda upload file import database (kisa.sql) pada menu import.
5) Buka terminal dan ketik php spark serve.
6) Di kolom pencarian web browser, Anda dapat menuliskan http://localhost:8080.
7) Jika ingin masuk ke halaman admin, silahkan ketik http://localhost:8080/login.
8) Masukkan username/email dan password. Dan Anda akan masuk ke dalam admin kisa.

Untuk mengakses halaman admin, Anda dapat mengisi form sebagai berikut.
1) Admin: username (adminkisa) dan password (tugaspbo2)
2) User: username (arifin) dan password (iniarifin)

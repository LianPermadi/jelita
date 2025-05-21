<p align="center">
  <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Lambang_Provinsi_Jawa_Barat.svg" width="120" alt="Logo Jabar">
</p>

<h2 align="center">✨ Aplikasi JELITA</h2>
<h3 align="center">Jendela Layanan Informasi dan Tata Kelola Perizinan Investasi</h3>
<p align="center">DPMPTSP Provinsi Jawa Barat</p>

---

## 📥 Panduan Clone & Setup Aplikasi Jelita

_Aplikasi ini adalah sistem internal untuk mendukung layanan investasi di lingkungan DPMPTSP Provinsi Jawa Barat._

---

## 🚀 Langkah Cepat Instalasi (Untuk Developer)

### 1. Clone Repo
```bash
git clone https://github.com/nama-org/jelita.git
cd jelita
```
2. Salin File .env
```bash
bash
Salin
Edit
cp .env.example .env
```
3. Install Dependencies
Pastikan Composer sudah terinstall di komputer Anda.
```
bash
Salin
Edit
composer install
```
4. Generate Application Key
```
bash
Salin
Edit
php artisan key:generate
```
6. Konfigurasi Database (.env)
```
ini
Salin
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=jelita_db
DB_USERNAME=root
DB_PASSWORD=rahasia123
```
7. Jalankan Migrasi & Seeder
```
bash
Salin
Edit
php artisan migrate --seed
```
9. Jalankan Server Lokal
```
bash
Salin
Edit
php artisan serve
⚙️ Kebutuhan Sistem
Komponen	Versi Minimum
PHP	8.x
Composer	Terbaru
MySQL/MariaDB	5.7 / 10.x
Apache/Nginx	Sesuai kebutuhan
Node.js	Jika ada frontend assets
```

🤝 Kontribusi
Jika Anda bagian dari tim DPMPTSP atau developer eksternal yang ingin membantu pengembangan aplikasi ini, silakan lakukan fork, buat branch, dan kirimkan pull request.

🔐 Keamanan
Jika Anda menemukan potensi celah keamanan, mohon jangan publikasikan. Segera hubungi tim teknis DPMPTSP Jawa Barat melalui jalur resmi.

📄 Lisensi
Aplikasi ini dikembangkan untuk kebutuhan internal DPMPTSP Provinsi Jawa Barat dan tidak diperuntukkan untuk distribusi publik.

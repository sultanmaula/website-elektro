# Sistem Informasi CPL — Teknik Elektro UMM

Aplikasi web berbasis Laravel untuk mengelola **Capaian Pembelajaran Lulusan (CPL)**, mata kuliah, dan data dosen pada Program Studi Teknik Elektro Universitas Muhammadiyah Malang.

## Fitur Utama

- Manajemen **Mata Kuliah** (tambah, lihat, edit, hapus)
- Manajemen **CPL** beserta pemetaan ke mata kuliah
- Manajemen **Indikator CPL**
- Manajemen **Dosen**
- Manajemen **Pengguna**, **Role**, dan **Permission** berbasis Spatie Laravel Permission
- Autentikasi lengkap via Laravel Jetstream (login, verifikasi email, two-factor auth)

## Teknologi

| Komponen | Versi |
|---|---|
| PHP | ^7.3 / ^8.0 |
| Laravel | ^8.75 |
| Laravel Jetstream + Livewire | ^2.9 / ^2.5 |
| AdminLTE | ^3.8 |
| Tailwind CSS | — |
| Spatie Laravel Permission | ^5.7 |
| Laravel Sanctum | ^2.11 |

## Instalasi

### Prasyarat

- PHP >= 7.3
- Composer
- Node.js & npm
- MySQL / MariaDB

### Langkah-langkah

1. **Clone repository**

   ```bash
   git clone <url-repo> website-elektro
   cd website-elektro
   ```

2. **Install dependensi PHP**

   ```bash
   composer install
   ```

3. **Install dependensi frontend**

   ```bash
   npm install
   npm run dev
   ```

4. **Konfigurasi environment**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Sesuaikan konfigurasi database di file `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username
   DB_PASSWORD=password
   ```

5. **Migrasi dan seeding database**

   ```bash
   php artisan migrate --seed
   ```

6. **Jalankan aplikasi**

   ```bash
   php artisan serve
   ```

   Aplikasi berjalan di `http://localhost:8000`

## Akun Default

Setelah seeding, tersedia dua akun bawaan:

| Role | Email | Password |
|---|---|---|
| Superadmin | sultanmaulachamzah@gmail.com | sult@n354 |
| Admin | admin@gmail.com | admin123 |

> Segera ganti password default setelah login pertama kali.

## Struktur Role & Permission

| Role | Akses |
|---|---|
| **superadmin** | Semua fitur termasuk manajemen user, role, dan permission |
| **admin** | Manajemen matkul, CPL, indikator CPL, dan lihat dosen |
| **dosen** | Manajemen matkul, CPL, dan indikator CPL |

## Struktur Direktori Utama

```
app/
├── Http/Controllers/   # Controller: CPL, Matkul, Dosen, User, Role, Permission
├── Models/             # Model: CPL, Matkul, User, Membership
database/
├── migrations/         # Skema tabel
├── seeders/            # Data awal (admin, CPL, matkul, dosen)
resources/views/
├── cpl/                # Halaman kelola CPL & indikator
├── matkul/             # Halaman kelola mata kuliah
├── dosen/              # Halaman daftar dosen
├── user/               # Halaman kelola pengguna
├── role/               # Halaman kelola role
└── permission/         # Halaman kelola permission
```

## Lisensi

MIT License

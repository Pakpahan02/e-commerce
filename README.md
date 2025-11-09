# 🛒 E-Commerce Project (Laravel Livewire Starter Kit)

Selamat datang di proyek **E-Commerce** berbasis **Laravel**!

Proyek ini bertujuan untuk mengembangkan aplikasi perdagangan elektronik yang memanfaatkan **Laravel 12** dan **Livewire Starter Kit** (`livewire/volt`, `livewire/flux`) untuk antarmuka yang modern, dinamis, dan efisien.

---

## 🚀 1. Persyaratan Sistem Lokal

Pastikan Anda telah menginstal: **PHP 8.2+**, **Composer**, **Node.js (LTS)**, **NPM**, dan **Git**.

---

## ⚙️ 2. Langkah Instalasi Proyek

Ikuti langkah-langkah ini untuk menyiapkan dan menjalankan proyek di komputer lokal Anda.

### A. Mendapatkan Kode Sumber & Verifikasi

1.  Kloning repositori:
    ```bash
    git clone [URL-REPOSITORI-ANDA]
    cd e-commerce
    ```
2.  Verifikasi Composer dan NPM:
    ```bash
    composer -v
    node -v && npm -v
    ```

### B. Instalasi Dependensi Dasar

Untuk menginstal semua dependensi _backend_ (PHP) dan _frontend_ (JavaScript/CSS), gunakan perintah berikut:

| Layanan               | Perintah           | Fungsi                                                                          |
| :-------------------- | :----------------- | :------------------------------------------------------------------------------ |
| **Backend (PHP)**     | `composer install` | Mengunduh semua dependensi PHP yang tercantum dalam `composer.json`.            |
| **Frontend (JS/CSS)** | `npm install`      | Mengunduh semua dependensi JavaScript/Node yang tercantum dalam `package.json`. |

### C. Proses Setup Otomatis (Cara Paling Cepat)

Setelah dependensi dasar terinstal, gunakan _script_ `composer setup` untuk menyelesaikan konfigurasi yang tersisa:

```bash
composer setup
```

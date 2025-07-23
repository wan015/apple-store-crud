# Apple Store CRUD App

> **Apple Store CRUD App** adalah aplikasi **Laravel** sederhana untuk melakukan operasi **CRUD** (Create, Read, Update, Delete) pada data produk “Apple Store”.

---

## ⚙️ Fitur Utama

* **CRUD Produk**

  * Tambah produk (nama, deskripsi, harga, stok, kategori)
  * Lihat daftar produk beserta kategori
  * Edit dan hapus produk

* **CRUD Kategori**

  * Tambah kategori (nama kategori)
  * Lihat daftar kategori
  * Edit dan hapus kategori

* **Validasi Input**

  * Semua field wajib diisi
  * Harga dan stok hanya angka positif

* **RESTful API**

  * `GET /products`
  * `GET /products/{id}`
  * `POST /products`
  * `PUT /products/{id}` / `PATCH /products/{id}`
  * `DELETE /products/{id}`
  * `GET /categories`
  * `GET /categories/{id}`
  * `POST /categories`
  * `PUT /categories/{id}`
  * `DELETE /categories/{id}`

---

## 🛠️ Teknologi

* PHP 8.1+
* Laravel 10.x
* MySQL 8+
* Composer
* Node.js & NPM (untuk mix / asset compilation)
* Blade + Bootstrap 5

---

## 🔢 Prasyarat

* PHP >= 8.1
* Composer
* MySQL Server
* Node.js & NPM
* Git

---

## 🚀 Instalasi

1. **Clone repo**

   ```bash
   git clone https://github.com/wan015/apple-store-crud.git
   cd apple-store-crud
   ```
2. **Install dependencies**

   ```bash
   composer install
   npm install
   ```

---

## ⚙️ Konfigurasi

1. Duplikat file `.env.example`:

   ```bash
   cp .env.example .env
   ```
2. Atur variabel di `.env`:

   ```ini
   APP_NAME="Apple Store CRUD"
   APP_URL=http://localhost:8000

   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=apple_store_db
   DB_USERNAME=root
   DB_PASSWORD=
   ```
3. Generate application key:

   ```bash
   php artisan key:generate
   ```

---

## 🗄️ Migrasi & Seeder

Jalankan migrasi dan seeder (jika ada):

```bash
php artisan migrate
php artisan db:seed
```

---

## ▶️ Menjalankan Aplikasi

```bash
npm run dev   # Compile asset
php artisan serve
```

Akses aplikasi di `http://localhost:8000`.

---

## 📡 API Endpoints

| Method | Endpoint           | Deskripsi                   |
| ------ | ------------------ | --------------------------- |
| GET    | `/products`        | Daftar semua produk         |
| GET    | `/products/{id}`   | Detail produk per ID        |
| POST   | `/products`        | Tambah produk baru          |
| PUT    | `/products/{id}`   | Update data produk          |
| PATCH  | `/products/{id}`   | Update sebagian data produk |
| DELETE | `/products/{id}`   | Hapus produk                |
| GET    | `/categories`      | Daftar semua kategori       |
| GET    | `/categories/{id}` | Detail kategori per ID      |
| POST   | `/categories`      | Tambah kategori baru        |
| PUT    | `/categories/{id}` | Update data kategori        |
| DELETE | `/categories/{id}` | Hapus kategori              |

---

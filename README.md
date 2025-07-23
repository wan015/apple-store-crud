# Apple Store CRUD App

> Aplikasi sederhana berbasis Laravel untuk melakukan operasi **CRUD** (Create, Read, Update, Delete) pada data produk “Apple Store”.

---

## 📄 Deskripsi

Aplikasi ini berfungsi sebagai **backend** sederhana untuk mengelola data produk di sebuah “Apple Store” fiktif.  
Dengan aplikasi ini, pengguna dapat:

-   **Menambahkan** produk baru (Create)
-   **Melihat** daftar produk (Read)
-   **Memperbarui** data produk yang sudah ada (Update)
-   **Menghapus** produk (Delete)

Semua operasi tersimpan dalam database MySQL.

---

## ⚙️ Fitur Utama

1. **CRUD Produk**
    - Form tambah produk (nama, deskripsi, harga, stok)
    - Tabel daftar produk
    - Edit data produk
    - Hapus produk
2. **Validasi Input**
    - Semua field wajib diisi
    - Harga dan stok harus berupa angka
3. **Routing & Controller**
    - Struktur RESTful:
        - `GET /products` → daftar produk
        - `GET /products/create` → form tambah
        - `POST /products` → simpan data
        - `GET /products/{id}/edit` → form edit
        - `PUT /products/{id}` → update data
        - `DELETE /products/{id}` → hapus data

---

## 🛠️ Teknologi

-   **Backend:** Laravel 10.x
-   **Database:** MySQL
-   **Dependency Management:** Composer
-   **Frontend (opsional):** Blade + Bootstrap 5

---

## 🚀 Cara Instalasi & Menjalankan

1. **Clone repository**
    ```bash
    git clone https://github.com/username/apple-store-crud.git
    cd apple-store-crud
    ```

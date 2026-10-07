# Sistem Akademik Informatika

Website sederhana berbasis PHP dan MySQL untuk menampilkan data akademik secara dinamis.

## Teknologi

* PHP
* MySQL
* HTML
* CSS
* XAMPP
* Git & GitHub

## Struktur Project

```text
Web-Mysql/
│
├── services/
│   └── config.php
│
├── database/
│   └── schema.sql
│
├── index.php
├── style.css
└── README.md
```

## Entitas dan Atribut

### 1. Mahasiswa

Atribut:

* `id` sebagai Primary Key
* `npm`
* `nama`
* `jurusan`
* `id_kelas` sebagai Foreign Key

### 2. Kelas

Atribut:

* `id_kelas` sebagai Primary Key
* `nama_kelas`

### 3. Mata Kuliah

Atribut:

* `id_matakuliah` sebagai Primary Key
* `kode_matakuliah`
* `nama_matakuliah`
* `sks`

## Relasi

Tabel `mahasiswa` memiliki relasi dengan tabel `kelas` melalui atribut `id_kelas`.

```text
Kelas 1 ───────── N Mahasiswa
```

Artinya:

* Satu kelas dapat memiliki banyak mahasiswa.
* Satu mahasiswa hanya berada pada satu kelas.

Relasi tersebut merupakan **One-to-Many (1:N)**.

Foreign Key:

```text
mahasiswa.id_kelas
        ↓
kelas.id_kelas
```

## Menjalankan Project

1. Install dan jalankan XAMPP.
2. Aktifkan Apache dan MySQL.
3. Buka phpMyAdmin.
4. Jalankan file:

```text
database/schema.sql
```

5. Pastikan database `akademik` berhasil dibuat.
6. Pastikan konfigurasi database pada:

```text
services/config.php
```

sesuai dengan konfigurasi MySQL.

7. Simpan project di:

```text
C:\xampp\htdocs\Web-Mysql
```

8. Buka browser dan akses:

```text
http://localhost/Web-Mysql/
```

## Fitur

Website menampilkan:

* Data mahasiswa
* Data kelas
* Data mata kuliah
* Relasi mahasiswa dengan kelas
* Data dari database secara dinamis

Data ditampilkan menggunakan PHP dengan:

```php
while
```

dan:

```php
mysqli_fetch_assoc()
```

Query menggunakan:

```sql
SELECT
```

serta `JOIN` untuk mengambil data mahasiswa dan kelas.

# BY RYAN

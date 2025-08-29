
## 🚀 Cara Menjalankan

Pastikan sudah menginstall **Docker & Docker Compose v2**.

1. Clone repo ini (atau masuk ke root project)
   ```bash
   git clone https://github.com/rizkidsaputra/Taskflow
   cd taskflow
   ```

2. Jalankan Compose
   ```bash
   docker compose up -d --build
   ```

3. Cek status container
   ```bash
   docker compose ps
   ```

4. Akses aplikasi:
   - **Frontend (React):** http://localhost:3000  
   - **Backend API (Express):** http://localhost:5000  
   - **MariaDB (Database):** localhost:3306 (user: root, password: root)

---

## 🧹 Menghentikan & Membersihkan

Stop container:
```bash
docker compose down
```

Hapus container + volume (reset database):
```bash
docker compose down -v
```

---

## ✨ Fitur Utama Setup ini
- 🔄 **Otomatisasi**: Semua service jalan hanya dengan 1 perintah
- 💾 **Persistent Storage**: Data MariaDB disimpan di host
- 🔗 **Networking**: Service saling terhubung melalui `taskflow-net`
- 📦 **Isolasi Lingkungan**: Tidak perlu install MySQL/Node/React manual di host

---

## 📌 Catatan
- Pastikan port **3000** dan **5000** tidak dipakai aplikasi lain.
- Jika ingin mengganti konfigurasi database, ubah environment di bagian `db` dalam `docker-compose.yaml`.

---

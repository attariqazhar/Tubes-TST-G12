<h1 align="center"> Tugas Besar II3160 Teknologi Sistem Terintegrasi</h1>

## Kelompok 12
  >Attariq Muhammad Azhar (18221043)
  
  >Nalendro N.U.A.R.F. (18221085)

  >Nicolas Owen Halim	(18221095)

## Deskripsi Sistem
NAOmart merupakan sebuah toko ritel yang menyediakan berbagai macam kebutuhan sehari-hari. Untuk saat ini, NAOmart hanya menyediakan layanan pembelanjaan secara daring. NAOmart memiliki dua sistem yang saling terintegrasi, yaitu NAOmart Inventory Management dan NAOmart Store. Konsumen NAOmart akan menggunakan website NAOmart Store untuk aktivitas jual-beli sementara pegawai akan mengelola website NAOmart Inventory Management untuk aktivitas mengelola item yang dijual. Kedua sistem tersebut saling terintegrasi untuk mengelola ketersediaan barang yang dijual pada NAOmart. Setiap sistem memiliki domainnya masing-masing. 

### Sistem Manajemen Inventori (NAOmart Inventory Management)
NAOmart Inventory Management merupakan inventory management system website yang menyimpan data barang-barang yang dijual oleh NAOmart. 
#### Core Domain
1. Sistem pengelolaan inventori. Sistem ini digunakan oleh pegawai NAOmart untuk melihat stok barang, menambahkan barang baru, menghapus barang, serta menambahkan stok barang. 
2. Sistem notifikasi barang dengan jumlah yang sedikit. Sistem akan memberikan tampilan tabel khusus untuk item dengan jumlah stok di bawah 10 yang dapat dilihat oleh vendor.
#### Generic Domain 
1. Sistem login. Pegawai perlu memasukkan username serta password untuk dapat mengakses sistem.
#### Supporting Domain
1. Tampilan profil pengguna. Sistem akan menampilkan profil pengguna sesuai dengan data yang didapatkan.
<br></br>
### Sistem Online Shop (NAOmart Store)
NAOmart Store merupakan sebuah online shop website yanag menyediakan layanan pembelian barang-barang yang disediakan oleh NAOmart kepada para pelanggan. NAOmart Store menyediakan barang dengan beberapa kategori, yaitu makanan dan minuman, peralatan rumah tangga, alat tulis, dan mainan.  
#### Core Domain
1. Sistem rekomendasi barang. Sistem akan menampilkan barang-barang yang direkomendasikan oleh toko berdasarkan perhitungan jumlah transaksi pembelian barang.
#### Generic Domain 
1. Sistem login. Konsumen perlu memasukkan username serta password untuk dapat mengakses sistem.
2. Sistem pembelian barang. Konsumen dapat memasukkan jumlah barang yang ingin dibeli dan melakukan proses checkout. 
3. Sistem pencarian barang. Konsumen dapat memasukkan nama barang dan sistem akan menampilkan daftar barang yang dimaksud.
4. Riwayat pembelian. Sistem akan memberikan tampilan tabel riwayat transaksi yang dilakukan oleh konsumen. Informasi yang ditampilkan pada tabel mencakup nama barang yang dibeli, jumlah barang yang dibeli, serta tanggal pembelian.
#### Supporting Domain
1. Tampilan profil pengguna. Sistem akan menampilkan profil pengguna sesuai dengan data yang didapatkan.
<br></br>

### Integrasi Sistem
Kedua sistem ini akan saling terintegrasi untuk memastikan stok item yang dijual pada NAOmart dapat terkelola dengan baik. Integrasi kedua sistem ini dilakukan dengan cara kedua sistem saling memanfaatkan core domain-nya satu sama lain menggunakan Applcation Programming Interface (API). Pada sistem ini, NAOmart Inventory Management akan memanfaatkan core domain dari NAOmart Store dengan cara menampilkan rekomendasi barang yang didapatkan dari API NAOmart Store. Rekomendasi barang ini dimanfaatkan oleh NAOmart Inventory Management untuk memprioritaskan proses restock untuk barang-barang yang laku. Selain itu, NAOmart Inventory Management juga serta mengambil data pendapatan toko yang dikalkulasikan berdasarkan data riwayat pembelian yang disimpan dalam sistem NAOmart Store. 
<br></br>
Sementara itu, NAOmart Store akan memanfaatkan core domain dari NAOmart Inventory Management dengan cara mengambil data item yang tersimpan di dalam NAOmart Inventory Management dan menampilkannya pada halaman toko menggunakan API NAOmart Inventory Management. Ketika konsumen membeli sebuah produk, maka NAOmart Store akan memanfaatkan API dari NAOmart Inventory Management untuk memperbarui jumlah stok. Selain itu, NAOmart Store juga akan menentukan item mana yang memiliki jumlah stok yang sedikit berdasarkan data yang diberikan NAOmart Inventory Management. Data tersebut akan ditampilkan dengan cap “clearance sale” yang mengisyaratkan bahwa barang tersebut akan segera habis.
<br></br>

## Cara Menjalankan Sistem
### Cara #1: Akses Website
Cara pertama dalam menjalankan sistem terintegrasi ini adalah dengan mengakses kedua website berikut
<br></br>
NAOmart Inventory Management
<br></br>
https://inventory-naomart.000webhostapp.com/ 
<br></br>
NAOmart Store
<br></br>
https://naomart.000webhostapp.com/ 
<br></br>
### Cara #2: Menjalankan Command
Sebelum menjalankan command, pastikan server Apache dan MySQL sudah dijalankan pada XAMPP
<br></br>
1. Import file SQL untuk masing-masing sistem pada server phpmyadmin
<br></br>
2. Buka terminal pada masing-masing sistem, dan jalankan command berikut
Pada NAOmart_Store
```
php spark serve
```
Pada NAOmart_Inventory
```
php spark serve --port 8081
```
<br></br>

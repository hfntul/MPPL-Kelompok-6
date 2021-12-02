---

![Screenshot (1118)](https://user-images.githubusercontent.com/48743817/144277629-0e8fd702-3126-475f-b28c-52c5c1d8394d.png)

---
---
## Kelompok 6
|No|Nama|Role|
|--|----|----|
|1|Raden Rafly Ramadhan Fadilah | Project Manager, Backend engineer|
|2|Nur Laely Mutmainnah|System Analyst, UI/UX|
|3|M Faishal Wicaksono R|Back-end engineer|
|4|Syukriyatul Hanifa|Front-end engineer|
|5|Firda Agustin Kartika|Front-end engineer|

---
---
## Deskripsi Sistem

Koridor merupakan aplikasi berbasis web sebagai wadah untuk organisasi mahasiswa untuk saling menginformasikan kegiatan yang sedang atau akan berlangsung. Sistem ini terdiri dari dua aktor yaitu admin dan pengunjung/user. Admin adalah perwakilan dari pengurus ormawa.

---
---
## Deskripsi Kebutuhan User 

| No | Pengguna     |                Task            |
| ---| ------------ | -------------------------------|
| 1  | Ormawa/Admin | Mengubah atau menghapus banner |
|    |              | Mengunggah proposal sponsor    |
|    |              | Menghapus proposal sponsor     |
| 2  | Pengguna Umum| Melihat banner                 |
|    |              | Melihat proposal sponsor       |
|    |              | Mengunduh proposal sponsor     |

---
---
## Kebutuhan Sistem

* Software yang digunakan untuk pengembangan
  
  Figma, Github, XAMPP, VS Code, Postman, Chrome, Trello, Diagrams.net
  
* Tech Stack yang digunakan untuk pengembangan
  
  Laravel, PHP, MySQL, Bootstrap
  
* Hardware yang digunakan untuk pengembangan

  * Processor : Intel(R) Core(TM) i7-8550U CPU @ 1.80GHz
  * Memory : 8,00 GB
  * VGA : Nvidia GTX 1050Ti GeForce

---
---
## Fitur yang dikembangkan
|No|Fitur|Fungsi/Kegunaan|
|--|-----|---------------|
|1|Login|Untuk admin, agar dapat mengunggah proposal sponsor serta mengupdate informasi di banner|
|2|Mengubah head banner|Untuk mengupdate informasi yang sedang berlangsung|
|3|Upload proposal sponsor|Untuk menyebarkan informasi mengenai proposal sponsor|
|4|Menampilkan proposal sponsor|Untuk memberitahu mahasiswa mengenai proposal sponsor|
|5|Menampilkan head banner|Untuk menampilkan informasi yang sedang berlangsung|

---

---
## Metodologi

Metode yang digunakan adalah metode Waterfall. Alasan kami memilih metode ini adalah karena lingkup proyek yang kecil, resiko proyek yang kecil, gambaran produk yang sudah cukup jelas, serta terbatasnya waktu yang diberikan. Metode ini memiliki 6 tahapan dalam pengembangannya. Setiap tahapannya harus diselesaikan sebelum ke tahap berikutnya. Enam tahapan tersebut adalah Requirements, Analysis, Desain, Coding, Testing, dan Operasi atau Impementasi. Namun pada perjalanannya, kami hanya dapat melakukan hingga pada tahap coding.

![Screenshot (1119)](https://user-images.githubusercontent.com/48743817/144280174-2e7ce7e2-3acd-4591-a910-5b603d447c2f.png)

---
---
## Use Case

![use fix](https://user-images.githubusercontent.com/48743817/144383841-8fff56be-87ba-4e10-849d-cb350686d6e4.png)

---
---
## Class Diagram

![Screenshot (1120)](https://user-images.githubusercontent.com/48743817/144280563-ff1022c7-d066-4685-b370-ccc964e6597e.png)

---
---
## Activity Diagram

![Screenshot (1121)](https://user-images.githubusercontent.com/48743817/144280466-508c6f49-7a3f-471c-a958-35855d0cb24b.png)
![Screenshot (1125)](https://user-images.githubusercontent.com/48743817/144280494-22dc2e9d-e8c9-4d92-8ce5-1604ff5a1b91.png)
![Screenshot (1122)](https://user-images.githubusercontent.com/48743817/144280516-dbf84463-92a2-4e36-8a36-e410af9ec5ac.png)

---
---
## Trello

![Screenshot (1133)](https://user-images.githubusercontent.com/48743817/144384099-6ae4a7da-d2c4-472b-86eb-542374c32f30.png)

---
---
## Hasil Implementasi Perangkat Lunak

### Landing Page
Halaman ini merupakan halaman depan ketika user mengetikkan alamar url http://koridor.herokuapp.com
![WhatsApp Image 2021-12-02 at 08 02 29](https://user-images.githubusercontent.com/60084468/144338994-99d5057c-1453-48d6-b6d2-492d207d215d.jpeg)

### Acara
Halaman ini adalah ketika pengguna ingin mengetahui acara dari ormawa tertentu
![image](https://user-images.githubusercontent.com/60084468/144387872-8da4ed61-78bb-4d25-b308-db6777fa330f.png)

Kemudian akan tampil daftar dari acara tiap ormawa yang dipilih sebelumnya
![image](https://user-images.githubusercontent.com/60084468/144388144-8a96be47-836a-485e-94e6-018835b25b92.png)

### Detail Acara
Halaman ini adalah ketika pengguna mengklik Read More pada page acara. Untuk melihat dokumen LPJ dan Proposal, akan diarahkan ke link tempat menyimpan LPJ dan Proposal.
![image](https://user-images.githubusercontent.com/60084468/144388516-9afdeef5-7a90-4991-a892-3cde60570280.png)


### Login
Halaman ini merupakan halaman ketika ingin login admin
![WhatsApp Image 2021-12-02 at 08 03 22](https://user-images.githubusercontent.com/60084468/144339035-54b28ffd-0241-40ff-945c-1bfc6921e575.jpeg)

### Beranda Admin
Halaman ini merupakan halaman ketika admin sudah login
![WhatsApp Image 2021-12-02 at 10 54 24](https://user-images.githubusercontent.com/60084468/144355857-5b64e8e3-935c-4c25-b9a2-349aca1548d1.jpeg)

### Daftar Acara
Halaman ini merupakan halaman ketika admin memasuki page acara
![WhatsApp Image 2021-12-02 at 15 53 10](https://user-images.githubusercontent.com/60084468/144389722-3bbdc27d-3c75-431c-bb3c-411d4765584f.jpeg)

Halaman ini adalah ketika admin mengklik tombol tambah acara dan ingin menambahkan acara
![image](https://user-images.githubusercontent.com/60084468/144384573-8b7bdfa4-f889-4681-86ec-189c9e23cd73.png)

### Edit Acara
Halaman ini merupakan halaman ketika admin sudah mengklik tombol aksi edit pada halaman acara. Klik tombol 'SIMPAN' untuk mengubah detail acara, jika batal untuk mengedit maka klik tombol 'BATAL'
![image](https://user-images.githubusercontent.com/60084468/144357221-02d97b54-b712-4f2c-9c5f-a7f1765f8de6.png)

### Delete Acara
Delete acara dapat dilakukan pada page 'Acara' dengan mengklik tombol aksi delete. Setelah proses delete berhasil, akan popup tanda bahwa data sudah berhasil dihapus.
![WhatsApp Image 2021-12-02 at 15 54 58](https://user-images.githubusercontent.com/60084468/144389721-0ebad3da-d2d2-49f7-a336-88c2378b0478.jpeg)

### Edit Banner
Edit banner dapat dilakukan pada page Banner dengan langsung menuliskan link yang ingin ditampilkan, kemudian klik 'SIMPAN' untuk mengubah link, jika batal mengubah link banner, maka klik tombol 'BATAL'
![WhatsApp Image 2021-12-02 at 15 52 45](https://user-images.githubusercontent.com/60084468/144389556-f12d59d4-4570-47f1-9db3-fa975da5fc9a.jpeg)

### About
Halaman ini untuk mengetahui detail informasi mengenai KORIDOR
![image](https://user-images.githubusercontent.com/60084468/144386048-4b08ecf9-407f-43d0-a8b4-e7a4c25aa4ea.png)


---




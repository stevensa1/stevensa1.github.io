# Portofolio
---
## Data Visualization using Python
Visualisasi pada data merek *smartband* yang sering digunakan dalam Bar Chart dan Pie Chart menggunakan Python

[![](https://img.shields.io/badge/Google_Colab-Run_on_Google_Colab-orange?logo=googlecolab&style=flat-square)](https://colab.research.google.com/drive/1tg87SZHDmgXRq0SZreiLZ3t13XWmBWBr?usp=sharing){:target="_blank" rel="noopener"}
---
## Use-Case of Data Science in Retail for Recommendation System
Ini adalah portofolio saya eheheh.
Changes.

---
# Tugas Data Analytics -- Zenius
---

## Topik 1 2 --- Use--Case Sistem Rekomendasi pada *Online Shop*
Sistem rekomendasi sangat diperlukan oleh pelaku aplikasi *online shop* untuk memberikan rekomendasi produk yang sesuai berdasarkan tingkah laku pengguna pada aplikasi. Hal ini dilakukan guna meningkatkan efisiensi waktu dalam pencarian produk dan meningkatkan konversi pencarian (impresi) hingga tahap transaksi.

Berikut adalah diagram untuk cara kerja sistem rekomendasi pada *online shop*.
![](./assets/img/usecase%20sistem%20rekomendasi.png)
<details>
<summary>1. Tahap Pengumpulan Data</summary>
Pada tahap pengumpulan data, sistem secara otomatis akan menyimpan data terkait pencarian pengguna yang kemudian data tersebut akan disimpan ke dalam database. Data tersebut kemudian dipecah lagi menjadi tiga indikator, yaitu kategori produk, range harga, dan lokasi toko geografis. Adapun maksud dari pengambilan indikator tersebut adalah untuk dapat memberikan rekomendasi yang sesuai berdasarkan pencarian sebelumnya dan kategori produk yang sesuai, sehingga akan mempermudah sistem dalam memberikan rekomendasi. Range harga diambil karena harga merupakan salah satu faktor untuk membuat keputusan pengguna dalam melakukan pembelian produk. Kemudian lokasi toko dari produk yang telah dicari sebelumnya juga dipertimbangkan untuk memberikan toko terdekat kepada pengguna supaya meminimalisir ongkos kirim, tentu saja ini juga menjadi faktor pengguna dalam membuat keputusan pembelian suatu produk, selain lebih murah juga cenderung datang lebih cepat karena lokasi yang dekat dengan pengguna.
</details>

<details>
<summary>2. Tahap Pemrosesan Data</summary>
Setelah data dikumpulkan, langkah selanjutnya adalah sistem melakukan pembersihan data untuk menghapus data outlier, melakukan standarisasi data, dan merger data untuk hasil yang berupa duplikat. Hal ini dilakukan supaya proses pembuatan model dapat memisahkan secara berbeda untuk tiap sampel yang diperoleh.
</details>

<details>
<summary>3. Pembuatan Model Rekomendasi</summary>
Setelah data sudah bersih dan siap untuk dianalisis, langkah selanjutnya adalah sistem membuat suatu model rekomendasi yang dapat digunakan untuk menghitung nilai rekomendasi yang sesuai untuk pengguna. Model ini selanjutnya akan diverifikasi oleh sistem dan dihitung kinerja model berdasarkan data test yang telah dilakukan sebelumnya (tersimpan pada database) untuk menghasilkan nilai kinerja metrik, seperti tingkat kepresisian dari model untuk produk yang telah direkomendasikan (apakah pengguna tertarik dan membeli / membuka produk yang direkomendasikan oleh sistem).
</details>

<details>
<summary>4. Penyajian Rekomendasi</summary>
Setelah model dibuat dan nilai rekomendasi diperoleh, tahap akhir adalah menampilkan hasil rekomendasi beberapa produk kepada pengguna berdasarkan faktor yang telah diinputkan oleh pengguna pada sistem pencarian. Data juga akan disimpan untuk melakukan evaluasi model rekomendasi. Jika model rekomendasi buruk, maka dapat dilakukan pembuatan model ulang berdasarkan faktor yang telah diperoleh sebelumnya.
</details>


[![](https://img.shields.io/badge/Adobe_PDF-Download-red?logo=adobeacrobatreader&style=flat-square)](./assignments/pdf/Topik%201%202%20-%20Steven%20Soewignjo.pdf){:target="_blank" rel="noopener"}

# Resources bahan
---
[Referensi Github Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet){:target="_blank" rel="noopener"}

[Referensi Tombol Shield](https://shields.io/#your-badge){:target="_blank" rel="noopener"}

[Referensi Logo Icon](https://simpleicons.org/){:target="_blank" rel="noopener"}

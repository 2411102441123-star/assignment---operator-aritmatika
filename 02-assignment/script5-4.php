html>
    <head>
      <title>Konversi jumlah detik ke satuan jam-menit-detik</title>
    </head>
    <body>
       <h1>Konversi jumlah detik ke satuan jam-menit-detik</h1>
       <?php
       /*
       Script ini merupakan kebalikan dari script5-3.php
       Script ini akan mengkonversi waktu yang diketahui dalam satuan detik
       ke dalam satuan jam-menit-detik.
       Diketahui waktu dalam detik adalah 15789 detik, akan dikonversi ke 
       bentuk X jam, Y menit dan Z detik
       */
       $totalDetik = 15789; // jumlah total detik mula-mula
       // mencari waktu dalam jam
       $sisa = $totalDetik % 3600;
       $dalamJam = ($totalDetik - $sisa) / 3600; // hasil jam
       // sisa dari perhitungan jam digunakan untuk menghitung menitnya
       $totalDetik = $sisa;
       $sisa = $totalDetik % 60;
       $dalamMenit = ($totalDetik - $sisa) / 60; // hasil menit
       // sisa dari perhitungan menit digunakan untuk menghitung detiknya
       $totalDetik = $sisa;
       $dalamDetik = ($totalDetik - 0) / 1; // hasil detik
       echo "<p>Hasil konversinya adalah : ".$dalamJam." jam : ".$dalamMenit." menit : ".$dalamDetik." detik.</p>";
       ?>
    </body>
</html>

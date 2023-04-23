<div class="boxchat">
  <?php
  // Koneksi ke database
  $koneksi = mysqli_connect("localhost", "root", "", "komentar");
  
  // Query untuk mendapatkan data komentar dari tabel
  $query = "SELECT * FROM tbl_komentar";
  $result = mysqli_query($koneksi, $query);
  
  // Jika data komentar tersedia, tampilkan dalam boxchat
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<div class="komentar">';
      echo '<h4>' . $row["nama"] . '</h4>';
      echo '<p>' . $row["komentar"] . '</p>';
      echo '</div>';
    }
  } else {
    echo '<p>Tidak ada komentar yang tersedia.</p>';
  }
  
  // Tutup koneksi ke database
  mysqli_close($koneksi);
  ?>
</div>
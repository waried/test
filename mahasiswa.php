<?php
  $koneksi = new mysqli("localhost","root","","contoh");
  ?>

<html>
  <head>
    <title>nyobian</title>
  </head>

  <body>
    <table>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
      </tr>
      <tr>
        <tbody>
          <?php $ambil = $koneksi->query("SELECT * FROM mahasiswa");?>
          <?php while($pecah =){?>
          <tr>
            <td>waried</td>
            <td>10108206</td>
            <td>asep</td>
            <td>10108207</td>
            <td>jumi</td>
            <td>10108209</td>
          </tr>
        </tbody>
      </tr>
    </table>
</html>

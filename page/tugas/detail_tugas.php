<?php include '../../db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SIMANTAP Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
  </style>
</head>
<body class="bg-[#F5F5F5]">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-[#0D2B53] text-white flex flex-col">
      <!-- Logo dan SIMANTAP -->
      <div class="flex items-center px-6 py-6 text-xl font-bold space-x-2">
        <img src="{{ asset('assets/titik_tiga_3.png') }}" alt="Logo" class="w-4 h-4" />
        <span>SIMANTAP</span>
      </div>

        <nav class="mt-2 px-4">
          <!-- Tombol Dashboard -->
          <div class="mb-4">
            <a href="#" class="flex items-center gap-2 rounded hover:bg-[#FF9B17] hover:text-white transition duration-500 text-white font-medium px-4 py-2 rounded-md w-full">
              <span class="material-icons text-black">menu_book</span>
              Dashboard
            </a>
          </div>

          <!-- Label Menu -->
          <h2 class="text-sm font-bold text-gray-300 mb-2 uppercase tracking-wide">Menu Untuk Admin</h2>

          <!-- Daftar Menu -->
          <ul id="sidebarMenu" class="space-y-2 text-sm">
            <li><a href="tugas/detail_tugas.php" class="menu-item block w-full hover:bg-[#FF9B17] hover:text-white transition duration-500 rounded px-4 py-2">Detail Tugas</a></li>
            <li><a href="#" class="menu-item block w-full hover:bg-[#FF9B17] hover:text-white transition duration-500 rounded px-4 py-2">Laporan Harian</a></li>
            <li><a href="#" class="menu-item block w-full hover:bg-[#FF9B17] hover:text-white transition duration-500 rounded px-4 py-2">Permohonan Tenggat</a></li>
            <li><a href="#" class="menu-item block w-full hover:bg-[#FF9B17] hover:text-white transition duration-500 rounded px-4 py-2">Kinerja Pegawai</a></li>
            <li><a href="#" class="menu-item block w-full hover:bg-[#FF9B17] hover:text-white transition duration-500 rounded px-4 py-2">Kelola Pengguna</a></li>
          </ul>

        <script>
          const menuItems = document.querySelectorAll('.menu-item');

          menuItems.forEach(item => {
            item.addEventListener('click', function () {
              // Hapus kelas aktif dari semua
              menuItems.forEach(i => i.classList.remove('bg-orange-400', 'text-white'));
              
              // Tambahkan ke yang diklik
              this.classList.add('bg-orange-400', 'text-white');
            });
          });
        </script>

        </nav>

    </aside>
 <main class="flex-1 bg-gray-100 p-6 overflow-auto">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full">
      <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold text-gray-800">Detail Tugas</h1>
        <a href="add_tugas.php" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Tambah Tugas</a>
      </div>

      <table class="w-full table-auto border-collapse">
        <thead>
          <tr class="bg-gray-200 text-gray-700">
            <th class="px-4 py-2 border">No</th>
            <th class="px-4 py-2 border">Judul</th>
            <th class="px-4 py-2 border">Deskripsi</th>
            <th class="px-4 py-2 border">Status</th>
            <th class="px-4 py-2 border">Aksi</th>
          </tr>
        </thead>

      <tbody>
       <?php
        // Ambil data
        $query = mysqli_query($conn, "SELECT * FROM task");
        $no = 1;
        while ($data = mysqli_fetch_assoc($query)) {
        ?>
          <tr class="text-gray-700 text-sm text-center">
            <td class="border px-4 py-2"><?= $no++; ?></td>
            <td class="border px-4 py-2"><?= $data['judul']; ?></td>
            <td class="border px-4 py-2"><?= $data['deskripsi']; ?></td>
            <td class="border px-4 py-2"><?= $data['status']; ?></td>
            <td class="border px-4 py-2">
              <a href="edittugas.php?id=<?= $data['id']; ?>" class="text-blue-600 hover:underline">Edit</a> | 
              <a href="?hapus=<?= $data['id']; ?>" onclick="return confirm('Yakin ingin hapus?')" class="text-red-600 hover:underline">Hapus</a>
            </td>
          </tr>
        <?php
        } // <--- ini penting, penutup while
        ?>
                </tbody>
              </table>
            </div>
          </body>
        </html>

        <?php
        // Logika hapus, ini harus DI LUAR HTML/table
        if (isset($_GET['hapus'])) {
          $id = $_GET['hapus'];
          mysqli_query($koneksi, "DELETE FROM task WHERE id=$id");
          echo "<script>window.location='detail_tugas.php';</script>";
        }
      ?>

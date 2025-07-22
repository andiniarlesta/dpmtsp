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

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Header -->
      <div class="flex justify-between items-center bg-gray-200 py-3 px-6 rounded-md">
        <div class="flex items-center space-x-2">
          <span class="material-icons text-black">menu_book</span>
          <h1 class="text-xl font-semibold">Dashboard - Admin</h1>
        </div>
        <div class="flex items-center">
          <span class="mr-2 font-medium">Users</span>
          <img src="assets/lala/png" alt="User" class="w-8 h-8 rounded-full object-cover"/>
        </div>
      </div>

      <!-- Kartu Status -->
      <div class="grid grid-cols-4 gap-4 mt-6">
        <div class="bg-blue-600 text-white p-4 rounded shadow">
          <p class="text-sm">Total Tugas</p>
          <p class="text-2xl font-bold">123</p>
        </div>
        <div class="bg-green-600 text-white p-4 rounded shadow">
          <p class="text-sm">Tugas Selesai</p>
          <p class="text-2xl font-bold">99</p>
        </div>
        <div class="bg-yellow-500 text-white p-4 rounded shadow">
          <p class="text-sm">Tugas Berlangsung</p>
          <p class="text-2xl font-bold">123</p>
        </div>
        <div class="bg-red-600 text-white p-4 rounded shadow">
          <p class="text-sm">Tugas Terlambat</p>
          <p class="text-2xl font-bold">0</p>
        </div>
      </div>
    </main>
  </div>

</body>
</html>

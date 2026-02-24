<?php include 'view/includes/header.php';
?>

<h1 class="text-2xl mb-4">Tambah Data Mahasiswa</h1>
<form action="index.php?action=store" method="post">

<div class="mb-4">
    <label for="id" class="block text-gray-700">ID</label>
    <input type="text" name="id" id="id" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="nama" class="block text-gray-700">Nama</label>
    <input type="text" name="nama" id="nama" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="nim" class="block text-gray-700">NIM</label>
    <input type="text" name="nim" id="nim" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="kelas" class="block text-gray-700">Kelas</label>
    <input type="text" name="kelas" id="kelas" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="prodi" class="block text-gray-700">Prodi</label>
    <input type="text" name="prodi" id="prodi" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="fakultas" class="block text-gray-700">Fakultas</label>
    <input type="text" name="fakultas" id="fakultas" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" name="simpan">Simpan</button>
</form>
<?php
include 'view/includes/footer.php';
?>
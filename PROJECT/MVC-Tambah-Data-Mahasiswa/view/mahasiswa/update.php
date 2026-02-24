<?php include 'view/includes/header.php';
?>

<h1 class="text-2xl mb-4">Edit Data Mahasiswa</h1>
<form action="index.php?action=update" method="post">

<div class="mb-4">
    <label for="id" class="block text-gray-700">ID</label>
    <input value="<?= $employee['id']; ?>" type="text"  name="id" id="id" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="nama" class="block text-gray-700">Nama</label>
    <input value="<?= $employee['nama']; ?>" type="text" name="nama" id="nama" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="nim" class="block text-gray-700">NIM</label>
    <input value="<?= $employee['nim']; ?>" type="text" name="nim" id="nim" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="kelas" class="block text-gray-700">Kelas</label>
    <input value="<?= $employee['kelas']; ?>" type="text" name="kelas" id="kelas" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="prodi" class="block text-gray-700">Prodi</label>
    <input value="<?= $employee['prodi']; ?>" type="text" name="prodi" id="prodi" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<div class="mb-4">
    <label for="fakultas" class="block text-gray-700">Fakultas</label>
    <input value="<?= $employee['fakultas']; ?>" type="text" name="fakultas" id="fakultas" class="border rounded w-full py-2 px-3 text-gray-700">
</div>
<button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" name="update">Update</button>
</form>
<?php
include 'view/includes/footer.php';
?>
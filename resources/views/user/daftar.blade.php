<h2>Form Pendaftaran Member</h2>

<form method="post" action="{{ route('user/store') }}">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" >
    <br> <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br> <br>
    <label for="kategori">Kategori User</label>
    <select name="kategori" id="">
        <?php  foreach($kategori as $k) {  ?>
            <option value="<?= $k; ?>">  <?=  $k ?>  </option>
        <?php }?>
    </select>
    <br> <br>
    <label for="alamat">Alamat</label>
    <textarea name="alamat" id="alamat" cols="30" rows="3"></textarea>
    <br> <br>
    <input type="submit" name="" id="" value="Daftar">
</form>


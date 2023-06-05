<h2>Form HTML pada PHP</h2>

<form method="post" action="{{ route('input/hasil') }}">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" id="nama" >
    <br> <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br> <br>
    <label for="lokasi">Lokasi</label>
    <select name="lokasi" id="">
        <?php  foreach($lokasi as $l) {  ?>
            <option value="<?= $l; ?>">  <?=  $l ?>  </option>
        <?php }?>
    </select>
    <br> <br>
    <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin :</label>
    <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
    <input type="radio" name="Jenis_kelamin" value="Perempuan">Perempuan
    </div>
    <br>
    <div class="form-group">
    <label for="skill">skill :</label> <br>
    <input type="radio" name="skill" value="PHP">PHP <br>
    <input type="radio" name="skill" value="MYSQL">MYSQL <br>
    <input type="radio" name="skill" value="Javascript">Javascript <br>
    <input type="radio" name="skill" value="HTML">HTML <br>
    <input type="radio" name="skill" value="CSS">CSS <br>
    </div>
    <br> <br>
    <input type="submit" name="" id="" value="Daftar">
</form>
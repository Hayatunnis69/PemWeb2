<?php 
    $proses = $_POST['proses'];
    $nama_siswa = $POST['nama'];
    $mata_kuliah = $POST['matkul'];
    $nilai_uts = $POST['uts'];
    $nilai_uas = $POST['uas'];
    $nilai_tugas = $POST['tugas'];


    if(!empty($proses)) {
        echo 'Proses : ' . $proses;
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
    }
?>
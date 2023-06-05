@php 
$nama1 = "Bambang";
$nilai1 = 60;

if($nilai1 >= 60) {
    $ket = "Lulus";
}else {
    $ket = "Gagal";
}
@endphp

Siswa {{ $nama1 }} dengan nilai {{ $nilai1 }} dinyatakan {{ $ket}}

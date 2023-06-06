@extends('template/admin/index')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Customer</th>
        <th scope="col">Alamat</th>
        <th scope="col">No. Telepon</th>
      </tr>
    </thead>
    <tbody>

        @php $number = 1;  @endphp
        @foreach($customers as $cus)
        <tr>
            <td>{{ $number }}</td>
            <td>{{ $cus->name }}</td>
            <td>{{ $cus->addres }}</td>
            <td>{{ $cus->nomor_telepon }}</td>
        </tr>
        @php  $number++ @endphp
        @endforeach
        
    </tbody>
  </table>
@endsection
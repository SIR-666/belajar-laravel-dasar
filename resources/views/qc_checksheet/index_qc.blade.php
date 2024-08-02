@extends('layout.template')
<!-- START DATA -->
@section('konten')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
        <form class="d-flex" action="{{url('mp')}}" method="get">
            <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
            <button class="btn btn-secondary" type="submit">Cari</button>
        </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
        <a href='' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No Ladle</th>
                <th class="col-md-2">Nama Product</th>
                <th class="col-md-1">Tipe Material</th>
                <th class="col-md-1">Temp. Tapping</th>
                <th class="col-md-2">Start Tapping</th>
                <th class="col-md-2">Start Pouring</th>
                <th class="col-md-1">Operator</th>
                <th class="col-md-1">Status</th>
                <th class="col-md-2">Act</th>
            </tr>
        </thead>
        <tbody>
            {{-- <?php $i=$data->firstItem();?> --}}
            @foreach($data as $item)         
            <tr>
                <td>{{$item->no_ladle}}</td>
                <td>{{$item->product_name}}</td>
                <td>{{$item->material}}</td>
                <td>{{$item->temp_taping}}</td>
                <td>{{$item->start_time_tapping}}</td>
                <td>{{$item->time_start_pouring}}</td>
                <td>{{$item->op_pouring}}</td>
                <td>{{$item->remark}}</td>
                <td>
                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Ensure Deleted Data?')" class="d-inline" action="" method="post">
                         @csrf
                         @method('DELETE')
                    <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                    </form>
                </td>
            </tr>
            {{-- <?php $i++;?> --}}
            @endforeach
        </tbody>
    </table>
    {{$data->links()}}
    
</div>
<!-- AKHIR DATA -->   
@endsection


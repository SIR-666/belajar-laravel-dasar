@extends('layout.index')
<!-- START FORM -->
@section('content')

<style>
    .btn-custom-red {
      background-color: #ff0000; /* Merah */
      border-color: #ff0000;
    }
  </style>
<form action='{{url('cs')}}' method='post'>
{{-- <form  method='post'> --}}
@csrf    
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="product_name" class="col-sm-2 col-form-label text-end">Nama Product</label>
            {{-- <div class="col-sm-10"> --}}
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                {{-- <input type="combobox" class="form-control" name='product_name' value="{{Session::get('product_name')}}" id="product_name"> --}}
            {{-- </div> --}}
            {{-- <label for="combobox">Select an option:</label> --}}
            <div class="col-sm-10">
                <select class="form-control" name="product_name" id="product_name" value="{{Session::get('product_name')}}">
                @foreach ($options as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="no_ladle" class="col-sm-2 col-form-label text-end">No Ladle</label>
            <div class="col-sm-1">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" class="form-control" name='no_ladle' value="{{Session::get('no_ladle')}}" id="no_ladle">
            </div>
            <label for="material" class="col-sm-1 col-form-label text-end">Material</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
            <input type="text" class="form-control" name='material' value="{{Session::get('material')}}" id="material">
            </div>
            <label for="charging" class="col-sm-1 col-form-label text-end">Charging</label>
            <div class="col-sm-1">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
            <input type="number" class="form-control" name='charging' value="{{Session::get('charging')}}" id="charging">
            </div>
            
        </div>x
        <div class="mb-3 row">
        </div>

        <div class="mb-3 row">
            <label for="temp_tapping" class="col-sm-2 col-form-label text-end">Temp. Tapping</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" type="any" class="form-control" name='temp_tapping' value="{{Session::get('temp_tapping')}}" id="temp_tapping">
            </div>
            <label for="start_tapping" class="col-sm-2 col-form-label text-end">Start Tapping</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="time" class="form-control" name='start_tapping' value="{{Session::get('start_tapping')}}" id="start_tapping">
            </div>
            <label for="reaction_time" class="col-sm-2 col-form-label text-end">Reactime Time</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" step="any" class="form-control" name='reaction_time' value="{{Session::get('reaction_time')}}" id="reaction_time">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="start_pouring" class="col-sm-2 col-form-label text-end">Start Pouring</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="time" class="form-control" name='start_pouring' value="{{Session::get('start_pouring')}}" id="start_pouring">
            </div>
            <label for="temp_start_pouring" class="col-sm-2 col-form-label text-end">Temp Start Pouring</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" class="form-control" name='temp_start_pouring' value="{{Session::get('temp_start_pouring')}}" id="temp_start_pouring">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="time_pouring_n1" class="col-sm-2 col-form-label text-end">Time Pouring N1</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="time" class="form-control" name='time_pouring_n1' value="{{Session::get('time_pouring_n1')}}" id="time_pouring_n1">
            </div>
            <label for="time_pouring_n2" class="col-sm-2 col-form-label text-end">Time Pouring N2</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="time" class="form-control" name='time_pouring_n2' value="{{Session::get('time_pouring_n2')}}" id="time_pouring_n2">
            </div>
            <label for="time_pouring_n3" class="col-sm-2 col-form-label text-end">Time Pouring N3</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="time" class="form-control" name='time_pouring_n3' value="{{Session::get('time_pouring_n3')}}" id="time_pouring_n3">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="finish_pouring" class="col-sm-2 col-form-label text-end">Time Finish Pouring</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="time" class="form-control" name='finish_pouring' value="{{Session::get('finish_pouring')}}" id="finish_pouring">
            </div>
            <label for="temp_finish_pouring" class="col-sm-2 col-form-label text-end">Temp. Finish Pouring</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" type="any" class="form-control" name='temp_finish_pouring' value="{{Session::get('temp_finish_pouring')}}" id="temp_finish_pouring">
            </div>
            <label for="qty_mould" class="col-sm-2 col-form-label text-end">Qty Mould</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" class="form-control" name='qty_mould' value="{{Session::get('qty_mould')}}" id="qty_mould">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="fading_time" class="col-sm-2 col-form-label text-end">Fading Time</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" class="form-control" name='fading_time' value="{{Session::get('fading_time')}}" id="fading_time">
            </div>
            <label for="defect_short" class="col-sm-2 col-form-label text-end">Defect Short Pouring</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" class="form-control" name='defect_short' value="{{Session::get('defect_short')}}" id="defect_short">
            </div>
            <label for="mold_bocor" class="col-sm-2 col-form-label text-end">Defect Mold Bocor</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="number" class="form-control" name='mold_bocor' value="{{Session::get('mold_bocor')}}" id="mold_bocor">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="marubo" class="col-sm-2 col-form-label text-end">Marubo Type</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="text" class="form-control" name='marubo' value="{{Session::get('marubo')}}" id="marubo">
            </div>
            <label for="frm" class="col-sm-2 col-form-label text-end">FRM/LDR Check</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="text" type="any" class="form-control" name='frm' value="{{Session::get('frm')}}" id="frm">
            </div>
            <label for="remark" class="col-sm-2 col-form-label text-end">Remark</label>
            <div class="col-sm-2">
                {{-- <input type="number" class="form-control" name='noreg' id="noreg"> --}}
                <input type="text" class="form-control" name='remark' value="{{Session::get('remark')}}" id="remark">
            </div>
        </div>

        
        <div class="mb-3 row">
            <label for="jabatan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10 text-end">
                
                <a href='{{url('cs')}}' class="btn btn-primary btn-custom-red" name="back"><i class="fa fa-backward" aria-hidden="true"></i> BACK</a>
                <button type="submit" class="btn btn-success " name="submit">SIMPAN <i class="fa fa-bookmark" aria-hidden="true"> </i></button>
                
            </div>
            
        </div>
        
    </div>
</form>

<!-- AKHIR FORM -->
       
@endsection

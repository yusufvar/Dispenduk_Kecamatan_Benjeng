@extends('template.admin')

@section('content')
    <div class="flex justify-between">
        <div class=" font-bold text-2xl py-5">Tanggal Merah</div>
        {{-- <button class="">Add jobs</button> --}}
    </div>


    <div class=" bg-white border rounded-lg ">
        {{-- <div class="p-5 font-semibold border-b">Data Pegawai :</div> --}}
        <form class="" method="POST">
            @csrf
            <div class="p-5 flex flex-col space-y-5">
                <div class="flex flex-col space-y-3">
                    <span class="font-semibold">Nama Tanggal</span>
                    <input type="text" name="nama_tanggal" class="p-3 border rounded" value="{{ $tgl_merah->nama_tanggal ?? '' }}">
                </div>
                <div class="flex flex-col space-y-3">
                    <span class="font-semibold">Tanggal</span>
                    <input type="date" name="tanggal" class="p-3 border rounded" value="{{ $tgl_merah->tanggal ?? '' }}">
                </div>

            </div>
            <div class="p-5 border-t flex justify-end space-x-3">
                <a href="{{route('tanggal_merah')}}" class="p-3 rounded  text-red-500 ">Back</a>
                <button class="p-3 rounded font-semibold text-white bg-blue-600">Save</button>
            </div>
        </form>

    </div>
@endsection

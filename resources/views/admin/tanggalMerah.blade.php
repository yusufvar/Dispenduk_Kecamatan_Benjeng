@extends('template.admin')

@section('content')
<div class="flex justify-between items-center">
    <div class=" font-bold text-2xl py-5">Tanggal Merah</div>

    <a href="{{route('tanggal_merah.add')}}" class="bg-blue-500 p-3 rounded-lg inline font-semibold text-white">Add Tanggal</a>

</div>


    <div class=" bg-white border rounded-lg p-5">
        {{-- <div class="p-5 font-semibold border-b">Data Pegawai :</div> --}}

        <table class="w-full">
            <thead>
                <tr>
                    <th class=" text-left p-3">Nomer</th>
                    <th class=" text-left p-3">Nama</th>
                    <th class=" text-left p-3">Tanggal</th>
                    <th class=" text-left p-3">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($tgl_merah as $i=>$tgl)
                    <tr>
                        <td class="p-3 font-semibold">{{$i+1}}</td>
                        <td class="p-3 font-semibold">{{$tgl->nama_tanggal}}</td>
                        <td class="p-3" >{{$tgl->tanggal}}</td>
                        <td class="p-3" >
                            <a href="{{route('tanggal_merah.edit',['id'=>$tgl->id])}}"  class="font-semibold bg-green-500 p-3 rounded text-white">Edit</a>
                            <a href="{{route('tanggal_merah.delete',['id'=>$tgl->id])}}" class="font-semibold bg-red-500 p-3 rounded text-white">Delete</a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>

    </div>
@endsection

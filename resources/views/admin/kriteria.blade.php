@extends('template.admin')

@section('content')
@php
    $totalbobot = 0;
@endphp
    <div class="flex justify-between items-center">
        <div class=" font-bold text-2xl py-5">Kriteria</div>

        <a href="{{route('kriteria.add')}}" class="bg-blue-500 p-3 rounded-lg inline font-semibold text-white">Add Kriteria</a>

    </div>


    <div class=" bg-white border rounded-lg p-5">
        {{-- <div class="p-5 font-semibold border-b">Data Pegawai :</div> --}}

        <table class="w-full">
            <thead>
                <tr>
                    <th class=" text-left p-3">No</th>
                    <th class=" text-left p-3">Nama</th>
                    <th class=" text-left p-3">Simbol</th>
                    <th class=" text-left p-3">Benefit/Cost</th>
                    <th class=" text-left p-3">Bobot</th>
                    <th class=" text-left p-3">...</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($kriteria as $i => $kr)
                @php
                    $totalbobot+=$kr->bobot;
                @endphp
                    <tr>
                        <td class="p-3 font-semibold">{{ $i + 1 }}</td>
                        <td class="p-3">{{ $kr->nama }}</td>
                        <td class="p-3">
                            {{ $kr->simbol }}
                        </td>
                        <td class="p-3">{{ $kr->maxmin=='max'?'Benefit':'Cost' }}</td>
                        <td class="p-3">{{ $kr->bobot }}</td>
                        <td class="p-3 flex space-x-3">
                            <a href="{{route('kriteria.edit',['id'=>$kr->id])}}" class="font-semibold bg-green-500 p-3 rounded text-white">Edit</a>
                            <a href="{{route('kriteria.delete',['id'=>$kr->id])}}" class="font-semibold bg-red-500 p-3 rounded text-white">Delete</a>
                                {{-- <a href="{{route('kriteria.delete',['pegawaiid'=>$pegawai->id])}}" class="font-semibold bg-red-300 p-3 rounded text-red-900">Delet</a> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="p-3">
            <span class="font-semibold"> Total bobot : </span> {{$totalbobot}}
        </div>
    </div>
@endsection

@extends('template.admin')

@section('content')
    @php
    $totalbobot = 0;
    @endphp
    <div class="flex justify-between items-center">
        <div class=" font-bold text-2xl py-5">Kriteria</div>

        <a href="{{ route('guru.add') }}" class="bg-blue-500 p-3 rounded-lg inline font-semibold text-white">Add Guru</a>

    </div>


    <div class=" bg-white border rounded-lg p-5">
        <form method="POST">
            @csrf
            <table class="w-full">
                <thead>
                    <tr>
                        <th class=" text-left p-3 text-sm">No</th>
                        <th class=" text-left p-3 text-sm">Nama</th>
                        @foreach ($kriteria as $i => $kr)
                            <th class=" text-left p-3 text-sm w-20">{{ $kr->nama }}</th>
                        @endforeach
                        <th class=" text-left p-3 text-sm">...</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($guru as $i => $gr)
                        <tr>
                            <td class=" font-semibold text-sm">{{ $i + 1 }}</td>
                            <td class=" text-sm">
                                <input value="{{ $gr->name }}"
                                    name={{"name[$gr->id]"}} type="text"
                                    class="border p-1  rounded">


                            </td>

                            @foreach ($kriteria as $krr)
                                <td class="p-2">
                                    <input value="{{ $nilai[$gr->id . ':' . $krr->id] ?? '' }}"
                                        name={{ 'data[' . $gr->id . ':' . $krr->id . ']' }} type="number"
                                        class="border p-1  rounded w-20">
                                </td>
                            @endforeach

                            <td class="p-3 font-semibold text-sm">
                                <div class="flex space-x-3">
                                    {{-- <a class="bg-green-600 text-white p-3 font-semibold rounded"
                                        href="{{ route('guru.edit', ['id' => $gr->id]) }}">Edit</a> --}}
                                    <a class="bg-red-600 text-white p-3 font-semibold rounded"
                                        href="{{ route('guru.delete', ['id' => $gr->id]) }}">Delete</a>
                                </div>
                            </td>


                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="p-3 flex ">
                <button class="p-3 bg-blue-600 rounde font-semibold text-white rounded">Save</button>
                {{-- <span class="font-semibold"> Total bobot : </span> {{ $totalbobot }} --}}
            </div>
        </form>
    </div>
@endsection

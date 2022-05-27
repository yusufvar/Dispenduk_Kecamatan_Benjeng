@extends('template.admin')

@section('content')
    <div class="flex justify-between">
        <div class=" font-bold text-2xl py-5">Kriteria</div>
        {{-- <button class="">Add jobs</button> --}}
    </div>


    <div class=" bg-white border rounded-lg ">
        {{-- <div class="p-5 font-semibold border-b">Data Pegawai :</div> --}}
        <form class="" method="POST">
            @csrf
            <div class="p-5 flex flex-col space-y-5">
                <div class="flex flex-col space-y-3">
                    <span class="font-semibold">Nama :</span>
                    <input type="text" name="nama" class="p-3 border rounded" value="{{ $kriteria->nama ?? '' }}">
                </div>
                <div class="flex flex-col space-y-3">
                    <span class="font-semibold">Simbol :</span>
                    <input type="text" name="simbol" class="p-3 border rounded" value="{{ $kriteria->simbol ?? '' }}">
                </div>
                <div class="flex flex-col space-y-3">
                    <span class="font-semibold">Benefit / Cost :</span>
                    <select class="p-3 border rounded" name='maxmin'>
                        <option value="max" {{ isset($kriteria) ? ($kriteria->maxmin == 'max' ? 'selected' : '') : '' }}>Benefit
                        </option>
                        <option value="min" {{ isset($kriteria) ? ($kriteria->maxmin == 'min' ? 'selected' : '') : '' }}>Cost
                        </option>
                    </select>
                </div>
                <div class="flex flex-col space-y-3">
                    <span class="font-semibold">Bobot :</span>
                    <input type="number" name="bobot" class="p-3 border rounded" value="{{ $kriteria->bobot ?? '' }}">
                </div>
            </div>
            <div class="p-5 border-t flex justify-end space-x-3">
                <a href="{{ route('kriteria') }}" class="p-3 rounded  text-red-500 ">Back</a>
                <button class="p-3 rounded font-semibold text-white bg-blue-600">Save</button>
            </div>
        </form>

    </div>
@endsection

@extends('template.admin')

@section('content')
    <div class="flex justify-between">
        <div class=" font-bold text-2xl py-5">Dashboard</div>
        {{-- <button class="">Add jobs</button> --}}

    </div>


    <div class=" bg-white border rounded-lg p-5">
        {{-- <div class="p-5 font-semibold border-b">Data Pegawai :</div> --}}

        <div class="w-full flex  justify-center">
            <div>
                @if (isset($antrian))
                    <div class="p-3">
                        <div class="font-bold">Nomer Antri : {{ $antrian->nomor_antri ?? 'ucok' }}</div>
                        <div>Nama: {{ $antrian->nama ?? 'ucok' }}</div>
                    </div>
                    <div class="flex space-x-3">
                        <a href="{{ route('status', ['id' => $antrian->id, 'status' => 'tidak datang']) }}"
                            class="p-3 rounded font-semibold text-white bg-red-600">Tidak Datang</a>
                        <a href="{{ route('status', ['id' => $antrian->id, 'status' => 'datang']) }}"
                            class="p-3 rounded font-semibold text-white bg-blue-600">Datang</a>

                    </div>
                @else
                    tidak ada antrian
                @endif

            </div>
        </div>

    </div>
@endsection

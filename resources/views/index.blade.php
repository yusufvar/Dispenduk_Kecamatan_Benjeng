@extends('template.default')
@section('content')
    <div class="flex flex-1 justify-center items-center py-20 bg-gray-100">
        <div class=" bg-white py-20 px-10 w-full  sm:w-4/12 flex flex-col space-y-10">
            <div class="">
                <span class="text-2xl font-semibold">Pendaftaran Antrian Online</span>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="flex flex-col pb-5 space-y-3">
                    <span class="font-semibold text-gray-500">NIK</span>
                    <input name="nik" type="text" class="p-3 border rounded-md" required>
                </div>
                <div class="flex flex-col pb-5 space-y-3 text-gray-500">
                    <span class="font-semibold">Nama</span>
                    <input name="nama" type="text" class="p-3 border rounded-md" required>
                </div>
                <div class="flex flex-col pb-5 space-y-3 text-gray-500">
                    <span class="font-semibold">No Hp</span>
                    <input name="no_hp" type="text" class="p-3 border rounded-md" required>
                </div>
                <div class="flex flex-col pb-5 space-y-3 text-gray-500">
                    <span class="font-semibold">Desa</span>
                    <input name="desa" type="text" class="p-3 border rounded-md" required>
                </div>
                
                <div class="flex flex-col pb-5 space-y-3 text-gray-500">
                    <span class="font-semibold">Keperluan</span>
                    <select name="keperluan" id="" class="p-3 border rounded-md" required>
                        @foreach ($keperluan as $i)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach

                    </select>
                    {{-- <input name="desa" type="text" class="p-3 border rounded-md"> --}}
                </div>

                <div class="flex flex-col pb-5 space-y-3 text-gray-500">
                    <span class="font-semibold">Tanggal Datang</span>
                    <select name="tgl_datang" id="" class="p-3 border rounded-md" required>
                        @foreach ($tanggal_datang as $i)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endforeach

                    </select>
                    {{-- <input name="desa" type="text" class="p-3 border rounded-md"> --}}
                </div>
                {{-- <input name="desa" type="text" class="p-3 border rounded-md"> --}}
                <button
                    class=" flex justify-center bg-blue-500 w-full p-3 rounded-md text-white font-semibold">Kirim</button>

            </form>
        </div>
    </div>
@endsection

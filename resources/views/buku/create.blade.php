<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Buku') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-gray-50 py-8">
        <div class="max-w-6xl w-full p-8 bg-white rounded-lg shadow-md border-2 border-black">
            <nav class="text-sm text-gray-500 mb-4">
                <a href="{{ route('buku.index') }}" class="text-black-500 hover:underline">Kelola  Buku</a> >
                <a href="#" class="text-black-500 hover:underline"><b>Tambah Buku</b></a>
            </nav>

            <h2 class="text-lg font-semibold text-gray-800">Tambah Buku</h2>
            <p class="text-sm text-gray-600 mb-6">Ini adalah halaman untuk menambah Buku</p>

            <form action="{{ route('buku.store') }}" method="POST" >
                @csrf

                <!-- jenis-buku -->
                <div class="mb-4">
                    <label for="nama_buku" class="block text-sm font-medium text-gray-700 mb-1">Nama Buku:</label>
                    <input type="text" id="nama_buku" name="nama_buku" value="{{ old('nama_buku') }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500">
                    @error('nama_buku')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <label for="stok" class="block text-sm font-medium text-gray-700 mb-1">Stok:</label>
                    <input type="text" id="stok" name="stok" value="{{ old('stok') }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500  " maxlength="3">
                    @error('stok')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    <label for="jenis_buku" class="block text-sm font-medium text-gray-700 mb-1">jenis buku :</label>
                    <select id="jenis_buku_id" name="jenis_buku_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" disabled selected>Pilih Jenis Buku</option>
                        @foreach($jenisbuku as $j)
                        <option value="{{ $j->id }}" {{ old('jenis_buku_id') == $j->id ? 'selected' : '' }}>
                            {{ $j->nama_jenis_buku }}
                        </option>
                    @endforeach
                    </select>
                    @error('jenis_buku_id')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full mt-4">
                        Tambahkan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

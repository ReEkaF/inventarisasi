<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Jenis Buku') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-gray-50 py-8">
        <div class="max-w-6xl w-full p-8 bg-white rounded-lg shadow-md border-2 border-black">
            <nav class="text-sm text-gray-500 mb-4">
                <a href="{{ route('jenis_buku.index') }}" class="text-black-500 hover:underline">Kelola Jenis Buku</a> >
                <a href="#" class="text-black-500 hover:underline"><b>Edit Jenis Buku</b></a>
            </nav>

            <h2 class="text-lg font-semibold text-gray-800">Edit Jenis Buku</h2>
            <p class="text-sm text-gray-600 mb-6">Ini adalah halaman untuk menambah Editb Jenis Buku</p>

            <form action="{{ route('jenis_buku.update',$jenis_buku->id) }}" method="POST">
                @csrf
                @method('PUT')


                <!-- jenis-buku -->
                <div class="mb-4">
                    <label for="nama_jenis_buku" class="block text-sm font-medium text-gray-700 mb-1">jenis buku :</label>
                    <input type="text" id="nama_jenis_buku" name="nama_jenis_buku" value="{{ old('nama_jenis_buku', $jenis_buku->nama_jenis_buku) }}"  class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500">
                    @error('nama_jenis_buku')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full mt-4">
                        Edit Buku Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

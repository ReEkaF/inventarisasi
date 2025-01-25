<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Transaksi Peminjaman') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-gray-50 py-8">
        <div class="max-w-6xl w-full p-8 bg-white rounded-lg shadow-md border-2 border-black">
            <nav class="text-sm text-gray-500 mb-4">
                <a href="{{ route('transaksi_peminjaman.index') }}" class="text-black-500 hover:underline">Kelola Transaksi Peminjaman</a> >
                <a href="#" class="text-black-500 hover:underline"><b>Transaksi Peminjaman</b></a>
            </nav>

            <h2 class="text-lg font-semibold text-gray-800">Tambah Transaksi Peminjaman</h2>
            <p class="text-sm text-gray-600 mb-6">Ini adalah halaman untuk menambah Transaksi Peminjaman</p>

            <form action="{{ route('transaksi_peminjaman.store') }}" method="POST" >
                @csrf
                <!-- Peminjam -->
                <label for="peminjam" class="block text-sm font-medium text-gray-700 mb-1">Peminjam :</label>
                <select id="peminjam_id" name="peminjam_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" disabled selected>Pilih Peminjam</option>
                    @foreach($peminjam as $j)
                    <option value="{{ $j->id }}" {{ old('peminjam_id') == $j->id ? 'selected' : '' }}>
                        {{ $j->nama }}
                    </option>
                @endforeach
                </select>
                <!-- Buku -->
                <label for="buku" class="block text-sm font-medium text-gray-700 mb-1"> buku :</label>
                <select id="buku_id" name="buku_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" disabled selected>Pilih Buku</option>
                    @foreach($buku as $j)
                    <option value="{{ $j->id }}" {{ old('buku_id') == $j->id ? 'selected' : '' }}>
                        {{ $j->nama_buku }}
                    </option>
                @endforeach
                </select>

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

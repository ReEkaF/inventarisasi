<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Jenis Buku') }}
        </h2>
    </x-slot>

    <div class="flex items-center justify-center min-h-screen bg-gray-50 py-8">
        <div class="max-w-6xl w-full p-8 bg-white rounded-lg shadow-md border-2 border-black">
            <nav class="text-sm text-gray-500 mb-4">
                <a href="{{ route('peminjam.index') }}" class="text-black-500 hover:underline">Kelola peminjam</a> >
                <a href="#" class="text-black-500 hover:underline"><b>Edit peminjam</b></a>
            </nav>

            <h2 class="text-lg font-semibold text-gray-800">Edit peminjam</h2>
            <p class="text-sm text-gray-600 mb-6">Ini adalah halaman untuk menambah Edit peminjam</p>

            <form action="{{ route('peminjam.update',$peminjam->id) }}" method="POST">
                @csrf
                @method('PUT')
                <!-- nama -->
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama :</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $peminjam->nama) }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500"placeholder="eg: Andre Eka Ferdiansyah">
                    @error('nama')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- KTP -->
                <div class="mb-4">
                    <label for="KTP" class="block text-sm font-medium text-gray-700 mb-1"> NO KTP :</label>
                    <input type="text" id="KTP" name="KTP" value="{{ old('KTP',$peminjam->KTP) }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500" placeholder="eg : 9894902223" maxlength="20">
                    @error('KTP')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Alamat -->
                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat:</label>
                    <input type="text" id="alamat" name="alamat" value="{{ old('alamat',$peminjam->alamat) }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500" placeholder="eg : Kec Widang ,Kab Tuban">
                    @error('alamat')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Umur -->
                <div class="mb-4">
                    <label for="umur" class="block text-sm font-medium text-gray-700 mb-1">Peminjam :</label>
                    <input type="text" id="umur" name="umur" value="{{ old('umur',$peminjam->umur) }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500" placeholder="eg : 18" maxlength="3">
                    @error('umur')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- WA -->
                <div class="mb-4">
                    <label for="WA" class="block text-sm font-medium text-gray-700 mb-1">Peminjam :</label>
                    <input type="text" id="WA" name="WA" value="{{ old('WA',$peminjam->WA) }}" class="w-full border border-black rounded-md p-2.5 focus:outline-none focus:border-blue-500" placeholder="eg: 089515896944" maxlength="15">
                    @error('WA')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Submit -->
                <div class="flex justify-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-6 rounded-full mt-4">
                        Edit Data Peminjam
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

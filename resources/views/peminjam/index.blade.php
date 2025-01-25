<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('kelola Peminjam') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="{{ route('peminjam.index') }}" class="text-black-500 hover:underline"><b>Kelola  peminjam</b></a>
                </nav>
                <h3 class="text-lg font-semibold mb-4">Kelola peminjam</h3>
                <div class="mb-4 flex justify-between items-center">
                    <div>
                        <a href="{{ route('peminjam.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Tambah peminjam</a>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="w-full text-left table-auto">
                        <thead>
                            <tr class="bg-gray-100 text-gray-600 uppercase text-sm">
                                <th class="py-3 px-6">No</th>
                                <th class="py-3 px-6">Nama peminjam</th>
                                <th class="py-3 px-6">No KTP</th>
                                <th class="py-3 px-6">Alamat</th>
                                <th class="py-3 px-6">Umur</th>
                                <th class="py-3 px-6">WA</th>
                                <th class="py-3 px-6">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($peminjam as $index => $p)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-6">{{ $peminjam->firstItem() + $index }}</td>
                                    <td class="py-3 px-6">{{ $p->nama }}</td>
                                    <td class="py-3 px-6">{{ $p->KTP}}</td>                                  
                                    <td class="py-3 px-6">{{ $p->alamat }}</td>                                 
                                    <td class="py-3 px-6">{{ $p->umur }}</td>
                                    <td class="py-3 px-6">{{ $p->WA }}</td>
                                    <td class="py-3 px-6">
                                        <!-- Tombol Edit -->

                                        <a href="{{ route('peminjam.edit', $p->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('peminjam.destroy', $p->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-3 text-red-500">
                                        Tidak ada peminjam yang ditemukan
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Kontrol Pagination -->
                <div class="mt-4">
                    {{ $peminjam->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

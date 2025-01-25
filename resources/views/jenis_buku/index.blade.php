<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jenis Buku') }}
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="{{ route('jenis_buku.index') }}" class="text-black-500 hover:underline"><b>Kelola Jenis Buku</b></a>
                </nav>
                <h3 class="text-lg font-semibold mb-4">Kelola Jenis Buku</h3>
                <div class="mb-4 flex justify-between items-center">
                    <div>
                        <a href="{{ route('jenis_buku.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Tambah Jenis Buku</a>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="w-full text-left table-auto">
                        <thead>
                            <tr class="bg-gray-100 text-gray-600 uppercase text-sm">
                                <th class="py-3 px-6">No</th>
                                <th class="py-3 px-6">Nama Jenis Buku</th>
                                <th class="py-3 px-6">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($jenis as $index => $j)
                        
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-6">{{ $jenis->firstItem() + $index }}</td>
                                    <td class="py-3 px-6">{{ $j->nama_jenis_buku }}</td>
                                    <td class="py-3 px-6">
                                        <!-- Tombol Edit -->

                                        <a href="{{ route('jenis_buku.edit', $j->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>

                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('jenis_buku.destroy', $j->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-3 text-red-500">
                                        Tidak ada jenis buku yang ditemukan
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Kontrol Pagination -->
                <div class="mt-4">
                    {{ $jenis->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

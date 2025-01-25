<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('kelola Transaksi Peminjaman') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <nav class="text-sm text-gray-500 mb-4">
                    <a href="{{ route('transaksi_peminjaman.index') }}" class="text-black-500 hover:underline"><b>Kelola  Transaksi Peminjaman</b></a>
                </nav>
                <h3 class="text-lg font-semibold mb-4">Kelola Transaksi Peminjaman</h3>
                <div class="mb-4 flex justify-between items-center">
                    <div>
                        <a href="{{ route('transaksi_peminjaman.create') }}" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">Tambah transaksi Peminjaman</a>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <table class="w-full text-left table-auto">
                        <thead>
                            <tr class="bg-gray-100 text-gray-600 uppercase text-sm">
                                <th class="py-3 px-6">No</th>
                                <th class="py-3 px-6">Nama peminjam</th>
                                <th class="py-3 px-6">Nama Buku</th>
                                <th class="py-3 px-6">Tanggal Peminjaman</th>
                                <th class="py-3 px-6">Tanggal Pengembalian</th>
                                <th class="py-3 px-6">Status</th>
                                <th class="py-3 px-6">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($peminjaman as $index => $p)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="py-3 px-6">{{ $peminjaman->firstItem() + $index }}</td>
                                    <td class="py-3 px-6">{{ $p->peminjam->nama }}</td>
                                    <td class="py-3 px-6">{{ $p->buku->nama_buku}}</td>                                  
                                    <td class="py-3 px-6">{{ $p->tanggal_pinjam }}</td>                                 
                                    <td class="py-3 px-6">{{ $p->tanggal_kembali }}</td>
                                    <td class="py-3 px-6">
                                        <span class="inline-block px-3 py-1 text-sm font-semibold rounded-full 
                                            {{ $p->status == 'rent' ? 'bg-red-500 text-white' : 'bg-green-500 text-white' }}">
                                            {{ $p->status }}
                                        </span>
                                    </td>
                                    <td class="py-3 px-6">
                                        @if ($p->status == 'rent')
                                            <form action="{{ route('transaksi_peminjaman.change', $p->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-green-500">
                                                    Tandai kembali
                                                </button>
                                            </form>
                                        @else 
                                            <form action="{{ route('transaksi_peminjaman.destroy', $p->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-200">
                                                    Hapus Transaksi
                                                </button>
                                            </form>
                                        @endif
                                    </td>                                    
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center py-3 text-red-500">
                                        Tidak ada Transaksi Peminjaman yang ditemukan
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Kontrol Pagination -->
                <div class="mt-4">
                    {{ $peminjaman->links('pagination::tailwind') }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

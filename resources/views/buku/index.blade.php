<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Buku') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                            <button type="button" onclick="location.href='buku/create';" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                Tambah
                            </button>
                            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        ID
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Judul
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penulis
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Penerbit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tahun Terbit
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Opsi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bukus as $buku)
                                    <tr class="bg-white border-b">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                            {{ $buku->bukuID }}
                                        </th>
                                        <td class="px-6 py-4">
                                            {{ $buku->judul }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $buku->penulis }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $buku->penerbit }}
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $buku->tahun_terbit }}
                                        </td>
                                        <td class="px-6 py-4">
                                            <form action="{{ route('buku.destroy', $buku->bukuID) }}" method="POST" >
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('buku.edit', $buku->bukuID) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                                    Ubah
                                                </a>
                                                <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

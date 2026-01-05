<x-app-layout>
<div class="p-6">
    <a href="{{ route('lagu.create') }}" class="bg-green-500 text-white px-3 py-2 rounded">Tambah Lagu</a>

    <table class="mt-4 w-full border">
        <tr>
            <th>Judul</th>
            <th>Penyanyi</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>

        @foreach($lagu as $l)
        <tr>
            <td>{{ $l->judul }}</td>
            <td>{{ $l->penyanyi }}</td>
            <td>{{ $l->tahun }}</td>
            <td>
                <a href="{{ route('lagu.edit', $l->id) }}">Edit</a>
                <form action="{{ route('lagu.destroy', $l->id) }}" method="POST">
                    @csrf @method('DELETE')
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</x-app-layout>

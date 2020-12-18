<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <body>
        @foreach($beritas as $item)
        <tr>
        <td> {{ $loop->iteration }} </td>
        <td>{{ $item->judul }}</td>
        <td>{{ $item->isi}}</td>
        <td></td>

        </tr>

        @endforeach
        </body>
</table>
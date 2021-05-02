<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Jadwal TO Example</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>

    <body>

        <div class="container mt-5">
            <h3>Jadwal TryOut</h3>
        </div>

        <div class="container mt-5">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th scope="col">#</th>
                        <th scope="col">Nama TryOut</th>
                        <th scope="col">Organizer</th>
                        <th scope="col">Rumpun TryOut</th>
                        <th scope="col">Tanggal TryOut</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwaltos as $item)
                    <tr>
                        <th scope="row">{{ $item->id }}</th>
                        <td>{{ $item->namato }}</td>
                        <td>{{ $item->organizer }}</td>
                        <td>{{ $item->rumpunmapel }}</td>
                        <td>{{ $item->tanggalto }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $jadwaltos->links() !!}
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran TryOut Organizer</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                            <h3 class="text-center">Pendaftaran TryOut Organizer</h3>
                            <br/>

                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <br/>
                             <!-- form buat TO -->
                            <form action="/storeto" method="post">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="namato">Nama TryOut</label>
                                    <input class="form-control" type="text" name="namato" value="{{ old('namato') }}">
                                </div>
                                <div class="form-group">
                                    <label for="organizer">Nama Organizer</label>
                                    <input class="form-control" type="text" name="organizer" value="{{ old('organizer') }}">
                                </div>
                                <div class="form-group">
                                    <label for="tanggalto">Tanggal TryOut</label>
                                    <input class="form-control" type="text" name="tanggalTO" value="{{ old('tanggalTO') }}">
                                </div>
                                <div class="form-group">
                                    <label for="rumpunto">Rumpun TryOut</label>
                                    <input class="form-control" type="text" name="rumpunto" value="{{ old('rumpunto') }}">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Submit">
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>

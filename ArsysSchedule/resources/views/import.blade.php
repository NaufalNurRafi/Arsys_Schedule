Jika Anda ingin mengubah tampilan Anda agar sesuai dengan tabel `course` yang telah Anda buat, Anda perlu melakukan beberapa penyesuaian. Berikut adalah contoh perubahan pada kode HTML Anda:

```blade
<!-- resources/views/import.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Import Excel Ke Database Dengan Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <center>
            <h4>Import Excel Ke Database Dengan Laravel</h4>
            <h5><a target="_blank" href="https://www.malasngoding.com/">www.malasngoding.com</a></h5>
        </center>

        {{-- notifikasi form validasi --}}
        @if ($errors->has('file'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('file') }}</strong>
        </span>
        @endif

        {{-- notifikasi sukses --}}
        @if ($sukses = Session::get('sukses'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $sukses }}</strong>
        </div>
        @endif

        <button type="button" class="btn btn-primary mr-5" data-toggle="modal" data-target="#importExcel">
            IMPORT EXCEL
        </button>

        <!-- Import Excel -->
        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <form method="post" action="{{ route('import.courses') }}" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
                        </div>
                        <div class="modal-body">

                            @csrf

                            <label>Pilih file excel</label>
                            <div class="form-group">
                                <input type="file" name="file" required="required">
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Import</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a href="{{ route('export.courses') }}" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Course</th>
                    <th>Itype</th>
                    <th>Section</th>
                    <th>Suffix</th>
                    <th>Date Pattern</th>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Room</th>
                    <th>Instructor</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach($courses as $course)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $course->course }}</td>
                    <td>{{ $course->itype }}</td>
                    <td>{{ $course->section }}</td>
                    <td>{{ $course->suffix }}</td>
                    <td>{{ $course->date_pattern }}</td>
                    <td>{{ $course->day }}</td>
                    <td>{{ $course->start_time }}</td>
                    <td>{{ $course->end_time }}</td>
                    <td>{{ $course->room }}</td>
                    <td>{{ $course->instructor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
```

Pastikan bahwa Anda mengganti bagian `{{ route('export.courses') }}` pada link EXPORT EXCEL sesuai dengan nama route yang Anda gunakan untuk mengekspor data. Juga, sesuaikan struktur tabel dan nama kolom pada bagian yang mengisi tabel agar sesuai dengan tabel `course` yang telah Anda buat.
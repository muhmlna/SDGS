@extends('layouts.admin.app')

@section('title', 'Kelola journal')

@section('publication', 'active')
@section('journal', 'active')

@section('content')

    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <h3 class="card-title">Tabel Data journal</h3>
                <a href="{{ route('admin.journal.create') }}" class="btn-sm btn-primary">Tambah
                    journal</a>
            </div>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Isi</th>
                            <th>Link</th>
                            <th>More</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($journals as $journal)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $journal->nama }}</td>
                                <td>{{ $journal->category->nama }}</td>
                                <td>{{ $journal->isi }}</td>
                                <td><a href="{{ $journal->link }}">{{ $journal->link }}</a></td>
                                <td class="manage-row">
                                    @if (auth()->user()->roles_id == 1)
                                        <a href="{{ route('admin.journal.show', $journal->id) }}"
                                            class="btn-sm btn-success">Detail</a>
                                        <a href="{{ route('admin.journal.edit', $journal->id) }}"
                                            class="btn-sm btn-warning">Edit</a>
                                        <!-- Button trigger modal -->
                                        <a role="button" class="btn-sm btn-danger delete-button" data-bs-toggle="modal"
                                            data-bs-target=".bd-example-modal-sm{{ $journal->id }}">
                                            Hapus
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade bd-example-modal-sm{{ $journal->id }}" tabindex="-1"
                                            role="dialog" aria-hidden="">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                                    <div class="modal-footer">
                                                        <form action="{{ route('admin.journal.destroy', $journal->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <input type="submit" class="btn btn-danger light"
                                                                name="" id="" value="Hapus">
                                                            <button type="button" class="btn btn-primary"
                                                                data-bs-dismiss="modal">Tidak</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Isi</th>
                            <th>Link</th>
                            <th>More</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
    </div>

@endsection

@section('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection

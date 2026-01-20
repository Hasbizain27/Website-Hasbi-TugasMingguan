@extends('layouts.main')

@section('content')
<div class="container py-5">
    <!-- Header Section -->
    <div class="row mb-5">
        <div class="col-lg-12">
            <h1 class="section-title">
                <i class="fas fa-users"></i> Data Mahasiswa
            </h1>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="button-group">
                <a href="/tambahmahasiswa" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i> Tambah Data Mahasiswa
                </a>
                <form action="/logout" method="post" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> <strong>Berhasil!</strong> {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  title: "Berhasil!",
                  text: "{{ $message }}",
                  icon: "success",
                  confirmButtonColor: "#2d8985"
                });
            })
        </script>
    @endif

    <!-- Data Table -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-0 shadow-lg">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th><i class="fas fa-list-ol"></i> No</th>
                                <th><i class="fas fa-user"></i> Nama</th>
                                <th><i class="fas fa-id-card"></i> NIM</th>
                                <th><i class="fas fa-book"></i> Prodi</th>
                                <th><i class="fas fa-envelope"></i> Email</th>
                                <th><i class="fas fa-phone"></i> No. Hp</th>
                                <th><i class="fas fa-cogs"></i> Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1 ?>
                            @foreach ($data as $mahasiswa)
                            <tr>
                                <td><strong><?php echo $i ?></strong></td>
                                <td>{{ $mahasiswa["name"] }}</td>
                                <td>{{ $mahasiswa["nim"] }}</td>
                                <td>{{ $mahasiswa["prodi"] }}</td>
                                <td>{{ $mahasiswa["email"] }}</td>
                                <td>{{ $mahasiswa["nohp"] }}</td>
                                <td>
                                    <a href="tampildata/{{ $mahasiswa['id'] }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <a href="#" class="btn btn-sm btn-danger delete" data-id="{{ $mahasiswa['id'] }}" data-nama="{{ $mahasiswa['name'] }}">
                                        <i class="fas fa-trash"></i> Hapus
                                    </a>
                                </td>
                                <?php $i++ ?>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .button-group {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .btn-danger {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        border: none;
        color: white !important;
        font-weight: 600;
        border-radius: 8px;
    }

    .btn-danger:hover {
        background: linear-gradient(135deg, #c82333 0%, #bd2130 100%);
    }

    .alert-success {
        background: linear-gradient(135deg, #d4edda 0%, #e8f5e9 100%);
        border: 2px solid #28a745;
        border-radius: 8px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
    $('.delete').click(function(e){
        e.preventDefault();
        let id = $(this).attr('data-id');
        let nama = $(this).attr('data-nama');

        Swal.fire({
            title: "Yakin dihapus?",
            text: "Data " + nama + " akan terhapus permanent!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#2d8985",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus!",
            cancelButtonText: "Batal"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/delete/" + id;
            }
        })
    });
</script>
@endsection
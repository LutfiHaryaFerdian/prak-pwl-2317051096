@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg border-0" style="width: 380px; background-color: #ffffff;">
        <div class="card-header text-center text-white fw-semibold" style="background-color: #102a63;">
            <h4 class="mb-0">Profil Mahasiswa</h4>
        </div>
        <div class="card-body text-center p-4">
            <div class="mx-auto mb-3 rounded-circle overflow-hidden border border-3 border-dark shadow-sm" style="width: 120px; height: 120px;">
                <img src="{{ asset('images/rataip.jpg') }}" alt="Profile Picture" class="img-fluid" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="text-start px-3">
                <div class="p-2 mb-2 rounded-3 fw-semibold" style="background-color: #f3f6fc; color: #102a63;">
                    Nama: {{ $nama }}
                </div>
                <div class="p-2 mb-2 rounded-3 fw-semibold" style="background-color: #f3f6fc; color: #102a63;">
                    NPM: {{ $npm }}
                </div>
                <div class="p-2 mb-2 rounded-3 fw-semibold" style="background-color: #f3f6fc; color: #102a63;">
                    Kelas: {{ $kelas }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

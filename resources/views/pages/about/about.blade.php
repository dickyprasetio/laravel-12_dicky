@extends('layouts.app')

@section('content')
    
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">About Me</h1>
</div>

<!-- About Content -->
<div class="row">
    <div class="col-lg-8">
        <!-- Profil Singkat -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Profile</h4>
            </div>
            <div class="card-body">
                <p>Hello! My name is <strong>Nama Lengkap</strong>, a student/developer/designer based in [Kota, Negara]. I'm passionate about technology, design, and continuous learning. This page is a brief summary of my journey.</p>
            </div>
        </div>

        <!-- Jenjang Pendidikan -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Educational Background</h4>
            </div>
            <div class="card-body">
                <ul class="timeline">
                    <div>
                        <i class="fas fa-fw fa-graduation-cap"></i>
                        <span class="font-weight-bold">SD Negeri 1 Contoh</span>
                        <i class="fas fa-fw fa-minus"></i>
                        <span class="text-muted">2009 - 2015</span>
                    </div>
                    <li>
                        <h6 class="font-weight-bold">SMP Negeri 2 Contoh</h6>
                        <p class="text-muted">2015 - 2018</p>
                    </li>
                    <li>
                        <h6 class="font-weight-bold">SMA Negeri 3 Contoh - IPA</h6>
                        <p class="text-muted">2018 - 2021</p>
                    </li>
                    <li>
                        <h6 class="font-weight-bold">Universitas Teknologi Contoh - Informatika</h6>
                        <p class="text-muted">2021 - Sekarang</p>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Visi Misi (Opsional) -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Goals & Vision</h4>
            </div>
            <div class="card-body">
                <p>My goal is to contribute to impactful tech projects and keep improving my skills in software development and user experience design.</p>
            </div>
        </div>
    </div>

    <!-- Sidebar Kontak -->
    <div class="col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Contact</h4>
            </div>
            <div class="card-body">
                <p><strong>Email:</strong> yourname@example.com</p>
                <p><strong>Phone:</strong> +62 812 3456 7890</p>
                <p><strong>GitHub:</strong> github.com/username</p>
                <p><strong>LinkedIn:</strong> linkedin.com/in/username</p>
            </div>
        </div>
    </div>
</div>

@endsection

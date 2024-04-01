@extends('layouts.master')
@section('title', 'BAYES | Relasi Gejala & Penyakit')
@section('content')

    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        {{-- <div class="page-pretitle">
                            index
                        </div> --}}
                        <h2 class="page-title">
                            Relasi Gejala & Penyakit
                        </h2>
                        <hr class="my-1">
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="row">
                                <div class="table-responsive px-3 py-4 col-lg-12">
                                    <a href="/relasi" class="btn btn-primary btn-sm mb-3"><i
                                            class="fa-solid fa-caret-left me-1"></i>Kembali</a>
                                    <a href="/gejala_penyakit-add" class="btn btn-primary btn-sm mb-3">Tambah data
                                        relasi</a>
                                    <table class="table table-vcenter card-table" id="myTable">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Penyakit</th>
                                                <th style="width:600px;">Gejala</th>
                                                <th>Bobot</th>
                                                {{-- <th>Gejala</th> --}}
                                                <th style="width:50px;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($penyakit as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <b class="text-primary">
                                                            {{ '(' . $item->kode . ') ' }}
                                                        </b>
                                                        {{ $item->nama }}
                                                    </td>
                                                    <td>
                                                        @foreach ($item->gejala_penyakit as $item2)
                                                            <li>
                                                                <b class="text-primary">
                                                                    {{ '(' . $item2->gejala->kode . ') ' }}
                                                                </b>
                                                                {{ $item2->gejala->nama }}
                                                            </li>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($item->gejala_penyakit as $item3)
                                                            {{ $item3->bobot }}
                                                            <br>
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        @foreach ($item->gejala_penyakit as $item4)
                                                            <a href="/gejala_penyakit-edit/{{ $item4->id }}"><i
                                                                    class="fa-regular fa-pen-to-square"></i></a>
                                                            <a href="#"
                                                                onclick="hapus('{{ $item4->id }}','gejala_penyakit')"><i
                                                                    class="fa-regular fa-trash-can"></i></a>

                                                            <br>
                                                        @endforeach
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
            </div>
        </div>
    </div>

@endsection

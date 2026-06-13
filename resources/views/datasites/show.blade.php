@extends('layouts.master')
    @section('title', 'Detail Site')

    @section('content')

        <div class="container-fluid py-2">
            <div class="container py-2">
                <h1 class="mb-4 text-warning">Detail Site</h1>
                <section class="section">
                        <div class="card bg-secondary">
                            <div class="card-header bg-light text-white">
                                <div>
                                    <h4>Site ID : {{ $datasites->site_id }}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2">
                                        <p>Site Name</p>
                                        <p>Longitude</p>
                                        <p>Lattitude</p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>: {{ $datasites->site_name }}</p>
                                        <p>: {{ $datasites->long }}</p>
                                        <p>: {{ $datasites->lat }}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <p>Mitra</p>
                                        <p>Kota / Kabupaten</p>
                                        <p>Project Status</p>

                                    </div>
                                    <div class="col-md-4">
                                        <p>: {{ $datasites->mitra->mit_name }}</p>
                                        <p>: {{ $datasites->kabupaten }}</p>
                                        <p>: {{ $datasites->statusproject->status_name }}</p>

                                    </div>
                                </div>
                                <div class="d-flex justify-content-end me-5">
                                    <a href="{{ route('datasites.index') }}" class="btn btn-danger">
                                        Kembali
                                    </a>
                                </div>
                            </div>
                            <div class="card-header bg-success text-white">
                                <div>
                                    <h5>History Progress</h5>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <a href="{{ route('historyprogresses.create', $datasites->id) }}" class="btn btn-info mb-3 ms-auto">New History</a>
                                    {{-- <a href="{{ route('historyprogresses.create') }}" class="btn btn-primary mb-3 ms-auto">New History</a> --}}
                                </div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Tanggal</th>
                                            <th class="text-center">Detail</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($historyprogresses as $historyprogress)
                                        <tr>
                                            <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                            <td class="text-center align-middle">{{ \Carbon\Carbon::parse($historyprogress->created_at)->format('d-M-Y') }}</td>
                                            <td class="text-center align-middle">{{ $historyprogress->detail }}</td>
                                            <td class="text-center align-middle">
                                                <a href="#" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-pencil-square"></i> Delete</a>
                                                {{-- <form id="delete-form-{{ $category->id }}"
                                                    action="#"
                                                    method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="confirmDelete({{ $category->id }},  '{{ $category->cat_name }}', 'Category')">
                                                        <i class="bi bi-trash"></i> Delete
                                                    </button>
                                                </form> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
            </div>

        </div>

    @endsection

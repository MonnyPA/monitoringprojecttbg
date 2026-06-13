    @extends('layouts.master')
    @section('title', 'Data Site')

    @section('content')

        <div class="container-fluid py-2">
            <div class="container py-2">
                <h1 class="mb-4 text-warning">Data Site</h1>
                <section class="section">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="">
                                    <a href="{{ route('datasites.create') }}" class="btn btn-info mb-3 ms-auto">Tambah Data Site</a>
                                </div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Site ID</th>
                                            <th class="text-center">Site Name</th>
                                            <th class="text-center">Longitude</th>
                                            <th class="text-center">Lattitude</th>
                                            <th class="text-center">Kota / Kabupaten</th>
                                            <th class="text-center">Name Mitra</th>
                                            <th class="text-center">Status Project</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($datasites as $datasite)
                                        <tr>
                                            <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                            <td class="text-center align-middle"><a href="{{ route('datasites.show', $datasite->id) }}">{{ $datasite->site_id }}</a></td>
                                            <td class="text-center align-middle">{{ $datasite->site_name }}</td>
                                            <td class="text-center align-middle">{{ $datasite->long }}</td>
                                            <td class="text-center align-middle">{{ $datasite->lat }}</td>
                                            <td class="text-center align-middle">{{ $datasite->kabupaten }}</td>
                                            <td class="text-center align-middle">{{ $datasite->mitra->mit_name }}</td>
                                            <td class="text-center align-middle">{{ $datasite->statusproject->status_name }}</td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('datasites.edit', $datasite->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
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

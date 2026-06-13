    @extends('layouts.master')
    @section('title', 'Kelola Mitra')

    @section('content')

        <div class="container-fluid py-2">
            <div class="container py-2">
                <h1 class="mb-4 text-warning">Kelola Mitra</h1>
                <section class="section">
                        <div class="card bg-secondary">
                            <div class="card-body">
                                <div class="">
                                    <a href="#" class="btn btn-primary mb-3 ms-auto">New Mitra</a>
                                </div>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Mitra</th>
                                            <th class="text-center">Nama PM</th>
                                            <th class="text-center">HP PM</th>
                                            <th class="text-center">Nama Waspang</th>
                                            <th class="text-center">HP Waspang</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mitras as $mitra)
                                        <tr>
                                            <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                            <td class="text-center align-middle">{{ $mitra->mit_name }}</td>
                                            <td class="text-center align-middle">{{ $mitra->pm_name }}</td>
                                            <td class="text-center align-middle">{{ $mitra->hp_pm }}</td>
                                            <td class="text-center align-middle">{{ $mitra->waspang_name }}</td>
                                            <td class="text-center align-middle">{{ $mitra->hp_waspang }}</td>
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

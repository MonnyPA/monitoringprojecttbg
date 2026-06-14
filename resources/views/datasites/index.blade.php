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
                                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                                        {{ session('success') }}
                                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" style="font-size: 0.7rem;"></button>
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
                                            <td class="text-center align-middle">
                                                @if($datasite->statusproject->status_name == 'Sitac')
                                                    <span class="text-info">Sitac</span>
                                                @elseif($datasite->statusproject->status_name == 'CME')
                                                    <span class="text-warning">CME</span>
                                                @elseif($datasite->statusproject->status_name == 'SFRI')
                                                    <span class="text-primary">SRFI</span>
                                                @else
                                                    <span class="text-success">RFI</span>
                                                @endif
                                            </td>
                                            <td class="text-center align-middle">
                                                <a href="{{ route('datasites.edit', $datasite->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                                                {{-- <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-pencil-square"></i> Delete</a> --}}
                                                <form action="{{ route('datasites.destroy', $datasite->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Datasite ID?')"><i class="bi bi-trash"></i> Delete</button>
                                                </form>
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

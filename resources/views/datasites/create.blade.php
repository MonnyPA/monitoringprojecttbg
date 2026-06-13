@extends('layouts.master')
    @section('title', 'Detail Site')

    @section('content')

        <div class="container-fluid py-2">
            <div class="container py-2">
                <h1 class="mb-4 text-warning">Data Site</h1>
                <section class="section">
                        <div class="card bg-secondary">
                            <div class="card-header bg-light text-white">
                                <div>
                                    <h4>Create New Data Site</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{ route('datasites.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <div class="mb-3">
                                            <label for="site_id" class="form-label">Site ID :</label>
                                            <input type="text" class="form-control" id="site_id" aria-describedby="emailHelp" name="site_id" placeholder="Silahkan Masukan Site ID" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="site_name" class="form-label">Site Name :</label>
                                            <input type="text" class="form-control" id="site_name" aria-describedby="emailHelp" name="site_name" placeholder="Silahkan Masukan Site Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="long" class="form-label">Longitude :</label>
                                            <input type="text" class="form-control" id="long" aria-describedby="emailHelp" name="long" placeholder="Silahkan Masukan Longitude Site" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lat" class="form-label">Lattitude :</label>
                                            <input type="text" class="form-control" id="lat" aria-describedby="emailHelp" name="lat" placeholder="Silahkan Masukan Lattitude Site" required>
                                        </div>


                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <div class="mb-3">
                                            <label for="kabupate" class="form-label">Kota / Kabupaten :</label>
                                            <input type="text" class="form-control" id="kabupaten" aria-describedby="emailHelp" name="kabupaten" placeholder="Silahkan Masukan Site Name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="site_id" class="form-label">Mitra Name :</label>
                                            <select name="mitra_id" id="mitra_id" class="form-control @error('mitra_id') is-invalid @enderror" required>
                                                <option value="">Select Mitra</option>
                                                @foreach($mitras as $mitra)
                                                    <option value="{{ $mitra->id }}" {{ old('mitra_id') == $mitra->id ? 'selected' : '' }}>
                                                        {{ $mitra->mit_name }}
                                                    </option>
                                                @endforeach
                                                @error('mitra_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="site_id" class="form-label">Project Status :</label>
                                            <select name="statusproject_id" id="statusproject_id" class="form-control @error('statusproject_id') is-invalid @enderror" required>
                                                <option value="">Select Status Project</option>
                                                @foreach($statusprojects as $statusproject)
                                                    <option value="{{ $statusproject->id }}" {{ old('statusproject_id') == $statusproject->id ? 'selected' : '' }}>
                                                        {{ $statusproject->status_name }}
                                                    </option>
                                                @endforeach
                                                @error('mitra_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan :</label>
                                            <input type="textarea" class="form-control" id="catatan" aria-desareacribedby="emailHelp" name="catatan" placeholder="Silahkan Masukan Catatan">
                                        </div>

                                    </div>
                                    {{-- <div class="col-md-3">
                                        <label for="site_id" class="form-label">Kota / Kabupaten</label>
                                        <label for="site_name" class="form-label">Mitra Name</label>
                                        <label for="long" class="form-label">Status Project</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" class="form-control" id="kabupaten" aria-describedby="emailHelp" name="kabupaten" placeholder="Silahkan Masukan kabupaten" required>
                                        <input type="text" class="form-control" id="mitra_id" aria-describedby="emailHelp" name="mitra_id" placeholder="Silahkan Masukan Mitra Name" required>
                                        <input type="text" class="form-control" id="statusproject_id" aria-describedby="emailHelp" name="statusproject_id" placeholder="Silahkan Masukan Status Project" required>
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="#" class="btn btn-danger ms-2">Cancel</a>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>

        </div>

    @endsection

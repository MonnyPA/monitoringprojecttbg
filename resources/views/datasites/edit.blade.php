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
                                    <h4>Update Data Site</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{ route('datasites.update', $datasite->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <div class="mb-3">
                                            <label for="site_id" class="form-label">Site ID :</label>
                                            <input type="text" class="form-control" id="site_id" aria-describedby="emailHelp" name="site_id" placeholder="Silahkan Masukan Site ID" value="{{ old('site_id', $datasite->site_id) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="site_name" class="form-label">Site Name :</label>
                                            <input type="text" class="form-control" id="site_name" aria-describedby="emailHelp" name="site_name" placeholder="Silahkan Masukan Site Name" value="{{ old('site_name', $datasite->site_name) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="long" class="form-label">Longitude :</label>
                                            <input type="text" class="form-control" id="long" aria-describedby="emailHelp" name="long" placeholder="Silahkan Masukan Longitude Site" value="{{ old('long', $datasite->long) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lat" class="form-label">Lattitude :</label>
                                            <input type="text" class="form-control" id="lat" aria-describedby="emailHelp" name="lat" placeholder="Silahkan Masukan Lattitude Site" value="{{ old('lat', $datasite->lat) }}" required>
                                        </div>


                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <div class="mb-3">
                                            <label for="kabupate" class="form-label">Kota / Kabupaten :</label>
                                            <input type="text" class="form-control" id="kabupaten" aria-describedby="emailHelp" name="kabupaten" placeholder="Silahkan Masukan Site Name" value="{{ old('kabupaten', $datasite->kabupaten) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="site_id" class="form-label">Mitra Name :</label>
                                            <select name="mitra_id" id="mitra_id" class="form-control @error('mitra_id') is-invalid @enderror" required>
                                                <option value="">Select Mitra</option>
                                                @foreach($mitras as $mitra)
                                                    <option value="{{ $mitra->id }}"
                                                        @if(old('mitra_id', $datasite->mitra_id) == $mitra->id) selected @endif>
                                                        {{ $mitra->mit_name }}
                                                    </option>
                                                @endforeach
                                                {{-- @error('mitra_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror --}}
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="site_id" class="form-label">Project Status :</label>
                                            <select name="statusproject_id" id="statusproject_id" class="form-control @error('statusproject_id') is-invalid @enderror" required>
                                                <option value="">Select Status Project</option>
                                                @foreach($statusprojects as $statusproject)
                                                    <option value="{{ $statusproject->id }}" @if(old('statusproject_id', $datasite->statusproject_id) == $statusproject->id) selected @endif>
                                                        {{ $statusproject->status_name }}
                                                    </option>
                                                @endforeach
                                                {{-- @error('mitra_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror --}}
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="catatan" class="form-label">Catatan :</label>
                                            <input type="textarea" class="form-control" id="catatan" aria-desareacribedby="emailHelp" name="catatan" placeholder="Silahkan Masukan Catatan" value="{{ old('catatan', $datasite->catatan ?: 'Belum ada catatan') }}">
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
                                <a href="{{ route('datasites.index') }}" class="btn btn-danger ms-2">Cancel</a>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>

        </div>

    @endsection

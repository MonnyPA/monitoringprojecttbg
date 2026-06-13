@extends('layouts.master')
    @section('title', 'Detail Site')

    @section('content')

        <div class="container-fluid py-2">
            <div class="container py-2">
                <h1 class="mb-4 text-warning">New Histroy Site</h1>
                <section class="section">
                        <div class="card bg-secondary">
                            <div class="card-header bg-light text-white">
                                <div>
                                    <h4>Create History Progress | Site ID : <b>{{ $datasites->site_id }}</b></h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="form" action="{{ route('historyprogresses.store', $datasites->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    {{-- <label for="datasite_id" class="form-label">Site ID : <b>{{ $datasites->site_id }}</b></label> --}}
                                    {{-- <input type="text" class="form-control" id="datasite_id" aria-describedby="emailHelp" name="datasite_id" placeholder="Silahkan Masukan Site ID" value="{{ $datasites->site_id }}" disabled> --}}
                                    <input type="hidden" class="form-control" id="datasite_id" aria-describedby="emailHelp" name="datasite_id" placeholder="Silahkan Masukan Site ID" value="{{ $datasites->id }}">
                                </div>
                                <div class="mb-3">
                                    <label for="detail" class="form-label">Detail</label>
                                    {{-- <label for="detail" class="form-label">{{ $datasites->id }}</label> --}}
                                    <input type="text" class="form-control" id="detail" aria-describedby="emailHelp" name="detail" placeholder="Silahkan Masukan Detail Plan" required>
                                </div>
                                <button type="submit" class="btn btn-success">Submit</button>
                                <a href="{{ route('datasites.show', $datasites->id) }}" class="btn btn-danger ms-2">Cancel</a>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>

        </div>

    @endsection

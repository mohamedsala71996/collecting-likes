@extends('layouts.dashboard.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create Social Link</div>

                <div class="card-body">
                    <form action="{{ route('socials.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="site_name">Site Name:</label>
                            <select name="site_name" class="form-control @error('site_name') is-invalid @enderror" required>
                                @foreach($siteNames as $siteName)
                                    <option value="{{ $siteName }}">{{ $siteName }}</option>
                                @endforeach
                            </select>
                            @error('site_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label for="link">Link:</label>
                            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" required />
                            @error('link')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

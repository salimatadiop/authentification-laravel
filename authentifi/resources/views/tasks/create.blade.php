@extends('layouts.app')

@section('content')


 <!-- Message de réussite -->
 @if (session()->has('message'))
 <div class="mt-3 mb-4 list-disc list-inside text-sm text-green-600">
     {{ session('message') }}
 </div>
@endif
<form action="{{ route('tasks.create') }}" method="post">
 @csrf
 <div class="row mb-3">
    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
</form>
@endsection
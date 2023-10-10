@extends('layouts.app')
@section('content')

<div class="content">
  <div class="container py-5">
    <h2 class="fw-bold fs-1 pb-2">Post a new project</h2>

    <form action="{{ route('admin.projects.store') }}" method="POST">
      @csrf()
      
      <div class="mb-4">
        <label class="fw-bold" for="title">{{__('Title')}}</label>
        <input class="form-control" type="text" name="title" required autofocus>
        {{-- @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->get('title')}}</strong>
        </span>
        @enderror --}}
      </div>
      <div class="mb-4">
        <label class="fw-bold" for="link">{{__('Project link')}}</label>
        <input class="form-control" type="text" name="link" required>
        {{-- @error('link')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->get('link')}}</strong>
        </span>
        @enderror --}}
      </div>
      <div class="mb-4">
        <label class="fw-bold" for="description">{{__('Description')}}</label>
        <textarea class="form-control" type="text" name="description" required></textarea>
        {{-- @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->get('description')}}</strong>
        </span>
        @enderror --}}
      </div>
      <div class="mb-4">
        <label class="fw-bold" for="thumb">{{__('Thumb image')}}</label>
        <input class="form-control" type="text" name="thumb" required>
        {{-- @error('thumb')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->get('thumb')}}</strong>
        </span>
        @enderror --}}
      </div>
      <div class="mb-4">
        <div class="row">
          <div class="col-6">
            <label class="fw-bold" for="language">{{__("Select the project's language")}}</label>
            <select class="form-select" name="language" required>
              <option selected disabled hidden>Select a language</option>
              <option value="it">Italian</option>
              <option value="en">English</option>
              <option value="fr">French</option>
            </select>
            {{-- @error('language')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->get('language')}}</strong>
            </span>
            @enderror --}}
          </div>
          <div class="col-6">
            <label class="fw-bold" for="name">{{__('Release date')}}</label>
            <input class="form-control" type="date" name="release" required>
            {{-- @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->get('date')}}</strong>
            </span>
            @enderror --}}
          </div>
        </div>
      </div>
      <div class="mb-4 pt-2">
        <button type="submit" class="btn btn-primary btn-lg">Post the project!</button>
      </div>
    </form>

  </div>
</div>

@endsection
@extends('layouts.app')
@section('content')
  <div class="content">
    <div class="container p-5 mb-4">
      <div class="row">
        <div class="col">
          <a class="text-decoration-none">
            <div class="card bg-transparent border-0 rounded-0 h-100 position-relative">
              <div class="deleted-comic-card">
                <img src="{{ $project->thumb }}" class="card-img-top border-0 rounded-0" alt="" title="">
                <div class="card-body posionated-delete text-white position-absolute d-flex flex-wrap justify-content-center align-items-end h-100">
                  <p class="card-text text-uppercase fw-bold fs-5 text-center"></p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
@extends('layouts.admin')

@section('content')
 {{-- <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div> --}}
        <h1 class="text-center">Edit Category: {{$category->name}}</h1>
        <div class="row bg-white">
            <div class="col-12">
                <form action="{{route('admin.categories.update', $category->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
                    @csrf
                    @method('PUT')
                      <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $category->name)}}" required maxlength="50" minlength="3">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">* Minimo 3 caratteri massimo 50 caratteri</div>
                      </div>

                      <button type="submit" class="btn btn-success">Submit</button>
                      <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </div>
        </div>

@endsection
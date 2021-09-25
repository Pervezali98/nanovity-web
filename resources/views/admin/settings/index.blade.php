@extends('adminlte::page')

@section('title', 'Settings')

@section('content_header')
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Settings</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
          <li class="breadcrumb-item active">Settings</li>
        </ol>
      </div>
    </div>
  </div>
@stop

@section('content')
  <div class="row">
    <div class="col-md-6">
      <div class="card card-outline card-primary">
        <div class="card-header">
          <h3 class="card-title">Settings</h3>
        </div>
        <div class="card-body">
          <form class="form" id="settings-form" action="{{ route('admin.settings.set') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
              <a href="{{ asset(settings('logo')) }}" target="__blank">
                <img src="{{ asset(settings('logo')) }}" style="height: 100px" alt="{{ settings('name') }} logo">
              </a>
            </div>
            <div class="form-group">
              <label for="logo">Logo</label>
              <div class="custom-file {{ $errors->has('logo') ? 'is-invalid' : null }}">
                <input type="file" class="custom-file-input {{ $errors->has('logo') ? 'is-invalid' : null }}" id="logo" name="logo">
                <label class="custom-file-label" for="customFile">Choose file</label>
              </div>
              @error('logo')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="name">App. Name&nbsp;<span class="text-danger">*</span></label>
              <input id="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : null }}" type="text" value="{{ old('name', $settings->where('key', 'name')->first()->value) }}" />
              @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="title">App. Title&nbsp;<span class="text-danger">*</span></label>
              <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : null }}" type="text" value="{{ old('title', $settings->where('key', 'title')->first()->value) }}" />
              @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="email">E-mail&nbsp;<span class="text-danger">*</span></label>
              <input id="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : null }}" type="email" value="{{ old('email', $settings->where('key', 'email')->first()->value) }}" />
              @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="phone">Phone&nbsp;<span class="text-danger">*</span></label>
              <input id="phone" name="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : null }}" type="text" value="{{ old('phone', $settings->where('key', 'phone')->first()->value) }}" />
              @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group">
              <label for="address">Address&nbsp;<span class="text-danger">*</span></label>
              <textarea id="address" name="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : null }}">{{ old('address', $settings->where('key', 'address')->first()->value) }}</textarea>
              @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </form>
        </div>
        <div class="card-footer text-right">
          <button class="btn btn-sm btn-outline-primary" form="settings-form" type="submit">Update</button>
        </div>
      </div>
    </div>
  </div>
@stop

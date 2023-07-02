@extends('layouts.app')

@section('title', 'Kho bản ghi')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/styles/partner-manage.css') }}">
@endsection

@section('script')
@endsection

@section('content')
    {{-- @include('components.paging') --}}
    <h1>
        Cập nhập thông tin
    </h1>

    <div class="group-flex">
        <div class="flex-item">
            <div class="form-group">
                <label for="name">Họ tên</label>
                <input class="input" type="text" name="name" id="name" placeholder="Nhập họ tên">
            </div>
        </div>
        <div class="flex-item">

        </div>
    </div>
@endsection

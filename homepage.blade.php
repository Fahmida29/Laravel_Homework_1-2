<?php

use GuzzleHttp\Psr7\Message;
?>
@extends('layouts.frontendLayout')

    @section('title')
    HomePage

    @endsection

    @section('frontend')

    <div class="card col-lg-5 mx-auto mt-5">

    <div class="card-header">Add Tdod</div>
    <div class="card-body">
        <form action="{{ route('store') }}" method="post">
        @csrf
            <input value="{{ old('title') }}" name="title" type="text" class="form-control my-2" placeholder="Todo title">
            @error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <textarea value="{{ old('detail') }}" name="detail" class="form-control my-2" placeholder="Description"></textarea>
            @error('detail')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <input value="{{ old('author') }}" name="author" type="text" class="form-control my-2" placeholder="Author">
            <button class="btn btn-primary">submit todo</button>
        </form>
    </div>

    </div>

    @endsection
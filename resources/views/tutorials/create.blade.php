@extends('layouts.base')
@section('title', 'Create new tutorial')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container mt-5 mb-4">
            <h1 class="fs-2">Add New Tutorial</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <form action="/tutorials/new" method="post">
            @csrf
            <div class="container">
                @if($errors->any() || session()->get('error'))
                <x-alert.warning :message="Arr::first($errors->all()) ?? session()->get('error')" />
                @endif
                <div class="form-floating mb-3">
                    <input type="text" placeholder="John Doe's Adventures" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                    <label for="title">Title</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" placeholder="john-does-adventures" name="slug" class="form-control" value="{{ old('slug') }}" required>
                    <label for="slug">Slug</label>
                </div>

                <div class="form-floating mb-3">
                    <textarea name="content" id="content" placeholder="The tutorial on John Does adventure" class="form-control">{{ old('content') }}</textarea>
                    <label for="content">Content</label>
                </div>

                <button type="submit" class="btn btn-warning mb-4">Save</button>
            </div>
        </form>
    </div>

</main>
<script src="//cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    // load ckeditor when there is an internet connection
    if (window.CKEDITOR) {
        document.querySelector('label[for=content]').innerHTML = '';
        CKEDITOR.replace('content');
    }
</script>
@endSection()
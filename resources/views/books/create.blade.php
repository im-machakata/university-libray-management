@extends('layouts.base')
@section('title','Add books')
@section('content')
<link rel="stylesheet" href="/static/css/tags-standalone.min.css">
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">Add Book</h1>
            <p class="lead">Select a book from the following categories and read</p>

            @if($errors->any() || session()->get('error'))
            <x-alert.warning :message="Arr::first($errors->all()) ?? session()->get('error')" />
            @endif

            <form action="/books/new" method="post">
                @csrf
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="title" placeholder="Title">
                            <label for="title">Title</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="isbn" placeholder="ISBN">
                            <label for="isbn">ISBN</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="source" placeholder="Source">
                            <label for="source">Source</label>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="form-floating">
                            <select multiple data-show-all-suggestions="true" class="form-select form-control" id="authors" name="authors[]">
                                <option selected>Select authors</option>
                                @foreach($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name }}</option>
                                @endforeach
                            </select>
                            <label for="authors">Authors</label>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="keywords" placeholder="Keywords separated by a comman">
                            <label for="source">Keywords</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Save</button>
            </form>
        </div>
    </div>
</main>
<script type="module">
    import Tags from "/static/js/tags.min.js";
    Tags.init("select[multiple]");
</script>
@endSection()
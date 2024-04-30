@extends('layouts.base')
@section('title','Add author')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <h1 class="fs-2">Add New Book Author</h1>
            <p class="lead">Select a book from the following categories and read</p>

            @if($errors->any() || session()->get('error'))
            <x-alert.warning :message="Arr::first($errors->all()) ?? session()->get('error')" />
            @endif

            <form action="{{ route('authors.store') }}" method="post">
                @csrf
                <div class="row mt-4">
                    <div class="col-md-4 mb-3">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="name" placeholder="Johnson Doe">
                            <label for="name">Name</label>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="form-floating">
                            <input type="email" class="form-control" name="email" placeholder="johnson.doe@email.com">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Save</button>
            </form>
        </div>
    </div>
</main>
@endSection()
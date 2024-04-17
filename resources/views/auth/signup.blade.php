@extends('layouts.base')
@section('title','Register')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="fs-2">Create an account</h1>
                    <p class="lead">Create an account and get access to our online library</p>

                    @if($errors->any() || session()->get('error'))
                    <x-alert.warning :message="Arr::first($errors->all()) ?? session()->get('error')" />
                    @endif

                    <form action="/register" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="username" class="form-control" placeholder="john.doe" value="{{ old('username') }}">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-floating">
                                    <input type="password" name="password" class="form-control" placeholder="p@$$w(0)rd">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="name" class="form-control" placeholder="John" value="{{ old('name') }}">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="surname" class="form-control" placeholder="Doe" value="{{ old('surname') }}">
                                    <label for="surname">Surname</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="school_id" class="form-control" placeholder="School ID" value="{{ old('student_id') }}">
                                    <label for="school-id">School ID</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3 form-floating">
                                    <input type="text" name="phone" class="form-control" placeholder="07..." value="{{ old('phone') }}">
                                    <label for="phone">Phone Number</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-lg btn-warning w-100">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="/static/images/library-books.jpg" class="img-fluid rounded-3 mt-3" alt="Empty classroom image">
                </div>
            </div>
        </div>
    </div>
</main>
@endSection()
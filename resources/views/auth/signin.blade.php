@extends('layouts.base')
@section('title','Login')
@section('content')
<main>
    <div class="container-fluid">
        <div class="container my-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 z-1">
                    <h1 class="fs-1">Login to your account</h1>
                    <p class="lead">You need to be logged in to access the online library.</p>
                    <form action="/login" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3 form-floating">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="john.doe">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3 form-floating">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="p@$$w()Rd">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-lg btn-warning text-uppercase w-100">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6">
                    <img src="/static/images/class.jpg" class="img-fluid rounded-3 z-0" alt="Empty classroom image">
                </div>
            </div>
        </div>
    </div>
</main>
@endSection()
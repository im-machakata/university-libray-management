<div class="col-lg-6">
    <div class="card my-3">
        <div class="card-body">
            <h2 class="fs-4 card-title">{{ $title }}</h2>
            <p class="card-text">{{ Str::excerpt($content) }}</p>
            <a href="system-tutorials/{{ $slug }}">Read more</a>
        </div>
    </div>
</div>
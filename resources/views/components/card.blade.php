<div class="card border-0 bg-transparent">
    <div class="image-cropper">
        <img src="{{ $thumb }}" class="card-img-top img-fluid rounded-0" alt="...">
    </div>
    <div class="card-body px-0">
        <h5 class="card-title text-white text-uppercase fs-6">{{ $title }}</h5>
    </div>
    {{ $slot }}
</div>

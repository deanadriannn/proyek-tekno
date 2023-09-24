<div class="card mb-3" style="width: 100%;">
  <div class="card-body">
    <img 
      src="/assets/thumbnail.png" 
      alt="Logo"
      width="100%"
      class="mb-2"
    >
    <h5 class="card-title fw-bold">{{ $post->title ?? 'Title' }}</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">By {{ $post->user->username ?? 'Author' }}</h6>
  </div>
</div>
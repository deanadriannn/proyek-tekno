<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <section class="w-100">
    <div class="row">
      <div class="col-9">
        <h1 class="fw-bold">{{ $post->title }}</h1>
        <h4>By {{ $post->user->username }}</h4>
        <img 
          src="/assets/thumbnail.png" 
          alt="Image"
          width="90%"
          class="mb-3"
        >
        <div style="width: 90%">
          <p>
            {{ $post->content }}
          </p>
        </div>
      </div>
      <div class="col">
        <h5>You may also like</h5>
        @foreach($nextPosts as $post)
          <x-post-card :post='$post'/>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
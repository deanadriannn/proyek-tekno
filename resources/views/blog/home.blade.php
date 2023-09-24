<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <section class="mb-5">
    <h2 class="fw-bold">Featured Post</h2>
    <hr>
    <a
      href="/blog" 
      class="d-flex justify-content-between gap-3 text-decoration-none text-black"
    >
      <img 
        src="/assets/thumbnail.png" 
        alt="Logo"
      >
      <div>
        <h1 class="fw-bold">
          Lorem ipsum dolor sit amet conser adipisicing elit
        </h1>
        <h4>By Author</h4>
      </div>
    </a>
  </section>

  <section>
    <h2 class="fw-bold">Newest Posts</h2>
    <hr>
    <div class="row">
      @foreach($posts as $post)
        <div class="col-4">
          <a href="/{{ $post->id }}" class="text-decoration-none">
            <x-post-card :post='$post'/>
          </a>
        </div>
      @endforeach
    </div>
  </section>
</x-app-layout>
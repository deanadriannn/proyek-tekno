<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <section class="mb-5">
    <h1 class="fw-bold">{{ auth()->user()->username }}'s dashboard</h1>
    <div class="d-flex flex-row mb-3 column-gap-3">
      <div class="card" style="width: 18rem; height: fit-content;">
        <div class="card-body">
          <h5 class="card-title">Total posts you've created</h5>
          <h4 class="card-subtitle mb-2 text-body-secondary">{{ $count }}</h4>
        </div>
      </div>
      {{-- <div class="card" style="width: 18rem; height: fit-content;">
        <div class="card-body">
          <h5 class="card-title">Archived posts</h5>
          <h4 class="card-subtitle mb-2 text-body-secondary">123.456.789</h4>
        </div>
      </div> --}}
    </div>
  </section>

  <section>
    <h2 class="fw-bold">Your Posts</h2>
    <hr>
    <div class="row">
      @foreach($posts as $post)
        <div class="col-4">
          <x-post-card :post='$post'/>
        </div>
      @endforeach
    </div>
  </section>
</x-app-layout>
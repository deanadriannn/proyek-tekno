<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <div style="width: 100%;">
    <div class="card mb-3" style="width: 90%; margin: 0 auto;">
      <div class="card-body text-center d-flex flex-column align-items-center row-gap-5 justify-content-center w-100">
        <h3>Create a post</h3>
        <form class="w-100" action="/new" method="POST">
          @csrf
          <div class="mb-3">
            <input type="text" class="form-control" id="title" name="title" placeholder="title">
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" id="content" name="content" style="height: 200px"></textarea>
            <label for="content">Content</label>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>
  </div>
  
  
</x-app-layout>
<x-app-layout>
  <x-slot name="header">
    <div class="fixed-top">
      <x-navigation />
    </div>
  </x-slot>

  <div style="width: 100%;">
    <div class="card mb-3" style="width: 35%; margin: 0 auto;">
      <div class="card-body text-center d-flex flex-column align-items-center row-gap-5 justify-content-center">
        <h3>Create an account</h3>
        <form action="/sign-up" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-9 mb-3 mx-auto">
              <div class="input-group">
                <input 
                  type="text" 
                  name="username"
                  class="form-control" 
                  placeholder="Username" 
                  aria-label="Username" 
                  aria-describedby="basic-addon1"
                >
              </div>
            </div>
            <div class="col-md-9 mb-3 mx-auto">
              <div class="input-group mx-auto">
                <input 
                  type="password" 
                  name="password"
                  class="form-control" 
                  placeholder="Password" 
                  aria-label="Password" 
                  aria-describedby="basic-addon1"
                >
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3 w-75">
            Sign up
          </button>
        </form>
        <a href="/sign-in">
          Already have an account? Sign in
        </a>
      </div>
    </div>
  </div>
  
  
</x-app-layout>
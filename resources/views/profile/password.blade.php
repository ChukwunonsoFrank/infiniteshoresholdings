<x-app-layout>
    <!-- Content wrapper -->
    <div class="content-wrapper">
      <!-- Content -->
  
      <div class="container-fluid flex-grow-1 container-p-y">
  
  
          <div class="container-fluid px-0">
            @if (session()->has('message'))
                      <div class="alert alert-info alert-dismissible fade show">
                          {{ session('message') }}
                      </div>
                  @endif
              <div class="row">
                  <div class="col-md-12">
                      <div class="card mb-4">
                          <h5 class="card-header">Change Password</h5>
  
                          <hr class="my-0">
                          <div class="card-body">
                              <form action="/profile/password" method="POST">
                                @csrf
                                  <div class="row">
                                      <div class="mb-3 col-md-6">
                                          <label for="email" class="form-label">Password</label>
                                          <input class="form-control" type="password" name="password" required>
                                          <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                      </div>
                                      
                                      <div class="mb-3 col-md-6">
                                          <label for="email" class="form-label">Confirm Password</label>
                                          <input class="form-control" type="password" name="password_confirmation" required>
                                          <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                      </div>
                                  </div>
                                  <div class="mt-2">
                                      <button type="submit" name="update_profile"
                                          class="btn btn-primary me-2">Save changes</button>
                                  </div>
                              </form>
                          </div>
                          <!-- /Account -->
                      </div>
                  </div>
              </div>
          </div>
  
  
  
      </div>
      <!-- / Content -->
  
      <!-- Footer -->
      <footer class="content-footer footer bg-footer-theme">
          <div
              class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
          </div>
      </footer>
      <!-- / Footer -->
  
      <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
  </x-app-layout>
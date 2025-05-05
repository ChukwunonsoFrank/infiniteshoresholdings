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
                         <h5 class="card-header">Profile Details</h5>
                         <!-- Account -->
                         <div class="card-body">
                             <form action="/profile/profile-picture" method="POST" enctype="multipart/form-data">
                               @csrf
                                 <div class="d-flex align-items-start align-items-sm-center gap-4">
                                     <img src="{{ $user->profile_picture ? asset('storage/' . $user->profile_picture) : asset('dash/assets/img/avatars/placeholder.png') }}" alt="user-avatar"
                                         class="d-block rounded" id="uploadedAvatar" width="100"
                                         height="100">
 
                                     <div class="button-wrapper">
                                         <label for="upload" class="btn btn-primary me-2 mb-4"
                                             tabindex="0">
                                             <span style="font-size: 12px;">Select Photo</span>
                                             <input type="file" name="profile_photo" id="upload"
                                                 class="account-file-input"
                                                 accept="image/png, image/jpeg" hidden="">
                                         </label>
                                         <button name="upload_photo" type="submit"
                                             class="btn btn-outline-secondary account-image-reset mb-4">
                                             <span>Submit</span>
                                         </button>
 
                                         <p class="text-muted mb-0" style="font-size: 12px;">Allowed JPEG, JPG or PNG. Max size of
                                             800K</p>
                                     </div>
                                 </div>
                             </form>
                         </div>
 
                         <hr class="my-0">
                         <div class="card-body">
                             <form action="/profile/personal" method="POST">
                               @csrf
                                 <div class="row">
                                     <div class="mb-3 col-md-6">
                                         <label for="email" class="form-label">E-mail</label>
                                         <input class="form-control" type="text" id="email"
                                             value="{{ $user->email }}" readonly="">
                                     </div>
 
                                     <div class="mb-3 col-md-6">
                                         <label for="z" class="form-label">Country</label>
                                         <input type="text" name="country" class="form-control" id="country"
                                             value="{{ $user->country }}" placeholder="">
                                     </div>
                                     <div class="mb-3 col-md-6">
                                         <label for="firstName" class="form-label">Fullname</label>
                                         <input class="form-control" type="text" id="name"
                                             name="fullname" value="{{ $user->fullname }}"
                                             placeholder="Enter Firstname" autofocus="">
                                     </div>
                                     <div class="mb-3 col-md-6">
                                         <label class="form-label" for="phoneNumber">Address</label>
                                         <div class="input-group input-group-merge">
                                             <input type="text" id="phoneNumber" name="address"
                                                 class="form-control" value="{{ $user->address }}"
                                                 placeholder="">
                                         </div>
                                     </div>
                                     <div class="mb-3 col-md-6">
                                         <label for="dob" class="form-label">Enter Date of Birth</label>
                                         <input type="date" class="form-control" id="dob"
                                             value="{{ $user->date_of_birth }}" name="date_of_birth">
                                     </div>
                                     <div class="mb-3 col-md-6">
                                         <label for="gender" class="form-label">Gender</label>
                                         <select id="gender" name="gender" value="male"
                                             class="select2 form-select">
                                             <option value="">Select Gender</option>
                                             <option value="{{ $user->gender }}" selected="">{{ $user->gender }}</option>
                                             <option value="female">Female</option>
                                             <option value="male">Male</option>
                                             <option value="other">Other</option>
                                         </select>
                                     </div>
                                     <div class="mb-3 col-md-6">
                                         <label for="gender" class="form-label">Marital Status</label>
                                         <select id="gender" name="marital_status" value="male"
                                             class="select2 form-select">
                                             <option value="{{ $user->marital_status }}" selected="">{{ $user->marital_status }}</option>
                                             <option value="Single">Single</option>
                                             <option value="Married">Married</option>
                                             <option value="Widowed">Widowed</option>
                                             <option value="Divorced">Divorced</option>
                                         </select>
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
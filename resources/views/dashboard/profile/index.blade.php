@extends('layouts.dashmaster');
@section('content')

<h1 class="mt-6">Profile Settings</h1>

<div class="content">



<div class="row">
    <div class="col-md-6">


        <div class="main-card mb-3 mt-4 card bg-transparent ">
            <div class="card-body">
                <h5 class="card-title">Profile Information Update</h5>
                <form class="" action="{{ route('profile.username.update') }}" method="POST">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Name</label><input name="name" id="exampleEmail" placeholder="Enter new Name" type="text" class="form-control" value="{{auth()->user()->name}}">

                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="email" id="exampleEmail" placeholder="Enter new Email" type="text" class="form-control"  value="{{auth()->user()->email}}">
                        @error('email')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                        {{-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
                </div>
                <div class="form-group">
                      <button class="mb-2  ml-4 btn-icon btn btn-success"><i class="pe-7s-paper-plane btn-icon-wrapper"> </i>Update</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 mt-4 card bg-transparent ">
            <div class="card-body">
                <h5 class="card-title">Profile Photo Update</h5>
                <form class="" action="{{ route('profile.photo.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <img id="cat_img" src="{{ asset('uploads/profiles/') }}/{{auth()->user()->image}}" alt="" style="height:300px; width:100%; object-fit:contain; margin:10px 0px; border-radius: 20px">
                    <input onchange="document.querySelector('#cat_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5"  name="image">

                  @error('image')
                    <p class="text-danger">{{ $message }}</p>
                  @enderror



                </div>
                <div class="form-group">
                      <button class="mb-2  ml-4 btn-icon btn btn-success"><i class="pe-7s-paper-plane btn-icon-wrapper"> </i>Update</button>
                </div>

                </form>
            </div>

    </div>
    <div class="col-md-6">
        <div class="main-card mb-3 mt-4 card bg-transparent ">
            <div class="card-body">
                <h5 class="card-title">Password Update</h5>
                <form class="" action="{{ route('profile.password.update') }}" method="POST">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleEmail9" class="">Old Password</label><input name="old" id="exampleEmai9l" placeholder="Enter Old Password" type="password" class="form-control">

                        @error('old')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail0" class="">New Password</label><input name="password" id="exampleEmail0" placeholder="Enter new Email" type="password" class="form-control" >
                        @error('password')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail7" class="">Confirm Password</label><input name="password_confirmation" id="exampleEmail7" placeholder="Reapet your password" type="password" class="form-control"">
                        @error('confirm')
                          <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>


                        {{-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
                </div>
                <div class="form-group">
                      <button class="mb-2  ml-4 btn-icon btn btn-success"><i class="pe-7s-paper-plane btn-icon-wrapper"> </i>Update Password</button>
                </div>

                </form>
            </div>
    </div>
</div>

</div>

@if (session('name_update'))

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    console.log("heello")
   Swal.fire({
    position: "center-center",
    icon: "success",
    title: "{{ session('name_update')}}",
    showConfirmButton: false,
    timer: 2000
    });

</script>
@endif



@endsection;

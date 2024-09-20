@extends('layouts.dashmaster');
@section('content')

<h1 class="mt-6">Add a new User</h1>

<div class="row">
    <div class="col-md-6">
        @if (session('name_update'))

             <div class="alert alert-primary fade show" role="alert">{{ session('name_update')}} !</div>




        @endif

        <div class="main-card mb-3 mt-4 card bg-transparent ">
            <div class="card-body">
                <h5 class="card-title">Profile Information</h5>
                <form class="" action="{{ route('user.create.new') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Name</label><input name="name" id="exampleEmail" placeholder="Enter new Name" type="text" class="form-control" >

                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Email</label><input name="email" id="exampleEmail" placeholder="Enter new Email" type="text" class="form-control" >
                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="position-relative form-group"><label for="examplepass" class="">Password</label><input name="password" id="examplepass" placeholder="Enter new Email" type="text" class="form-control" >
                        @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleCustomSelect" class="">Select Role</label>
                        <select type="select" id="exampleCustomSelect" name="role" class="custom-select">
                             <option value="">Select</option>
                            <option value="manager">Manager</option>
                            <option value="blogger">Blogger</option>
                            <option value="user">User</option>
                        </select>
                        @error('role')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>

                    <div class="position-relative form-group"><label for="examplepass" class="">Profile Photo</label>

                            <img id="cat_img" src="{{ asset('uploads/profiles/default.jpg') }}" alt="" style="height:300px; width:100%; object-fit:contain; margin:10px 0px; border-radius: 20px">
                            <input onchange="document.querySelector('#cat_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5"  name="image">


                    </div>





                        {{-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
                </div>
                <div class="form-group">
                      <button class="mb-2  ml-4 btn-icon btn btn-success"><i class="pe-7s-paper-plane btn-icon-wrapper"> </i>Create User</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection;

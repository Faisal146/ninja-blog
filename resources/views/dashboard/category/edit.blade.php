@extends('layouts.dashmaster');
@section('content')

<h1 class="mt-6">Edit Category '{{$category['title']}}'</h1>

<div class="row">
    <div class="col-md-6">

        <div class="main-card mb-3 mt-4 card bg-transparent ">
            <div class="card-body">
                <h5 class="card-title">Category Information</h5>
                <form class="" action="{{ route('category.update' , $category['id']) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Title</label><input name="title" id="exampleEmail" placeholder="Enter Category title" value="{{$category['title']}}" type="text" class="form-control" >

                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail" class="">slug</label><input name="slug" id="exampleEmail" placeholder="Enter slug" type="text" class="form-control" value="{{$category['slug']}}">
                        @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>



                    <div class="position-relative form-group"><label for="examplepass" class="">Category Photo</label>

                            <img id="cat_img" src="{{ asset('uploads/categories') }}/{{$category['image']}}" alt="" style="height:300px; width:100%; object-fit:contain; margin:10px 0px; border-radius: 20px">
                            <input onchange="document.querySelector('#cat_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5"  name="image">


                    </div>





                        {{-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
                </div>
                <div class="form-group">
                      <button class="mb-2  ml-4 btn-icon btn btn-success"><i class="pe-7s-paper-plane btn-icon-wrapper"> </i>Update Category</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection;

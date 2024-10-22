@extends('layouts.dashmaster');
@section('content') ;

<h1 class="mt-6">Add a new Blog</h1>

<div class="row">
    <div class="col-md-6">

        <div class="main-card mb-3 mt-4 card bg-transparent ">
            <div class="card-body">
                <h5 class="card-title">Blog Information</h5>
                <form class="" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="position-relative form-group">
                        <label for="category" class="">Select Role</label>
                        <select type="select" id="category" name="category" class="custom-select">

                             <option value="">Select</option>

                            @foreach ($categories as $item)
                               <option value="{{$item['id']}}">{{$item['title']}}</option>
                            @endforeach

                             {{-- <option value="blogger" {{$user['role'] == 'blogger' ? 'selected' : ''}} >Blogger</option>
                             <option value="user" {{$user['role'] == 'user' ? 'selected' : ''}} >User</option> --}}
                        </select>
                        @error('role')
                             <p class="text-danger">{{ $message }}</p>
                       @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail" class="">Title</label><input name="title" id="exampleEmail" placeholder="Enter Blog title" type="text" class="form-control" >

                        @error('title')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail" class="">slug</label><input name="slug" id="exampleEmail" placeholder="Enter Blog slug" type="text" class="form-control" >
                        @error('slug')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>


                    <div class="position-relative form-group"><label for="exampleEmail3" class="">Short Description</label><input name="short" id="exampleEmail3" placeholder="Enter Short Description" type="text" class="form-control" >
                    <textarea name="" id="short_description" cols="30" rows="10"></textarea>

                    @error('short')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>
                    <div class="position-relative form-group"><label for="exampleEmail4" class="">Long Description</label><input name="long" id="exampleEmail4" placeholder="Enter " type="text" class="form-control" >

                    @error('long')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    </div>



                    <div class="position-relative form-group"><label for="examplepass" class="">Blog Thambnail</label>

                            <img id="blog_img" src="{{ asset('uploads/blogs/default.jpg') }}" alt="" style="height:300px; width:100%; object-fit:contain; margin:10px 0px; border-radius: 20px">
                            <input onchange="document.querySelector('#blog_img').src = window.URL.createObjectURL(this.files[0])" type="file" class="form-control" id="inputPassword5"  name="image">


                    </div>





                        {{-- <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small> --}}
                </div>
                <div class="form-group">
                      <button class="mb-2  ml-4 btn-icon btn btn-success"><i class="pe-7s-paper-plane btn-icon-wrapper"> </i>Create Blog</button>
                </div>

                </form>
            </div>
        </div>
    </div>
</div>



@endsection;

@section('script')

<script>
    tinymce.init({
      selector: '#short_description',
      plugins: [
        // Core editing features
        'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
        // Your account includes a free trial of TinyMCE premium features
        // Try the most popular premium features until Nov 3, 2024:
        'checklist', 'mediaembed', 'casechange', 'export', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown',
      ],
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
      ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
    });
  </script>

@endsection

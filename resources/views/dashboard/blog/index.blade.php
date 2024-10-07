@extends('layouts.dashmaster')

@section('content')
<div class="d-flex mb-4 mt-3  align-items-center">
    <h1 class="mr-4">Blog Management</h1>

    @if (auth()->user()->role != 'user' )

    <a href="{{ route('blog.create') }}" class="mb-2  mt-2 btn-icon btn btn-lg  btn-primary" style="width: fit-content"><i class="pe-7s-plus btn-icon-wrapper"> </i>Create Blog</a>
    @endif

    </div>

    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Category</th>
                <th>Short Description</th>
                <th>Status</th>

                @if (auth()->user()->role != 'user')

                  <th>Action</th>
                @endif


            </tr>
        </thead>
         <tbody>

            @foreach ($blogs as $cat)

            <tr class="userItem">
                <th scope="row"> {{ $loop->index + 1 }}</th>
                <td><img style="height: 50px;width: 50px; border-radius: 10px; object-fit: cover" src="{{ asset('uploads/blogs/')}}/{{$cat['image']}}" alt="">

                    </td>
                <td>{{$cat['title']}} </td>
                <td>{{$cat['slug']}} </td>
                <td>{{$cat->onecategory["title"]}} </td>
                <td>{{$cat['short_description']}} </td>

                @if (auth()->user()->role != 'user')


                <td >

                    <div class="custom-control custom-switch">
                        <input {{$cat['status'] == 'active' ? 'checked' : ''}} onchange="statusfire({{$cat['id']}},event)" type="checkbox" class="custom-control-input" id="customSwitch1{{$cat['id']}}">
                        <label class="custom-control-label status-text" for="customSwitch1{{$cat['id']}}"> {{ $cat['status']}}</label>
                      </div>

                </td>
                <td>



                    <a href="{{ route('blog.edit', $cat['id']) }}"  class="btn-icon btn-icon-only btn btn-success"><i class="fas fa-edit btn-icon-wrapper"> </i></a>
                    <button onclick="delfire({{$cat['id']}}, '{{$cat['title']}}' , '{{ route('blog.delete', $cat['id'])}}')" class="   btn-icon btn-icon-only btn btn-warning"><i class="fas fa-trash btn-icon-wrapper"> </i></button>



                </td>
            </tr>

            @endif

            @endforeach

        </tbody>
    </table>







@endsection

@section('script')


@if (session('success'))

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    console.log("heello")
   Swal.fire({
    position: "center-center",
    icon: "success",
    title: "{{ session('success')}}",
    showConfirmButton: false,
    timer: 2000
    });

</script>
@endif

<script>
    function statusfire(id, e){
    let status_text = e.target.parentNode.querySelector('.status-text')
    console.log('changing status')
  //  let to = e.target
    console.log(e.target.checked)

    let to = ''

    if(e.target.checked == true){
        to = 'active';

    }else{
        to = 'deactive'


    }
    status_text.innerHTML = to

    const data = {  id , to };

fetch('/blog/status/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
      'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify(data)
  })

  .then(response => response.json())
  .then(data => {
    console.log('Success:', data);
   // window.location.href = data.redirect;

    //showItems('all')

  Swal.fire({
  position: "center-center",
  icon: "success",
  title: `Status updated`,
  showConfirmButton: false,
  timer: 2000
  });
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}

function delfire(id, name , route){

console.log("fireing")
console.log(route, id, name)
//  let route = ` route('user.manage.delete' , ${id})`
//  let route2 =  route
// console.log(route2)
Swal.fire({
 title: "<strong>Delete Blog</strong>",
 icon: "info",
 html: `
   remove - ${name} ? <br> pore ferot anar upai nai !!
   <div class="mt-3 ">
          <a href="${route}"  class="btn-wide btn btn-lg btn-primary"><i class="fas fa-check  btn-icon-wrapper mr-2"> </i> Confirm</a>
          <button onclick="closeAlert()" class="  btn-wide  btn btn-lg btn-warning"><i class="fas fa-undo  btn-icon-wrapper mr-2"> </i> Cancel</button>
   </div>
 `,
 showCloseButton: true,
 showConfirmButton: false,
});
}


</script>
</script>

@endsection

@extends('layouts.dashmaster')

@section('content')
<div class="d-flex mb-4 mt-3  align-items-center">
    <h1 class="mr-4">Category Management</h1>

    @if (auth()->user()->role != 'user' )

    <a href="{{ route('category.create') }}" class="mb-2  mt-2 btn-icon btn btn-lg  btn-primary" style="width: fit-content"><i class="pe-7s-plus btn-icon-wrapper"> </i>Create Category</a>
    @endif

    </div>

    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Status</th>

                @if (auth()->user()->role != 'user')

                  <th>Action</th>
                @endif


            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $cat)

            <tr class="userItem">
                <th scope="row"> {{ $loop->index + 1 }}</th>
                <td><img style="height: 50px;width: 50px; border-radius: 10px; object-fit: cover" src="{{ asset('uploads/categories/')}}/{{$cat['image']}}" alt="">

                    </td>
                <td>{{$cat['title']}} </td>
                <td>{{$cat['slug']}} </td>

                @if (auth()->user()->role != 'user')


                <td >

                    <div class="custom-control custom-switch " onclick="">
                        <input {{$cat['status'] == 'active' ? 'checked' : ''}} onchange="statusfire({{$cat['id']}},event)" type="checkbox" class="custom-control-input" id="customSwitch1{{$cat['id']}}">
                        <label class="custom-control-label status-text" for="customSwitch1{{$cat['id']}}"> {{ $cat['status']}}</label>
                    </div>

                </td>
                <td>



                    <a href="{{ route('category.edit', $cat['id']) }}"  class="btn-icon btn-icon-only btn btn-success"><i class="fas fa-edit btn-icon-wrapper"> </i></a>
                    <button onclick="delfire({{$cat['id']}}, '{{$cat['title']}}' , '{{ route('category.destroy', $cat['id']) }}')" class="   btn-icon btn-icon-only btn btn-warning"><i class="fas fa-trash btn-icon-wrapper"> </i></button>

                    {{-- <form action="{{ route('category.edit', $cat['id']) }}" method="POST">
                        @csrf


                         <button type="submit" class="   btn-icon btn-icon-only btn btn-warning"><i class="fas fa-trash btn-icon-wrapper"> </i></button>
                    </form> --}}
                </td>
            </tr>

            @endif

            @endforeach

        </tbody>
    </table>







@endsection

@section('script')


@if (session('success_cat'))

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    console.log("heello")
   Swal.fire({
    position: "center-center",
    icon: "success",
    title: "{{ session('success_cat')}}",
    showConfirmButton: false,
    timer: 2000
    });

</script>
@endif

<script>
function delfire(id, name , route){

console.log("fireing")
console.log(route, id, name)
//  let route = ` route('user.manage.delete' , ${id})`
//  let route2 =  route
// console.log(route2)
Swal.fire({
 title: "<strong>Delete Category</strong>",
 icon: "info",
 html: `
   remove category ${name} ? <br> pore ferot anar upai nai !!
   <div class="mt-3 ">
          <a href="${route}"  class="btn-wide btn btn-lg btn-primary"><i class="fas fa-check  btn-icon-wrapper mr-2"> </i> Confirm</a>
          <button onclick="closeAlert()" class="  btn-wide  btn btn-lg btn-warning"><i class="fas fa-undo  btn-icon-wrapper mr-2"> </i> Cancel</button>
   </div>
 `,
 showCloseButton: true,
 showConfirmButton: false,
});
}




   function closeAlert(){
    console.log('closing')
    Swal.close();
}

function statusfire(id, e){
    console.log(e.target.parentNode)
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

fetch('/category/status/', {
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
</script>
@endsection

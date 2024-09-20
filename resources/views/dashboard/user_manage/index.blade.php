

@extends('layouts.dashmaster');

@section('content')




<div class="d-flex mb-4 mt-3  align-items-center">
<h1 class="mr-4">User Management</h1>

@if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')

<a href="{{ route('user_manage.create') }}" class="mb-2  mt-2 btn-icon btn btn-lg  btn-primary" style="width: fit-content"><i class="pe-7s-plus btn-icon-wrapper"> </i>Create User</a>
@endif

</div>
<div class="card-body">
   <div class="d-flex mb-4 align-items-center">
    <h3 class="bold mr-4">All Users</h3>

    @if (auth()->user()->role == 'admin')

    <div role="group" class="mb-2 btn-group-lg btn-group btn-group-toggle" data-toggle="buttons">
        <label class="btn btn-outline-info active all-role-btn" onclick="showItems('all')">
            <input type="radio" name="options" id="option176" autocomplete="off" checked=""> All Roles
        </label>
        <label class="btn btn-outline-info"  onclick="showItems('manager')">
            <input type="radio" name="options" id="option177" autocomplete="off" checked=""> Manager
        </label>
        <label class="btn btn-outline-info"  onclick="showItems('blogger')">
            <input type="radio" name="options" id="option188" autocomplete="off" checked=""> Blogger
        </label>
        <label class="btn btn-outline-info "  onclick="showItems('user')">
            <input type="radio" name="options" id="option199" autocomplete="off" checked=""> User
        </label>
        <label class="btn btn-outline-info "  onclick="blockShow()">
            <input type="radio" name="options" id="option200" autocomplete="off" checked=""> Blocked
        </label>
    </div>
    @endif
   </div>
    <table class="mb-0 table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>

                @if (auth()->user()->role == 'admin')
                  <th>Role</th>
                  <th>Action</th>
                @endif


            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)

            <tr class="userItem">
                <th scope="row"> {{ $loop->index + 1 }}</th>
                <td><img style="height: 50px;width: 50px; border-radius: 10px; object-fit: cover" src="{{ asset('uploads/profiles/')}}/{{$user['image']}}" alt="">

                    </td>
                <td>{{$user['name']}} </td>
                <td>{{$user['email']}} </td>

                @if (auth()->user()->role == 'admin')


                <td >

                    @if ($user['role'] == 'admin')
                    <form action="" method="GET" >
                        <select style="width: 250px" type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                            <option value="admin" selected>ADMIN</option>

                        </select>
                      </form>
                    @else
                    <form action="" method="GET" onchange="roleAssignfire(event,'{{$user['id']}}', `{{$user['role']}}` , '{{$user['name']}}')">
                        <select style="width: 250px" type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                            <option value="manager" {{$user['role'] == 'manager' ? 'selected' : ''}}>Manager</option>
                            <option value="blogger" {{$user['role'] == 'blogger' ? 'selected' : ''}} >Blogger</option>
                            <option value="user" {{$user['role'] == 'user' ? 'selected' : ''}} >User</option>

                        </select>
                      </form>
                    @endif



                </td>
                <td>

                    @if ($user['role'] == 'admin')
                        <p>no action on admin</p>
                    @else

                    <a href="{{ route('user.manage.edit.page', $user['id']) }}"  class="btn-icon btn-icon-only btn btn-success"><i class="fas fa-edit btn-icon-wrapper"> </i></a>
                    <button onclick="delfire({{$user['id']}}, '{{$user['name']}}' , '{{ route('user.manage.delete', $user['id'])}}')" class="   btn-icon btn-icon-only btn btn-warning"><i class="fas fa-trash btn-icon-wrapper"> </i></button>
                    <button  onclick="blockfire({{$user['id']}}, '{{$user['name']}}' , '{{ route('user.manage.block', $user['id'])}}' , '{{$user['block']}}')" class="   btn-icon btn-icon-only btn btn-warning">
                        <i class="{{$user['block'] ? "fa-unlock" : "fa-ban" }}  fas   btn-icon-wrapper"> </i>
                    </button>

                    @endif
                </td>
            </tr>

            @endif

            @endforeach

        </tbody>
    </table>

</div>

@if (session('success_user'))

 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    console.log("heello")
   Swal.fire({
    position: "center-center",
    icon: "success",
    title: "{{ session('success_user')}}",
    showConfirmButton: false,
    timer: 2000
    });

</script>
@endif



<script>
    function delfire(id, name , route){

 console.log("fireing")
 console.log(route)
//  let route = ` route('user.manage.delete' , ${id})`
//  let route2 =  route
 // console.log(route2)
Swal.fire({
  title: "<strong>Delete User</strong>",
  icon: "info",
  html: `
    remove user ${name} ? <br> pore ferot anar upai nai !!
    <div class="mt-3 ">
           <a href="${route}"  class="btn-wide btn btn-lg btn-primary"><i class="fas fa-check  btn-icon-wrapper mr-2"> </i> Confirm</a>
           <button onclick="closeAlert()" class="  btn-wide  btn btn-lg btn-warning"><i class="fas fa-undo  btn-icon-wrapper mr-2"> </i> Cancel</button>
    </div>
  `,
  showCloseButton: true,
  showConfirmButton: false,
 // showCancelButton: true,
//   focusConfirm: false,
//   confirmButtonText: `
//     <i class="fa fa-thumbs-up"></i> Great!
//   `,
//   confirmButtonAriaLabel: "Thumbs up, great!",
//   cancelButtonText: `
//     <i class="fa fa-thumbs-down"></i>
//   `,
//   cancelButtonAriaLabel: "Thumbs down"
});
    }
    function blockfire(id, name , route , status){

        let  status_text = "Block";

        if(status == true) {
            status_text = "Unblock"
        }

 console.log("fireing")
 console.log(route)
//  let route = ` route('user.manage.delete' , ${id})`
//  let route2 =  route
 // console.log(route2)
Swal.fire({
  title: `<strong>${status_text} User</strong>`,
  icon: "info",
  html: `
    ${status_text} user : ${name}
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
function confirmAlert(){
    console.log("working on it");
    Swal.fire({
    position: "center-center",
    icon: "success",
    title: "Kaj hoye gese !",
    showConfirmButton: false,
    timer: 1200
});




}



function showItems(role){
    console.log(role);

    if(role == 'all'){

    }

    let allusers = document.querySelectorAll('.userItem')
    for(var i = 0; i < allusers.length; i++){

        let user = allusers[i];
        let userRole = user.querySelector('select').value


        if(role == userRole){
           user.style.display = 'table-row';
           console.log(true)
        }else  if(role == 'all'){
            user.style.display = 'table-row';
        }
        else{
            user.style.display = 'none'
         console.log(false)
        }



    }


}

function blockShow(){
    console.log('block showing')
    let allusers = document.querySelectorAll('.userItem')
    for(var i = 0; i < allusers.length; i++){

        let user = allusers[i];


        let block = user.querySelector('.fa-unlock')

        if(block){
            user.style.display = 'table-row';

        }else{
            user.style.display = 'none';

        }
}
}

function roleAssignfire(e, id ,current , name){
    console.log(id ,current , name , e.target.value)
    let newRole = e.target.value

    Swal.fire({
title: `<strong>Update User Role</strong>`,
icon: "info",
html: `
<h3> user : ${name} Assign role form ${current} to ${newRole} </h3>
<div class="mt-3 ">
   <button  onclick="sendAssignData(${id}, '${newRole}')"  class="btn-wide btn btn-lg btn-primary"><i class="fas fa-check  btn-icon-wrapper mr-2"> </i> Confirm</button>
   <button onclick="closeAlert()" class="  btn-wide  btn btn-lg btn-warning"><i class="fas fa-undo  btn-icon-wrapper mr-2"> </i> Cancel</button>
</div>
`,
showCloseButton: true,
showConfirmButton: false,
});



}
// function roleAssignfire(e, id, current, name){

// console.log("fireing role assing")
// console.log(id)
// console.log(current)
// console.log(e.target.value)
// let newRole = e.target.value
// //  let route = ` route('user.manage.delete' , ${id})`
// //  let route2 =  route
// // console.log(route2)
// Swal.fire({
// title: `<strong>Update User Role</strong>`,
// icon: "info",
// html: `
// <h3> user : ${name} Assign role form ${current} to ${newRole} </h3>
// <div class="mt-3 ">
//    <a  onclick="sendAssignData(${id}, ${newRole})"  class="btn-wide btn btn-lg btn-primary"><i class="fas fa-check  btn-icon-wrapper mr-2"> </i> Confirm</a>
//    <button onclick="closeAlert()" class="  btn-wide  btn btn-lg btn-warning"><i class="fas fa-undo  btn-icon-wrapper mr-2"> </i> Cancel</button>
// </div>
// `,
// showCloseButton: true,
// showConfirmButton: false,
// });
// }

function sendAssignData(id , role){
  console.log(id, role)

  const data = {  id,  role };

  fetch('/user_manage/user/role', {
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

     closeAlert()
     //showItems('all')
     let allRolesBtn = document.querySelector(".all-role-btn")
     allRolesBtn.click()

    Swal.fire({
    position: "center-center",
    icon: "success",
    title: `Role updated to ${role}`,
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












{{--

@if(session()->has('user_logged_in'))
    <script>
        function greetUser() {
            alert("Welcome, {{ session('user_name') }}!");
        }
        greetUser();
    </script>
@endif@if (session('success_user'))

<script>
    console.log('done');
    Swal.fire({
    position: "center-center",
    icon: "success",
    title: msg,
    showConfirmButton: false,
    timer: 1200
    });
  //  registerSuccess('successful');
</script>

<div class="alert alert-primary fade show" role="alert">{{ session('success_user')}} !</div>

@endif --}}

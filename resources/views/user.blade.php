@extends('layout.master')
@include('components.nav')

<div class="container wow fadeInUp my-4">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="section-title">Users</h2>
            <a href="{{route('createUser')}}"><button class="btn btn-dark mt-4">Add</button></a>
            <div class="section-title-divider"></div>
          </div>
        </div>
      </div>
      <section id="myMessages" class="wow fadeInRight py-5">
        <div class="container text-center">
            <div>
                <table class="table table-striped">
                    <thead class="bg-dark">
                        <tr>
                            <th scope="col" class="text-center text-white">Name</th>
                            <th scope="col" class="text-center text-white">Age</th>
                            <th scope="col" class="text-center text-white">Email</th>
                            <th scope="col" class="text-center text-white">Password</th>
                            <th scope="col" class="text-center text-white">Avatar</th>
                            <th scope="col" class="text-center text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach ($users as $user)
                            
                            <tr>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->age}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">{{$user->password}}</td>
                                @foreach ($avatars as $avatar)
                                    @if ($user->id_avatar == $avatar->id) 
                                        <td class="text-center"><img class="w-25" src="{{asset("storage/".$avatar->image)}}" alt=""></td>
                                    @endif
                                @endforeach
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('editUser', $user->id)}}" title="Edit">
                                        <i class="text-warning fa-2x fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('deleteUser', $user->id)}}" title="Delete">
                                        <i class="text-danger fa-2x fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    
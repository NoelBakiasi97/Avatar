@extends('layout.master')
@include('components.nav')

<div class="container wow fadeInUp my-4">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="section-title">Avatars</h2>
            @if (count($avatars)<5)
                <a href="{{route('createAvatar')}}"><button class="btn btn-dark mt-4">Add</button></a>
            @endif
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
                            <th scope="col" class="text-center text-white">Image</th>
                            <th scope="col" class="text-center text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($avatars as $avatar)

                            <tr>
                                <td class="text-center">{{$avatar->name}}</td>
                                <td class="text-center"><img class="w-25" src="{{asset("storage/".$avatar->image)}}" alt=""></td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('editAvatar', $avatar->id)}}" title="Edit">
                                        <i class="text-warning fa-2x fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('deleteAvatar', $avatar->id)}}" title="Delete">
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
    
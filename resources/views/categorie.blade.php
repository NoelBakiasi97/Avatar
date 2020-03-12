@extends('layout.master')
@include('components.nav')

<div class="container wow fadeInUp my-4">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="section-title">Categories</h2>
            <a href="{{route('createCategorie')}}"><button class="btn btn-dark mt-4">Add</button></a>
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
                            <th scope="col" class="text-center text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                       @foreach ($categories as $categorie)
                           
                            <tr>
                                <td class="text-center">{{$categorie->name}}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{route('editCategorie', $categorie->id)}}" title="Edit">
                                        <i class="text-danger fa-2x fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('deleteCategorie', $categorie->id)}}" title="Delete">
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
    
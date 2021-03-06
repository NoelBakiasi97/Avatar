@extends('layout.master')
@include('components.nav')

<div class="container wow fadeInUp my-4">
        <div class="row text-center">
          <div class="col-md-12">
            <h2 class="section-title">Images</h2>
            <a href="{{route('createImage')}}"><button class="btn btn-dark mt-4">Add</button></a>
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
                            <th scope="col" class="text-center w-50 text-white">Image</th>
                            <th scope="col" class="text-center text-white">Categorie</th>
                            <th scope="col" class="text-center text-white">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                        
                            <tr>
                                <td class="text-center"><img class="w-25" src="{{asset("storage/".$image->image)}}" alt=""></td>
                                @foreach ($categories as $categorie)
                                    @if ($image->id_categories == $categorie->id)
                                        <td class="text-center">{{$categorie->name}}</td>
                                    @endif
                                @endforeach
                                <td class="d-flex justify-content-around">
                                    <a href="{{route('editImage', $image->id)}}" title="Edit">
                                        <i class="text-warning fa-2x fas fa-edit"></i>
                                    </a>
                                    <a href="{{route('deleteImage', $image->id)}}" title="Delete">
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
    
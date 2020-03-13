@extends('layout.master')
@include('components.nav')

<section id="myMessages" class="wow fadeInRight py-5">
    <div class="d-flex justify-content-center mb-5">
        <a href="{{route('categorie')}}"><button class="btn btn-primary">Categories</button></a>
    </div>
    <div class="text-center mb-4"><h3>{{$categories->name}}</h3></div>
    <div class="container text-center">
        <div>
            <table class="table table-striped">
                <thead class="bg-dark">
                    <tr>
                        <th scope="col" class="text-center w-50 text-white">Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                    
                        <tr>
                            <td class="text-center"><img class="w-25" src="{{asset("storage/".$image->image)}}" alt=""></td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
    
@extends('layout.master')
@include('components.nav')
    <section id="contact" class="section-bg wow fadeInUp py-5 ">
    <div class="text-center my-5">
        <h4>Edit image</h4>
    </div>
    <div class="container">
        {{-- <section class="form py-5 mt-5 container"> --}}
        <form action="{{route('updateImage', $images->id)}}" method="POST" class="contactForm " enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                    value="@if($errors->first('image')) @else {{old('image')}} @endif"/>
                    @error('image')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">
                    <input type="text" name="id_categorie" class="form-control @error('id_categorie') is-invalid @enderror" id="id_categorie"
                    value="@if($errors->first('id_categorie')) @else {{old('id_categorie')}} @endif"/>
                        @error('id_categorie')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">
                    <label for="id_categories"></label>
                    <select name="id_categories" id="id_categories">
                        @foreach ($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="text-center ">
                <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Update</button>
            </div>

            {{-- <a href="{{route('books.download', $book->id) }}" class="btn btn-outline-warning">Download</a> --}}
        </form>
    </div>
</section>
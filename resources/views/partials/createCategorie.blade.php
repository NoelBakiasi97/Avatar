@extends('layout.master')
@include('components.nav')
    <section id="contact" class="section-bg wow fadeInUp py-5 ">
    <div class="text-center my-5">
        <h4>Create categorie</h4>
    </div>
    <div class="container">
        {{-- <section class="form py-5 mt-5 container"> --}}
        <form action="{{route('saveCategorie')}}" method="POST" class="contactForm " enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name"
                    value="@if($errors->first('name')) @else {{old('name')}} @endif"/>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="validation"></div>
                </div>

            </div>

            <div class="text-center ">
                <button type="sumbit" class="btn btnModal btn-dark mx-auto mt-4 modalBtn">Add</button>
            </div>

            {{-- <a href="{{route('books.download', $book->id) }}" class="btn btn-outline-warning">Download</a> --}}
        </form>
    </div>
</section>
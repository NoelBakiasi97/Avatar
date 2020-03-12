@extends('layout.master')
@include('components.nav')
    <section id="contact" class="section-bg wow fadeInUp py-5 ">
    <div class="text-center my-5">
        <h4>Edit User</h4>
    </div>
    <div class="container">
        {{-- <section class="form py-5 mt-5 container"> --}}
        <form action="{{route('updateUser', $users->id)}}" method="POST" class="contactForm " enctype="multipart/form-data">
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

                <div class="form-group col-md-6">
                    <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" id="age"
                 value="@if($errors->first('age')) @else {{old('age')}} @endif"/>
                        @error('age')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                 value="@if($errors->first('email')) @else {{old('email')}} @endif"/>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="validation"></div>
                </div>

                <div class="form-group col-md-6">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                     value="@if($errors->first('password')) @else {{old('password')}} @endif"/>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        <div class="validation"></div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="id_avatar"></label>
                        <select name="id_avatar" id="id_avatar">
                            @foreach ($avatars as $avatar)
                                <option value="{{$avatar->id}}">{{$avatar->name}}</option>
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
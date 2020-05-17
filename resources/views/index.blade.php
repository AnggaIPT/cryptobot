@extends('layouts.main')
@section('content')
    <div class="d-flex container py-5 mt-5">
        <div class="bg-transparent border-0 rounded-0 w-100">
            <div class="card-header bg-transparent border-0 text-center">
               <h1 class="display-3">🤖 Cryptobot</h1>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="d-flex justify-content-center">
                    <a href="{{route('caesar.index')}}" class="btn btn-red mx-2 shadow">Caesar chiper</a>
                    <a href="{{route('vigenere.index')}}" class="btn btn-yellow mx-2 shadow ">Vigenere chiper</a>
                    <a href="#" class="btn btn-blue mx-2 shadow">Vernam chiper</a>
                </div>
            </div>
        </div>
    </div>
@endsection


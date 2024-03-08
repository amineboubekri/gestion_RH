@extends('master.layout')

@section('title')
    Bienvenu
@endsection
@section('content')
    <br>
    <div class="row my-4" align="center">
        <div class="col-md-8 mx-auto my-4">
            <h1>
            @if(auth()->check())    
            Bonjour {{ auth()->user()->name }}
            @else
            Bonjour utilisateur
            @endif
            </h1>
        </div>
    </div>   
    <div class="profile-photo-container">
        @auth
            <div class="profile-photo">
            <a href="{{ route('profile.show') }}" ><img src="{{ auth()->user()->profile_photo_url }}" alt="Profile Photo"></a>    
            </div>
        @endauth
    </div>
    <div class="card-container">
        <div class="card">
            <h2><i class="fas fa-users"></i> Nombre d'employés</h2>
            <p>{{ $nombreEmployes }}</p>
            <a href="{{ route('empl.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>

        <div class="card">
            <h2><i class="fas fa-calendar"></i> Nombre de congés</h2>
            <p>{{ $nombreConges }}</p>
            <a href="{{ route('conge.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>

        <div class="card">
            <h2><i class="fas fa-exchange-alt"></i> Nombre de mutations</h2>
            <p>{{ $nombreMutations }}</p>
            <a href="{{ route('mutation.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>

        <div class="card">
            <h2><i class="fas fa-bed"></i> Nombre d'absences</h2>
            <p>{{ $nombreAbsence }}</p>
            <a href="{{ route('absence.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>
  
        <div class="card">
            <h2><i class="fas fa-hand-holding-usd"></i> Nombre d'allocations familiales</h2>
            <p>{{ $nombreAllocation }}</p>
            <a href="{{ route('allocation.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>

        <div class="card">
            <h2><i class="fas fa-briefcase"></i> Nombre de missions</h2>
            <p>{{ $nombreMission }}</p>
            <a href="{{ route('mission.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>

        <div class="card">
            <h2><i class="fas fa-lightbulb"></i> Nombre de motivations</h2>
            <p>{{ $nombreMotivation }}</p>
            <a href="{{ route('motivation.list') }}" class="btn btn-primary">Voir la liste</a>
        </div>


        </div>

        
    </div>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d750.9005642597361!2d-4.4277236748169155!3d31.92805586755305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd984a9010784519%3A0xc4c321c3925b750!2sD%C3%A9l%C3%A9gation%20r%C3%A9gionale%20et%20provincial%20de%20transport%20et%20logistique!5e1!3m2!1sfr!2sma!4v1707754743456!5m2!1sfr!2sma" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection

<style>
    .my-4 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    h1 {
        color: #008080;
        font-size: 3rem;
    }

    h2 {
        color: #333;
        font-size: 2.5rem;
    }

    p {
        color: #666;
        font-size: 1.5rem;
        line-height: 2rem;
    }
    
    body {
        background-image: {{ asset('./uploads/téléchargement.jpg') }};
        background-repeat: no-repeat;
        background-size: cover;
    }

    .profile-photo-container {
        position: absolute;
        top: 50px;
        right: 20px;
        display: flex;
        align-items: center;
    }

    .profile-photo img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .profile-photo h5 {
        color: #333;
        font-size: 1.5rem;
        margin: 0;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .card {
        background-color: #007bff;
        color: #ffffff;
        border-radius: 5px;
        padding: 20px;
        margin-bottom: 20px;
        flex-basis: calc(33.33% - 20px); /* To display 3 cards per row */
    }

    .card h2 {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .card p {
        font-size: 16px;
    }

    .card a {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 16px;
        background-color: #ffffff;
        color: #007bff;
        border-radius: 4px;
        text-decoration: none;
    }

    .card a:hover {
        background-color: #007bff;
        color: #ffffff;
    }
    .map{
        display: grid;
    place-items: center;
    }
</style>

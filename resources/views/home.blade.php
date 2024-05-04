@extends('layouts.main')

@section('content')
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url({{ asset('external/images/hero_2.jpg') }});">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Home - favoritos</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="{{ route('alljobs') }}">Jobs</a> </span> <span><span class="sep m-0"> ></span> Panel</span></p>
  </div>
</div>

<div class="site-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <h1>Bienvenido {{ Auth::user()->name }}</h1> 
            <p>Name:  <strong class="badge badge-primary">{{ Auth::user()->name }}</strong></p>
            <p>Email: <strong class="badge badge-primary">{{ Auth::user()->email }}</strong> </p>
            <span><a href="/jobs/alljobs" class="btn btn-primary pill text-white ml-4">Ir a buscar Chamba</a></span> <br><br>

<!-- 
            <div class="col-md-10">
                <h6 class="text-black mb-3">
                    <i class="icon-users" style="color: #de1084;">&nbsp;</i>
                    Mis trabajos guardados <span style="display: inline-block; transition: transform 0.3s ease-in-out; transform: scale(1.1);">o</span>
                </h6>
                <h6 class="text-black mb-3">
                    <i class="icon-users" style="color: #de1084;">&nbsp;</i>
                    Mis postulaciones <span style="display: inline-block; transition: transform 0.3s ease-in-out; transform: scale(1.1);">o</span>
                </h6>
                <hr style="border: 0; height: 2px; background-color: #de1084;">
                @if (Auth::user()->user_type=='seeker')
                    @foreach ($jobs as $job)
                        <div class="card mb-3">
                            
                            <div class="card-header"><h5>Job title: {{ $job->title }}</h5></div>

                            <div class="card-body">
                                <small class="badge bg-secondary badge-primary mb-2">Job position: {{ $job->position }}</small>
                                <p>Description: {{ $job->description }}</p>
                            </div>
                            <div class="card-footer">
                                <span><a href="{{ route('job.show', [$job->id, $job->slug]) }}" class="btn-sm btn btn-primary">View job</a></span>
                                <span class="float-end">Last date : {{ $job->last_date }}</span>
                            </div>
                        </div>
                    @endforeach

                @endif
            </div> -->
            <div class="container">
    <div class="row">
        <!-- Columna izquierda: Mis trabajos guardados -->
        <div class="col-md-6">
            <h6 class="text-black mb-3">
                <i class="icon-heart" style="color: #de1084;">&nbsp;</i>
                Mis trabajos guardados <span style="display: inline-block; transition: transform 0.3s ease-in-out; transform: scale(1.1);"></span>
            </h6>
            <hr style="border: 0; height: 2px; background-color: #de1084;">
            <!-- Contenido de "Mis trabajos guardados" -->
            @if (Auth::user()->user_type == 'seeker')
                @foreach ($jobs as $job)
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5>Job title: {{ $job->title }}</h5>
                        </div>
                        <div class="card-body">
                            <small class="badge bg-secondary badge-primary mb-2">Job position: {{ $job->position }}</small>
                            <p>Description: {{ $job->description }}</p>
                        </div>
                        <div class="card-footer">
                            <span>
                                <a href="{{ route('job.show', [$job->id, $job->slug]) }}" class="btn-sm btn btn-primary">View job</a>
                            </span>
                            <span class="float-end">Last date: {{ $job->last_date }}</span>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- Columna derecha: Mis postulaciones -->
        <div class="col-md-6">
            <h6 class="text-black mb-3">
                <i class="icon-file-alt" style="color: #244a09;">&nbsp;</i>
                Mis CV. <span style="display: inline-block; transition: transform 0.3s ease-in-out; transform: scale(1.1);"><a href="{{ route('user.profile') }}" class="btn btn-primary pill text-white ml-4">Actualizar</a></span>
            </h6>
            <hr style="border: 0; height: 2px; background-color: #de1084;">
            <!-- Aquí puedes agregar el contenido de "Mis postulaciones" -->
            <!-- Reemplaza este comentario con el código para mostrar las postulaciones del usuario -->
            @if (!empty(Auth::user()->profile->resume))
                <h6>Previsualización de CV:</h6>
                <iframe src="{{ url('storage/' . Auth::user()->profile->resume) }}" style="width:100%; height:500px;" frameborder="0"></iframe>
            @endif

<!--                         @if (!empty(Auth::user()->profile->cover_letter))
                            <h4>Previsualización de carta de presentación:</h4>
                            <iframe src="{{ url('storage/' . Auth::user()->profile->cover_letter) }}" style="width:100%; height:500px;" frameborder="0"></iframe>
                        @endif -->

               

        </div>
    </div>
</div>



        </div>
    </div>
</div>
@endsection

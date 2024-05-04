@extends('layouts.main')

@section('content')
<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url({{ asset('external/images/hero_2.jpg') }});">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Mis Postulaciones</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="{{ route('alljobs') }}">Trabajo</a> </span> <span><span class="sep m-0"> ></span> Mis Postulaciones</span></p>
  </div>
</div>

<div class="site-section bg-light">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mis Postulaciones</div>

                <div class="card-body">
               
                    @if(is_null($applications) || $applications->isEmpty())
                    <p>No tienes postulaciones.</p>
                    @else
                   <!--  <ul>
                        @foreach($applications as $application)
                        <li>
                            <h5>{{ $application->title }}</h5>
                            <p>{{ $application->description }}</p> Agrega aquí más detalles de la postulación si es necesario 
                        </li>
                        @endforeach
                    </ul> -->
                        @foreach ($applications as $application)
                            <div class="card mb-3">
                                
                                <div class="card-header"><h5>Empleo: {{ $application->title }}</h5></div>

                                <div class="card-body">
                                    <small class="badge bg-secondary badge-primary mb-2">Puesto de trabajo: {{ $application->position }}</small>
                                    <p>Descripcion: {{ $application->description }}</p>
                                </div>
                                <div class="card-footer">
                                    <span><a href="{{ route('job.show', [$application->id, $application->slug]) }}" class="btn-sm btn btn-primary">Ver Trabajo</a></span>
                                    <span class="float-end">Ultimo dia de postulacion: {{ $application->last_date }}</span>
                                </div>
                            </div>
                        @endforeach
                    
                    @endif
               
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

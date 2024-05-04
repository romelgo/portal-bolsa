@extends('layouts.main')

@section('content')


<div style="height: 94px;"></div>

<div class="unit-5 overlay" style="background-image: url({{ asset('external/images/hero_2.jpg') }});">
  <div class="container text-center">
    <h1 class="mb-0" style="    color: #fff;
    font-size: 2.5rem;">Todos los trabajos</h1>
    <p class="mb-0 unit-6"><a href="/">Home</a> <span class="sep"> > <a href="{{ route('alljobs') }}">Jobs</a> </span> <span><span class="sep m-0"> ></span> Jobs</span></p>
  </div>
</div>


<div class="site-section bg-light">
    <div class="container">
      <div class="row mb-3">
        <div class="col-lg-12">
          <search-component></search-component>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Empleos recientes</h2>
            <div class="jobs-wrap" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px;">

              @foreach ($jobs as $job)
                  <a href="{{ route('job.show', [$job->id, $job->slug]) }}" 
                      class="job-item d-block border p-3 border: 1px solid red" 
                      style="border: 1px solid #358fdc; transition: border-color 0.3s, transform 0.3s; display: flex; flex-direction: column; align-items: center; text-align: center;"
                      onmouseover="this.style.borderColor = '#007BFF'; this.style.transform = 'scale(1.05)';" 
                      onmouseout="this.style.borderColor = 'transparent'; this.style.transform = 'scale(1.0)';">
                      
                      @if ($job->company->logo ?? '')
                          <div class="company-logo text-center mb-2">
                              <img src="{{ asset('/uploads/logo') }}/{{ $job->company->logo ?? '' }}" alt="Image" class="img-fluid mx-auto" style="max-width: 80px; height: auto;">
                          </div>
                      @endif
                      
                      <!-- Ubica la categoría de trabajo justo debajo de la imagen -->
                      <div class="job-category mt-2 mb-3">
                          <span class="p-2 rounded border 
                              @if($job->type == 'fulltime')
                                  text-info border-info
                              @elseif($job->type == 'freelance')
                                  text-warning border-warning
                              @elseif($job->type == 'partime')
                                  text-danger border-danger
                              @elseif($job->type == 'remote')
                                  text-dark border-dark
                              @endif">
                              {{ Str::ucfirst($job->type) }}
                          </span>
                      </div>
                      
                      <div class="job-details" style="display: flex; justify-content: space-between; width: 100%;">
                        <div style="font-size: 0.9rem; color: #6c757d;">
                          <h3 class="mb-2" style="font-size: 1.1rem;">{{ $job->title }}</h3>
                              <div class="mb-1">
                                  <span class="icon-suitcase mr-1"></span> 
                                  {{ Str::limit($job->position, 20) }}
                              </div>
                              <div class="mb-1">
                                  <span class="icon-room mr-1"></span> 
                                  {{ Str::limit($job->address, 20) }}
                              </div>
                              <div>
                                  <span class="icon-money mr-1"></span> 
                                  ${{ $job->salary }}
                              </div>
                              <div>
                             
                                    <i class="icon-users" style="color: #de1084;">&nbsp;</i>
                                    Vacantes Disponibles: <span style="display: inline-block; transition: transform 0.3s ease-in-out; transform: scale(1.1);">{{$job->number_of_vacancy}}</span>
                             
                              </div>
                          </div>
                      </div>
                      
                  </a>
              @endforeach

            </div>
            <div class="col-md-12 text-center mt-5">
                {{ $jobs->links() }}
            </div>
            
      </div>
</div>

    </div>
  </div>








@endsection


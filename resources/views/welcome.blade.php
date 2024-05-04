
    @include('frontend/partials.head')
    @include('frontend/partials.nav')
  
    @include('frontend/partials.hero')
    
    



    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
            <h2 class="mb-5 h3">Trabajos recientes</h2>
            <!-- <div class="rounded border jobs-wrap">

          
              @foreach ($jobs as $job)
            

              <a href="{{ route('job.show', [$job->id, $job->slug]) }}" class="job-item d-block d-md-flex align-items-center  border-bottom  
                
                @if($job->type =='fulltime')         
                fulltime
                @elseif($job->type =='freelance') 
                freelance  
                @elseif($job->type =='partime')   
                partime  
                @elseif($job->type =='remote')   
                remote
                @endif

                ">
                @if ($job->company->logo ?? '')
                <div class="company-logo blank-logo text-center text-md-left pl-3">
                  <img src="{{ asset('/uploads/logo') }}/{{ $job->company->logo  ?? ''}}" alt="Image" class="img-fluid mx-auto">
                </div>
                @endif
                <div class="job-details h-100">
                  <div class="p-3 align-self-center">
                    <h3>{{ $job->title }}</h3>
                    <div class="d-block d-lg-flex">
                      <div class="mr-3"><span class="icon-suitcase mr-1"></span> {{ Str::limit($job->position, 20)}}</div>
                      <div class="mr-3"><span class="icon-room mr-1"></span> {{ Str::limit($job->address, 20)}}</div>
                      <div><span class="icon-money mr-1"></span> ${{ $job->salary }}</div>
                      {{-- <div><span class="icon-eye ml-3 mr-1"></span> ${{ $job->salary }}</div> --}}
                    </div>
                  </div>
                </div>
                <div class="job-category align-self-center">
                  <div class="p-3">
                    <span class=" p-2 rounded border 

                    @if($job->type =='fulltime')         
                    text-info  border-info
                    @elseif($job->type =='freelance') 
                    text-warning   border-warning
                    @elseif($job->type =='partime')   
                    text-danger   border-danger
                    
                    @elseif($job->type =='remote')   
                    text-dark   border-dark
                    @endif
                    
                    ">{{  Str::ucfirst($job->type)}}</span>
                  </div>
                </div>  
              </a>


              @endforeach




            </div> -->
            
              <!--  -->
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
                            </div>
                        </div>
                        
                    </a>
                @endforeach

              </div>



              
            <div class="col-md-12 text-center mt-5">
              <a href="{{ route('alljobs') }}" class="btn btn-primary rounded py-3 px-5"><span class="icon-plus-circle"></span> mostrar mas chamba</a>
            </div>
          </div>
    
        </div>
      </div>
    </div>

    @include('frontend/partials.category')
    @include('frontend/partials.testimonial')

    <div class="site-blocks-cover overlay inner-page" style="background-image: url('external/images/hero_1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center" data-aos="fade">
            <h1 class="h3 mb-0">El trabajo de tus sueños</h1>
            <p class="h3 text-white mb-5">Te está esperando</p>
            <p><a href="/register" class="btn btn-outline-warning py-3 px-4">Usuario</a> <a href="{{ route('employer.register') }}" class="btn btn-warning py-3 px-4">Empresa </a></p>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section site-block-feature bg-light">
      <div class="container">
        
        <div class="text-center mb-5 section-heading">
          <h2>¿Por qué elegirnos?</h2>
        </div>

        <div class="d-block d-md-flex border-bottom">
          <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-worker display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Más empleos cada día</h2>
            <p>Ofrece nuevas oportunidades laborales diariamente. La plataforma conecta a empleadores con candidatos de forma ágil y eficiente, brindando actualizaciones constantes de vacantes en diversos sectores y regiones</p>
            <p><a href="#">Leer mas <span class="icon-arrow-right small"></span></a></p>
          </div>
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-wrench display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Trabajos creativos</h2>
            <p>Es una plataforma ofrece una variedad de ofertas de trabajo, desde freelance hasta posiciones de tiempo completo, para ayudar a los profesionales a conectar con empleadores que buscan talento innovador.</p>
            <p><a href="#">Lear mas <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
        <div class="d-block d-md-flex">
          <!-- <div class="text-center p-4 item border-right" data-aos="fade">
            <span class="flaticon-stethoscope display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Healthcare</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati reprehenderit explicabo quos fugit vitae dolorum.</p>
            <p><a href="#">Lear mas <span class="icon-arrow-right small"></span></a></p>
          </div> -->
          <div class="text-center p-4 item" data-aos="fade">
            <span class="flaticon-calculator display-3 mb-3 d-block text-primary"></span>
            <h2 class="h4">Finanzas &amp; Contabilidad</h2>
            <p>Es una plataforma de empleo enfocada en oportunidades laborales para profesionales de la contabilidad y finanzas. Ofrece una variedad de vacantes en roles como contadores, auditores, analistas financieros, y otros cargos relacionados</p>
            <p><a href="#">Lear mas <span class="icon-arrow-right small"></span></a></p>
          </div>
        </div>
      </div>
    </div>

    

    @include('frontend/partials.blog')


    @include('frontend/partials.footer')

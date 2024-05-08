<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobPostRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class JobController extends Controller
{

    public function __construct()
    {
        $this->middleware(['employer','verified'], ['except'=> array('index', 'show', 'apply', 'allJobs', 'category', 'searchJobs')]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->limit(15)->where('status', 1)->get();


        $companies = Company::inRandomOrder()->take(12)->get();

        // $companies = Company::get()->random(12);

        $posts = Post::where('status', 1)->get();

        $testimonial = Testimonial::where('status', 1)->get()->first();
        $categories = Category::has('jobs')->where('status', 1)->get();
        // $allprosal = Job::has('users')->where('user_id', auth()->user()->id)->get();
        return view('welcome', compact('jobs','companies', 'categories', 'posts', 'testimonial'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JobPostRequest $request)
    {
        $user_id = auth()->user()->id;
        $company = Company::where('user_id', $user_id)->first();
        $company_id = $company->id;



        Job::create([
            'user_id'=> $user_id,
            'company_id'=> $company_id,
            'title' => request('title'),
            'slug' => Str::slug(request('title')),
            'description' => request('description'),
            'roles' => request('roles'),
            'category_id' => request('category'),
            'position' => request('position'),
            'address' => request('address'),
            'type' => request('type'),
            'experience' => request('experience'),
            'number_of_vacancy' => request('number_of_vacancy'),
            'gender' => request('gender'),
            'salary' => request('salary'),
            'last_date' => request('last_date'),
        ]);


        return redirect()->back()->with('success', 'Job posted Successfully.');
    }

    /**
     * Display All jobs.
     */
    public function allJobs(Request $request )
    {
        $title = $request->get('title');
        $type = $request->get('type');
        $category = $request->get('category_id');
        $address = $request->get('address');

        if($title || $type || $category || $address){
            $jobs = Job::where('title', 'LIKE', '%'.$title.'%')
            ->orWhere('type', $type)
            ->orWhere('category_id', $category)
            ->orWhere('address', $address)
            ->paginate(25);

            return view('frontend.jobs.alljobs', compact('jobs'));
        }else{

            $jobs = Job::latest()->paginate(25);
            return view('frontend.jobs.alljobs', compact('jobs'));

        }



    }


    /**
     * Display the specified resource.
     */
    public function show( $id, Job $job)
    {

        $jobRecommendation = $this->jobRecommendation ($job);
        return view('frontend.jobs.show', compact('job', 'jobRecommendation'));
    }

    public function jobRecommendation($job)
{
    $data = [];

    $jobBasedOnCategory = Job::latest()
        ->where('category_id', $job->category_id)
        ->whereDate('last_date', '>', date('Y-m-d')) // Cambiado a 'Y-m-d'
        ->where('id', '!=', $job->id)
        ->where('status', 1)
        ->limit(5)
        ->get();

    array_push($data, $jobBasedOnCategory);

    $jobBasedOnCompany = Job::latest()
        ->where('company_id', $job->company_id)
        ->whereDate('last_date', '>', date('Y-m-d')) // Cambiado a 'Y-m-d'
        ->where('id', '!=', $job->id)
        ->where('status', 1)
        ->limit(5)
        ->get();

    array_push($data, $jobBasedOnCompany);

    $jobBasedOnPosition = Job::latest()
        ->where('position', 'LIKE', '%' . $job->position . '%')
        ->where('status', 1)
        ->limit(5)
        ->get();

    array_push($data, $jobBasedOnPosition);

    // Convertir los datos en una colección
    $collection = collect($data);
    // Eliminar elementos duplicados por ID
    $unique = $collection->unique('id');
    // Obtener la primera colección única
    $jobRecommendation = $unique->flatten()->take(5); // Corregido para que funcione con la colección de trabajos

    return $jobRecommendation;
}




    /**
     * Single company all jobs
     */
    public function myjob()
    {
        $jobs = Job::where('user_id', auth()->user()->id)->get();
        return view('frontend.jobs.myjobs', compact('jobs'));
    }

    public function edit($id){
        $job = Job::findOrFail($id);
        return view('frontend.jobs.edit', compact('job'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return redirect()->back()->with('success', 'Job updated Successfully.');
    }

    /**
     * Job apply method.
     */
   /* otor metodo mierd·· */
   public function apply(Request $request, $id){
        // Encuentra el trabajo al que se está postulando el usuario
        $job = Job::findOrFail($id);

        // Verifica si hay vacantes disponibles
        if ($job->number_of_vacancy > 0) {
            // Agrega la relación entre el trabajo y el usuario
            $job->users()->attach(Auth::user()->id);

            // Resta una vacante del trabajo
            $job->number_of_vacancy -= 1;
            $job->save();

            return redirect()->back()->with('message', 'Trabajo solicitado con éxito.');
        } else {
            return redirect()->back()->with('message', 'No hay vacantes disponibles para este trabajo.');
        }
    }



    // Job applicant method
    public function applicant(){
        $applicants = Job::has('users')->where('user_id', auth()->user()->id)->get();
        return view('frontend.jobs.applicants', compact('applicants'));

    }

    // Search Jobs in
    public function searchJobs(Request $request){


        $keyword = $request->get('keyword');
        $users = Job::where('title','like','%'.$keyword.'%')
                ->orWhere('position','like','%'.$keyword.'%')
                ->orWhere('address','like','%'.$keyword.'%')
                ->get();
        return response()->json($users);

    }

    // Job active/deactive
    public function jobToggle($id){
        $jobtoggle = Job::find($id);
        $jobtoggle->status = !$jobtoggle->status;
        $jobtoggle->save();

        return redirect('/jobs/myjobs')->with('success', 'Status Updated Successfully!');
    }

    // Job Deleted
    public function deleteJob(Request $request, string $id){
        $jobDel = Job::find($id);
        $jobDel->delete();
        return redirect('/jobs/create')->with('success', 'Job Deleted Successfully!');
    }

    public function myApplications() {
        // Obtener todas las postulaciones del usuario actual
        $jobs = Auth::user()->jobs;

        // Devolver la vista con las postulaciones del usuario
        return view('frontend.jobs.applicar', compact('jobs'));
    }

}

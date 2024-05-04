<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
use App\Models\Post;
use App\Models\Role;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::truncate();

        User::factory(10)->create();
        Company::factory(10)->create();
        Job::factory(20)->create();
        Post::factory(5)->create();
        Testimonial::factory(1)->create();

        $categories = [
            'Healthcare',
            'Medical Services',
            'Technology',
            'Software Development',
            'Education',
            'Engineering',
            'Creative and Design',
            'Research and Development',
            'Hospitality and Tourism',
            'Business and Management',
            'Finance and Accounting',
            'Sales and Marketing',
            'Legal Services',
            'Media and Communication',
            'Manufacturing and Production',
            'Transportation and Logistics',
            'Environmental Services',
            'Social Services',
            'Agriculture and Farming',
            'Construction and Skilled Trades'
        ];
        
        
        

        foreach($categories as $category){
            Category::create(
                [
                'name'=> $category, 
                'slug'=> Str::slug($category),
                'status'=> '1'
                ]
            );
        }

        Role::truncate();
        $adminRole = Role::create(['name'=> 'admin']);
        $admin = User::create([
            'name'=> 'admin',
            'email'=> 'romelgutierrez90@gmail.com',
            'user_type'=> 'admin',
            'status'=> '1',
            'password'=> bcrypt('Admin123bolsa'),
            'email_verified_at'=> NOW()
        ]);

        $admin->roles()->attach($adminRole);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

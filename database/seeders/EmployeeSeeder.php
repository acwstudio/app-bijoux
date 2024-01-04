<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Employee::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $employees = Employee::factory()->count(3)->make();

        foreach ($employees as $employee) {
            DB::table('employees')->insert([
                "name" => $employee['name'],
                "email" => $employee['email'],
                "email_verified_at" => $employee['email_verified_at'],
                "password" => $employee['password'],
                "remember_token" => $employee['remember_token']
            ]);
        }
    }
}

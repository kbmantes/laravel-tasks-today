<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTodaySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'full_name' => 'Kenneth Mantes',
            'email' => 'kenneth@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('tasks')->insert([
            [
                'title' => 'Review daily sales report',
                'status' => 'pending',
                'task_date' => today(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Check customer orders',
                'status' => 'completed',
                'task_date' => today(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare inventory list',
                'status' => 'pending',
                'task_date' => today(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Contact supplier',
                'status' => 'pending',
                'task_date' => today()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Update product prices',
                'status' => 'completed',
                'task_date' => today()->subDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Organize receipts',
                'status' => 'pending',
                'task_date' => today()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review staff schedule',
                'status' => 'completed',
                'task_date' => today()->subDays(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Plan next week tasks',
                'status' => 'pending',
                'task_date' => today()->addDay(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

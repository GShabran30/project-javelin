<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BudgetEntry;

class BudgetEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $month = '2026-09-01';

        $buckets = [
        ['bucket_name' => 'Needs',          'amount' => 1000000, 'month' => $month],
        ['bucket_name' => 'Buffer',          'amount' => 500000,  'month' => $month],
        ['bucket_name' => 'Emergency Fund',  'amount' => 500000,  'month' => $month],
        ['bucket_name' => 'Invest',          'amount' => 500000,  'month' => $month],
        ['bucket_name' => 'Free Spend',      'amount' => 1000000, 'month' => $month],
        ['bucket_name' => 'Savings',         'amount' => 500000,  'month' => $month],
        ];

        foreach ($buckets as $bucket){
            BudgetEntry::create($bucket);
        }

        //
    }
}

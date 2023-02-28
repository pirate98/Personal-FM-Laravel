<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        Account::factory()->create([
            'name' => 'Main MPESA',
            'account_number' => '254700000000',
        ]);
    }
}

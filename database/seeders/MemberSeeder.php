<?php

namespace Database\Seeders;

use App\Models\Duration;
use App\Models\Member;
use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::factory()->recycle(Membership::factory()->count(2)->create())->recycle(Duration::factory()->count(4)->create())->count(10)->create();
    }
}

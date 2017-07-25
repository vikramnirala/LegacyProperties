<?php

use Database\traits\TruncateTable;
use Database\traits\DisableForeignKeys;

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $this->truncate('users');

        $users = [
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'phone' => '7351225555',
                'email' => 'admin.laravel@labs64.com',
                'street_address' => '44 Avanue Street',
                'city' => 'Orlando',
                'state' => 'Texas',
                'zip' => '12345',
                'password' => bcrypt('admin'),
                'active' => true,
                'confirmation_code' => \Ramsey\Uuid\Uuid::uuid4(),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Demo',
                'last_name' => 'Demo',
                'phone' => '7351225555',
                'email' => 'demo.laravel@labs64.com',
                'street_address' => '44 Avanue Street',
                'city' => 'Orlando',
                'state' => 'Texas',
                'zip' => '12345',
                'password' => bcrypt('demo'),
                'active' => true,
                'confirmation_code' => \Ramsey\Uuid\Uuid::uuid4(),
                'confirmed' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ];

        DB::table('users')->insert($users);

        $this->enableForeignKeys();
    }
}

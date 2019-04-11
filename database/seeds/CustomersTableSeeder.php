<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new \App\Customer();
        $customer->name = 'Nguyen Van A';
        $customer->email = 'a@gmail.com';
        $customer->city = 'Ha Noi';
        $customer->save();

        $customer = new \App\Customer();
        $customer->name = 'Nguyen Van B';
        $customer->email = 'b@gmail.com';
        $customer->city = 'Ha Noi';
        $customer->save();

        $customer = new \App\Customer();
        $customer->name = 'Nguyen Van C';
        $customer->email = 'c@gmail.com';
        $customer->city = 'Ha Noi';
        $customer->save();
    }
}

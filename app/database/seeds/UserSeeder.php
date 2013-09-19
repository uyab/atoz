<?php

class UserSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'name'     => 'Admin Laravel Indonesia',
            'username' => 'admin',
            'email'    => 'bayu.hendra@javan.co.id',
            'password' => Hash::make('admin'),
        ));
    }

}
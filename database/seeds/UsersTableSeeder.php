<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(User::class)->times(50)->make();
        User::insert($users->makeVisible(['password', 'remember_token'])->toArray());

        $user = User::find(1);
        $user->name = 'owner';
        $user->email = 'owner@szyc.com';
        $user->password = bcrypt('szyc123456789');
        $user->is_admin = true;
        $user->activated = true;
        $user->save();

        $user = User::find(2);
        $user->name = 'guest';
        $user->email = 'guest@szyc.com';
        $user->password = bcrypt('szyc123456789');
        $user->activated = true;
        $user->save();
    }
}

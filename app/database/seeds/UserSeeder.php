<?php
	class UserSeeder extends Seeder {
 
    public function run()
    {
        DB::table('users')->delete();
        $user = User::create(array(
                'id' => 1,
                'username' => 'admin',
                'first_name' => 'Gonzalo',
                'last_name' => 'Rodriguez Salas',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345'),
                'created_at' => new DateTime,
                'updated_at' => new DateTime      
        ));
        $role = Role::where('name', '=', 'admin')->get()->first();
        $user->attachRole( $role );
    }
 
}
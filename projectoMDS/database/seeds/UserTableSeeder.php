<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    //$role_utente = Role::where('name', 'utente')->first();
    //$role_ps = Role::where('name', 'ps')->first();
    //$role_admin = Role::where('name', 'admin')->first();

    $utente = new User();
    $utente->name = 'Utente';
    $utente->email = 'utente@exemplo.com';
    $utente->password = bcrypt('utente');
    //$utente->role = 'utente';
    $utente->save();
    //$utente->roles()->attach($role_utente);

    $ps = new User();
    $ps->name = 'Profissional';
    $ps->email = 'ps@exemplo.com';
    $ps->password = bcrypt('ps');
    //$utente->role = 'ps';
    $ps->save();

    $admin = new User();
    $admin->name = 'Admin';
    $admin->email = 'admin@exemplo.com';
    $admin->password = bcrypt('admin');
    $utente->role = 'admin';
    $admin->save();
  }
}

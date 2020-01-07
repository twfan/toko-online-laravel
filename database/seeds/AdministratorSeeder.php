<?php

use Illuminate\Database\Seeder;
use App\User;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administator";
        $administrator->email = "administrator@larashop.test";
        $administrator->phone = "12314123123";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("larashop");
        $administrator->avatar = "Saat-ini-tidak-ada-file.png";
        $administrator->address = "Sarmili, Bintaro, Tanggerang Selatan";
        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}

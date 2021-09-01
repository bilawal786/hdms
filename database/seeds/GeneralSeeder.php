<?php

use App\GeneralSettings;
use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GeneralSettings::create([
            'sitename'     => 'HDMS CLIM',
            'address1'     => '21 Rue Félix Gouno',
            'address2'     => '97131 Petit Canal',
            'phone1'     => '0690914868',
            'phone2'     => '0590232962',
            'email'     => 'Hdmsclim.Secretariat@Gmail.Com',
            'logo'     => 'front/assets/images/logo/logo1.png',
            'time1'    => 'Du Lundi au vendred: de 10 h 00 a 23 h 00',
            'time2'    => 'Du samedi au dimanche: de 9 h 00 a 13 h 00',
            'footer'    => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever',
            'facebook'    => 'https://facebook.com/',
            'instagram'    => 'https://www.instagram.com/',
        ]);
    }
}

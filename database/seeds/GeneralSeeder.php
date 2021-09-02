<?php

use App\Content;
use App\GeneralSettings;
use App\Offers;
use App\Testimonial;
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
        Content::create([
            'slider1' => 'front/assets/images/08.jpg',
            'slider2' => 'front/assets/images/12.jpg',
            'slider3' => 'front/assets/images/08.jpg',

            'simage1' => 'front/assets/images/07.png',
            'simage2' => 'front/assets/images/05.png',
            'simage3' => 'front/assets/images/06.png',

            'sh1' => 'INSTALLATION',
            'sh2' => 'ENTRETIEN',
            'sh3' => 'MAINTENANCE / DEPANNAGE / DIAGNOSTICS',

            'sd1' => 'Tiling is an effective way to add elegance & style to any bath or kitchen Yellow Hats Remodeling specializes in tile installation and works directly with each homeowner.',
            'sd2' => 'Tiling is an effective way to add elegance & style to any bath or kitchen Yellow Hats Remodeling specializes in tile installation and works directly with each homeowner.',
            'sd3' => 'Tiling is an effective way to add elegance & style to any bath or kitchen Yellow Hats Remodeling specializes in tile installation and works directly with each homeowner.',

            'sv1' => 'https://www.w3schools.com/html/mov_bbb.mp4',
            'sv2' => 'https://www.w3schools.com/html/mov_bbb.mp4',
            'sv3' => 'https://www.w3schools.com/html/mov_bbb.mp4',

            'about' => 'HDMS Clim, est à votre service pour l’achat, la pose, la maintenance le diagnostic et le dépannage de votre climatisation.
Nos équipes sont à votre disposition pour répondre à toutes vos problématiques concernant la climatisation que vous soyez particuliers ou professionnels.
Disposant de plusieurs équipes spécialisées, nous sommes en mesure d’installer votre climatisation et en assure le bon fonctionnement à travers nos équipes de dépannage de climatisation ainsi que de maintenance.
Disposant de nombreuses certifications, nous travaillons uniquement avec des marques de climatisations reconnues permettant un service optimale.
Nos prestations globales pour tous les systèmes de génie climatique nous permettent de rester à la pointe de notre secteur afin de climatiser au mieux l’ensemble de vos locaux et Habitation. ',
            'values' => '(R)espect d’autrui
                        (E)sprit d’équipe
                        (S)atisfaction client
                        (P)artage du savoir-faire
                        (E)ngagement
                        (C)confiance
                        (T)ravail de qualité.',
            'engagement' => 'HDNS Clim s’est attachée à conserver les valeurs qui ont animé sa création. Une charte d’engagement a été établie pour conduire chaque professionnel à s’impliquer de manière identique. ',
            'quoteh' => 'La qualité avant tout',
            'quote' => 'Le système de gestion de la qualité de la construction de pointe LATISTA garantit des normes de qualité élevées sur tous les sites de lentreprise. Le mécanisme de contrôle permet un suivi intégré des travaux à toutes les étapes de la construction et comprend plus de 100 références dévaluation de la qualité.'
        ]);
        Testimonial::create([
            'name' => 'Begha',
            'designation' => 'Director',
            'review' => 'The company’s experts have accumulated valuable experience in green development, being savvy to all aspects of the certification process and requirements.'
        ]);
        Testimonial::create([
            'name' => 'Begha',
            'designation' => 'Director',
            'review' => 'The company’s experts have accumulated valuable experience in green development, being savvy to all aspects of the certification process and requirements.'
        ]);
        Testimonial::create([
            'name' => 'Begha',
            'designation' => 'Director',
            'review' => 'The company’s experts have accumulated valuable experience in green development, being savvy to all aspects of the certification process and requirements.'
        ]);
        Testimonial::create([
            'name' => 'Begha',
            'designation' => 'Director',
            'review' => 'The company’s experts have accumulated valuable experience in green development, being savvy to all aspects of the certification process and requirements.'
        ]);
        Offers::create([
            'title1' => 'Offer 1',
            'image1' => 'front/assets/images/10.png',
            'price1' => '599',
            'valid1' => '2021-06-15T12:00:00+00:00',
            'title2' => 'Offer 2',
            'image2' => 'front/assets/images/10.png',
            'price2' => '599',
            'valid2' => '2021-06-15T12:00:00+00:00',
            'title3' => 'Offer 3',
            'image3' => 'front/assets/images/10.png',
            'price3' => '599',
            'valid3' => '2021-06-15T12:00:00+00:00',
            'title4' => 'Offer 2',
            'image4' => 'front/assets/images/10.png',
            'price4' => '599',
            'valid4' => '2021-06-15T12:00:00+00:00',
        ]);
    }
}

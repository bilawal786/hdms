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
            'slider1' => 'slider/1631030760slider.jpg',
            'slider2' => 'slider/1631030771slider.jpg',
            'slider3' => 'slider/1631030778slider.jpg',

            'simage1' => 'service/1631031039service.png',
            'simage2' => 'service/1631031054service.png',
            'simage3' => 'service/1631031064service.png',

            'sh1' => 'INSTALLATION',
            'sh2' => 'ENTRETIEN',
            'sh3' => 'MAINTENANCE / DEPANNAGE / DIAGNOSTICS',

            'sd1' => 'Nos techniciens seront en mesure dinstaller votre climatiseur en toute sécurité.',
            'sd2' => 'Nous réaliserons lentretien de votre climatisation pour les logements collectifs, les entreprises et les particuliers.',
            'sd3' => 'Votre climatiseur ne refroidi plus ? Il ne sallum...',

            'sv1' => 'H6JMr2gMmNg',
            'sv2' => 'H6JMr2gMmNg',
            'sv3' => 'H6JMr2gMmNg',

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
            'quote' => 'Le système de gestion de la qualité de la construction de pointe LATISTA garantit des normes de qualité élevées sur tous les sites de lentreprise. Le mécanisme de contrôle permet un suivi intégré des travaux à toutes les étapes de la construction et comprend plus de 100 références dévaluation de la qualité.',
            'equip' => '["1631031889gallery.notre equipe 01.jpg","1631031889gallery.notre equipe 02.jpg","1631031889gallery.notre equipe 03.jpg"]',
            'interv' => '["1631031889gallery.INTERVENTION 01.jpg","1631031889gallery.INTERVENTION 02.jpg","1631031889gallery.INTERVENTION 03.jpg"]',
            'products' => '["1631031889gallery.nos produits 01.jpg","1631031889gallery.nos produits 02.jpg","1631031889gallery.nos produits 03.jpg","1631031889gallery.nos produits 04.jpg"]'
        ]);
        Testimonial::create([
            'name' => 'Franck',
            'designation' => 'Responsable des Adhérents et des Mandats',
            'review' => 'Je tiens à remercier de tout coeur léquipe de HDMS CLIM à bientôt !'
        ]);
        Testimonial::create([
            'name' => 'Bernadine',
            'designation' => 'Chargé de Développement Entreprises',
            'review' => 'Je tiens à remercier de tout coeur léquipe de HDMS CLIM à bientôt !'
        ]);
        Testimonial::create([
            'name' => 'Pascal',
            'designation' => 'Secrétaire Général',
            'review' => 'Je tiens à remercier de tout coeur léquipe de HDMS CLIM à bientôt !'
        ]);
        Offers::create([
            'title1' => 'Offer 1',
            'image1' => 'offers/1631031653offers.jpg',
            'price1' => '599',
            'valid1' => '2021-09-09',
            'title2' => 'Offer 2',
            'image2' => 'offers/1631031983offers.jpg',
            'price2' => '599',
            'valid2' => '2021-09-09',
            'title3' => 'Offer 3',
            'image3' => 'offers/1631032017offers.jpg',
            'price3' => '599',
            'valid3' => '2021-09-09',
            'title4' => 'Offer 2',
            'image4' => 'offers/1631032050offers.jpg',
            'price4' => '599',
            'valid4' => '2021-09-09',
        ]);
    }
}

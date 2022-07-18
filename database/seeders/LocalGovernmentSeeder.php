<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalGovernmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
     // truncate `l_g_as` table
        DB::table('local_governments')->delete();
        //
        DB::table('local_governments')->insert([
            //LOCAL GOVERNMENT AREAS(Federal Capital Territory)---start
            [
                'lga_name' => 'Gwagwalada',
                'state_id' => '1'
            ],
            [
                'lga_name' => 'Kuje',
                'state_id' => '1'
            ],
            [
                'lga_name' => 'Abaji',
                'state_id' => '1'
            ],
            [
                'lga_name' => 'Abuja Municipal',
                'state_id' => '1'
            ],
            [
                'lga_name' => 'Bwari',
                'state_id' => '1'
            ],
            [
                'lga_name' => 'Kwali',
                'state_id' => '1'
            ],
            //LOCAL GOVERNMENT AREAS(Federal Capital Territory)---end

            //LOCAL GOVERNMENT AREAS(Abia)---start
            [
                'lga_name' => 'Aba North',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Aba South',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Arochukwu',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Bende',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Ikwuano',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Isiala-Ngwa North',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Isiala-Ngwa South',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Isuikwato',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Obi Nwa',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Ohafia',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Osisioma',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Ngwa',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Ugwunagbo',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Ukwa East',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Umuahia North',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Umuahia South',
                'state_id' => '2'
            ],
            [
                'lga_name' => 'Umu-Neochi',
                'state_id' => '2'
            ],
            //LOCAL GOVERNMENT AREAS(Abia)---end

            //LOCAL GOVERNMENT AREAS(Adamawa)---start
           
            [
                'lga_name' => 'Demsa',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Fufore',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Ganaye',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Gireri',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Gombi',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Guyuk',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Hong',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Jada',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Lamurde',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Madagali',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Maiha',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Mayo-Belwa',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Michika',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Mubi North',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Mubi South',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Numan',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Shelleng',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Song',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Toungo',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Demsa',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Yola North',
                'state_id' => '3'
            ],
            [
                'lga_name' => 'Yola South',
                'state_id' => '3'
            ],
            //LOCAL GOVERNMENT AREAS(Adamawa)---end

            //LOCAL GOVERNMENT AREAS(Akwa Ibom)---start

            [ 'lga_name' => 'Abak', 'state_id' => '4'],
            [ 'lga_name' => 'Eastern Obolo', 'state_id' => '4'],
            [ 'lga_name' => 'Eket', 'state_id' => '4'],
            [ 'lga_name' => 'Esit Eket', 'state_id' => '4'],
            [ 'lga_name' => 'Essien Udim', 'state_id' => '4'],
            [ 'lga_name' => 'Etim Ekpo', 'state_id' => '4'],
            [ 'lga_name' => 'Etinan', 'state_id' => '4'],
            [ 'lga_name' => 'Ibeno', 'state_id' => '4'],
            [ 'lga_name' => 'Ibesikpo Asutan', 'state_id' => '4'],
            [ 'lga_name' => 'Ibiono Ibom', 'state_id' => '4'],
            [ 'lga_name' => 'Ika', 'state_id' => '4'],
            [ 'lga_name' => 'Ikono', 'state_id' => '4'],
            [ 'lga_name' => 'Ikot Abasi', 'state_id' => '4'],
            [ 'lga_name' => 'Ikot Ekpene', 'state_id' => '4'],
            [ 'lga_name' => 'Ini', 'state_id' => '4'],
            [ 'lga_name' => 'Itu', 'state_id' => '4'],
            [ 'lga_name' => 'Mbo', 'state_id' => '4'],
            [ 'lga_name' => 'Mkpat Enin', 'state_id' => '4'],
            [ 'lga_name' => 'Nsit Atai', 'state_id' => '4'],
            [ 'lga_name' => 'Nsit Ibom', 'state_id' => '4'],
            [ 'lga_name' => 'Nsit Ubium', 'state_id' => '4' ],
            [ 'lga_name' => 'Obot Akara', 'state_id' => '4'],
            [ 'lga_name' => 'Okobo', 'state_id' => '4'],
            [ 'lga_name' => 'Onna', 'state_id' => '4'],
            [ 'lga_name' => 'Oron', 'state_id' => '4'],
            [ 'lga_name' => 'Oruk Anam', 'state_id' => '4'],
            [ 'lga_name' => 'Udung Uko,', 'state_id' => '4'],
            [ 'lga_name' => 'Ukanafun', 'state_id' => '4' ],
            [ 'lga_name' => 'Uruan', 'state_id' => '4' ],
            [ 'lga_name' => 'Urue-Offong/Oruko', 'state_id' => '4' ],
            [ 'lga_name' => 'Uyo', 'state_id' => '4' ],

            //LOCAL GOVERNMENT AREAS(Akwa Ibom)---end 

            //LOCAL GOVERNMENT AREAS(Anambra)---start

            [ 'lga_name' => 'Aguata', 'state_id' => '5' ],
            [ 'lga_name' => 'Anambra East', 'state_id' => '5' ],
            [ 'lga_name' => 'Anambra West', 'state_id' => '5' ],
            [ 'lga_name' => 'Anaocha', 'state_id' => '5' ],
            [ 'lga_name' => 'Awka North', 'state_id' => '5' ],
            [ 'lga_name' => 'Awka South', 'state_id' => '5' ],
            [ 'lga_name' => 'Ayamelum', 'state_id' => '5' ],
            [ 'lga_name' => 'Dunukofia', 'state_id' => '5' ],
            [ 'lga_name' => 'Ekwusigo', 'state_id' => '5' ],
            [ 'lga_name' => 'Idemili North', 'state_id' => '5' ],
            [ 'lga_name' => 'Idemili south', 'state_id' => '5' ],
            [ 'lga_name' => 'Ihiala', 'state_id' => '5' ],
            [ 'lga_name' => 'Njikoka', 'state_id' => '5' ],
            [ 'lga_name' => 'Nnewi North', 'state_id' => '5' ],
            [ 'lga_name' => 'Nnewi South', 'state_id' => '5' ],
            [ 'lga_name' => 'Ogbaru', 'state_id' => '5' ],
            [ 'lga_name' => 'Onitsha North', 'state_id' => '5' ],
            [ 'lga_name' => 'Onitsha South', 'state_id' => '5' ],
            [ 'lga_name' => 'Orumba North', 'state_id' => '5' ],
            [ 'lga_name' => 'Orumba South', 'state_id' => '5' ],
            [ 'lga_name' => 'Oyi', 'state_id' => '5' ],

            //LOCAL GOVERNMENT AREAS(Anambra)---end

            //LOCAL GOVERNMENT AREAS(Bauchi)---start

            [ 'lga_name' => 'Alkaleri', 'state_id' => '6' ],
            [ 'lga_name' => 'Bauchi', 'state_id' => '6' ],
            [ 'lga_name' => 'Bogoro', 'state_id' => '6' ],
            [ 'lga_name' => 'Damban', 'state_id' => '6' ],
            [ 'lga_name' => 'Darazo', 'state_id' => '6' ],
            [ 'lga_name' => 'Dass', 'state_id' => '6' ],
            [ 'lga_name' => 'Ganjuwa', 'state_id' => '6' ],
            [ 'lga_name' => 'Giade', 'state_id' => '6' ],
            [ 'lga_name' => 'Itas/Gadau', 'state_id' => '6' ],
            [ 'lga_name' => "Jama'are", 'state_id' => '6' ],
            [ 'lga_name' => 'Katagum', 'state_id' => '6' ],
            [ 'lga_name' => 'Kirfi', 'state_id' => '6' ],
            [ 'lga_name' => 'Misau', 'state_id' => '6' ],
            [ 'lga_name' => 'Ningi', 'state_id' => '6' ],
            [ 'lga_name' => 'Shira', 'state_id' => '6' ],
            [ 'lga_name' => 'Tafawa-Balewa', 'state_id' => '6' ],
            [ 'lga_name' => 'Toro', 'state_id' => '6' ],
            [ 'lga_name' => 'Warji', 'state_id' => '6' ],
            [ 'lga_name' => 'Zaki', 'state_id' => '6' ],

            //LOCAL GOVERNMENT AREAS(Bauchi)---end

            //LOCAL GOVERNMENT AREAS(Bayelsa)---start

            [ 'lga_name' => 'Brass', 'state_id' => '7' ],
            [ 'lga_name' => 'Ekeremor', 'state_id' => '7' ],
            [ 'lga_name' => 'Kolokuma/Opokuma', 'state_id' => '7' ],
            [ 'lga_name' => 'Nembe', 'state_id' => '7' ],
            [ 'lga_name' => 'Ogbia', 'state_id' => '7' ],
            [ 'lga_name' => 'Sagbama', 'state_id' => '7' ],
            [ 'lga_name' => 'Southern Jaw', 'state_id' => '7' ],
            [ 'lga_name' => 'Yenegoa', 'state_id' => '7' ],

            //LOCAL GOVERNMENT AREAS(Bayelsa)---end

            //LOCAL GOVERNMENT AREAS(Benue)---start

            [ 'lga_name' => 'Ado', 'state_id' => '8' ],
            [ 'lga_name' => 'Agatu', 'state_id' => '8' ],
            [ 'lga_name' => 'Apa', 'state_id' => '8' ],
            [ 'lga_name' => 'Buruku', 'state_id' => '8' ],
            [ 'lga_name' => 'Gboko', 'state_id' => '8' ],
            [ 'lga_name' => 'Guma', 'state_id' => '8' ],
            [ 'lga_name' => 'Gwer East', 'state_id' => '8' ],
            [ 'lga_name' => 'Gwer West', 'state_id' => '8' ],
            [ 'lga_name' => 'Katsina-Ala', 'state_id' => '8' ],
            [ 'lga_name' => 'Konshisha', 'state_id' => '8' ],
            [ 'lga_name' => 'Kwande', 'state_id' => '8' ],
            [ 'lga_name' => 'Logo', 'state_id' => '8' ],
            [ 'lga_name' => 'Makurdi', 'state_id' => '8' ],
            [ 'lga_name' => 'Obi', 'state_id' => '8' ],
            [ 'lga_name' => 'Ogbadibo', 'state_id' => '8' ],
            [ 'lga_name' => 'Oju', 'state_id' => '8' ],
            [ 'lga_name' => 'Okpokwu', 'state_id' => '8' ],
            [ 'lga_name' => 'Ohimini', 'state_id' => '8' ],
            [ 'lga_name' => 'Oturkpo', 'state_id' => '8' ],
            [ 'lga_name' => 'Tarka', 'state_id' => '8' ],
            [ 'lga_name' => 'Ukum', 'state_id' => '8' ],
            [ 'lga_name' => 'Ushongo', 'state_id' => '8' ],
            [ 'lga_name' => 'Vandeikya', 'state_id' => '8' ],

            //LOCAL GOVERNMENT AREAS(Benue)---end

            //LOCAL GOVERNMENT AREAS(Bornu)---start

            [ 'lga_name' => 'Abadam', 'state_id' => '9' ],
            [ 'lga_name' => 'Askira/Uba', 'state_id' => '9' ],
            [ 'lga_name' => 'Bama', 'state_id' => '9' ],
            [ 'lga_name' => 'Bayo', 'state_id' => '9' ],
            [ 'lga_name' => 'Biu', 'state_id' => '9' ],
            [ 'lga_name' => 'Chibok', 'state_id' => '9' ],
            [ 'lga_name' => 'Damboa', 'state_id' => '9' ],
            [ 'lga_name' => 'Dikwa', 'state_id' => '9' ],
            [ 'lga_name' => 'Gubio', 'state_id' => '9' ],
            [ 'lga_name' => 'Guzamala', 'state_id' => '9' ],
            [ 'lga_name' => 'Gwoza', 'state_id' => '9' ],
            [ 'lga_name' => 'Hawul', 'state_id' => '9' ],
            [ 'lga_name' => 'Jere', 'state_id' => '9' ],
            [ 'lga_name' => 'Kaga', 'state_id' => '9' ],
            [ 'lga_name' => 'Kala/Balge', 'state_id' => '9' ],
            [ 'lga_name' => 'Konduga', 'state_id' => '9' ],
            [ 'lga_name' => 'Kukawa', 'state_id' => '9' ],
            [ 'lga_name' => 'Kwaya Kusar', 'state_id' => '9' ],
            [ 'lga_name' => 'Mafa', 'state_id' => '9' ],
            [ 'lga_name' => 'Magumeri', 'state_id' => '9' ],
            [ 'lga_name' => 'Maiduguri', 'state_id' => '9' ],
            [ 'lga_name' => 'Marte', 'state_id' => '9' ],
            [ 'lga_name' => 'Mobbar', 'state_id' => '9' ],
            [ 'lga_name' => 'Monguno', 'state_id' => '9' ],
            [ 'lga_name' => 'Ngala', 'state_id' => '9' ],
            [ 'lga_name' => 'Nganzai', 'state_id' => '9' ],
            [ 'lga_name' => 'Shani', 'state_id' => '9' ],

            //LOCAL GOVERNMENT AREAS(Bornu)---end

            //LOCAL GOVERNMENT AREAS(Cross River)---start

            [ 'lga_name' => 'Akpabuyo', 'state_id' => '10' ],
            [ 'lga_name' => 'Odukpani', 'state_id' => '10' ],
            [ 'lga_name' => 'Akamkpa', 'state_id' => '10' ],
            [ 'lga_name' => 'Biase', 'state_id' => '10' ],
            [ 'lga_name' => 'Abi', 'state_id' => '10' ],
            [ 'lga_name' => 'Ikom', 'state_id' => '10' ],
            [ 'lga_name' => 'Yarkur', 'state_id' => '10' ],
            [ 'lga_name' => 'Odubra', 'state_id' => '10' ],
            [ 'lga_name' => 'Boki', 'state_id' => '10' ],
            [ 'lga_name' => 'Ogoja', 'state_id' => '10' ],
            [ 'lga_name' => 'Yala', 'state_id' => '10' ],
            [ 'lga_name' => 'Obanliku', 'state_id' => '10' ],
            [ 'lga_name' => 'Obudu', 'state_id' => '10' ],
            [ 'lga_name' => 'Calabar South', 'state_id' => '10' ],
            [ 'lga_name' => 'Etung', 'state_id' => '10' ],
            [ 'lga_name' => 'Bekwara', 'state_id' => '10' ],
            [ 'lga_name' => 'Bakassi', 'state_id' => '10' ],
            [ 'lga_name' => 'Calabar Municipality', 'state_id' => '10' ],

            //LOCAL GOVERNMENT AREAS(Cross River)---end

            //LOCAL GOVERNMENT AREAS(Delta)---start

            [ 'lga_name' => 'Oshimili', 'state_id' => '11' ],
            [ 'lga_name' => 'Aniocha', 'state_id' => '11' ],
            [ 'lga_name' => 'Aniocha South', 'state_id' => '11' ],
            [ 'lga_name' => 'Ika South', 'state_id' => '11' ],
            [ 'lga_name' => 'Ika North-East', 'state_id' => '11' ],
            [ 'lga_name' => 'Ndokwa West', 'state_id' => '11' ],
            [ 'lga_name' => 'Ndokwa East', 'state_id' => '11' ],
            [ 'lga_name' => 'Isoko south', 'state_id' => '11' ],
            [ 'lga_name' => 'Isoko North', 'state_id' => '11' ],
            [ 'lga_name' => 'Bomadi', 'state_id' => '11' ],
            [ 'lga_name' => 'Burutu', 'state_id' => '11' ],
            [ 'lga_name' => 'Ughelli South', 'state_id' => '11' ],
            [ 'lga_name' => 'Ughelli North', 'state_id' => '11' ],
            [ 'lga_name' => 'Ethiope West', 'state_id' => '11' ],
            [ 'lga_name' => 'Ethiope East', 'state_id' => '11' ],
            [ 'lga_name' => 'Sapele', 'state_id' => '11' ],
            [ 'lga_name' => 'Okpe', 'state_id' => '11' ],
            [ 'lga_name' => 'Warri North', 'state_id' => '11' ],
            [ 'lga_name' => 'Warri South', 'state_id' => '11' ],
            [ 'lga_name' => 'Uvwie', 'state_id' => '11' ],
            [ 'lga_name' => 'Udu', 'state_id' => '11' ],
            [ 'lga_name' => 'Warri Central', 'state_id' => '11' ],
            [ 'lga_name' => 'Ukwani', 'state_id' => '11' ],
            [ 'lga_name' => 'Oshimili North', 'state_id' => '11' ],
            [ 'lga_name' => 'Patani', 'state_id' => '11' ],

            //LOCAL GOVERNMENT AREAS(Delta)---end

            //LOCAL GOVERNMENT AREAS(Ebonyi)---start

            [ 'lga_name' => 'Afikpo South', 'state_id' => '12' ],
            [ 'lga_name' => 'Afikpo North', 'state_id' => '12' ],
            [ 'lga_name' => 'Onicha', 'state_id' => '12' ],
            [ 'lga_name' => 'Ohaozara', 'state_id' => '12' ],
            [ 'lga_name' => 'Abakaliki', 'state_id' => '12' ],
            [ 'lga_name' => 'Ishielu', 'state_id' => '12' ],
            [ 'lga_name' => 'lkwo', 'state_id' => '12' ],
            [ 'lga_name' => 'Ezza', 'state_id' => '12' ],
            [ 'lga_name' => 'Ezza South', 'state_id' => '12' ],
            [ 'lga_name' => 'Ohaukwu', 'state_id' => '12' ],
            [ 'lga_name' => 'Ebonyi', 'state_id' => '12' ],
            [ 'lga_name' => 'Ivo', 'state_id' => '12' ],


            //LOCAL GOVERNMENT AREAS(Ebonyi)---end

            //LOCAL GOVERNMENT AREAS(Edo)---start

            [ 'lga_name' => 'Esan North-East', 'state_id' => '13' ],
            [ 'lga_name' => 'Esan Central', 'state_id' => '13' ],
            [ 'lga_name' => 'Esan West', 'state_id' => '13' ],
            [ 'lga_name' => 'Egor', 'state_id' => '13' ],
            [ 'lga_name' => 'Ukpoba', 'state_id' => '13' ],
            [ 'lga_name' => 'Central', 'state_id' => '13' ],
            [ 'lga_name' => 'Etsako Central', 'state_id' => '13' ],
            [ 'lga_name' => 'Igueben', 'state_id' => '13' ],
            [ 'lga_name' => 'Oredo', 'state_id' => '13' ],
            [ 'lga_name' => 'Ovia SouthWest', 'state_id' => '13' ],
            [ 'lga_name' => 'Ovia South-East', 'state_id' => '13' ],
            [ 'lga_name' => 'Orhionwon', 'state_id' => '13' ],
            [ 'lga_name' => 'Uhunmwonde', 'state_id' => '13' ],
            [ 'lga_name' => 'Etsako East', 'state_id' => '13' ],
            [ 'lga_name' => 'Esan South-East', 'state_id' => '13' ],

            //LOCAL GOVERNMENT AREAS(Edo)---end

            //LOCAL GOVERNMENT AREAS(Ekiti)---start

            [ 'lga_name' => 'Ado', 'state_id' => '14' ],
            [ 'lga_name' => 'Ekiti-East', 'state_id' => '14' ],
            [ 'lga_name' => 'Ekiti-West', 'state_id' => '14' ],
            [ 'lga_name' => 'Emure/Ise/Orun', 'state_id' => '14' ],
            [ 'lga_name' => 'Ekiti South-West', 'state_id' => '14' ],
            [ 'lga_name' => 'Ikare', 'state_id' => '14' ],
            [ 'lga_name' => 'Irepodun', 'state_id' => '14' ],
            [ 'lga_name' => 'Ijero,', 'state_id' => '14' ],
            [ 'lga_name' => 'Ido/Osi', 'state_id' => '14' ],
            [ 'lga_name' => 'Oye', 'state_id' => '14' ],
            [ 'lga_name' => 'Ikole', 'state_id' => '14' ],
            [ 'lga_name' => 'Moba', 'state_id' => '14' ],
            [ 'lga_name' => 'Gbonyin', 'state_id' => '14' ],
            [ 'lga_name' => 'Efon', 'state_id' => '14' ],
            [ 'lga_name' => 'Ise/Orun', 'state_id' => '14' ],
            [ 'lga_name' => 'Ilejemeje', 'state_id' => '14' ],

            //LOCAL GOVERNMENT AREAS(Ekiti)---end

            //LOCAL GOVERNMENT AREAS(Enugu)---start

            [ 'lga_name' => 'Enugu South', 'state_id' => '15' ], 
            [ 'lga_name' => 'Igbo-Eze South', 'state_id' => '15' ],
            [ 'lga_name' => 'Enugu North', 'state_id' => '15' ],
            [ 'lga_name' => 'Nkanu', 'state_id' => '15' ],
            [ 'lga_name' => 'Udi Agwu', 'state_id' => '15' ],
            [ 'lga_name' => 'Oji-River', 'state_id' => '15' ],
            [ 'lga_name' => 'Ezeagu', 'state_id' => '15' ],
            [ 'lga_name' => 'IgboEze North', 'state_id' => '15' ],
            [ 'lga_name' => 'Isi-Uzo', 'state_id' => '15' ],
            [ 'lga_name' => 'Nsukka', 'state_id' => '15' ],
            [ 'lga_name' => 'Igbo-Ekiti', 'state_id' => '15' ],
            [ 'lga_name' => 'Uzo-Uwani', 'state_id' => '15' ],
            [ 'lga_name' => 'Enugu Eas', 'state_id' => '15' ],
            [ 'lga_name' => 'Aninri', 'state_id' => '15' ],
            [ 'lga_name' => 'Nkanu East', 'state_id' => '15' ],
            [ 'lga_name' => 'Udenu', 'state_id' => '15' ],

            //LOCAL GOVERNMENT AREAS(Enugu)---end

            //LOCAL GOVERNMENT AREAS(Gombe)---start
            [ 'lga_name' => 'Akko', 'state_id' => '16' ],
            [ 'lga_name' => 'Balanga', 'state_id' => '16' ],
            [ 'lga_name' => 'Billiri', 'state_id' => '16' ],
            [ 'lga_name' => 'Dukku', 'state_id' => '16' ],
            [ 'lga_name' => 'Kaltungo', 'state_id' => '16' ],
            [ 'lga_name' => 'Kwami', 'state_id' => '16' ],
            [ 'lga_name' => 'Shomgom', 'state_id' => '16' ],
            [ 'lga_name' => 'Funakaye', 'state_id' => '16' ],
            [ 'lga_name' => 'Gombe', 'state_id' => '16' ],
            [ 'lga_name' => 'Nafada/Bajoga ', 'state_id' => '16' ],
            [ 'lga_name' => 'Yamaltu/Delta', 'state_id' => '16' ],
            //LOCAL GOVERNMENT AREAS(Gombe)---end

            //LOCAL GOVERNMENT AREAS(Imo)---start
            [ 'lga_name' => 'Aboh-Mbaise', 'state_id' => '17' ],
            [ 'lga_name' => 'Ahiazu-Mbaise', 'state_id' => '17' ],
            [ 'lga_name' => 'Ehime-Mbano', 'state_id' => '17' ],
            [ 'lga_name' => 'Ezinihitte', 'state_id' => '17' ],
            [ 'lga_name' => 'Ideato North', 'state_id' => '17' ],
            [ 'lga_name' => 'Ideato South', 'state_id' => '17' ],
            [ 'lga_name' => 'Ihitte/Uboma', 'state_id' => '17' ],
            [ 'lga_name' => 'Ikeduru', 'state_id' => '17' ],
            [ 'lga_name' => 'Isiala Mbano', 'state_id' => '17' ],
            [ 'lga_name' => 'Isu', 'state_id' => '17' ],
            [ 'lga_name' => 'Mbaitoli', 'state_id' => '17' ],
            [ 'lga_name' => 'Mbaitoli', 'state_id' => '17' ],
            [ 'lga_name' => 'Ngor-Okpala', 'state_id' => '17' ],
            [ 'lga_name' => 'Njaba', 'state_id' => '17' ],
            [ 'lga_name' => 'Nwangele', 'state_id' => '17' ],
            [ 'lga_name' => 'Nkwerre', 'state_id' => '17' ],
            [ 'lga_name' => 'Obowo', 'state_id' => '17' ],
            [ 'lga_name' => 'Oguta', 'state_id' => '17' ],
            [ 'lga_name' => 'Ohaji/Egbema', 'state_id' => '17' ],
            [ 'lga_name' => 'Okigwe', 'state_id' => '17' ],
            [ 'lga_name' => 'Orlu', 'state_id' => '17' ],
            [ 'lga_name' => 'Orsu', 'state_id' => '17' ],
            [ 'lga_name' => 'Oru East', 'state_id' => '17' ],
            [ 'lga_name' => 'Oru West', 'state_id' => '17' ],
            [ 'lga_name' => 'Owerri-Municipal', 'state_id' => '17' ],
            [ 'lga_name' => 'Owerri North', 'state_id' => '17' ],
            [ 'lga_name' => 'Owerri West', 'state_id' => '17' ],
            //LOCAL GOVERNMENT AREAS(Imo)---end

            //LOCAL GOVERNMENT AREAS(Jigawa)---start
            [ 'lga_name' => 'Auyo', 'state_id' => '18' ],
            [ 'lga_name' => 'Babura', 'state_id' => '18' ],
            [ 'lga_name' => 'Birni Kudu', 'state_id' => '18' ],
            [ 'lga_name' => 'Biriniwa', 'state_id' => '18' ],
            [ 'lga_name' => 'Buji', 'state_id' => '18' ],
            [ 'lga_name' => 'Dutse', 'state_id' => '18' ],
            [ 'lga_name' => 'Gagarawa', 'state_id' => '18' ],
            [ 'lga_name' => 'Garki', 'state_id' => '18' ],
            [ 'lga_name' => 'Gumel', 'state_id' => '18' ],
            [ 'lga_name' => 'Guri', 'state_id' => '18' ],
            [ 'lga_name' => 'Gwaram', 'state_id' => '18' ],
            [ 'lga_name' => 'Gwiwa', 'state_id' => '18' ],
            [ 'lga_name' => 'Hadejia', 'state_id' => '18' ],
            [ 'lga_name' => 'Jahun', 'state_id' => '18' ],
            [ 'lga_name' => 'Kafin Hausa', 'state_id' => '18' ],
            [ 'lga_name' => 'Kaugama Kazaure', 'state_id' => '18' ],
            [ 'lga_name' => 'Kiri Kasamma', 'state_id' => '18' ],
            [ 'lga_name' => 'Kiyawa', 'state_id' => '18' ],
            [ 'lga_name' => 'Maigatari', 'state_id' => '18' ],
            [ 'lga_name' => 'Malam Madori', 'state_id' => '18' ],
            [ 'lga_name' => 'Miga', 'state_id' => '18' ],
            [ 'lga_name' => 'Ringim', 'state_id' => '18' ],
            [ 'lga_name' => 'Roni', 'state_id' => '18' ],
            [ 'lga_name' => 'Sule-Tankarkar', 'state_id' => '18' ],
            [ 'lga_name' => 'Taura', 'state_id' => '18' ],
            [ 'lga_name' => 'Yankwashi', 'state_id' => '18' ],
            //LOCAL GOVERNMENT AREAS(Jigawa)---end

            //LOCAL GOVERNMENT AREAS(Kaduna)---start
            [ 'lga_name' => 'Birni-Gwari', 'state_id' => '19' ],
            [ 'lga_name' => 'Chikun', 'state_id' => '19' ],
            [ 'lga_name' => 'Giwa', 'state_id' => '19' ],
            [ 'lga_name' => 'Igabi', 'state_id' => '19' ],
            [ 'lga_name' => 'Ikara', 'state_id' => '19' ],
            [ 'lga_name' => 'jaba', 'state_id' => '19' ],
            [ 'lga_name' => "Jema'a", 'state_id' => '19' ],
            [ 'lga_name' => 'Kachia', 'state_id' => '19' ],
            [ 'lga_name' => 'Kaduna North', 'state_id' => '19' ],
            [ 'lga_name' => 'Kaduna South', 'state_id' => '19' ],
            [ 'lga_name' => 'Kagarko', 'state_id' => '19' ],
            [ 'lga_name' => 'Kajuru', 'state_id' => '19' ],
            [ 'lga_name' => 'Kaura', 'state_id' => '19' ],
            [ 'lga_name' => 'Kauru', 'state_id' => '19' ],
            [ 'lga_name' => 'Kubau', 'state_id' => '19' ],
            [ 'lga_name' => 'Kudan', 'state_id' => '19' ],
            [ 'lga_name' => 'Lere', 'state_id' => '19' ],
            [ 'lga_name' => 'Makarfi', 'state_id' => '19' ],
            [ 'lga_name' => 'Sabon-Gari', 'state_id' => '19' ],
            [ 'lga_name' => 'Sanga', 'state_id' => '19' ],
            [ 'lga_name' => 'Soba', 'state_id' => '19' ],
            [ 'lga_name' => 'Zango-Kataf', 'state_id' => '19' ],
            [ 'lga_name' => 'Zaria', 'state_id' => '19' ],
            //LOCAL GOVERNMENT AREAS(Kaduna)---end

            //LOCAL GOVERNMENT AREAS(Kano)---start
            [ 'lga_name' => 'Ajingi', 'state_id' => '20' ],
            [ 'lga_name' => 'Albasu', 'state_id' => '20' ],
            [ 'lga_name' => 'Bagwai', 'state_id' => '20' ],
            [ 'lga_name' => 'Bebeji', 'state_id' => '20' ],
            [ 'lga_name' => 'Bichi', 'state_id' => '20' ],
            [ 'lga_name' => 'Bunkure', 'state_id' => '20' ],
            [ 'lga_name' => 'Dala', 'state_id' => '20' ],
            [ 'lga_name' => 'Dambatta', 'state_id' => '20' ],
            [ 'lga_name' => 'Dawakin Kudu', 'state_id' => '20' ],
            [ 'lga_name' => 'Dawakin Tofa', 'state_id' => '20' ],
            [ 'lga_name' => 'Doguwa', 'state_id' => '20' ],
            [ 'lga_name' => 'Fagge', 'state_id' => '20' ],
            [ 'lga_name' => 'Gabasawa', 'state_id' => '20' ],
            [ 'lga_name' => 'Garko', 'state_id' => '20' ],
            [ 'lga_name' => 'Garum', 'state_id' => '20' ],
            [ 'lga_name' => 'Mallam', 'state_id' => '20' ],
            [ 'lga_name' => 'Gaya', 'state_id' => '20' ],
            [ 'lga_name' => 'Gezawa', 'state_id' => '20' ],
            [ 'lga_name' => 'Gwale', 'state_id' => '20' ],
            [ 'lga_name' => 'Gwarzo', 'state_id' => '20' ],
            [ 'lga_name' => 'Kabo', 'state_id' => '20' ],
            [ 'lga_name' => 'Kano Municipal', 'state_id' => '20' ],
            [ 'lga_name' => 'Karaye', 'state_id' => '20' ],
            [ 'lga_name' => 'Kibiya', 'state_id' => '20' ],
            [ 'lga_name' => 'Kiru', 'state_id' => '20' ],
            [ 'lga_name' => 'kumbotso', 'state_id' => '20' ],
            [ 'lga_name' => 'Kunchi', 'state_id' => '20' ],
            [ 'lga_name' => 'Kura', 'state_id' => '20' ],
            [ 'lga_name' => 'Madobi', 'state_id' => '20' ],
            [ 'lga_name' => 'Makoda', 'state_id' => '20' ],
            [ 'lga_name' => 'Minjibir', 'state_id' => '20' ],
            [ 'lga_name' => 'Nasarawa', 'state_id' => '20' ],
            [ 'lga_name' => 'Rano', 'state_id' => '20' ],
            [ 'lga_name' => 'Rimin Gado', 'state_id' => '20' ],
            [ 'lga_name' => 'Rogo', 'state_id' => '20' ],
            [ 'lga_name' => 'Shanono', 'state_id' => '20' ],
            [ 'lga_name' => 'Sumaila', 'state_id' => '20' ],
            [ 'lga_name' => 'Takali', 'state_id' => '20' ],
            [ 'lga_name' => 'Tarauni', 'state_id' => '20' ],
            [ 'lga_name' => 'Tofa', 'state_id' => '20' ],
            [ 'lga_name' => 'Tsanyawa', 'state_id' => '20' ],
            [ 'lga_name' => 'Tudun Wada', 'state_id' => '20' ],
            [ 'lga_name' => 'Ungogo', 'state_id' => '20' ],
            [ 'lga_name' => 'Warawa', 'state_id' => '20' ],
            [ 'lga_name' => 'Wudil', 'state_id' => '20' ],
            //LOCAL GOVERNMENT AREAS(Kano)---end

            //LOCAL GOVERNMENT AREAS(Katsina)---start
            [ 'lga_name' => 'Bakori', 'state_id' => '21' ],
            [ 'lga_name' => 'Batagarawa', 'state_id' => '21' ],
            [ 'lga_name' => 'Batsari', 'state_id' => '21' ],
            [ 'lga_name' => 'Baure', 'state_id' => '21' ],
            [ 'lga_name' => 'Bindawa', 'state_id' => '21' ],
            [ 'lga_name' => 'Charanchi', 'state_id' => '21' ],
            [ 'lga_name' => 'Dandume', 'state_id' => '21' ],
            [ 'lga_name' => 'Danja', 'state_id' => '21' ],
            [ 'lga_name' => 'Dan Musa', 'state_id' => '21' ],
            [ 'lga_name' => 'Daura', 'state_id' => '21' ],
            [ 'lga_name' => 'Dutsi', 'state_id' => '21' ],
            [ 'lga_name' => 'Dutsin-Ma', 'state_id' => '21' ],
            [ 'lga_name' => 'Faskari', 'state_id' => '21' ],
            [ 'lga_name' => 'Funtua', 'state_id' => '21' ],
            [ 'lga_name' => 'Ingawa', 'state_id' => '21' ],
            [ 'lga_name' => 'Jibia', 'state_id' => '21' ],
            [ 'lga_name' => 'Kafur', 'state_id' => '21' ],
            [ 'lga_name' => 'Kaita', 'state_id' => '21' ],
            [ 'lga_name' => 'Kankara', 'state_id' => '21' ],
            [ 'lga_name' => 'Kankia', 'state_id' => '21' ],
            [ 'lga_name' => 'Katsina', 'state_id' => '21' ],
            [ 'lga_name' => 'Kurfi', 'state_id' => '21' ],
            [ 'lga_name' => 'Kusada', 'state_id' => '21' ],
            [ 'lga_name' => "Mai'Adua", 'state_id' => '21' ],
            [ 'lga_name' => 'Malumfashi', 'state_id' => '21' ],
            [ 'lga_name' => 'Mani', 'state_id' => '21' ],
            [ 'lga_name' => 'Mashi', 'state_id' => '21' ],
            [ 'lga_name' => 'Matazuu', 'state_id' => '21' ],
            [ 'lga_name' => 'Musawa', 'state_id' => '21' ],
            [ 'lga_name' => 'Rimi', 'state_id' => '21' ],
            [ 'lga_name' => 'Sabuwa', 'state_id' => '21' ],
            [ 'lga_name' => 'Safana', 'state_id' => '21' ],
            [ 'lga_name' => 'Sandamu', 'state_id' => '21' ],
            [ 'lga_name' => 'Zango', 'state_id' => '21' ],
            //LOCAL GOVERNMENT AREAS(Katsina)---end

            //LOCAL GOVERNMENT AREAS(Kogi)---start
            [ 'lga_name' => 'Aleiro', 'state_id' => '22' ],
            [ 'lga_name' => 'Arewa-Dandi', 'state_id' => '22' ],
            [ 'lga_name' => 'Argungu', 'state_id' => '22' ],
            [ 'lga_name' => 'Augie', 'state_id' => '22' ],
            [ 'lga_name' => 'Bagudo', 'state_id' => '22' ],
            [ 'lga_name' => 'Birnin Kebbi', 'state_id' => '22' ],
            [ 'lga_name' => 'Bunza', 'state_id' => '22' ],
            [ 'lga_name' => 'Dandi', 'state_id' => '22' ],
            [ 'lga_name' => 'Fakai', 'state_id' => '22' ],
            [ 'lga_name' => 'Gwandu', 'state_id' => '22' ],
            [ 'lga_name' => 'Jega', 'state_id' => '22' ],
            [ 'lga_name' => 'Kalgo', 'state_id' => '22' ],
            [ 'lga_name' => 'Koko/Besse', 'state_id' => '22' ],
            [ 'lga_name' => 'Maiyama', 'state_id' => '22' ],
            [ 'lga_name' => 'Ngaski', 'state_id' => '22' ],
            [ 'lga_name' => 'Sakaba', 'state_id' => '22' ],
            [ 'lga_name' => 'Shanga', 'state_id' => '22' ],
            [ 'lga_name' => 'Suru', 'state_id' => '22' ],
            [ 'lga_name' => 'Wasagu/Danko', 'state_id' => '22' ],
            [ 'lga_name' => 'Yauri', 'state_id' => '22' ],
            [ 'lga_name' => 'Zuru', 'state_id' => '22' ],
            //LOCAL GOVERNMENT AREAS(Kogi)---end

            //LOCAL GOVERNMENT AREAS(Kogi)---start
            [ 'lga_name' => 'Adavi', 'state_id' => '23' ],
            [ 'lga_name' => 'Ajaokuta', 'state_id' => '23' ],
            [ 'lga_name' => 'Ankpa', 'state_id' => '23' ],
            [ 'lga_name' => 'Bassa', 'state_id' => '23' ],
            [ 'lga_name' => 'Dekina', 'state_id' => '23' ],
            [ 'lga_name' => 'Ibaji', 'state_id' => '23' ],
            [ 'lga_name' => 'Idah', 'state_id' => '23' ],
            [ 'lga_name' => 'Igalamela-Odolu', 'state_id' => '23' ],
            [ 'lga_name' => 'Ijumu', 'state_id' => '23' ],
            [ 'lga_name' => 'Kabba/Bunu', 'state_id' => '23' ],
            [ 'lga_name' => 'Kogi', 'state_id' => '23' ],
            [ 'lga_name' => 'Lokoja', 'state_id' => '23' ],
            [ 'lga_name' => 'Mopa-Muro', 'state_id' => '23' ],
            [ 'lga_name' => 'Ofu', 'state_id' => '23' ],
            [ 'lga_name' => 'Ogori/Mangongo', 'state_id' => '23' ],
            [ 'lga_name' => 'Okehi', 'state_id' => '23' ],
            [ 'lga_name' => 'Okene', 'state_id' => '23' ],
            [ 'lga_name' => 'Olamabolo', 'state_id' => '23' ],
            [ 'lga_name' => 'Omala', 'state_id' => '23' ],
            [ 'lga_name' => 'Yagba East', 'state_id' => '23' ],
            [ 'lga_name' => 'Yagba West', 'state_id' => '23' ],
            //LOCAL GOVERNMENT AREAS(Kogi)---end

            //LOCAL GOVERNMENT AREAS(Kwara)---start
            [ 'lga_name' => 'Asa', 'state_id' => '24' ],
            [ 'lga_name' => 'Baruten', 'state_id' => '24' ],
            [ 'lga_name' => 'Edu', 'state_id' => '24' ],
            [ 'lga_name' => 'Ekiti', 'state_id' => '24' ],
            [ 'lga_name' => 'Ifelodun', 'state_id' => '24' ],
            [ 'lga_name' => 'Ilorin East', 'state_id' => '24' ],
            [ 'lga_name' => 'Ilorin West', 'state_id' => '24' ],
            [ 'lga_name' => 'Irepodun', 'state_id' => '24' ],
            [ 'lga_name' => 'Isin', 'state_id' => '24' ],
            [ 'lga_name' => 'Kaiama', 'state_id' => '24' ],
            [ 'lga_name' => 'Moro', 'state_id' => '24' ],
            [ 'lga_name' => 'Offa', 'state_id' => '24' ],
            [ 'lga_name' => 'Oke-Ero', 'state_id' => '24' ],
            [ 'lga_name' => 'Oyun', 'state_id' => '24' ],
            [ 'lga_name' => 'Pategi', 'state_id' => '24' ],
            //LOCAL GOVERNMENT AREAS(Kwara)---end

            //LOCAL GOVERNMENT AREAS(Lagos)---start
            [ 'lga_name' => 'Agege', 'state_id' => '25' ],
            [ 'lga_name' => 'Ajeromi-Ifelodun', 'state_id' => '25' ],
            [ 'lga_name' => 'Alimosho', 'state_id' => '25' ],
            [ 'lga_name' => 'Amuwo-Odofin', 'state_id' => '25' ],
            [ 'lga_name' => 'Apapa', 'state_id' => '25' ],
            [ 'lga_name' => 'Badagry', 'state_id' => '25' ],
            [ 'lga_name' => 'Epe', 'state_id' => '25' ],
            [ 'lga_name' => 'Eti-Osa', 'state_id' => '25' ],
            [ 'lga_name' => 'Ibeju/Lekki', 'state_id' => '25' ],
            [ 'lga_name' => 'Ifako-Ijaye', 'state_id' => '25' ],
            [ 'lga_name' => 'Ikeja', 'state_id' => '25' ],
            [ 'lga_name' => 'Ikorodu', 'state_id' => '25' ],
            [ 'lga_name' => 'Kosofe', 'state_id' => '25' ],
            [ 'lga_name' => 'Lagos Island', 'state_id' => '25' ],
            [ 'lga_name' => 'Lagos Mainland', 'state_id' => '25' ],
            [ 'lga_name' => 'Mushin', 'state_id' => '25' ],
            [ 'lga_name' => 'Ojo', 'state_id' => '25' ],
            [ 'lga_name' => 'Oshodi-Isolo', 'state_id' => '25' ],
            [ 'lga_name' => 'Shomolu', 'state_id' => '25' ],
            [ 'lga_name' => 'Surulere', 'state_id' => '25' ],
            //LOCAL GOVERNMENT AREAS(Lagos)---end

            //LOCAL GOVERNMENT AREAS(Nasarawa)---start
            [ 'lga_name' => 'Akwanga', 'state_id' => '26' ],
            [ 'lga_name' => 'Awe', 'state_id' => '26' ],
            [ 'lga_name' => 'Doma', 'state_id' => '26' ],
            [ 'lga_name' => 'Karu', 'state_id' => '26' ],
            [ 'lga_name' => 'Keana', 'state_id' => '26' ],
            [ 'lga_name' => 'Keffi', 'state_id' => '26' ],
            [ 'lga_name' => 'Kokona', 'state_id' => '26' ],
            [ 'lga_name' => 'Lafia', 'state_id' => '26' ],
            [ 'lga_name' => 'Nasarawa', 'state_id' => '26' ],
            [ 'lga_name' => 'Nasarawa-Eggon', 'state_id' => '26' ],
            [ 'lga_name' => 'Obi', 'state_id' => '26' ],
            [ 'lga_name' => 'Toto', 'state_id' => '26' ],
            [ 'lga_name' => 'Wamba', 'state_id' => '26' ],
            //LOCAL GOVERNMENT AREAS(Nasarawa)---end

            //LOCAL GOVERNMENT AREAS(Niger)---start
            [ 'lga_name' => 'Agaie', 'state_id' => '27' ],
            [ 'lga_name' => 'Agwara', 'state_id' => '27' ],
            [ 'lga_name' => 'Bida', 'state_id' => '27' ],
            [ 'lga_name' => 'Borgu', 'state_id' => '27' ],
            [ 'lga_name' => 'Bosso', 'state_id' => '27' ],
            [ 'lga_name' => 'Chanchaga', 'state_id' => '27' ],
            [ 'lga_name' => 'Edati', 'state_id' => '27' ],
            [ 'lga_name' => 'Gbako', 'state_id' => '27' ],
            [ 'lga_name' => 'Gurara', 'state_id' => '27' ],
            [ 'lga_name' => 'Katcha', 'state_id' => '27' ],
            [ 'lga_name' => 'Kontagora ', 'state_id' => '27' ],
            [ 'lga_name' => 'Lapai', 'state_id' => '27' ],
            [ 'lga_name' => 'Lavun', 'state_id' => '27' ],
            [ 'lga_name' => 'Magama', 'state_id' => '27' ],
            [ 'lga_name' => 'Mariga', 'state_id' => '27' ],
            [ 'lga_name' => 'Mashegu', 'state_id' => '27' ],
            [ 'lga_name' => 'Mokwa', 'state_id' => '27' ],
            [ 'lga_name' => 'Muya', 'state_id' => '27' ],
            [ 'lga_name' => 'Pailoro', 'state_id' => '27' ],
            [ 'lga_name' => 'Rafi', 'state_id' => '27' ],
            [ 'lga_name' => 'Rijau', 'state_id' => '27' ],
            [ 'lga_name' => 'Shiroro', 'state_id' => '27' ],
            [ 'lga_name' => 'Suleja', 'state_id' => '27' ],
            [ 'lga_name' => 'Tafa', 'state_id' => '27' ],
            [ 'lga_name' => 'Wushishi', 'state_id' => '27' ],
            //LOCAL GOVERNMENT AREAS(Niger)---end

            //LOCAL GOVERNMENT AREAS(Ogun)---start
            [ 'lga_name' => 'Abeokuta North', 'state_id' => '28' ],
            [ 'lga_name' => 'Abeokuta South', 'state_id' => '28' ],
            [ 'lga_name' => 'Ado-Odo/Ota', 'state_id' => '28' ],
            [ 'lga_name' => 'Egbado North', 'state_id' => '28' ],
            [ 'lga_name' => 'Egbado South', 'state_id' => '28' ],
            [ 'lga_name' => 'Ewekoro', 'state_id' => '28' ],
            [ 'lga_name' => 'Ifo', 'state_id' => '28' ],
            [ 'lga_name' => 'Ijebu East', 'state_id' => '28' ],
            [ 'lga_name' => 'Ijebu North', 'state_id' => '28' ],
            [ 'lga_name' => 'Ijebu North East', 'state_id' => '28' ],
            [ 'lga_name' => 'Ijebu Ode', 'state_id' => '28' ],
            [ 'lga_name' => 'Ikenne', 'state_id' => '28' ],
            [ 'lga_name' => 'Imeko-Afon', 'state_id' => '28' ],
            [ 'lga_name' => 'Ipokia', 'state_id' => '28' ],
            [ 'lga_name' => 'Obafemi-Owode', 'state_id' => '28' ],
            [ 'lga_name' => 'Ogun Waterside', 'state_id' => '28' ],
            [ 'lga_name' => 'Odeda', 'state_id' => '28' ],
            [ 'lga_name' => 'Odogbolu', 'state_id' => '28' ],
            [ 'lga_name' => 'Remo North', 'state_id' => '28' ],
            [ 'lga_name' => 'Shagamu', 'state_id' => '28' ],
            //LOCAL GOVERNMENT AREAS(Ogun)---end

            //LOCAL GOVERNMENT AREAS(Ondo)---start
            [ 'lga_name' => 'Akoko North East', 'state_id' => '29' ],
            [ 'lga_name' => 'Akoko North West', 'state_id' => '29' ],
            [ 'lga_name' => 'Akoko South Akure East', 'state_id' => '29' ],
            [ 'lga_name' => 'Akoko South West', 'state_id' => '29' ],
            [ 'lga_name' => 'Akure North', 'state_id' => '29' ],
            [ 'lga_name' => 'Akure South', 'state_id' => '29' ],
            [ 'lga_name' => 'Ese-Odo', 'state_id' => '29' ],
            [ 'lga_name' => 'Idanre', 'state_id' => '29' ],
            [ 'lga_name' => 'Ifedore', 'state_id' => '29' ],
            [ 'lga_name' => 'Ilaje', 'state_id' => '29' ],
            [ 'lga_name' => 'Ile-Oluji', 'state_id' => '29' ],
            [ 'lga_name' => 'Okeigbo', 'state_id' => '29' ],
            [ 'lga_name' => 'Irele', 'state_id' => '29' ],
            [ 'lga_name' => 'Odigbo', 'state_id' => '29' ],
            [ 'lga_name' => 'Okitipupa', 'state_id' => '29' ],
            [ 'lga_name' => 'Ondo East', 'state_id' => '29' ],
            [ 'lga_name' => 'Ondo West', 'state_id' => '29' ],
            [ 'lga_name' => 'Ose', 'state_id' => '29' ],
            [ 'lga_name' => 'Owo', 'state_id' => '29' ],
            //LOCAL GOVERNMENT AREAS(Ondo)---end

            //LOCAL GOVERNMENT AREAS(Osun)---start
            [ 'lga_name' => 'Aiyedade', 'state_id' => '30' ],
            [ 'lga_name' => 'Aiyedire', 'state_id' => '30' ],
            [ 'lga_name' => 'Atakumosa East', 'state_id' => '30' ],
            [ 'lga_name' => 'Atakumosa West', 'state_id' => '30' ],
            [ 'lga_name' => 'Boluwaduro', 'state_id' => '30' ],
            [ 'lga_name' => 'Boripe', 'state_id' => '30' ],
            [ 'lga_name' => 'Ede North', 'state_id' => '30' ],
            [ 'lga_name' => 'Ede South', 'state_id' => '30' ],
            [ 'lga_name' => 'Egbedore', 'state_id' => '30' ],
            [ 'lga_name' => 'Ejigbo', 'state_id' => '30' ],
            [ 'lga_name' => 'Ife Central', 'state_id' => '30' ],
            [ 'lga_name' => 'Ife East', 'state_id' => '30' ],
            [ 'lga_name' => 'Ife North', 'state_id' => '30' ],
            [ 'lga_name' => 'Ife South', 'state_id' => '30' ],
            [ 'lga_name' => 'Ifedayo', 'state_id' => '30' ],
            [ 'lga_name' => 'Ifelodun', 'state_id' => '30' ],
            [ 'lga_name' => 'Ila', 'state_id' => '30' ],
            [ 'lga_name' => 'Ilesha East', 'state_id' => '30' ],
            [ 'lga_name' => 'Ilesha West', 'state_id' => '30' ],
            [ 'lga_name' => 'Irepodun', 'state_id' => '30' ],
            [ 'lga_name' => 'Irewole', 'state_id' => '30' ],
            [ 'lga_name' => 'Isokan', 'state_id' => '30' ],
            [ 'lga_name' => 'Iwo', 'state_id' => '30' ],
            [ 'lga_name' => 'Obokun', 'state_id' => '30' ],
            [ 'lga_name' => 'Odo-Otin', 'state_id' => '30' ],
            [ 'lga_name' => 'Ola-Oluwa', 'state_id' => '30' ],
            [ 'lga_name' => 'Olorunda', 'state_id' => '30' ],
            [ 'lga_name' => 'Oriade', 'state_id' => '30' ],
            [ 'lga_name' => 'Orolu', 'state_id' => '30' ],
            [ 'lga_name' => 'Osogbo', 'state_id' => '30' ],
            //LOCAL GOVERNMENT AREAS(Osun)---end

            //LOCAL GOVERNMENT AREAS(Oyo)---start
            [ 'lga_name' => 'Afijio', 'state_id' => '31' ],
            [ 'lga_name' => 'Akinyele', 'state_id' => '31' ],
            [ 'lga_name' => 'Atiba', 'state_id' => '31' ],
            [ 'lga_name' => 'Atigbo', 'state_id' => '31' ],
            [ 'lga_name' => 'Egbeda', 'state_id' => '31' ],
            [ 'lga_name' => 'IbadanCentral', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibadan North', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibadan North West', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibadan South East', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibadan South West', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibarapa Central', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibarapa East', 'state_id' => '31' ],
            [ 'lga_name' => 'Ibarapa North', 'state_id' => '31' ],
            [ 'lga_name' => 'Ido', 'state_id' => '31' ],
            [ 'lga_name' => 'Irepo', 'state_id' => '31' ],
            [ 'lga_name' => 'Iseyin', 'state_id' => '31' ],
            [ 'lga_name' => 'Itesiwaju', 'state_id' => '31' ],
            [ 'lga_name' => 'Iwajowa', 'state_id' => '31' ],
            [ 'lga_name' => 'Kajola', 'state_id' => '31' ],
            [ 'lga_name' => 'Lagelu Ogbomosho North', 'state_id' => '31' ],
            [ 'lga_name' => 'Ogbmosho South', 'state_id' => '31' ],
            [ 'lga_name' => 'Ogo Oluwa', 'state_id' => '31' ],
            [ 'lga_name' => 'Olorunsogo', 'state_id' => '31' ],
            [ 'lga_name' => 'Oluyole', 'state_id' => '31' ],
            [ 'lga_name' => 'Ona-Ara', 'state_id' => '31' ],
            [ 'lga_name' => 'Orelope', 'state_id' => '31' ],
            [ 'lga_name' => 'Ori Ire', 'state_id' => '31' ],
            [ 'lga_name' => 'Oyo East', 'state_id' => '31' ],
            [ 'lga_name' => 'Oyo West', 'state_id' => '31' ],
            [ 'lga_name' => 'Saki East', 'state_id' => '31' ],
            [ 'lga_name' => 'Saki West', 'state_id' => '31' ],
            [ 'lga_name' => 'Surulere', 'state_id' => '31' ],
            //LOCAL GOVERNMENT AREAS(Oyo)---end

            //LOCAL GOVERNMENT AREAS(Plateau)---start
            [ 'lga_name' => 'Barikin Ladi', 'state_id' => '33' ],
            [ 'lga_name' => 'Bassa', 'state_id' => '33' ],
            [ 'lga_name' => 'Bokkos', 'state_id' => '33' ],
            [ 'lga_name' => 'Jos East', 'state_id' => '33' ],
            [ 'lga_name' => 'Jos North', 'state_id' => '33' ],
            [ 'lga_name' => 'Jos South', 'state_id' => '33' ],
            [ 'lga_name' => 'Kanam', 'state_id' => '33' ],
            [ 'lga_name' => 'Kanke', 'state_id' => '33' ],
            [ 'lga_name' => 'Langtang North', 'state_id' => '33' ],
            [ 'lga_name' => 'Langtang South', 'state_id' => '33' ],
            [ 'lga_name' => 'Mangu', 'state_id' => '33' ],
            [ 'lga_name' => 'Mikang', 'state_id' => '33' ],
            [ 'lga_name' => 'Pankshin', 'state_id' => '33' ],
            [ 'lga_name' => "Qua'an Pan", 'state_id' => '33' ],
            [ 'lga_name' => 'Riyom', 'state_id' => '33' ],
            [ 'lga_name' => 'Shendam', 'state_id' => '33' ],
            [ 'lga_name' => 'Wase', 'state_id' => '33' ],
            //LOCAL GOVERNMENT AREAS(Plateau)---end

            //LOCAL GOVERNMENT AREAS(Rivers)---end
            [ 'lga_name' => 'Abua/Odual', 'state_id' => '34' ],
            [ 'lga_name' => 'Ahoada East', 'state_id' => '34' ],
            [ 'lga_name' => 'Ahoada West', 'state_id' => '34' ],
            [ 'lga_name' => 'Akuku Toru', 'state_id' => '34' ],
            [ 'lga_name' => 'Andoni', 'state_id' => '34' ],
            [ 'lga_name' => 'Asari-Toru', 'state_id' => '34' ],
            [ 'lga_name' => 'Bonny', 'state_id' => '34' ],
            [ 'lga_name' => 'Degema', 'state_id' => '34' ],
            [ 'lga_name' => 'Emohua', 'state_id' => '34' ],
            [ 'lga_name' => 'Eleme', 'state_id' => '34' ],
            [ 'lga_name' => 'Etche', 'state_id' => '34' ],
            [ 'lga_name' => 'Gokana', 'state_id' => '34' ],
            [ 'lga_name' => 'Ikwerre', 'state_id' => '34' ],
            [ 'lga_name' => 'Khana', 'state_id' => '34' ],
            [ 'lga_name' => 'Obia/Akpor', 'state_id' => '34' ],
            [ 'lga_name' => 'Ogba/Egbema/Ndoni', 'state_id' => '34' ],
            [ 'lga_name' => 'Ogu/Bolo', 'state_id' => '34' ],
            [ 'lga_name' => 'Okrika', 'state_id' => '34' ],
            [ 'lga_name' => 'Omumma', 'state_id' => '34' ],
            [ 'lga_name' => 'Opobo/Nkoro', 'state_id' => '34' ],
            [ 'lga_name' => 'Oyigbo', 'state_id' => '34' ],
            [ 'lga_name' => 'Port-Harcourt', 'state_id' => '34' ],
            [ 'lga_name' => 'Tai', 'state_id' => '34' ],
            //LOCAL GOVERNMENT AREAS(Rivers)---end

            //LOCAL GOVERNMENT AREAS(Sokoto)---end
            [ 'lga_name' => 'Ardo-kola', 'state_id' => '35' ],
            [ 'lga_name' => 'Bali', 'state_id' => '35' ],
            [ 'lga_name' => 'Donga', 'state_id' => '35' ],
            [ 'lga_name' => 'Gashaka', 'state_id' => '35' ],
            [ 'lga_name' => 'Cassol', 'state_id' => '35' ],
            [ 'lga_name' => 'Ibi', 'state_id' => '35' ],
            [ 'lga_name' => 'Jalingo', 'state_id' => '35' ],
            [ 'lga_name' => 'Karin-Lamido', 'state_id' => '35' ],
            [ 'lga_name' => 'Kurmi', 'state_id' => '35' ],
            [ 'lga_name' => 'Lau', 'state_id' => '35' ],
            [ 'lga_name' => 'Sardauna', 'state_id' => '35' ],
            [ 'lga_name' => 'Takum', 'state_id' => '35' ],
            [ 'lga_name' => 'Ussa', 'state_id' => '35' ],
            [ 'lga_name' => 'Wukari', 'state_id' => '35' ],
            [ 'lga_name' => 'Yorro', 'state_id' => '35' ],
            [ 'lga_name' => 'Zing', 'state_id' => '35' ],
            //LOCAL GOVERNMENT AREAS(Sokoto)---end

            //LOCAL GOVERNMENT AREAS(Yobe)---end
            [ 'lga_name' => 'Bade', 'state_id' => '36' ],
            [ 'lga_name' => 'Bursari', 'state_id' => '36' ],
            [ 'lga_name' => 'Damaturu', 'state_id' => '36' ],
            [ 'lga_name' => 'Fika', 'state_id' => '36' ],
            [ 'lga_name' => 'Fune', 'state_id' => '36' ],
            [ 'lga_name' => 'Geidam', 'state_id' => '36' ],
            [ 'lga_name' => 'Gujba', 'state_id' => '36' ],
            [ 'lga_name' => 'Gulani', 'state_id' => '36' ],
            [ 'lga_name' => 'Jakusko', 'state_id' => '36' ],
            [ 'lga_name' => 'Karasuwa', 'state_id' => '36' ],
            [ 'lga_name' => 'Karawa', 'state_id' => '36' ],
            [ 'lga_name' => 'Machina', 'state_id' => '36' ],
            [ 'lga_name' => 'Nangere', 'state_id' => '36' ],
            [ 'lga_name' => 'Nguru Potiskum', 'state_id' => '36' ],
            [ 'lga_name' => 'Tarmua', 'state_id' => '36' ],
            [ 'lga_name' => 'Yunusari', 'state_id' => '36' ],
            [ 'lga_name' => 'Yusufari', 'state_id' => '36' ],
            //LOCAL GOVERNMENT AREAS(Yobe)---end

            //LOCAL GOVERNMENT AREAS(Yobe)---end
            [ 'lga_name' => 'Anka', 'state_id' => '37' ],
            [ 'lga_name' => 'Bakura', 'state_id' => '37' ],
            [ 'lga_name' => 'Birnin Magaji', 'state_id' => '37' ],
            [ 'lga_name' => 'Bukkuyum', 'state_id' => '37' ],
            [ 'lga_name' => 'Bungudu', 'state_id' => '37' ],
            [ 'lga_name' => 'Gummi', 'state_id' => '37' ],
            [ 'lga_name' => 'Gusau', 'state_id' => '37' ],
            [ 'lga_name' => 'Kaura', 'state_id' => '37' ],
            [ 'lga_name' => 'Namoda', 'state_id' => '37' ],
            [ 'lga_name' => 'Maradun', 'state_id' => '37' ],
            [ 'lga_name' => 'Maru', 'state_id' => '37' ],
            [ 'lga_name' => 'Shinkafi', 'state_id' => '37' ],
            [ 'lga_name' => 'Talata Mafara', 'state_id' => '37' ],
            [ 'lga_name' => 'Tsafe', 'state_id' => '37' ],
            [ 'lga_name' => 'Zurmi', 'state_id' => '37' ],
            //LOCAL GOVERNMENT AREAS(Yobe)---end

            
        ]);
    }
}
    


<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // State::factory()->create();
        DB::table('states')->insert([
            
            [
                'name' => 'Select State'
            ],
            [
                'name' => 'Abuja'
            ],
            [
                'name' => 'Abia'
            ],
            [
                'name' => 'Adamawa'
            ],
            [
                'name' => 'Akwa Ibom'
            ],
            [
                'name' => 'Anambra'
            ],
            [
                'name' => 'Bauchi'
            ],
            [
                'name' => 'Bayelsa'
            ],
            [
                'name' => 'Benue'
            ],
            [
                'name' => 'Borno'
            ],
            [
                'name' => 'Cross River'
            ],
            [
                'name' => 'Delta'
            ],
            [
                'name' => 'Ebonyi'
            ],
            [
                'name' => 'Edo'
            ],
            [
                'name' => 'Ekiti'
            ],
            [
                'name' => 'Enugu'
            ],
            [
                'name' => 'Gombe'
            ],
            [
                'name' => 'Imo'
            ],
            [
                'name' => 'Jigawa'
            ],
            [
                'name' => 'Kaduna'
            ],
            [
                'name' => 'Kano'
            ],
            [
                'name' => 'Katsina'
            ],
            [
                'name' => 'Kebbi'
            ],
            [
                'name' => 'Kogi'
            ],
            [
                'name' => 'Kwara'
            ],
            [
                'name' => 'Lagos'
            ],
            [
                'name' => 'Nassarawa'
            ],
            [
                'name' => 'Niger'
            ],
            [
                'name' => 'Ogun'
            ],
            [
                'name' => 'Ondo'
            ],
            [
                'name' => 'Osun'
            ],
            [
                'name' => 'Oyo'
            ],
            [
                'name' => 'Plateau'
            ],
            [
                'name' => 'Rivers'
            ],
            [
                'name' => 'Sokoto'
            ],
            [
                'name' => 'Taraba'
            ],
            [
                'name' => 'Yobe'
            ],
            [
                'name' => 'Zamfara'
            ],
        ]);
         //$user = User::factory()->create();

         DB::table('user_types')->insert([           
            ['name' => 'admin' ], 
            ['name' => 'Clients' ],
                                                
         ]);
    
        $user = User::create([
        'name' => 'Mohammed',
        'username' => 'Aliyu',
        'email' => 'maliyu1015@gmail.com',
        'password' => bcrypt('Maliyu1015'),
        'user_type_id' => UserType::where('name','admin')->first()->id
        ]);

        DB::table('category_types')->insert([
        ['name' => 'Select Category Type'],
        ['name' => 'Residential'  ],

        ['name' => 'Commercial' ],

        ['name' => 'Industrial' ],
        ['name' => 'Land' ],
            ]);

            DB::table('categories')->insert([           
                ['name' => 'Select Caetegory', 'category_type_id' => 1  ],
                ['name' => 'Simple Family Houses', 'category_type_id' => 1  ],
                ['name' => 'Condominiums', 'category_type_id' => 1  ],
                ['name' => 'Cooperatives','category_type_id' => 1  ], 
                ['name' => 'Town homes','category_type_id' => 1  ], 
                ['name' => 'Duplex', 'category_type_id' => 1  ],
                ['name' => 'Triplex', 'category_type_id' => 1  ],
                ['name' => 'Fourplex', 'category_type_id' => 1  ],
                ['name' => 'Simple Family Houses', 'category_type_id' => 1  ],
                ['name' => 'Condominiums', 'category_type_id' => 1  ],
                ['name' => 'Cooperatives', 'category_type_id' => 1  ], 
                ['name' => 'Town homes', 'category_type_id' => 1  ], 
                ['name' => 'Duplex', 'category_type_id' => 1  ],
                ['name' => 'Triplex', 'category_type_id' => 1  ],
                ['name' => 'Fourplex', 'category_type_id' => 1  ],

                ['name' => 'Select Caetegory', 'category_type_id' => 2  ],
                ['name' => 'Office Space', 'category_type_id' => 2  ],
                ['name' => 'Appartments',  'category_type_id' => 2  ],
                ['name' => 'Leisure & Hospitality', 'category_type_id' => 2], 
                ['name' => 'Self Storage & Mini Storage', 'category_type_id' => 2], 
                ['name' => 'Parking Lots & garages', 'category_type_id' => 2  ],
                ['name' => 'Store & Gas Stations', 'category_type_id' => 2  ],
                ['name' => 'Movie Theatres', 'category_type_id' => 2  ],

                ['name' => 'Select Caetegory', 'category_type_id' => 3  ],
                ['name' => 'Factories', 'category_type_id' => 3  ],
                ['name' => 'Production & Food Processing Centres',  'category_type_id' => 3  ],
                ['name' => 'Warehouses & Distribution Centres', 'category_type_id' => 3], 
                ['name' => 'Research & Development Parks', 'category_type_id' => 3], 
                ['name' => 'Power & Solar Genearating Stations', 'category_type_id' => 3  ],
                ['name' => 'Data Server Centres', 'category_type_id' => 3  ],

                ['name' => 'Select Caetegory', 'category_type_id' => 4  ],
                ['name' => 'Under-developed Raw Land', 'category_type_id' => 4  ],
                ['name' => 'Recreational Centres',  'category_type_id' => 4 ],
                ['name' => 'Farms & Ranches', 'category_type_id' => 4], 
                ['name' => 'Car Washes', 'category_type_id' => 4], 
                ['name' => 'Student Houses', 'category_type_id' => 4  ],
                ['name' => 'Worship Centres', 'category_type_id' => 4  ],
                ['name' => 'Planned Urban Development(PUD)', 'category_type_id' => 4  ],
                ['name' => 'Transit-oriented Development(TOD)', 'category_type_id' => 4  ],
                
                 ]);

                 DB::table('locations')->insert([           
                    ['name' => 'Select Location', ],
                    ['name' => 'Abaji', ], 
                    ['name' => 'Bwari'],
                    ['name' => 'Gwagwalada' ],
                    ['name' => 'Kuje' ],  
                    ['name' => 'Kwali' ],
                    ['name' => 'Abuja Municipal Area Council(AMAC)' ],
                                     
                 ]);

                 

                 DB::table('property_types')->insert([           
                    ['name' => 'Select Property Type' ],
                    ['name' => 'Purchase' ], 
                    ['name' => 'Rent' ]
                   
                                                        
                 ]);
                 $this->call([
                    LocalGovernmentSeeder::class
                 ]);
    }
}
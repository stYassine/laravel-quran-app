<?php

use Illuminate\Database\Seeder;

use App\Reciter;

class RecitersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $reciter_1 =Reciter::create([
            'name' => 'Reciter 1',
            'photo' => 'uploads/avatars/avatar.png'
        ]);
        $reciter_2 =Reciter::create([
            'name' => 'Reciter 2',
            'photo' => 'uploads/avatars/avatar.png'
        ]);
        $reciter_3 =Reciter::create([
            'name' => 'Reciter 3',
            'photo' => 'uploads/avatars/avatar.png'
        ]);
        
        
    }
    
}

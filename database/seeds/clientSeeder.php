<?php

use Illuminate\Database\Seeder;

use App\Client;

class clientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    //create 3 new clients in the table
    for ($i = 1; $i <= 3; $i++) {
	    $client = new Client;
        $client->Name= 'Client'.$i;

        //choose the correct permission based on client
        switch($i) {
        	case 1:
        		#array for permissions of HF, VC, RE, PC, and PL, respectively
        		$client->Permissions= json_encode(["HF", "VC", "RE", "PC", "PL"]);
        		break;
        	case 2:
        		$client->Permissions= json_encode(["VC", "RE"]);
        		break;
			case 3:
        		$client->Permissions= json_encode(["PC", "PL"]);
        		break;
        }
        
        $client->save();
	}	
    }
}

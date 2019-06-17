<?php

use Illuminate\Database\Seeder;
use App\Fund;

// require the Faker autoloader
require_once '../vendor/autoload.php';
// alternatively, use another PSR-4 compliant autoloader


class fundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use the factory to create a Faker\Generator instance
		$faker = Faker\Factory::create();
        $fundType = array('HF', 'VC', 'RE', 'PC', 'PL');

        for ($i = 1; $i <= 10; $i++) {
    	    $fund = new Fund;
            $fund->fundName= $faker->regexify('[A-Z]+[A-Z]+[A-Z]');
            $randomNum = $faker->numberBetween($min = 0, $max = 4);
            echo $randomNum;
            $fund->type = $fundType[$randomNum];
            $fund->inceptionDate = $faker->date;
            $fund->description = $faker->text;
            $fund->save();
    	}		    
    }
}

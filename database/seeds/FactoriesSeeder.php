<?php

use Illuminate\Database\Seeder;

class FactoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeding des caissiers
        $cashiers = factory(\App\Models\User::class,20)->create();

        //Seeding des produits
        factory(\App\Models\product::class,20)
            ->create()
            ->each(function (\App\Models\product $product){
            //Seeding des Tables dependant des produits
            $product->supplies()
                ->saveMany(
                        factory(\App\Models\Supply::class,20)->make([
                            "provider_id" => factory(\App\Models\provider::class)
                                            ->create()
                                            ->id
                         ])
            );

            $product->sales()->saveMany(
                factory(\App\Models\Sale::class,20)->make()
            );
        });
    }
}

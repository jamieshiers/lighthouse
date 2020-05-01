<?php

use Illuminate\Database\Seeder;
use App\DressCode;

class DressCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DressCode::create(
            [
                'name' => 'Evening Casual',
                'short_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'long_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'image' => 'https://images.unsplash.com/reserve/unsplash_5288cc8f3571d_1.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80',
            ]
        );
        DressCode::create(
            [
                'name' => 'Evening Casual / Tropical',
                'short_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'long_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'image' => 'https://images.unsplash.com/reserve/unsplash_5288cc8f3571d_1.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80',
            ]
        );
        DressCode::create(
            [
                'name' => 'Evening Casual / Decades',
                'short_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'long_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'image' => 'https://images.unsplash.com/reserve/unsplash_5288cc8f3571d_1.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80',
            ]
        );
        DressCode::create(
            [
                'name' => 'Black Tie',
                'short_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'long_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'image' => 'https://images.unsplash.com/reserve/unsplash_5288cc8f3571d_1.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80',
            ]
        );

        DressCode::create(
            [
                'name' => 'Black Tie / Black & White',
                'short_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'long_description' => 'Open Necked Shirts and Tailored trousers or smart denim for gentlemen, dress or casual seperates for ladies',
                'image' => 'https://images.unsplash.com/reserve/unsplash_5288cc8f3571d_1.JPG?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=80',
            ]
        );
    }
}


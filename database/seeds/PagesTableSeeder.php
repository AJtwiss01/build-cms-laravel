<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Page;


class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = User::find(1);
        Page::Truncate();
        $admin->pages()->saveMany([
            new Page([
                'title' => 'About',
                'url' => '/about',
                'content' => 'This is the About Page'
            ]),
            new Page([
                'title' => 'Contact',
                'url' => '/contact',
                'content' => 'This is the Contact Page'
            ]),

            new Page([
                'title' => 'Another Page',
                'url' => '/another-page',
                'content' => 'This is the Another Page'
            ]),
        ]);
    }
}

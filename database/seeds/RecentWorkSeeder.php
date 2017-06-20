<?php

use Illuminate\Database\Seeder;

class RecentWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = date('Y-m-d H:i:s',time());
        $recentWork = [
            [
                'title' => 'Painting',
                'slug' => 'painting-one',
                'img' => '/web/img/recent-work/painting-1.jpg',
                'services' => '',
                'description' => '',
                'date' => '2017-06-01',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'title' => 'Metal Roof',
                'slug' => 'metal-roof-1',
                'img' => '/web/img/recent-work/metal-roof-1.jpg',
                'services' => '',
                'description' => '',
                'date' => '2017-06-01',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'title' => 'Roof Replacement',
                'slug' => 'roof-replacement-1',
                'img' => '/web/img/recent-work/roof-replacement-1.jpg',
                'services' => '',
                'description' => '',
                'date' => '2017-06-01',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];

        \DB::table('recent_works')->truncate();
        \DB::table('recent_works')->insert($recentWork);


    }
}

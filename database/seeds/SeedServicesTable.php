<?php

use Illuminate\Database\Seeder;

class SeedServicesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $timestamp = date('Y-m-d H:i:s', time());

        $services = [
            [
                'title' => 'Residential and Commercial Roofing',
                'slug' => 'roofing',
                'img' => '/web/img/services/roofing.jpg',
                'description' => '<h3>Simply the Best in the Business</h3><p>Carolina RSP specializes in roof installation, repair, replacement, and inspections. Our installers are professional, liscenced teams who use only the best practices and materials. We have installed and replaced roofing in North Carolina, South Carolina, and Georgia.</p><p>We offer a 100% satisfaction guarantee with all of our services. Additionally, we have over a decade in eperience working with insurance companies to get your job complete for as little out of pocket as possible. Contact us today to see how we can help you!</p>',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'title' => 'Residential and Commercial Siding',
                'slug' => 'siding',
                'img' => '/web/img/services/siding.jpg',
                'description' => '<h3>Make your Home Beautiful Again</h3><p>One of your largest investments is your home. At Carolina Roofing Siding Painting, we use only the most dependible products and the most dependable installers. We use only premium Vinyl Siding that will not only transform your home, but will continue to make your home beautiful for years to come.</p><h3>The best part of Vinyl Siding:</h3><ul><li>Easy to maintain. Just wash occasionally with soap and water.</li><li>Vinyl is Weather resistant.</li><li>Optional insulation underlayment that can reduce your carbon footprint and energy cost.</li><li>Quality Vinyl Siding does not fade over time. Your house will remain as beautiful as the day it was installed for years.</li></ul>',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'title' => 'Residential and Commercial Painting',
                'slug' => 'painting',
                'img' => '/web/img/services/painting.jpg',
                'description' => '<h3>Exterrior Painting</h3><p>Time can be unkind to the outside of your home. Let our team of professional painters bring your home back to life. We use only the best quality paint to ensure that your home stays fresh for a long time.</p><h3>Interrior Painting</h3><p>Whether you simply want to refresh the paint in your home or business, or you are ready to take the plunge and add some color, Carolina Roofing, Siding, Painting has you covered. Our professional team will insure that you get the best quality service, while our premium quality paints will insure that your home continues to look as nice as the day is was painted for a long time. Contact us today to see how we can help!</p>',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ],
            [
                'title' => 'Residential and Commercial Gutter Systems',
                'slug' => 'gutters',
                'img' => '/web/img/services/gutters.jpg',
                'description' => '<h3>Only the best Quality is Good Enough</h3><p>Don\'t let our name fool you! Carolina Roofing, Siding, Painting have over a decade of experience installing and replacing both residential and commercial gutter systems. Our seamless gutter systems are custom fabricated on the job site to meet your specific needs by professional installers. We use only the best components to insure that your gutters last.</p><h3>Gutter Covers and Screens</h3><p>Why spend your time on a ladder cleaning gutters when you don\'t have to? We offer several gutter protection systems for both new installations and existing gutters. Contact us today to find out more!</p>',
                'created_at' => $timestamp,
                'updated_at' => $timestamp
            ]
        ];

        \DB::table('services')->truncate();
        \DB::table('services')->insert($services);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Home;
use App\Models\gallery;
use App\Models\profil;
use App\Models\team;
use App\Models\contact;
use App\Models\portfolio;
use App\Models\blog;
use App\Models\mostblog;
use App\Models\mostblog2;
use App\Models\mostblog3;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Home::create([
            "title1" => 'Welcome To Our Studio!',
            "title2" => 'ITS NICE TO MEET YOU',
            "title3" => 'TELL ME MORE'
        ]);

        

        Gallery::create([
            "title1" => 'GALLERY',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '1.jpg',
            "subtitle1" => 'Threads',
            "subtitle2" => 'Illustration',
            "title3" => 'VIDEO',
            "title4" => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            "video1" => 'v1.mp4'
        ]);

        Gallery::create([
            "title1" => 'GALLERY',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '2.jpg',
            "subtitle1" => 'Explore',
            "subtitle2" => 'Graphic Design',
            "title3" => 'VIDEO',
            "title4" => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            "video1" => 'v2.mp4'
        ]);

        Gallery::create([
            "title1" => 'GALLERY',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '3.jpg',
            "subtitle1" => 'Finish',
            "subtitle2" => 'Identity',
            "title3" => 'VIDEO',
            "title4" => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            "video1" => 'v3.mp4'
        ]);

        Gallery::create([
            "title1" => 'GALLERY',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '4.jpg',
            "subtitle1" => 'Lines',
            "subtitle2" => 'Branding',
            "title3" => 'VIDEO',
            "title4" => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            "video1" => 'v4.mp4'
        ]);

        Gallery::create([
            "title1" => 'GALLERY',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '5.jpg',
            "subtitle1" => 'Southwest',
            "subtitle2" => 'Website Design',
            "title3" => 'VIDEO',
            "title4" => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            "video1" => 'v5.mp4'
        ]);

        Gallery::create([
            "title1" => 'GALLERY',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '6.jpg',
            "subtitle1" => 'Window',
            "subtitle2" => 'Photography',
            "title3" => 'VIDEO',
            "title4" => 'Lorem ipsum dolor sit amet consectetur adipisicing.',
            "video1" => 'v6.mp4'
        ]);

        Profil::create([
            "title1" => 'PROFIL',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Your Profile',
            "title4" => 'Our Humble Beginnings',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            "gambar1" => '1.jpg'
        ]);

        Profil::create([
            "title1" => 'PROFIL',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Visi',
            "title4" => 'An Agency is Born',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            "gambar1" => '2.jpg'
        ]);

        Profil::create([
            "title1" => 'PROFIL',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Misi',
            "title4" => 'Transition to Full Service',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            "gambar1" => '3.jpg'
        ]);

        Profil::create([
            "title1" => 'PROFIL',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Sejarah',
            "title4" => 'Phase Two Expansion',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!',
            "gambar1" => '4.jpg'
        ]);

        Team::create([
            "title1" => 'OUR AMAZING TEAM',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Parveen Anand',
            "title4" => 'Lead Designer',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.',
            "gambar1" => '1.jpg'
        ]);

        Team::create([
            "title1" => 'OUR AMAZING TEAM',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Diana Petersen',
            "title4" => 'Lead Marketer',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.',
            "gambar1" => '2.jpg'
        ]);

        Team::create([
            "title1" => 'OUR AMAZING TEAM',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "title3" => 'Larry Parker',
            "title4" => 'Lead Developer',
            "title5" => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.',
            "gambar1" => '3.jpg'
        ]);

        Contact::create([
            "title1" => 'CONTACT US',
            "title2" => 'Lorem ipsum dolor sit amet consectetur',
            "title3" => 'SEND MESSAGE',
            "title4" => 'Copyright © Ramadhani',
            "title5" => 'Privacy Policy',
            "title6" => 'Terms of Use',
        ]);

        Portfolio::create([
            "title1" => 'PORTFOLIO',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '1.jpg',
            "title3" => 'Threads',
            "title4" => 'Illustration',
            "title5" => 'PROJECT NAME',
            "title6" => 'Lorem ipsum dolor sit amet consectetur.',
            "title7" => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            "title8" => 'Client:Threads',
            "title9" => 'Category:Illustration',
            "title10" => 'Close Project'
        ]);

        Portfolio::create([
            "title1" => 'PORTFOLIO',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '2.jpg',
            "title3" => 'Explore',
            "title4" => 'Graphic Design',
            "title5" => 'PROJECT NAME',
            "title6" => 'Lorem ipsum dolor sit amet consectetur.',
            "title7" => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            "title8" => 'Client:Explore',
            "title9" => 'Category:Graphic Design',
            "title10" => 'Close Project'
        ]);

        Portfolio::create([
            "title1" => 'PORTFOLIO',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '3.jpg',
            "title3" => 'Finish',
            "title4" => 'Identity',
            "title5" => 'PROJECT NAME',
            "title6" => 'Lorem ipsum dolor sit amet consectetur.',
            "title7" => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            "title8" => 'Client:Finish',
            "title9" => 'Category:Identity',
            "title10" => 'Close Project'
        ]);

        Portfolio::create([
            "title1" => 'PORTFOLIO',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '4.jpg',
            "title3" => 'Lines',
            "title4" => 'Branding',
            "title5" => 'PROJECT NAME',
            "title6" => 'Lorem ipsum dolor sit amet consectetur.',
            "title7" => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            "title8" => 'Client:Lines',
            "title9" => 'Category:Branding',
            "title10" => 'Close Project'
        ]);

        Portfolio::create([
            "title1" => 'PORTFOLIO',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '5.jpg',
            "title3" => 'Southwest',
            "title4" => 'Website Design',
            "title5" => 'PROJECT NAME',
            "title6" => 'Lorem ipsum dolor sit amet consectetur.',
            "title7" => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            "title8" => 'Client:Southwest',
            "title9" => 'Category:Website Design',
            "title10" => 'Close Project'
        ]);

        Portfolio::create([
            "title1" => 'PORTFOLIO',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '6.jpg',
            "title3" => 'Window',
            "title4" => 'Photography',
            "title5" => 'PROJECT NAME',
            "title6" => 'Lorem ipsum dolor sit amet consectetur.',
            "title7" => 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!',
            "title8" => 'Client:Window',
            "title9" => 'Category:Photography',
            "title10" => 'Close Project'
        ]);

        Blog::create([
            "title1" => 'BLOG',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '1.jpg',
            "title3" => 'Your Blog 1',
            "title4" => 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
            "title5" => 'baca selengkpanya',
        ]);

        Blog::create([
            "title1" => 'BLOG',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '2.jpg',
            "title3" => 'Your Blog 2',
            "title4" => 'This card has supporting text below as a natural lead-in to additional content.',
            "title5" => 'baca selengkpanya',
        ]);

        Blog::create([
            "title1" => 'BLOG',
            "title2" => 'Lorem ipsum dolor sit amet consectetur.',
            "gambar1" => '3.jpg',
            "title3" => 'Your Blog 3',
            "title4" => 'This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.',
            "title5" => 'baca selengkpanya',
        ]);

        Mostblog::create([
            "gambar1" => '1.jpg',
            "title1" => 'Your Blog 1',
            "title2" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quod cumque, maxime explicabo quis molestias amet? Non quo ex, nesciunt reiciendis impedit voluptas quos ipsum assumenda corrupti, repellendus tempora eaque quis neque! Eligendi aut aspernatur commodi fugit sint! Ad expedita architecto nemo dignissimos molestiae commodi quidem perspiciatis consequuntur eaque officia?',
            "title3" => 'Kembali Ke Halaman Blog',
        ]);

        Mostblog2::create([
            "gambar1" => '2.jpg',
            "title1" => 'Your Blog 2',
            "title2" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quod cumque, maxime explicabo quis molestias amet? Non quo ex, nesciunt reiciendis impedit voluptas quos ipsum assumenda corrupti, repellendus tempora eaque quis neque! Eligendi aut aspernatur commodi fugit sint! Ad expedita architecto nemo dignissimos molestiae commodi quidem perspiciatis consequuntur eaque officia?',
            "title3" => 'Kembali Ke Halaman Blog',
        ]);

        Mostblog3::create([
            "gambar1" => '3.jpg',
            "title1" => 'Your Blog 3',
            "title2" => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quod cumque, maxime explicabo quis molestias amet? Non quo ex, nesciunt reiciendis impedit voluptas quos ipsum assumenda corrupti, repellendus tempora eaque quis neque! Eligendi aut aspernatur commodi fugit sint! Ad expedita architecto nemo dignissimos molestiae commodi quidem perspiciatis consequuntur eaque officia?',
            "title3" => 'Kembali Ke Halaman Blog',
        ]);
        
    }
}

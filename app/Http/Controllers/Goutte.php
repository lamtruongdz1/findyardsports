<?php

namespace App\Http\Controllers;

use App\Models\Yard;
use App\Models\Blog;
use Goutte\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class Goutte extends Controller
{
    public function scraper()
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.sporta.vn/san/tim?per_page=291');

        $crawler->filter('.card')->each(function ($node) {
            $name =  $node->filter('h5')->text();
            $star = $node->filter('.fa.fa-star.text-muted')->count();
            $address = $node->filter('.text-dark')->text();
            $description = $node->filter('.text-sm.text-muted.mb-3')->text();
            $price = rand(150, 250);
            // $regex = 'background-image:';

            $images = $node->filter('.card-img-top.overflow-hidden.dark-overlay.bg-cover')->attr('style');
            $img1 = preg_replace('/background-image: url/', "", $images);
            $img2 = preg_replace('/(?)/', "", $img1);
            $img3 = preg_replace('/; min-height: 200px;/', "", $img2);
            preg_match('!\(([^\)]+)\)!', $img3, $match);
            $img = $match[1];


            $yard = new Yard();
            $yard->name = $name;
            $yard->slug = Str::slug($name);
            $yard->img = $img;

            $yard->price = $price;
            $yard->address = $address;

            // $array_district = ['Thủ Đức','Gò Vấp'];
            // $count_array = count($array_district);
            // for ($i=1; $i < $count_array ; $i++) {
            //     $check = Str::conetains($yard->address, $array_district[$i]);
            // }

            $check = Str::contains($yard->address, 'Thủ Đức');
            $check1 =Str::contains($yard->address, 'Bình Chánh');
            $check2 =Str::contains($yard->address, 'Gò Vấp');
            $check3 =Str::contains($yard->address, 'Tân Phú');
            $check4 =Str::contains($yard->address, 'Tân Bình');
            $check5 =Str::contains($yard->address, 'Phú Nhuận');
            $check6 =Str::contains($yard->address, 'Gò Vấp');
            $check7 =Str::contains($yard->address, 'Quận 1');
            $check9 =Str::contains($yard->address, 'Quận 3');
            $check10 =Str::contains($yard->address, 'Quận 4');
            $check11 =Str::contains($yard->address, 'Quận 5');
            $check12 =Str::contains($yard->address, 'Quận 6');
            $check13 =Str::contains($yard->address, 'Quận 7');
            $check14 =Str::contains($yard->address, 'Nhà Bè');
            $check15 =Str::contains($yard->address, 'Hóc Môn');
            $check16 =Str::contains($yard->address, 'Củ Chi');
            $check17 =Str::contains($yard->address, 'Cần Giờ');
            if($check==true) $yard->id_districts = 1;
            if($check7==true) $yard->id_districts = 2;
            if($check6==true) $yard->id_districts = 2;
            if($check5==true) $yard->id_districts = 2;
            if($check4==true) $yard->id_districts = 13;
            if($check3==true) $yard->id_districts = 15;
            if($check2==true) $yard->id_districts = 12;
            if($check1==true) $yard->id_districts = 16;
            if($check7==true) $yard->id_districts = 2;
            if($check9==true) $yard->id_districts = 3;
            if($check10==true) $yard->id_districts = 4;
            if($check11==true) $yard->id_districts = 5;
            if($check12==true) $yard->id_districts = 6;
            if($check13==true) $yard->id_districts = 7;
            if($check14==true) $yard->id_districts = 20;
            if($check15==true) $yard->id_districts = 19;
            if($check16==true) $yard->id_districts = 18;
            if($check17==true) $yard->id_districts = 17;
            $yard->description = $description;
            $yard->save();
        });
    }
    public function scraper_blog()
    {
        for ($i=1; $i <  100; $i++) {
            $client = new Client();
            $crawler = $client->request('GET', 'https://laodong.vn/bong-da/?page='.$i);
            $crawler->filter('article.p2c.m002')->each(function ($node) {
                $title = $node->filter('h2.title')->text();
                $time = $node->filter('span.time')->text();
                $noidung = $node->filter('.chapeau')->text();
                $image = $node->filter('img.img-art')->attr('data-src');
                $link = $node->filter('a.link-title')->attr('href');

                $blog = new Blog();
                $blog->title = $title;
                $blog->slug = Str::slug($title);
                $blog->images = $image;
                $blog->time = $time;
                $blog->description = $noidung;
                $blog->source = $link;
                $blog->save();


            });
        }
    }
}

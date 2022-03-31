<?php

namespace App\Http\Controllers;
use App\Models\Yard;
use Goutte\Client;
use Str;
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
            $price = rand(150,250);
            // $regex = 'background-image:';

            $images = $node->filter('.card-img-top.overflow-hidden.dark-overlay.bg-cover')->attr('style');
            $img1 =preg_replace( '/background-image: url/',"",$images);
            $img2 =preg_replace( '/(?)/',"",$img1);
            $img3 = preg_replace( '/; min-height: 200px;/',"",$img2);
            preg_match( '!\(([^\)]+)\)!', $img3, $match );
            $img = $match[1];


                $yard = new Yard();
                $yard->name = $name;
                $yard->slug = Str::slug($name);
                $yard->img = $img;
                $yard->price = $price;
                $yard->address = $address;
                $yard->description = $description;
                $yard->save();

            });





    }
}

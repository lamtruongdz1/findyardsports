<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Yards extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yards')->insert([
            ['id_districts' => '1','name' => 'Sân Thành phố Thủ Đức','slug' => 'san-1thanh-pho-thu-duc','price' => '250.000', 'img' => 'san1.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4,TP.thủ đức, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '2','name' => 'Sân quận 1','slug' => 'san-quan-1','price' => '250.000', 'img' => 'san2.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 1,  Hồ Chí Minh ', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '3','name' => 'Sân quận 3','slug' => 'san-quan-3','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 3, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '4','name' => 'Sân quận 4','slug' => 'san-quan-4','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 4, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '5','name' => 'Sân quận 5','slug' => 'san-quan-5','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 5, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '6','name' => 'Sân quận 6','slug' => 'san-quan-6','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 6, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '7','name' => 'Sân quận 7','slug' => 'san-quan-7','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 7, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '8','name' => 'Sân quận 8','slug' => 'san-quan-8','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 8, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
           
            ['id_districts' => '9','name' => 'Sân quận 10','slug' => 'san-quan-9','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 10, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '10','name' => 'Sân quận 11','slug' => 'san-quan-10','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 11, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '11','name' => 'Sân quận 12','slug' => 'san-quan-11','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 12, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '12','name' => 'Sân quận Gò Vấp','slug' => 'san-quan-12','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận Gò Vấp, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '13','name' => 'Sân quận Phú Nhuận','slug' => 'san-quan-13','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận Phú Nhuận, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '14','name' => 'Sân quận Tân Bình','slug' => 'san-quan-14','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '15','name' => 'Sân quận Tân Phú','slug' => 'san-quan-15','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận Tân Phú, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '16','name' => 'Sân huyện Bình Chánh','slug' => 'san-quan-16','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Huyện Bình Chánh, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '17','name' => 'Sân huyện Cần Giờ','slug' => 'san-quan-17','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, huyện Cần Giờ, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '18','name' => 'Sân huyện Củ Chi','slug' => 'san-quan-18','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Huyện Củ Chi , Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '19','name' => 'Sân huyện Hốc Môn','slug' => 'san-quan-19','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Huyện Hốc môn, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ['id_districts' => '20','name' => 'Sân huyện nhà bè','slug' => 'san-quan-20','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận Nhà Bè, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
             ['id_districts' => '21','name' => 'Sân huyện nhà bè','slug' => 'san-quan-21','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 2, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
             ['id_districts' => '22','name' => 'Sân quận 9','slug' => 'san-quan-22','price' => '250.000', 'img' => 'san3.jpg', 'time_open'=> '8:00','time_close'=>'22:00','address'=>'30 Phan Thúc Duyện, P. 4, Quận 9, Hồ Chí Minh', 'description'=>'sân đẹp, đá tốt'],
            ]);
    }
}

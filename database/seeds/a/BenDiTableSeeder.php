<?php

use Illuminate\Database\Seeder;

class BenDiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bendi')->insert([
        	['bendi'=>'Thành phố Hồ Chí Minh'],
        	['Ten'=>'Thế Giới','TenKhongDau'=>'The-Gioi'],
        	['Ten'=>'Kinh Doanh','TenKhongDau'=>'Kinh-Doanh'],
        	['Ten'=>'Văn Hoá','TenKhongDau'=>'Van-Hoa'],
        	['Ten'=>'Thể Thao','TenKhongDau'=>'The-Thao'],
        	['Ten'=>'Pháp Luật','TenKhongDau'=>'Phap-Luat'],
        	['Ten'=>'Đời Sống','TenKhongDau'=>'Doi-Song'],
        	['Ten'=>'Khoa Học','TenKhongDau'=>'Khoa-Hoc']	
        ]);
    }
}

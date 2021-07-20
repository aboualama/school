<?php

namespace Database\Seeders;

use App\Models\CustodyType;
use Illuminate\Database\Seeder;

class CustodyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr1 = ['عهدة الاثاث الثابت', 'الاختبارات', 'الاجهزة التعليمية', 'المصلي', 'السجلات المدرسية', 'عهدة مؤمنة من قبل المدرسة', 'التربية الاسرية والبدنية', 'المعامل والمختبرات', 'ملفات الطالبات المنقطعات', 'ملفات المعلمات المتقاعدات', 'أثاث المكتبه', 'الكتب'];
        $arr2 = ['الاجهزة التعليمية', 'المصلي', 'كتاب المعلم', 'أثاث المكتبه', 'الكتب', 'المعامل والمختبرات', 'التربية الاسرية والبدنية', 'معمل الحاسب']; 

        for($i = 0 ; $i < 12 ; $i++)
        { 
            CustodyType::create([
                'name' => $arr1[$i], 
                'category_id' => 1, 
            ]); 
        } 
        for($i = 0 ; $i < 8 ; $i++)
        { 
            CustodyType::create([
                'name' => $arr2[$i], 
                'category_id' => 2, 
            ]); 
        }  
    }
}

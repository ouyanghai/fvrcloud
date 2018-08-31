<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '历史',
                'description' => '过去展望未来',
            ],
            [
                'name'        => '文化',
                'description' => '人类发展的本质',
            ],
            [
                'name'        => '问答',
                'description' => '请保持友善，互帮互助',
            ],
            [
                'name'        => '公告',
                'description' => '站点公告',
            ],
            [
                'name'        => '时期',
                'description' => '历史发展的多样化',
            ],
            [
                'name'        => '国家',
                'description' => '文化的多样性',
            ],
            [
                'name'        => '信仰',
                'description' => '宗教，学派',
            ],
            [
                'name'        => '人物',
                'description' => '探索世界的主体',
            ],
        ];

        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')->truncate();
    }
}

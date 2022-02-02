<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
     try {
        \DB::beginTransaction();

        \DB::table('settings')->delete();

        \DB::table('settings')->insert(array (
                0 => 
                array (
                    'id' => 1,
                    'key' => 'site.title',
                    'display_name' => 'Название Сайта',
                    'value' => 'Продажа и установка памятников',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Site',
                ),
                1 => 
                array (
                    'id' => 2,
                    'key' => 'site.description',
                    'display_name' => 'Описание Сайта',
                    'value' => 'Изготовление и продажа памятников в городе Ивацевичи',
                    'details' => '',
                    'type' => 'text',
                    'order' => 2,
                    'group' => 'Site',
                ),
                2 => 
                array (
                    'id' => 3,
                    'key' => 'site.logo',
                    'display_name' => 'Логотип Сайта',
                    'value' => '',
                    'details' => '',
                    'type' => 'image',
                    'order' => 3,
                    'group' => 'Site',
                ),
                3 => 
                array (
                    'id' => 4,
                    'key' => 'site.google_analytics_tracking_id',
                    'display_name' => 'Google Analytics Tracking ID',
                    'value' => NULL,
                    'details' => '',
                    'type' => 'text',
                    'order' => 4,
                    'group' => 'Site',
                ),
                4 => 
                array (
                    'id' => 5,
                    'key' => 'admin.bg_image',
                    'display_name' => 'Фоновое Изображение для Админки',
                    'value' => 'settings/August2021/tQADjzrybm3jxTH5BcrV.jpg',
                    'details' => '',
                    'type' => 'image',
                    'order' => 5,
                    'group' => 'Admin',
                ),
                5 => 
                array (
                    'id' => 6,
                    'key' => 'admin.title',
                    'display_name' => 'Название Админки',
                    'value' => 'Памятники',
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Admin',
                ),
                6 => 
                array (
                    'id' => 7,
                    'key' => 'admin.description',
                    'display_name' => 'Описание Админки',
                    'value' => 'Панель управления каталогом памятников.',
                    'details' => '',
                    'type' => 'text',
                    'order' => 2,
                    'group' => 'Admin',
                ),
                7 => 
                array (
                    'id' => 8,
                    'key' => 'admin.loader',
                    'display_name' => 'Загрузчик Админки',
                    'value' => '',
                    'details' => '',
                    'type' => 'image',
                    'order' => 3,
                    'group' => 'Admin',
                ),
                8 => 
                array (
                    'id' => 9,
                    'key' => 'admin.icon_image',
                    'display_name' => 'Иконка Админки',
                    'value' => 'settings/September2021/prjCh2dUXE1d92xlaVXc.jpg',
                    'details' => '',
                    'type' => 'image',
                    'order' => 4,
                    'group' => 'Admin',
                ),
                9 => 
                array (
                    'id' => 10,
                    'key' => 'admin.google_analytics_client_id',
                'display_name' => 'Google Analytics Client ID (используется для панели администратора)',
                    'value' => NULL,
                    'details' => '',
                    'type' => 'text',
                    'order' => 1,
                    'group' => 'Admin',
                ),
                10 => 
                array (
                    'id' => 11,
                    'key' => 'site.header_bg',
                    'display_name' => 'Фоновое изображение шапки',
                    'value' => 'settings/August2021/10GO21cHF4RKmZCP95N9.jpg',
                    'details' => NULL,
                    'type' => 'image',
                    'order' => 6,
                    'group' => 'Site',
                ),
                11 => 
                array (
                    'id' => 12,
                    'key' => 'site.body_bg',
                    'display_name' => 'Фоновое изображение сайта',
                    'value' => 'settings/August2021/yPAeM8Ef1o3gVkbxV1tC.jpg',
                    'details' => NULL,
                    'type' => 'image',
                    'order' => 7,
                    'group' => 'Site',
                ),
                12 => 
                array (
                    'id' => 13,
                    'key' => 'site.footer_bg',
                    'display_name' => 'Надпись в подвале сайта',
                    'value' => 'settings/August2021/MoQmGOhF2eEE93EDMAs5.jpg',
                    'details' => NULL,
                    'type' => 'image',
                    'order' => 8,
                    'group' => 'Site',
                ),
                13 => 
                array (
                    'id' => 14,
                    'key' => 'site.logo_title',
                    'display_name' => 'Название организации',
                    'value' => 'РоНи - плюс',
                    'details' => NULL,
                    'type' => 'text',
                    'order' => 9,
                    'group' => 'Site',
                ),
            ));
       } catch(Exception $e) {
         throw new Exception('Exception occur ' . $e);

         \DB::rollBack();
       }

       \DB::commit();
    }
}

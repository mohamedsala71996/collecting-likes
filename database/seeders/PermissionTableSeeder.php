<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions
        // $permissions = [
        //     'role-list',
        //     'role-create',
        //     'role-edit',
        //     'role-delete',
        //     'addLink-list',
        //     'addLink-create',
        //     'addLink-edit',
        //     'addLink-delete',
        //     'slider-list',
        //     'slider-create',
        //     'slider-edit',
        //     'slider-delete',
        //     'admin-list',
        //     'admin-create',
        //     'admin-edit',
        //     'admin-delete',
        //     'setting-index',
        //     'setting-edit',
        //     'subscription-list',
        //     'subscription-controll',
        //     'withdrawal-list',
        //     'withdrawal-controll',
        //     'links-list',
        //     'Link-create',
        //     'Link-edit',
        //     'Link-delete',
        //     'work-review',
        // ];

        $permissions = [
            'عرض الادوار',
            'انشاء الادوار',
            'تعديل الادوار',
            'حذف الادوار',
            'عرض الاعلانات',
            'انشاء الاعلانات',
            'تعديل الاعلانات',
            'حذف الاعلانات',
            'عرض السلايدر',
            'انشاء السلايدر',
            'تعديل السلايدر',
            'حذف السلايدر',
            'قائمة المشرفين',
            'اضافة المشرفين',
            'تعديل المشرفين',
            'حذف المشرفين',
            'عرض الاعدادات',
            'تعديل الاعدادات',
            'قائمة الاشتراكات والبحث',
            'التحكم في الاشتراكات',
            'العمليات المؤكدة',
            'العمليات الغير مؤكدة',
            'العمليات المرفوضة',
            'الموافقة على السحب',
            'رفض السحب',
            'عرض الروابط',
            'اضافة رابط',
            'تعديل رابط',
            'حذف رابط',
            'متابعة العمل',
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(12)->create();

        //Category
        Category::create([
            'Name' => 'Ayam Geprak',
        ]);
        Category::create([
            'Name' => 'Mie Ayam Geprak',
        ]);
        Category::create([
            'Name' => 'Nasi Goreng',
        ]);
        Category::create([
            'Name' => 'Mie Goreng/Kuah',
        ]);
        Category::create([
            'Name' => 'Kwetiaw Goreng/Kuah',
        ]);
        Category::create([
            'Name' => 'Bihun Goreng/Kuah',
        ]);
        Category::create([
            'Name' => 'Aneka Sayur',
        ]);
        Category::create([
            'Name' => 'Pangsit',
        ]);
        Category::create([
            'Name' => 'Mie Ayam',
        ]);
        Category::create([
            'Name' => 'Ayam Crispy',
        ]);
        Category::create([
            'Name' => 'Cumi Crispy',
        ]);
        Category::create([
            'Name' => 'Udang Crispy',
        ]);
        Category::create([
            'Name' => 'Kakap Crispy',
        ]);
        Category::create([
            'Name' => 'Menu Special',
        ]);
        Category::create([
            'Name' => 'Minuman',
        ]);
        Category::create([
            'Name' => 'Minuman Special',
        ]);

        //Ayam geprak
        Menu::create([
            'Nama' => 'Ayam Geprak',
            'Category_id' => 1,
            'Image' => 'Ayam Geprak.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 13000
        ]);
        Menu::create([
            'Nama' => 'Ayam Geprak Jamur',
            'Category_id' => 1,
            'Image' => 'Ayam Geprak Jamur.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Ayam Geprak Telur',
            'Category_id' => 1,
            'Image' => 'Ayam Geprak Telur.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Telur Penyet',
            'Category_id' => 1,
            'Image' => 'Telur Penyet.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 5000
        ]);

        //Mie Geprak
        Menu::create([
            'Nama' => 'Mie Ayam Geprak',
            'Category_id' => 2,
            'Image' => 'Mie Ayam Geprak.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Mie Ayam Geprak Jamur',
            'Category_id' => 2,
            'Image' => 'Mie Ayam Geprak Jamur.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);
        Menu::create([
            'Nama' => 'Mie Ayam Geprak Telur',
            'Category_id' => 2,
            'Image' => 'Mie Ayam Geprak Telur.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);

        //Nasi Goreng
        Menu::create([
            'Nama' => 'Nasgor Ayam',
            'Category_id' => 3,
            'Image' => 'Nasgor Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 13000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Ikan Asin',
            'Category_id' => 3,
            'Image' => 'Nasgor Ikan Asin.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 13000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Bakso',
            'Category_id' => 3,
            'Image' => 'Nasgor Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Sosis',
            'Category_id' => 3,
            'Image' => 'Nasgor Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Ruwet',
            'Category_id' => 3,
            'Image' => 'Nasgor Ruwet.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Jawa',
            'Category_id' => 3,
            'Image' => 'Nasgor Jawa.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Seafood',
            'Category_id' => 3,
            'Image' => 'Nasgor Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Hongkong',
            'Category_id' => 3,
            'Image' => 'Nasgor Hongkong.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);
        Menu::create([
            'Nama' => 'Nasgor Special',
            'Category_id' => 3,
            'Image' => 'Nasgor Special.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);

        //Mie Kuah/Goreng
        Menu::create([
            'Nama' => 'Mie Goreng Ayam',
            'Category_id' => 4,
            'Image' => 'Mie Goreng Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Mie Goreng Bakso',
            'Category_id' => 4,
            'Image' => 'Mie Goreng Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Mie Goreng Sosis',
            'Category_id' => 4,
            'Image' => 'Mie Goreng Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Mie Goreng Seafood',
            'Category_id' => 4,
            'Image' => 'Mie Goreng Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);
        Menu::create([
            'Nama' => 'Mie Kuah Ayam',
            'Category_id' => 4,
            'Image' => 'Mie Kuah Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Mie Kuah Bakso',
            'Category_id' => 4,
            'Image' => 'Mie Kuah Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Mie Kuah Sosis',
            'Category_id' => 4,
            'Image' => 'Mie Kuah Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Mie Kuah Seafood',
            'Category_id' => 4,
            'Image' => 'Mie Kuah Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);
        Menu::create([
            'Nama' => 'Ifumie',
            'Category_id' => 4,
            'Image' => 'Ifumie.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 22000
        ]);

        //Kwetiaw
        Menu::create([
            'Nama' => 'Kwetiaw Goreng Ayam',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Goreng Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Goreng Bakso',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Goreng Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Goreng Sosis',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Goreng Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Goreng Seafood',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Goreng Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Kuah Ayam',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Kuah Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Kuah Bakso',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Kuah Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Kuah Sosis',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Kuah Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Kuah Seafood',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Kuah Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);
        Menu::create([
            'Nama' => 'Kwetiaw Siram',
            'Category_id' => 5,
            'Image' => 'Kwetiaw Siram.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);

        //Bihun
        Menu::create([
            'Nama' => 'Bihun Goreng Ayam',
            'Category_id' => 6,
            'Image' => 'Bihun Goreng Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Bihun Goreng Bakso',
            'Category_id' => 6,
            'Image' => 'Bihun Goreng Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Bihun Goreng Sosis',
            'Category_id' => 6,
            'Image' => 'Bihun Goreng Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Bihun Goreng Seafood',
            'Category_id' => 6,
            'Image' => 'Bihun Goreng Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);
        Menu::create([
            'Nama' => 'Bihun Kuah Ayam',
            'Category_id' => 6,
            'Image' => 'Bihun Kuah Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Bihun Kuah Bakso',
            'Category_id' => 6,
            'Image' => 'Bihun Kuah Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Bihun Kuah Sosis',
            'Category_id' => 6,
            'Image' => 'Bihun Kuah Sosis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Bihun Kuah Seafood',
            'Category_id' => 6,
            'Image' => 'Bihun Kuah Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 20000
        ]);

        //Aneka Sayur
        Menu::create([
            'Nama' => 'Ca Caisim Ayam',
            'Category_id' => 7,
            'Image' => 'Ca Caisim Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 12000
        ]);
        Menu::create([
            'Nama' => 'Ca Brokoli Ayam',
            'Category_id' => 7,
            'Image' => 'Ca Brokoli Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Cap Cay',
            'Category_id' => 7,
            'Image' => 'Cap Cay.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Sapo Tahu Ayam',
            'Category_id' => 7,
            'Image' => 'Sapo Tahu Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 22000
        ]);
        Menu::create([
            'Nama' => 'Sapo Tahu Seafood',
            'Category_id' => 7,
            'Image' => 'Sapo Tahu Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 22000
        ]);
        Menu::create([
            'Nama' => 'Nasi Capcay',
            'Category_id' => 7,
            'Image' => 'Nasi Capcay.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 22000
        ]);
        Menu::create([
            'Nama' => 'Misua Kuah Ayam',
            'Category_id' => 7,
            'Image' => 'Misua Kuah Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Misua Kuah Seafood',
            'Category_id' => 7,
            'Image' => 'Misua Kuah Seafood.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);
        Menu::create([
            'Nama' => 'Fu Yung Hay',
            'Category_id' => 7,
            'Image' => 'Fu Yung Hay.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);

        //Pangsit
        Menu::create([
            'Nama' => 'Pangsit Special',
            'Category_id' => 8,
            'Image' => 'Pangsit Special.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Pangsit Goreng',
            'Category_id' => 8,
            'Image' => 'Pangsit Goreng.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Pangsit Kuah',
            'Category_id' => 8,
            'Image' => 'Pangsit Kuah.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Mie Pangsit Kuah',
            'Category_id' => 8,
            'Image' => 'Mie Pangsit Kuah.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 13000
        ]);

        //Mie Ayam
        Menu::create([
            'Nama' => 'Mie Ayam',
            'Category_id' => 9,
            'Image' => 'Mie Ayam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 13000
        ]);
        Menu::create([
            'Nama' => 'Mie Ayam Bakso',
            'Category_id' => 9,
            'Image' => 'Mie Ayam Bakso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);
        Menu::create([
            'Nama' => 'Mie Ayam Pangsit',
            'Category_id' => 9,
            'Image' => 'Mie Ayam Pangsit.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 16000
        ]);

        //Ayam Crispy
        Menu::create([
            'Nama' => 'Ayam Crispy Mentega',
            'Category_id' => 10,
            'Image' => 'Ayam Crispy Mentega.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Ayam Crispy Saus Madu',
            'Category_id' => 10,
            'Image' => 'Ayam Crispy Saus Madu.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Ayam Crispy Lada Hitam',
            'Category_id' => 10,
            'Image' => 'Ayam Crispy Lada Hitam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Ayam Crispy Asam Manis',
            'Category_id' => 10,
            'Image' => 'Ayam Crispy Asam Manis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Ayam Cabe Garam',
            'Category_id' => 10,
            'Image' => 'Ayam Cabe Garam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);
        Menu::create([
            'Nama' => 'Ayam Gongso',
            'Category_id' => 10,
            'Image' => 'Ayam Gongso.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 15000
        ]);

        //Cumi Crispy
        Menu::create([
            'Nama' => 'Cumi Crispy Mentega',
            'Category_id' => 11,
            'Image' => 'Cumi Crispy Mentega.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Cumi Crispy Lada Hitam',
            'Category_id' => 11,
            'Image' => 'Cumi Crispy Lada Hitam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Cumi Crispy Asam Manis',
            'Category_id' => 11,
            'Image' => 'Cumi Crispy Asam Manis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Cumi Crispy Asam Pedas',
            'Category_id' => 11,
            'Image' => 'Cumi Crispy Asam Pedas.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Cumi Cabe Garam',
            'Category_id' => 11,
            'Image' => 'Cumi Cabe Garam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);

        //Udang Crispy
        Menu::create([
            'Nama' => 'Udang Crispy Mentega',
            'Category_id' => 12,
            'Image' => 'Udang Crispy Mentega.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Udang Crispy Lada Hitam',
            'Category_id' => 12,
            'Image' => 'Udang Crispy Lada Hitam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Udang Crispy Asam Manis',
            'Category_id' => 12,
            'Image' => 'Udang Crispy Asam Manis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Udang Crispy Asam Pedas',
            'Category_id' => 12,
            'Image' => 'Udang Crispy Asam Pedas.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Udang Cabe Garam',
            'Category_id' => 12,
            'Image' => 'Udang Cabe Garam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);

        //Kakap Crispy
        Menu::create([
            'Nama' => 'Kakap Crispy Mentega',
            'Category_id' => 13,
            'Image' => 'Kakap Crispy Mentega.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Kakap Crispy Lada Hitam',
            'Category_id' => 13,
            'Image' => 'Kakap Crispy Lada Hitam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Kakap Crispy Asam Manis',
            'Category_id' => 13,
            'Image' => 'Kakap Crispy Asam Manis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Kakap Crispy Asam Pedas',
            'Category_id' => 13,
            'Image' => 'Kakap Crispy Asam Pedas.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 17000
        ]);
        Menu::create([
            'Nama' => 'Kakap Cabe Garam',
            'Category_id' => 13,
            'Image' => 'Kakap Cabe Garam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 18000
        ]);

        //Menu Special
        Menu::create([
            'Nama' => 'Jamur Crispy',
            'Category_id' => 14,
            'Image' => 'Jamur Crispy.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Brokoli Crispy',
            'Category_id' => 14,
            'Image' => 'Brokoli Crispy.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Tahu Cabe Garam',
            'Category_id' => 14,
            'Image' => 'Tahu Cabe Garam.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 12000
        ]);
        
        //Minuman
        Menu::create([
            'Nama' => 'Teh',
            'Category_id' => 15,
            'Image' => 'Teh.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 3000
        ]);
        Menu::create([
            'Nama' => 'Jeruk',
            'Category_id' => 15,
            'Image' => 'Jeruk.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 5000
        ]);
        Menu::create([
            'Nama' => 'Jeruk Nipis',
            'Category_id' => 15,
            'Image' => 'Jeruk Nipis.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 5000
        ]);

        //Minuman Special
        Menu::create([
            'Nama' => 'Brown Coffee',
            'Category_id' => 16,
            'Image' => 'Brown Coffee.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Dalgona',
            'Category_id' => 16,
            'Image' => 'Dalgona.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Oreo',
            'Category_id' => 16,
            'Image' => 'Oreo.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Chocolate',
            'Category_id' => 16,
            'Image' => 'Chocolate.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Crunchy Choco',
            'Category_id' => 16,
            'Image' => 'Crunchy Choco.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Strawberry',
            'Category_id' => 16,
            'Image' => 'Strawberry.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Red Velvet',
            'Category_id' => 16,
            'Image' => 'Red Velvet.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);
        Menu::create([
            'Nama' => 'Taro',
            'Category_id' => 16,
            'Image' => 'Taro.jpg',
            'Desc' => 'Deskripsi',
            'Harga' => 10000
        ]);     
        
        //USER
        User::create([
            'name' => 'Admin',
            'email' => 'Admin@Denys.com',
            'password' => bcrypt('DenysKitchen2022')
        ]);    

        //CART
        Cart::create([
            'User_token' => "RPtztFkVwC6IvFtTY826Zyr5nfcNvljXmnjCpmn5",
            'Menu_id' => 1,
            'Kepedasan' => 'Pedas',
            'Quantity' => 2,
            'Keterangan' => 'Ga aeda'
        ]);    
        Cart::create([
            'User_token' => "RPtztFkVwC6IvFtTY826Zyr5nfcNvljXmnjCpmn5",
            'Menu_id' => 63,
            'Kepedasan' => 'Sedang',
            'Quantity' => 1,
            'Keterangan' => 'Ga ada'
        ]);    
    }
}

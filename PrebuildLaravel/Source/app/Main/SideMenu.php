<?php

namespace App\Main;

class SideMenu
{
    /**
     * List of side menu items.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'dashboard' => [
                'icon' => 'home',
                'title' => 'Dashboard',
                'sub_menu' => [
                    'dashboardindex' => [
                        'icon' => '',
                        'route_name' => 'dashboardindex',
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Data Makanan',
                    ],
                    'transaksiindex' => [ // Menambah sub-menu untuk Transaksi
                        'icon' => '', // Tambahkan ikon sesuai kebutuhan
                        'route_name' => 'transaksiindex', // Sesuaikan dengan nama rute Transaksi
                        'params' => [
                            'layout' => 'side-menu',
                        ],
                        'title' => 'Transaksi',
                    ],
                ],
            ],
        ];
    }
}

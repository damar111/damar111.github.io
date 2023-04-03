<?php

class MainController
{
    public static function index()
    {
        $data = QB::table('produk')->get();
        $kontak = QB::table('contact_us')->get();
        include(PATH_VIEW . "page/index.php");
    }

    public static function harga()
    {
        $kontak = QB::table('contact_us')->get();
        $data = QB::table('produk')->get();
        include(PATH_VIEW . "page/harga.php");
    }

    public static function booking()
    {
        $kontak = QB::table('contact_us')->get();
        $data = QB::table('kategori')->get();
        include(PATH_VIEW . "page/booking.php");
    }

    public static function contact()
    {
        $kontak = QB::table('contact_us')->get();
        include(PATH_VIEW . "page/contact.php");
    }

    public static function detail()
    {
        $kontak = QB::table('contact_us')->get();
        QB::table('produk')->get();
        include(PATH_VIEW . "page/detail.php");
    }

    public static function input()
    {
        include(PATH_VIEW . "query/action.php");
    }
}

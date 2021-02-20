<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController2 extends Controller
{
    public function Index()
    {
        return "Halaman Home";
    }
    public function Product()
    {
        return "Halaman Product";
    }
    public function EduGames()
    {
        echo "<a href=https://www.educastudio.com/category/marbel-edu-games> Halaman Educational Game </a>";
    }
    public function KidGames()
    {
        echo "<a href=https://www.educastudio.com/category/marbel-and-friends-kids-games> Halaman Kid Game </a>";
    }
    public function StoryBooks()
    {
        echo "<a href=https://www.educastudio.com/category/riri-story-books> Halaman Story Books </a>";
    }
    public function KidSongs()
    {
        echo "<a href=https://www.educastudio.com/category/kolak-kids-songs> Halaman kid songs </a>"; 
    }
    public function News($id)
    {
        if ($id==1){
            echo "<a href=https://www.educastudio.com/news> Halaman News";
        }
        else {
            echo "<a href=https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19> Halaman News Covid";
        }
    }
    public function Program()
    {
        return "Halaman Program";
    }
    public function Karir()
    {
        echo "<a href=https://www.educastudio.com/program/karir> Halaman karir";
    }
    public function Magang()
    {
        echo "<a href=https://www.educastudio.com/program/magang> Halaman magang"; 
    }
    public function Kunjungan()
    {
        echo "<a href=https://www.educastudio.com/program/kunjungan-industri> Halaman kunjungan";
    }
    public function AboutUs()
    {
        echo "<a href=https://www.educastudio.com/about-us> Halaman About us";
    }
}

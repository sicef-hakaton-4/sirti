<?php

namespace App\Http\Controllers;

use App\Kategorija;
use App\Moderator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    private static $kategorije;
    private static $moderatori;
    private static $testovi;
    private static $poslovi;
    public static function load()
    {
        AdminController::$kategorije = array();
        AdminController::$moderatori = array();
        AdminController::$testovi = array();
        AdminController::$poslovi = array();
        $lista_kategorija = DB::SELECT('SELECT * FROM category');
        $lista_moderatora = DB::SELECT('SELECT u.username, m.id FROM users AS u, moderator AS m WHERE u.id = m.id');
        $lista_testova = DB::SELECT('SELECT * FROM test WHERE firma='.Auth::user()->id);
        $posloviX= DB::SELECT('SELECT * FROM posao WHERE firma='.Auth::user()->id);

        foreach ($lista_moderatora as $m)
        {
            $cats = array();
            $cat_list = DB::SELECT('SELECT DISTINCT c.name FROM category AS c, moderator AS m, assigned AS a WHERE a.category_id = c.category_id AND a.moderator_id = ' . $m->id);
            foreach ($cat_list as $c) array_push($cats, $c->name);
            array_push(AdminController::$moderatori, new Moderator($m->id, $m->username, $cats));
        }

        foreach ($lista_kategorija as $k)
        {
            $mods = array();
            $mod_list = DB::SELECT('SELECT DISTINCT u.username FROM category AS c, moderator AS m, assigned AS a, users AS u WHERE a.moderator_id = m.id AND u.id = m.id AND a.category_id = ' . $k->category_id);
            $ads = DB::SELECT('SELECT DISTINCT a.advert_id FROM advertisment AS a, belongs_to AS b, category AS c WHERE a.advert_id = b.advert_id AND b.category_id = ' . $k->category_id);
            foreach ($mod_list as $m) array_push($mods, $m->username);
            array_push(AdminController::$kategorije, new Kategorija($k->category_id, $k->name, $mods, $ads));
        }
        foreach ($lista_testova as $k)
        {
                   array_push(AdminController::$testovi, $k);
        }
        foreach ($posloviX as $k)
        {
            array_push(AdminController::$poslovi, $k);
        }
    }

    public static function printCategories()
    {
        foreach (AdminController::$kategorije as $k)
        {
            echo "<div class='item'>" . $k->get_name() . " [Br. oglasa: " . sizeof($k->get_ads()) . "]<div class='count'>";
            foreach ($k->get_mods() as $m) echo $m . ";";
            echo "<form  class='glyphicon glyphicon-edit edite promeni' aria-hidden='true' style='display: inline;' onclick='Menjanje(this, 0)'>";//forma za edit
            echo  csrf_field() . "<input type='hidden' name='skriveniid' value='" .$k->get_id() . "' /><button type='submit' style='display: none;'></button>
                    </form>
                    <form  action='admin/RemoveKat' method='POST' class='glyphicon glyphicon-remove editx promeni' aria-hidden='true' style='display: none;' onclick='submituj(this)'>";//forma za brisanje
            echo csrf_field() . "<input type='hidden' name='skriveniid' value='" .$k->get_id() . "'/><button type='submit' style='display: none;'></button>
                    </form></div></div>";
        }
    }

    public static function printModerators()
    {
        foreach (AdminController::$moderatori as $m)
        {
            echo "<div class='item'>" . $m->get_nick() . " [Br. Kategorija: " . sizeof($m->get_cats()) . "]<div class='count'>";
            foreach ($m->get_cats() as $c) echo $c . ";";
            echo "<form action='admin/EditMod' method='POST' class='glyphicon glyphicon-edit edite  promeni' aria-hidden='true' style='display: inline;' onclick='Menjanje(this, 1)'>";
            echo  csrf_field() . "<input type='hidden' name='skriveniid' value='" .$m->get_id() . "' /><button type='submit' style='display: none;'></button>
                </form>
                <form action='admin/RemoveMod' method='POST' class='glyphicon glyphicon-remove editx promeni' aria-hidden='true' style='display: none;' onclick='submituj(this)'>";
            echo csrf_field() . "<input type='hidden' name='skriveniid' value='" .$m->get_id() . "'/><button type='submit' style='display: none;'></button>
                </form></div></div>";
        }

    }

    public static function printTests()
    {
        foreach (AdminController::$testovi as $k)
        {
            //echo "<a href='{{url('izmijeni') .'/' . $elem->advert_id . "'>"
            echo '<div class="row"><div class="col-md-10"><span class="glyphicon glyphicon-menu-right"></span> '.$k->naziv.'</div><div class="col-md-2">Del/Edit</div></div>';

        }
    }

    public static function printTests2()
    {
        foreach (AdminController::$testovi as $k)
        {
            //echo "<a href='{{url('izmijeni') .'/' . $elem->advert_id . "'>"
            echo '<div class="row"><div class="col-md-10"><span class="glyphicon glyphicon-menu-right"></span> '.$k->naziv.'</div><div class="col-md-2">Del/Edit</div></div>';

        }
    }


    public static function printPosao()
    {
        foreach (AdminController::$poslovi as $k)
        {
            //echo "<a href='{{url('izmijeni') .'/' . $elem->advert_id . "'>"
            echo '<div class="row"><div class="col-md-10"><span class="glyphicon glyphicon-menu-right"></span><a href="posao/'.$k->ID.'">'.$k->naziv.'</a></div><div class="col-md-2">Del/Edit</div></div>';

        }
    }

    public function InsertKat(Request $request)
    {
        DB::table('category')->insert(['name' => $request->input('ime')]);
        return redirect('admin');
    }

    public function InsertMod(Request $request)
    {
        $nick = DB::SELECT("SELECT id FROM users WHERE username = '" . $request->input('ime') . "'");
        $nick = $nick==null ? null : $nick[0]->id;
        if($nick) DB::table('moderator')->insert(['id' => $nick]);
        //moze da se uradi else za kad se dodaje moderator koji vec nije user
        return redirect('admin');
    }

    public function RemoveKat(Request $request)
    {
        DB::table('assigned')->where('category_id' , $request->input('skriveniid'))->delete();
        DB::table('category')->where('category_id' , $request->input('skriveniid'))->delete();
        return redirect('admin');
    }

    public function RemoveMod(Request $request)
    {
        DB::table('assigned')->where('moderator_id' , $request->input('skriveniid'))->delete();
        DB::table('moderator')->where('id' , $request->input('skriveniid'))->delete();
        return redirect('admin');
    }

    public function EditKat(Request $request)
    {
        //echo "kat";
        //dd($request);

        $ime = $request->input('ime');
        $kat_id = $request->input('skriveno');
        $nizmoderatora = array();//niz unetih vrednosti moderatora
        for($i = 3; $i < count($_POST); $i++)   //count($_POST) broj post parametara, 1 je token 2 ima 3-... su mi moderatori i  na kraju je category_id
        {
            $j = $i - 3;
            array_push($nizmoderatora, $request->input('moderator' . $j));
        }
        $brmod = count($_POST) - 3;
        $postojimoderatorumodelu = 0;
        $lista_moderatora = DB::SELECT('SELECT u.username, m.id FROM users AS u, moderator AS m WHERE u.id = m.id');//niz moderatora u bazi
        //foreach ($lista_moderatora as $a) echo $a->username . " " . $a->id . "<br/>";
        for ($i = 0; $i < sizeof($nizmoderatora); $i++)
        {
            foreach ($lista_moderatora as $l) if($nizmoderatora[$i] == $l->username)
            {
                $postojimoderatorumodelu++;
                $nizmoderatora[$i] = $l->id;
            }
        }
        if ($postojimoderatorumodelu == $brmod) //ako svi uneti moderatori postoje u bazi
        {
            DB::table('category')->where('category_id' , $kat_id)->update(['name' => $ime]);
            DB::table('assigned')->where('category_id' , $kat_id)->delete();
            foreach ($nizmoderatora as $n)
            {
                DB::table('assigned')->insert(['category_id' => $kat_id, 'moderator_id' => $n]);
            }
        }
        return redirect('admin');
    }

    public function EditMod(Request $request)
    {
        //echo "mod";
        //dd($request);

        $ime = $request->input('ime');
        $mod_id = $request->input('skriveno');
        $nizkategorija = array();//niz unetih vrednosti moderatora
        for($i = 3; $i < count($_POST); $i++)   //count($_POST) broj post parametara, 1 je token 2 ima 3-... su mi kategorije i  na kraju je category_id
        {
            $j = $i - 3;
            array_push($nizkategorija, $request->input('moderator' . $j));//recikliran kod od editkat pa je zato ostalo moderator . $j
        }
        $brkat = count($_POST) - 3;
        $postojikategorijaumodelu = 0;
        $lista_kategorija = DB::SELECT('SELECT * FROM category');//niz kategorija u bazi
        for ($i = 0; $i < sizeof($nizkategorija); $i++)
        {
            foreach ($lista_kategorija as $l) if($nizkategorija[$i] == $l->name)
            {
                $postojikategorijaumodelu++;
                $nizkategorija[$i] = $l->category_id;
            }
        }
        if ($postojikategorijaumodelu == $brkat) //ako sve unete kategorije postoje u bazi
        {
            DB::table('users')->where('id' , $mod_id)->update(['username' => $ime]);
            DB::table('assigned')->where('moderator_id' , $mod_id)->delete();
            foreach ($nizkategorija as $n)
            {
                DB::table('assigned')->insert(['category_id' => $n, 'moderator_id' => $mod_id]);
            }
        }
        return redirect('admin');
    }
}

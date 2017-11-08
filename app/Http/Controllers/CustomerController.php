<?php
namespace App\Http\Controllers;


use App\Customer;
use App\Kategorija;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CustomerController
{
    public static $customer;
    public static $categories;
    public static $tests;
    public static $rated;
    public static $worked;


    public static function load()
    {

        $usr=Auth::user()->id;
        if($usr==3)return redirect('admin');
        $dali=0;
        $user_id = DB::table('firme')->where('id',$usr )->first();
        if(isset($user_id)) {
            if ($user_id->id == $usr) $dali = 1;
        }
        if ($dali) {

            return redirect('firma');

        }
        else {
        $tmp_customer = DB::SELECT('SELECT id, name, image, description from customer where id = ' . Auth::user()->id);

        CustomerController::$customer = new Customer(
            $tmp_customer[0]->id,
            $tmp_customer[0]->name,
            $tmp_customer[0]->image,
            $tmp_customer[0]->description
        );
            return view('profil');
        }

    }

    public static function loadUser($id)
    {
        $tmp_customer = DB::SELECT('SELECT id, name, image, description from customer where id = ' . Auth::user()->id);

        CustomerController::$customer = new Customer(
            $tmp_customer[0]->id,
            $tmp_customer[0]->name,
            $tmp_customer[0]->image,
            $tmp_customer[0]->description
        );



        return view('profil');
    }

    public function EditProfile(Request $request) {
        if ($request->input('image') != null) DB::table('customer')->where('id', Auth::user()->id)->update(['image' => $request->input('image')]);
        if ($request->input('desc') != null) DB::table('customer')->where('id', Auth::user()->id)->update(['description' => $request->input('desc')]);
        return redirect('/profil');
    }

    public static function loadAdvertForm() {
        CustomerController::$categories = array();

        $lista_kategorija = DB::SELECT('SELECT * FROM category');

        foreach ($lista_kategorija as $k)
        {
            array_push(CustomerController::$categories, $k);
        }

        return view('dodaj_oglas');
    }
    public static function loadAdvertForm2() {
        CustomerController::$categories = array();

        $lista_kategorija = DB::SELECT('SELECT * FROM category');

        foreach ($lista_kategorija as $k)
        {
            array_push(CustomerController::$categories, $k);
        }

        return view('dodaj_oglas2');
    }


    public static function loadPosaoForm() {
        CustomerController::$categories = array();
        CustomerController::$tests = array();
        $lista_kategorija = DB::SELECT('SELECT * FROM category');
        CustomerController::$tests= DB::SELECT('SELECT * FROM test WHERE firma='.Auth::user()->id);

        foreach ($lista_kategorija as $k)
        {
            $mods = array();
            $mod_list = DB::SELECT('SELECT DISTINCT u.username FROM category AS c, moderator AS m, assigned AS a, users AS u WHERE a.moderator_id = m.id AND u.id = m.id AND a.category_id = ' . $k->category_id);
            $ads = DB::SELECT('SELECT DISTINCT a.advert_id FROM advertisment AS a, belongs_to AS b, category AS c WHERE a.advert_id = b.advert_id AND b.category_id = ' . $k->category_id);
            foreach ($mod_list as $m) array_push($mods, $m->username);
            array_push(CustomerController::$categories, new Kategorija($k->category_id, $k->name, $mods, $ads));
        }


        return view('dodaj_posao');
    }

    public function saveAdvert(Request $request) {
       $idT=DB::table('test')->insertGetId(
            [
                'naziv' => $request->input('inputIme'),
                'kategorija' => $request->get('inputKategorija'),
                'trajanje' => $request->input('inputTrajanje'),
                'firma' => Auth::user()->id
            ]
        );
        DB::table('pitanja')->insert(
            [
                'pitanje' =>  $request->input('inputPitanje1'),
                'odgovor1' => $request->input('inputOdgovor11'),
                'odgovor2' => $request->input('inputOdgovor21'),
                'odgovor3' => $request->input('inputOdgovor31'),
                'odgovor4' => $request->input('inputOdgovor41'),

                'test' =>  $idT
            ]);

        DB::table('pitanja')->insert(
            [
               'pitanje' => $request->input('inputPitanje2'),
                'odgovor1' => $request->input('inputOdgovor12'),
                'odgovor2' => $request->input('inputOdgovor22'),
                'odgovor3' => $request->input('inputOdgovor32'),
                'odgovor4' => $request->input('inputOdgovor42'),

                'test' =>  $idT
    ]);
                DB::table('pitanja')->insert(
                    [
                'pitanje' => $request->input('inputPitanje3'),
                'odgovor1' => $request->input('inputOdgovor13'),
                'odgovor2' => $request->input('inputOdgovor23'),
                'odgovor3' => $request->input('inputOdgovor33'),
                'odgovor4' => $request->input('inputOdgovor43'),

                        'test' =>  $idT
]);
                        DB::table('pitanja')->insert(
                            [
                'pitanje' => $request->input('inputPitanje4'),
                'odgovor1' => $request->input('inputOdgovor14'),
                'odgovor2' => $request->input('inputOdgovor24'),
                'odgovor3' => $request->input('inputOdgovor34'),
                'odgovor4' => $request->input('inputOdgovor44'),


                'test' =>  $idT
            ]
        );

        return redirect('/profil');
    }
    public function saveAdvert2(Request $request) {
        $idT=DB::table('test')->insertGetId(
            [
                'naziv' => $request->input('inputIme'),
                'kategorija' => $request->get('inputKategorija'),
                'trajanje' => $request->input('inputTrajanje'),
                'firma' => "0"
            ]
        );
        DB::table('pitanja')->insert(
            [
                'pitanje' =>  $request->input('inputPitanje1'),
                'odgovor1' => $request->input('inputOdgovor11'),
                'odgovor2' => $request->input('inputOdgovor21'),
                'odgovor3' => $request->input('inputOdgovor31'),
                'odgovor4' => $request->input('inputOdgovor41'),

                'test' =>  $idT
            ]);

        DB::table('pitanja')->insert(
            [
                'pitanje' => $request->input('inputPitanje2'),
                'odgovor1' => $request->input('inputOdgovor12'),
                'odgovor2' => $request->input('inputOdgovor22'),
                'odgovor3' => $request->input('inputOdgovor32'),
                'odgovor4' => $request->input('inputOdgovor42'),

                'test' =>  $idT
            ]);
        DB::table('pitanja')->insert(
            [
                'pitanje' => $request->input('inputPitanje3'),
                'odgovor1' => $request->input('inputOdgovor13'),
                'odgovor2' => $request->input('inputOdgovor23'),
                'odgovor3' => $request->input('inputOdgovor33'),
                'odgovor4' => $request->input('inputOdgovor43'),

                'test' =>  $idT
            ]);
        DB::table('pitanja')->insert(
            [
                'pitanje' => $request->input('inputPitanje4'),
                'odgovor1' => $request->input('inputOdgovor14'),
                'odgovor2' => $request->input('inputOdgovor24'),
                'odgovor3' => $request->input('inputOdgovor34'),
                'odgovor4' => $request->input('inputOdgovor44'),


                'test' =>  $idT
            ]
        );

        return redirect('/profil');
    }

    public function savePosao(Request $request) {
        $idT=DB::table('posao')->insertGetId(
            [
                'naziv' => $request->input('inputIme'),
                'pozicija' => $request->get('inputKategorije'),
                'istice' => $request->input('inputIstek'),
                'opis' => $request->get('inputOpis'),
                'firma' => Auth::user()->id
            ]
        );
        $vestine=$request->input('vestineX');
        $vestine=explode(";",$vestine);

        $len = count($vestine)-1;
        for($i=0;$i<$len;$i++){
            $polja=explode(",",$vestine[$i]);
            DB::table('posao_vestine')->insert(
                [
                    'posao' =>  $idT,
                    'kategorija' => $polja[0],
                    'granica' => $polja[2],
                    'koeficijent' => $polja[1],
                  ]
            );


    }

        $test=$request->input('testX');
        $vestine=explode(";",$test);

        $len = count($vestine)-1;
        for($i=0;$i<$len;$i++){
             DB::table('posao_test')->insert(
                [
                    'posao' =>  $idT,
                    'test' => $vestine[$i]
                ]
            );


        }

       return redirect('/profil');
    }


    public function rate(Request $request) {

        DB::table('ratings')->insert(
          [
              'rated' => $request->input('customer_id'),
              'rater' => Auth::id(),
              'rating' => $request->input('rating')
          ]
        );

        //now, update the rating record
        $number_of_ratings = sizeof(DB::select('SELECT * FROM ratings WHERE rated = ' . $request->input('customer_id')));
        DB::table('customer')->where('id', $request->input('customer_id'))->update(['rating' =>
            ((float)$request->input('old_rating') * $number_of_ratings + $request->input('rating')) / ($number_of_ratings + 1)]);
        return redirect('/user/' . $request->input('customer_id'));
    }

}
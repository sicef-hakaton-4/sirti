<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use View;
use App\Advert;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{

    public static $data;
    public static $id;

    public function liveSearch(Request $request)
    {

        $html="";

        $data = DB::table('posao')->where('naziv', 'like', '%' . $request->term . '%')->orwhere('opis', 'like', '%' . $request->term . '%')  ->limit(15)->get();
        if(sizeof($data)>0){

            foreach($data as $elem){
                $html=$html.'<div class="item">'."<a href='advert/$elem->ID'>".$elem->naziv.'<div class="count"></div></a></div>';

            }
                return $html;
        }
        else{
            $html='<div class="item">Nema rezultata pretrage...</div>';
            return $html;
        }

    }

    public function SearchResults($term)
    {
        $html="";
        $data = DB::table('posao')->where('naziv', 'like', '%' .$term . '%')->orwhere('opis', 'like', '%' .$term . '%')->get();

            $dt=array('data'=>$data,'size'=>sizeof($data));
            return View::make('pretraga', $dt);



    }
    public function rangposla($id){
        $zbirkoef=0;


        $niz=array();
        $data = DB::table('prijavljen')->where('id_posla',$id)->get();
        $data1 = DB::table('posao_vestine')->where('posao',$id)->get();
        foreach($data1 as $elemp)
        {
            $zbirkoef+=$elemp->koeficijent;
        }
        $zbirkoef= $zbirkoef/100;


        foreach($data as $elem){
            $tagscore=0;
            $tscore=0;
            $stscore=0;
            $isskor=0;
            $oskor=0;


            $data2 = DB::table('users')->where('id',$elem->id_user)->get();
            $data3 = DB::table('polozene_vestine')->where('user_id',$elem->id_user)->get();
            foreach($data3 as $elem2){
                $data4= DB::table('test')->where('id',$elem2->test_id)->get();
                foreach($data4 as $elem3){
                    $data5=DB::table('posao_vestine')->whereRaw('posao='.$id.' and kategorija='.$elem3->kategorija)->get();
                    foreach($data5 as $red){
                        $kof=$red->koeficijent/$zbirkoef;
                        $tagscore+=$elem2->score*$kof;
                    }
                }

            }
            $tscore=$elem->score*0.4;
            $tagscore=$tagscore*0.3;
            foreach($data2 as $elem4){
                if($elem4->starost>=40)$stscore=0.01;
                else  if($elem4->starost>=35)$stscore=0.02;
                else   if($elem4->starost>=30)$stscore=0.03;
                else  if($elem4->starost>=25)$stscore=0.04;
                else $stscore=0.05;

                if($elem->iskustvo==0)$isskor=0.1*0.2;
                else if($elem->iskustvo<=2)$isskor=0.1*0.4;
                else if($elem->iskustvo<=5)$isskor=0.1*0.6;
                else if($elem->iskustvo<=8)$isskor=0.1*0.8;
                else $isskor=0.15*1;

                if($elem4->obrazovanje==0)$oskor=0;
                else   if($elem4->obrazovanje==1)$oskor=0.15*0.2;
                else   if($elem4->obrazovanje==2)$oskor=0.15*0.4;
                else   if($elem4->obrazovanje==3)$oskor=0.15*0.6;
                else   if($elem4->obrazovanje==4)$oskor=0.15*0.8;
                else  $oskor=0.15*1;

                $score=$stscore+$isskor+$oskor+$tagscore*0.01+$tscore;


               // echo $elem4->username.' -  Score: '.$score.'<br>';
                $tm=array();
                array_push($tm, $elem4->username, $score);
                array_push($niz,$tm);
            }
        }

        if(sizeof($niz)>0){
            $dt=array('data'=>$niz);
            return View::make('posao', $dt);
        }
        else{
            $error=array('error'=>"Oglas ne postoji ili je obrisan!");
            return View::make('errors.404', $error);
        }
    }
    public function Advert($id)
    {
        $html="";
        $data = DB::table('posao')->where('id',$id)->get();
        if(sizeof($data)>0){
            $dt=array('data'=>$data,'naziv'=>$data[0]->naziv);
            return View::make('advert', $dt);
        }
        else{
           $error=array('error'=>"Oglas ne postoji ili je obrisan!");
            return View::make('errors.404', $error);
        }

    }

    public function AdvertTest($id)
    {
        $html="";
        $ad=array();
        $data = DB::table('posao_test')->where('posao',$id)->get();
        $vreme=0;
        foreach($data as $elem){
            $test= DB::table('pitanja')->where('test',$elem->test)->get();
            $vr=DB::table('test')->where('id',$elem->test)->get();
            $vreme=$vreme+$vr[0]->trajanje;
            foreach($test as $x){
                array_push($ad,$x);

            }

        }
        $naziv="Testiranje";
        if(sizeof($data)>0){
            $dt=array('data'=>$ad,'naziv'=>$naziv, 'vreme'=>$vreme, 'idt'=>$id);
            return View::make('prijava', $dt);
        }
        else{
            $error=array('error'=>"Oglas ne postoji ili je obrisan!");
            return View::make('errors.404', $error);
        }

    }



    public function skillTest($id)
    {
        $html="";
        $ad=array();
        $data = DB::table('test')->whereRaw('kategorija='.$id.' and firma=0')->get();
        $vreme=0;
        $idx="";
        foreach($data as $elem){
            $test= DB::table('pitanja')->where('test',$elem->id)->get();
            $vr=DB::table('test')->where('id',$elem->id)->get();
            $vreme=$vreme+$vr[0]->trajanje;

            foreach($test as $x){
                $idx=$x->test;
                array_push($ad,$x);

            }

        }
        $naziv="Testiranje";
        if(sizeof($data)>0){
            $dt=array('data'=>$ad,'naziv'=>$naziv, 'vreme'=>$vreme, 'idt'=>$idx);
            return View::make('prijava2', $dt);
        }
        else{
            $error=array('error'=>"Oglas ne postoji ili je obrisan!");
            return View::make('errors.404', $error);
        }

    }

    public function dodajprijavu($ids, Request $request){
        //var_dump($ids);
        $ids = explode(";",$ids);
        $len=count($ids)-1;
        $tac=0;
        for($i=0;$i<$len;$i++){
            if($request->input($ids[$i]))$tac++;
        }
        $score=floor(($tac*100)/$len);

        $xx= DB::select('SELECT * FROM polozene_vestine WHERE user_id = ' . Auth::user()->id .' and test_id='. $ids[$len]);
        if(count($xx)) {
           $idT=DB::table('polozene_vestine')
               ->whereRaw('test_id='.$ids[$len].' and user_id = ' . Auth::user()->id)
               ->update(['score' => $score]);
        }else{ $idT = DB::table('polozene_vestine')->insertGetId(
            [
                'test_id' => $ids[$len],
                'user_id' => Auth::user()->id,
                'score' => $score,

            ]
        );}
        return redirect('profil');
    }
    public function dodajprijavu2($ids, Request $request){
        var_dump($ids);
        $ids = explode(";",$ids);
        $len=count($ids)-1;
        $tac=0;
        for($i=0;$i<$len;$i++){
            if($request->input($ids[$i]))$tac++;
        }
        $score=floor(($tac*100)/$len);

        $idT = DB::table('prijavljen')->insertGetId(
            [
                'id_posla' => $ids[$len],
                'id_user' => Auth::user()->id,
                'score' => $score,
                'iskustvo' => $request->input('inputTrajanje')

            ]
        );

        return redirect('profil');
    }
    public function Category($id)
    {
        $html="";
        $data = DB::table('belongs_to')

            ->join('advertisment', 'advertisment.advert_id', '=', 'belongs_to.advert_id')
            ->join('category',  function ($join)use($id) {
                $join->on('category.category_id', '=', 'belongs_to.category_id')
                    ->where('category.category_id', '=', $id);
            })

            ->select('belongs_to.*', 'category.*', 'advertisment.*')
            ->get();

        $dt=array('data'=>$data,'size'=>sizeof($data));
        return View::make('pretraga', $dt);

    }
    public static function StampajKategorije(){
        $html="";
        $data = DB::table('category')->get();
       foreach($data as $red){
           echo "<li><a href='" . url('category') . "/" . $red->category_id . "'>" . $red->name . "</a></li>";
       }
    }

    public function remove($id) {
        DB::table('published')->where('advert_id', "=", $id)->delete();
        DB::table('belongs_to')->where('advert_id', "=", $id)->delete();
        DB::table('advertisment')->where('advert_id', "=", $id)->delete();
        return redirect('/home');
    }

    public function showEdit($id) {
        SearchController::$id = $id;
        SearchController::$data = DB::select('SELECT * FROM advertisment as a WHERE a.advert_id = ' . $id);
        if(sizeof(SearchController::$data)>0) {
            return view('advert_edit');
        }
        return redirect('/home');
    }

    public function edit(Request $request) {
        echo SearchController::$id;
        DB::table('advertisment')->where('advert_id', $request->input('oglas_id'))->update(
            [
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'start_time' => $request->input('start'),
                'end_time' => $request->input('end')
            ]
        );
        return redirect('/home');
    }

}
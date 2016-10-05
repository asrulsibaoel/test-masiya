<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ParserController extends Controller
{

    //

    public function index(Request $request)
    {
        try {
            $xmlResource = simplexml_load_file('http://rimbunesia.com/tes-masiya/data.xml');
            $keyByCity = [];
            $keyByDepartment = [];
            $byDepartment = [];
            $byCity = [];

            foreach ($xmlResource as $key => $val) {
                $field = $val->field;

                //saving key
                foreach ($field as $k => $v) {
                    if ($v->attributes()->name == 'department') {
                        $keyByDepartment[] = (string) $v;
                    }

                    if ($v->attributes()->name == 'city') {
                        $keyByCity[] = (string) $v;
                    }
                }
            }

            foreach (array_unique($keyByDepartment) as $key => $val) {
                $byDepartment[$val] = [];
            }


            foreach (array_unique($keyByCity) as $key => $val) {
                $byCity[$val] = [];
            }

            foreach ($xmlResource as $key => $val) {
                $field = $val->field;
                $arrayField = (array) $val->field;
                unset($arrayField['@attributes']);

                foreach ($arrayField as $k => $v) {
                    if ($k == 5) {

                        foreach ($byDepartment as $kk => $vv) {
                            if ($kk == ((string) $v)) {
                                array_push($byDepartment[$kk], $arrayField);
                            }
                        }
                    }
                    if ($k == 3) {

                        foreach ($byCity as $kk => $vv) {
                            if ($kk == ((string) $v)) {
                                array_push($byCity[$kk], $arrayField);
                            }
                        }
                    }
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        return view('xml.index', ['data' => [$byCity, $byDepartment]]);
    }

}

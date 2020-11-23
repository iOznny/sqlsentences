<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Provider;
use App\Models\Product;

class HomeController extends Controller
{
    public function sentenceSQL (Request $request) {
        if(isset($request->sentence)) {
            switch ($request->sentence) {
                case 'JN':
                    $query = DB::table('products as pro')
                        ->join('providers as p', 'pro.provider_id', '=', 'p.id')
                        ->select(
                            'pro.id as proID', 'pro.key as proKey', 'pro.name as proName', 'pro.description as proDescription', 'pro.price', 'pro.cuantity',  'pro.provider_id',
                            'p.id as pID', 'p.key as pKey', 'p.name as pName', 'p.description as pDescription'   
                        )
                        ->get();

                    $data = array();
    
                    foreach ($query as $key => $q) {
                        $data[$key]['Producto ID'] = $q->proID;
                        $data[$key]['Producto Clave'] = $q->proKey;
                        $data[$key]['Producto Nombre'] = $q->proName;
                        $data[$key]['Producto Descripción'] = $q->proDescription;
                        $data[$key]['Producto Precio'] = $q->price;
                        $data[$key]['Producto Cantidad'] = $q->cuantity;
                        $data[$key]['Proveedor ID'] = $q->provider_id;
                        $data[$key]['Proveedor Clave'] = $q->pID;
                        $data[$key]['Proveedor Nombre'] = $q->pName;
                        $data[$key]['Proveedor Descripción'] = $q->pDescription;
                    }

                    dd($data);
                break;

                case 'LJ':
                    $query = DB::table('providers as p')
                        ->leftJoin('products as pro', 'p.id', '=', 'pro.provider_id')
                        ->select(
                            'p.id as pID', 'p.key as pKey', 'p.name as pName', 'p.description as pDescription',
                            'pro.id as proID', 'pro.key as proKey', 'pro.name as proName', 'pro.description as proDescription', 'pro.price', 'pro.cuantity',  'pro.provider_id'
                        )
                        ->get();
                break;

                case 'RJ':
                    $query = DB::table('providers as p')
                        ->rightJoin('products as pro', 'p.id', '=', 'pro.provider_id')
                        ->select(
                            'p.id as pID', 'p.key as pKey', 'p.name as pName', 'p.description as pDescription',
                            'pro.id as proID', 'pro.key as proKey', 'pro.name as proName', 'pro.description as proDescription', 'pro.price', 'pro.cuantity',  'pro.provider_id'
                        )
                        ->get();
                break;

                case 'IJ':
                    $query = DB::table('products as pro')
                        ->join('providers as p', 'pro.provider_id', '=', 'p.id')
                        ->select(
                            'pro.id as proID', 'pro.name as proName', 'pro.description as proDescription', 'pro.price as proPrice',
                            'p.id as pID', 'p.name as pName'
                        )
                        ->get();
                break;

                case 'SJ':
                    $query = DB::select(
                        "SELECT pro.id as proID, pro.name as proName, pro.description as proDescription, pro.price as proPrice, p.id as pID, p.name as pName 
                        FROM providers as p 
                        STRAIGHT_JOIN products as pro 
                        ON p.id = pro.provider_id"
                    );
                break;

                case 'IF':
                    $query = DB::select(
                        "SELECT p.name, if(count(pro.provider_id) > 0, 'SI', 'NO') AS status
                        FROM providers p
                        LEFT JOIN products pro
                        ON p.id = pro.provider_id
                        GROUP BY p.name"
                    );
                break;

                case 'WHEN':
                    $query = DB::select(
                        "SELECT p.name, 
                        CASE count(pro.provider_id) WHEN 0 THEN 'NO'
                        ELSE 'SI' END AS 'Status'
                        FROM providers p
                        LEFT JOIN products pro
                        ON p.id = pro.provider_id
                        GROUP BY p.name"
                    );
                break;

                case 'PCMAX':
                    $query = DB::select("SELECT @preciomayor:=max(price) AS priceMax FROM products");
                break;

                case 'RGPCMAX':
                    $query = DB::select(
                        "SELECT p.* 
                        FROM products AS p
                        WHERE p.price = 
                            (SELECT @preciomayor:=max(p.price) 
                            FROM products AS p)"
                    );

                    $data = array();

                    foreach ($query as $q) {
                        $data['ID'] = $q->id;
                        $data['Clave'] = $q->key;
                        $data['Nombre'] = $q->name;
                        $data['Descripción'] = $q->description;
                        $data['Precio'] = $q->price;
                        $data['Cantidad'] = $q->cuantity;
                        $data['Proveedor ID'] = Provider::find($q->provider_id)->name;
                    }
                break;

                case 'TB':
                    # code...
                break;
            }
        } else {
            $request->session()->flash('mensaje', 'Ocurrio un error, verifique su sentencia SQL.');
            $request->session()->flash('color-class', 'danger text-center');   
        }

        return view('inicio', compact('data'));
    }
}

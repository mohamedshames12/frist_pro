<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComputersControllers extends Controller
{


//    array of static data structures


        private static function getData(){
            // Create array of data 'Cuz show 'em in my page
            return [
                ["id" => 1, "name" => "laptop", "price" => 330],
                ["id" => 2, "name" => "phone", "price" => 300],
                ["id" => 3, "name" => "meshen", "price" => 530],
                ["id" => 4, "name" => "PC", "price" => 900],
            ];
        }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('stotrs.index', [
            //  request to index the resource
            "stotrs" => self::getData(),
        ]);

        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // send to show
        $stores = self::getData();
        $index = array_search($id, array_column($stores, 'id'));

        return view("storrs.show", [
            "stotr" => $stores[$index]
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}


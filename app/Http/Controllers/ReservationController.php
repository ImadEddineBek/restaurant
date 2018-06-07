<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(['data'=>Reservation::all()],200);

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
        //

        $data = $request->all();
        print_r( $data);
        $allTables = DB::table('tables')->where('restaurant_id',$data['restaurant_id'])->select('tables.id')->orderBy('nb_places')->get();
        $notAvailableTables = DB::table('tables')
            ->where('restaurant_id',$data['restaurant_id'])
            ->where('tables.nb_places','>=',$data['nb_places'])
            ->join('reservations', 'tables.id', '=', 'reservations.table_id')
            ->where('reservations.end','<',$data['start'])
            ->where('reservations.start','>',$data['end'])
            ->select('tables.id')
            ->get();

        foreach ($allTables as $table) {
            if(!$this->containsTableId($notAvailableTables,$table)){
                $data['table_id']=$table->id;
                print_r( $data);
                $reservation = new Reservation();
                $reservation->table_id = $data['table_id'];
                $reservation->start = $data['start'];
                $reservation->end = $data['end'];
                $reservation->nb_places = $data['nb_places'];
                $reservation->name = $data['name'];
                $reservation->confirmed = '0';
                $reservation->smoker = '0';
                $reservation->parking = '0';
                $reservation->save();
                return response()->json(['message'=>'restaurant is full'], 200);

            }
        }
        return response()->json(['message'=>'restaurant is full'], 401);

    }
    private function containsTableId($notAvailableTables,$table){
        foreach ($notAvailableTables as $notAvailableTable){
            if ($notAvailableTable->id == $table->id)return true;
        }
        return false;
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}

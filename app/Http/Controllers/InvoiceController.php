<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Client;
use App\Models\Job_list;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $clients = Client::all();
        // $job_list = Job_list::all();
        // $invoices = Invoice::all();
        // dd($clients,$job_list,$invoices);
        
        /**
         * Working with DB facade
         */
        $invoices_generic = Invoice::all();
        $invoices = DB::table('invoices')
        ->join('clients','invoices.client_id','=','clients.id')->get();

        $title = "All Invoices List";
        //dd($invoices,$invoices_generic);
        return view('invoice',compact('title','invoices'));
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
     * @param  \Illuminate\Http\Request  $request
     * @use  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $invoice = Invoice::find($id);

        if(!$invoice){
            return redirect(route('invoice'));
        }

        

        $items = DB::table('job_lists')
        ->where('invoice_id',$id)
        ->get();
        
        $client_id = $invoice->client_id;
        $client = DB::table('clients')
        ->where('id',$client_id)
        ->first();
        
        $title = $client->name . '\'s Invoice | Invoice ID: ' . $id;
        
        return view('invoice',compact('title','invoice','items','client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}

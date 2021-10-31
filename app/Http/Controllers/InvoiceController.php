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
        ->select('invoices.id','name')
        ->rightJoin('clients','invoices.client_id','=','clients.id')->get();

        //dd($invoices);
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
        $create = true;
        $title = "Create your Invoice";
        return view('invoice',compact('title','create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $client_rq = $request->client;
        $job_list_rq = $request->job_list;
        
        


        $client = new Client();
        //Insert into Client
        $client->name = $client_rq['name'];
        $client->address = $client_rq['address'];//$client_rq;
        $client->save();

        $invoice = new Invoice();
        //Insert Invoice First
        $invoice->date = $request->date;
        $invoice->due_date = $request->due_date;
        $invoice->client_id = $client->id;//$request->client_id;
        $invoice->save();
        
        /** 
         //this is working script, just now disabled
        $job_data = array(
            'invoice_id' => $invoice->id,
            'title'=> 'This is Test',
            'amount'=> 254,
            'description'=> 'This is a description for a job based on a title'
        );
        dd(DB::table('job_lists')->insert($job_data));
        */

        foreach($job_list_rq as $jb_rq){
            $job_list = new Job_list();
            //Insert Invoice First //['invoice_id','title','amount', 'description'];
            $job_list->invoice_id = $invoice->id;
            $job_list->title = $jb_rq['title'];
            $job_list->amount = $jb_rq['amount'];
            $job_list->description = $jb_rq['description'];
            $job_list->save();
        }

        return back();
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

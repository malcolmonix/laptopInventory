@extends('layouts.app')
@section('title', 'Manage Inventory')
@section('content')
    <section class="content-header">
        <h3 class="header--primary">
        
            {{ $inventoryHistory->employee }}   <span> -  {{ $inventoryHistory->employee_id  }} </span>
      
        </h3>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body showblade__details">               

                <div class="showblade__details--item">
                    <h3>Equipment in Possesion:</h3>
                <p><strong>{{ App\Models\Brand::find($inventoryHistory->brand_id)->name }} {{ $inventoryHistory->equipment }} 
                </strong>- <em>{{ $inventoryHistory->serialnumber }}</em> - {{ $inventoryHistory->computer_name  }}</p>
              
                </div>

                <div class="showblade__details--item">
                    <h3>Issue Date:</h3>
                    <p>{{ date("F j, Y", strtotime($inventoryHistory->issue_date))  }}</p>
                </div>
                
                <div class="showblade__details--item">
                    <h3>Project:</h3>
                    <p>{{ $inventoryHistory->project  }}</p>
                </div>
                
                <div class="showblade__details--item">
                    <h3>Remarks:</h3>
                    <p>{{ $inventoryHistory->remarks  }}</p>
                </div>
                
            </div>

            <div class="showblade__form">
                 <iframe id="show_pdf" src="{{ asset($document) }}" ></iframe>
            </div>
            
        </div>
        
    </div>

    <div class="clear"></div>
@endsection

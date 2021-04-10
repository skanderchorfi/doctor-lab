@extends(backpack_view('blank'))

@if (auth('backpack')->user()->hasRole('admin'))
@php
    Widget::add([
        'type'    => 'div',
        'class'   => 'row',
        'content' => [ // widgets
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\WeeklyUsersChartController::class ],
            [ 'type' => 'chart', 'controller' => \App\Http\Controllers\Admin\Charts\NewEntriesChartController::class ],
        ]
    ]);

@endphp
@section('content')
@endsection
@endif


@if (auth('backpack')->user()->hasRole('medecin'))
    @section('content')
    <table class="table table-stripped">
        <th>
            <td>Date</td>
            <td>Heure</td>
            <td>Rec</td>
            <td>Taux GL</td>
        </th>
    </table>
    <tbody>
       @foreach (DB::connection('look4care')->select('select * from recommandations') as $recommendation )
           <tr class="odd">
               <td class="dtr-control"> {{ $recommendation->date }}</td>
               <td class="dtr-control"> {{ $recommendation->heure }}</td>
               <td class="dtr-control"> {{ $recommendation->rec }}</td>
               <td class="dtr-control"> {{ $recommendation->tauxGL }}</td>
           </tr>
        @endforeach
    </tbody>
    @endsection
@endif

@extends('include.navbar')

@section('title', 'Transaction List | Mediklik')

@section('content')

    <h1>Transactions</h1>
    <ul>
        @if (sizeof($transactions) == 0)
            <img src="http://memegen.link/custom/No Transactions%3F.jpg?alt=https://i.imgflip.com/6aoqqy.jpg" width="500px" style="margin: 20px 400px">
        @else
            <table class="table table-bordered mb-5" style="border-color:#CED9BB">
                <thead class="table" style="background-color: #CED9BB">
                    <tr class="table" style="background-color: #CED9BB; text-align: center; color: black; border-color:#CED9BB">
                        <th scope="col">Transaction ID</th>
                        <th scope="col">Transaction Data</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Table price</th>
                    </tr>
                </thead>
                @foreach ($transactions as $transaction)
                    <tr class="table-group-divider">
                        <td class="table-light">TR{{str_pad($transaction->transactionHeader->id, 3, "0", STR_PAD_LEFT)}} </td>
                        <td class="table-light">{{date_format($transaction->created_at, "Y-m-d")}}</td>
                        <td class="table-light">{{$transaction->item_name}}</td>
                        <td class="table-light">[x{{$transaction->qty}}]</td>
                        <td class="table-light">Rp {{$transaction->item_price * $transaction->qty}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </ul>


@endsection
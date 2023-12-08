@extends('include.navbar')

@section('title', 'Transaction List | Mediklik')

@section('content')
<body style="background-color: #abebf5">
    <h1 class="fs-1 p-3">Transactions</h1>
    <ul>
        @if (sizeof($transactions) == 0)
            <img src="http://memegen.link/custom/No Transactions%3F.jpg?alt=https://i.imgflip.com/6aoqqy.jpg" width="200px">
        @else
            <table class="table table-striped-columns">
                <tr>
                    <th class="table-secondary" scope="col">Transaction ID</th>
                    <th class="table-secondary" scope="col">Transaction Data</th>
                    <th class="table-secondary" scope="col">Item Name</th>
                    <th class="table-secondary" scope="col">Quantity</th>
                    <th class="table-secondary" scope="col">Table price</th>
                </tr>
                @foreach ($transactions as $transaction)
                    <tr class="table-group-divider">
                        <td class="table-light">TR{{str_pad($transaction->transactionHeader->id, 3, "0", STR_PAD_LEFT)}} </td>
                        <td class="table-light">{{date_format($transaction->created_at, "Y-m-d")}}</td>
                        <td class="table-light">{{$transaction->item_name}}</td>
                        <td class="table-light">[x{{$transaction->qty}}]</td>
                        <td class="table-light">${{$transaction->item_price * $transaction->qty}}</td>
                    </tr>
                @endforeach
            </table>
        @endif
    </ul>
</body>

@endsection
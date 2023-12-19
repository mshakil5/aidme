@extends('admin.layouts.admin')

@section('content')


<!-- content area -->
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="pagetitle pb-2">
                Transaction
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ermsg"></div>
            <div class="stsermsg"></div>
        </div>
    </div>


<div id="addThisFormContainer">
    
    
    <div class="data-container">
        <div class="row">
            <div class="col-lg-12">
                
                
                


                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="alltransaction-tab" data-bs-toggle="tab"
                        data-bs-target="#alltransaction" type="button" role="tab" aria-controls="alltransaction"
                        aria-selected="true">All transaction</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="moneyIn-tab" data-bs-toggle="tab" data-bs-target="#moneyIn"
                        type="button" role="tab" aria-controls="moneyIn" aria-selected="false">Money
                        in</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="moneyOut-tab" data-bs-toggle="tab"
                        data-bs-target="#moneyOut" type="button" role="tab" aria-controls="moneyOut"
                        aria-selected="false">Money out</button>
                </li>


                </ul>
                <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="alltransaction" role="tabpanel"
                    aria-labelledby="alltransaction-tab">
                    <div class="data-container">
                        <table class="table table-theme mt-4" id="example1">
                            <thead>
                                <tr> 
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Payment Process</th>
                                    <th scope="col">Transaction Fee</th>
                                    <th scope="col">Total Amount</th>
                                    <th scope="col">Dr Amount</th>
                                    <th scope="col">Cr Amount</th>
                                    <th scope="col">Balance</th>
                                </tr>
                            </thead>
                            <?php
                                $tbalance = $moneyIn - $moneyOut;
                            ?>
                            <tbody>
                                @foreach ($transaction as $item)
                                <tr> 
                                    <td class="fs-16 txt-secondary">{{$item->date}}</td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fs-20 txt-secondary fw-bold">{{$item->tran_no}}</span>
                                        </div>
                                    </td>
                                    <td class="fs-16 txt-secondary">
                                        {{$item->payment_type}}
                                    </td>
                                    
                                    <td class="fs-16 txt-secondary">
                                        {{ number_format($item->commission, 2) }}
                                    </td> 
                                    <td class="fs-16 txt-secondary">
                                        {{ number_format($item->total_amount, 2) }}
                                    </td> 
                                    <td class="fs-16 txt-secondary">
                                        @if ($item->tran_type == "In") {{ number_format($item->amount, 2) }} @endif
                                    </td> 
                                    <td class="fs-16 txt-secondary">
                                        @if ($item->tran_type == "Out") {{ number_format($item->amount, 2) }} @endif
                                    </td> 
                                    <td class="fs-16 txt-secondary">
                                        £{{ number_format($tbalance, 2) }}
                                    </td> 
                                    @php
                                    if ($item->tran_type == "In") {
                                        $tbalance = $tbalance - $item->amount;
                                    } else {
                                        $tbalance = $tbalance + $item->amount;
                                    }
                                    @endphp
                                </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        </div>

                </div>
                <div class="tab-pane fade" id="moneyIn" role="tabpanel" aria-labelledby="moneyIn-tab">
                    <div class="data-container">
                        <table class="table table-theme mt-4" id="example2">
                            <thead>
                                <tr> 
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Dr Amount</th>
                                    <th scope="col">Total Dr Amount</th>
                                </tr>
                            </thead>
                            <?php
                                $tDrbalance = $moneyIn;
                            ?>
                            <tbody>
                                @foreach ($transaction as $item)
                                @if ($item->tran_type == "In")
                                <tr> 
                                    <td class="fs-16 txt-secondary">{{$item->date}}</td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fs-20 txt-secondary fw-bold">{{$item->tran_no}}</span>
                                        </div>
                                    </td>
                                    <td class="fs-16 txt-secondary">
                                        {{$item->description}}
                                    </td>
                                    <td class="fs-16 txt-secondary">
                                        {{ number_format($item->amount, 2) }}
                                    </td>

                                    <td class="fs-16 txt-secondary">
                                        £{{ number_format($tDrbalance, 2) }}
                                    </td>
                                    
                                    @php
                                    if ($item->tran_type == "In") {
                                        $tDrbalance = $tDrbalance - $item->amount;
                                    }
                                    @endphp
                                </tr> 
                                @endif
                                @endforeach
                            </tbody>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="moneyOut" role="tabpanel" aria-labelledby="moneyOut-tab">
                    <div class="data-container">
                        <table class="table table-theme mt-4" id="example3">
                            <thead>
                                <tr> 
                                    <th scope="col">Date</th>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Cr Amount</th>
                                    <th scope="col">Total Cr Amount</th>
                                </tr>
                            </thead>
                            <?php
                                $tCrbalance = $moneyOut;
                            ?>
                            <tbody>
                                @foreach ($transaction as $item)
                                @if ($item->tran_type == "Out")
                                <tr> 
                                    <td class="fs-16 txt-secondary">{{$item->date}}</td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <span class="fs-20 txt-secondary fw-bold">{{$item->tran_no}}</span>
                                        </div>
                                    </td>
                                    <td class="fs-16 txt-secondary">
                                        {{$item->description}}
                                    </td>
                                    <td class="fs-16 txt-secondary">
                                        {{ number_format($item->amount, 2) }}
                                    </td>

                                    <td class="fs-16 txt-secondary">
                                        £{{ number_format($tCrbalance, 2) }}
                                    </td>
                                    @php
                                    if ($item->tran_type == "Out") {
                                        $tCrbalance = $tCrbalance - $item->amount;
                                    }
                                    @endphp
                                </tr> 
                                @endif
                                @endforeach
                            </tbody>
                    </table>
                    </div>
                </div>



                </div>


                

            </div>
            <hr>
        </div>
    </div>


</div>

        
</div>


@endsection
@section('script')

<script type="text/javascript">

    $(document).ready(function() {
        $('#example1, #example2, #example3').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        } );
    });
</script>
@endsection
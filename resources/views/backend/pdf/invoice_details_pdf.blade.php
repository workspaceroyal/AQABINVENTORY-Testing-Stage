@extends('admin.admin_master')
@section('admin')

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0"> ক্রেতার পেমেন্ট রিপোর্ট </h4>

                                    <div class="page-title-right">
                                        <ol class="m-0 breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">ক্রেতার পেমেন্ট রিপোর্ট</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="invoice-title">
                <h4 class="float-end font-size-16"><strong>ইনভয়েস নং # {{ $payment['invoice']['invoice_no'] }}</strong></h4>
                <h3>
                    <img src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo" height="24"/> আল-কুরআন একাডেমি বাংলাদেশ
                </h3>
            </div>
            <hr>

            <div class="row">
                <div class="mt-4 col-6">
                    <address>
                        <strong>আল-কুরআন একাডেমি বাংলাদেশ:</strong><br>
                        ৩২ পুরানা পল্টন, ঢাকা ১০০০, বাংলাদেশ<br>
                        alquranacademybangladesh@gmail.com
                    </address>
                </div>
                <div class="mt-4 col-6 text-end">
                    <address>
                        <strong>ইনভয়েস তারিখ:</strong><br>
                         {{ date('d-m-Y',strtotime($payment['invoice']['date'])) }} <br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">
                    <h3 class="font-size-16"><strong>ক্রেতার ইনভয়েস</strong></h3>
                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>নাম </strong></td>
            <td class="text-center"><strong>মোবাইল</strong></td>
            <td class="text-center"><strong>ইমেইল</strong>
            </td>


        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        <tr>
            <td> {{ $payment['customer']['name'] }}</td>
            <td class="text-center">{{ $payment['customer']['mobile_no']  }}</td>
            <td class="text-center">{{ $payment['customer']['email']  }}</td>


        </tr>


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>

        </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">

                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>Sl </strong></td>
            <td class="text-center"><strong>ক্যাটাগরি</strong></td>
            <td class="text-center"><strong>পণ্যের নাম</strong>
            </td>
            <td class="text-center"><strong>বর্তমান স্টক</strong>
            </td>
            <td class="text-center"><strong>পরিমাণ</strong>
            </td>
            <td class="text-center"><strong>প্রতিটির মূল্য</strong>
            </td>
            <td class="text-center"><strong>মোট মূল্য</strong>
            </td>

        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->

      @php
        $total_sum = '0';

   $invoice_details = App\Models\InvoiceDetail::where('invoice_id',$payment->invoice_id)->get();
        @endphp
        @foreach($invoice_details as $key => $details)
        <tr>
           <td class="text-center">{{ $key+1 }}</td>
            <td class="text-center">{{ $details['category']['name'] }}</td>
            <td class="text-center">{{ $details['product']['name'] }}</td>
            <td class="text-center">{{ $details['product']['quantity'] }}</td>
            <td class="text-center">{{ $details->selling_qty }}</td>
            <td class="text-center"> ৳ {{ $details->unit_price }}</td>
            <td class="text-center"> ৳ {{ $details->selling_price }}</td>

        </tr>
         @php
        $total_sum += $details->selling_price;
        @endphp
        @endforeach
            <tr>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="text-center thick-line">
                    <strong>মোট</strong></td>
                <td class="thick-line text-end"> ৳ {{ $total_sum }}</td>
            </tr>
            <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="text-center no-line">
                    <strong>ছাড়</strong></td>
                <td class="no-line text-end"> ৳ {{ $payment->discount_amount }}</td>
            </tr>
             <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="text-center no-line">
                    <strong>নগদ</strong></td>
                <td class="no-line text-end"> ৳{{ $payment->paid_amount }}</td>
            </tr>

             <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="text-center no-line">
                    <strong>বাকি</strong></td>
                <td class="no-line text-end"> ৳ {{ $payment->due_amount }}</td>
            </tr>
            <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="text-center no-line">
                    <strong>সর্বমোট</strong></td>
                <td class="no-line text-end"><h4 class="m-0">৳ {{ $payment->total_amount }}</h4></td>
            </tr>



            <tr>
                <td colspan="7" style="text-align: center;font-weight: bold;">সামারি</td>

            </tr>

             <tr>
                <td colspan="4" style="text-align: center;font-weight: bold;">তারিখ </td>
                <td colspan="3" style="text-align: center;font-weight: bold;">টাকার পরিমাণ</td>

            </tr>
@php
$payment_details = App\Models\PaymentDetail::where('invoice_id',$payment->invoice_id)->get();

@endphp

            @foreach($payment_details as $item)
             <tr>
                <td colspan="4" style="text-align: center;font-weight: bold;">{{ date('d-m-Y',strtotime($item->date)) }}</td>
                <td colspan="3" style="text-align: center;font-weight: bold;"> ৳ {{ $item->current_paid_amount }}</td>

            </tr>
            @endforeach









                            </tbody>
                        </table>
                    </div>

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"> প্রিন্ট/ডাউনলোড</i></a>
                            {{-- <a href="#" class="btn btn-primary waves-effect waves-light ms-2">Download</a> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end row -->
















</div>
</div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>


@endsection

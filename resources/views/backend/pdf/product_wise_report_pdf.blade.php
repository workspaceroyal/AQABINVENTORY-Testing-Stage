@extends('admin.admin_master')
@section('admin')

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">পণ্য ভিত্তিক স্টক রিপোর্ট</h4>

                                    <div class="page-title-right">
                                        <ol class="m-0 breadcrumb">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">পণ্য ভিত্তিক স্টক রিপোর্ট</li>
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

                    </address>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">

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

            <td class="text-center"><strong>সরবরাহকারী</strong></td>
            <td class="text-center"><strong>একক</strong>
            </td>
            <td class="text-center"><strong>ক্যাটাগরি</strong>
            </td>
            <td class="text-center"><strong>পণ্য</strong>
            </td>
            <td class="text-center"><strong>স্টক</strong>
            </td>


        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->



        <tr>

         <td class="text-center"> {{ $product['supplier']['name'] }} </td>
         <td class="text-center"> {{ $product['unit']['name'] }} </td>
         <td class="text-center"> {{ $product['category']['name'] }} </td>
         <td class="text-center"> {{ $product->name }} </td>
         <td class="text-center"> {{ $product->quantity }} </td>


        </tr>


                            </tbody>
                        </table>
                    </div>


        @php
        $date = new DateTime('now', new DateTimeZone('Asia/Dhaka'));
        @endphp
        <i>Printing Time : {{ $date->format('F j, Y, g:i a') }}</i>

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

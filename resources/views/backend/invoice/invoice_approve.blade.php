@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">ইনভয়েস অনুমোদন</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
    @php
    $payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
    @endphp
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
<h4>Invoice No: #{{ $invoice->invoice_no }} - {{ date('d-m-Y',strtotime($invoice->date)) }} </h4>
    <a href="{{ route('invoice.pending.list') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-list"> বিবেচনাধীন ইনভয়েস তালিকা </i></a> <br>  <br>

     <table class="table table-dark" width="100%">
        <tbody>
            <tr>
                <td><p>ক্রেতার তথ্য </p></td>
                <td><p> নাম: <strong> {{ $payment['customer']['name']  }} </strong> </p></td>
                <td><p>মোবাইল: <strong> {{ $payment['customer']['mobile_no']  }} </strong> </p></td>
               <td><p> ইমেইল: <strong> {{ $payment['customer']['email']  }} </strong> </p></td>
            </tr>

             <tr>
             <td></td>
              <td colspan="3"><p>বিবরণ: <strong> {{ $invoice->description  }} </strong> </p></td>
             </tr>
        </tbody>

     </table>


     <form method="post" action="{{ route('approval.store',$invoice->id) }}">
      @csrf
         <table border="1" class="table table-dark" width="100%">
            <thead>
                <tr>
                    <th class="text-center">নং</th>
                    <th class="text-center">ক্যাটাগরি</th>
                    <th class="text-center">পণ্য</th>
                    <th class="text-center" style="background-color: #8B008B">বর্তনাম স্টক</th>
                    <th class="text-center">পরিমাণ</th>
                    <th class="text-center">প্রিতিটির মূল্য </th>
                    <th class="text-center">মোট মূল্য</th>
                </tr>

            </thead>
    <tbody>
        @php
        $total_sum = '0';
        @endphp
        @foreach($invoice['invoice_details'] as $key => $details)
        <tr>

            <input type="hidden" name="category_id[]" value="{{ $details->category_id }}">
            <input type="hidden" name="product_id[]" value="{{ $details->product_id }}">
            <input type="hidden" name="selling_qty[{{$details->id}}]" value="{{ $details->selling_qty }}">

            <td class="text-center">{{ $key+1 }}</td>
            <td class="text-center">{{ $details['category']['name'] }}</td>
            <td class="text-center">{{ $details['product']['name'] }}</td>
            <td class="text-center" style="background-color: #8B008B">{{ $details['product']['quantity'] }}</td>
            <td class="text-center">{{ $details->selling_qty }}</td>
            <td class="text-center"> ৳ {{ $details->unit_price }}</td>
            <td class="text-center"> ৳{{ $details->selling_price }}</td>
        </tr>
        @php
        $total_sum += $details->selling_price;
        @endphp
        @endforeach
        <tr>
            <td colspan="6"> মোট </td>
             <td > ৳ {{ $total_sum }} </td>
        </tr>
         <tr>
            <td colspan="6"> ছাড় </td>
             <td > ৳ {{ $payment->discount_amount }} </td>
        </tr>

         <tr>
            <td colspan="6"> নগদ </td>
             <td > ৳ {{ $payment->paid_amount }} </td>
        </tr>

         <tr>
            <td colspan="6"> বাকি </td>
             <td > ৳ {{ $payment->due_amount }} </td>
        </tr>

        <tr>
            <td colspan="6"> সর্বমোট </td>
             <td > ৳ {{ $payment->total_amount }}</td>
        </tr>
    </tbody>

         </table>

         <button type="submit" class="btn btn-info">ইনভয়েস অনুমোদন</button>

     </form>



                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection

@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0"> ক্রেতা ভিত্তিক রিপোর্ট </h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">


    <div class="row">
        <div class="text-center col-md-12">
            <strong> ক্রেতা ভিত্তিক বাকি রিপোর্ট </strong>
            <input type="radio" name="customer_wise_report" value="customer_wise_credit" class="search_value"> &nbsp;&nbsp;


            <strong> ক্রেতা ভিত্তিক নগদ রিপোর্ট </strong>
            <input type="radio" name="customer_wise_report" value="customer_wise_paid" class="search_value">


        </div>
    </div> <!-- // end row  -->

<!--  /// ক্রেতা বাকি ভিত্তিক  -->
    <div class="show_credit" style="display:none">
        <form method="GET" action="{{ route('customer.wise.credit.report') }}" id="myForm" target="_blank" >

            <div class="row">
                <div class="col-sm-8 form-group">
                    <label>ক্রেতার নাম </label>
              <select name="customer_id" class="form-select select2"  >
                <option value="">সিলেক্ট করুন</option>
                @foreach($customers as $cus)
                <option value="{{ $cus->id }}">{{ $cus->name }}</option>
               @endforeach
                </select>
                </div>

                <div class="col-sm-4" style="padding-top: 28px;">
                    <button type="submit" class="btn btn-primary">সার্চ</button>
                </div>

            </div>

        </form>

    </div>
<!--  /// End ক্রেতা বাকি ভিত্তিক  -->

<!--  /// show_paid  -->
<div class="show_paid" style="display:none">
        <form method="GET" action="{{ route('customer.wise.paid.report') }}" id="myForm" target="_blank" >

            <div class="row">
                <div class="col-sm-8 form-group">
                    <label>ক্রেতার নাম </label>
              <select name="customer_id" class="form-select select2"  >
                <option value="">সিলেক্ট করুন</option>
                @foreach($customers as $cus)
                <option value="{{ $cus->id }}">{{ $cus->name }}</option>
               @endforeach
                </select>
                </div>

                <div class="col-sm-4" style="padding-top: 28px;">
                    <button type="submit" class="btn btn-primary">সার্চ</button>
                </div>

            </div>

        </form>

    </div>
<!--  /// End show_paid  -->






                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>




<script type="text/javascript">
    $(document).on('change','.search_value', function(){
        var search_value = $(this).val();
        if (search_value == 'customer_wise_credit') {
            $('.show_credit').show();
        }else{
            $('.show_credit').hide();
        }
    });

</script>


<script type="text/javascript">
    $(document).on('change','.search_value', function(){
        var search_value = $(this).val();
        if (search_value == 'customer_wise_paid') {
            $('.show_paid').show();
        }else{
            $('.show_paid').hide();
        }
    });

</script>




@endsection

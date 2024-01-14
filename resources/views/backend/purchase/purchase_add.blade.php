@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">ক্রয় যুক্ত করার পৃষ্ঠা </h4><br>

    <div class="row">
        <div class="col-md-4"></br>
            <div class="md-3">
                <label for="example-text-input" class="form-label">তারিখ</label>
                 <input class="form-control example-date-input" name="date" type="date"  id="date">
            </div>
        </div>

        <div class="col-md-4"></br>
            <div class="md-3">
                <label for="example-text-input" class="form-label">ক্রয় নং</label>
                 <input class="form-control example-date-input" name="purchase_no" type="text"  id="purchase_no">
            </div>
        </div>


        <div class="col-md-4"></br>
            <div class="md-3">
                <label for="example-text-input" class="form-label">সরবরাহকারী</label>
                <select id="supplier_id" name="supplier_id" class="form-select select2" aria-label="Default select example">
                <option selected="">একটি সিলেক্ট করুন</option>
                @foreach($supplier as $supp)
                <option value="{{ $supp->id }}">{{ $supp->name }}</option>
               @endforeach
                </select>
            </div>
        </div>


       <div class="col-md-4"></br>
            <div class="md-3">
                <label for="example-text-input" class="form-label">ক্যাটাগরি</label>
                <select name="category_id" id="category_id" class="form-select select2" aria-label="Default select example">
                <option selected="">একটি সিলেক্ট করুন</option>

                </select>
            </div>
        </div>


         <div class="col-md-4"></br>
            <div class="md-3">
                <label for="example-text-input" class="form-label">পণ্যের নাম </label>
                <select name="product_id" id="product_id" class="form-select select2" aria-label="Default select example">
                <option selected="">একটি সিলেক্ট করুন</option>

                </select>
            </div>
        </div>


<div class="col-md-4"></br>
    <div class="md-3">
        <label for="example-text-input" class="form-label" style="margin-top:43px;">  </label>
        <i class="btn btn-secondary btn-rounded waves-effect waves-light fas fa-plus-circle addeventmore"> আরো যুক্ত করুন</i>
    </div>
</div>





    </div> <!-- // end row  -->

        </div> <!-- End card-body -->
<!--  ---------------------------------- -->

        <div class="card-body">
        <form method="post" action="{{ route('purchase.store') }}">
            @csrf
            <table class="table-sm table-bordered" width="100%" style="border-color: #ddd;">
                <thead>
                    <tr>
                        <th>ক্যাটাগরি</th>
                        <th>পণ্যের নাম </th>
                        <th>পরিমাণ</th>
                        <th>একক প্রিতি মূল্য</th>
                        <th>বিবরণ</th>
                        <th>মোট মূল্য</th>
                        <th>একশন</th>

                    </tr>
                </thead>

                <tbody id="addRow" class="addRow">

                </tbody>

                <tbody>
                    <tr>
                        <td colspan="5"></td>
                        <td>
                            <input type="text" name="estimated_amount" value="0" id="estimated_amount" class="form-control estimated_amount" readonly style="background-color: #ddd;" >
                        </td>
                        <td></td>
                    </tr>

                </tbody>
            </table><br>
            <div class="form-group">
                <button type="submit" class="btn btn-info" id="storeButton">যুক্ত করুন</button>

            </div>

        </form>






        </div> <!-- End card-body -->







    </div>
</div> <!-- end col -->
</div>



</div>
</div>




<script id="document-template" type="text/x-handlebars-template">

<tr class="delete_add_more_item" id="delete_add_more_item">
        <input type="hidden" name="date[]" value="@{{date}}">
        <input type="hidden" name="purchase_no[]" value="@{{purchase_no}}">
        <input type="hidden" name="supplier_id[]" value="@{{supplier_id}}">

    <td>
        <input type="hidden" name="category_id[]" value="@{{category_id}}">
        @{{ category_name }}
    </td>

     <td>
        <input type="hidden" name="product_id[]" value="@{{product_id}}">
        @{{ product_name }}
    </td>

     <td>
        <input type="number" min="1" class="text-right form-control buying_qty" name="buying_qty[]" value="">
    </td>

    <td>
        <input type="number" class="text-right form-control unit_price" name="unit_price[]" value="">
    </td>

 <td>
        <input type="text" class="form-control" name="description[]">
    </td>

     <td>
        <input type="number" class="text-right form-control buying_price" name="buying_price[]" value="0" readonly>
    </td>

     <td>
        <i class="btn btn-danger btn-sm fas fa-window-close removeeventmore"></i>
    </td>

    </tr>

</script>


<script type="text/javascript">
    $(document).ready(function(){
        $(document).on("click",".addeventmore", function(){
            var date = $('#date').val();
            var purchase_no = $('#purchase_no').val();
            var supplier_id = $('#supplier_id').val();
            var category_id  = $('#category_id').val();
            var category_name = $('#category_id').find('option:selected').text();
            var product_id = $('#product_id').val();
            var product_name = $('#product_id').find('option:selected').text();


            if(date == ''){
                $.notify("Date is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(purchase_no == ''){
                $.notify("Purchase No is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }

                  if(supplier_id == ''){
                $.notify("Supplier is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(category_id == ''){
                $.notify("Category is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }
                  if(product_id == ''){
                $.notify("Product Field is Required" ,  {globalPosition: 'top right', className:'error' });
                return false;
                 }


                 var source = $("#document-template").html();
                 var tamplate = Handlebars.compile(source);
                 var data = {
                    date:date,
                    purchase_no:purchase_no,
                    supplier_id:supplier_id,
                    category_id:category_id,
                    category_name:category_name,
                    product_id:product_id,
                    product_name:product_name

                 };
                 var html = tamplate(data);
                 $("#addRow").append(html);
        });

        $(document).on("click",".removeeventmore",function(event){
            $(this).closest(".delete_add_more_item").remove();
            totalAmountPrice();
        });

        $(document).on('keyup click','.unit_price,.buying_qty', function(){
            var unit_price = $(this).closest("tr").find("input.unit_price").val();
            var qty = $(this).closest("tr").find("input.buying_qty").val();
            var total = unit_price * qty;
            $(this).closest("tr").find("input.buying_price").val(total);
            totalAmountPrice();
        });

        // Calculate sum of amout in invoice

        function totalAmountPrice(){
            var sum = 0;
            $(".buying_price").each(function(){
                var value = $(this).val();
                if(!isNaN(value) && value.length != 0){
                    sum += parseFloat(value);
                }
            });
            $('#estimated_amount').val(sum);
        }

    });


</script>




<script type="text/javascript">
    $(function(){
        $(document).on('change','#supplier_id',function(){
            var supplier_id = $(this).val();
            $.ajax({
                url:"{{ route('get-category') }}",
                type: "GET",
                data:{supplier_id:supplier_id},
                success:function(data){
                    var html = '<option value="">একটি সিলেক্ট করুন</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.category_id+' "> '+v.category.name+'</option>';
                    });
                    $('#category_id').html(html);
                }
            })
        });
    });

</script>


<script type="text/javascript">
    $(function(){
        $(document).on('change','#category_id',function(){
            var category_id = $(this).val();
            $.ajax({
                url:"{{ route('get-product') }}",
                type: "GET",
                data:{category_id:category_id},
                success:function(data){
                    var html = '<option value="">একটি সিলেক্ট করুন</option>';
                    $.each(data,function(key,v){
                        html += '<option value=" '+v.id+' "> '+v.name+'</option>';
                    });
                    $('#product_id').html(html);
                }
            })
        });
    });

</script>





@endsection

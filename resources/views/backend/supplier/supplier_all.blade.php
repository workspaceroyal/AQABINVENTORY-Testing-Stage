@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">সকল সরবরাহকারী</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="{{ route('supplier.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> সরবরাহকারী যুক্ত করুন</i></a> <br>  <br>

                    <h4 class="card-title">সরবরাহকারী সকল ডাটা </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>নং</th>
                            <th>নাম</th>
                            <th>মোবাইল</th>
                            <th>ইমেইল</th>
                            <th>ঠিকানা</th>
                            <th>একশন</th>

                        </thead>


                        <tbody>

                        	@foreach($suppliers as $key => $item)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td> {{ $item->name }} </td>
                             <td> {{ $item->mobile_no }} </td>
                              <td> {{ $item->email }} </td>
                               <td> {{ $item->address }} </td>
                            <td>
   <a href="{{ route('supplier.edit',$item->id) }}" class="btn btn-info sm" title="এডিট">  <i class="fas fa-edit"></i> </a>

     <a href="{{ route('supplier.delete',$item->id) }}" class="btn btn-danger sm" title="ডিলেট" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection

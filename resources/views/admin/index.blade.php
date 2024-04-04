@extends('admin.admin_master')

@section('admin')
<!-- Page-content -->
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h6 class="mb-sm-0">ড্যাশবোর্ড</h6>

                    <div class="page-title-right">
                        <ol class="m-0 breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">আপকিউব</a></li>
                            <li class="breadcrumb-item active">ড্যাশবোর্ড</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="pb-0 card-body">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">ক্রয় রিপোর্ট<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <li ><a href="{{ route('purchase.all') }}">&nbsp; সকল ক্রয়</a></li>
                                    <li><a href="{{ route('purchase.pending') }}">&nbsp; ক্রয় অনুমোদন</a></li>
                                    <li><a href="{{ route('daily.purchase.report') }}">&nbsp; প্রাত্যহিক রিপোর্ট</a></li>
                                    <li><a href="{{ route('supplier.all') }}">&nbsp; সরবরাহকারী</a></li>

                                </div>
                            </div>
                        </div>
                        <h6 class="mb-4 card-title">ক্রয়</h6>

                        <div class="m-1 row">
                            <a href="{{ route('purchase.add') }}" class=" btn btn-success btn-rounded waves-effect waves-light" ">নতুন ক্রয়</i></a>
                        </div> <br>

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সকল ক্রয়</strong></h6>
                                                <a href="{{ route('purchase.all') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>ক্রয় অনুমোদন</strong></h6>
                                                <a href="{{ route('purchase.pending') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>ক্রয় রিপোর্ট</strong></h6>
                                                <a href="{{ route('daily.purchase.report') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সরবরাহকারী</strong></h6>
                                                <a href="{{ route('supplier.all') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="pb-0 card-body">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="dropdown">
                                <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">ইনভয়েস রিপোর্ট<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <li><a href="{{ route('invoice.all') }}">&nbsp; সকল ইনভয়েস</a></li>
                                    <li><a href="{{ route('invoice.pending.list') }}">&nbsp; ইনভয়েস অনুমোদন</a></li>
                                    <li><a href="{{ route('print.invoice.list') }}">&nbsp; ইনভয়েস প্রিন্ট</a></li>
                                    <li><a href="{{ route('daily.invoice.report') }}">&nbsp; ইনভয়েস রিপোর্ট</a></li>

                                </div>
                            </div>
                        </div>
                        <h6 class="mb-4 card-title">ইনভয়েস</h6>

                        <div class="m-1 row">
                            <a href="{{ route('invoice.add') }}" class=" btn btn-success btn-rounded waves-effect waves-light" ">নতুন ইনভয়েস</i></a>
                        </div> <br>

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সকল ইনভয়েস</strong></h6>
                                                <a href="{{ route('invoice.all') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>ইনভয়েস অনুমোদন</strong></h6>
                                                <a href="{{ route('invoice.pending.list') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>ইনভয়েস প্রিন্ট</strong></h6>
                                                <a href="{{ route('print.invoice.list') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>ইনভয়েস রিপোর্ট</strong></h6>
                                                <a href="{{ route('daily.invoice.report') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>

                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="pb-0 card-body">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">স্টক রিপোর্ট<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <li><a href="{{ route('category.all') }}">&nbsp; সকল ক্যাটাগরি</a></li>
                                    <li><a href="{{ route('product.all') }}">&nbsp; সকল পণ্য</a></li>
                                    <li ><a href="{{ route('stock.report') }}">&nbsp; সকল স্টক রিপোর্ট</a></li>
                                    <li><a href="{{ route('stock.supplier.wise') }}">&nbsp; উৎস ভিত্তিক রিপোর্ট</a></li>

                                </div>
                            </div>
                        </div>
                        <h6 class="mb-4 card-title">পণ্যের স্টক</h6>

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">

                                    <div class="m-2 row">
                                        <a href="{{ route('category.add') }}" class="mt-2 btn btn-success btn-rounded waves-effect waves-light" ">নতুন ক্যাটাগরি</i></a>
                                    </div>

                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সকল ক্যাটাগরি</strong></h6>
                                                <a href="{{ route('category.all') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->

                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">

                                    <div class="m-2 row">
                                        <a href="{{ route('product.add') }}" class="mt-2 btn btn-success btn-rounded waves-effect waves-light" ">নতুন পণ্য</i></a>
                                    </div>

                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সকল পণ্য</strong></h6>
                                                <a href="{{ route('product.all') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সকল স্টক রিপোর্ট</strong></h6>
                                                <a href="{{ route('stock.report') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>উৎস ভিত্তিক রিপোর্ট</strong></h6>
                                                <a href="{{ route('stock.supplier.wise') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>
                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>

                </div><!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="pb-0 card-body">
                        <div class="float-end d-none d-md-inline-block">
                            <div class="dropdown">
                                <a class="text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">ক্রেতা রিপোর্ট<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <li><a href="{{ route('customer.all') }}">&nbsp; সকল ক্রেতা</a></li>
                                    <li><a href="{{ route('credit.customer') }}">&nbsp; বাকি রিপোর্ট</a></li>
                                    <li><a href="{{ route('paid.customer') }}">&nbsp; নগদ রিপোর্ট</a></li>
                                    <li><a href="{{ route('customer.wise.report') }}">&nbsp; ক্রেতার রিপোর্ট</a></li>

                                </div>
                            </div>
                        </div>
                        <h6 class="mb-4 card-title">ক্রেতা</h6>

                        <div class="m-1 row">
                            <a href="{{ route('customer.add') }}" class=" btn btn-success btn-rounded waves-effect waves-light" ">নতুন ক্রেতা</i></a>
                        </div> <br>

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>সকল ক্রেতা</strong></h6>
                                                <a href="{{ route('customer.all') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>বাকি রিপোর্ট</strong></h6>
                                                <a href="{{ route('credit.customer') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>নগদ রিপোর্ট</strong></h6>
                                                <a href="{{ route('paid.customer') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2"><strong>ক্রেতার রিপোর্ট</strong></h6>
                                                <a href="{{ route('customer.wise.report') }}" class="btn btn-success btn-rounded waves-effect waves-light" ">ক্লিক করুন </i></a>

                                            </div>
                                            <div class="avatar-sm">
                                                <span class="avatar-title bg-light text-success rounded-3">
                                                    <i class="mdi mdi-currency-bdt font-size-24"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div>

                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>

    </div>

</div>
<!-- End Page-content -->
@endsection

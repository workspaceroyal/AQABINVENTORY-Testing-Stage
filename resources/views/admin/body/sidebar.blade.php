 <div class="vertical-menu">

    <div data-simplebar class="h-100">

                    <!-- User details -->
        @php
        $id = Auth::user()->id;
        $adminData = App\Models\User::find($id);
        @endphp


        <div class="mt-3 text-center user-profile">

            <a href="{{ route('admin.profile') }}">

                <div>
                    <img class="avatar-md rounded-circle" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}"
                    alt="Header Avatar">
                </div>

                <div class="mt-3">
                    <h4 class="mb-1 font-size-16">{{ $adminData->name }}</h4>
                    <span class="text-muted"><i class="align-middle ri-record-circle-line font-size-14 text-success"></i> অনলাইন</span>
                </div>
        </a>
        </div>


                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">মেনু</li>

                            <li>
                                <a href="{{ url('/dashboard') }}" class="waves-effect">
                                    <i class="ri-home-fill"></i>
                                    <span>ড্যাশবোর্ড</span>
                                </a>
                            </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-hotel-fill"></i>
                <span>সরবরাহকারী</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('supplier.all') }}">সকল সরবরাহকারী</a></li>

            </ul>
        </li>


        <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-shield-user-fill"></i>
                <span>ক্রেতা</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('customer.all') }}">সকল ক্রেতা</a></li>
                 <li><a href="{{ route('credit.customer') }}">বাকি ক্রেতা</a></li>

                 <li><a href="{{ route('paid.customer') }}">নগদ ক্রেতা</a></li>
                  <li><a href="{{ route('customer.wise.report') }}">ক্রেতা ভিত্তিক রিপোর্ট</a></li>

            </ul>
        </li>


         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-delete-back-fill"></i>
                <span>একক</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('unit.all') }}">সকল একক</a></li>

            </ul>
        </li>

         <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-apps-2-fill"></i>
                <span>ক্যাটাগরি</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('category.all') }}">সকল ক্যাটাগরি</a></li>

            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-reddit-fill"></i>
                <span>পণ্য</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('product.all') }}">সকল পণ্য</a></li>

            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-oil-fill"></i>
                <span>ক্রয়</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('purchase.all') }}">সকল ক্রয়</a></li>
                <li><a href="{{ route('purchase.pending') }}">ক্রয় অনুমোদন</a></li>
                <li><a href="{{ route('daily.purchase.report') }}">দৈনিক ক্রয় রিপোর্ট</a></li>

            </ul>
        </li>


          <li>
            <a href="javascript: void(0);" class="has-arrow waves-effect">
                <i class="ri-compass-2-fill"></i>
                <span>ইনভয়েস</span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ route('invoice.all') }}">সকল ইনভয়েস</a></li>
                <li><a href="{{ route('invoice.pending.list') }}">ইনভয়েস অনুমোদন</a></li>
                <li><a href="{{ route('print.invoice.list') }}">প্রিন্ট ইনভয়েস লিস্ট</a></li>
                  <li><a href="{{ route('daily.invoice.report') }}">দৈনিক ইনভয়েস রিপোর্ট</a></li>

            </ul>
        </li>

                            {{-- <li class="menu-title">স্টক</li> --}}

    <li>
        <a href="javascript: void(0);" class="has-arrow waves-effect">
            <i class="ri-gift-fill"></i>
            <span>স্টক</span>
        </a>
        <ul class="sub-menu" aria-expanded="false">
            <li><a href="{{ route('stock.report') }}">স্টক রিপোর্ট</a></li>
            <li><a href="{{ route('stock.supplier.wise') }}">সরবরাহকারী / পণ্য ভিত্তিক </a></li>

        </ul>
    </li>

                            {{-- <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Support</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-invoice.html">ইনভয়েস</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li> --}}






                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>

<div class="deznav">
    <div class="deznav-scroll">
        <div class="main-profile">
            <div class="image-bx">
                <img src="https://avatarfiles.alphacoders.com/127/thumb-127272.jpg" alt="">
                <a href="javascript:void(0);"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name text-capitalize">
                {{-- <span class="font-w400 ">Hello,</span>  --}}
                {{ auth()->user()->first_name }}
                {{ auth()->user()->last_name }}</h5>
            <p class="email">
                {{-- <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                    data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">[email&#160;protected]</a> --}}
                <a href="mailto:{{ auth()->user()->email }}">{{ auth()->user()->email }}</a>
            </p>
        </div>
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a href="{{ route('home') }}" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label">Personal</li>
            <li>
                <a href="{{ route('profile') }}" aria-expanded="false">
                    {{-- <i class="flaticon-144-layout"></i> --}}
                    <i class="fa-solid fa-user"></i>
                    <span class="nav-text">Profile</span>
                </a>
            </li>
            {{-- <li class="nav-label">Apps</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Apps</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="app-profile.html">Profile</a></li>
                    <li><a href="post-details.html">Post Details</a></li>
                    <li><a href="page-chat.html">Chat<span class="badge badge-xs badge-danger">New</span></a>
                    </li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Project<span
                                class="badge badge-xs badge-danger">New</span></a>
                        <ul aria-expanded="false">
                            <li><a href="project-list.html">Project List</a></li>
                            <li><a href="project-card.html">Project Card</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">User<span
                                class="badge badge-xs badge-danger">New</span></a>
                        <ul aria-expanded="false">
                            <li><a href="user-list-datatable.html">User List</a></li>
                            <li><a href="user-list-column.html">User Card</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Contact<span
                                class="badge badge-xs badge-danger">New</span></a>
                        <ul aria-expanded="false">
                            <li><a href="contact-list.html">Contact List</a></li>
                            <li><a href="contact-card.html">Contact Card</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                        <ul aria-expanded="false">
                            <li><a href="email-compose.html">Compose</a></li>
                            <li><a href="email-inbox.html">Inbox</a></li>
                            <li><a href="email-read.html">Read</a></li>
                        </ul>
                    </li>
                    <li><a href="app-calender.html">Calendar</a></li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                        <ul aria-expanded="false">
                            <li><a href="ecom-product-grid.html">Product Grid</a></li>
                            <li><a href="ecom-product-list.html">Product List</a></li>
                            <li><a href="ecom-product-detail.html">Product Details</a></li>
                            <li><a href="ecom-product-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-invoice.html">Invoice</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                        </ul>
                    </li>
                </ul>
            </li> --}}


        </ul>
        <div class="copyright">
            {{-- <p><strong>{{ config('app.name') }}</strong> © 2022 All Rights Reserved</p> --}}
            <p class="fs-12">Made with <i class="fa-solid fa-heart"></i> by {{ config('app.name') }} </p>
        </div>
    </div>
</div>

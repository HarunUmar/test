@extends('auth.app')

@section('content')

<div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle">
                <div class="auth-box register">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center"></div>
                            <p class="lead">Buat Akunt</p>
                        </div>
              
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#myprofile" role="tab" data-toggle="tab" aria-expanded="true">Supplier</a></li>
                    <li class=""><a href="#account" role="tab" data-toggle="tab" aria-expanded="false">Costumer</a>
                    </li>

                </ul>



                    <div class="tab-content content-profile">
                        <!-- MY PROFILE -->
                        <div class="tab-pane fade active in" id="myprofile">
                            
                            @include('auth.register_suplier')

                        </div>
                        <!-- END MY PROFILE -->
                        <!-- ACCOUNT -->
                        <div class="tab-pane fade" id="account">

                         @include('auth.register_costumer')
                           
                        </div>
                        <!-- END PREFERENCES -->
                    </div>
               
               </div>
            </div>
         </div>
      </div>
    </div>




@endsection

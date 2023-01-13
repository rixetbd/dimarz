@php
$currentRouteName = Route::currentRouteName();
@endphp

<style>
    .inbox_list{
        padding: 50px 0 20px;
    }
    .inbox_list a{
        /* border-top:1px solid #e9e9e9; */
        border-bottom:1px solid #e9e9e9;
        width: 100%;
        display: block;
        padding: 10px 0;
        color: #000;
        position: relative;
    }
    .inbox_list a.active{
        color: #01d11d;
    }

    .inbox_list a.active .badges{
        color: #000;
    }
    .inbox_list a .badges{
        text-align: center;
        position: absolute;
        right: 0;
        background: #ebebeb;
        padding-left: 8px;
        padding-right: 8px;
        border-radius: 5px;
    }
    .inbox_list .fa{
        padding-right: 10px;
    }
</style>


    @php
        $consultation = App\Models\Consultation::where('status','=',0)->count();
        $briefmail = App\Models\BriefMail::where('status','=',0)->count();
        $briefmail = App\Models\CartModel::where('status','=',0)->count();
    @endphp


<div class="col-sm-12 col-md-3">
    <div class="card">
        <div class="card-body">
            <h5>Inbox</h5>
            <span>All Contacts Information</span>
            <div class="inbox_list">
                <a href="{{route('consultation.index')}}" class="{{$currentRouteName == "consultation.index"?"active":" "}}">
                    <i class="fa fa-users"></i> Consultation <span class="badges">{{($consultation!= '0'?$consultation:'')}}</span>
                </a>
                <a href="{{route('briefmail.index')}}" class="{{$currentRouteName == "briefmail.index"?"active":" "}}">
                    <i class="fa fa-envelope"></i> Brief Mail <span class="badges">{{($briefmail!= '0'?$briefmail:'')}}</span>
                </a>
                <a href="#">
                    <i class="fa fa-headphones"></i> General Contact
                </a>
                <a href="{{route('cart.ordergeneral.index')}}">
                    <i class="fa fa-shopping-cart"></i> Order Mail
                </a>
                <a href="#">
                    <i class="fa fa-cogs"></i> Custom Order Mail
                </a>
            </div>
        </div>
    </div>
</div>

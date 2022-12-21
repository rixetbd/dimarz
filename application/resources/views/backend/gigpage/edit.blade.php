@extends('backend.master')
@section('page_title', 'Update Gigpage')
@section('custom_style')
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/backend')}}/css/jsgrid.css">
<style>
    .meta_box {
        width: 400px;
        overflow: hidden;
        border: 1px solid #ccc;
    }

    .meta_box .img_box {
        position: relative;
        height: 210px;
        overflow: hidden;
        width: 400px;
    }

    .meta_box h6 {
        font-weight: 400;
        font-size: 13px;
        color: #898989;
    }

    .meta_box h5 {
        font-size: 16px;
        color: #727272;
    }

    .meta_box P {
        font-size: 12px;
        font-weight: 500;
        color: #898989;
    }

    .overly {
        cursor: pointer;
        width: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: #cccccce3;
        height: -webkit-fill-available;
        justify-content: center;
        align-items: center;
        font-size: 80px;
        color: #fff;
        display: none;
    }

    .meta_box .img_box:hover .overly {
        display: flex;
        transition: 1s ease-in;
    }

    .meta_pic_caption {
        padding-top: 5px;
        font-size: 13px;
        color: #898989;
    }

    #cke_short_description,
    #cke_overview_info,
    #cke_why_us,
    #cke_description {
        border: 1px solid #d3d3d3;
    }

    #cke_1_contents {
        height: 35vh;
    }

</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-xl-12">
            <form class="card" action="{{route('backend.gigpage.update')}}" enctype="multipart/form-data" method="POST"
                id="faqQA">
                @csrf
                <div class="card-header pb-0">
                    <h4 class="card-title mb-0">Edit Gigpage
                        <span class="float-end">
                            <a class="btn btn-primary" href="{{route('backend.gigpage.index')}}">Check Gigpage List
                            </a>
                        </span>
                    </h4>
                    <span>Edit new gigpage</span>
                    <div class="card-options"><a class="card-options-collapse" href="#"
                            data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                            class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                class="fe fe-x"></i></a></div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="title">Title </label>
                                <input class="form-control" type="hidden" id="id" name="id" value="{{$gigpage->id}}" required>
                                <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="{{$gigpage->title}}"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="sub_title">Subtitle</label>
                                <input class="form-control" type="text" id="sub_title" name="sub_title" value="{{$gigpage->sub_title}}"
                                    placeholder="Sub Title" required>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="mainpage_id">Mainpage Name</label>
                                <select class="form-select" id="mainpage_id" name="mainpage_id" required>
                                    <option value="">-- Select A Mainpage</option>
                                    @foreach ($mainpage as $item)
                                    <option value="{{$item->id}}" {{($item->id == $gigpage->mainpage_id?'selected':'')}}>{{$item->page_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label required" for="slug">Page Url (Automatic Generate)</label>
                                <input class="form-control" type="text" id="slug" name="slug" placeholder="slug" value="{{$gigpage->slug}}"
                                    required>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label required" for="short_description">Short Description - (in
                                Mainpage)</label>
                            <textarea class="form-control" placeholder="Enter short description" id="short_description"
                                name="short_description">{{$gigpage->short_description}}</textarea>
                        </div>

                        {{-- overview_title --}}
                        <div class="col-md-12 mb-3">
                            <label class="form-label required" for="overview_title">Overview Title</label>
                            <input class="form-control" type="text" id="overview_title" name="overview_title"
                                placeholder="Overview Title" value="{{$gigpage->overview_title}}" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label required" for="overview_info">Overview Info</label>
                            <textarea class="form-control" placeholder="Enter overview info" id="overview_info"
                                name="overview_info">{{$gigpage->overview_info}}</textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label required" for="why_us">Why Us</label>
                            <textarea class="form-control" placeholder="Enter why us info" id="why_us"
                                name="why_us">{{$gigpage->why_us}}</textarea>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0" for="easy_steps">3 Easy Steps</label>
                                <select class="form-select" id="easy_steps" name="easy_steps">
                                    <option value="">-- Select a Easy Steps</option>
                                    @foreach ($easyStepList as $item)
                                    <option value="{{$item->id}}" {{($item->id == $gigpage->easy_steps ?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-6">
                            <div class="mb-3">
                                <label class="form-label pt-0 required" for="faq_id">FAQ</label>
                                <select class="form-select" id="faq_id" name="faq_id" required>
                                    <option value="">-- Select a FAQ</option>
                                    @foreach ($faqList as $item)
                                    <option value="{{$item->id}}" {{($item->id == $gigpage->faq_id?'selected':'')}}>{{$item->title}} - {{$item->comment}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{--name_one_index	name_two	name_two_index	name_three	name_three_index --}}
                        <h5 class="pt-3 pb-2">Pricing</h5>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required" for="pricing_title">Title</label>
                            <input class="form-control" type="hidden" id="pricing_id" name="pricing_id" value="{{$pricingData['id']}}" required>
                            <input class="form-control" type="text" id="pricing_title" name="pricing_title" value="{{$pricingData['title']}}"
                                placeholder="Pricing Title" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required" for="pricing_subtitle">Sub Title</label>
                            <input class="form-control" type="text" id="pricing_subtitle" name="pricing_subtitle" value="{{$pricingData['subtitle']}}"
                                placeholder="Pricing Sub Title" required>
                        </div>
                        {{-- <div class="col-12 mb-3">
                            <hr>
                        </div> --}}
                        <div class="col-md-4 mb-3">
                            <h6>Package One</h6>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_name_one">Name</label>
                                <input class="form-control" type="text" id="pricing_name_one" name="pricing_name_one" value="{{$pricingData['pack_one']->pricing_name}}"
                                    placeholder="Pricing Name One" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_shortinfo_one">Short Info</label>
                                <textarea class="form-control" name="pricing_shortinfo_one" id="pricing_shortinfo_one"
                                    placeholder="Short Info" required>{{$pricingData['pack_one']->pricing_shortinfo}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_duration_one">Duration</label>
                                <input class="form-control" type="text" id="pricing_duration_one" value="{{$pricingData['pack_one']->pricing_duration}}"
                                    name="pricing_duration_one" placeholder="Pricing Name Duration One" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_price_one">Price</label>
                                <input class="form-control" type="number" id="pricing_price_one" name="pricing_price_one" value="{{$pricingData['pack_one']->pricing_price}}"
                                    placeholder="Pricing Name Price One" required>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <h6>Package Two</h6>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_name_two">Name</label>
                                <input class="form-control" type="text" id="pricing_name_two" name="pricing_name_two" value="{{$pricingData['pack_two']->pricing_name}}"
                                    placeholder="Pricing Name One" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_shortinfo_two">Short Info</label>
                                <textarea class="form-control" name="pricing_shortinfo_two" id="pricing_shortinfo_two"
                                    placeholder="Short Info" required>{{$pricingData['pack_two']->pricing_shortinfo}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_duration_two">Duration</label>
                                <input class="form-control" type="text" id="pricing_duration_two" value="{{$pricingData['pack_two']->pricing_duration}}"
                                    name="pricing_duration_two" placeholder="Pricing Name Duration One" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_price_two">Price</label>
                                <input class="form-control" type="number" id="pricing_price_two" name="pricing_price_two" value="{{$pricingData['pack_two']->pricing_price}}"
                                    placeholder="Pricing Name Price One" required>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <h6>Package Three</h6>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_name_three">Name</label>
                                <input class="form-control" type="text" id="pricing_name_three" value="{{$pricingData['pack_three']->pricing_name}}"
                                    name="pricing_name_three" placeholder="Pricing Name One" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_shortinfo_three">Short Info</label>
                                <textarea class="form-control" name="pricing_shortinfo_three"
                                    id="pricing_shortinfo_three" placeholder="Short Info" required>{{$pricingData['pack_three']->pricing_shortinfo}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_duration_three">Duration</label>
                                <input class="form-control" type="text" id="pricing_duration_three" value="{{$pricingData['pack_three']->pricing_duration}}"
                                    name="pricing_duration_three" placeholder="Pricing Name Duration One" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required" for="pricing_price_three">Price</label>
                                <input class="form-control" type="number" id="pricing_price_three" value="{{$pricingData['pack_three']->pricing_price}}"
                                    name="pricing_price_three" placeholder="Pricing Name Price One" required>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <h6>Features List</h6>

                            @foreach ($pricingList as $key => $item)
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <input class="form-control" type="text" id="" name="features_name_{{$key}}" value="{{$item->title}}"
                                        placeholder="0{{$key+1}}. Features Name">
                                </div>
                                <div class="checkbox checkbox-dark col-2">
                                    <input id="features_{{$key}}_l1" type="checkbox" name="features_{{$key}}_l1" {{($item->one=='1'?'checked':'')}}>
                                    <label for="features_{{$key}}_l1">Package One</label>
                                </div>
                                <div class="checkbox checkbox-dark col-2">
                                    <input id="features_{{$key}}_l2" type="checkbox" name="features_{{$key}}_l2" {{($item->two=='1'?'checked':'')}}>
                                    <label for="features_{{$key}}_l2">Package Two</label>
                                </div>
                                <div class="checkbox checkbox-dark col-2">
                                    <input id="features_{{$key}}_l3" type="checkbox" name="features_{{$key}}_l3" {{($item->three=='1'?'checked':'')}}>
                                    <label for="features_{{$key}}_l3">Package Three</label>
                                </div>
                            </div>
                            @endforeach

                            <a class="btn btn-sm btn-outline-info w-100 features_box my-2">Show More Input Field...</a>
                            <div class="features_box_2 d-none">

                                {{-- <div class="row">
                                    <div class="col-6 mb-3">
                                        <input class="form-control" type="text" id="" name="features_name_6"
                                            placeholder="More Features Name">
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_6_l1" type="checkbox" name="features_6_l1">
                                        <label for="features_6_l1">Package One</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_6_l2" type="checkbox" name="features_6_l2">
                                        <label for="features_6_l2">Package Two</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_6_l3" type="checkbox" name="features_6_l3">
                                        <label for="features_6_l3">Package Three</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <input class="form-control" type="text" id="" name="features_name_7"
                                            placeholder="More Features Name">
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_7_l1" type="checkbox" name="features_7_l1">
                                        <label for="features_7_l1">Package One</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_7_l2" type="checkbox" name="features_7_l2">
                                        <label for="features_7_l2">Package Two</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_7_l3" type="checkbox" name="features_7_l3">
                                        <label for="features_7_l3">Package Three</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <input class="form-control" type="text" id="" name="features_name_8"
                                            placeholder="More Features Name">
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_8_l1" type="checkbox" name="features_8_l1">
                                        <label for="features_8_l1">Package One</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_8_l2" type="checkbox" name="features_8_l2">
                                        <label for="features_8_l2">Package Two</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_8_l3" type="checkbox" name="features_8_l3">
                                        <label for="features_8_l3">Package Three</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <input class="form-control" type="text" id="" name="features_name_9"
                                            placeholder="More Features Name">
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_9_l1" type="checkbox" name="features_9_l1">
                                        <label for="features_9_l1">Package One</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_9_l2" type="checkbox" name="features_9_l2">
                                        <label for="features_9_l2">Package Two</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_9_l3" type="checkbox" name="features_9_l3">
                                        <label for="features_9_l3">Package Three</label>
                                    </div>
                                </div> --}}
                                <div class="row">
                                    <div class="col-6 mb-3">
                                        <input class="form-control" type="text" id="" name="features_name_10"
                                            placeholder="More Features Name">
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_10_l1" type="checkbox" name="features_10_l1">
                                        <label for="features_10_l1">Package One</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_10_l2" type="checkbox" name="features_10_l2">
                                        <label for="features_10_l2">Package Two</label>
                                    </div>
                                    <div class="checkbox checkbox-dark col-2">
                                        <input id="features_10_l3" type="checkbox" name="features_10_l3">
                                        <label for="features_10_l3">Package Three</label>
                                    </div>
                                </div>
                                <a class="btn btn-sm btn-outline-info w-100 features_box_3 my-2">Show More Input
                                    Field...</a>
                                <div class="d-none" id="features_box_3">
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <input class="form-control" type="text" id="" name="features_name_11"
                                                placeholder="More Features Name">
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_11_l1" type="checkbox" name="features_11_l1">
                                            <label for="features_11_l1">Package One</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_11_l2" type="checkbox" name="features_11_l2">
                                            <label for="features_11_l2">Package Two</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_11_l3" type="checkbox" name="features_11_l3">
                                            <label for="features_11_l3">Package Three</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <input class="form-control" type="text" id="" name="features_name_12"
                                                placeholder="More Features Name">
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_12_l1" type="checkbox" name="features_12_l1">
                                            <label for="features_12_l1">Package One</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_12_l2" type="checkbox" name="features_12_l2">
                                            <label for="features_12_l2">Package Two</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_12_l3" type="checkbox" name="features_12_l3">
                                            <label for="features_12_l3">Package Three</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <input class="form-control" type="text" id="" name="features_name_13"
                                                placeholder="More Features Name">
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_13_l1" type="checkbox" name="features_13_l1">
                                            <label for="features_13_l1">Package One</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_13_l2" type="checkbox" name="features_13_l2">
                                            <label for="features_13_l2">Package Two</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_13_l3" type="checkbox" name="features_13_l3">
                                            <label for="features_13_l3">Package Three</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <input class="form-control" type="text" id="" name="features_name_14"
                                                placeholder="More Features Name">
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_14_l1" type="checkbox" name="features_14_l1">
                                            <label for="features_14_l1">Package One</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_14_l2" type="checkbox" name="features_14_l2">
                                            <label for="features_14_l2">Package Two</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_14_l3" type="checkbox" name="features_14_l3">
                                            <label for="features_14_l3">Package Three</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <input class="form-control" type="text" id="" name="features_name_15"
                                                placeholder="More Features Name">
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_15_l1" type="checkbox" name="features_15_l1">
                                            <label for="features_15_l1">Package One</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_15_l2" type="checkbox" name="features_15_l2">
                                            <label for="features_15_l2">Package Two</label>
                                        </div>
                                        <div class="checkbox checkbox-dark col-2">
                                            <input id="features_15_l3" type="checkbox" name="features_15_l3">
                                            <label for="features_15_l3">Package Three</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h5 class="pt-3 pb-2">SEO Features</h5>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 mb-2">
                                    <label class="form-label required" for="meta_title">Meta Title</label>
                                    <input class="form-control" type="hidden" id="meta_id" name="meta_id" value="{{($metaSEO != ''?$metaSEO->id:'')}}">
                                    <input class="form-control" type="text" id="meta_title" name="meta_title" value="{{($metaSEO != ''?$metaSEO->meta_title:'')}}"
                                        placeholder="Meta Title" required>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label class="form-label required" for="meta_author">Meta Author</label>
                                    <input class="form-control" type="text" id="meta_author" name="meta_author" value="{{($metaSEO != ''?$metaSEO->meta_author:'')}}"
                                        placeholder="Meta Author" required>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="form-label" for="comment">Comment (Optional)</label>
                                    <input class="form-control" type="text" id="comment" name="comment" value="{{($metaSEO != ''?$metaSEO->comment:'')}}"
                                        placeholder="Comment">
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label class="form-label required" for="meta_description">Description</label>
                                    <textarea class="form-control" placeholder="Enter meta description"
                                        id="meta_description" name="meta_description">{{($metaSEO != ''?$metaSEO->meta_description:'')}}</textarea>
                                </div>

                                <div class="col-md-12 mb-2">
                                    <label class="form-label required" for="meta_keywords">Keywords</label>
                                    <textarea class="form-control"
                                        placeholder="Enter meta keywords ( Keywords separated by comma )"
                                        id="meta_keywords" name="meta_keywords">{{($metaSEO != ''?$metaSEO->meta_keywords:"")}}</textarea>
                                </div>
                                <div class="col-md-12 mb-2">
                                    <label class="form-label pt-0" for="meta_thumbnail">Meta Thumbnail</label>
                                    <input class="form-control" type="file" name="meta_thumbnail" id="meta_thumbnail"
                                        onchange="document.getElementById('meta_thumbnail_view').src = window.URL.createObjectURL(this.files[0])">
                                    <div class="meta_pic_caption">* Try uploading an image of 400x210 pixels or it will
                                        crop automatically.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <div class="meta_box">
                                    <div class="img_box">
                                        <img id="meta_thumbnail_view" class="img-fluid"
                                            src="{{asset(($metaSEO != ''?($metaSEO->meta_thumbnail !=''? 'application/uploads/meta/'.$metaSEO->meta_thumbnail:'assets/backend/images/meta-thumbnail.png'):'assets/backend/images/meta-thumbnail.png'))}}"
                                            alt="meta-thumbnail.png">
                                        <div class="overly">
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <div class="p-2" style="min-height: 160px;">
                                        <h6 class="meta_slug">{{url('/')}}/{{$gigpage->slug}}</h6>
                                        <h5 id="meta_pre_title">{{($metaSEO != ''?$metaSEO->meta_title:'Meta Title Placed Here')}}</h5>
                                        <p id="meta_pre_description">{{($metaSEO != ''?$metaSEO->meta_description:"With the help of Meta Tags, you can experiment with your content and see a sample of how it will appear on Google, Facebook and other search engines.")}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Update Gigpage</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection


@section('custom_script')
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.min.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/griddata.js"></script>
<script src="{{asset('assets/backend')}}/js/jsgrid/jsgrid.js"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/adapters/jquery.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/styles.js"></script>
<script src="{{asset('assets/backend')}}/js/editor/ckeditor/ckeditor.custom.js"></script>

<script>
    CKEDITOR.replace('short_description');
    CKEDITOR.replace('overview_info');
    CKEDITOR.replace('why_us');

    $('#title').on('keyup', function () {
        var sluggen = "{{url('/')}}";
        var data = $('#title').val();
        var slug = data.toLowerCase().replace(/[^\w\s-]/g, '').replace(/[\s_-]+/g, '-').replace(/^-+|-+$/g, '');
        $('#slug').val(slug);
        $('.meta_slug').html(sluggen + '/' + slug);
    });

    $('#category_id').on('change', function () {

        $.ajax({
            type: "POST",
            url: `{{route('backend.get_subcategory_auto')}}`,
            data: {
                category_id: $('#category_id').val(),
            },
            success: function (data) {

                let html = '<option value="">-- Select a sub category</option>';

                $.each(data.data, function (i, value) {
                    html += `<option value="${value.id}">${value.name}</option>`;
                });

                $('#subcategory_id').html(html);
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });

    $('.features_box').click(() => {
        $('.features_box').addClass('d-none');
        $('.features_box_2').removeClass('d-none');
    });

    $('.features_box_3').click(() => {
        $('.features_box_3').addClass('d-none');
        $('#features_box_3').removeClass('d-none');
    });

</script>

{{-- <script>
    $('#faqQA').on('submit', function (e) {
        e.preventDefault();
        var form = this;
        $.ajax({
            url: $(form).attr('action'),
            method: $(form).attr('method'),
            data: new FormData(form),
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (data) {
                $('input').val('');
                $('select').val('');
                $('textarea').val('');
                notyf.success("Q&A Saved Successfully!");
            },
            error: function (request, status, error) {
                notyf.error(request.responseJSON.message);
            }
        });
    });
</script> --}}

<script>
    $('.img_box').click(() => {
        $('#meta_thumbnail').click();
    });

    $('#meta_title').on('keyup', function () {
        var data = $('#meta_title').val();
        if (data != '') {
            $('#meta_pre_title').html(data);
        } else {
            $('#meta_pre_title').html("Meta Title Placed Here");
        }
    });

    $('#meta_description').on('keyup', function () {
        var data = $('#meta_description').val();
        if (data != '') {
            $('#meta_pre_description').html(data);
        } else {
            $('#meta_pre_description').html(
                `With the help of Meta Tags, you can experiment with your content and see a sample of how it will appear on Google, Facebook and other search engines.`
            );
        }
    });

</script>

@endsection

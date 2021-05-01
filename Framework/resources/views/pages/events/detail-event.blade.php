@extends('master.master')
@section('content')
    <div class="content-page-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-block card-stretch card-height blog blog-detail">
                    <div class="card-header">
                        <h3>{{Request::segment(2)}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="image-block">
                            <img src="{{URL::to('assets/images/blog/01.jpg')}}" class="img-fluid rounded w-100" alt="blog-img">
                        </div>
                        <div class="blog-description mt-3">
                            <div class="blog-meta d-flex align-items-center mb-3">
                                <div class="date mr-4"><i class="ri-calendar-2-fill pr-2"></i>March 21, 2020</div>
                                <div class="author mr-4"><i class="ri-user-fill pr-2"></i>By: Admin</div>
                                <div class="hit mr-4"><i class="las la-heart pr-2"></i>0 Hits</div>
                                <div class="comments"><i class="ri-chat-3-fill pr-2"></i>82 comments</div>
                            </div>
                            <h5 class="mb-2">There are many variations of passages of Lorem Ipsum available form look even slightly believable.</h5>
                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p> <a href="#" tabindex="-1">Read More <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


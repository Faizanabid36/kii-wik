<style>
    .fa {
        font-size: 25px;
    }
    /* Three column layout */
    .side {
        float: left;
        width: 15%;
        margin-top: 10px;
    }
    .middle {
        float: left;
        width: 70%;
        margin-top: 10px;
    }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }
    /* The bar container */
    .bar-container {
        width: 100%;
        background-color: #e0e0e0;
        text-align: center;
        color: white;
        border-radius: 50px;
    }
    /* Responsive layout - make the columns stack on top of each other instead of next to each other */
    @media (max-width: 400px) {
        .side, .middle {
            width: 100%;
        }
    }
    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: center
    }
    .rating > input {
        display: none
    }
    .rating > label {
        position: relative;
        width: 1em;
        font-size: 4.5vw;
        color: #28b6f6 !important;
        cursor: pointer
    }
    .rating > label::before {
        content: "\2605";
        position: absolute;
        opacity: 0
    }
    .rating > label:hover:before,
    .rating > label:hover ~ label:before {
        opacity: 1 !important
    }
    .rating > input:checked ~ label:before {
        opacity: 1
    }
    .rating:hover > input:checked ~ label:before {
        opacity: 0.4
    }
    .grey-text {
        color: #BDBDBD
    }
    .green-text {
        color: #4CAF50
    }
    .profile-pic img {
        border-radius: 50%
    }
</style>
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Rate User </h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
            <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">

            @if(auth()->id()!=$user->id )
                <div class="row">
                    <form style="width: 75%;margin: 0px auto" action="{{route('company.profile.review_add')}}"
                          method="post">
                        @csrf
                        <input hidden name="to_user_id" value="{{$user->id}}"/>
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                            <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                            <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                            <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                        </div>
                        <fieldset class="form-label-group">
                                <textarea name="review" class="form-control" id="label-textarea" rows="3"
                                          placeholder="Add Your Review..."></textarea>
                            <label for="label-textarea">Add Review Here</label>
                        </fieldset>
                        <button type="submit" id="add_review"
                                class="btn btn-primary  mr-sm-1 mb-1 mb-sm-0 waves-effect waves-light">
                            Add Review
                        </button>
                    </form>
                </div>
            @endif

        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Profile Reviews </h4>
        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
    </div>
    <div class="card-content collapse show">
        <div class="card-body">
            <div style="display: flex">
                @for($x=0;$x<5;$x++)
                    <i class="mt-1 feather icon-star text-
                        @if($x<ceil($average_rating)) warning
                        @else secondary
                        @endif">
                    </i>
                @endfor
                <p class="ml-3 mt-1"> {{round($average_rating)??0}} average based on {{count($reviews)??0}}
                    reviews.</p>
            </div>
            <hr style="border:2px solid #dbdbdb">
            <div class="row">
                <div class="side text-center">
                    <div>5 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div
                            style="width: {{(count(filterRating($reviews,5))/(count($reviews)==0?1:count($reviews)))*100}}%;
                                height: 18px;
                                border-radius: 50px;
                                background-color: #4CAF50;"
                        >
                        </div>
                    </div>
                </div>
                <div class="side text-center">
                    <div>{{count(filterRating($reviews,5))??0}}</div>
                </div>
                <div class="side text-center">
                    <div>4 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div
                            style="width: {{(count(filterRating($reviews,4))/(count($reviews)==0?1:count($reviews)))*100}}%;
                                height: 18px;
                                border-radius: 50px;
                                background-color: #2196F3;"
                        ></div>
                    </div>
                </div>
                <div class="side text-center">
                    <div>{{count(filterRating($reviews,4))??0}}</div>
                </div>
                <div class="side text-center">
                    <div>3 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div
                            style="width: {{(count(filterRating($reviews,3))/(count($reviews)==0?1:count($reviews)))*100}}%;
                                height: 18px;
                                border-radius: 50px;
                                background-color: #00bcd4;"
                        ></div>
                    </div>
                </div>
                <div class="side text-center">
                    <div>{{count(filterRating($reviews,3))??0}}</div>
                </div>
                <div class="side text-center">
                    <div>2 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div
                            style="width: {{(count(filterRating($reviews,2))/(count($reviews)==0?1:count($reviews)))*100}}%;
                                height: 18px;
                                border-radius: 50px;
                                background-color: #ff9800"
                        ></div>
                    </div>
                </div>
                <div class="side text-center">
                    <div>{{count(filterRating($reviews,2))??0}}</div>
                </div>
                <div class="side text-center">
                    <div>1 star</div>
                </div>
                <div class="middle">
                    <div class="bar-container">
                        <div
                            style="width: {{(count(filterRating($reviews,1))/(count($reviews)==0?1:count($reviews)))*100}}%;
                                height: 18px;
                                border-radius: 50px;
                                background-color: #f44336"
                        ></div>
                    </div>
                </div>
                <div class="side text-center">
                    <div>{{count(filterRating($reviews,1))??0}}</div>
                </div>
            </div>
            <hr style="border:2px solid #dbdbdb" class="mb-5">
            <div>
                @foreach($reviews as $review)
                    <div class="review px-5 m-2">
                        <div class="row d-flex">
                            <div class="avatar avatar-xl">
                                <img src="{{$review['user']->avatar}}">
                            </div>
                            <div class="d-flex flex-column mt-1 ml-1">
                                <h4>{{$review['user']->name??'User'}}</h4>
                                <p class="grey-text">
                                    <i>{{$review['created_at']->diffForHumans()}}</i>
                                </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 5px; margin-left: -2px">
                            @for($x=0;$x<5;$x++)
                                <i class="feather icon-star text-
                                    @if($x<$review['rating']) warning
                                    @else secondary
                                    @endif">
                                </i>
                            @endfor
                        </div>
                        <div class="green-text">
                            <h5 class="mb-0 pt-2">
                                <i>{{$review['review']}}</i>
                            </h5>
                        </div>
                    </div>
                    @if(!$loop->last)
                        <hr>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>

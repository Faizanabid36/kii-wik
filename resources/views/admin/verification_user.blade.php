<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    /* Style the Image Used to Trigger the Modal */
    /* The Modal (background) */
    #image-viewer {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    .modal-content {
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    #image-viewer .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        margin-top: 6%;
    }

    #image-viewer .close:hover,
    #image-viewer .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>
<div class="content-wrapper">
    <div class="content-body">
        <div id="user-profile">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="profile-header mb-2">
                        <div class="relative">
                            <div class="cover-container">
                                <img class="img-fluid bg-cover rounded-0 w-100" style="height:351px" src="{{$user->cover??asset('theme/app-assets/images/banner/banner-4.jpg')}}">
                            </div>
                            <div class="profile-img-container d-flex align-items-center justify-content-between">
                                <img src="{{$user[0]->avatar}}" class="rounded-circle img-border box-shadow-1" alt="Card image">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-1"></div>
            </div>
            <div class="col-12" style=" margin-top: 60px; margin-left: 65px;">
                <div class="row">
                    <div>Name</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->name}}</div>
                </div>
                <div class="row">
                    <div>Role</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ucfirst($user[0]->role)}}</div>
                </div>
                <div class="row">
                    <div>Email</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->email}}</div>
                </div>
                <div class="row">
                    <div>Phone</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->phone}}</div>
                </div>
                <div class="row">
                    <div>City/Location</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->loc}}</div>
                </div>
                 <div class="row">
                    <div>Description</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->description}}</div>
                </div>
                <!-- <div class="row">
                <div>Desciption</div>
                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->phone}}</div>
            </div> -->
                <div class="row"><strong> Documents for verification</strong></div>
            
                <div class="row">
                    <div>Certification</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->certifications}}
                    </div>
                </div>
                <div class="row">
                    <div class="images">
                        <?php
                        if ($user[0]->certifications_attach) {
                            $doc = $user[0]->certifications_attach;
                            $c_images = json_decode($doc);
                            foreach ($c_images as $key => $value) { ?>
                                <?php
                                $value = strtolower($value);
                                if (strpos($value, '.jpg') !== false || strpos($value, '.png') !== false || strpos($value, '.jpeg') !== false) { ?>
                                    <img src="../../verification/{{$value}}" width="100px" height="100px" />
                                <?php } else { ?>
                                    <a href="../../verification/{{$value}}" download>Download</a>
                        <?php }
                            }
                        } ?>
                    </div>
                </div>
                <div class="row">
                    <div>Registration no.</div>
                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$user[0]->registration_no}}
                    </div>
                </div>
                
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
<div id="image-viewer">
    <img class="modal-content" id="full-image">
    <span class="close">X</span>
</div>
<script>
    $(".images img").click(function() {
        $("#full-image").attr("src", $(this).attr("src"));
        $('#image-viewer').show();
    });
    $("#image-viewer .close").click(function() {
        $('#image-viewer').hide();
    });
</script>
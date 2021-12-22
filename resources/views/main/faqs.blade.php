@extends('main_layouts.new_main')
@section('content')
   {{-- <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');"
             data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-0 bread">FAQ's</h1>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="ftco-section bg-light ftco-faqs">
        <div class="container faq-container st-space-topbottom30">
            <div class="row">
                <div class="col-md-6 half-column-width left-column">
                    <ul id="accordion1">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/understanding-supertasker-icon.png')}}" width="25px">
                            </div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>UNDERSTANDING KII-WIK</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#understandinglink1"
                                             class="collapsed" aria-expanded="false">What is Kii-wik?</a>
                            <div id="understandinglink1" class="collapse" aria-expanded="false"><p>Kii-Wik Is a platform that connects  Users  with Freelancers and/or Companies ( Super Heroes) in order to get help with specific house task, special work or specific professional work.</p>
                               </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#understandinglink2"
                                             class="collapsed" aria-expanded="false">What type of tasks can I get done with Kii-wik?</a>
                            <div id="understandinglink2" class="collapse" aria-expanded="false" style="height: 0px;"><p><p>We in courage all our Users to request a Super hero in all type of work task that they need.  Examples of these ones can be:</p>
                                <ul>
                                    <li>Electricians</li>
                                    <li>Plumbers</li>
                                    <li>Car Wash</li>
                                    <li>Laundry</li>
                                    <li>Moving Services</li>
                                    <li>Car Wash</li>
                                </ul>
                                </p>
                                <p>So far we have a portfolio of more then 12 specific professions/skills Kii-wik Super Heroes can help you  with.
</p><p>
How ever every day we get more request on new professional fields so all you have to do is post a request and let the Super Heroes contact you with 1 or multiple offers.
</p> </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#understandinglink3"
                                             class="collapsed" aria-expanded="false">Who is a Super Hero?</a>
                            <div id="understandinglink3" class="collapse" aria-expanded="false"><p>Kii-wik has this idea that any freelancer or company that is willing to give you a fair offer, is a Super Hero for both us as “ Connecting Platform” and you as a user that needs a fair offer and a jobb to be done.</p>
                                <p>We think any one in Mexico can become a Super Hero, is just to find out what are your best skills and try our platform.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion1" href="#understandinglink4"
                                             class="collapsed" aria-expanded="false">Who is a Poster?</a>
                            <div id="understandinglink4" class="collapse" aria-expanded="false"><p>Kii-wik is a platform free or charge to those who want to get help.  A User/Poster is any real person that request/post a task on the Kii-wik Platform and seeks to get an offer or multiple offers from both Freelancers or Companies ( Super Heroes )</p></div>
                        </li>
                    </ul>
                    <ul id="accordion3">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img src="{{asset('main/images/Post-a-Task-Icon.png')}}"
                                                                width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>POST A TASK</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion2" href="#posttasklink1">How do I
                                post a task?</a>
                            <div id="posttasklink1" class="collapse"><p>Its totally free to post a task on Kii-wik and
                                    get offers for your task.</p>
                                <p>Click on post task, add title of your task then add task description be sure to be clear
                                    what is that you need to done. Add information about task as much as possible so tasker
                                    can understand about your task. </p>
                                <p>Select nature of your task you want help online or in person (physically) add date and
                                    time when and where you want to done your task. Set fair budget.</p>
                                <p>Within few minutes you will start receiving offers on your post from trusted taskers you
                                    just need to choose the best candidate to complete your task.</p>
                                <p>After accept offer from available offers on your task you will be able to communicate
                                    with tasker via private message or you can call directly to discuss further details.</p>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion3" href="#posttasklink2">How do I
                                know how much to pay for a task?</a>
                            <div id="posttasklink2" class="collapse"><p>You can add budget to indicate that how much you
                                    would like to spend on your task. This amount will assume as a starting point and from
                                    here, taskers will make an offer on your task with the amount that they believe reflects
                                    the time and work required to get your task complete</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion3" href="#posttasklink3">Are
                                there any task posting requirements?</a>
                            <div id="posttasklink3" class="collapse"><p>Kii-wik is online community helps to people get
                                    anything done. To create safe, respectful and rewarding platform.</p>
                                <p>Kii-wik reserve the rights to take legal action if found any member involved in
                                    illegal activities.</p>
                                <p><strong>Every member have to follow the Guidelines below:</strong></p>
                                <p><strong>Only Legal Task are eligible to post.</strong></p>
                                <p>To ensure a secure and safe experience for all our community members, Our staff monitor
                                    all tasks, All Task posted must be legal, Encouraging illegal acts are strictly
                                    prohibited, Scams are not tolerated on Kii-wik and will be removed.</p>
                                <p>You are not allow to post task related to weapons or unlawful activities, which may
                                    result in furtherance of a crime. Relating to drugs, including prescription drugs is
                                    prohibited. Not only may these activities are illegal but they are also against the
                                    values of Kii-wik. Deceitful tasks in nature are not allowed.</p>
                                <p><strong>No Escort or Massage Services</strong></p>
                                <p>Massage and Escort services tasks are strictly prohibited on Kii-wik platform. This
                                    includes tasks or comments which are obscene or sexually explicit in nature.</p>
                                <p><strong>Complete information about task with time and fair budget</strong></p>
                                <p>To get your task completed its important that your task has a clear description and
                                    budget. Add information about task as much as possible so tasker can understand about
                                    your task.</p>
                                <p>Select nature of your task you want help online or in person (physically) add date and
                                    time when and where you want to done your task. Set fair budget.</p>
                                <p>These help taskers to know whether they have skills to complete your task and also help
                                    to avoid misunderstandings.</p>
                                <p>Kii-wik will not allow businesses to advertisement nor job board for job ads however
                                    we support businesses to outsource their task on our platform, </p>
                                <p>Kii-wik support businesses outsourcing tasks on our platform to help their business
                                    grow, however Kii-wik is not allow to advertisements nor a job board for a job
                                    ads.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion3" href="#posttasklink4">How do I
                                assign a Tasker to my task?</a>
                            <div id="posttasklink4" class="collapse"><p>Assign a tasker to your task is very easy you just
                                    need to review offer you’ve received and accept your selected tasker offer.</p>
                                <p>Taskers completion rate, reviews and verification badges will also be listed to help you
                                    make decision making. Click on accept offer button when you find the best candidate for
                                    your task.</p>
                                <p>Once the task has been assigned successfully you can communicate with tasker via
                                    Kii-wik private message and you can call them directly. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion3" href="#posttasklink5">If a
                                tasker destroyed my stuff who is responsible?</a>
                            <div id="posttasklink5" class="collapse"><p>If tasker destroys your product he will be
                                    responsible for your damages. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion3" href="#posttasklink6">How will
                                I trust a person who I have never met , how can i call him at my house?</a>
                            <div id="posttasklink6" class="collapse"><p>With Kii-wik, you can get verifications through
                                    mobile and NIC.</p>
                                <p>We can verify the taskers, save your time, free you from the hassle of searching experts
                                    in the markets, find you experts from areas near you.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion3" href="#posttasklink7">What if
                                a tasker come and brings some unknown persons with him? What should i do than?</a>
                            <div id="posttasklink7" class="collapse"><p>As a policy he is not allowed to bring some other
                                    unknown persons with him. You can report him by calling our customer support team.
                                    &nbsp;</p></div>
                        </li>
                    </ul>
                    <ul id="accordion5">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img src="{{asset('main/images/Payments-Icon-(1).png')}}"
                                                                width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>PAYMENTS</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink1">How do I
                                manage my payment settings?</a>
                            <div id="paymentlink1" class="collapse"><p>To Manage your payments goto dashboard you can find
                                    “payment method tab” in left sidebar from payment method section you can manage your
                                    bank account add and update your account details.</p>
                                <p>You can go directly to payment method page by clicking on your profile name located on
                                    top right corner.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink2">Pricing
                                and payments (Posters perspective)</a>
                            <div id="paymentlink2" class="collapse"><p>To ensure a safe, secure and rewarding environment
                                    for posters and tasker on Kii-wik, it is important to understand how pricing and
                                    payments work.</p>
                                <p>Commission and sale based tasks are not allowed and will be removed. The amount mentioned
                                    in offer on your task consider as a full and final amount for your task. When you accept
                                    an offer that is the full and final amount that you are obligated to pay there are no
                                    additional fee you have to pay.</p>
                                <p>When an offer is accepted you need to add funds to the task in Kii-wik account which
                                    are securely held until the task is completed. You can add funds through credit/debit
                                    Mastercard or VISA card, Bank transfer, Jazzcash Mobile wallet and Jazzcash shop or you
                                    can pay to tasker cash in hand.</p>
                                <p>We strongly recommend you to use online payment methods instead of cash in hand for the
                                    security for both poster and tasker.</p>
                                <p>Once the task is completed, the tasker will request to have the funds released and you
                                    will be notified to release payment. Only release the funds when the task has been
                                    completed in full, so if there is an issue with tasker contact support our team can help
                                    you.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink3">What are
                                the payment methods on Kii-wik?</a>
                            <div id="paymentlink3" class="collapse"><p>You can add funds through credit/debit Mastercard or
                                    VISA card, Bank transfer, Jazzcash Mobile wallet and Jazzcash shop or you can pay to
                                    tasker cash in hand.</p>
                                <p>We strongly recommend you to use online payment methods instead of cash in hand for the
                                    security for both poster and tasker.</p>
                                <p>You can add or update your account details at any time from <a
                                        href="http://www.supertasker.pk/user/payment-methods">payment method</a> page.</p>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink4">How do I
                                release payment to the Tasker?</a>
                            <div id="paymentlink4" class="collapse"><p>When task has been completed tasker need to request
                                    payment by clicking “Request payment” button on the task page than poster will be
                                    prompted to release payment to the tasker by clicking on “Release Payment” button.</p>
                                <p>When tasker request to release payment you will receive notification via email and
                                    SMS.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink5">The task
                                is complete, how can I get / release payment?</a>
                            <div id="paymentlink5" class="collapse"><p>Have you complete your task? There are some more
                                    steps to finish the deal.</p>
                                <p>Once you complete task you need to request the payment by clicking on “Request Payment”
                                    button.</p>
                                <p>If you are the Poster, once the tasker has request the payment you will be prompted to
                                    release payment. Payment will then be transferred in taskers account securely and you
                                    are fee to leave review on the task for each other. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink6">Why has
                                payment been deducted when work has not started?</a>
                            <div id="paymentlink6" class="collapse"><p>Kii-wik is a marketplace to connect people, We
                                    use a payment process that keeps it fair for everyone. </p>
                                <p>Choose a best tasker to do your task. Kii-wik held your decided payment until the
                                    task is complete. The tasker request the payment after completed your task successfully
                                    and you then release the payment.</p>
                                <p>If the tasker does not show up, we can add credit or return your payment in your
                                    account. </p>
                                <p>This payment process helps the tasker to make sure you get paid for the work you have
                                    done.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink7">How long
                                does task payment take?</a>
                            <div id="paymentlink7" class="collapse"><p>When the task is complete, the tasker can request to
                                    release payment then poster confirm that the task has been completed and released the
                                    payment. The payment then is transferred to the taskers nominated account and
                                    Kii-wik do this process on daily basis. So you can get your payment on same day.</p>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink8">When will
                                I receive the Payments?</a>
                            <div id="paymentlink8" class="collapse"><p>Once poster has released payment after confirm the
                                    task has been completed, payment will transferred in you account within a day.
                                    Kii-wik will transfer the payment in your nominated account everyday so you can get
                                    you payment on same day.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion5" href="#paymentlink9">If poster
                                refuses to pays tasker after the work is done? How will you handle this situation?</a>
                            <div id="paymentlink9" class="collapse"><p>If the poster refuses to pay you on your work, you
                                    can immediately talk to our customer support to resolve the issue.</p>
                                <p><strong>But there are some tips which can help you minimize this risk factor</strong></p>
                                <ul>
                                    <li>Ask Questions as much as you can, communicate with the tasker, know their
                                        expectations and give solutions accordingly.
                                    </li>
                                    <li>Make a record of everything you do, take screenshots, chats, for the evidence that
                                        you did what was asked from you.
                                    </li>
                                    <li>Use our chat box we are monitoring very communication that took place within our
                                        platform, in that way we can intervene and help you in getting your payments.&nbsp;&nbsp;
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul id="accordion7">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img src="{{asset('main/images/communication-icon.png')}}"
                                                                width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>COMMUNICATION</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion7" href="#communication1">How do
                                comment notifications work?</a>
                            <div id="communication1" class="collapse"><p>As a Job Poster, when a comment is made on your
                                    task you’ll get email notifications.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion7" href="#communication2">Why
                                can't I post my phone number or email?</a>
                            <div id="communication2" class="collapse"><p>For your safety and protection, the disclosure of
                                    personal information or third party links is not permitted to be shared in any public
                                    areas within the website/app. This includes business websites, Facebook, Twitter,
                                    personal emails, phone numbers, addresses, and personal websites. </p>
                                <p>The main focus of our platform is to provide you with all the safety measures and to
                                    prevent you from spam.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion7" href="#communication3">How do
                                I respond to comments on a task?</a>
                            <div id="communication3" class="collapse"><p>You can respond to individual questions that are
                                    asked on a task. This will help keep track of each conversation with different
                                    people. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion7" href="#communication4">How do
                                I chat with Taskers who are interested in my task before I accept an offer?</a>
                            <div id="communication4" class="collapse"><p>Use our public comments area on the task page. This
                                    page is created for you to get into more details about your taskers. If you are unclear
                                    about your task or if you are interested in getting more information, you can ask
                                    taskers here on this public page.</p>
                                <p>Please do not share any private information within these public areas of the site(
                                    including attachments).<br class="kix-line-break"><br class="kix-line-break">Once you
                                    select the right tasker for your task, you're free to chat privately with them to sort
                                    things out.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion7" href="#communication5">How do
                                I send a private message?</a>
                            <div id="communication5" class="collapse"><p>You can only chat privately once the task has been
                                    assigned. This authorizes you to exchange contact details with the taskers.</p>
                                <p>Personal messages are not allowed unless the task is assigned to the tasker. However, you
                                    and the taskers can ask questions and reply in the public area of a task.</p>
                                <p>Please don't share your private information in public areas of the site. The main focus
                                    of our platform is to provide you with all the safety measures and to prevent you from
                                    spam.</p></div>
                        </li>
                    </ul>
                    <ul id="accordion9">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/community-guidelines-icon.png')}}" width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4> COMMUNITY GUIDELINES</h4></div>
                            <li class="panel">
                                <div style="margin-left: 20px;"><p><a href="https://supertasker.pk/community-guideline">Learn
                                            More</a></p></div>
                            </li>
                        </div>
                    </ul>
                    <ul id="accordion11">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/understanding-supertasker-icon.png')}}" width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>TECHNICAL ISSUES</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#tech1">TECHNICAL
                                ISSUES</a>
                            <div id="tech1" class="collapse"><p>For any technical issues, our customer support team is
                                    available to help you assist in identifying the problems and resolving it. &nbsp;</p>
                            </div>
                        </li>
                    </ul>
                    <ul id="accordion12">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img src="{{asset('main/images/feedback-icon.png')}}"
                                                                width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>Let Us Get Better!</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#feedback">How can I contact Kii-wik?</a>
                            <div id="feedback" class="collapse">
                                <ul>
                                    <li><p>There are various ways you can contact our support team. </p>
                                        <ul>
                                            <li><p>you can contact us through our mobile number i-e +123456789</p></li>
                                            <li><p>Our email is info@kii-wik.com  </p></li>
                                            <li><p>To send us the inquiry, please visit our contact us page.</p></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 half-column-width right-column">
                    <ul id="accordion2">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/ratings-&-reviews-icon.png')}}" width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>ACCOUNT &amp; PEOPLE</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion2" href="#accountslink1"
                                             class="collapsed" aria-expanded="false">How do I sign up?</a>
                            <div id="accountslink1" class="collapse" aria-expanded="false"><p>Creating an account on
                                    kii-wik is free. You can signup using mobile number, google account or facebook
                                    account.</p>
                                <p>After signup verify yourself by uploading profile picture and add your location. In you
                                    dashboard you’ll be able to add your skills, portfolio, verifications etc.</p>
                                    <p>When creating an account as a Freelancer or Company, you will have to choose a membership and a payment method.</p>

                                    </div>
                        </li>

                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion2" href="#accountslink3"
                                             class="collapsed" aria-expanded="false">How do I update my skills?</a>
                            <div id="accountslink3" class="collapse" aria-expanded="false"><p>To add or update your skills login and go to the dashboard by clicking on your profile name located on top right corner.</p>
                                <p>Under your profile name you can find the skills tab or you can go from dashboard on your dashboard you can see the skills tab listed on left side bar.</p>
                                <p>Add or edit information and save skills.</p>
                                </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion2" href="#accountslink4"
                                             class="collapsed" aria-expanded="false">Kii-wik Verification Badges </a>
                            <div id="accountslink4" class="collapse" aria-expanded="false"><p>In Kii-wik Platform the verification badges help to build trust between the Super Heroes and  Users/Posters, Verification badges provides additional information to Users when a User is deciding who to work with on a request/task. When requirements are met a badge shown on profile.</p>
                                <p><strong>There are four different types of badges on Kii-wik.</strong></p>
                                <ul>
                                    <li>IFE/RFC Verification Badge  ( Obligatory)</li>
                                    <li>Phone No. Verification Badge ( Recommended)</li>
                                    <li>Email Verification Badge ( Recommended)</li>
                                    <li>Freelancer or Company Verification Badge ( Recommended)</li>
                                    <li>Criminal Records Badge  ( HIGHLY RECOMMENDED)</li>
                                    <li>Kii-wik Academia ( HIGHLY RECOMMENDED)</li>
                                </ul>
                                <p><strong>IFE/RFC Verification Badge</strong></p>
                                <p>The IFE/RFC verification badge indicates that a member’s identity document has been verified.</p>
                                <p><strong>The following details are verified:</strong></p>
                                <ol>
                                    <li>Valid National Identity Card.</li>
                                    <li>Matching User/Superhero Profile name and date of birth.</li>
                                </ol>
                                <p><strong>Phone Number Verification Badge</strong></p>
                                <p>Phone Number verification badge is very important for Users/Superhero members. Members can use their phone# to get login and other notifications. Members are required phone number verification.</p>
                                <p><strong>Email Verification Badge</strong></p>
                                <p>The Email Verification badge is also required for Kii-wik member. Members will
                                    receive notification and updates via email so members are required Email
                                    verification.</p>
                                <p><strong>Payment Verification Badge</strong></p>
                                <p>The Email Verification badge is also required for Kii-wik members. Members will receive notification and updates via email so members are required Email verification.</p>
                                <p><strong>Criminal Records Badge</strong></p>
                                <p>When a Super Hero purchase a membership, he has to provide basic information as well as documentation that proof it skills ( Freelancers do not ve to provide us with professional unless they have it ) .</p>
                                <p>We recommend all our Super Heroes to get the Criminal Record file from the police station so we can display a Badge on its profile and possible Users can feel even more safe when seeing that a Super Hero is free of Criminal Records.</p>
                                </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion2" href="#accountslink5"
                                             class="collapsed" aria-expanded="false">Do I need a licence or qualification
                                for tasks?</a>
                            <div id="accountslink5" class="collapse" aria-expanded="false">
                            <p>In Kii-wik platform as a Freelancer is not obligatory to upload   your licence and qualification certificates, how ever and if you are a proffesional company we will ask for this certificates to make sure all is in order. </p>
                            <p>Is the Users who will chose what kind of “skilled” Super Hero will they need/want. Could it be a Freelancer, or Could it be a Company?  In Kii-wik we are sure that all our Users/Super Heroes will help each other and give a good service/price and a fair offer.</p>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion2" href="#accountslink6"
                                             class="collapsed" aria-expanded="false">How do I deactivate my account?</a>
                            <div id="accountslink6" class="collapse" aria-expanded="false"><p>We will be sorry to see you go, please tell me if there is anything we can do to keep you on Kii-wik.</p>
                                <p>To deactivate your account go to dashboard you can find “account tab” in left sidebar from account section you can deactivate your account by clicking on “Deactivate My Account” Button.</p>
                                <p>You can go directly in account tab by clicking on your profile name located on top right corner.</p></div>
                        </li>
                    </ul>
                    <ul id="accordion4">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img src="{{asset('main/images/Make-an-offer-icon.png')}}"
                                                                width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>MAKE AN OFFER</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion4" href="#makeofferlink1"
                                             class="" aria-expanded="true">How do I make an offer?</a>
                            <div id="makeofferlink1" class="collapse in" aria-expanded="true" style=""><p>You can browser
                                    tasks by click browse task button located on top right side. Choose the task you are
                                    interested in. Click on the Make an offer button and enter the price you are willing to
                                    do the task and you are required to leave comment for the poster to tell why your are
                                    the right person for the task </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion4" href="#makeofferlink2"
                                             class="collapsed" aria-expanded="false">My offer has been accepted, what's
                                next?</a>
                            <div id="makeofferlink2" class="collapse" aria-expanded="false"><p>Once your offer has been
                                    accepted the status of the task will change from open to assigned. The agreed amount
                                    transferred in supertaskers account from posters account and held securely until the
                                    task has been completed.</p>
                                <p>Now you need to send message or call to the poster via private message to confirm the
                                    details about the task.</p>
                                <p>Once you have completed the task goto the task page and click on “Request payment”. This
                                    will then prompt the poster to release the task amount to your account.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion4" href="#makeofferlink3"
                                             class="collapsed" aria-expanded="false">How can I change my offer price? </a>
                            <div id="makeofferlink3" class="collapse" aria-expanded="false"><p>You can change your offer
                                    price as long as the task status is open. To change update your offer click on “update
                                    offer” button revise your offer price.</p>
                                <p>You will not be able to change your offer price once the task has been assigned.</p>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion4" href="#makeofferlink4"
                                             class="collapsed" aria-expanded="false">How can I cancel my offer?</a>
                            <div id="makeofferlink4" class="collapse" aria-expanded="false"><p>If your offer has not been
                                    accepted you can update or withdraw your offer, but if your offer accepted or assigned
                                    to the task you can’t withdraw your offer.</p>
                                <p>You need to contact our support in case you have assigned to the task and your are unable
                                    to complete the task and need to cancel it. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion4" href="#makeofferlink5"
                                             class="collapsed" aria-expanded="false">How I can earn money through it?</a>
                            <div id="makeofferlink5" class="collapse" aria-expanded="false"><p>Earning money with
                                    Kii-wik is very easy,</p>
                                <ul>
                                    <li>Simply login/sign-up on Kii-wik's account.</li>
                                    <li>Provide the required information of your NIC with pictures. And your professional
                                        picture f with genuine contact details.
                                    </li>
                                    <li>After login and verification of your email, phone, and NIC Badges will be given to
                                        make you eligible for the task. &nbsp;And also increases your chances of getting
                                        selected.
                                    </li>
                                    <li>After all the verification process you need to browse tasks, you can select any
                                        tasks that suit you.
                                    </li>
                                    <li>Make an offer on the task you feel you can do, write the description and Bid price
                                        you are willing to work.
                                    </li>
                                    <li>Submit the offer and wait for the Poster to select you for the task.</li>
                                    <li>Complete the task as per commitment and earn money.</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <ul id="accordion6">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/Changes-&-Cancellations-icon.png')}}" width="25px">
                            </div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>CHANGES &amp; CANCELLATIONS</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion6" href="#cancellations1">How do
                                I reschedule a task?</a>
                            <div id="cancellations1" class="collapse"><p>To reschedule a task you need to goto the task page
                                    select “edit task” by clicking on “more options” under the task budget section. </p>
                                <p>You can update your task title, Description, location, budget, date and time.</p>
                                <p>The taskers who make an offer on your task will then receive a notification via Email and
                                    sms. Please note Poster can not edit task after accepting offer.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion6" href="#cancellations2">What
                                should I do if the Poster or Tasker isn't responding to my messages?</a>
                            <div id="cancellations2" class="collapse"><p>Our Support will help you in this situation if any
                                    one of them poster or tasker will not reply via private message do contact him from
                                    contact number if the person still not responding than contact our support agent.</p>
                            </div>
                        </li>
                    </ul>
                    <ul id="accordion8">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/ratings-&-reviews-icon-(1).png')}}" width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>RATINGS &amp; REVIEWS</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#rating1">How do reviews
                                work?</a>
                            <div id="rating1" class="collapse"><p>Reviews are a source of developing trust within our
                                    community by creating reliable, honest feedback from people so that they can know what
                                    to expect from others.</p>
                                <p>Whether you're a tasker or poster, telling us how was the experience and your feedback
                                    will give a great guide to the people.</p>
                                <p>A review is only made public once both sides have left a review. Immediately after the
                                    task is completed, each side has 14 days to leave a review. After 14 days, the submitted
                                    reviews will go public no matter one side has left a review or hasn't.</p>
                                <p>After 14 days, the option of leaving reviews will be disabled.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#rating2">How do I leave
                                a review for this Poster?</a>
                            <div id="rating2" class="collapse"><p>Once the task is finished, it's very important to leave an
                                    honest review of your experiences.</p>
                                <p>In that way, you can help the community to better understand what to expect from others.
                                    &nbsp;</p>
                                <p>Leave an honest and fair review, it can be a positive or negative review based on your
                                    experience with the taskers and posters. Leave a constructive feedback so the other
                                    member knows, how they can improve their performance in the future.</p>
                                <p>To keep it open and fair, review stays hidden until both sides left a review, or 14 days
                                    have passed.</p>
                                <p>Reviews should follow Kii-wik's community guidelines. We might censor or delete
                                    reviews which dishonors our guidelines.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#rating3">What should I
                                include in a review?</a>
                            <div id="rating3" class="collapse"><p>Either you've posted a task or completed it, a
                                    well-explained review provides useful feedback to help the community members to make
                                    well-informed decisions. &nbsp;</p>
                                <p>When writing a review, we would recommend you to be honest and fair in giving your
                                    feedback.</p>
                                <p><strong>Here are some things that can help you write great reviews.</strong></p>
                                <ul>
                                    <li><strong>Was the communication great?</strong></li>
                                    <li><strong>Was task well explained?</strong></li>
                                    <li><strong>Did the poster provide you with all the information of the task?</strong>
                                    </li>
                                    <li><strong>Were the task outcomes achieved?</strong></li>
                                    <li><strong>Did you receive the response during and after the task?</strong></li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#rating4">What are the
                                Kii-wik Review Guidelines?</a>
                            <div id="rating4" class="collapse"><p>Trust is most important to the Kii-wik community,
                                    impartial and transparency is our focus. Honest reviews help the community to make
                                    well-informed decisions. And constructive feedback helps other members to improve their
                                    skills in the future.</p>
                                <p>Kii-wik reserves the right to delete or cancel reviews if they dishonor our
                                    guidelines.</p>
                                <p><strong>The following is not supported.</strong></p>
                                <ul>
                                    <li>Reviews that are not genuinely written, in the context of the task.</li>
                                    <li>Partial reviews that are irrelevant to the task such as political, race and
                                        religion.
                                    </li>
                                    <li>Harmful or offending reviews that promote illegal or discriminatory behaviors are
                                        not supported
                                    </li>
                                    <li>Reviews that breaks another person's privacy rights such as publishing personal
                                        information without mutual consent.
                                    </li>
                                    <li>Use of vulgar language.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#rating5">What are
                                Completion Rates?</a>
                            <div id="rating5" class="collapse"><p>Completion rate shows the consistency and commitment of
                                    the task completed by the tasker that was assigned to them. This will help promote trust
                                    within the community and builds a reputation among the other members of the community.
                                    And eventually increases your chances of getting selected more often. </p>
                                <p>Low completion rate means that the tasker is frequently canceling tasks. Low completion
                                    rates put you under threat of being rejected and neglected from our platform. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion8" href="#rating6">How do
                                Completion Rates work?</a>
                            <div id="rating6" class="collapse"><p>Completion rate shows the consistency and commitment of
                                    the task completed by the tasker that was assigned to them. This will help promote trust
                                    within the community and builds a reputation among the other members of the community.
                                    And eventually increases your chances of getting selected more often. </p>
                                <p>Low completion rate means that the tasker is frequently canceling tasks. Low completion
                                    rates put you under threat of being rejected and neglected from our platform. </p></div>
                        </li>
                    </ul>
                    <ul id="accordion10">
                        <div class="row">
                            <div class="col-sm-1 col-xs-1"><img
                                    src="{{asset('main/images/something-went-wrong-icon.png')}}" width="25px"></div>
                            <div class="col-sm-11 col-xs-11 remove-padding-left"><h4>SOMETHING WENT WRONG</h4></div>
                        </div>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong1">How can I help
                                make sure my task goes well? (In-app messaging)</a>
                            <div id="wrong1" class="collapse"><p>Before starting any work expectations should be made clear.
                                    Do ask questions, respond to the queries and explain your concerns about the task.</p>
                                <p>Responding quickly to Poster's messages increases trust and commitment.</p>
                                <p><strong>Here are some tips that can help you get more task completed
                                        successfully.</strong></p>
                                <ul>
                                    <li>Respond to poster's questions</li>
                                    <li>Ask relevant questions, and get relevant details about the task, and their
                                        expectations.
                                    </li>
                                    <li>Don't ask irrelevant questions.</li>
                                </ul>
                                <p>While making an offer make sure you understand the poster's task completely. Offers with
                                    complete details decreases the chances of getting rejected and increases the probability
                                    of getting assigned to the task.</p>
                                <p><strong>Do’s</strong></p>
                                <ul>
                                    <li>Include details while making offers, what tools, what methods and how differently
                                        you can do this task.
                                    </li>
                                    <li>Talk about the "Must-haves" for the task.</li>
                                    <li>Time availability is another very important factor, be honest with your time
                                        availability.
                                    </li>
                                    <li>If the job requires some technical qualifications or certifications make sure you
                                        have what they need.
                                    </li>
                                </ul>
                                <p><strong>Don't</strong></p>
                                <ul>
                                    <li>Make an offer on the task that you feel is irrelevant to your qualifications.</li>
                                    <li>Make an offer that goes against Kii-wik's community guidelines</li>
                                    <li>Take payment or get assigned for a task outside Kii-wik, because if something
                                        went wrong Kii-wik can't help you with the payment.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong2">Help! I’m
                                having trouble with my Job Poster - what can I do?</a>
                            <div id="wrong2" class="collapse"><p>Generally, at Kii-wik tasks are completed without any
                                    dispute or disagreement. But, sometimes things don’t go as planned. So, be clear in your
                                    communications, ask questions beforehand, try to respond quickly to the poster’s
                                    messages.</p>
                                <p>Try to accomplish your task to the best of your abilities. And make a record of the
                                    complete work you have done. </p>
                                <p>Do ask questions, communicate openly, respond to the queries and explain your concerns
                                    about the task. If anything goes wrong, ask the poster for the feedback about what
                                    exactly went wrong. </p>
                                <p>Responding quickly to Poster's messages increases trust and commitment. Don't be slow to
                                    respond to the poster's messages.</p>
                                <ul>
                                    <li><p>If there are some genuine concerns about the Posters, Making apologies can reduce
                                            the tension. </p></li>
                                    <li><p>Keep communicating on Kii-wik's instant messaging(private chat). &nbsp;so we
                                            will be in a better position to resolve the issue. </p></li>
                                    <li><p>Don't be rude or disrespectful to posters because it can awfully hurt your
                                            reputation. Poor behavior can lead your account into temporary or permanent
                                            suspension. &nbsp;</p></li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong3">What is
                                Supertasker’s dispute process?</a>
                            <div id="wrong3" class="collapse"><p>Kii-wik is a customer-centric company. Generally, at
                                    Kii-wik tasks are completed without any dispute or disagreement. But, sometimes
                                    things don’t go as planned. </p>
                                <p>In case of any dispute, you can contact our customer support team that is very proactive
                                    in resolving your issues or concerns. &nbsp;</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong4">I posted a
                                task. What are some safety tips I should follow?</a>
                            <div id="wrong4" class="collapse"><p>When getting a tasker to complete your task, consider the
                                    following tips to help you get through it safely and securely.</p>
                                <ul>
                                    <li>Communicate clearly to the tasker, explain your concerns and expectations of the
                                        task.
                                    </li>
                                    <li>Clearly define the location, time and date of the task.</li>
                                    <li>Confirm the availability of the tasker.</li>
                                    <li>While selecting the right person for the job, remember to view their verification
                                        badges and reviews from other Posters.
                                    </li>
                                    <li>Verification badges help secure your task from any fraudulent activity.</li>
                                    <li>Verification badges include email verification, Payment verification, Phone numbers
                                        verification, and NIC verification.
                                    </li>
                                    <li>Bear in mind, that any communication outside Kii-wik's platform will not be
                                        entertained at all.
                                    </li>
                                    <li>Consider your communication to be within Kii-wik's private chat. Only then, we
                                        can monitor and help resolve the dispute.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong5">When I meet a
                                Tasker, how do I know they are who they say they are?</a>
                            <div id="wrong5" class="collapse"><p>Before accepting any offers when hiring a tasker for a very
                                    first time, remember to look at their verification badges, reviews, and their
                                    profile. </p>
                                <p><strong>There are 4 types of verification methods that Kii-wik support. </strong></p>
                                <ul>
                                    <li>Email verification</li>
                                    <li>NIC verification</li>
                                    <li>Phone verification</li>
                                    <li>Payment verification</li>
                                    <li>Consider these verifications, reviews and their profile.</li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong6">How does
                                Kii-wik help to keep me safe when I am getting tasks done?</a>
                            <div id="wrong6" class="collapse"><p>Kii-wik provides you with four different verification
                                    features to maintain the quality of getting a task completed.</p>
                                <p>Consider these verifications, reviews, and their profile before accepting the offers.</p>
                                <p><strong>There are 4 types of verification badges that Kii-wik supports.</strong></p>
                                <ul>
                                    <li><strong>Email verification</strong></li>
                                    <li><strong>NIC verification</strong></li>
                                    <li><strong>Phone verification</strong></li>
                                    <li><strong>Payment verification</strong></li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong7">Task
                                information: Which tasks are prohibited on Kii-wik?</a>
                            <div id="wrong7" class="collapse"><p>Please bear in Mind, that All kinds of task related to
                                    Alcohol, sexual-harassment, drugs, race, discrimination or any kind of tasks related to
                                    or linked to the above-mentioned categories are strictly prohibited at Kii-wik.</p>
                                <p>We are monitoring all the tasks before it gets public. &nbsp;And (if needed) account can
                                    get suspended permanently. </p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong8">Task Safety
                                Tips</a>
                            <div id="wrong8" class="collapse"><p>Kii-wik take no responsibility for incidents or
                                    injuries that arise from the task posted/completed through our platform.</p>
                                <p>Therefore, it is advised that you take all the safety measures beforehand, be cautious if
                                    your tasks involve electrical, painting, handyman tools etc.</p>
                                <p>If your task involves heavy machinery, make sure, to have the proper safety measures in
                                    advance.</p></div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong9">My offer was
                                accepted. What are some safety tips I should follow?</a>
                            <div id="wrong9" class="collapse"><p>When you're about to complete the task on Kii-wik,
                                    remember to follow these tips to keep yourself secure while doing your task. </p>
                                <ul>
                                    <li>Before starting a task, ask as many questions as you need to ensure that you meet
                                        the expectations of the poster.
                                    </li>
                                    <li>When meeting for the first time, try to meet them in a market or a busy place,
                                        before going elsewhere.
                                    </li>
                                    <li>Make your profile realistic, with a real face and pictures of you with real
                                        information, this let people know that you're a real person with authentic
                                        information, that really helps makes you trustworthy.
                                    </li>
                                    <li>Always Share your location information with at least one family member or spouse
                                        before running a task. Keep your cell phone ON and be reachable.
                                    </li>
                                    <li>If you feel something's wrong or you feel any kind of danger call the Police(15)
                                        immediately.
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel"><a data-toggle="collapse" data-parent="#accordion10" href="#wrong10">What if
                                someone assigns me the task and after assigning I got some emergency and I don't want to go
                                to that task? Will this affect my rating? </a>
                            <div id="wrong10" class="collapse"><p>If you face an emergency and you have already committed to
                                    work, first thing you need to do is to communicate with your poster, talk to them about
                                    the emergency situation, tell them if the work is not urgent ,it can be delayed for 3 to
                                    4 hours or the next day, but please be honest and fair in your commitments because your
                                    reputation is at stack.</p>
                                <p>Kii-wik supports anyone who is fair and honest so, communicate with them, if the
                                    poster doesn't agree or if he has some urgent work you can call our customer support
                                    immediately and notify the problem. Ask our support team to un-assign this task from you
                                    and hire another person for this job.</p></div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>




@endsection

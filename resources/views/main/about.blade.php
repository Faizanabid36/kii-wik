@extends('main_layouts.new_main')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{URL::asset('main/images/ABOUT US.jpeg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </section>
  <section class="ftco-section bg-light ftco-faqs">
      <div class="container">
          <div class="row">
               <div class="col-lg-6 order-md-last">
                  <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url(images/about.jpg);">
                      <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                          <span class="fa fa-play"></span>
                      </a>
                  </div>
                  <div class="d-flex mt-3">
                      <div class="img img-2 mr-md-2" style="background-image:url(images/about-2.jpg);"></div>
                      <div class="img img-2 ml-md-2" style="background-image:url(images/about-3.jpg);"></div>
                  </div>
              </div>

              <div class="col-lg-6">
                  <div class="">
                      <ul>
                          <li>The meaning of Kii-wik comes all the way from the Maya Culture that relates to the word “ Market” </li>
                          <li>In practice, we could consider a type of market anywhere we can offer both services and products.</li>
                          <li>We created Kii-wik  Platform with the purpose of having a digital Market Platform where both Users/ Super Heroes  can interactive and help each other.</li>
                          <li>When creating Kii-wik we asked our selves, what is exactly a fair market? Who should be selling on a market?  What kind of produces should this market sell?</li>
                          <li>The truth is that Kii-wik came as an idea where not only was a good way to solve an specific problem, but to else provide opportunities.</li>
                          <li>Kii-wik is a market where all skilled people can create an account and marked them selves as Super Heroes.  Users can trust this Super Heroes cause our Kii-wik team makes a verification process and we do our hardest to only let the must skilled and fair Super Heroes be a part of this Digital Market.</li>
                          <li>Imagine having very little time to do Christmas Dinner and on top of it having to clean the hous, decorate the entrance, make sure the hot water runs well in the shower and else paint the living room, this could be a very stressed situation and some times time is not enough</li>
                          <li>At Kii-wik we value the importance of a fair offer and a skilled Super Hero. You dont have to worry about going on the streets searching for a “ Skilled” worker. Kii-wik brings it to you with just one click away!</li>
                          <li>Use more time on those important things and stress less on tasks that some one else can help you with... Perhaps you dont even have to cook dinner cause at Kii-wik you can find everything</li>
                          <li>We strive our hardest for you to feel safe and happy with our market which is why we bring this platform so its only you and no one else who decides when do you want things done, at a fair price and if you want some things done or everything that its time consuming.   </li>
                          <li>Focus in those things that you really care and remember with Kii-wik say good bye to your problems </li>

                      </ul>
                  </div>
                  <div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
                        {{--<div class="card">
                          <div class="card-header p-0" id="headingOne">
                            <h2 class="mb-0">
                              <button href="#collapseOne" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                  <p class="mb-0">About Us</p>
                                <i class="fa" aria-hidden="true"></i>
                              </button>
                            </h2>
                          </div>
                          <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body py-3 px-0"  style="overflow: scroll; height: 500px;">
                                <ol  >
                                   <li>The meaning of Kii-wik comes all the way from the Maya Culture that relates to the word “ Market” </li>
                                   <li>In practice, we could consider a type of market anywhere we can offer both services and products.</li>
                                   <li>We created Kii-wik  Platform with the purpose of having a digital Market Platform where both Users/ Super Heroes  can interactive and help each other.</li>
                                   <li>When creating Kii-wik we asked our selves, what is exactly a fair market? Who should be selling on a market?  What kind of produces should this market sell?</li>
                                   <li>The truth is that Kii-wik came as an idea where not only was a good way to solve an specific problem, but to else provide opportunities.</li>
                                   <li>Kii-wik is a market where all skilled people can create an account and marked them selves as Super Heroes.  Users can trust this Super Heroes cause our Kii-wik team makes a verification process and we do our hardest to only let the must skilled and fair Super Heroes be a part of this Digital Market.</li>
                                   <li>Imagine having very little time to do Christmas Dinner and on top of it having to clean the hous, decorate the entrance, make sure the hot water runs well in the shower and else paint the living room, this could be a very stressed situation and some times time is not enough</li>
                                   <li>At Kii-wik we value the importance of a fair offer and a skilled Super Hero. You dont have to worry about going on the streets searching for a “ Skilled” worker. Kii-wik brings it to you with just one click away!</li>
                                   <li>Use more time on those important things and stress less on tasks that some one else can help you with... Perhaps you dont even have to cook dinner cause at Kii-wik you can find everything</li>
                                   <li>We strive our hardest for you to feel safe and happy with our market which is why we bring this platform so its only you and no one else who decides when do you want things done, at a fair price and if you want some things done or everything that its time consuming.   </li>
                                   <li>Focus in those things that you really care and remember with Kii-wik say good bye to your problems </li>

                                </ol>
                            </div>
                          </div>
                        </div>--}}

                        <div class="card">
                          <div class="card-header p-0" id="headingTwo" role="tab">
                            <h2 class="mb-0">
                              <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
                                  <p class="mb-0">Terms and Conditions</p>
                                <i class="fa" aria-hidden="true"></i>
                              </button>
                            </h2>
                          </div>
                          <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0"  style="overflow: scroll; height: 500px;">
<p>All our terms and conditions are listed below, if you have any doubt towards these please contact us via our e-mail.</p>
<p><strong>User Agreement: www.kii-wik.com</strong></p>
<p>Kii-wik is an online &nbsp;platform that connects professional companies and or freelancers to households/individuals/businesses.</p>
<p>Please read these terms and all Policies including the <a href="https://supertasker.pk/privacy-policy">Privacy Policy</a> and the <a href="https://supertasker.pk/community-guideline">Community Guidelines</a> carefully before using the Kii-wik Platform. These Policies are incorporated into this Agreement by reference.</p>
<p>All defined terms in this Agreement have the meaning given to them in the Kii-wik Glossary.</p>
<ol>
<li><strong> SCOPE OF Kii-wik SERVICES</strong></li>
</ol>
<ul>
<li>1.1Kii-wik provides the Superheroes Platform to enable Users to publish&nbsp; Request/Posted Tasks.</li>
<li>1.2 Superheroes may make an Offer in response to a Request/Posted Task. Some parts of Offer details may be made publicly available, including to internet users who are not Users in order to be more visible to future superheroes.</li>
<li>1.3 A User may revoke or modify a Request/Posted Task at any time before he/she accepts an Offer. Superheroes reserves the right to cancel all Offers on a Request/Posted Task made prior to the modification or amendment.</li>
<li>1.4 If a User accepts an Offer on the Kii-wik Platform, a Request/Posted Task Contract is created between the Superhero and the User.</li>
<li>1.5 Once the Request/Posted Task Contract is created, the Superhero and User may vary the Task Contract on the Kii-wik Platform. The User and Superhero are encouraged to use Kii-wik private messaging system to amend or vary the Request/Posted Task Contract (including the Agreed Price) or to otherwise communicate.</li>
<li>1.6 The Superhero must perform the Services required under the Request/Posted Task Contract, including in accordance with any additional terms or conditions agreed by the parties.</li>
<li>1.7 Once the Services are complete, the Superhero must provide notice of that on the Kii-wik Platform.</li>
<li>1.8 Once the Services are complete, the User must provide notice of that on the Kii-wik &nbsp;Platform.</li>
<li>1.9 Its important to stablish the method of payment. Kii-wik provides the platform but its just between the User and Superhero the method of how the services requested will be pay.<br />Under no reason, Kii-wik will be any responsability to pay any of users or superheroes.</li>
<li>1.10 After the Request/Posted Task Contract is completed, the parties are encouraged to review and provide feedback of the Services on the Kii-wik &nbsp;Platform.</li>
</ul>
<ol start="2">
<li><strong> Superheroe&rsquo;s ROLE AND OBLIGATIONS</strong></li>
</ol>
<ul>
<li>2.1 Superheroes provides the Kii-wik Platform only, enabling Users to publish Request/Posted Tasks and make Offers on Posted Tasks.</li>
<li>2.2 Kii-wik only permits individuals over 18 years of age to become Users/Superheroes</li>
<li>2.3 Superheroes must be natural persons, but can specify within their account description that they represent a business entity or a freelancer type of entity.</li>
<li>2.4 Over all discretion, Kii-wik may refuse to allow any person to register or create an account with Kii-wik or cancel or suspend any existing account.</li>
<li>2.5 Registering and creating an account with Kii-wik is free. There is no charge for a User to Rquest/post tasks, or for other Superheroes Users to review content on the Kii-wik Platform, including Requested/Posted Tasks.</li>
<li>2.6 Kii-wik accepts no liability for any aspect of the User and Superhero interaction, including but not limited to the description, performance or delivery of Services.</li>
<li>2.7 Kii-wik has no responsibility and makes no warranty as to the truth or accuracy of any aspect of any information provided by Users, including, but not limited to, the ability of&nbsp;Superheroes to perform tasks or supply items, or the honesty or accuracy of any information provided by Users or the Users' ability to pay for the Services requested.</li>
<li>2.8 Except for liability in relation to any Non-excludable Condition, the Superhero Service is provided on an "as is" basis, and without any warranty or condition, express or implied. To the extent permitted by law, we and our suppliers specifically disclaim any implied warranties of title, merchantability, fitness for a particular purpose and non-infringement.</li>
<li>2.9 Kii-wik has no obligation to any User to assist or involve itself in any dispute between Users, although may do so to improve User experience.<br />If there is a dispute between User and Superhero, we will offer assistance in order to solve the issue at a decent way but we wont take sides at any moment and we will be only helping as much as we consider we can.</li>
</ul>
<ol start="3">
<li><strong> USER(s) OBLIGATIONS</strong></li>
</ol>
<ul>
<li>3.1 You will at all times:</li>
<ul>
<li>(a) comply with this Agreement (including all Policies) and all applicable laws and regulations;</li>
<li>(b) only post accurate information on the Kii-wik Platform;</li>
<li>(c) promptly and efficiently perform obligations to other User under a Task Contract; and</li>
<li>(d) ensure that You are aware of any laws that apply to You as a Poster or Superhero, or in relation to using the Kii-wik Platform.</li>
</ul>
<li>3.2 You agree that any content (whether provided by Superhero, a User or a third party) on the Kii-wik Platform may not be used on third party sites or for other business purposes without Kii-wik&rsquo;s prior permission.</li>
<li>3.3 You must not use the Kii-wik Platform for any illegal or immoral purpose.</li>
<li>3.4 You must maintain control of Your Kii-wik account and must not deal your account in any way, including by allowing others to use Your account, or by transferring or selling Your account or any of its content to another person.</li>
<li>3.5 You grant Kii-wik an unrestricted, worldwide, royalty-free license to use, reproduce, modify and adapt any content and information posted on the Kii-wik Platform for the purpose of publishing material on the Kii-wik Platform and as otherwise may be required to provide the Superhero Service, for the general promotion of the Superhero Service, and as permitted by this Agreement.</li>
<li>3.6 You agree that any information posted on the Kii-wikPlatform must not, in any way whatsoever, be potentially or actually harmful to Superheroes or any other person. Harm includes, but is not limited to, economic loss that will or may be suffered by Kii-wik.</li>
<li>3.7 Without limiting any provision of this Agreement, any information You supply Kii-wik or publish in a Request/Posted Task (including as part of an Offer) must be up to date and kept up to date and must not:</li>
<ul>
<li>*(a) be false, inaccurate or misleading or deceptive;</li>
<li>*(b) be fraudulent or involve the sale of counterfeit or stolen items;</li>
<li>*(c) infringe any third party's copyright, patent, trademark, trade secret or other proprietary rights or intellectual property rights, rights of publicity, confidentiality or privacy;</li>
<li>*(d) violate any applicable law, statute, ordinance or regulation (including, but not limited to, those governing export and import control, consumer protection, unfair competition, criminal law, antidiscrimination and trade practices/fair trading laws);</li>
<li>*(e) be defamatory, libelous, threatening or harassing;</li>
<li>*(f) be obscene or contain any material that, in Kii-wik&lsquo;s sole and absolute discretion, is in any way inappropriate or unlawful, including, but not limited to obscene, inappropriate or unlawful images; or</li>
<li>*(g) contain any malicious code, data or set of instructions that intentionally or unintentionally causes harm or subverts the intended function of any Kii-wik Platform, including, but not limited to viruses, trojan horses, worms, time bombs, cancelbots, Easter eggs or other computer programming routines that may damage, modify, delete, detrimentally interfere with, surreptitiously intercept, access without authority or expropriate any system, data or Personal Information.</li>
</ul>
<li>3.8 Kii-wik Platform may from time to time engage location-based or map-based functionality. The Kii-wik Platform may display the location of Users &nbsp;and Superheroes to persons browsing the Kii-wik Platform. Each User will be asked to provide the street and suburb where the Services are to be delivered. A User should never disclose personal details such as the Users's full name, street number, phone number or email address in a Request/Posted Task or in any other public communication on Kii-wik Platform.<br />The superheroes that try on giving the user an offer, must be active/membership users in order to contact the users.&nbsp; By having a membership, they get the right to contact the users on a &ldquo;private&rdquo; chat platform that Kii-wik will provide. In this way the user and the superhero will then exchange information in order to&nbsp; agree on a price and how the service will be conducted.</li>
<li>3.9 Superheroes must provide Services to Users in accordance with the Task Contract, unless the Services are prohibited by law, this Agreement, an agreement between the User and a third party or by any of our Policies.</li>
<li>3.10 You must not, when supplying Services, charge a User any fees on top of the Request/Tasker Budgjet . However, the parties to a Task Contract may agree to amend the Agreed Price through the Kii-wik Platform.</li>
<li>3.11 It is recommended to agree on a price, write it on the Request post, chat and choose the method of payment so both parties ( user and superhero) at all moments know how will this service will be finalized.</li>
<li>3.12 If a Superhero agrees to pay some costs of completing the Services (such as equipment to complete the Services), the Superhero is solely responsible for obtaining any reimbursement from the&nbsp;Userr. Kii-wik advises Superheroes not to agree to incur costs in advance of receiving the payment for these costs, unless the Superhero is confident the User will reimburse the costs promptly.</li>
<li>3.13 If Kii-wik determines at its sole discretion that You have breached any obligation under this clause 3, it reserves the rights to remove any content, Request/Posted Task or Offer You have submitted to the&nbsp; Kii-wik Service or cancel or suspend Your account and/or any Task Contracts.</li>
</ul>
<ol start="4">
<li><strong> FEES AND&nbsp;OBLIGATIONS</strong></li>
</ol>
<ul>
<li>4.1 Upon the creation of a Request/ Task Contract, the Superhero &amp; User must agree on a payment method and repescted the Request/Task Post.<br />4.2 If the Posted Task requires a Superhero to incur costs in completing the Services, the cost incurred will not be Kii-wiks responsability and Superhero must agree with User so both parties agree on how will this be pay.</li>
<li>4.3 Users at all moments will be able to use Kii-wik platform as long as they use Kii-wik on a responsable way and in case they incur on a mistake or fail, Kii-wil will analized the situation and make a decision on letting them stay or cancel, block their account.<br /><br />4.4 Superheroes&nbsp; ( Freelancers &amp; companies) will need to purchase a membership in order to be able to contact the users posts and in this way be able to make an offer to this users.<br /><br />Superheroes will choose a membership package and in case they want to stop using the platform, there is no refund from Kii-wik. <br />Prices for memberships are fixed prices and we reserve the right to make special offers to new superheroes.<br /><br />There will be 2 types of memberhips: <br />Freelancer &amp; Company.<br />The main difference will be the price these one have.&nbsp;&nbsp; However, freelancers will not be able to choose more then 3 skills/professions they can work with or promote. <br /><br />Supercompanies memberships will have a different price but they will be able to choose up to 5 skills/professions they can work/promote on their profile.<br /><br /></li>
<li>4.5 All Freelancers / Companies will have the same chances to see requests/post and in this way compete in a fair way to get the users request.<br /><br /></li>
<li>4.6 Kii-wik might change the membership prices but only to new users and if the price is lower, the price for the existent users will be re adjust and/or refund if they user/superhero&nbsp; continues using the Kii-wik platform</li>
<li>4.7 Kii-wik may restrict a Freelancers/Companies (superheroes) and/or users if there is a fee it hasnt been paid.</li>
</ul>
<ol start="5">
<li><strong> PAYMENTS AND REFUNDS</strong></li>
</ol>
<ul>
<li>5.1 If:</li>
<ul>
<li>(a) the User and the Superhero mutually agree to cancel the Task Contract; or</li>
<li>(b) following reasonable attempts by a User to contact a Superhero to perform the Task Contract, the Request/Task Contract is cancelled;</li>
</ul>
</ul>
<p>&nbsp;</p>
<ul>
<ul>
<li>(c) User has already done a previous payment to Superhero; Superhero is in charge on refunding the amount&nbsp; previously received given by the user.</li>
</ul>
<li>5.2 A contract can be cancelled on mutual reasons but is just the User and Superhero that both parties agree on how the refund or service will be fix.</li>
<li>5.3 If a Task Contract is cancelled:</li>
<ul>
<li>The original post will be marked as &ldquo; not finished or pending&rdquo;</li>
<li>The Superhero will need to inform us on why the User&nbsp; cancel this service</li>
<li>The User must notify Kii-wik the reason why this was cancelled.</li>
</ul>
<li>5.4 If the parties agree to any additional cancellation fee payable under the Request/Task Contract, it is the responsibility of the party aggrieved to claim any amount owed directly from the other.</li>
<li>5.5. When a Contract is cancelled, both parties must present evidence in case both or any of them have done a mistake, taken a wrong decission or just any proof that might help both parties to resolve this issue in case it can create future problems.<br />Is important to remember that Kii-wik is not responsable for ANY&nbsp;economical problem that can cause either the User or Superhero.</li>
<li>5.6 If, for any reason, the task has not been marked as complete either from User or Superhero, we will wait for 14 days in case of any dispute.</li>
<li>5.7 If, no claim is made in between these 14 days, Kii-wik will consider that Request/Task as completed.</li>
<li>5.8 No dispute will be accepted after 14 days starting from the day you have assigned your task to the Superhero</li>
</ul>
<ol start="6">
<li><strong> BUSINESS PARTNERS (Posters)</strong></li>
</ol>
<ul>
<li>6.1 Kii-wik may enter into agreements with Business Partners and may seek to engage Superheroes &nbsp;in the provision of Business Services. Users who agree to perform Business Services for Business Partners acknowledge and agree that Superheroes and the Business Partner may on-sell Services supplied to third parties for an increased fee.</li>
<li>6.2 Business Partners may require Superheroes providing Business Services to be approved or hold particular qualifications. Kii-wik may assist Business Partners to locate suitably qualified Superheroes. Kii-wik makes no warranty that it will promote any or all suitably qualified Superheroes to Business Partners, the assistance will be based on reviews, documents presented by Superheroes and in general a good research on Kii-wiks platform.</li>
<li>6.3 Business Partners may require Superheroes to enter into a Business Partner Contract before providing Business Services.</li>
<li>6.4 Where a Superhero accepts a Request/Posted Task with a Business Partner:</li>
<ul>
<li>(a) the Superhero must provide Business Services to the Business Partner in accordance with the Request/Task Contract and any applicable Business Partner Contract; and</li>
<li>(b) the terms of the Business Partner Contract will prevail to the extent of any inconsistency.</li>
</ul>
</ul>
<ol start="7">
<li><strong> PAYMENT FACILITY&nbsp;FOR&nbsp;SUPERHEROES ( companies &amp; freelancers ) </strong></li>
</ol>
<ul>
<li>7.1 Kii.wik will be using multiple payment gateways to ensure convenience and security.</li>
<li>7.2 Kii-wik will use&nbsp; Bank-card payment and/or Oxxo Vouchers in order to let Superheroes to use the platform</li>
<li>7.3 Each superhero is in charge/responsable to do the monthly payment or membership plan on the correct day.</li>
<li>7.4 Once the Superhero chooses a membership and the payment has been approved via Bankcard or Oxxo Voucher, the Superhero will get an &ndash;email with a notification so this one can start using the platform and start contacting possible users and request.<br /><br />Example: If you purchase a&nbsp; 1 Month Membership Plan the 22<sup>nd</sup> of March, but the payment hasnt been confirmed not until the 25<sup>th</sup> , your membership will&nbsp; then end the 22<sup>nd</sup> of&nbsp;April.</li>
</ul>
<ol start="8">
<li><strong> Super&nbsp;Freelancer or Super Company ?</strong></li>
</ol>
<ul>
<li>8.1 Superheroes will have 2 types of memberships<br />Super freelancer &amp; Super company&nbsp;</li>
<li>8.2 Only companies can choose&nbsp; a Super Company membership, and by doing this it gives them he right to choose up to 5 skills/proffesions they are good at.<br />Kii-wik will suggest you to provide documentation that proofs this skills</li>
<li>8.3 Only Freelances should choose a Freelance membership and this gives them the right to choose up to 3 skills they are good at and Kii-wik will suggest them to provide proof of this skills, however Kii-wik understands that some&nbsp; Freelancers might be good at some skills but havent finish the education.<br /><br />Is up to the user to choose a Freelancer or a Superhero</li>
<li><br /><strong>How to pay a membership?</strong><strong><br /><br /></strong></li>
<li>8.4 Both types of Super Heroes, will need to create an account with Kii-wik.&nbsp; Once they doo a verification/welcome e-mail will be sent by Kii-wik and the Superhero must confirm this one by clickin in the link on this e-mail. After this is done, The Super Hero will have to choose a payment method:<br />Via Online ( Bank Card) or Via Oxxo<br /><br />What ever choose the superhero takes, we will need to verify the payment once is done and a once is verified, the Super Hero will recieve an e-mail with some tutorial guidelines so this one can be very effective on how to gain&nbsp; &ldquo;request/task&rdquo; with a good offer.<br /><br /></li>
<li>8.5 Payments via Bank Card are faster towards Oxxo Payments, however both ways are safe to choose.</li>
</ul>
<ol start="9">
<li><strong> THIRD PARTY SERVICES ( Advertisement )</strong></li>
</ol>
<ul>
<li>9.1 Kii-wik from time to time include Third Party Services on the Kii-wikPlatform. These Third Party Services are not provided by Kii-wik or any superhero.</li>
<li>9.2 Third Party Services are offered to Users pursuant to the third party's terms and conditions. Third Party Services may be promoted on the Kii-wik Platform as a convenience to our Users who may find the Third Party Services of interest or of use.</li>
<li>9.3 If a User engages with any Third Party Service provider, the agreement will be directly between the User and that Third Party Service provider.</li>
<li>9.4 Kii-wik makes no representation or warranty as to the Third Party Services. However, to help us continue to improve our &nbsp;Kii-wik Platform, Users may inform Kii-wik of their Third Party Service experience here.</li>
</ul>
<ol start="10">
<li><strong> VERIFICATION &amp; BADGES</strong></li>
</ol>
<ul>
<li>10.1 Kii-wik may use Identity Verification Services.</li>
<li>10.2 You agree that Kii-wik Identity Verification Services may not be fully accurate as all Kii-wik Services are dependent on User-supplied information and/or information or verification services provided by third parties.</li>
<li>10.3 You are solely responsible for identity verification and Kii.wik accepts no responsibility for any use that is made of an Kii-wik Identity Verification Service.</li>
<li>10.4 Kii.wik Identity Verification Services may be modified at any time.</li>
<li>10.5 The Kii-wik Platform may also include a User-initiated feedback system to help evaluate Users.</li>
<li>10.6 Kii-wik may make Badges available to Superheroes . The available Badge can be requested by the Superhero &nbsp;via the Supertasker Platform, and arranged on behalf of the Tasker and issued by Supertasker, for free but Kii-wik must and might request information that proofs this. Obtaining Badges may be subject to the provision of certain information or documentation by the Superhero and determined by Kii-wik &nbsp;or a third party verifier subject to its terms.<br />Exampel:<br />If the Freelancer has no criminal records, a special badge can be display on its profile so Users can see it.&nbsp; In order for this to happen, we must ve valid documentation from the right dependency so we can provide the badget.<br /><br /><br /></li>
<li>10.7 You acknowledge that Badges are point in time checks and may not be accurate at the time it is displayed. You acknowledge that to the extent You relied on a Badge in entering into a Request/Task Contract, you do so aware of this limitation. You should seek to verify any Badge with the Superhero prior to commencing the task.</li>
<li>10.8 It remains the Superheroe's responsibility to ensure that information or documentation it provides in obtaining a Badge is true and accurate and must inform Kii-wik immediately if a Badge is no longer valid.</li>
<li>10.9 Kii-wik may, at its discretion, issue Badges to Superheroes for a fee.<br />Kii-wik Academia will be a badge that any Superhero can get once they finish our Kii-wik course.<br />This has a special price. Please contact us for more information.<br /><br /></li>
<li>10.10 The issue of a Badge to a Superhero &nbsp;remains in the control of&nbsp; Kii-wik and the display and use of a Badge is licensed to the Superhero for use on the Kii-wik Platform only. Any verification obtained as a result of the issue of a Badge may not be used for any other purpose outside of the Kii-wik Platform.</li>
<li>10.11 Kii-wik retains the discretion and right to not issue, or remove without notice, a Badge if You are in breach of any of the terms of this Agreement, the Badge has been issued incorrectly, obtained falsely, has expired, is no longer valid or for any other reason requiring its removal by Kii-wik.</li>
</ul>
<ol start="11">
<li><strong> INSURANCE</strong></li>
</ol>
<ul>
<li><strong>11.1 Kii-wik, doesn&rsquo;t provide any insurance services either to USERS nor SUPERHEROES</strong></li>
<li>11.3 We are a platform that <u>connects service providers to house/businesses/individuals</u></li>
<li>11.4 While getting Superheroes on board we verify them by ID card and number and other federal methods.</li>
</ul>
<ol start="12">
<li><strong> FEEDBACK</strong></li>
</ol>
<ul>
<li>12.1 You can complain about any comment made on the Kii-wil Platform using the 'Report' function of the Kii-wik Platform or contact Kii-wik via the Kii-wik Platform.</li>
<li>12.2 Kii-wik is entitled to suspend or terminate Your account at any time if Kii-wik, in its sole and absolute discretion, is concerned by any feedback about You, or considers Your feedback rating to be problematic for other Kii-wik Users.</li>
</ul>
<ol start="13">
<li><strong> LIMITATION OF LIABILITY</strong></li>
</ol>
<ul>
<li>13.1 Except for liability in relation to breach of Non-excludable Condition, to the extent permitted by law, Kii-wik specifically disclaims all liability for any loss or damage (actual, special, direct, indirect and consequential) of every kind and nature, known and unknown, suspected and unsuspected, disclosed and undisclosed (including, without limitation, loss or damage relating to any inaccuracy of information provided, or the lack of fitness for purpose of any goods or service supplied), arising out of or in any way connected with any transaction between Users and Superheroes.</li>
<li>13.2 Except for liability in relation to a breach of any Non-excludable Condition, to the extent permitted by law, Kii-wik specifically disclaims all liability for any loss or damage (actual, special, direct, indirect and consequential) of every kind and nature, known and unknown, suspected and unsuspected, disclosed and undisclosed (including, without limitation, loss or damage relating to any inaccuracy of information provided, or the lack of fitness for purpose of any goods or service supplied), arising out of or in any way connected with any transaction between You and any Third Party Service provider who may be included from time to time on the Kii-wik Platform.</li>
<li>13.3 Except for liability in relation to a breach of any Non-excludable Condition, and to the extent permitted by law, Kii-wik &nbsp;is not liable for any Consequential Loss arising out of or in any way connected with the Superheroes Services.</li>
</ul>
<ol start="14">
<li><strong> PRIVACY</strong></li>
</ol>
<ul>
<li>14.1 Kii-wik&rsquo;s Privacy Policy, which is available at ________, applies to all Users and forms part of this Agreement. Use of the Kii-wik&rsquo;s Platform confirms that You consent to, and authorize, the collection, use and disclosure of Your Personal Information in accordance with Kii-wik&rsquo;s Privacy Policy.</li>
<li>14.2 Third Party Service providers will provide their service pursuant to their own Privacy Policy. Prior to acceptance of any service from a third party, You must review and agree to their terms of service including their privacy policy.</li>
<li>14.3 Kii-wik will endeavor to permit you to transact anonymously on the Kii-wik Platform. However in order to ensure Kii-wik can reduce the incidence of fraud and other behavior in breach of the Community Guidelines, Kii-wik reserves the right to ask Users to verify themselves in order to remain a User.</li>
</ul>
<ol start="15">
<li><strong> MODIFICATIONS TO THE AGREEMENT</strong></li>
</ol>
<ul>
<li>15.1 Kii-wik may modify this Agreement or the Policies (and update the Kii-wik pages on which they are displayed) from time to time. Kii-wik will send notification of such modifications to Your Superhero/user account or advise You the next time You login.</li>
<li>15.2 When You actively agree to amended terms (for example, by clicking a button saying "I accept") or use the Kii-wik Platform in any manner, including engaging in any acts in connection with a Task Contract, the amended terms will be effective immediately. In all other cases, the amended terms will automatically be effective 30 days after they are initially notified to You.</li>
<li>15.3 If You do not agree with any changes to this Agreement (or any of our Policies), You must either terminate your account or You must notify Kii-wik who will terminate Your Kii-wik account, and stop using the Kii-wik Service.</li>
</ul>
<ol start="16">
<li><strong> NO AGENCY</strong></li>
</ol>
<ul>
<li>16.1 No agency, partnership, joint venture, employee-employer or other similar relationship is created by this Agreement. In particular You have no authority to bind Kii-wik, its related entities or affiliates in any way whatsoever. Kii-wik confirms that all Third Party Services that may be promoted on the Kii-wik Platform are provided solely by such Third Party Service providers. To the extent permitted by law, Kii-wik specifically disclaims all liability for any loss or damage incurred by You in any manner due to the performance or non-performance of such Third Party Service.</li>
</ul>
<ol start="17">
<li><strong> NOTICES</strong></li>
</ol>
<ul>
<li>17.1 Except as stated otherwise, any notices must be given by registered ordinary post or by email, either to Kii-wik&rsquo;s contact address as displayed on the Kii-wik Platform, or to Kii-wik Users' contact address as provided at registration. Any notice shall be deemed given:</li>
<ul>
<li>(a) if sent by email, 24 hours after email is sent, unless the User is notified that the email address is invalid or the email is undeliverable, and</li>
<li>(b) if sent by post, three Business Days after the date of posting</li>
</ul>
<li>17.2 Notices related to performance of any Third Party Service must be delivered to such third party as set out in the Third Party Service provider's terms and conditions.</li>
</ul>
<ol start="18">
<li><strong> MEDIATION AND DISPUTE RESOLUTION</strong></li>
</ol>
<ul>
<li>18.1 Kii-wik &nbsp;encourages You to try and resolve disputes (including claims for returns or refunds) with other Users/Superheroes directly. Accordingly, You acknowledge and agree that Kii-wik may, in its absolute discretion, provide Your information as it decides is suitable to other parties involved in the dispute.</li>
<li>18.2 If a dispute arises with another User, You must co-operate with the other User and make a genuine attempt to resolve the dispute.</li>
<li>18.3 Kii-wik may elect to assist Users resolve disputes. Any User may refer a dispute to Kii-wik. You must co-operate with any investigation undertaken by Kii-wik. Kii-wik reserves the right to make a final determination (acting reasonably) based on the information supplied by the Users and direct the Escrow Provider to make payment accordingly. You may raise your dispute with the other User or Kii-wik&rsquo;s determination in an applicable court or tribunal.</li>
<li>18.5 If You have a complaint about the Superhero Service please contact us here.</li>
<li>18.6 If Kii-wik provides information about other Users to You for the purposes of resolving disputes under this clause, You acknowledge and agree that such information will be used only for the purpose of resolving the dispute (and no other purpose) and that you will indemnify Kii.wik against any claims relating to any other use of information not permitted by this Agreement.</li>
</ul>
<ol start="19">
<li><strong> TERMINATION</strong></li>
</ol>
<ul>
<li>19.1 Either You or Kii-wik may terminate your account and this Agreement at any time for any reason.</li>
<li>19.2 Termination of this Agreement does not affect any Request/Task Contract that has been formed between Kii-wik, Superheroes &amp; Users. If You have entered a Task Contract You must comply with the terms of that Task Contract including providing the Services or paying the Agreed Price as applicable.</li>
<li>19.3 Sections 4 (Fees), 13 (Limitation of Liability) and 18 (Mediation and Dispute Resolution) and any other terms which by their nature should continue to apply, will survive any termination or expiration of this Agreement.</li>
<li>19.4 If Your account or this Agreement are terminated for any reason then You may not without Kii-wik&rsquo;s consent (in its absolute discretion) create any further accounts with Kii-wik and we may terminate any other accounts You operate.</li>
<li>There is no refunds of any type once you have purchase a membership.</li>
</ul>
<ol start="20">
<li><strong> GENERAL</strong></li>
</ol>
<ul>
<li>20.1 This Agreement is governed by the laws of Estados Unidos Mexicanos. You and Kii-wik submit to the exclusive jurisdiction of the courts of Mexico.</li>
<li>20.2 The provisions of this Agreement are severable, and if any provision of this Agreement is held to be invalid or unenforceable, such provision may be removed and the remaining provisions will be enforceable.</li>
<li>20.3 This Agreement may be assigned or novated by Kii-wik to a third party without your consent. In the event of an assignment or novation the User will remain bound by this Agreement.</li>
<li>20.4 This Agreement sets out the entire understanding and agreement between the User and Kii-wik with respect to its subject matter.</li>
</ul>
<p>January 6<sup>th</sup> &nbsp;Kii-wik Copy Rights 2020</p>
<p><strong>APPENDIX A:</strong></p>
<p><strong>MODEL TASK CONTRACT</strong></p>
<p>The terms used in this Task Contract have the meaning set out in the Kii-wik Glossary. A Request/Task Contract is created in accordance with the Kii-wik Agreement. Unless otherwise agreed, the User/Poster and the Superhero(companies, freelancers) &nbsp;enter into a Request/Task Contract on the following terms:</p>
<ul>
<li>1 COMMENCEMENT DATE AND TERM</li>
<ul>
<li>1.1 The Request/Task Contract is created when the user/Poster accepts the Superhero (freelancer or company) Offer on a Posted Task to provide Services.</li>
<li>1.2 The Contract will continue until terminated in accordance with clause 7.</li>
</ul>
<li>2 SERVICES</li>
<ul>
<li>2.1 The Superhero will perform Services in a proper and workmanlike manner.</li>
<li>2.2 The Superhero must perform the Services at the time and location agreed.</li>
<li>2.3 The parties must perform their obligations in accordance with any other terms or conditions agreed by the parties during or subsequent to the creation of the Task Contract.</li>
</ul>
<li>3 WARRANTIES</li>
<ul>
<li>3.1 Each party warrants that the information provided in the creation of the Request/Task Contract is true and accurate.</li>
<li>3.2 The Superhero warrants that he/she has the right to work and provide Services and hold relevant licenses in Mexico.</li>
<li>3.3 The parties incorporate the Consumer Guarantees into the Request/Task Contract, even if they are not already incorporated by law.</li>
</ul>
<li>4 PAYMENT OR CANCELLATION</li>
<ul>
<li>4.1 Upon the creation of the Request/Task Contract, the User must pay the Agreed Price into via the payment method both parties have a greed on and with out Kii-wik s responsibility</li>
<li>4.2 Upon the Services being completed, the Superhero will provide notice on the Kii-wik Platform.</li>
<li>4.3 The User/Poster will be prompted to confirm the Services are complete. If the Serhero has completed the Services in accordance with clause 2, the User/Poster must use the Kii-wik Platform and mark this request as completed. Note that all request assigned&nbsp; will have 14 days from agreed dated to be marked as done or still workig label, in case nothing its marke after 14 days this request will atumatically be marked as done.</li>
<li>4.4 If the parties agree to cancel the &nbsp;Request/Task Contract, or the User/Poster is unable to contact the Superhero to perform the Request/Task Contract, the user has the right to pass the request to another Superhero without having to pay the previous superhero.</li>
</ul>
<li>5 LIMITATION OF LIABILITY</li>
<ul>
<li>5.1 Except for liability in relation to a breach of a Non-excludable Condition, the parties exclude all Consequential Loss arising out of or in connection to the Services, and any claims by any third person, or the Task Contract, even if the party causing the breach knew the loss was possible or the loss was otherwise foreseeable.</li>
</ul>
<li>6 DISPUTES</li>
<ul>
<li>6.1 If a dispute arises between the parties, the parties will attempt to resolve the dispute within 14 days by informal negotiation (by phone, email or otherwise).</li>
<li>6.2 If the parties are unable to resolve the dispute in accordance with clause 6.1, either party may refer the dispute to Kii-wik and act in accordance with clause 18 of the Supertasker Agreement.</li>
</ul>
<li>7 TERMINATION OF CONTRACT<br />The Request/Task Contract will terminate when:</li>
<ul>
<li>(a) the Services are completed and the price has been paid and the reques has been marked as done on Kii-wik Platform;</li>
<li>(b) a party is terminated or suspended from the Kii-wik Platform, at the election of the other party;</li>
<li>(c) notified by Kii-wik in accordance with the party's Kii-wik Agreement.</li>
</ul>
<li>8 APPLICATION OF POLICIES<br />The parties incorporate by reference the applicable Policies.</li>
<li>9 GOVERNING LAW</li>
</ul>
<p>The Request/Task Contract is governed by the laws of Estados Unidos Mexicanos. The parties submit to the exclusive jurisdiction of Mexico.</p>
<p>January 6<sup>th</sup> &nbsp;Kii-wik Copy Rights 2020</p>
<p>&nbsp;</p>
<p><strong>Kii-wik (s) Glossary</strong></p>
<p>"Agreement" means the most updated version of the agreement between the Superhero and a User.</p>
<p>"Agreed Price" means agreed price for Services (including any variation) &nbsp;this one will be pay via the method both parties choose to agree. Kii-wik is not responsable of any payment/refund or liable for expenses that Superhero or User may need. Remember that &ldquo;Agreed Price&rdquo; does not include any costs incurred by the Superhero when completing Services which the User/Poster agrees to reimburse.</p>
<p>" Kii-wik " "we" "us" "our" means Kii-wik.</p>
<p>" Kii-wik Badge" means a badge that may be issued to a User based on the User meeting certain qualifications or other thresholds, including Verification Icons, as determined and set by&nbsp; Kii-wik.</p>
<p>" Kii-wik Platform" means the Kii-wik website at www-kii-wik.com, Kii-wik smartphone app, and any other affiliated platform that may be introduced from time to time.</p>
<p>" Kiiw-wik Service" means the service of providing the Kii-wik Platform.</p>
<p>"Badge" means an Kii-wik &nbsp;Badge and Verification Icon.</p>
<p>"Business Day" means a day on which banks are open for general business in Mexico.</p>
<p>"Business Services" means Services provided by a Supergero to a Business Partner acquired for the purpose of on selling to a third party (such as the Business Partner's customer).</p>
<p>"Consequential Loss" means any loss, damage or expense recoverable at law:</p>
<ul>
<ul>
<li>(a) other than a loss, damage or expense that would be suffered or incurred by any person in a similar situation to the person suffering or incurring the loss, damage or expense; or</li>
<li>(b) which is a loss of:</li>
<ul>
<li>a. opportunity or goodwill;</li>
<li>b. profits, anticipated savings or business;</li>
<li>c. data; or</li>
<li>d. value of any equipment,</li>
</ul>
</ul>
</ul>
<p>and any costs or expenses incurred in connection with the foregoing.</p>
<p>"Fees" means all fees payable to Kii-wik by Superheros including the &nbsp;Membership &nbsp;Fee.</p>
<p>"Identity Verification Services" means the tools available to help Users verify the identity, qualifications or skills of other Users/Superheroes including mobile phone verification, verification of payment information, References, integration with social media, Kii-wik Badges and Verification Icons.</p>
<p>"Marketing Material" means any updates, news and special offers in relation to Kii.wik &nbsp;or its Third Party Services.</p>
<p>"Non-excludable Condition" means any implied condition, warranty or guarantee in a contract, the exclusion of which would contravene the law or cause any part of the contract to be void.</p>
<p>"Offer" means an offer made by a Superhero in response to a Request/Posted Task to perform the Services.</p>
<p>"Personal Information" has the same meaning as described in the Privacy Policy.</p>
<p>"Policies" means the policies posted by Kii-wik on the Kii-wik Platform, including but not limited to the Privacy Policy and Community Guidelines.</p>
<p>"Poster" means a User that posts on the Kii-wik Platform in search of particular Services.</p>
<p>"Request/Posted Task" means the Users/Poster's request for services, and includes the deadline for completion, price and description of the Services to be provided.</p>
<p>"Privacy Policy" means the privacy policy which is available at https://kii-wik.com/privacy.</p>
<p>"Services" means the services to be rendered as described in the Request/Posted Task, including any variations or amendments agreed before or subsequent to the creation of a Request/Task Contract.</p>
<p>"Site" means the website at www.kii-wik.com</p>
<p>"Task Contract" means the separate contract which is formed between a User/Poster and a Superhero for Services. In the absence of, or in addition to, any terms specifically agreed, the model terms of which are included in Appendix A to the Agreement apply to Request/Task Contracts.</p>
<p>"Superheroes" means a User/companies/freelancers who provides Services to Users.</p>
<p>"Superhero Offers" means the Agreed Price both User and Freelancer/Companie have agree the service is request will cost.</p>
<p>"User" or "You" means the person who has signed up to use the Supertasker Platform, whether as the User/Poster, Companie,Freelancer ( superhero), or otherwise.</p>
<p>"Verification Icons" means the icons available to be displayed on a User's profile and any such posts on the Kii-wik Platform to confirm details such as a User's qualification, license, certificate or other skill.</p>
<p><strong>Rules of Interpretation:</strong></p>
<p>In the Kii-wik Agreement and all Policies, except where the context otherwise requires:</p>
<ul>
<ul>
<li>(a) the singular includes the plural and vice versa, and a gender includes other genders;</li>
<li>(b) another grammatical form of a defined word or expression has a corresponding meaning;</li>
<li>(c) a reference to a document or instrument includes the document or instrument as novated, altered, supplemented or replaced from time to time;</li>
<li>(d) a reference to time is to the time Estados Unidos Mexicanos</li>
<li>(e) a reference to a person includes a natural person, partnership, body corporate, association, governmental or local authority or agency or other entity;</li>
<li>(f) a reference to a statute, ordinance, code or other law includes regulations and other instruments under it and consolidations, amendments, re-enactments or replacements of any of them;</li>
<li>(g) the meaning of general words is not limited by specific examples introduced by including, for example or similar expressions;</li>
<li>(h) headings are for ease of reference only and do not affect interpretation;</li>
<li>(i) any agreement, representation, warranty or indemnity in favor of two or more parties (including where two or more persons are included in the same defined term) is for the benefit of them jointly and severally; and</li>
<li>(j) a rule of construction does not apply to the disadvantage of a party because the party was responsible for the preparation of this agreement or any part of it.</li>
</ul>
</ul>
<p>&nbsp;</p>
                            </div>
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header p-0" id="headingThree" role="tab">
                            <h2 class="mb-0">
                              <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
                                  <p class="mb-0">Privacy Policy </p>
                                <i class="fa" aria-hidden="true"></i>
                              </button>
                            </h2>
                          </div>
                          <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body py-3 px-0">
                                <ol>
                                    <li>Far far away, behind the word mountains</li>
                                    <li>Consonantia, there live the blind texts</li>
                                    <li>When she reached the first hills of the Italic Mountains</li>
                                    <li>Bookmarksgrove, the headline of Alphabet Village</li>
                                    <li>Separated they live in Bookmarksgrove right</li>
                                </ol>
                            </div>
                          </div>
                        </div>

                       
                      </div>
          </div>
      </div>
      </div>
  </section>



  <!-- <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <h2>Latest news from our blog</h2>
        </div>
      </div>
      <div class="row d-flex">
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_1.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url('images/image_2.jpg');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry align-self-stretch">
            <a href="blog-single.html" class="block-20 rounded" style="background-image: url({{asset('main/images/image_3.jpg')}}');">
            </a>
            <div class="text p-4">
                <div class="meta mb-2">
                <div><a href="#">April 07, 2020</a></div>
                <div><a href="#">Admin</a></div>
                <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
              </div>
              <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 -->
@endsection

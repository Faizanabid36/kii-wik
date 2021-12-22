@extends('main_layouts.new_main')
@section('content')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url('{{ URL::asset('main/images/categories.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end">
                <div class="col-md-9 ftco-animate pb-5">
                    <h1 class="mb-0 bread">Categories</h1>
                </div>
            </div>
        </div>
    </section>
    <style>
        .table_div{
            display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
        }
        .first_div{
            width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
        }
        .first_div{
            padding-left: 204px;
        }
        .first_table{
            
            width: 100%;
        }
    </style>




    <section class="ftco-section bg-light ftco-faqs">
        <div class="container">
            <div id="WRchTxt0" class="_1Z_nJ" data-testid="richTextElement">
                <h1 class="font_0" style="line-height: 1.1em; text-align: center; font-size: 30px;"><span
                        style="font-size:30px;"><span style="font-weight:normal;"><span style="font-style:normal;"><span
                                    style="font-family:cinzel,serif;"><span class="color_11">SUPERHERO </span><span
                                        style="color:#008AFC">SKILLS</span></span></span></span></span></h1>
            </div>

            
            <div class="first_div">
                <table class="first_table">
                    <thead>
                        <tr>
                            <th>
                                Moving & Transport
                            </th>
                            <th>
                                House & Garden
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>WAREHOUSE & STORAGE</li>
                                    <li>MOVING AGENCY</li>
                                    <li>WASTE MANAGEMENT</li>
                                    <li>PASSANGER TRANSPORT</li>
                                    <li>MOVING AND TRANSPORT</li>
                                    <li>CONTAINER RENTAL</li>
                                    <li>TRANSPORT BY CAR</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>AIRCONDITION</li>
                                    <li>LANDSCAPE GARDENER</li>
                                    <li>LAWN MOWING</li>
                                    <li>CLEANING</li>
                                    <li>PEST CONTROL</li>
                                    <li>HOME ALARM</li>
                                    <li>SWIMMING POOL</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="first_div">
                <table class="first_table">
                    <thead>
                        <tr>
                            <th>
                                Craftsmen
                            </th>
                            <th style="padding-left: 309px;">
                                Renovation & Maintenace
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>ARCHITECH</li>
                                    <li>PLUMBER</li>
                                    <li>ELECTRITIAN</li>
                                    <li>CONTRATOR</li>
                                    <li>PAINTER</li>
                                    <li>MURER</li>
                                    <li>CARPENTEER</li>
                                    <li>ROOFING</li>
                                    <li>TILER</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                            <td style="padding-left: 304px;">
                                <ul>
                                    <li>RENOVATE BATHROOM</li>
                                    <li> ELECTRICIAN SERVICES</li>
                                    <li> FLOORING</li>
                                    <li> PAINTING SERVICES</li>
                                    <li> DEMOLITION</li>
                                    <li> SET UP WALL</li>
                                    <li> WINDOWS AND DOORS</li>
                                    <li> EXTERIOR WALL</li>
                                    <li> KITCHEN RENOVATION</li>
                                    <li> CONSTRUCTION AND PROJECT MANAGER</li>
                                    <li> OTHERS</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="first_div">
                <table class="first_table">
                    <thead>
                        <tr>
                            <th>
                                Car Workshop

                            </th>
                            <th>
                                CLEANING SERVICES
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>CAR ELECTRIC</li>
                                    <li>CAR CARE</li>
                                    <li>WHEEL/TRIE CHANGE</li>
                                    <li>CLIMNATE SERVICE A/C</li>
                                    <li>REPAIR</li>
                                    <li>RUST</li>
                                    <li>VARNISHING</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>FASADE WASHING</li>
                                    <li>REGULAR CLEANING</li>
                                    <li>MOVING WASH</li>
                                    <li>CLEANING</li>
                                    <li>WINDOW WASHING</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="first_div">
                <table class="first_table">
                    <thead>
                        <tr>
                            <th>
                                Catering & Event

                            </th>
                            <th style="padding-left:260px">
                                Photo & Picture
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>EVENT</li>
                                    <li>RENTAL OF PREMISES</li>
                                    <li>CATERING</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                            <td style="padding-left: 248px;">
                                <ul>
                                    <li>Image editing Real estate</li>
                                    <li>photography Photo</li>
                                    <li>Development Industrial photography Aerial /</li>
                                    <li>Drone photo Portrait</li>
                                    <li>Advertising photo Video / Film Other (photo)</li>
                                    <li>OTHERS</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="first_div">
                <table class="first_table">
                    <thead>
                        <tr>
                            <th>
                                WEB & IT
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <ul>
                                    <li>Mobile apps</li>
                                    <li>Repair Server</li>
                                    <li>Network Cloud</li>
                                    <li>services and backup</li>
                                    <li> Support</li>
                                    <li> Websites</li>
                                    <li> others</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        

            <div id="comp-kkqocoes" class="_1Z_nJ" data-testid="richTextElement">
                <h2 class="font_2" style="font-size: 14px; line-height: 1em; text-align: center;"><span
                        style="font-size:14px;"><span style="color:black"><span style="font-family:cinzel,serif;">Do you
                                have other skills ? Let us know so we
                                put them on the list.</span></span></span></h2>
            </div>
        </div>
    </section>
@endsection

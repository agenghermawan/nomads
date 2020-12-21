@extends('layout.app')
@section('title','Detail Travel')
@push('addon-style')
<link rel="stylesheet" href="{{ url('frontend/backend/libraries/xzoom/xzoom.css') }}">
@endpush


 @include('includes.navbar')   


    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Nusa penida</h1>
                            <p>
                                Republic of Indonesia Raya
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img 
                                    src="{{ url('frontend/backend/images/details.jpg') }}" 
                                    class="xzoom" 
                                    id="xzoom-default"
                                    xoriginal="{{ url('frontend/backend/images/details.jpg') }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="{{ url('frontend/backend/images/details.jpg') }}">
                                        <img 
                                        src="{{ url('frontend/backend/images/details.jpg') }}" 
                                        class="xzoom-gallery" 
                                        width="128" 
                                        xpreview="{{ url('frontend/backend/images/details.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/backend/images/nusa_penida.jpg') }}">
                                        <img 
                                        src="{{ url('frontend/backend/images/nusa_penida.jpg') }}" 
                                        class="xzoom-gallery" 
                                        width="128" 
                                        xpreview="{{ url('frontend/backend/images/nusa_penida.jpg') }}">
                                    </a>
                                    <a href="frontend/images/nusa_penida_1.jpg">
                                        <img 
                                        src="{{ url('frontend/backend/images/nusa_penida_1.jpg') }}" 
                                        class="xzoom-gallery" 
                                        width="128" 
                                        xpreview="{{ url('frontend/backend/images/nusa_penida_1.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/backend/images/nusa_penida_3.jpg') }}">
                                        <img 
                                        src="{{ url('frontend/backend/images/nusa_penida_3.jpg') }}" 
                                        class="xzoom-gallery" 
                                        width="128" 
                                        xpreview="{{ url('frontend/backend/images/nusa_penida_3.jpg') }}">
                                    </a>
                                    <a href="{{ url('frontend/backend/images/nusa_penida_5.jpg') }}">
                                        <img 
                                        src="{{ url('frontend/backend/images/nusa_penida_5.jpg') }}" 
                                        class="xzoom-gallery" 
                                        width="128" 
                                        xpreview="{{ url('frontend/backend/images/nusa_penida_5.jpg') }}">
                                    </a>
                                </div>
                            </div>
                            <h2>Tentang Wisata</h2>
                            <p>
                            Nusa Penida is an island (= nusa) part of the Republic of Indonesia located in the
                            southeast of Bali separated by the Badung Strait. Near this island there are also 
                            other smaller islands namely Nusa Ceningan and Nusa Lembongan. 
                            Nusa Penida is an island (= nusa) part of the Republic of Indonesia located in the
                            southeast of Bali separated by the Badung Strait. 
                            </p>
                            <p>
                            Bali is district of Klungkung Regency that includes the neighbouring small island of
                            Nusa Lembongan. The Badung Straits separates the island and Bali.
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <img 
                                    src="{{ url('frontend/backend/images/ic_event.png') }}" 
                                    alt=""
                                    class="features-image">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img 
                                        src="{{ url('frontend/backend/images/ic_bahasa.png') }}" 
                                        alt=""
                                        class="features-image">
                                        <div class="description">
                                            <h3>Language</h3>
                                            <p>Bahasa Indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img 
                                        src="{{ url('frontend/backend/images/ic_foods – 1.png') }}" 
                                        alt=""
                                        class="features-image">
                                        <div class="description">
                                            <h3>Food</h3>
                                            <p>Local Foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members are going</h2>
                            <div class="members my-2">
                                
                                <img src="{{ url('frontend/backend/images/member1.png') }}"  
                                class="member-image mr-1">

                                <img src="{{ url('frontend/backend/images/member2.png') }}"
                                class="member-image mr-1">

                                <img src="{{ url('frontend/backend/images/member3.png') }}"
                                class="member-image mr-1">

                                <img src="{{ url('frontend/backend/images/member4.png') }}"
                                class="member-image mr-1">
                                
                                <img src="{{ url('frontend/backend/images/member5.png') }}"
                                class="member-image mr-1">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        22 augt, 2020
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        4D 3N
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                        Open Trip
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        $80,00 / person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ url('checkout') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @push('addon-script')
    <script>
        $(document).ready(function() {
            
            $('.xzoom, .xzoom-gallery').xzoom ({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
    @endpush
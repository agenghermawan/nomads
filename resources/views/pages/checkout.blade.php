@extends('layout.app')
@section('title','Checkout')

@push('addon-style')
<link rel="stylesheet" href="{{ url('frontend/backend/libraries/bootstrap/css/bootstrap.css') }}">
<link rel="stylesheet" href="{{ url('frontend/backend/libraries/xzoom/xzoom.css') }}">
<link rel="stylesheet" href="{{ url('frontend/backend/libraries/gijgo/css/gijgo.min.css') }}">
@endpush

<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
            <a href="index.html" class="navbar-brand">
                <img src="{{ url('frontend/backend/images/logo.png') }}" alt="">
            </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
            <li>
                <span class="text-muted">
                    | &nbsp; Beyond the explorer of the world
                </span>
            </li>
        </ul>
    </nav>
</div>    

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
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Who is Going?</h1>
                        <p>
                            Trip to Ubud, Bali, Indonesia
                        </p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>VISA</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="{{ url('frontend/backend/images/avatar-1.png') }}" height="60">
                                            </td>
                                            <td class="align-middle">
                                                Rika sasa
                                            </td>
                                            <td class="align-middle">
                                                ID
                                            </td>
                                            <td class="align-middle">
                                                N/A
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="{{ url('frontend/backend/images/ic_remove.png') }}" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{ url('frontend/backend/images/avatar-2.png') }}" height="60">
                                            </td>
                                            <td class="align-middle">
                                                Linda Intan
                                            </td>
                                            <td class="align-middle">
                                                SG
                                            </td>
                                            <td class="align-middle">
                                                60 Days
                                            </td>
                                            <td class="align-middle">
                                                Active
                                            </td>
                                            <td class="align-middle">
                                                <a href="#">
                                                    <img src="frontend/images/ic_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                            <form class="form-inline">
                                <label for="inputUsername" class="sr-only">Name</label>
                                <input 
                                type="text"
                                name="inputUsername" 
                                class="form-control mb-2 mr-sm-2" 
                                id="inputUsername" 
                                placeholder="Username">

                                <label for="inputVisa" class="sr-only">Visa</label>
                                <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                    <option value="VISA" selected>VISA</option>
                                    <option value="30 Days">30 Days</option>
                                    <option value="N/A">N/A</option>
                                </select>

                                <label for="doePassport" class="sr-only">DOE Passport</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <input 
                                    type="text" 
                                    class="form-control datepicker" 
                                    id="doePassport" 
                                    placeholder="DOE Passport">
                                </div>

                                <button type="submit" class="btn btn-add-now mb-2 px-4">
                                    Add Now
                                </button>
                            </form>

                            <h3 class="mt-2 mb-0">Note</h3>
                            <p class="disclaimer mb-0">
                                You are only able to invite member that has registered in Nomads.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Members</th>
                                <td width="50%" class="text-right">
                                    2 Person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Additional VISA</th>
                                <td width="50%" class="text-right">
                                    $ 190,00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">
                                    $80,00 / person
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total</th>
                                <td width="50%" class="text-right">
                                    $ 190,00
                                </td>
                            </tr>
                            <tr>
                                <th width="50%">Total (+Unique)</th>
                                <td width="50%" class="text-right text-total">
                                    <span class="text-blue"> $ 279,</span>
                                    <span class="text-orange">33</span>
                                </td>
                            </tr>
                        </table>
                        <hr/>
                        <h2>Payment Instruction</h2>
                        <p class="payment-instruction">
                            Please complete the payment before to continue the trip
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/backend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT NOMADS ID</h3>
                                    <p>
                                        0829 0999 8390
                                        <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/backend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT NOMADS ID</h3>
                                    <p>
                                        0829 0999 2678
                                        <br>
                                        Bank HSBC
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="join-container">
                    <a href="{{ url('success') }}" class="btn btn-block btn-join-now mt-3 py-2">
                        I Have Made Payment
                    </a>
                </div>
                <div class="text-center mt-3">
                    <a href="details.html" class="text-muted">
                        Cancel Booking
                    </a>
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
            tint: '#333',s
            Xoffset: 15
        });

        $('.datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="frontend/images/ic_doe.png" />'
            }
        });
    });
</script>
    
@endpush
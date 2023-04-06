@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center">ORDER FORM</h1>
                    </div>

                    <div class="card-body" style="background-color:rgb(0,0,0.5)">
                        <form action="{{ url('order/save') }}" method="post">
                            @csrf
                            <h2 style="color:white;text-align:center">Order Form</h2>
                            <div class="mb-3">
                                <input type="text" class="form-control text-white" id="fullname" aria-decribedby="name"
                                    placeholder="Full Name" name="name"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16);text-color" />

                            </div>

                            <div class="input-group date mb-3" id="datepicker">
                                <input type="text" class="form-control text-white" id="date" name="birth" placeholder="Birth"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)" />
                                <span class="input-group-append"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)">
                                    <span class="input-group-text bg-light d-block">
                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>

                                    </span>
                                </span>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control text-white" id="address" aria-describedby="address"
                                    placeholder="Address" name='address'
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)" />

                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control text-white" id="phone" aria-describedby="phone"
                                    placeholder="phone" name="phone"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)">

                            </div>

                            <div class="mb-3">
                                <input type="text" class="form-control text-white" id="email" aria-describedby="email"
                                    placeholder="email" name="email"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)">

                            </div>

                            <div class="mb-3">
                                <input type="number" class="form-control text-white" id="security" aria-describedby="security"
                                    placeholder="SSN(Social Security Number)" name="security"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)">

                            </div>


                            
                            <div class="mb-3">
                                <input type="number" class="form-control text-white" id="cpn" aria-describedby="cpn"
                                    placeholder="CPN (For those who have a CPN Number)" name="cpn"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)">

                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control text-white" id="cpn" aria-describedby="ein"
                                    placeholder="EIN or DUN Number" name="ein"
                                    style="border: 1px solid white;background-color:rgb(23, 16, 16)">

                            </div>

                           
                           

                            <button type="submit" class="btn btn-warning" style="border:2px solid white">Send</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>
@endsection

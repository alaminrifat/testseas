@extends('layouts.main')
@section('content')

<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
             

    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions?</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form action="{{ route('mail.send') }}" method="POST">
                {{csrf_field()}}
                
                @if (Session::get('success'))
                    <div class="alert alert-success">
                    {{Session::get('success')}}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                    {{Session::get('fail')}}
                    </div>
                @endif




                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text" id="name" name="name" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text" id="email" name="email" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Your message</label>
                            <input type="text" id="email" name="message" class="form-control">

                         
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <div class="text-center text-md-left">
                    <button class="btn btn-block btn-primary" type="submit">Send </button>
                </div>

            </form>

            
            <div class="status"></div>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
    
@endsection
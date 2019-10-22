@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="container">
            <div class="col-md-12 ">
                <input type="search" placeholder="Pretraži" style="width:80%;padding:5px;border:1px solid gray;border-radius:4px;" class="input-group-lg">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-md-2">
            <div class="panel">
            Reklame 
            </div>
        </div>
        <div class="col-md-8">
           <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">Početna</div>

                   <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Dobro Došli na <a href="/">domacitekstovi.com</a>!</h1><br>
                    <p>Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.
                    <br>Ukoliko želite da postane deo tima, to jest da dodajete tekstove, ovo je jedini sajt koji to dozvoljava, tako da samo napred!
                    <br><br>Admin tim</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                      <a href="/">Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                      <p>Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                      <p>Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="panel">
                      <p>Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                    <iframe  src="https://www.youtube.com/embed/rJkNstUF3GA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel">
                      <p>Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-2">
            <div class="panel">
            <p>Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.
                    <br>Ukoliko želite da postane deo tima, to jest da dodajete tekstove, ovo je jedini sajt koji to dozvoljava, tako da samo napred!
                    Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.
                    <br>Ukoliko želite da postane deo tima, to jest da dodajete tekstove, ovo je jedini sajt koji to dozvoljava, tako da samo napred!
                    Mi smo najveća baza tekstova domaćih pesama, ovde možete pronaći skoro sve tekstove, a vrlo uskoro i sve tekstove koji vas zanimaju.
                    <br>Ukoliko želite da postane deo tima, to jest da dodajete tekstove, ovo je jedini sajt koji to dozvoljava, tako da samo napred!
                    </p>
            <br>
            </div>
        </div>
    </div>
</div>

@endsection

@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Users Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('UserAccount.update', $UserAccount->id) }}">
                {!! csrf_field() !!}
                  @method("PATCH")
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $UserAccount->name }}">
                        </div>
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $UserAccount->address }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $UserAccount->phone }}">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>email</label>
                            <input type="text" class="form-control" name="email" value="{{ $UserAccount->email }}">
                        </div>

                    </div>
                    <div class="col-md-12">
        <label>Account Type</label>
        <select class="form-control" name="AccountType" required>
            <option value="Customer Account">Customer Account</option>
            <option value="Supplier Account">Supplier Account</option>
            <option value="Logistics/Carrier Account">Logistics/Carrier Account</option>
            <option value="Employee Account">Employee Account</option>
        </select>
    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </div>
                </form>
            </div>

            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
            background-color:#b3e5fc;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush
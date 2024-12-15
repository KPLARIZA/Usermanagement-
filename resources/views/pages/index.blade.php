@extends('layouts.app')

@section('content')

    <div class="container">

    <h3 align="center" class="mt-5">
    <i class="fas fa-users"></i> User Management
</h3>


        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

                <div class="form-area">
                    <form method="POST" action="{{ route('UserAccount.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label> Name</label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required> <!-- Changed input type to text -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="row">
    <div class="col-md-12">
        <label>Account Type</label>
        <select class="form-control" name="AccountType" required>
            <option value="Customer Account">Customer Account</option>
            <option value="Supplier Account">Supplier Account</option>
            <option value="Logistics/Carrier Account">Logistics/Carrier Account</option>
            <option value="Employee Account">Employee Account</option>
        </select>
    </div>
</div>

                        <div class="row">
                            <div class="col-md-12 mt-3">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
                        </div>
                    </form>
                </div>

                <table class="table mt-5">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Account Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($UserAccount as $key => $user)

                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $user->name }}</td>
                            <td scope="col">{{ $user->address }}</td>
                            <td scope="col">{{ $user->phone }}</td>
                            <td scope="col">{{ $user->email }}</td>
                            <td scope="col">{{ $user->AccountType }}</td> <!-- Changed to account_type -->
                            <td scope="col">
                                <a href="{{ route('UserAccount.edit', $user->id) }}">
                                    <button class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                    </button>
                                </a>
                                
                                <form action="{{ route('UserAccount.destroy', $user->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area {
            padding: 20px;
            margin-top: 20px;
            background-color: #b3e5fc;
            border-radius:10px;
        }

        .bi-trash-fill {
            color: red;
            font-size: 18px;
        }

        .bi-pencil {
            color: green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush

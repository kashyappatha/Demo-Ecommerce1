@extends('layouts.app')
@section('category', 'Create category')
@section('contents')
    <h1 class="mb-0">Add Customers</h1>
    <hr />
    <form action="{{ route('customers.store') }}" method="GET" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label class="form-label">name:</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Your name" required>
            </div>
            <div class="col">
                <label class="form-label">email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email Here" required>
            </div>
            <div class="col">
                <label class="form-label">password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password Here" required>
            </div>
            <div class="col">
                <label class="form-label">Country:</label>
                <div>
                    <select class="form-select" name="country" required>
                        <option value="">Select Country</option>
                        <option value="india">India</option>
                        <option value="Australia">Australia</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label class="form-label">State:</label>
                <div>
                    <select class="form-select" name="state" required>
                        <option value="">Select state</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Maharastra">Maharastra</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label class="form-label">city:</label>
                <div>
                    <select class="form-select" name="city" required>
                        <option value="">Select city</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Mumbai">Mumbai</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label class="form-label">Address_1:</label>
                <input type="text" name="Address_1" class="form-control" placeholder="Enter Your Address_1" required>
            </div>
            <div class="col">
                <label class="form-label">Address_2:</label>
                <input type="text" name="Address_2" class="form-control" placeholder="Enter Your Address_2" required>
            </div>
            <div class="col">
                <label class="form-label">postal_code:</label>
                <input type="number" name="postalcode" class="form-control" placeholder="Enter Your Code" required>
            </div>
            <div class="col">
                <label class="form-label">phone:</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone no" required>
            </div>

        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button class="btn btn-primary">Back</button>

            </div>
        </div>
    </form>
@endsection

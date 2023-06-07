@extends('layouts.app')
@section('catrgory', 'Edit category')
@section('contents')
    <h1 class="mb-0">Edit Customer</h1><br />

    <hr />
    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $customer->id }}">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">name:</label>
                <input type="text" name="name" class="form-control" placeholder="" value="{{ $customer->name }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">email:</label>
                <input type="email" name="email" class="form-control" placeholder="Email"
                    value="{{ $customer->email }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">password:</label>
                <input type="password" name="password" class="form-control" placeholder="password"
                    value="{{ $customer->password }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Country:</label>
                <div>
                    <select class="form-select" name="country" value="{{ $customer->country }}"required>
                        <option value="">Select Country</option>
                        <option value="india">India</option>
                        <option value="Australia">Australia</option>
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label">State:</label>
                <div>
                    <select class="form-select" name="state" value="{{ $customer->state }}"required>
                        <option value="">Select state</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Maharastra">Maharastra</option>
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label">city:</label>
                <div>
                    <select class="form-select" name="city" value="{{ $customer->city }}" required>
                        <option value="">Select city</option>
                        <option value="Rajkot">Rajkot</option>
                        <option value="Mumbai">Mumbai</option>
                    </select>
                </div>
            </div>
            <div class="col mb-3">
                <label class="form-label">Address_1:</label>
                <input type="text" name="Address_1" class="form-control" placeholder="Enter Your Address_1"
                    value="{{ $customer->Address_1 }}" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Address_2:</label>
                <input type="text" name="Address_2" class="form-control" placeholder="Enter Your Address_2"
                    value="{{ $customer->Address_2 }}"required>
            </div>
            <div class="col mb-3">
                <label class="form-label">postal_code:</label>
                <input type="number" name="postalcode" class="form-control" placeholder="Enter Your Code"
                    value="{{ $customer->postalcode }}"required>
            </div>
            <div class="col mb-3">
                <label class="form-label">phone:</label>
                <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone no"
                    value="{{ $customer->phone }}" required>
            </div>






        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
            <button class="btn btn-primary">Back</button>

        </div>

    </form>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection

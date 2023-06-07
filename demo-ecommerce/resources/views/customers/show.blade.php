@extends('layouts.app')
@section('title', 'Show Customer')
@section('contents')
    <h1 class="mb-0">Detail category</h1>
    <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>

    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name:</label>
            <input type="text" name="category" class="form-control" placeholder="Category" value="{{ $customer->name }}"
                readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" placeholder="Category" value="{{ $customer->email }}"
                readonly>


        </div>
        <div class="col mb-3">
            <label class="form-label">Password:</label>
            <input type="password" name="password" class="form-control" placeholder="Category"
                value="{{ $customer->password }}" readonly>


        </div>
        <div class="col mb-3">
            <label class="form-label">Country:</label>
            <div>
                <select class="form-select" name="country" value="{{ $customer->country }}"@readonly(true)>
                    <option value="">Select Country</option>
                    <option value="india">India</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">State:</label>
            <div>
                <select class="form-select" name="state" value="{{ $customer->state }}"readonly>
                    <option value="">Select state</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Maharastra">Maharastra</option>
                </select>
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">city:</label>
            <div>
                <select class="form-select" name="city" value="{{ $customer->city }}" readonly>
                    <option value="">Select city</option>
                    <option value="Rajkot">Rajkot</option>
                    <option value="Mumbai">Mumbai</option>
                </select>
            </div>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address_1:</label>
            <input type="text" name="Address_1" class="form-control" placeholder="Enter Your Address_1"
                value="{{ $customer->Address_1 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Address_2:</label>
            <input type="text" name="Address_2" class="form-control" placeholder="Enter Your Address_2"
                value="{{ $customer->Address_2 }}"readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">postal_code:</label>
            <input type="number" name="postalcode" class="form-control" placeholder="Enter Your Code"
                value="{{ $customer->postalcode }}"readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">phone:</label>
            <input type="tel" name="phone" class="form-control" placeholder="Enter Your Phone no"
                value="{{ $customer->phone }}" readonly>
        </div>





        <script>
            function validateForm() {
                var statusRadios = document.getElementsByName('status');
                var statusSelected = false;

                for (var i = 0; i < statusRadios.length; i++) {
                    if (statusRadios[i].checked) {
                        statusSelected = true;
                        break;
                    }
                }

                if (!statusSelected) {
                    Swal.fire({
                        title: 'Error',
                        text: 'Please select a status',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true
                    });
                    return false;
                }

                return true;
            }

            document.getElementById('yourFormId').addEventListener('submit', function(event) {
                if (!validateForm()) {
                    event.preventDefault();
                }
            });
        </script>
        {{-- <div class="col mb-3">
            <label class="form-label">Availibilty</label>
            <select name="available" id="" class="form-control" value="{{ $category->available }}"
                onchange="showSelectedCategory(this)">
                <option value="">Select Availibilty Type:</option>
                <option value="Available">Available</option>
                <option value="unAvailable">unAvailable</option>
            </select>

        </div>
        <script>
            function showSelectedCategory(selectElement) {
                var selectedCategory = selectElement.value;
                var selectedTitle = "{{ $category->id }}";

                Swal.fire({
                    title: 'Selected Category',
                    text: 'You have chosen ' + selectedCategory + ' for the category with id: ' + selectedTitle,
                    icon: 'info',
                    timer: 3000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
            }
        </script>
    </div> --}}
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" placeholder="Created At" value=""
                    readonly>
            </div>
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value=""
                    readonly>
            </div>

        </div>
        {{-- <button class="btn btn-primary">Back</button> --}}

    @endsection

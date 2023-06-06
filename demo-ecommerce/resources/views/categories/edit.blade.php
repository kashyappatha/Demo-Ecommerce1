@extends('layouts.app')
@section('catrgory', 'Edit category')
@section('contents')
    <h1 class="mb-0">Edit category</h1><br />

    <hr />
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $category->id }}">
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Category:</label>
                <input type="text" name="category" class="form-control" placeholder="Category"
                    value="{{ $category->category }}">
            </div>

            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Image:</label>
                    <input type="file" name="image"
                        class="form-control"accept="image/jpeg, image/png , image/jpg, image/svg" placeholder="Enter Image">
                    @if ($category->image)
                        <img src="{{ asset('admin_assets/img/' . $category->image) }}" alt="Image"
                            style="max-width:60px;" accept="image/jpeg, image/png , image/jpg">
                        @if ($category->image)
                            <div class="mt-2">

                                <label class="form-check-label">
                                    <input type="submit" name="image" value="Delete"class="form-check-input"
                                        onclick="confirmDelete()">

                                </label>
                            </div>
                        @endif
                    @endif
                    <script>
                        function confirmDelete() {
                            Swal.fire({
                                title: 'Delete Confirmation',
                                text: 'Are you sure you want to delete this image?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#d33',
                                cancelButtonColor: '#3085d6',
                                confirmButtonText: 'Yes, delete it!',
                                cancelButtonText: 'Cancel'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // Proceed with the delete action
                                    alert('Image deleted!');
                                    // Place your delete logic here
                                }
                            });
                        }
                    </script>




                </div>
                <script></script>
                <div class="col mb-3">
                    <label class="form-label">Status:</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="activeStatus" value="Active"
                                {{ $category->status === 'Active' ? 'checked' : '' }}>
                            <label class="form-check-label" for="activeStatus">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="inactiveStatus"
                                value="Inactive" {{ $category->status === 'Inactive' ? 'checked' : '' }}>
                            <label class="form-check-label" for="inactiveStatus">Inactive</label>
                        </div>
                    </div>
                    <input type="hidden" name="status_value" id="status-value" value="{{ $category->status }}">
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

                        document.getElementById('status-value').value = statusSelected.value;
                        return true;
                    }

                    document.getElementById('yourFormId').addEventListener('submit', function(event) {
                        if (!validateForm()) {
                            event.preventDefault();
                        }
                    });
                </script>
                {{-- <div class="col mb-3">
                    <label class="form-label">Available:</label>
                    <select name="available" id="available-select" class="form-control" value="{{ $category->available }}"
                        onchange="showSelectedCategory(this)">
                        <option value="">Select Availibilty Type:</option>
                        <option value="available">Available</option>
                        <option value="unavailable">unavailable</option>
                    </select>
                    <input type="hidden" name="available_value" id="available-value" value="">
                </div>
                <script>
                    function showSelectedCategory(selectElement) {
                        var selectedCategory = selectElement.value;
                        var selectedTitle = "{{ $category->id }}";

                        Swal.fire({
                            title: 'Selected Category',
                            text: 'You have chosen ' + selectedCategory + ' for the product with title: ' + selectedTitle,
                            icon: 'info',
                            timer: 3000,
                            timerProgressBar: true,
                            showConfirmButton: false
                        });
                    }
                    document.getElementById('available-select').addEventListener('change', function() {
                        var selectedOption = this.value;
                        var statusValue = (selectedOption === '1') ? 'Available' : 'unavailable';
                        document.getElementById('available-value').value = statusValue;
                    });
                </script>
 --}}




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
@endsection

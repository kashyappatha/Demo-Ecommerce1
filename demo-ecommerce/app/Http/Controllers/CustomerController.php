<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use  Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CustomerController extends Controller
{
    public function index(){
        // $customers = Customer::all();

       // Or use any other logic to fetch the users

       $customers = Customer::paginate(10);

        // $customer = $customer->paginate(10);
        return view('customers.index' ,compact('customers'));

    }

    public function create(){
        return view('users.create');
    }
    public function store(Request $request)
    {
        Customer::create($request->all());

        return redirect()->route('customers')->with('success', 'Customers added successfully');
    }

    public function show(string $id)
    {

        $customer = Customer::findOrFail($id);

        return view('customers.show', compact('customers'));

    }

    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit', compact('customers'));
    }

    public function update(Request $request , string $id)
    {

        $customer = Customer::findOrFail($id);

        $customer->update($request->all());

        return redirect()->route('customers')->with('success', 'customers updated successfully');
    }


    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);

        $customer->delete();

        return redirect()->route('customers')->with('success', 'customers deleted successfully');
    }

}

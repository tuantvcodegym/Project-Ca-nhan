<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function getAll(){
        $customers = Customer::all();
        return response()->json($customers);
    }
    // lay ra 1 ban ghi
    public function editApi($id){
        return Customer::find($id);
    }
    // tao moi Api
    public function create(Request $request){
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->city = $request->input('city');
        $customer->save();
        return response()->json($customer);
    }
    // updat api
    public function updateApi(Request $request , $id){
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->city = $request->input('city');
        $customer->save();
        return response()->json($customer);
    }
    // delete api
    public function deleteApi($id){
        $customer = Customer::find($id);
        $customer->delete();
        return response()->json($customer);
    }

    public function storeApi(Request $request){
        return Customer::create($request->all());
    }
    // phuong thuc su ly danh nhap
    public function getLogin(){
        // neu chua login thi return ve view login
        if(!Auth::check())
        return view('form');
        else
            // nguoc lai khong cho ve view login ma se o lai trang dang dung
            return redirect()->route('list');
    }

    // phuong thuc su ly login
    public function postLogin(Request $request){
        $username = $request->name;
        $password = $request->password;
        // neu chua login return ve trang login
        if(Auth::attempt(['email' => $username, 'password' => $password]))
            return redirect()->route('list');
        else
            return redirect()->route('getLogin');
    }
    // phuong thuc su ly logout
    public function logOut(){
        Auth::logout();
        return redirect()->route('getLogin');
    }

    // phuong thuc su ly dang ky users
    public function getRegister(){
        return view('register');
    }
    public function postRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('getLogin');
    }

    //hien thi danh list customer.
    public function getCustomer(){
        $customers = Customer::all();
        return view('list', compact('customers'));
    }
    public function formAdd(){
        return view('formAdd');
    }
    public function store(Request $request){
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->city = $request->input('city');
        $customer->save();
        return redirect()->route('list');
    }
    public function edit($id){
        $customer = Customer::find($id);
        return view('edit', compact('customer', 'id'));
    }
    public function update(Request $request , $id){
        $customer = Customer::find($id);
        $customer->name = $request->get('name-1');
        $customer->email = $request->get('email-1');
        $customer->city = $request->get('city-1');
        $customer->save();
        return redirect()->route('list');
    }
    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('list');
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $customer = Customer::all();
        return view('search', compact('customer', 'search'));
    }
}

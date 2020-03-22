<?php

namespace App\Http\Controllers;

use App\bill;
use App\Cart;
use App\Customer;
use App\Slide;
//use Illuminate\Contracts\Session\Session;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Element;
use Session;
use Illuminate\Http\Request;
use App\product;
use App\ProductType;

class PageController extends Controller
{
    public function getIndex()
    {
        $slide = Slide::all();
        $new_product = product::where('new', 1)->paginate(4);
        $products = product::where('new', 1)->get();

        return view('page/trangchu', compact('slide', 'new_product','products'));
    }

    public function getloaisp($type)
    {
        $sp_theoloai = product::where('id_type', $type)->paginate(3);
        $loaidm = ProductType::all();
        $tenloaisp = product::where('id', $type)->first();
        return view('page/typeProduct', compact('sp_theoloai', 'loaidm', "tenloaisp"));
    }

    public function getctsp(Request $req)
    {
        $ctsp = product::where('id', $req->id)->first();
        $sp_tuongtu = product::where('id_type', $ctsp->id_type)->paginate(6);
        return view('page/product', compact('ctsp', 'sp_tuongtu'));

    }

    public function getcontact()
    {
        return view('page/contact');
    }

    public function getgiohang(Request $req, $id)
    {
        $product = product::find($id);
        $oldcart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();

    }

    public function getDel($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();

    }

    public function getdathang()
    {
        return view('page/dathang', compact('cart'));
    }

    public function getlogin()
    {
        return view('page/login');
    }

    public function postlogin(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20'
            ],
            [
                'email.required' => 'vui long nhap email',
                'email.email' => 'khong dung dinh dang',
                'password.required' => 'vui long nhap mat khau',
                'password.min' => 'mat khau it nhat 6 ki tu',
                'password.max' => 'mat khau khong qua 20 ki tu'
            ]);
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if (Auth::attempt($credentials))
        {
            return redirect()->back()->with(['flag'=>'success','thongbao'=>'dang nhap thanh cong']);
        }
        else
        {
            return redirect()->back()->with(['flag'=>'danger','thongbao'=>'dang nhap khong thanh cong']);
        }

    }

    public function getdk()
    {
        return view('page/dangki');
    }

    public function postdk(Request $req)
    {
        $this->validate($req,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'fullname' => 'required',
                're_password' => 'required|same:password'

            ],
            [
                'email.required' => 'vui long nhap email',
                'email.email' => 'khong dung dinh dang email',
                'email.unique' => 'email da dc su dung',
                'password.required' => 'vui long nhap mat khau',
                're_password.same' => 'mat khau khong giong nhau',
                'password.min'=>'mk qua ngan'

            ]);
        $user = new User();
        $user->full_name =  $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->adress;
        $user->save();
        return redirect()->back()->with('thanhcong','Tạo tk thành công');


    }

    public function postdathang(Request $req)
    {
        $cart = Session::get('cart');

        $cus = new Customer();
        $cus->name = $req->name;
        $cus->gender = $req->gender;
        $cus->email = $req->email;
        $cus->address = $req->adress;
        $cus->phone_number = $req->phone;
        $cus->note = $req->notes;
        $cus->save();

        $bill = new bill();
        $bill->id_customer = $cus->id;
        $bill->date_order = date('Y-m-d');
    }

    public function getDX()
    {
        Auth::logout();
        return redirect()->route('Trang-Chu');
    }

    public function getSearch(Request $req)
    {
        $pro = product::where('name','like','%'.$req->keyname.'%')
            ->orwhere('unit_price',$req->keyname)
            ->get();

        return view('page.search',compact('pro'));

    }
}

<?php

namespace App\Http\Controllers;

 use App\Models\Categories_Products;
use App\Models\slider;
use App\Models\clients;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        App()->setLocale('ar');

    }

    public function done()
    {
     
       return view('main.th');
    }


    public function  form(Request $request) 
    {

        $to = "mohamed.be4em@gmail.com  , a.badr.be4em@gmail.com";
        $subject = "بامبو نيو هاوس        ";
        $neme = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];
         $message="<html><head><title> بامبو نيو هاوس         </title>
        </head><body><table>
        <tr><th>Firstname</th><th>phone</th><th>email</th></tr>
        <tr> <td>$neme  </td><td>$phone  </td><td>$email  </td> </tr>
        </table></body></html> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@scpc-eg.com>' . "\r\n";

           if(isset($_POST['phone'])){
        if(mail($to,$subject,$message,$headers)){
           header("Location: http://scpc-eg.com/");
        }else{  echo "Mail Not Sent"; } }  
        


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 $Categories_Products = Categories_Products::limit(10)->get();
 $Products = Products::limit(25)->get();
 $clients = clients::limit(20)->get();
 $slider = slider::limit(8)->get();
		 return view('main.index',
            [
                 'clients' => $clients,
                 'Products' => $Products,
                 'Categories_Products' => $Categories_Products,
                 'slider' => $slider,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
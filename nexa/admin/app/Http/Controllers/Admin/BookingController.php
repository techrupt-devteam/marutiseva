<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Session;
use Sentinel;
use Validator;

class BookingController extends Controller
{
    public function __construct(User $User)
    {
        $data               = [];
        $this->base_model   = '';//$User; 
        $this->title        = "Booking";
        $this->url_slug     = "booking";
        $this->folder_path  = "admin/booking/";
    }

    public function index()
    {
        $arr_data = [];
        $data     = \DB::table('booking')
                        ->where(['status'=>'Paid'])
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        return view($this->folder_path.'index',$data);
    }
    public function book_you_service()
    {
        $arr_data = [];
        $data     = \DB::table('book_your_service')
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Services';
        return view($this->folder_path.'book_your_service',$data);
    }

    public function test_drive()
    {
        $arr_data = [];
        $data     = \DB::table('test_drive')
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Test Drives';
        return view($this->folder_path.'test_drive',$data);
    }
    
    public function quotations()
    {
        $arr_data = [];
        $data     = \DB::table('quotations')
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Quotations';
        return view($this->folder_path.'quotations',$data);
    }
    
    public function finance()
    {
        $arr_data = [];
        $data     = \DB::table('finance')
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Finance';
        return view($this->folder_path.'finance',$data);
    }

    public function insurance()
    {
        $arr_data = [];
        $data     = \DB::table('insurance')
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Insurance';
        return view($this->folder_path.'insurance',$data);
    }
    


     public function download_bookings(Request $request)
    {
        $data     = \DB::table('booking')
                        ->where(['status'=>'Paid'])
                        //->where('kyc_document_type','!=',null)
                        ->orderBy('id','DESC')
                        ->get();
        header("Content-type: text/csv");
        header("Content-Disposition: attachment; filename=Booking.csv");
        header("Pragma: no-cache");
        header("Expires: 0");
          
          echo "Sr. No.";
          echo ',';
          echo "Full Name";
          echo ',';
          echo "Email";
          echo ',';
          echo "Mobile No.";
          echo ',';
          echo "City";
          echo ',';
          echo "Address";
          echo ',';
          echo "Car";
          echo ',';
          echo "Variant";
          echo ',';
          echo "Color";
          echo ',';
          echo "On Road Cost";
          echo ',';
          echo "Any Spacial Request";
          echo ',';
          echo "Do you Require Finance";
          echo ',';
          echo "Booking Date";
          echo ',';
          echo "Transation";
          echo ',';
          echo "Amount";
          echo ',';
          echo "\n"; 
        foreach ($data as $key => $value) 
        {
              echo $key+1;
              echo ',';
              echo $value->name;
              echo ',';
              echo $value->email;
              echo ',';
              echo $value->mobile;
              echo ',';
              echo $value->city;
              echo ',';
              echo str_replace(",","",$value->address);
              echo ',';
              echo $value->car;
              echo ',';
              echo $value->varient;
              echo ',';
              echo $value->color;
              echo ',';
              echo $value->road_cost;
              echo ',';
              echo $value->special_request;
              echo ',';
              echo $value->finance;
              echo ',';
              echo $value->booking_date;
              echo ',';
              echo $value->transaction_id;
              echo ',';
              echo $value->amount;
              echo ',';
              echo "\n";
        }
        //print_r($data);
        die;
    }

    public function active_store($id)
    {
        $product = $this->base_model->where('id','=',$id)->first();
        if($product->active=='1')
        {
            $this->base_model->where('id','=',$id)->update(['active'=>'0']);
            Session::flash('success', 'Success! Store deactivated successfully.');
        }
        else
        {
            $this->base_model->where('id','=',$id)->update(['active'=>'1']);
            Session::flash('success', 'Success! Store activated successfully.');
        }
            return \Redirect::to('admin/manage_store');
    }

    public function delivery_index()
    {
        $arr_data = [];
        $login_user_details  = Session::get('user');
        $data     = $this->base_model->where(['role'=>'Delivery Boy']);
                        //->where('kyc_document_type','!=',null)
        
        if($login_user_details->role=='Store')
            {
                $data     = $data->where(['store_id'=>$login_user_details->id]);
            }
        $data     = $data->orderBy('id','DESC');
        $data     = $data->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

         

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Delivery Boy';
        return view($this->folder_path.'delivery_index',$data);
    }

    public function store_index()
    {
        $arr_data = [];
        $data     = $this->base_model->where(['role'=>'Store'])
                        ->orderBy('id','DESC')
                        ->get();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Manage";
        $data['url_slug']  = 'store';
        $data['title']     = 'Stores';
        return view($this->folder_path.'store_index',$data);
    }
 
    public function add()
    {
        $data['page_name']       = "Add";
        $data['title']           = $this->title;
        $data['url_slug']        = $this->url_slug;
        $data['state']           = \DB::table('pincode_with_area')->groupBy('state')->get();
        $data['vendor_category'] = \DB::table('vendor_category')->groupBy('vendor_category')->where('deleted_at','=',null)->get();
        return view($this->folder_path.'add',$data);
    }

    public function deliverty_boy_add()
    {
        $data['page_name']       = "Add";
        $data['title']           = 'Delivery Boy';
        $data['url_slug']        = $this->url_slug;
        $data['state']           = [];//\DB::table('pincode_with_area')->groupBy('state')->get();
        $data['vendor_category'] = \DB::table('vendor_category')->groupBy('vendor_category')->where('deleted_at','=',null)->get();
        return view($this->folder_path.'deliverty_boy_add',$data);
    }

    public function store_add()
    {
        $data['page_name']       = "Add";
        $data['title']           = 'Store';
        $data['url_slug']        = $this->url_slug;
        $data['state']           = [];//\DB::table('pincode_with_area')->groupBy('state')->get();
        $data['vendor_category'] = \DB::table('vendor_category')->groupBy('vendor_category')->where('deleted_at','=',null)->get();
        return view($this->folder_path.'store_add',$data);
    }

    public function store(Request $request)
    {
        $validator          = Validator::make($request->all(), [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'mobile_no'         => 'required',
            'email'             => 'required',
            'password'          => 'required',
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where(['email'=>$request->input('email')])->count();

        if($is_exist)
        {
            Session::flash('first_name', $request->input('first_name'));
            Session::flash('last_name', $request->input('last_name'));
            Session::flash('mobile_no', $request->input('mobile_no'));
            Session::flash('email', $request->input('email'));
            Session::flash('password', $request->input('password'));
            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }

        $is_exist = $this->base_model->where(['mobile_no'=>$request->input('mobile_no')])->count();

        if($is_exist)
        {
            Session::flash('first_name', $request->input('first_name'));
            Session::flash('last_name', $request->input('last_name'));
            Session::flash('mobile_no', $request->input('mobile_no'));
            Session::flash('email', $request->input('email'));
            Session::flash('password', $request->input('password'));

            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }

        $image = $_FILES["upload_pan"]["name"];
        if(empty($image))
        {
            Session::flash('error', "Please upload image.");
            return \Redirect::back();
        }


        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 18; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
  
        $file_name                         = $_FILES["upload_pan"]["name"];
        $file_tmp                          = $_FILES["upload_pan"]["tmp_name"];
        $ext                               = pathinfo($file_name,PATHINFO_EXTENSION);
        $random_file_name                  = $randomString.'.'.$ext;
        $latest_image                      = 'upload/profile/'.$random_file_name;

        $image1 = $_FILES["kyc_document"]["name"];
        if(empty($image1))
        {
            Session::flash('error', "Please upload image.");
            return \Redirect::back();
        }
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i <   18; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
  
        $file_name1                         = $_FILES["kyc_document"]["name"];
        $file_tmp1                          = $_FILES["kyc_document"]["tmp_name"];
        $ext1                               = pathinfo($file_name1,PATHINFO_EXTENSION);
        $random_file_name1                  = '2'.$randomString.'.'.$ext1;
        $latest_image1                      = 'upload/profile/'.$random_file_name1;

        if(move_uploaded_file($file_tmp,env('BASE_PATH').$latest_image)  && move_uploaded_file($file_tmp1,env('BASE_PATH').$latest_image1))
        {
            $arr_data                       = [];
            $arr_data['first_name']         = $request->input('first_name');
            $arr_data['last_name']          = $request->input('last_name');
            $arr_data['mobile_no']          = $request->input('mobile_no');
            $arr_data['email']              = $request->input('email');
            $arr_data['password']           = $request->input('password');
            $arr_data['company_name']       = $request->input('company_name');
            $arr_data['company_address']    = $request->input('company_address');
            $arr_data['state']              = $request->input('state');
            $arr_data['city']               = $request->input('city');
            $arr_data['pincode']            = $request->input('pincode');
            $arr_data['gst_no']             = $request->input('gst_no');
            $arr_data['pan_number']         = $request->input('pan_number');
            $arr_data['upload_pan']         = $latest_image;
            $arr_data['kyc_document_type']  = $request->input('kyc_document_type');
            $arr_data['kyc_document']       = $latest_image1;
            $arr_data['vendor_category_id'] = $request->input('vendor_category_id');
           
            $arr_data['status']             = 'Approved';
            $arr_data['role']               = 'user';
            
            $status = $this->base_model->create($arr_data);
            if (!empty($status))
            {
                $mail = new PHPMailer(true); 
                try 
                {
                    $html = 'Dear '.$arr_data['first_name'].' '.$arr_data['last_name'].', <br>
                                Thank you for Signing Up with Kores India Mobile Application.<br>
                                This online platform gives you quick purchase options with benefits and saving on your purchase.<br>
                                Looking forward to on-board you to Kores Family.<br>
                                Regards,<br>
                                Team Kores';

                    $mail->isSMTP(); 
                    $mail->CharSet    = "utf-8";
                    $mail->SMTPAuth   = true;
                    $mail->SMTPSecure = env('SMTPSECURE');
                    $mail->Host       = env('HOST');
                    $mail->Port       = env('PORT');
                    $mail->Username   = env('USERNAME');
                    $mail->Password   = env('PASSWORD');
                    $mail->Subject    = "Welcome to Kores";
                    $mail->setFrom(env('SETFROMEMAIL'), env('SETFROMNAME'));
                    $mail->MsgHTML($html);
                    $mail->addAddress($arr_data['email'], $arr_data['first_name']);
                    $mail->send();
                } 
                catch (phpmailerException $e) 
                {
                    Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();
                } 
                catch (Exception $e) 
                {
                    Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();  
                }
                Session::flash('success', 'Success! Record added successfully.');
                return \Redirect::to('admin/manage_user');
            }
            else
            {
                Session::flash('error', "Error! Oop's something went wrong.");
                return \Redirect::back();
            }
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function deliverty_boy_store(Request $request)
    {
        $validator          = Validator::make($request->all(), [
            'first_name'        => 'required',
            'last_name'         => 'required',
            'mobile_no'         => 'required',
            'email'             => 'required',
            'password'          => 'required',
        
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where(['email'=>$request->input('email')])->count();

        if($is_exist)
        {
            Session::flash('first_name', $request->input('first_name'));
            Session::flash('last_name', $request->input('last_name'));
            Session::flash('mobile_no', $request->input('mobile_no'));
            Session::flash('email', $request->input('email'));
            Session::flash('password', $request->input('password'));
        
            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }

        $is_exist = $this->base_model->where(['mobile_no'=>$request->input('mobile_no')])->count();

        if($is_exist)
        {
            Session::flash('first_name', $request->input('first_name'));
            Session::flash('last_name', $request->input('last_name'));
            Session::flash('mobile_no', $request->input('mobile_no'));
            Session::flash('email', $request->input('email'));
            Session::flash('password', $request->input('password'));
          

            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }
        $login_user_details  = Session::get('user');
            $arr_data                       = [];
            $arr_data['first_name']         = $request->input('first_name');
            $arr_data['last_name']          = $request->input('last_name');
            $arr_data['mobile_no']          = $request->input('mobile_no');
            $arr_data['email']              = $request->input('email');
            $arr_data['password']           = base64_encode($request->input('password'));
            $arr_data['store_id']           = $login_user_details->id;
           
            $arr_data['role']               = 'Delivery Boy';
            //dd($arr_data);
            $status = $this->base_model->create($arr_data);
            if (!empty($status))
            {
                
                Session::flash('success', 'Success! Record added successfully.');
                return \Redirect::to('admin/manage_delivery_boy');
            }
            else
            {
                Session::flash('error', "Error! Oop's something went wrong.");
                return \Redirect::back();
            }
    }

    public function store_store(Request $request)
    {
        $validator          = Validator::make($request->all(), [
            'store_name'        => 'required',
            'min_order_value'   => 'required',
            'delivery_fees'     => 'required',
            'mobile_no'         => 'required',
            'email'             => 'required',
            'password'          => 'required',
        
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where(['email'=>$request->input('email')])->count();

        if($is_exist)
        {
            Session::flash('store_name', $request->input('store_name'));
            Session::flash('min_order_value', $request->input('min_order_value'));
            Session::flash('delivery_fees', $request->input('delivery_fees'));
            Session::flash('mobile_no', $request->input('mobile_no'));
            Session::flash('email', $request->input('email'));
            Session::flash('password', $request->input('password'));
        
            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }

        $is_exist = $this->base_model->where(['mobile_no'=>$request->input('mobile_no')])->count();

        if($is_exist)
        {
            Session::flash('store_name', $request->input('store_name'));
            Session::flash('min_order_value', $request->input('min_order_value'));
            Session::flash('delivery_fees', $request->input('delivery_fees'));
            Session::flash('mobile_no', $request->input('mobile_no'));
            Session::flash('email', $request->input('email'));
            Session::flash('password', $request->input('password'));

            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }

        $credentials = [
                'email'    => $request->input('email'),
                'password' => $request->input('password'),
            ];

            $user = Sentinel::registerAndActivate($credentials);
            $arr_data                    = [];
            $arr_data['store_name']      = $request->input('store_name');
            $arr_data['min_order_value'] = $request->input('min_order_value');
            $arr_data['delivery_fees']   = $request->input('delivery_fees');
            $arr_data['mobile_no']       = $request->input('mobile_no');
            $arr_data['delivery_schedule']       = $request->input('delivery_schedule');

            $arr_data['role']            = 'Store';

            
            $status = $this->base_model->where(['id'=>$user->id])->update($arr_data);
            $status = \DB::table('activations')->where(['user_id'=>$user->id])->update(['completed_at'=>'1','completed'=>'1']);
            if (!empty($status))
            {
                
                Session::flash('success', 'Success! Record added successfully.');
                return \Redirect::to('admin/manage_store');
            }
            else
            {
                Session::flash('error', "Error! Oop's something went wrong.");
                return \Redirect::back();
            }
    }

    public function approve_user(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'status'        => 'required',
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $arr_data                  = [];
        if($request->input('status')=='Approved')
        {
            $data = $this->base_model->where(['id'=>$id])->first();

            $arr_data['sales_member']           = $request->input('sales_member');
            $arr_data['admin_approval']         = $request->input('status');
            $arr_data['vendor_category_id']     = $request->input('vendor_category_id');
            $arr_data['company_code']           = $request->input('company_code');
            $arr_data['sales_organization']     = $request->input('sales_organization');
            $arr_data['distribution_channel']   = $request->input('distribution_channel');
            $arr_data['division']               = $request->input('division');
            $arr_data['customer_account_group'] = $request->input('customer_account_group');
            $arr_data['language_key']                               = $request->input('language_key');
            $arr_data['reg_str_grp']                                = $request->input('reg_str_grp');
            $arr_data['excise_ind_customer']                        = $request->input('excise_ind_customer');
            $arr_data['cst_no']                                     = $request->input('cst_no');
            $arr_data['reconcilliation_account']                    = $request->input('reconcilliation_account');
            $arr_data['sort_key']                                   = $request->input('sort_key');
            $arr_data['cash_management_group']                      = $request->input('cash_management_group');
            $arr_data['indicator_record_payment_history']           = $request->input('indicator_record_payment_history');
            $arr_data['payment_methods']                            = $request->input('payment_methods');
            $arr_data['sale_district']                              = $request->input('sale_district');
            $arr_data['sales_office_branch_code']                   = $request->input('sales_office_branch_code');
            $arr_data['customer_group']                             = $request->input('customer_group');
            $arr_data['abc_class']                                  = $request->input('abc_class');
            $arr_data['currency']                                   = $request->input('currency');
            $arr_data['pricing_group']                              = $request->input('pricing_group');
            $arr_data['customer_pricing_procedure']                 = $request->input('customer_pricing_procedure');
            $arr_data['price_list_type']                            = $request->input('price_list_type');
            $arr_data['cust_statistics_grp']                        = $request->input('cust_statistics_grp');
            $arr_data['delivery_priority']                          = $request->input('delivery_priority');
            $arr_data['order_combination_indicator']                = $request->input('order_combination_indicator');
            $arr_data['shipping_conditions']                        = $request->input('shipping_conditions');
            $arr_data['delivering_plant']                           = $request->input('delivering_plant');
            $arr_data['max_partial_delivery']                       = $request->input('max_partial_delivery');
            $arr_data['id_customer_is_to_receive_rebates']          = $request->input('id_customer_is_to_receive_rebates');
            $arr_data['relevant_for_price_determination_id']        = $request->input('relevant_for_price_determination_id');
            $arr_data['incoterms_part_1']                           = $request->input('incoterms_part_1');
            $arr_data['inco_2']                                     = $request->input('inco_2');
            $arr_data['terms_of_payment_key']                       = $request->input('terms_of_payment_key');
            $arr_data['account_assignment_group_for_this_customer'] = $request->input('account_assignment_group_for_this_customer');
            $arr_data['employee_response']                          = $request->input('employee_response');
            $arr_data['employee_response_code']                     = $request->input('employee_response_code');
            $arr_data['tax_classification_for_customer1']           = $request->input('tax_classification_for_customer1');
            $arr_data['tax_classification_for_customer2']           = $request->input('tax_classification_for_customer2');
            $arr_data['tax_classification_for_customer3']           = $request->input('tax_classification_for_customer3');
            $arr_data['tax_classification_for_customer4']           = $request->input('tax_classification_for_customer4');

            //Add order in SAP
           
            $myfile = fopen("../SAP/ECOMMERCE_TO_SAP/CUSTOMERS/".$data->id.".txt", "w") or die("Unable to open file!");
            $counter = 1;
            $txt = "Customer\tName1\tName2\tName3\tStreet1\tStreet2\tStreet3\tCity\tReg\tCon\tPost Box.\tTelphone\tPan No.\tGst No.\tMobile NO.\tEmail\tCompany Code\tSales Organization\tDistribution Channel\tDivision\tCustomer Account Group\tLanguage key\tReg. Str. Grp.\tExcise Ind customer\tCST NO.\tReconcilliation account\tSort Key\tCash Management group\tIndicator: Record Payment History ?\tPayment Methods\tSales district\tSales office/ /BRANCH CODE\tCUSTOMER GROUP\tABC Class\tCurrency\tPricing group\tCustomer Pricing procedure\tPrice list type\tCust Statistics Grp\tDelivery priority\tOrder combination indicator\tShipping conditions\tDelivering plant\tmax partial delivery\tID: Customer is to receive rebates\tRelevant for price determination ID\tIncoterms (part 1)\tInco 2\tTerms of payment key\tAccount assignment group for this customer\tEmployee response\tEmployee response code\tTax classification for customer\tTax classification for customer\tTax classification for customer\tTax classification for customer\n";
            
                $Customer               = $data->id;
                $Name1                  = $data->first_name.' '.$data->last_name ;
                $Name2                  = $data->company_name ;
                $Name3                  = $data->company_address ;
                $Street1                = " ";
                $Street2                = " ";
                $Street3                = " ";
                $City                   = $data->city;
                $Reg                    = " ";
                $Con                    = " ";
                $Post                   = $data->pincode;
                $Telphone               = " ";
                $Pan                    = $data->pan_number;
                $Gst                    = $data->gst_no;
                $mobile_no              = $data->mobile_no;
                $Email                  = $data->email;
                $company_code           = $request->input('company_code');
                $sales_organization     = $request->input('sales_organization');
                $distribution_channel   = $request->input('distribution_channel');
                $division               = $request->input('division');
                $customer_account_group = $request->input('customer_account_group');

                $language_key                               = $request->input('language_key');
                $reg_str_grp                                = $request->input('reg_str_grp');
                $excise_ind_customer                        = $request->input('excise_ind_customer');
                $cst_no                                     = $request->input('cst_no');
                $reconcilliation_account                    = $request->input('reconcilliation_account');
                $sort_key                                   = $request->input('sort_key');
                $cash_management_group                      = $request->input('cash_management_group');
                $indicator_record_payment_history           = $request->input('indicator_record_payment_history');
                $payment_methods                            = $request->input('payment_methods');
                $sale_district                              = $request->input('sale_district');
                $sales_office_branch_code                   = $request->input('sales_office_branch_code');
                $customer_group                             = $request->input('customer_group');
                $abc_class                                  = $request->input('abc_class');
                $currency                                   = $request->input('currency');
                $pricing_group                              = $request->input('pricing_group');
                $customer_pricing_procedure                 = $request->input('customer_pricing_procedure');
                $price_list_type                            = $request->input('price_list_type');
                $cust_statistics_grp                        = $request->input('cust_statistics_grp');
                $delivery_priority                          = $request->input('delivery_priority');
                $order_combination_indicator                = $request->input('order_combination_indicator');
                $shipping_conditions                        = $request->input('shipping_conditions');
                $delivering_plant                           = $request->input('delivering_plant');
                $max_partial_delivery                       = $request->input('max_partial_delivery');
                $id_customer_is_to_receive_rebates          = $request->input('id_customer_is_to_receive_rebates');
                $relevant_for_price_determination_id        = $request->input('relevant_for_price_determination_id');
                $incoterms_part_1                           = $request->input('incoterms_part_1');
                $inco_2                                     = $request->input('inco_2');
                $terms_of_payment_key                       = $request->input('terms_of_payment_key');
                $account_assignment_group_for_this_customer = $request->input('account_assignment_group_for_this_customer');
                $employee_response                          = $request->input('employee_response');
                $employee_response_code                     = $request->input('employee_response_code');
                $tax_classification_for_customer1           = $request->input('tax_classification_for_customer1');
                $tax_classification_for_customer2           = $request->input('tax_classification_for_customer2');
                $tax_classification_for_customer3           = $request->input('tax_classification_for_customer3');
                $tax_classification_for_customer4           = $request->input('tax_classification_for_customer4');

                $txt .= $Customer."\t".$Name1."\t".$Name2."\t".$Name3."\t".$Street1."\t".$Street2."\t".$Street3."\t".$City."\t".$Reg."\t".$Con."\t".$Post."\t".$Telphone."\t".$Pan."\t".$Gst."\t".$mobile_no."\t".$Email."\t".$company_code."\t".$sales_organization."\t".$distribution_channel."\t".$division."\t".$customer_account_group."\t".$language_key."\t".$reg_str_grp."\t".$excise_ind_customer."\t".$cst_no."\t".$reconcilliation_account."\t".$sort_key."\t".$cash_management_group."\t".$indicator_record_payment_history."\t".$payment_methods."\t".$sale_district."\t".$sales_office_branch_code."\t".$customer_group."\t".$abc_class."\t".$currency."\t".$pricing_group."\t".$customer_pricing_procedure."\t".$price_list_type."\t".$cust_statistics_grp."\t".$delivery_priority."\t".$order_combination_indicator."\t".$shipping_conditions."\t".$delivering_plant."\t".$max_partial_delivery."\t".$id_customer_is_to_receive_rebates."\t".$relevant_for_price_determination_id."\t".$incoterms_part_1."\t".$inco_2."\t".$terms_of_payment_key."\t".$account_assignment_group_for_this_customer."\t".$employee_response."\t".$employee_response_code."\t".$tax_classification_for_customer1."\t".$tax_classification_for_customer2."\t".$tax_classification_for_customer3."\t".$tax_classification_for_customer4."\n";
            
            fwrite($myfile, $txt);
            fclose($myfile);

            $mail = new PHPMailer(true); 
            try 
            {
                $html = '
                        <!DOCTYPE html>
                            <html>
                            <head>
                              <title>Kores India</title>
                            </head>
                            <body style="background-color:#e8f8ff; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:22px; color:#000">
                            <div style="width:600px; margin:20px auto"><div style="border:1px solid #CCC; padding:20px; background:#FFF; margin-bottom:15px ">
                            <img src="http://traineronhire.com/kores/css_and_js/logo.png"><br>
                    Dear '.$data->first_name.', 
                                <h3 style="font-size:16px; color:#e5322c">Welcome to your Kores account!</h3>

                        We are happy to inform you that your <b>Dealer Signup</b> request has been <b>accepted.</b><br><br>
                        We welcome you to Kores Family and really value your association. We are committed to give you power to save moreand earn more in this competitive market. You can now make purchases on your Kores account and start savings.<br><br>
                        Looking forward for wonderful journey.<br><br>
                        Regards,<br>
                            Kores India Team<br>
                            1800 22 2447 || 1800 26 79777<br>
                            
                            <br><br>
                            Disclaimer: This is a system generated email and please do not respond to this email.';

                $mail->isSMTP(); 
                $mail->CharSet    = "utf-8";
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = env('SMTPSECURE');
                $mail->Host       = env('HOST');
                $mail->Port       = env('PORT');
                $mail->Username   = env('USERNAME');
                $mail->Password   = env('PASSWORD');
                $mail->Subject    = "Congratulations! You request has been accepted.";
                $mail->setFrom(env('SETFROMEMAIL'), env('SETFROMNAME'));
                $mail->MsgHTML($html);
                $mail->addAddress($data->email, $data->first_name);
                //$mail->send();
            } 
            catch (phpmailerException $e) 
            {
                Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();  
            } 
            catch (Exception $e) 
            {
                Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();
            }

        }
        elseif($request->input('status')=='Rejected')
        {
            $data = $this->base_model->where(['id'=>$id])->first();
            $mail = new PHPMailer(true); 
            try 
            {
                $html = '<!DOCTYPE html>
                            <html>
                            <head>
                              <title>Kores India</title>
                            </head>
                            <body style="background-color:#e8f8ff; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:22px; color:#000">
                            <div style="width:600px; margin:20px auto"><div style="border:1px solid #CCC; padding:20px; background:#FFF; margin-bottom:15px ">
                            <img src="http://traineronhire.com/kores/css_and_js/logo.png"><br>
                    Dear '.$data->first_name.', 
                                <h3 style="font-size:16px; color:#e5322c">Welcome to your Kores account!</h3>

                        Thank you for Interest in becoming Kores India authorised Vendor.<br><br>
                        We regret to inform you that we are unable to accept your signup request at this time and same has been rejected by our Administrators.<br><br>
                        We really value your time and thank you for your interest.<br><br>
                        Regards,<br>
                            Kores India Team<br>
                            1800 22 2447 || 1800 26 79777<br>
                    
                            <br><br>
                            Disclaimer: This is a system generated email and please do not respond to this email. ';

                $mail->isSMTP(); 
                $mail->CharSet    = "utf-8";
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = env('SMTPSECURE');
                $mail->Host       = env('HOST');
                $mail->Port       = env('PORT');
                $mail->Username   = env('USERNAME');
                $mail->Password   = env('PASSWORD');
                $mail->Subject    = "Welcome to Kores";
                $mail->setFrom(env('SETFROMEMAIL'), env('SETFROMNAME'));
                $mail->MsgHTML($html);
                $mail->addAddress($data->email, $data->first_name);
                $mail->send();
            } 
            catch (phpmailerException $e) 
            {
                Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();
            } 
            catch (Exception $e) 
            {
                Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();
            }
            $arr_data['sales_member']      = $request->input('sales_member');
            $arr_data['admin_approval']    = $request->input('status');
            $arr_data['rejection_reason']  = $request->input('rejection');
        }
        $status = $this->base_model->where(['id'=>$id])->update($arr_data);
        if (!empty($status))
        {
            Session::flash('success', 'Success! Record added successfully.');
            return \Redirect::to('admin/manage_user');
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function assign_credit_user(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'credit'        => 'required',
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        
            //$data = $this->base_model->where(['id'=>$id])->first();
            /*$mail = new PHPMailer(true); 
            try 
            {
                $html = 'Dear '.$data->first_name.', <br><br>
                           We are happy to inform you that your <b>Dealer Signup</b> request has been <b>accepted.</b><br><br>

                            We welcome you to Kores Family and really value your association. We are committed to give you power to save moreand earn more in this competitive market. You can now make purchases on your Kores account and start savings.<br><br>

                            Looking forward for wonderful journey.<br><br>

                            Regards,<br>
                            Kores India Team<br>
                            1800 22 2447 || 1800 26 79777<br>
                            <img src="http://traineronhire.com/kores/css_and_js/logo.png">
                            <br><br>
                            Disclaimer: This is a system generated email and please do not respond to this email. ';

                $mail->isSMTP(); 
                $mail->CharSet    = "utf-8";
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = env('SMTPSECURE');
                $mail->Host       = env('HOST');
                $mail->Port       = env('PORT');
                $mail->Username   = env('USERNAME');
                $mail->Password   = env('PASSWORD');
                $mail->Subject    = "Congratulations! You request has been accepted.";
                $mail->setFrom(env('SETFROMEMAIL'), env('SETFROMNAME'));
                $mail->MsgHTML($html);
                $mail->addAddress($data->email, $data->first_name);
                $mail->send();
            } 
            catch (phpmailerException $e) 
            {
                Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();  
            } 
            catch (Exception $e) 
            {
                Session::flash('error', 'Internal Server Issue.'.$e);
                return \Redirect::back();
            }*/
        $arr_data            = [];
        $arr_data['user_id'] = $id;
        $arr_data['credit']  = $request->input('credit');
        $arr_data['date']    = date('d M Y');
        $status = \DB::table('assign_credit')->insert($arr_data);    
        \DB::table('users')->where(['id'=>$id])->update(['payment_terms'=>$request->input('terms')]);    
        
        if (!empty($status))
        {
            Session::flash('success', 'Success! Credit Updated successfully.');
            return \Redirect::back();
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
           return \Redirect::back();
        }
    }

    public function deliverty_boy_view($id)
    {
        $arr_data = [];
        $data     = $this->base_model->where(['id'=>$id])->first();


        $data['data']      = $data;
        $data['address']   = \DB::table('address')->where(['user_id'=>$id])->get();
        $data['subuser']   = \DB::table('subusers')->where(['user_id'=>$id])->get();
        $data['vendor_category'] = \DB::table('vendor_category')->groupBy('vendor_category')->where('deleted_at','=',null)->get();
        $data['page_name'] = "View";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        return view($this->folder_path.'deliverty_boy_view',$data);
    }

    public function store_view($id)
    {
        $arr_data = [];
        $data     = $this->base_model->where(['id'=>$id])->first();


        $data['data']      = $data;
        $data['address']   = \DB::table('address')->where(['user_id'=>$id])->get();
        $data['subuser']   = \DB::table('subusers')->where(['user_id'=>$id])->get();
        $data['vendor_category'] = \DB::table('vendor_category')->groupBy('vendor_category')->where('deleted_at','=',null)->get();
        $data['page_name'] = "View";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Store';
        return view($this->folder_path.'store_view',$data);
    }

    public function view($id)
    {
        $arr_data = [];

        $data1     = \DB::table('booking')->where(['id'=>$id])->first();


        $data['data']      = $data1;
        $data['page_name'] = "View";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        return view($this->folder_path.'view',$data);
    }

    public function edit($id)
    {
        $arr_data = [];
        $data     = $this->base_model->where(['id'=>$id])->first();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Edit";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        $data['state']     = [];//\DB::table('pincode_with_area')
                                //->groupBy('state')
                                //->get();
    
        $data['vendor_category'] = \DB::table('vendor_category')
                                        ->where('deleted_at','=',null)
                                        ->groupBy('vendor_category')
                                        ->get();
        return view($this->folder_path.'edit',$data);
    }

    public function deliverty_boy_edit($id)
    {
        $arr_data = [];
        $data     = $this->base_model->where(['id'=>$id])->first();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Edit";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
      
        return view($this->folder_path.'deliverty_boy_edit',$data);
    }

    public function store_edit($id)
    {
        $arr_data = [];
        $data     = $this->base_model->where(['id'=>$id])->first();

        if(!empty($data))
        {
            $arr_data = $data->toArray();
        }

        $data['data']      = $arr_data;
        $data['page_name'] = "Edit";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = 'Store';
      
        return view($this->folder_path.'store_edit',$data);
    }

    public function edit_address($id)
    {
        $arr_data     = \DB::table('address')->where(['id'=>$id])->first();

        $data['data']      = $arr_data;
        $data['page_name'] = "Edit";
        $data['url_slug']  = $this->url_slug;
        $data['title']     = $this->title;
        $data['state']     = \DB::table('pincode_with_area')
                                ->where(['state'=>'MAHARASHTRA'])
                                ->groupBy('state')
                                ->get();
        $data['city']      = \DB::table('pincode_with_area')
                                ->where(['state'=>$arr_data->state,'district'=>'MUMBAI'])
                                ->orWhere('district', '=', 'PUNE')
                                ->where(['state'=>$arr_data->state])
                                ->orWhere('district', '=', 'NASHIK')
                                ->where(['state'=>$arr_data->state])
                                //->where(['state'=>$arr_data->state])
                                ->orderBy('district','ASC')
                                ->groupBy('district')
                                ->get();
        $data['pincode']   = \DB::table('pincode_with_area')
                                ->where(['district'=>$arr_data->city])
                                ->orderBy('pincode','ASC')
                                ->groupBy('pincode')
                                ->get();

        return view($this->folder_path.'edit_address',$data);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'email'             => 'required',
                'mobile_no'         => 'required',
                'password'          => 'required',
               
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where('id','<>',$id)->where(['mobile_no'=>$request->input('mobile_no'),'email'=>$request->input('email')])->count();

        if($is_exist)
        {
            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }


        $arr_data                       = [];
        $arr_data['first_name']         = $request->input('first_name');
        $arr_data['last_name']          = $request->input('last_name');
        $arr_data['mobile_no']          = $request->input('mobile_no');
        $arr_data['email']              = $request->input('email');
        $arr_data['password']           = $request->input('password');
     
        
        $status = $this->base_model->where(['id'=>$id])->update($arr_data);
        if (!empty($status))
        {
            Session::flash('success', 'Success! Record update successfully.');
            return \Redirect::to('admin/manage_user');
            //return \Redirect::back();
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function deliverty_boy_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'first_name'        => 'required',
                'last_name'         => 'required',
                'email'             => 'required',
                'mobile_no'         => 'required',
                'password'          => 'required',
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where('id','<>',$id)->where(['mobile_no'=>$request->input('mobile_no'),'email'=>$request->input('email')])->count();

        if($is_exist)
        {
            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }


        $arr_data                       = [];
        $arr_data['first_name']         = $request->input('first_name');
        $arr_data['last_name']          = $request->input('last_name');
        $arr_data['mobile_no']          = $request->input('mobile_no');
        $arr_data['email']              = $request->input('email');
        $arr_data['password']           = $request->input('password');
   
        if(isset($_FILES["upload_pan"]["name"]) && !empty($_FILES["upload_pan"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
      
            $file_name                         = $_FILES["upload_pan"]["name"];
            $file_tmp                          = $_FILES["upload_pan"]["tmp_name"];
            $ext                               = pathinfo($file_name,PATHINFO_EXTENSION);
            $random_file_name                  = $randomString.'.'.$ext;
            $latest_image                      = 'upload/profile/'.$random_file_name;

            if(move_uploaded_file($file_tmp,env('BASE_PATH').$latest_image))
            {
                $arr_data['upload_pan']      = $latest_image;
            }
        }   

        if(isset($_FILES["kyc_document"]["name"]) && !empty($_FILES["kyc_document"]["name"]))
        {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 18; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
      
            $file_name1                         = $_FILES["kyc_document"]["name"];
            $file_tmp1                          = $_FILES["kyc_document"]["tmp_name"];
            $ext1                               = pathinfo($file_name1,PATHINFO_EXTENSION);
            $random_file_name1                  = '2'.$randomString.'.'.$ext1;
            $latest_image1                      = 'upload/profile/'.$random_file_name1;

            if(move_uploaded_file($file_tmp1,env('BASE_PATH').$latest_image1))
            {
                $arr_data['kyc_document']      = $latest_image1;
            }
        }   
        
        $status = $this->base_model->where(['id'=>$id])->update($arr_data);
        if (!empty($status))
        {
            Session::flash('success', 'Success! Record update successfully.');
            return \Redirect::to('admin/manage_delivery_boy');
            //return \Redirect::back();
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function store_update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'store_name'        => 'required',
                'min_order_value'   => 'required',
                'delivery_fees'     => 'required',
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $is_exist = $this->base_model->where('id','<>',$id)->where(['mobile_no'=>$request->input('mobile_no'),'email'=>$request->input('email')])->count();

        if($is_exist)
        {
            Session::flash('error', "User already exist!");
            return \Redirect::back();
        }


        $arr_data                    = [];
        $arr_data['store_name']      = $request->input('store_name');
        $arr_data['min_order_value'] = $request->input('min_order_value');
        $arr_data['delivery_fees']   = $request->input('delivery_fees');
        $arr_data['delivery_schedule']   = $request->input('delivery_schedule');
        
       
        $status = $this->base_model->where(['id'=>$id])->update($arr_data);
        if (!empty($status))
        {
            Session::flash('success', 'Success! Record update successfully.');
            return \Redirect::to('admin/manage_store');
            //return \Redirect::back();
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function update_address(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
                'address'           => 'required',
                'state'             => 'required',
                'city'              => 'required',
                'pincode'           => 'required',
            ]);

        if ($validator->fails()) 
        {
            return $validator->errors()->all();
        }

        $arr_data            = [];
        $arr_data['address'] = $request->input('address');
        $arr_data['state']   = $request->input('state');
        $arr_data['city']    = $request->input('city');
        $arr_data['pincode'] = $request->input('pincode');
        //dd($arr_data);
        $status = \DB::table('address')->where(['id'=>$id])->update($arr_data);
        if (!empty($status))
        {
            Session::flash('success', 'Success! Record updated successfully.');
            return \Redirect::back();
        }
        else
        {
            Session::flash('error', "Error! Oop's something went wrong.");
            return \Redirect::back();
        }
    }

    public function getvarient()
    {
        $id = $_POST['id'];
        if ($id != null) {
                $city = \DB::table('nexa_product')
                                ->where(['car'=>$id])
                                ->orderBy('varient','ASC')
                                ->groupBy('varient')
                                ->get();
                        echo "<option  value=''>Select Variant</option>";
                if (count($city) > 0) {
                    foreach ($city as $city_details) {
                        echo "<option value='" . $city_details->varient . "'>" . $city_details->varient . "</option>";
                    }
                } else {
                    echo "<option  value=''>-</option>";
                }
        }
        else
        {
             echo "<option  value=''>Select Variant</option>";
        }
    }


   public function getcolor()
    {
        $varient = $_POST['varient'];
        $city = \DB::table('nexa_product')
                ->where(['varient'=>$_POST['varient']])
                ->where(['car'=>$_POST['car']])
                ->get();

         echo "<option>Select Color</option>";
                if (count($city) > 0) {
                    foreach ($city as $city_details) {
                        echo "<option value='" . $city_details->color . "'>" . $city_details->color . "</option>";
                    }
                } else {
                    echo "<option>-</option>";
                }
                       
                        
    }

    public function getprice()
    {
        $id = $_POST['id'];
       
                $city = \DB::table('nexa_product')
                                ->where(['varient'=>$_POST['varient']])
                                ->where(['car'=>$_POST['car']])
                                ->first();
                    echo "Rs".' '. $city->on_road_price; 
    }

    public function getcity()
    {
        $state = $_POST['id'];
        if ($state != null) {
                $city = \DB::table('pincode_with_area')
                                ->where(['state'=>$state])
                                ->orderBy('district','ASC')
                                ->groupBy('district')
                                ->get();
                        echo "<option>Select City</option>";
                if (count($city) > 0) {
                    foreach ($city as $city_details) {
                        echo "<option value='" . $city_details->district . "'>" . $city_details->district . "</option>";
                    }
                } else {
                    echo "<option>-</option>";
                }
        }
        else
        {
             echo "<option>Select City</option>";
        }
    }

    public function getarea()
    {
        $state = $_POST['id'];
        if ($state != null) {
                $city = \DB::table('area')
                                ->where(['city_name'=>$state])
                                ->orderBy('area','ASC')
                                ->get();
                        echo "<option>Select Area</option>";
                if (count($city) > 0) {
                    foreach ($city as $city_details) {
                        echo "<option value='" . $city_details->area . "'>" . $city_details->area . "</option>";
                    }
                } else {
                    echo "<option>-</option>";
                }
        }
        else
        {
             echo "<option>Select Area</option>";
        }
    }

    public function get_user_suggestion()
    {
        //dd($_GET['term']);
        $data = $this->base_model->limit(10)->get();
        $temp = [];
        foreach ($data as $key => $value) 
        {
            array_push($temp, ['id'=>$value->id,'value'=>$value->first_name]);
        }
        echo json_encode($temp); 
    }

    public function getpincode()
    {
        $district = $_POST['id'];
        if ($district != null) {

                $pincode = \DB::table('pincode_with_area1')
                                ->where(['area'=>$district])
                                //->orderBy('pincode','ASC')
                                //->groupBy('pincode')
                                ->first();
                if (count($pincode) > 0) 
                {
                    echo $pincode->pincode;
                } 
                else 
                {
                    echo "NA";
                }
        }
    }

    public function delete($id)
    {
        $this->base_model->where(['id'=>$id])->delete();
        Session::flash('success', 'Success! Record deleted successfully.');
        return \Redirect::back();
    }

    public function deliverty_boy_delete($id)
    {
        //$this->base_model->where(['id'=>$id])->delete();
        Session::flash('success', 'Success! Record deleted successfully.');
        return \Redirect::back();
    }

    public function store_delete($id)
    {
        //$this->base_model->where(['id'=>$id])->delete();
        Session::flash('success', 'Success! Record deleted successfully.');
        return \Redirect::back();
    }
}

<?php

class MainController extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->model('MainModel');

	}

    public function index()
    {
       
        $this->header_footer('borrow/index_1');

    }
    public function index_2()
    {
        $this->header_footer('borrow/index_2');
    }
    public function index_3()
    {
       
        $this->header_footer('borrow/index_3');

    }

    public function blog_three_column()
    {
       
        $this->header_footer('borrow/blog_three_column');

    }

    public function blog_two_column()
    {
       
        $this->header_footer('borrow/blog_two_column');

    }
    public function borrow_account_saving()
    {
       
        $this->header_footer('borrow/borrow_account_saving');

    }
    public function car_loan()
    {
       
        $this->header_footer('borrow/car_loan');

    }
    public function card_landing_page()
    {
       
        $this->header_footer('borrow/card_landing_page');

    }
    public function compare_credit_card()
    {
       
        $this->header_footer('borrow/compare_credit_card');

    }
    public function compare_loan()
    {
       
        $this->header_footer('borrow/compare_loan');

    }
    public function compare_personal_loan()
    {
       
        $this->header_footer('borrow/compare_personal_loan');

    }
    public function compare_student_loan()
    {
       
        $this->header_footer('borrow/compare_student_loan');

    }
    public function contact()
    {
        $this->form_validation->set_rules('name', 'Name','trim|required');
        $this->form_validation->set_rules('email', 'Email','trim|required');
        $this->form_validation->set_rules('phone', 'Phone No','trim|required');
        $this->form_validation->set_rules('message', 'Message','trim|required');
        
        if ($this->form_validation->run() == FALSE) 
        {
            // $this->index();
			// $data['main'] = 'contact';
			// $this->header_footer1("contact", $data); 
        }
        else
        {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'message' => $this->input->post('message'),
            //'status'=>'Pending'
        );
        }
        if(!empty($data))
        {
        $contact = new MainModel;
        if($contact->contact($data))
        {
       
            $this->session->set_userdata('insert_s', '  Data Insert Successfull!');
            redirect(base_url('contact'));
        }
        else{
            $this->session->set_userdata('insert_e', ' Data Insert unsuccessfull!'); 
            redirect(base_url('contact'));
        }
        }
       
        $this->header_footer('borrow/contact_us');

    }
    public function credit_card_listing()
    {
       
        $this->header_footer('borrow/credit_card_listing');

    }
    public function credit_card_single()
    {
       
        $this->header_footer('borrow/credit_card_single');

    }
    public function education_loan()
    {
       
        $this->header_footer('borrow/education_loan');

    }
    public function error()
    {
       
        $this->header_footer('borrow/error');

    }
    public function faq()
    {
       
        $this->header_footer('borrow/faq');

    }
    public function forex_list_single()
    {
       
        $this->header_footer('borrow/forex_list_single');

    }
    public function forex_list()
    {
       
        $this->header_footer('borrow/forex_list');

    }
    public function gallery_filter_2()
    {
       
        $this->header_footer('borrow/gallery_filter_2');

    }
    public function gallery_filter_3()
    {
       
        $this->header_footer('borrow/gallery_filter_3');

    }
    public function gallery_masonary()
    {
       
        $this->header_footer('borrow/gallery_masonary');

    }
    public function gallery_zoom()
    {
       
        $this->header_footer('borrow/gallery_zoom');

    }
    public function home_loan()
    {
       
        $this->header_footer('borrow/home_loan');

    }
    public function index_4_student_loan()
    {
        $this->form_validation->set_rules('name', 'Name','trim|required');
        $this->form_validation->set_rules('email', 'Email','trim|required');
        $this->form_validation->set_rules('phone', 'Phone No','trim|required');
        $this->form_validation->set_rules('city', 'City','trim|required');
        $this->form_validation->set_rules('amount', 'Amount','trim|required');
        
        if ($this->form_validation->run() == FALSE) 
        {
            
        }
        else
        {
            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'city' => $this->input->post('city'),
                'amount' => $this->input->post('amount'),
                'status' => 'Pending'
            );
        }
        if(!empty($data))
        {
        $lead = new MainModel;
        $checking = $lead->lead($data);
        }
       
        $this->header_footer('borrow/index_4_student_loan');
    }

    public function index_5_business_loan()
    {
       
        $this->header_footer('borrow/index_5_business_loan');

    }
    public function index_6()
    {
       
        $this->header_footer('borrow/index_6');

    }
    public function index_7_borrow_bank()
    {
       
        $this->header_footer('borrow/index_7_borrow_bank');

    }
    public function index_compare_shop()
    {
       
        $this->header_footer('borrow/index_compare_shop');

    }
    public function index_creditcards()
    {
       
        $this->header_footer('borrow/index_creditcards');

    }
    public function index_creditscore()
    {
       
        $this->header_footer('borrow/index_creditscore');

    }
    public function index_forex()
    {
       
        $this->header_footer('borrow/index_forex');

    }
    public function landing_page_car_loan()
    {
       
        $this->header_footer('borrow/landing_page_car_loan');

    }
    public function landing_page_home_loan()
    {
       
        $this->header_footer('borrow/landing_page_home_loan');

    }
    public function lead_genrator_landing_page()
    {
       
        $this->header_footer('borrow/lead_genrator_landing_page');

    }
    public function lender_listing()
    {
       
        $this->header_footer('borrow/lender_listing');

    }

    public function lender_single()
    {
       
        $this->header_footer('borrow/lender_single');

    }
    public function loan_calculator()
    {
       
        $this->header_footer('borrow/loan_calculator');

    }

    public function loan_eligibility()
    {
       
        $this->header_footer('borrow/loan_eligibility');

    }

    public function loan_listing_icon()
    {
       
        $this->header_footer('borrow/loan_listing_icon');

    }
    public function loan_listing_image()
    {
       
        $this->header_footer('borrow/loan_listing_image');

    }

    public function personal_bank_account()
    {
       
        $this->header_footer('borrow/personal_bank_account');

    }

    public function personal_bank_saving()
    {
       
        $this->header_footer('borrow/personal_bank_saving');

    }

    public function personal_loan()
    {
       
        $this->header_footer('borrow/personal_loan');

    }

    public function refinancing_landing_page()
    {
        $this->headernew_footernew('borrow/refinancing_landing_page');
    }

    public function shortcodes_accordion()
    {
       
        $this->header_footer('borrow/shortcodes_accordion');

    }

    public function shortcodes_alert()
    {
       
        $this->header_footer('borrow/shortcodes_alert');

    }
    public function shortcodes_button()
    {
       
        $this->header_footer('borrow/shortcodes_button');

    }
    public function shortcodes_tables()
    {
       
        $this->header_footer('borrow/shortcodes_tables');

    }
    public function shortcodes_tabs()
    {
       
        $this->header_footer('borrow/shortcodes_tabs');

    }
    public function signin_cover()
    {
       
        $this->header_footer('borrow/signin_cover');

    }

    public function signin_illustration()
    {
       
        $this->header_footer('borrow/signin_illustration');

    }
    public function signin()
    {
       
        $this->header_footer('borrow/signin');

    }

    public function team()
    {
       
        $this->header_footer('borrow/team');

    }
    
    public function testimonial()
    {
       
        $this->header_footer('borrow/testimonial');

    }

    public function about()
    {
       
        
        $this->header_footer('borrow/about');
    }
    public function blog_listing()
    {
       
        
        $this->header_footer('borrow/blog_listing');
    }
    public function blog_single()
    {
       
        
        $this->header_footer('borrow/blog_single');
    }
    public function forex()
    {
        $this->header_footer('borrow/forex');
    }
    public function loan()
    {
       
        
        $this->header_footer('borrow/loan');
    }
    public function creditcard()
    {
       
        
        $this->header_footer('borrow/creditcard');
    }
    public function crypto_trading()
    {
       
        
        $this->header_footer('borrow/crypto_trading');
    }
    public function mutual_fund()
    {
       
        
        $this->header_footer('borrow/mutual_fund');
    }
    public function real_estate()
    {
       
        
        $this->header_footer('borrow/real_estate');
    }
    public function stock_market()
    {
       
        
        $this->header_footer('borrow/stock_market');
    }
    

    public function header_footer($main)
	{
		if ($main !=""){
			$this->load->view('layouts/header');
			$this->load->view($main);
			$this->load->view('layouts/footer');
		}
		else{
			print_r($main);
			exit();
		}
	}
    public function headernew_footernew($main)
	{
		if ($main !=""){
			$this->load->view('layouts/headernew');
			$this->load->view($main);
			$this->load->view('layouts/footernew');
		}
		else{
			print_r($main);
			exit();
		}
	}
   
}


?>
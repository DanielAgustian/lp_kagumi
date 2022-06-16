<?php namespace App\Http\Controllers;

	use Session;
	use Request;
	use DB;
	use CRUDBooster;

	class AdminLoseLeadsController extends \crocodicstudio\crudbooster\controllers\CBController {

		public function cbInit() {

		# START CONFIGURATION DO NOT REMOVE THIS LINE
		$this->title_field = "name";
		$this->limit = "20";
		$this->orderby = "id,desc";
		$this->global_privilege = false;
		$this->button_table_action = true;
		$this->button_bulk_action = true;
		$this->button_action_style = "button_icon";
		$this->button_add = false;
		$this->button_edit = false;
		$this->button_delete = false;
		$this->button_detail = false;
		$this->button_show = false;
		$this->button_filter = true;
		$this->button_import = false;
		$this->button_export = false;
		$this->table = "clients";
		# END CONFIGURATION DO NOT REMOVE THIS LINE

		# START COLUMNS DO NOT REMOVE THIS LINE
		$this->col = [];
		$this->col[] = ["label"=>"Name","name"=>"name"];
		$this->col[] = ["label"=>"Email","name"=>"email"];
		$this->col[] = ["label"=>"Whatsapp","name"=>"whatsapp"];
		$this->col[] = ["label"=>"Company","name"=>"company"];
		$this->col[] = ["label"=>"Messages","name"=>"id"];
		$this->col[] = ["label"=>"Status","name"=>"status"];
		$this->col[] = ["label"=>"Created At","name"=>"created_at"];
		# END COLUMNS DO NOT REMOVE THIS LINE

		# START FORM DO NOT REMOVE THIS LINE
		$this->form = [];
		$this->form[] = ['label'=>'Email','name'=>'email','type'=>'email','validation'=>'required|min:1|max:255|email|unique:clients','width'=>'col-sm-10'];
		$this->form[] = ['label'=>'Name','name'=>'name','type'=>'text','validation'=>'required|string|min:3|max:70','width'=>'col-sm-10'];
		$this->form[] = ['label'=>'Company','name'=>'company','type'=>'textarea','validation'=>'required|string|min:5|max:5000','width'=>'col-sm-10'];
		$this->form[] = ['label'=>'Phone','name'=>'phone','type'=>'number','validation'=>'required|numeric','width'=>'col-sm-10'];
		$this->form[] = ['label'=>'Status','name'=>'status','type'=>'select2','validation'=>'required|min:1|max:255','width'=>'col-sm-10','dataenum'=>'lead;contact;win;potential;no-respond;lose'];
		# END FORM DO NOT REMOVE THIS LINE

		# OLD START FORM
		//$this->form = [];
		//$this->form[] = ["label"=>"Name","name"=>"name","type"=>"text","required"=>TRUE,"validation"=>"required|string|min:3|max:70","placeholder"=>"You can only enter the letter only"];
		//$this->form[] = ["label"=>"Email","name"=>"email","type"=>"email","required"=>TRUE,"validation"=>"required|min:1|max:255|email|unique:clients","placeholder"=>"Please enter a valid email address"];
		//$this->form[] = ["label"=>"Password","name"=>"password","type"=>"password","required"=>TRUE,"validation"=>"min:3|max:32","help"=>"Minimum 5 characters. Please leave empty if you did not change the password."];
		//$this->form[] = ["label"=>"Username","name"=>"username","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Dob","name"=>"dob","type"=>"date","required"=>TRUE,"validation"=>"required|date"];
		//$this->form[] = ["label"=>"Address","name"=>"address","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Kota","name"=>"kota","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Ktp","name"=>"ktp","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Upload Ktp","name"=>"upload_ktp","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Photo","name"=>"photo","type"=>"upload","required"=>TRUE,"validation"=>"required|image|max:3000","help"=>"File types support : JPG, JPEG, PNG, GIF, BMP"];
		//$this->form[] = ["label"=>"Phone","name"=>"phone","type"=>"number","required"=>TRUE,"validation"=>"required|numeric","placeholder"=>"You can only enter the number only"];
		//$this->form[] = ["label"=>"Whatsapp","name"=>"whatsapp","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Company","name"=>"company","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
		//$this->form[] = ["label"=>"Line","name"=>"line","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Telegram","name"=>"telegram","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Facebook","name"=>"facebook","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Google","name"=>"google","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Twitter","name"=>"twitter","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Linkedin","name"=>"linkedin","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Instagram","name"=>"instagram","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Bigo","name"=>"bigo","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Parent","name"=>"parent","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Level","name"=>"level","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Lev 1","name"=>"lev_1","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Lev 2","name"=>"lev_2","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Lev 3","name"=>"lev_3","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Lev 4","name"=>"lev_4","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Lev 5","name"=>"lev_5","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Lev 6","name"=>"lev_6","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Old","name"=>"id_old","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"old,id"];
		//$this->form[] = ["label"=>"Mkt","name"=>"id_mkt","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"mkt,id"];
		//$this->form[] = ["label"=>"Ref Old","name"=>"ref_old","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Cms Privileges","name"=>"id_cms_privileges","type"=>"select2","required"=>TRUE,"validation"=>"required|integer|min:0","datatable"=>"cms_privileges,name"];
		//$this->form[] = ["label"=>"Status","name"=>"status","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Origin","name"=>"origin","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Campaign","name"=>"campaign","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Media Iklan","name"=>"media_iklan","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Previous Url","name"=>"previous_url","type"=>"textarea","required"=>TRUE,"validation"=>"required|string|min:5|max:5000"];
		//$this->form[] = ["label"=>"Ipaddress","name"=>"ipaddress","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Desktop","name"=>"desktop","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Device","name"=>"device","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Lang","name"=>"lang","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Uuid","name"=>"uuid","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"Flag","name"=>"flag","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Flag Double","name"=>"flag_double","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"Next Fu","name"=>"next_fu","type"=>"date","required"=>TRUE,"validation"=>"required|date"];
		//$this->form[] = ["label"=>"ParentName","name"=>"parentName","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"ParentFlag","name"=>"parentFlag","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"ContactEmailValidation","name"=>"contactEmailValidation","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"ContactWhatsappValidation","name"=>"contactWhatsappValidation","type"=>"text","required"=>TRUE,"validation"=>"required|min:1|max:255"];
		//$this->form[] = ["label"=>"FlagValidationEmail","name"=>"flagValidationEmail","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		//$this->form[] = ["label"=>"FlagValidationWhatsapp","name"=>"flagValidationWhatsapp","type"=>"number","required"=>TRUE,"validation"=>"required|integer|min:0"];
		# OLD END FORM

		/*
				| ----------------------------------------------------------------------
				| Sub Module
				| ----------------------------------------------------------------------
		| @label          = Label of action
		| @path           = Path of sub module
		| @foreign_key 	  = foreign key of sub table/module
		| @button_color   = Bootstrap Class (primary,success,warning,danger)
		| @button_icon    = Font Awesome Class
		| @parent_columns = Sparate with comma, e.g : name,created_at
				|
				*/
				$this->sub_module = array();


				/*
				| ----------------------------------------------------------------------
				| Add More Action Button / Menu
				| ----------------------------------------------------------------------
				| @label       = Label of action
				| @url         = Target URL, you can use field alias. e.g : [id], [name], [title], etc
				| @icon        = Font awesome class icon. e.g : fa fa-bars
				| @color 	   = Default is primary. (primary, warning, succecss, info)
				| @showIf 	   = If condition when action show. Use field alias. e.g : [id] == 1
				|
				*/
				$this->addaction = array();
				$this->addaction[] = [
					'title' => 'Detail', 'url' => CRUDBooster::mainpath('detail/[id]'),
					'icon' => 'fa fa-eye', 'color' => 'primary'
				];

				/*
				| ----------------------------------------------------------------------
				| Add More Button Selected
				| ----------------------------------------------------------------------
				| @label       = Label of action
				| @icon 	   = Icon from fontawesome
				| @name 	   = Name of button
				| Then about the action, you should code at actionButtonSelected method
				|
				*/
				$this->button_selected = array();


				/*
				| ----------------------------------------------------------------------
				| Add alert message to this module at overheader
				| ----------------------------------------------------------------------
				| @message = Text of message
				| @type    = warning,success,danger,info
				|
				*/
				$this->alert        = array();



				/*
				| ----------------------------------------------------------------------
				| Add more button to header button
				| ----------------------------------------------------------------------
				| @label = Name of button
				| @url   = URL Target
				| @icon  = Icon from Awesome.
				|
				*/
				$this->index_button = array();



				/*
				| ----------------------------------------------------------------------
				| Customize Table Row Color
				| ----------------------------------------------------------------------
				| @condition = If condition. You may use field alias. E.g : [id] == 1
				| @color = Default is none. You can use bootstrap success,info,warning,danger,primary.
				|
				*/
				$this->table_row_color = array();


				/*
				| ----------------------------------------------------------------------
				| You may use this bellow array to add statistic at dashboard
				| ----------------------------------------------------------------------
				| @label, @count, @icon, @color
				|
				*/
				$this->index_statistic = array();



				/*
				| ----------------------------------------------------------------------
				| Add javascript at body
				| ----------------------------------------------------------------------
				| javascript code in the variable
				| $this->script_js = "function() { ... }";
				|
				*/
				$this->script_js = NULL;


					/*
				| ----------------------------------------------------------------------
				| Include HTML Code before index table
				| ----------------------------------------------------------------------
				| html code to display it before index table
				| $this->pre_index_html = "<p>test</p>";
				|
				*/
				$this->pre_index_html = null;



				/*
				| ----------------------------------------------------------------------
				| Include HTML Code after index table
				| ----------------------------------------------------------------------
				| html code to display it after index table
				| $this->post_index_html = "<p>test</p>";
				|
				*/
				$this->post_index_html = null;



				/*
				| ----------------------------------------------------------------------
				| Include Javascript File
				| ----------------------------------------------------------------------
				| URL of your javascript each array
				| $this->load_js[] = asset("myfile.js");
				|
				*/
				$this->load_js = array();



				/*
				| ----------------------------------------------------------------------
				| Add css style at body
				| ----------------------------------------------------------------------
				| css code in the variable
				| $this->style_css = ".style{....}";
				|
				*/
				$this->style_css = NULL;



				/*
				| ----------------------------------------------------------------------
				| Include css File
				| ----------------------------------------------------------------------
				| URL of your css each array
				| $this->load_css[] = asset("myfile.css");
				|
				*/
				$this->load_css = array();


		}


		/*
		| ----------------------------------------------------------------------
		| Hook for button selected
		| ----------------------------------------------------------------------
		| @id_selected = the id selected
		| @button_name = the name of button
		|
		*/
		public function actionButtonSelected($id_selected,$button_name) {
				//Your code here

		}


		/*
		| ----------------------------------------------------------------------
		| Hook for manipulate query of index result
		| ----------------------------------------------------------------------
		| @query = current sql query
		|
		*/
		public function hook_query_index(&$query) {
				//Your code here
				$query->where('status', 'lose');
		}

		/*
		| ----------------------------------------------------------------------
		| Hook for manipulate row of index table html
		| ----------------------------------------------------------------------
		|
		*/
		public function hook_row_index($column_index,&$column_value) {
			//Your code here
			if ($column_index == 5) {
				// code...
				$column_value = DB::table('client_input')->where('client_id', $column_value)->first()->message;
			}
		}

		/*
		| ----------------------------------------------------------------------
		| Hook for manipulate data input before add data is execute
		| ----------------------------------------------------------------------
		| @arr
		|
		*/
		public function hook_before_add(&$postdata) {
				//Your code here

		}

		/*
		| ----------------------------------------------------------------------
		| Hook for execute command after add public static function called
		| ----------------------------------------------------------------------
		| @id = last insert id
		|
		*/
		public function hook_after_add($id) {
				//Your code here

		}

		/*
		| ----------------------------------------------------------------------
		| Hook for manipulate data input before update data is execute
		| ----------------------------------------------------------------------
		| @postdata = input post data
		| @id       = current id
		|
		*/
		public function hook_before_edit(&$postdata,$id) {
				//Your code here

		}

		/*
		| ----------------------------------------------------------------------
		| Hook for execute command after edit public static function called
		| ----------------------------------------------------------------------
		| @id       = current id
		|
		*/
		public function hook_after_edit($id) {
				//Your code here

		}

		/*
		| ----------------------------------------------------------------------
		| Hook for execute command before delete public static function called
		| ----------------------------------------------------------------------
		| @id       = current id
		|
		*/
		public function hook_before_delete($id) {
				//Your code here

		}

		/*
		| ----------------------------------------------------------------------
		| Hook for execute command after delete public static function called
		| ----------------------------------------------------------------------
		| @id       = current id
		|
		*/
		public function hook_after_delete($id) {
				//Your code here

		}



		//By the way, you can still create your own method in here... :)



	}

<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Interpro\QuickStorage\Concept\Exception\WrongBlockFieldNameException;
use Interpro\QuickStorage\Laravel\QueryAgent;
use Illuminate\Http\Request;

class BackController extends Controller {

	private $queryAgent;
	function __construct(QueryAgent $queryAgent){
		$this->queryAgent = $queryAgent;
		$all_image = $this->queryAgent->getBlock('dom_all_images',[],[]);

		view()->share('dom_all_images', $all_image);
	}


	public function editAll(){
		$static = $this->queryAgent->getBlock('static_site',[],[]);

		return view('back.blocks.static_site', [
			'static_site' => $static
		]);
	}

	public function editMenu(){
		$static = $this->queryAgent->getBlock('main_menu',[],[]);

		return view('back.blocks.main_menu', [
			'main_menu' => $static
		]);
	}

	public function getInformatic(){
		$block = $this->queryAgent->getBlock('information_page',[],[]);

		return view('back.blocks.information_page',[
			'information_page' => $block
		]);
	}
	public function getInformaticItem($id){
		$block = $this->queryAgent->getGroupItem('information_page','inf_page',$id);

		return view('back.blocks.groupitems.information_page.inf_page_edit',[
			'item_inf_page' => $block
		]);
	}
	//================================================================
	//	Редактирование
	//	Страница "Наши клиенты"
	//	Карточка Клиента
	//================================================================
	public function editClients(){
		$clients = $this->queryAgent->getBlock('clients_block',[],[]);
		return view('back.blocks.clients_block',[
			'clients_block' => $clients

		]);
	}
	public function editClientItem($id){
		$clients = $this->queryAgent->getGroupItem('clients_block','client',$id);
		$city    = $this->queryAgent->getGroupFlat('clients_filter','city',[],[]);
		$inst    = $this->queryAgent->getGroupFlat('clients_filter','institution',[],[]);
		$related = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);

		return view('back.blocks.groupitems.clients_block.client_edit',[
			'item_client' => $clients,
			'city_name'   => $city,
			'inst'		  => $inst,
			'related'     => $related
		]);
	}


	//================================================================
	//	Редактирование:
	//	Каталога оборудования
	//	Стеллажи и витрны
	//	Видеонаблюдение
	//	Программное обеспечение
	//================================================================
	public  function editParentGroup(){
		$catalog = $this->queryAgent->getBlock('catalog_block',[],[]);
		return view('back.blocks.catalog_block', [
			'catalog_block' => $catalog
		]);
	}
	public function editCatalog(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',51);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editShowcase(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',52);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editVideo(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',53);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editSoft(){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',54);
		return view('back.blocks.groupitems.catalog_block.category_1_edit', [
			'item_category_1' => $catalog
		]);
	}
	public function editSubCategory($id){
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_2',$id);
        	$sorting = $this->queryAgent->getGroupFlat('catalog_block', 'product', ['product' =>['sorter' => 'ASC']], ['product' => ['owner_id' => $id]]);
		return view('back.blocks.groupitems.catalog_block.category_2_edit', [
			'item_category_2' => $catalog,
			'products_sort' => $sorting
		]);
	}


	//================================================================
	//	Редактирование карточки Товара
	//
	//
	//================================================================
	public function editProduct($id, $product_id){
		$product = 		$this->queryAgent->getGroupItem('catalog_block','product',$product_id);
		$all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$auto = 		$this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		$course 	=   $this->queryAgent->getGroupFlat('clients_filter','course',[],[]);
		$soft =         $this->queryAgent->getGroupFlat('catalog_block','product',[],['product'=>['owner_id' => 55]]);
		return view('back.blocks.groupitems.catalog_block.product_edit', [
			'item_product' => $product,
			'related'      => $all_products,
			'cor'	   		=> $course,
			'auto'		   => $auto,
			'soft'         => $soft
		]);
	}
	public function editProductSoft($product_id){
		$product = $this->queryAgent->getGroupItem('catalog_block','product',$product_id);
		$all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$auto = 		$this->queryAgent->getGroupFlat('auto_block','auto',[],[]);
		return view('back.blocks.groupitems.catalog_block.product_edit', [
			'item_product' => $product,
			'related'      => $all_products,
			'auto'		   => $auto
		]);
	}
	//================================================================
	//	Редактирование страницы "Готовые решения"
	//	Редактирование карточки "Готовые решения"
	//
	//================================================================

	public function editAuto(){
		$auto = $this->queryAgent->getBlock('auto_block',[],[]);
		return view('back.blocks.auto_block', [
			'auto_block' => $auto
		]);
	}
	public function editAutoItem($id){
		$auto = $this->queryAgent->getGroupItem('auto_block','auto',$id);
		$all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$course 	=   $this->queryAgent->getGroupFlat('clients_filter','course',[],[]);
		$institution	=   $this->queryAgent->getGroupFlat('clients_filter','institution',[],[]);
		return view('back.blocks.groupitems.auto_block.auto_edit', [
			'item_auto'         => $auto,
			'cor'		        => $course,
			'institution'		=> $institution,
			'related'           => $all_products
		]);
	}


	// Wipon
	public function editWipon(){
		$wipon = $this->queryAgent->getBlock('wipon',[],[]);
		$all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$course 	=   $this->queryAgent->getGroupFlat('clients_filter','course',[],[]);
		return view('back.blocks.wipon', [
			'wipon'             => $wipon,
			'cor'		        => $course,
			'related'           => $all_products
		]);
	}

	//================================================================
	//	Редактирование страницы "Бухгалтерия"
	//	Редактирование Категории
	//	Редактирования Тарифа
    //	Редактирование страницы "О компании"
    //	Редактирование Сотрудника
    //================================================================
	public function editAcc(){
		$acc = $this->queryAgent->getBlock('accounting_block',[],[]);
		return view('back.blocks.accounting_block', [
			'accounting_block' => $acc
		]);
	}
	public function editAccCategory($id){
		$acc = $this->queryAgent->getGroupItem('accounting_block','tarif_category',$id);
		return view('back.blocks.groupitems.accounting_block.tarif_category_edit', [
			'item_tarif_category' => $acc
		]);
	}
	public function editAccItem($id, $tarif_id){
		$acc = $this->queryAgent->getGroupItem('accounting_block','tarif',$tarif_id);
		return view('back.blocks.groupitems.accounting_block.tarif_edit', [
			'item_tarif' => $acc
		]);
	}
    public function editAbout(){
        $about = $this->queryAgent->getBlock('about_page',[],[]);
        return view('back.blocks.about_page', [
            'about_page' => $about
        ]);
    }
    public function editStaff($id){
        $staff= $this->queryAgent->getGroupItem('about_page','staff',$id);
        return view('back.blocks.groupitems.about_page.staff_edit', [
            'item_staff' => $staff
        ]);
    }




	//=====================================================================
	//	Редактирование дополнительных полей
	//	Город
	//	Категория заведений
	//	Метрики
	//  Курсы валют
 	//=====================================================================
	public function editMetrik(){
		$static = $this->queryAgent->getBlock('static_site',[],[]);
		return view('back.metrik', [
			'static_site' => $static
		]);
	}

	public function editCity(){
		$static = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('back.city', [
			'clients_filter' => $static
		]);
	}
	public function editInstitution(){
		$static = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('back.inst', [
			'clients_filter' => $static
		]);
	}
	public function editCourse(){
		$static = $this->queryAgent->getBlock('clients_filter',[],[]);
		return view('back.blocks.clients_filter', [
			'clients_filter' => $static
		]);
	}

	//=====================================================================
	// Отправка прайс листа на почту.
	//=====================================================================
	public function price(Request $request){
		$file = $request->file('price');
		$ext  =  strtolower($file->getClientOriginalExtension());;
		$file->move(base_path().'/public/price/', 'price.'.$ext);
		chmod(base_path().'/public/price/price.'.$ext, 0777);
		return ['status' => 'OK','name' => 'price.'.$ext];
	}
	public function priceSend(Request $request){
		$mail = $request->input('mail');
		$block = $this->queryAgent->getBlock('fidback',[],[]);
		$file = $this->queryAgent->getGroupItem('catalog_block','category_1',51);
		//------------------
		try{
			$inqueue  = $block->inqueue_field;
			if(!$inqueue)
			{
				$inqueue = config('fidback')['inqueue'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$inqueue = config('fidback')['inqueue'];
		}
		//------------------

		try{
			$mailto  = $block->mail_rec_field;
			if(!$mailto)
			{
				$mailto = config('fidback')['mail_rec'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$mailto = config('fidback')['mail_rec'];
		}
		//------------------
		try{
			$mailto_copy1  = $block->mail_rec_copy1_field;
			if(!$mailto_copy1)
			{
				$mailto_copy1 = config('fidback')['mail_rec_copy1'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$mailto_copy1 = config('fidback')['mail_rec_copy1'];
		}
		//------------------
		try{
			$mailto_copy2  = $block->mail_rec_copy2_field;
			if(!$mailto_copy2)
			{
				$mailto_copy2 = config('fidback')['mail_rec_copy2'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$mailto_copy2 = config('fidback')['mail_rec_copy2'];
		}
		//------------------
		try{
			$mailto_copy3  = $block->mail_rec_copy3_field;
			if(!$mailto_copy3)
			{
				$mailto_copy3 = config('fidback')['mail_rec_copy3'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$mailto_copy3 = config('fidback')['mail_rec_copy3'];
		}
		//------------------

		try{
			$username  = $block->mail_username_field;
			if(!$username)
			{
				$username = config('fidback')['mail_username'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$username = config('fidback')['mail_username'];
		}
		//------------------
		try{
			$site_name  = $block->site_name_field;
			if(!$site_name)
			{
				$site_name = config('fidback')['site_name'];
			}
		}catch(WrongBlockFieldNameException $exc){
			$site_name = config('fidback')['site_name'];
		}
		Mail::send('back/mail/price',
			['item'=> []],
			function($message) use ($username, $mail, $mailto_copy1, $mailto_copy2,$file,$mailto_copy3, $site_name)
			{
				$message->from($username, $site_name);
				$message->to($mail);
				$message->attach(base_path().'/public/price/'.$file->price_name_field);
				$message->subject('Прайс-лист'.$site_name);
			});
		return ['status' => 'OK'];
	}
}

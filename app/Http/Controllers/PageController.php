<?php namespace App\Http\Controllers;

use App\Rating;
use Interpro\QuickStorage\Concept\QueryAgent;

class PageController extends Controller{


	private $queryAgent;
	private $course;
	function __construct(QueryAgent $queryAgent){
		$this->queryAgent = $queryAgent;
		$this->course = $this->queryAgent->getBlock('clients_filter',[],[]);
		$static = $this->queryAgent->getBlock('static_site',[],[]);
		$menu 	= $this->queryAgent->getBlock('main_menu',[],[]);
		$menu_link = ['/catalog','/automatic','/soft','/showcase','/accounting','/video'];

		$catalog = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>51]]);

		$showcase = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>52]]);

		$video = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],['category_2'=>['owner_id'=>53]]);

		$auto = $this->queryAgent->getGroupFlat('auto_block','auto',[],[]);

		$soft = $this->queryAgent->getGroupFLat('catalog_block','product',[],['category_2'=>['owner_id'=>55]]);
		$acc = $this->queryAgent->getGroupFlat('accounting_block','tarif_category',[],[]);


		$menu_popup = [$catalog, $auto, $soft, $showcase, $acc, $video];
		view()->share('static', $static);
		view()->share('menu', 	$menu);
		view()->share('link', 	$menu_link);
		view()->share('m_popup', 	$menu_popup);
	}

	public function getIndex(){
        $rating = new Rating();
        $rating = $rating->getRatingView('/');
		$catalog = $this->queryAgent->getGroupItem('catalog_block','category_1',51);
		$showcase = $this->queryAgent->getGroupItem('catalog_block','category_1',52);
		$video = $this->queryAgent->getGroupItem('catalog_block','category_1',53);
		$auto = $this->queryAgent->getBlock('auto_block',[],[]);
		$soft = $this->queryAgent->getGroupItem('catalog_block','category_1',54);
		$acc = $this->queryAgent->getBlock('accounting_block',[],[]);
		$iiko = $this->queryAgent->getGroupFlat('auto_block','auto',[],['auto'=>['is_iiko'=>true]]);
		$acc_menu = $this->queryAgent->getGroupFlat('auto_block','auto',[],['auto'=>['is_iiko'=>false]]);
		$clients = $this->queryAgent->getGroupFlat('clients_block','client',[],[],['client' => ['take'=> 20, 'skip'=> 0]]);;
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		$wipon = $this->queryAgent->getBlock('wipon',[],[]);
		return view('front.index.index',[
			'catalog' => $catalog,
			'auto'	  => $auto,
			'video'	  => $video,
			'soft'	  => $soft,
			'wipon'	  => $wipon,
			'buh'	  => $acc,
			'showcase'=> $showcase,
			'iiko'	  => $iiko,
			'acc_m'	  => $acc_menu,
			'client'  => $clients,
			'filter'  => $filter,
            'rating'  => $rating
        ]);
	}


	public function getClients(){
		$rating = new Rating();
		$rating = $rating->getRatingView('/clients');
		$seo = $this->queryAgent->getBlock('clients_block',[],[]);
		$client_all = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		$all = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$i = 0;
		$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],[]);
		foreach($filter->institution_group as $item){
			$i++;
			$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],['client'=>['institution_type' => $item->id_field]]);
			$clients_type[$i] = $clients_type[$i]->count();
		}
		$city = 'all';
		$inst = 'all';
		return view('front.clients.all-clients.clients',[
			'all_c'    => $client_all,
			'all_all' => $all,
			'filter' => $filter,
			'counts' => $clients_type,
			'city'	 => $city,
			'inst'	 => $inst,
			'seo_c' 	 => $seo,
			'rating' 	=> $rating
		]);
	}

	public function getClientsFilter($city, $inst){
		$i = 0;
		$rating = new Rating();
		$rating = $rating->getRatingView('/clients');
		$all = $this->queryAgent->getGroup('clients_block','client',[],[]);
		$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],[]);
		if($city != 'all' && $inst != 'all'){
			$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['city_name'=>$city, 'institution_type' => $inst]  ]);
		} else if($inst != 'all'){
			$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['institution_type' => $inst]  ]);
		} else if( $city != 'all'){
			$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['city_name'=>$city]  ]);
		}else{
			$all_clients =	$this->queryAgent->getGroup('clients_block','client',[],[]);
		}
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);
		foreach($filter->institution_group as $item){
			$i++;
			$clients_type[$i] = $this->queryAgent->getGroup('clients_block','client',[],['client'=>['institution_type' => $item->id_field]]);
			$clients_type[$i] = $clients_type[$i]->count();
		}
		$seo = $this->queryAgent->getBlock('clients_block',[],[]);
		return view('front.clients.all-clients.clients',[
			'all_c'    => $all_clients,
			'all_all'  => $all,
			'filter' => $filter,
			'counts' => $clients_type,
			'city'  => $city,
			'inst'	=> $inst,
			'seo_c' 	 => $seo,
			'rating'	=> $rating
		]);
	}
	public function getClientItem($slug){
		$client = $this->queryAgent->getGroupItemBySlug('clients_block','client',$slug);
		$all_clients = $this->queryAgent->getGroupFlat('clients_block','client',[],['client' => ['institution_type' => $client->institution_type_field]  ]);
		$filter = $this->queryAgent->getBlock('clients_filter',[],[]);

		$test = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
		$category = $this->queryAgent->getGroupFlat('catalog_block','category_2',[],[]);
        foreach($test as $item) {
            foreach ($this->course->course_group as $item_c) {
                if ($item_c->id_field == $item->course_id_field) {
                    $cost = $item->product_cost_field * $item_c->course_field;
                    $sale = $item->product_sale_field * $item_c->course_field;
                    $item->setField('product_cost', $cost);
                    $item->setField('product_sale', $sale);
                }
            }
        }
		$rating = new Rating();
		$rating = $rating->getRatingView('/clients/'.$slug);
		// Генерация ссылки на товар исходя из принадлежности к группе
		foreach($test as $item){
			foreach($category as $c_item){
				if($item->owner_id_field == $c_item->id_field){
					switch($c_item->owner_id_field){
						case 51:
							$item->setField('title','/catalog/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
						case 52:
							$item->setField('title','/showcase/'.$c_item->slug_field.'/'.$item->slug_field);
							break;

						case 53:
							$item->setField('title','/video/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
						case 54:
							$item->setField('title','/soft/'.$c_item->slug_field.'/'.$item->slug_field);
							break;
					}
				}
			}
		}
			return view('front.clients.client-item.client-item',[
			'client' => $client,
			'filter' => $filter,
			'all'	 => $all_clients,
			'product'	=> $test,
			'rating'	=> $rating
		]);
	}

	public function getInfPage($slug){
		$rating = new Rating();
		$rating = $rating->getRatingView('/inf/'.$slug);
        $all_pages = $this->queryAgent->getGroupFlat('information_page','inf_page',[],[]);
        $about_page = $this->queryAgent->getBlock('about_page',[],[]);

        if ($slug == 'about') {
            return view('front.information.about',[
                'about' => $about_page,
                'all' => $all_pages,
                'rating'	=> $rating
            ]);
		} else {
            $inf_page = $this->queryAgent->getGroupItemBySlug('information_page','inf_page',$slug);
            $page_name = $about_page->page_name_field;
            return view('front.information.information-page',[
                'inf' => $inf_page,
                'page_name' => $page_name,
                'all' => $all_pages,
                'rating'	=> $rating
            ]);
		}
	}


}

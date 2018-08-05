<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rating;
use Interpro\QuickStorage\Concept\QueryAgent;

class CatalogController extends Controller
{


    private $queryAgent;
    private $course;

    function __construct(QueryAgent $queryAgent)
    {

        $this->queryAgent = $queryAgent;
        $this->course = $this->queryAgent->getBlock('clients_filter', [], []);
        $static = $this->queryAgent->getBlock('static_site', [], []);
        $menu = $this->queryAgent->getBlock('main_menu', [], []);
        $menu_link = ['/catalog', '/automatic', '/soft', '/showcase', '/accounting', '/video'];

        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 51]]);

        $showcase = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 52]]);

        $video = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 53]]);

        $auto = $this->queryAgent->getGroupFlat('auto_block', 'auto', [], []);

        $soft = $this->queryAgent->getGroupFLat('catalog_block', 'product', [], ['category_2' => ['owner_id' => 54]]);
        $acc = $this->queryAgent->getGroupFlat('accounting_block', 'tarif_category', [], []);


        $menu_popup = [$catalog, $auto, $soft, $showcase, $acc, $video];
        view()->share('static', $static);
        view()->share('menu', $menu);
        view()->share('link', $menu_link);
        view()->share('m_popup', $menu_popup);
    }


    //==================================================================
    //=== ******************************************** =================
    //=== Список категорий каталога\ стеллажей \ видео =================
    //=== ******************************************** =================
    //==================================================================
    public function getCatalog()
    {
        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 51, 'show' => 1]]);
        $seo = $this->queryAgent->getGroupItem('catalog_block', 'category_1', 51);
        $rating = new Rating();
        $rating = $rating->getRatingView('/catalog');
        return view('front.catalog.all_category.catalog', [
            'category_1' => $catalog,
            'seo' => $seo,
            'rating' => $rating
        ]);
    }



    //==================================================================
    //=== ******************************************** =================
    //=== Автоматизация оборудования \ Готовые решения =================
    //=== ******************************************** =================
    //==================================================================
    public function getCategory($slug)
    {
        $catalog = $this->queryAgent->getGroupItemBySlug('catalog_block', 'category_2', $slug);
        $sorting = $this->queryAgent->getGroupFlat('catalog_block', 'product', ['product' =>['sorter' => 'ASC']], ['product' => ['owner_id' => $catalog->id_field]]);
        foreach ($sorting as $item) {
            if ($item->course_id_field != 0) {
                foreach ($this->course->course_group as $item_c) {
                    if ($item_c->id_field == $item->course_id_field) {
                        $cost = $item->product_cost_field * $item_c->course_field;
                        $sale = $item->product_sale_field * $item_c->course_field;
                        $item->setField('product_cost', $cost);
                        $item->setField('product_sale', $sale);
                    }
                }
            }
        }
        $rating = new Rating();
        $rating = $rating->getRatingView('/catalog/'.$slug);
        return view('front.catalog.category.category', [
            'products' => $catalog,
            'sort_list' => $sorting,
            'rating'   => $rating
        ]);
    }

    public function getShowcaseCategory()
    {
        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 52, 'show' => 1]]);
        $seo = $this->queryAgent->getGroupItem('catalog_block', 'category_1', 52);
        $rating = new Rating();
        $rating = $rating->getRatingView('/showcase');
        return view('front.catalog.category.video', [
            'category_1' => $catalog,
            'seo' => $seo,
            'rating' => $rating
        ]);
    }

    public function getVideoCategory()
    {
        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 53, 'show' => 1]]);
        $seo = $this->queryAgent->getGroupItem('catalog_block', 'category_1', 53);
        $rating = new Rating();
        $rating = $rating->getRatingView('/video');
        return view('front.catalog.category.video', [
            'category_1' => $catalog,
            'seo' => $seo,
            'rating' => $rating
        ]);
    }

    public function getSoftCategory()
    {
        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 54, 'show' => 1]]);
        $seo = $this->queryAgent->getGroupItem('catalog_block', 'category_1', 54);
        $rating = new Rating();
        $rating = $rating->getRatingView('/soft');
        return view('front.catalog.category.soft', [
            'category_1' => $catalog,
            'seo' => $seo,
            'rating' => $rating
        ]);
    }

    //=====================================================


    public function getAccounting()
    {
        $test = $this->queryAgent->getBlock('accounting_block', [], []);
        $rating = new Rating();
        $rating = $rating->getRatingView('/accounting');
        return view('front.accounting.accounting', [
            'account' => $test,
            'rating'  => $rating
        ]);
    }

    public function getTarif($slug)
    {

        $tarif = $this->queryAgent->getGroupItemBySlug('accounting_block', 'tarif', $slug);
        $all_tarif = $this->queryAgent->getGroupFlat('accounting_block', 'tarif_category', [], []);
        $rating = new Rating();
        $rating = $rating->getRatingView('/accounting/'.$slug);
        return view('front.accounting.tarifs.tarif', [
            'tarif' => $tarif,
            'all_tarif' => $all_tarif,
            'rating'    => $rating
        ]);
    }

    public function getVideo()
    {
        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 51]]);
        $seo = $this->queryAgent->getGroupItem('catalog_block', 'category_1', 51);
        return view('front.catalog.all_category.catalog', [
            'category_1' => $catalog,
            'seo' => $seo
        ]);
    }

    public function getShowcase()
    {
        $catalog = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => 51]]);
        $seo = $this->queryAgent->getGroupItem('catalog_block', 'category_1', 51);
        return view('front.catalog.all_category.catalog', [
            'category_1' => $catalog,
            'seo' => $seo
        ]);
    }


    public function getProduct($category, $product, Request $request)
    {
        $product = $this->queryAgent->getGroupItemBySlug('catalog_block', 'product', $product);
        if ($product->course_id_field != 0) {
            foreach ($this->course->course_group as $item) {
                if ($item->id_field == $product->course_id_field) {
                    $cost = $product->product_cost_field * $item->course_field;
                    $sale = $product->product_sale_field * $item->course_field;
                    $product->setField('product_cost', $cost);
                    $product->setField('product_sale', $sale);
                }
            }
        }
        $rating = new Rating();
        $rating = $rating->getRatingView('/'.$request->path());
        $parent = $this->queryAgent->getGroupItem('catalog_block', 'category_2', $product->owner_id_field);
        $grand_parent = $this->queryAgent->getGroupItem('catalog_block', 'category_1', $parent->owner_id_field);
        switch ($grand_parent->id_field) {
            case 51:
                $grand_parent->setField('slug', 'catalog');
                break;
            case 52:
                $grand_parent->setField('slug', 'showcase');
                break;
            case 53:
                $grand_parent->setField('slug', 'video');
                break;
            case 54:
                $grand_parent->setField('slug', 'soft');
                break;
        }

        $auto = $this->queryAgent->getGroupFlat('auto_block', 'auto', [], []);
        $test = $this->queryAgent->getGroupFlat('catalog_block', 'product', [], []);
        $category = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], []);
        foreach ($test as $item) {
            if ($item->course_id_field != 0) {
                foreach ($this->course->course_group as $item_c) {
                    if ($item_c->id_field == $item->course_id_field) {
                        $cost = $item->product_cost_field * $item_c->course_field;
                        $sale = $item->product_sale_field * $item_c->course_field;
                        $item->setField('product_cost', $cost);
                        $item->setField('product_sale', $sale);
                    }
                }
            }
        }
        // Генерация ссылки на товар исходя из принадлежности к группе
        foreach ($test as $item) {
            foreach ($category as $c_item) {
                if ($item->owner_id_field == $c_item->id_field) {
                    switch ($c_item->owner_id_field) {
                        case 51:
                            $item->setField('title', '/catalog/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;
                        case 52:
                            $item->setField('title', '/showcase/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;

                        case 53:
                            $item->setField('title', '/video/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;
                        case 54:
                            $item->setField('title', '/soft/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;
                    }
                }
            }
        }
        $soft = $this->queryAgent->getGroupFlat('catalog_block', 'product', [], ['product' => ['owner_id' => 55]]);
        return view('front.catalog.product.product', [
            'product' => $product,
            'auto' => $auto,
            'soft' => $soft,
            'prod' => $test,
            'parent' => $parent,
            'grand' => $grand_parent,
            'rating'=> $rating
        ]);
    }
    //==================================================================
    //=== ******************************************** =================
    //=== Автоматизация оборудования \ Готовые решения =================
    //=== ******************************************** =================
    //==================================================================
    public function getAuto($slug)
    {
        $rating = new Rating();
        $rating = $rating->getRatingView('/automatic/'.$slug);
        $auto = $this->queryAgent->getGroupItemBySlug('auto_block', 'auto', $slug);
        $clients_count = $this->queryAgent->getGroupCount('clients_block', 'client', ['client' => ['institution_type' => $auto->institution_id_field]]);
        if ($auto->course_id_field != 0) {
            foreach ($this->course->course_group as $item) {
                if ($item->id_field == $auto->course_id_field) {
                    $cost = $auto->auto_cost_field * $item->course_field;
                    $sale = $auto->auto_sale_field * $item->course_field;
                    $auto->setField('auto_cost', $cost);
                    $auto->setField('auto_sale', $sale);
                }
            }
        }
        $all = $this->queryAgent->getGroupFlat('auto_block', 'auto', [], []);
        $test = $this->queryAgent->getGroupFlat('catalog_block', 'product', [], []);
        $category = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], []);
        foreach ($test as $item) {
            if ($item->course_id_field != 0) {
                foreach ($this->course->course_group as $item_c) {
                    if ($item_c->id_field == $item->course_id_field) {
                        $cost = $item->product_cost_field * $item_c->course_field;
                        $sale = $item->product_sale_field * $item_c->course_field;
                        $item->setField('product_cost', $cost);
                        $item->setField('product_sale', $sale);
                    }
                }
            }
        }


        // Генерация ссылки на товар исходя из принадлежности к группе
        foreach ($test as $item) {
            foreach ($category as $c_item) {
                if ($item->owner_id_field == $c_item->id_field) {
                    switch ($c_item->owner_id_field) {
                        case 51:
                            $item->setField('title', '/catalog/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;
                        case 52:
                            $item->setField('title', '/showcase/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;

                        case 53:
                            $item->setField('title', '/video/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;
                        case 54:
                            $item->setField('title', '/soft/' . $c_item->slug_field . '/' . $item->slug_field);
                            break;
                    }
                }
            }
        }

        return view('front.catalog.automatic.automatic', [
            'auto' => $auto,
            'all' => $all,
            'clients_count' => $clients_count,
            'prod' => $test,
            'rating' => $rating
        ]);
    }


    /* Rosta */
    public function getRosta()
    {
        $rating = new Rating();
        $rating = $rating->getRatingView('/rosta');
        $wipon = $this->queryAgent->getBlock('wipon',[],[]);

        return view('front.rosta.rosta', [
            'wipon' => $wipon,
            'rating' => $rating
        ]);
    }
}







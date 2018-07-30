<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Interpro\QuickStorage\Concept\QueryAgent;
use Maatwebsite\Excel\Facades\Excel;

class Generatexls extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'Generatexls';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate xls file with all products';

    private $queryAgent;

    /**
     * Create a new console command instance.
     *
     * @return void
     */
    public function __construct(QueryAgent $queryAgent){
        parent::__construct($this->name);

        $this->queryAgent = $queryAgent;

        // We will go ahead and set the name, description, and parameters on console
        // commands just to make things a little easier on the developer. This is
        // so they don't have to all be manually specified in the constructors.
        $this->setDescription($this->description);

        $this->specifyParameters();
    }

    /**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle()
	{

        Excel::create('GOOGLE', function($excel) {

            $excel->sheet('google_price', function(\PHPExcel_Worksheet $sheet) {


                $course = $this->queryAgent->getBlock('clients_filter', [], []);

                $categories = $this->queryAgent->getGroupFlat('catalog_block', 'category_2', [], ['category_2' => ['owner_id' => [51, 53, 54]]]);

                $sheet->setWidth(array(
                    'A'     =>  5,
                    'B'     =>  40,
                    'C'     =>  40,
                    'D'     =>  40,
                    'E'     =>  40,
                ));
                $sheet->setHeight(1, 20);
                $sheet->cells('A1:G1', function($cells) {
                    $cells->setFontWeight('bold');
                    $cells->setFontSize(12);
                    $cells->setBackground('#5fba7d');
                });

                $sheet->row(1, array(
                    'ID', 'Item title', 'Item description', 'Final URL', 'Image URL', 'Price', 'Sale price'
                ));

                $i = 2;
                $rate = 1;
                foreach ($categories as $category) {
                    if (!$category->show_field) {
                        continue;
                    }

                    foreach ($category->product_group as $item) {
                        if (!$item->show_field) {
                            continue;
                        }

                        if ($item->course_id_field != 0) {
                            foreach ($course->course_group as $item_c) {
                                if ($item_c->id_field == $item->course_id_field) {
                                    $rate = $item_c->course_field;
                                }
                            }
                        }

                        $baseUrl = 'https://idsoft.kz/';
                        $url = $baseUrl;
                        switch ($category->owner_id_field) {
                            case 51:
                                $url .= 'catalog/';
                                break;
                            case 53:
                                $url .= 'video/';
                                break;
                            case 54:
                                $url .= 'soft/';
                                break;
                        }
                        $sheet->row($i++, array(
                            $item->id_field,
                            $item->product_name_field,
                            $item->small_description_field,
                            $url . $category->slug_field . '/' . $item->slug_field,
                            $baseUrl . 'images/' . $item->product_base_photo_image->catalog_crop->link,
                            $item->product_cost_field ? $item->product_cost_field * $rate . ' KZT': '',
                            $item->product_sale_field ? $item->product_sale_field * $rate . ' KZT': '',
                        ));
                    }
                }
            });

        })->store('xls');

	}

}

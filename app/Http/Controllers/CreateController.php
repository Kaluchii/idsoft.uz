<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Interpro\QuickStorage\Concept\Exception\WrongBlockFieldNameException;
use Interpro\QuickStorage\Laravel\QueryAgent;
use Interpro\QuickStorage\Concept\Command\CreateGroupItemCommand;
use Interpro\QuickStorage\Concept\Command\Crop\InitOneGroupCropCommand;
use Interpro\QuickStorage\Laravel\Item\GroupItem;

use Illuminate\Http\Request;

class CreateController extends Controller {

    private $queryAgent;
    function __construct(QueryAgent $queryAgent){
        $this->queryAgent = $queryAgent;
    }
    public function createGroupItem($block, $group, $owner_id)
    {
        try {

            $dataArr = $this->dispatch(new CreateGroupItemCommand($block, $group, $owner_id));

            $this->dispatch(new InitOneGroupCropCommand($block, $group, $dataArr['id']));

            $group_item = new GroupItem($dataArr);

            $soft =         $this->queryAgent->getGroupFlat('catalog_block','product',[],['product'=>['owner_id' => 55]]);
            $all_products = $this->queryAgent->getGroupFlat('catalog_block','product',[],[]);
            $auto = 		$this->queryAgent->getGroupFlat('auto_block','auto',[],[]);

//            dd($all_products);
            $complhtml = view('back/blocks/groupitems/'.$block.'/'.$group, [
                'item_'.$group => $group_item,
                'related'   => $all_products,
                'auto'      => $auto,
                'soft'      => $soft])->render();


            $status = 'OK';

            return compact('status', 'complhtml');

        } catch(\Exception $exception) {

            return ['status'=>('Что-то пошло не так. '.$exception->getMessage())];
        }
    }

    public function saveFile(Request $request)
    {
        $files_dir = public_path('files');


        $original_name = $request->file('file')->getClientOriginalName();

        $link = '/files/'.$original_name;
        $chmod = $files_dir.'/'.$original_name;

        $request->file('file')->move(
            $files_dir,
            $original_name
        );

        chmod($chmod, 0644);

        //$this->fSaver->save([['entity_name' => $entity_name, 'entity_id' => $entity_id, 'name' => $name, 'value' => $link]]);

        return ['status' => 'OK','link' =>  $link];
    }

}
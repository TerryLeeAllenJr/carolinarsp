<?php
/**
 * App\ViewComposers\HomeComposer.php
 */
namespace App\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Lib\Cms\CmsClient;

/**
 * Class HomeComposer
 * Provides data for the Home Page.
 * @package App\ViewComposers
 */
class GlobalComposer extends AbstractComposer
{
    /**
     * HomeComposer|compose()
     * The compose method is called each time a view is rendered.
     * @param View $view
     */
    public function compose(View $view) {
        $client = new CmsClient();
        $contactInfo = $client->get('/api/v1/globals/contactInfo');
        $view->with('contactInfo',$contactInfo);
    }

}


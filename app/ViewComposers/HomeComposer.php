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
class HomeComposer extends AbstractComposer
{
    /**
     * HomeComposer|compose()
     * The compose method is called each time a view is rendered.
     * @param View $view
     */
    public function compose(View $view) {

        $client = new CmsClient();
        $recentWork = $client->get('/api/v1/recentWork/');

        $view->with('recentWork', $recentWork->data);

        // Parse any data passed in when instantiating the view. Do this last to allow view based overrides.
        $this->renderViewData( $view );
    }

}


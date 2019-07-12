<?php
/**
 * App\ViewComposers\HomeComposer.php
 */
namespace App\ViewComposers;

use Illuminate\Contracts\View\View;

/**
 * Class AboutUsComposer
 * Provides data for the Home Page.
 * @package App\ViewComposers
 */
class AboutUsComposer extends AbstractComposer
{
    /**
     * AboutUsComposer|compose()
     * The compose method is called each time a view is rendered.
     * @param View $view
     */
    public function compose(View $view) {


        // Parse any data passed in when instantiating the view. Do this last to allow view based overrides.
        $this->renderViewData( $view );
    }

}


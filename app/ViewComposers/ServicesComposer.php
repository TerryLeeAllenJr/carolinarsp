<?php
/**
 * App\ViewComposers\ServicesComposer.php
 */
namespace App\ViewComposers;

use Illuminate\Contracts\View\View;

/**
 * Class ServicesComposer
 * Provides data for the Home Page.
 * @package App\ViewComposers
 */
class ServicesComposer extends AbstractComposer
{
    /**
     * HomeComposer|compose()
     * The compose method is called each time a view is rendered.
     * @param View $view
     */
    public function compose(View $view) {


        // Parse any data passed in when instantiating the view. Do this last to allow view based overrides.
        $this->renderViewData( $view );
    }

}


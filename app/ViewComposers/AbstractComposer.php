<?php
/**
 * App\ViewComposers\AbstractComposer.php
 */
namespace App\ViewComposers;

use Illuminate\Contracts\View\View;

/**
 * Class AbstractComposer
 * @package App\ViewComposers
 */
abstract class AbstractComposer
{


    /**
     * Includes any manual parameters called when using the view.
     * @param View $view
     */
    protected function renderViewData(View $view)
    {
        // Get the viiew data passed from the route or controller.
        $data = $view->getData();

        foreach( $data AS $key => $value ) {
            $view->with($key, $value);
        }

    }

}

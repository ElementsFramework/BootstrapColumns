<?php


namespace ElementsFramework\Elements\BootstrapColumns;


use ElementsFramework\Layout\Contract\UIElement;
use Illuminate\View\View;

class Col6Col6BootstrapColumnElement extends UIElement
{

    /**
     * Namespace of the package the element is published in definition.
     * @var string
     */
    private $namespace = "BootstrapColumns";

    /**
     * User readable name of the UI element that will be shown in the builder.
     * @var string
     */
    private $name = "1/2 & 1/2 columns";

    /**
     * HTML element that renders the icon that is shown for the element in the builder.
     * NOTE: Please use Font awesome for any publicly available elements.
     * @var string
     */
    private $icon = "<i class=\"fa fa-columns\"></i>";

    /**
     * Sets the template that will be rendered inside of this UI element.
     * This is usually used for wrapper elements (containing other elements in them).
     * For more details visit https://github.com/ElementsFramework/LayoutBuilderUI
     * @var string
     */
    private $content = <<<HTML
<div class="row" slot="content" v-if="elementDefinition.contentData">
  <div class="col-md-6">
    <draggable class="draggable" :options="dragOptions" container-id="col1"
               :list="elementDefinition.contentData.col1">
      <ui-element v-for="l in elementDefinition.contentData.col1" v-if="l !== undefined" :key="l.id" :elementDefinition.sync="l">
      </ui-element>
    </draggable>
  </div>
  <div class="col-md-6">
    <draggable class="draggable" :options="dragOptions" container-id="col2"
               :list="elementDefinition.contentData.col2">
      <ui-element v-for="l in elementDefinition.contentData.col2" v-if="l !== undefined" :key="l.id" :elementDefinition.sync="l">
      </ui-element>
    </draggable>
  </div>
</div>
HTML;

    /**
     * This array contains the default content data definition that will be rendered on init.
     * This is usually used for wrapper elements (containing other elements in them).
     * For more details visit https://github.com/ElementsFramework/LayoutBuilderUI
     * @var array
     */
    private $contentData = [
        'col1' => [],
        'col2' => [],
    ];

    /**
     * Settings definition array that defines the settings form schema.
     * For more details visit https://github.com/ElementsFramework/LayoutBuilderUI
     * @var array
     */
    private $settingsDefinition = null;

    /**
     * Allows you to pass data to the view when it gets rendered.
     * @param View $view
     */
    public static function renderViewComposer($app, View $view)
    {
        // TODO: Implement renderViewComposer() method.
    }

    /**
     * Returns the view name this element renders.
     * @return string
     */
    public static function getViewName()
    {
        return "BootstrapColumns::col6-col-6";
    }
}
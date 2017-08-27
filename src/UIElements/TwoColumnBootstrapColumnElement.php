<?php


namespace ElementsFramework\Elements\BootstrapColumns\UIElements;


use ElementsFramework\Layout\Contract\UIElement;
use Illuminate\View\View;

class TwoColumnBootstrapColumnElement extends UIElement
{

    /**
     * Namespace of the package the element is published in definition.
     * @var string
     */
    protected $namespace = 'BootstrapColumns';

    /**
     * User readable name of the UI element that will be shown in the builder.
     * @var string
     */
    protected $name = '2 columns';

    /**
     * HTML element that renders the icon that is shown for the element in the builder.
     * NOTE: Please use Font awesome for any publicly available elements.
     * @var string
     */
    protected $icon = "<i class=\"fa fa-columns\"></i>";

    /**
     * Sets the template that will be rendered inside of this UI element.
     * This is usually used for wrapper elements (containing other elements in them).
     * For more details visit https://github.com/ElementsFramework/LayoutBuilderUI
     * @var string
     */
    protected $content = <<<HTML
<div class="row" slot="content" v-if="elementDefinition.contentData">
  <div :class="['col-md-' + elementDefinition.settings.content.column_1_width]">
    <draggable class="draggable" :options="dragOptions" container-id="col1"
               :list="elementDefinition.contentData.col1">
      <ui-element v-for="l in elementDefinition.contentData.col1" v-if="l !== undefined" :key="l.id" :elementDefinition.sync="l">
      </ui-element>
    </draggable>
  </div>
  <div :class="['col-md-' + elementDefinition.settings.content.column_2_width]">
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
    protected $contentData = [
        'col1' => [],
        'col2' => [],
    ];

    /**
     * Settings definition array that defines the settings form schema.
     * For more details visit https://github.com/ElementsFramework/LayoutBuilderUI
     * @var array
     */
    protected $settingsDefinition = [
        'content' => [
            'column_1_width' => 6,
            'column_2_width' => 6,
        ],
        'definition' => [
            'fields' => [
                [
                    'type' => 'input',
                    'inputType' => 'number',
                    'label' => 'Column 1 width',
                    'model' => 'column_1_width',
                    'min' => 1,
                    'max' => 12,
                    'validator' => 'VueFormGenerator.validators.number'
                ],
                [
                    'type' => 'input',
                    'inputType' => 'number',
                    'label' => 'Column 2 width',
                    'model' => 'column_2_width',
                    'min' => 1,
                    'max' => 12,
                    'validator' => 'VueFormGenerator.validators.number'
                ],
            ],
        ],
    ];

    /**
     * Allows you to pass data to the view when it gets rendered.
     * @param View $view
     */
    public static function renderViewComposer(View $view)
    {
        /** @var UIElement $element */
        $element = $view->getData()['element'];
        $view->with('options', $element->getOptions());
        $view->with('col1', $element->getContentData()['col1']);
        $view->with('col2', $element->getContentData()['col2']);
    }

    /**
     * Returns the view name this element renders.
     * @return string
     */
    public static function getViewName()
    {
        return 'BootstrapColumns::two-columns';
    }
}
<?php namespace Sandbox\Address\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * MapPicker Form Widget
 */
class MapPicker extends FormWidgetBase
{
    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'sandbox_address_map_picker';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('mappicker');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/mappicker.css', 'sandbox.address');
        $this->addJs('js/mappicker.js', 'sandbox.address');
        $this->addJs('https://unpkg.com/vue-yandex-maps', 'sandbox.address');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($value)
    {
        return $value;
    }
}

<?php
namespace Assets;

class AssetsDirective {
    /**
     * Manifest file to read
     */
    protected $manifest_files = '';
    /**
     * CRA generated assets
     */
    protected $assets = [];
    protected $css_regex = '/css/';
    protected $js_regex = '/js/';
    protected $exclude = '/(map|html)/';
    function __constructor() {
        $this->public_path = public_path('assets-manifest.json');
        $this->manifest_file = file_get_contents($this->public_path));
        $this->assets_array = json_decode($this->manifest_file, true);
        $this->assets = collect($assets_array)->reject(function ($key, $value) {
            return preg_match($this->exclude, $key);
        });
    }
    public function css($to_pluck) {
        $css = $this.assets.reject((function($key, $value) {
            return preg_match(this->js_regex);
        }));
        dd($css);
    }
    public function js($to_pluck) {
        $js = $this->assets->reject((function($key, $value) {
            return preg_match(this->css_regex);
        }));
        dd($js);
    }
}

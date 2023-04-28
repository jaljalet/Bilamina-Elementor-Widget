<?php
namespace Elementor;

class Bilamina_Hover_Card_Widget extends Widget_base {
     public function get_name() {
         return 'bew-hover-card-widget-id';
     }

     public function get_title() {
         return esc_html__('Hover Card Widget', 'bilamina-elementor-widget');
     }

     public function get_script_depends() {
         return [
             'bew-script'
         ];
     }

     public function get_icon() {
         return '';
     }

     public function get_categories() {
         return [
             'bew-for-elementor'
         ];
     }

     public function _register_controls() {
         // Content Settings
         $this->start_controls_section(
             'content_section',
             [
                 'label' => __('Content Settings', 'bilamina-elementor-widget'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
             ]
         );
         $this->end_controls_section();

        // Style Tab
        $this->style_tab();
     }

     private function style_tab() {

     }

     protected function render() {
        $mywe_values = $this->get_settings_for_display();
        ?>
        <div>
            <h1> This is example widget.</h1>
        </div>
        <?php
     }

     protected function content_template() {

     }
}
Plugin::instance()->widgets_manager->register_widget_type(new Bilamina_Hover_Card_Widget());

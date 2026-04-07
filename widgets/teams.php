<?php 

    class Elementor_Teams_Widget extends \Elementor\Widget_Base {

        public function get_name() {
		    return 'awesome_team_widget';
        }

        public function get_title() {
            return esc_html__( 'Awesome Teams Widget', 'elementor-team' );
        }

        public function get_icon() {
            return 'eicon-user-circle-o';
        }

        public function get_categories() {
            return [ 'awesome-team-category' ];
        }

        public function get_keywords() {
            return [ 'awesome team' ];
        }

        public function get_custom_help_url() {
            return 'https://example.com/widget-name';
        }

        protected function register_controls(){

            $this->start_controls_section(
                'content_section',
                [
                    'label' => esc_html__( 'Content', 'elementor-team' ),
                    'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
                ]
		    );
            // Team-Layout//
            $this->add_control(
                'team_layout',
                [
                    'label' => esc_html__( 'Select Layout', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::SELECT,
                    'default' => 'team_style_1',
                    'options' => [
                        
                        'team_style_1' => esc_html__( 'Team Style 1', 'elementor-team' ),
                        'team_style_2'  => esc_html__( 'Team Style 2', 'elementor-team' ),
                        'team_style_3' => esc_html__( 'Team Style 3', 'elementor-team' ),
                        'team_style_4' => esc_html__( 'Team Style 4', 'elementor-team' ),
                        'team_style_5' => esc_html__( 'Team Style 5', 'elementor-team' ),
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .your-class' => 'border-style: {{VALUE}};',
                    ],
                ]
            );

            // Team_Image//
            $this->add_control(
                'team_image',
                [
                    'label' => esc_html__( 'Choose Image', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::MEDIA,
                    'default' => [
                        'url' => \Elementor\Utils::get_placeholder_image_src(),
                    ],
                ]
            );
            // Team Name//
            $this->add_control(
                'team_name',
                [
                    'label' => esc_html__( 'Team Name', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Seth Plamer', 'elementor-team' ),
                    'placeholder' => esc_html__( 'Type your name here', 'elementor-team' ),
                ]
            );
            // Team Desgination//
            $this->add_control(
                'team_designation',
                [
                    'label' => esc_html__( 'Team Degination', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Designer', 'elementor-team' ),
                    'placeholder' => esc_html__( 'Type your designation here', 'elementor-team' ),
                ]
            );

            // Team Social//
            $repeater = new \Elementor\Repeater();

            $repeater->add_control(
                'team_social_name',
                [
                    'label' => esc_html__( 'Team Social Name', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::TEXT,
                    'default' => esc_html__( 'Facebook' , 'elementor-team' ),
                    'label_block' => true,
                ]
            );
            $repeater->add_control(
                'team_social_icon',
                [
                    'label' => esc_html__( ' Social Icon', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::ICONS,
                    'default' => [
                        'value' => 'fas fa-circle',
					    'library' => 'fa-solid',
                    ]
                ]
                
            );

            $repeater->add_control(
                'team_social_link',
                [
                    'label' => esc_html__( 'Team Social Link', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::URL,
                    'options' => [ 'url', 'is_external', 'nofollow' ],
                    'default' => [
                        'url' => '',
                        'is_external' => true,
                        'nofollow' => true,
                        // 'custom_attributes' => '',
                    ],
                    'label_block' => true,
                ]
            );

            

            $this->add_control(
                'team_socials',
                [
                    'label' => esc_html__( 'Team Social List', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::REPEATER,
                    'fields' => $repeater->get_controls(),
                    'default' => [
                        [
                            'team_social_name' => esc_html__( 'Facebook', 'elementor-team' ),
                        ],
                        [
                            'team_social_name' => esc_html__( 'Twitter', 'elementor-team' ),
                            
                            
                        ],
                    ],
                    'title_field' => '{{{ team_social_name }}}',
                ]
            );

  

            $this->end_controls_section();

            // start_style_section///
            $this->start_controls_section(
                'team_title_section',
                [
                    'label' => esc_html__( 'Title', 'elementor-team' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );
            // title_typography//
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'team_title_typography',
                    'selector' => '{{WRAPPER}} .team-card .team-content h3, {{WRAPPER}} .team-info h3, {{WRAPPER}} .team-details-3 h3, {{WRAPPER}} .team-info-4 h3, {{WRAPPER}} .team-info-5 h3',
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_PRIMARY,
                    ],
                ]
            );
            // title_color//
            $this->add_control(
                'title_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content h3, {{WRAPPER}} .team-info h3, {{WRAPPER}} .team-details-3 h3, {{WRAPPER}} .team-info-4 h3, {{WRAPPER}} .team-info-5 h3' => 'color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
                    ]
                    
                ]
            );

            $this->end_controls_section();

            // team_designation//
            $this->start_controls_section(
                'team_desg_section',
                [
                    'label' => esc_html__( 'Designation', 'elementor-team' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );
            // designation_typography//
            $this->add_group_control(
                \Elementor\Group_Control_Typography::get_type(),
                [
                    'name' => 'team_desg_typography',
                    'selector' => '{{WRAPPER}} .team-card .team-content span, {{WRAPPER}} .team-info p, {{WRAPPER}} .team-details-3 span, {{WRAPPER}} .team-info-4 p, {{WRAPPER}} .team-info-5 span',
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Typography::TYPOGRAPHY_TEXT,
                    ],
                ]
            );
            // designation_color//
                $this->add_control(
                'designation_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content span, {{WRAPPER}} .team-info p, {{WRAPPER}} .team-details-3 span, {{WRAPPER}} .team-info-4 p, {{WRAPPER}} .team-info-5 span' => 'color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_TEXT,
                    ]
                    
                ]
            );


            $this->end_controls_section();

            // team_social//
            $this->start_controls_section(
                'team_social_section',
                [
                    'label' => esc_html__( 'Social', 'elementor-team' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                ]
            );
            // control-tabs//
            $this->start_controls_tabs(
                'style_tabs'
            );
            // normal_tabs//
            $this->start_controls_tab(
                'social_normal_tab',
                [
                    'label' => esc_html__( 'Normal', 'elementor-team' ),
                ]
            );
            // social_icon_color//
            $this->add_control(
                'social_icon_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a, {{WRAPPER}} .team-social a, {{WRAPPER}} .team-social-3 a' => 'color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_2', 'team_style_3' ],
                    ],
                    
                ]
            );
             // social_icon_4_color//
            $this->add_control(
                'social_icon_04_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-social-4 a, {{WRAPPER}} .team-social-5 li a' => 'color: {{VALUE}}',
                    ],
                    'default' => '#fff',
                    'condition' => [
                        'team_layout' => [ 'team_style_4', 'team_style_5' ],
                    ],
                    
                ]
            );
            // social_icon_background_color//
            $this->add_control(
                'social_icon_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a, {{WRAPPER}} .team-social-3 a' => 'background-color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3' ],
                    ],
                    
                ]
            );
            // social_icon_4_background_color//
            $this->add_control(
                'social_icon_04_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-social-4 a' => 'background-color: {{VALUE}}',
                    ],
                    'default' => 'rgba(255,255,255,0.2)',
                    'condition' => [
                        'team_layout' => [ 'team_style_4' ],
                    ],
                    
                ]
            );
            // social_icon_5_background_color//
            $this->add_control(
                'social_icon_05_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-social-5 li a' => 'background-color: {{VALUE}}',
                    ],
                    'default' => '#007bff',
                    'condition' => [
                        'team_layout' => [ 'team_style_5' ],
                    ],
                    
                ]
            );
            // social_icon_size//
            $this->add_control(
                'social_icon_size',
                [
                    'label' => esc_html__( 'Icon Size', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 14,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a, {{WRAPPER}} .team-social a, {{WRAPPER}} .team-social-4 a, {{WRAPPER}} .team-social-5 li a' => 'font-size: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            // social_icon_border_radius/
            $this->add_control(
                'social_icon_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a, {{WRAPPER}} .team-social-3 a, {{WRAPPER}} .team-social-4 a, {{WRAPPER}} .team-social-5 li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3', 'team_style_4', 'team_style_5' ],
                    ],
                ]
            );
            // social_icon_padding/
            $this->add_control(
                'social_icon_padding',
                [
                    'label' => esc_html__( 'Padding', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px' ],
                    'default' => [
                        'top' => 10,
                        'right' => 10,
                        'bottom' => 10,
                        'left' => 10,
                        'unit' => 'px',
                        'isLinked' => false,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a, {{WRAPPER}} .team-social-3 a, {{WRAPPER}} .team-social-4 a, {{WRAPPER}} .team-social-5 li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3', 'team_style_4', 'team_style_5' ],
                    ],
                ]
            );

            $this->end_controls_tab();
            // end normal_tabs//

            // start-hover-tabs
            $this->start_controls_tab(
                'social_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'elementor-team' ),
                ]
            );
            // social_icon_hover_color//
            $this->add_control(
                'social_icon_hover_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a:hover, {{WRAPPER}} .team-social a:hover, {{WRAPPER}} .team-social-3 a:hover' => 'color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_2', 'team_style_3' ],
                    ],
                    
                ]
            );
             // social_icon_4_hover_color//
            $this->add_control(
                'social_icon_04_hover_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-social-4 a:hover, {{WRAPPER}} .team-social-5 li a:hover' => 'color: {{VALUE}}',
                    ],
                    'default' => '#007bff',
                    'condition' => [
                        'team_layout' => [ 'team_style_4', 'team_style_5' ],
                    ],
                    
                ]
            );
            // social_icon_hover_background_color//
            $this->add_control(
                'social_icon_hover_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a:hover, {{WRAPPER}} .team-social-3 a:hover' => 'background-color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3' ],
                    ],
                    
                ]
            );
            // social_icon_4hover__background_color//
            $this->add_control(
                'social_icon_04_hover_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-social-4 a:hover, {{WRAPPER}} .team-social-5 li a:hover' => 'background-color: {{VALUE}}',
                    ],
                    'default' => '#fff',
                    'condition' => [
                        'team_layout' => [ 'team_style_4', 'team_style_5' ],
                    ],
                    
                ]
            );
            // social_icon_hover_size//
            $this->add_control(
                'social_icon_hover_size',
                [
                    'label' => esc_html__( 'Icon Size', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::SLIDER,
                    'size_units' => [ 'px'],
                    'range' => [
                        'px' => [
                            'min' => 0,
                            'max' => 1000,
                            'step' => 5,
                        ],
                    ],
                    'default' => [
                        'unit' => 'px',
                        'size' => 16,
                    ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a:hover, {{WRAPPER}} .team-social a:hover, {{WRAPPER}} .team-social-3 a:hover, {{WRAPPER}} .team-social-4 a:hover' => 'font-size: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            // social_icon_hover_border_radius/
            $this->add_control(
                'social_icon_hover_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a:hover, {{WRAPPER}} .team-social-3 a:hover, {{WRAPPER}} .team-social-4 a:hover, {{WRAPPER}} .team-social-5 li a:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3', 'team_style_4', 'team_style_5' ],
                    ],
                ]
            );
            // social_icon_hover_padding/
            $this->add_control(
                'social_icon_hover_padding',
                [
                    'label' => esc_html__( 'Padding', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px' ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a:hover, {{WRAPPER}} .team-social-3 a:hover, {{WRAPPER}} .team-social-4 a:hover, {{WRAPPER}} .team-social-5 li a:hover' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3', 'team_style_4', 'team_style_5' ],
                    ],
                ]
            );


            $this->end_controls_tabs();
            // end-hover-tabs//

            $this->end_controls_tabs();
            // end-tabs//
            $this->end_controls_section();
            //end team_social//


            // team_layout//
            $this->start_controls_section(
                'team_layout_section',
                [
                    'label' => esc_html__( 'Layout', 'elementor-team' ),
                    'tab' => \Elementor\Controls_Manager::TAB_STYLE,
                    // 'condition' => [
                    //     'team_layout' => [ 'team_style_1', 'team_style_3', 'team_style_4' ],
                    // ],
                ],
                
            );
            // tem_layout_background_color//
            $this->add_control(
                'team_layout_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content, {{WRAPPER}} .team-social-3' => 'background-color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_PRIMARY,
                    ],
                    'condition' => [
                        'team_layout' => [ 'team_style_1', 'team_style_3' ],
                    ],
                    
                ]
            );
            // tem_layout_4_background_color//
            $this->add_control(
                'team_layout_4_background_overly_color',
                [
                    'label' => esc_html__( 'Background Overly', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-overlay-4' => 'background-color: {{VALUE}}',
                    ],
                    'default' => 'rgba(0,123,255,0.7)',
                    'condition' => [
                        'team_layout' => [ 'team_style_4' ],
                    ],
                    
                ]
            );
            // layout_image_border_color//
            $this->add_group_control(
                \Elementor\Group_Control_Border::get_type(),
                [
                    'name' => 'team_image_3_border_color',
                    'selector' => '{{WRAPPER}} .team-image-3 img, {{WRAPPER}} .team-image-5 img',
                    'condition' => [
                        'team_layout' => [ 'team_style_3', 'team_style_5' ],
                    ],
                ]
            );


            $this->end_controls_section();



           
        }

        protected function render(){
            $settings = $this->get_settings_for_display();

            $team_layout = $settings['team_layout'] ?? 'team_style_1';
            $team_image = $settings['team_image'];
            $team_name = $settings['team_name'];
            $team_designation = $settings['team_designation'];
            $team_socials = $settings['team_socials'];
            
            

            switch ($team_layout) {
                case 'team_style_1':
                    include( __DIR__ . '/parts/team-style-1.php' );
                break;
                case 'team_style_2':
                    include( __DIR__ . '/parts/team-style-2.php' );
                break;
                case 'team_style_3':
                    include( __DIR__ . '/parts/team-style-3.php' );
                break;
                case 'team_style_4':
                    include( __DIR__ . '/parts/team-style-4.php' );
                break;
                case 'team_style_5':
                    include( __DIR__ . '/parts/team-style-5.php' );
                break;
                
                default:
                    include( __DIR__ . '/parts/team-style-1.php' );
                    break;
            }

           
        }

    }











?>
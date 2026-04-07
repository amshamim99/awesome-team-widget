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
                    'selector' => '{{WRAPPER}} .team-card .team-content h3',
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
                        '{{WRAPPER}} .team-card .team-content h3' => 'color: {{VALUE}}',
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
                    'selector' => '{{WRAPPER}} .team-card .team-content span',
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
                        '{{WRAPPER}} .team-card .team-content span' => 'color: {{VALUE}}',
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
                    'label' => esc_html__( 'Normal', 'textdomain' ),
                ]
            );
            // social_icon_color//
            $this->add_control(
                'social_icon_color',
                [
                    'label' => esc_html__( 'Color', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a' => 'color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_ACCENT,
                    ]
                    
                ]
            );
            // social_icon_background_color//
            $this->add_control(
                'social_icon_background_color',
                [
                    'label' => esc_html__( 'Background', 'elementor-team' ),
                    'type' => \Elementor\Controls_Manager::COLOR,
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a' => 'background-color: {{VALUE}}',
                    ],
                    'global' => [
                        'default' => \Elementor\Core\Kits\Documents\Tabs\Global_Colors::COLOR_SECONDARY,
                    ]
                    
                ]
            );
            // social_icon_size//
            $this->add_control(
                'social_icon_size',
                [
                    'label' => esc_html__( 'Icon Size', 'textdomain' ),
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
                        '{{WRAPPER}} .team-card .team-content .social-icons li a' => 'font-size: {{SIZE}}{{UNIT}};',
                    ],
                ]
            );
            // social_icon_border_radius/
            $this->add_control(
                'social_icon_border_radius',
                [
                    'label' => esc_html__( 'Border Radius', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px', '%' ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );
            // social_icon_padding/
            $this->add_control(
                'social_icon_padding',
                [
                    'label' => esc_html__( 'Padding', 'textdomain' ),
                    'type' => \Elementor\Controls_Manager::DIMENSIONS,
                    'size_units' => [ 'px' ],
                    'selectors' => [
                        '{{WRAPPER}} .team-card .team-content .social-icons li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    ],
                ]
            );

            $this->end_controls_tab();
            // end normal_tabs//

            // start-hover-tabs
            $this->start_controls_tab(
                'social_hover_tab',
                [
                    'label' => esc_html__( 'Hover', 'textdomain' ),
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
                    require_once( __DIR__ . '/parts/team-style-1.php' );
                break;
                case 'team_style_2':
                    require_once( __DIR__ . '/parts/team-style-2.php' );
                break;
                case 'team_style_3':
                    require_once( __DIR__ . '/parts/team-style-3.php' );
                break;
                case 'team_style_4':
                    require_once( __DIR__ . '/parts/team-style-4.php' );
                break;
                case 'team_style_5':
                    require_once( __DIR__ . '/parts/team-style-5.php' );
                break;
                
                default:
                    require_once( __DIR__ . '/parts/team-style-1.php' );
                    break;
            }

           
        }

    }











?>
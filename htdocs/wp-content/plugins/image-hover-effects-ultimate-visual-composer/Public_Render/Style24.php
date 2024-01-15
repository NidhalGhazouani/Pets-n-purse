<?php

namespace OXI_FLIP_BOX_PLUGINS\Public_Render;

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Description of Style_1
 * Content of Flipbox Plugins
 *
 * @author $biplob018
 */

/**
 * Description of Create
 *
 * @author biplo
 */
use OXI_FLIP_BOX_PLUGINS\Page\Public_Render;

class Style24 extends Public_Render {

    public function default_render() {
        $styleid = $this->oxiid;
        $styledata = explode('|', $this->dbdata['css']);
        $styledata = array_map('esc_attr', explode('|', $this->dbdata['css']));
        $listdata = $this->child;
        ?>
        <div class="oxilab-flip-box-wrapper">
            <?php
            foreach ($listdata as $value) {
                if (!empty($value['files'])):
                    $filesdata = explode("{#}|{#}", $value['files']);
                    ?>
                    <div class="<?php echo esc_attr($styledata[43]); ?> oxilab-flip-box-padding-<?php echo esc_attr($styleid); ?>"
                         sa-data-animation="<?php echo esc_attr($styledata[55]); ?>"
                         sa-data-animation-offset="100%"
                         sa-data-animation-delay="0ms"
                         sa-data-animation-duration=" <?php echo esc_attr(($styledata[57] * 1000)); ?>ms"
                         >
                        <div class="<?php echo ($this->admin == 'admin') ? 'oxilab-ab-id' : ''; ?> oxilab-flip-box-body-<?php echo esc_attr($styleid); ?> oxilab-flip-box-body-<?php echo esc_attr($styleid); ?>-<?php echo esc_attr($value['id']); ?>">
                            <?php
                            if ($filesdata[11] != '') {
                                echo '<a href="' . esc_url($filesdata[11]) . '" target="' . esc_attr($styledata[53]) . '">';
                            }
                            ?>
                            <div class="oxilab-flip-box-body-absulote">
                                <div class="<?php echo esc_attr($styledata[1]); ?>">
                                    <div class="oxilab-flip-box-style-data <?php echo esc_attr($styledata[3]); ?>">
                                        <div class="oxilab-flip-box-style">
                                            <div class="oxilab-flip-box-front">
                                                <div class="oxilab-flip-box-<?php echo esc_attr($styleid); ?>">
                                                    <div class="oxilab-flip-box-<?php echo esc_attr($styleid); ?>-data">
                                                        <div class="oxilab-icon">
                                                            <div class="oxilab-icon-data">
                                                                <?php  $this->font_awesome_render($filesdata[3]) ?>
                                                            </div>
                                                        </div>
                                                        <div class="oxilab-heading">
                                                            <?php  $this->text_render($filesdata[1]); ?>
                                                        </div>
                                                        <div class="oxilab-info">
                                                            <?php  $this->text_render($filesdata[15]); ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="oxilab-flip-box-back">
                                                <div class="oxilab-flip-box-back-<?php echo esc_attr($styleid); ?>">
                                                    <div class="oxilab-flip-box-back-<?php echo esc_attr($styleid); ?>-data">
                                                        <div class="oxilab-icon">
                                                            <div class="oxilab-icon-data">
                                                                <?php  $this->font_awesome_render($filesdata[9]) ?>
                                                            </div>
                                                        </div>
                                                        <div class="oxilab-heading">
                                                            <?php  $this->text_render($filesdata[17]); ?>
                                                        </div>
                                                        <div class="oxilab-info">
                                                            <?php  $this->text_render($filesdata[7]); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            if ($filesdata[11] != '') {
                                echo '</a>';
                            }
                             $this->admin_edit_panel($value['id']);
                            ?>

                        </div>


                        <?php
                        if ($filesdata[5] != '') {
                            $this->inline_css .= '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-' . $styleid . '{
background: linear-gradient(' . $styledata[5] . ', ' . $styledata[5] . '), url("' . $filesdata[5] . '");
-moz-background-size: 100% 100%;
-o-background-size: 100% 100%;
background-size: 100% 100%;
}';
                        }
                        if ($filesdata[13] != '') {
                            $this->inline_css .= '.oxilab-flip-box-body-' . $styleid . '-' . $value['id'] . ' .oxilab-flip-box-back-' . $styleid . '{
background: linear-gradient(' . $styledata[15] . ', ' . $styledata[15] . '), url("' . $filesdata[13] . '");
-moz-background-size: 100% 100%;
-o-background-size: 100% 100%;
background-size: 100% 100%;
}';
                        }
                        ?>

                    </div>
                    <?php
                endif;
            }

            $this->inline_css .= '.oxilab-flip-box-padding-' . $styleid . '{
                    padding: ' . $styledata[49] . 'px ' . $styledata[51] . 'px;
                    -webkit-transition:  opacity ' . $styledata[57] . 's linear;
                    -moz-transition:  opacity ' . $styledata[57] . 's linear;
                    -ms-transition:  opacity ' . $styledata[57] . 's linear;
                    -o-transition:  opacity ' . $styledata[57] . 's linear;
                    transition:  opacity ' . $styledata[57] . 's linear;
                    -webkit-animation-duration: ' . $styledata[57] . 's;
                    -moz-animation-duration: ' . $styledata[57] . 's;
                    -ms-animation-duration: ' . $styledata[57] . 's;
                    -o-animation-duration: ' . $styledata[57] . 's;
                    animation-duration: ' . $styledata[57] . 's;
                }
                .oxilab-flip-box-body-' . $styleid . '{
                    max-width: ' . $styledata[45] . 'px;
                    width: 100%;
                    margin: 0 auto;
                    position: relative;
                }
                .oxilab-flip-box-body-' . $styleid . ':after {
                    padding-bottom: ' . ($styledata[47] / $styledata[45] * 100) . '%;
                    content: "";
                    display: block;
                }
                .oxilab-flip-box-' . $styleid . '{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    border-width: ' . $styledata[149] . 'px;
                    border-style:' . $styledata[151] . ';
                    border-color: ' . $styledata[7] . ';
                    background-color: ' . $styledata[5] . ';
                    display: block;
                    -webkit-border-radius: ' . $styledata[153] . 'px;
                    -moz-border-radius: ' . $styledata[153] . 'px;
                    -ms-border-radius: ' . $styledata[153] . 'px;
                    -o-border-radius: ' . $styledata[153] . 'px;
                    border-radius: ' . $styledata[153] . 'px;
                    overflow: hidden;
                    -webkit-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    -moz-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    -ms-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    -o-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                }
                .oxilab-flip-box-' . $styleid . '-data{
                    position: absolute;
                    left: 0%;
                    top: 0%;
                    padding: ' . $styledata[71] . 'px ' . $styledata[73] . 'px;
                    right: 0;
                }
                .oxilab-flip-box-' . $styleid . '-data .oxilab-icon{
                    display: block;
                    width: 100%;
                    text-align: center;
                }
                .oxilab-flip-box-' . $styleid . '-data .oxilab-icon-data{
                    display: inline-block;
                    width: 100%;
                    background-color: ' . $styledata[11] . ';
                    padding:' . $styledata[159] . 'px ' . $styledata[161] . 'px;
                    -webkit-border-radius: ' . $styledata[81] . 'px;
                    -moz-border-radius: ' . $styledata[81] . 'px;
                    -ms-border-radius: ' . $styledata[81] . 'px;
                    -o-border-radius: ' . $styledata[81] . 'px;
                    border-radius:' . $styledata[81] . 'px;
                }
                .oxilab-flip-box-' . $styleid . '-data .oxilab-icon-data .oxi-icons{
                    font-size: ' . $styledata[77] . 'px;
                    color: ' . $styledata[9] . ';
                }
                .oxilab-flip-box-' . $styleid . '-data .oxilab-heading{
                    display: block;
                    color: ' . $styledata[13] . ';
                    text-align: ' . $styledata[91] . ';
                    font-size: ' . $styledata[83] . 'px;
                    font-family: ' . $this->font_familly($styledata[85]) . ';
                    font-weight: ' . $styledata[89] . ';
                    font-style:' . $styledata[87] . ';
                    padding: ' . $styledata[93] . 'px ' . $styledata[99] . 'px ' . $styledata[95] . 'px ' . $styledata[97] . 'px;
                }
                .oxilab-flip-box-' . $styleid . '-data .oxilab-info{
                    display: block;
                    color: ' . $styledata[19] . ';
                    text-align: ' . $styledata[171] . ';
                    font-size: ' . $styledata[163] . 'px;
                    font-family: ' . $this->font_familly($styledata[165]) . ';
                    font-weight: ' . $styledata[169] . ';
                    font-style:' . $styledata[167] . ';
                    padding: ' . $styledata[173] . 'px ' . $styledata[179] . 'px ' . $styledata[175] . 'px ' . $styledata[177] . 'px;
                }
                .oxilab-flip-box-back-' . $styleid . '{
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    border-width: ' . $styledata[155] . 'px;
                    border-style:' . $styledata[157] . ';
                    border-color: ' . $styledata[23] . ';
                    background-color: ' . $styledata[15] . ';
                    -webkit-border-radius: ' . $styledata[153] . 'px;
                    -moz-border-radius: ' . $styledata[153] . 'px;
                    -ms-border-radius: ' . $styledata[153] . 'px;
                    -o-border-radius: ' . $styledata[153] . 'px;
                    border-radius: ' . $styledata[153] . 'px;
                    overflow: hidden;
                    -webkit-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    -moz-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    -ms-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    -o-box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                    box-shadow: ' . $styledata[61] . 'px ' . $styledata[63] . 'px ' . $styledata[65] . 'px ' . $styledata[67] . 'px ' . $styledata[59] . ';
                }
                .oxilab-flip-box-back-' . $styleid . '-data{
                    position: absolute;
                    left: 0%;
                    right: 0;
                    top: 0%;
                    padding: ' . $styledata[101] . 'px ' . $styledata[103] . 'px;
                }
                .oxilab-flip-box-back-' . $styleid . '-data .oxilab-icon{
                    display: block;
                    width: 100%;
                    text-align: center;
                }
                .oxilab-flip-box-back-' . $styleid . '-data .oxilab-icon-data{
                    display: inline-block;
                    width: 100%;
                    background-color: ' . $styledata[27] . ';
                    padding: ' . $styledata[141] . 'px ' . $styledata[143] . 'px; ;
                    -webkit-border-radius: ' . $styledata[139] . 'px;
                    -moz-border-radius: ' . $styledata[139] . 'px;
                    -ms-border-radius: ' . $styledata[139] . 'px;
                    -o-border-radius: ' . $styledata[139] . 'px;
                    border-radius: ' . $styledata[139] . 'px;
                }
                .oxilab-flip-box-back-' . $styleid . '-data .oxilab-icon-data .oxi-icons{
                    font-size: ' . $styledata[137] . 'px;
                    color: ' . $styledata[25] . ';
                }
                .oxilab-flip-box-back-' . $styleid . '-data .oxilab-heading{
                    display: block;
                    color: ' . $styledata[21] . ';
                    text-align: ' . $styledata[189] . ';
                    font-size: ' . $styledata[181] . 'px;
                    font-family: ' . $this->font_familly($styledata[183]) . ';
                    font-weight: ' . $styledata[187] . ';
                    font-style:' . $styledata[185] . ';
                    padding:' . $styledata[191] . 'px ' . $styledata[197] . 'px ' . $styledata[193] . 'px ' . $styledata[195] . 'px;
                }
                .oxilab-flip-box-back-' . $styleid . '-data .oxilab-info{
                    display: block;
                    color: ' . $styledata[17] . ';
                    text-align: ' . $styledata[115] . ';
                    font-size: ' . $styledata[107] . 'px;
                    font-family: ' . $this->font_familly($styledata[109]) . ';
                    font-weight: ' . $styledata[113] . ';
                    font-style:' . $styledata[111] . ';
                    padding:' . $styledata[117] . 'px ' . $styledata[123] . 'px ' . $styledata[119] . 'px ' . $styledata[121] . 'px;
                }
                ' . $styledata[199] . '';
            ?>

        </div>

        <?php
    }

}

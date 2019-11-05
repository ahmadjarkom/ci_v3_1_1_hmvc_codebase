
<div class="left main-sidebar" id="sidebar">
    <div class="sidebar-inner leftscroll">
        <div id="sidebar-menu">
            <ul>

                <?php foreach (@easy::navigation_list() as $key => $value) : ?>
                    <li class="submenu">

                        <?php if (empty(@$value['data']->url)): ?>
                            <a href="#">
                                <i title="<?php echo $value['data']->module_name; ?>" class="<?php echo ($value['data']->icon) ?>"></i>
                                <span> &nbsp;&nbsp; <?php echo $value['data']->module_name ?> </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <?php foreach ($value['child'] as $key2 => $value2): ?>
                                    <?php if (empty(@$value2['data']->url)): ?>
                                        <li class="submenu">
                                            <a href="#">
                                                <i title="<?php echo $value['data']->module_name; ?>" class="<?php echo ($value2['data']->icon) ?>"></i>
                                                <span> &nbsp;&nbsp; <?php echo $value2['data']->module_name ?> </span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul style="">
                                                <?php foreach ($value2['child'] as $key3 => $value3): ?>
                                                    <?php if (empty(@$value3['data']->url)): ?>
                                                        <li class="subsubmenu">
                                                            <a href="#">
                                                                <i title="<?php echo $value['data']->module_name; ?>" class="<?php echo ($value3['data']->icon) ?>"></i>
                                                                <span> &nbsp;&nbsp; <?php echo $value3['data']->module_name ?> </span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <ul style="" class="subsubdrop">
                                                                <?php foreach ($value3['child'] as $key4 => $value4): ?>
                                                                    <li>
                                                                        <a href="<?php echo base_url($value4['data']->url) ?>">
                                                                            <i title="<?php echo $value4['data']->module_name; ?>" class="<?php echo ($value4['data']->icon) ?>"></i>
                                                                            <span> &nbsp;&nbsp; <?php echo $value4['data']->module_name ?> </span>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach ?>
                                                            </ul>
                                                        </li> 
                                                    <?php else: ?>
                                                        <li>
                                                            <a href="<?php echo base_url($value3['data']->url) ?>">
                                                                <i title="<?php echo $value3['data']->module_name; ?>" class="<?php echo ($value3['data']->icon) ?>"></i>
                                                                <span> &nbsp;&nbsp; <?php echo $value3['data']->module_name ?> </span>
                                                            </a>
                                                        </li>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            
                                            </ul>
                                        </li>
                                    
                                    <?php else: ?>
                                    
                                        <li>
                                            <a href="<?php echo base_url($value2['data']->url) ?>">
                                                <i title="<?php echo $value2['data']->module_name; ?>" class="<?php echo ($value2['data']->icon) ?>"></i>
                                                <span> &nbsp;&nbsp; <?php echo $value2['data']->module_name ?> </span>
                                            </a>
                                        </li>
                                    
                                    <?php endif ?>
                                <?php endforeach ?>
                            
                            </ul>
                        
                        <?php else: ?>
                            <a href="<?php echo base_url($value['data']->url) ?>">
                                <i title="<?php echo $value['data']->module_name; ?>" class="<?php echo ($value['data']->icon) ?>"></i>
                                <span> &nbsp;&nbsp; <?php echo $value['data']->module_name ?> </span>
                            </a>
                        <?php endif ?>
                    
                    </li>    
                <?php endforeach ?>
            
            </ul>
        
            <div class="clearfix"></div>
        </div>

        <div class="clearfix" id="barcode">
            <div calss="row" style="text-align: center;">
               <img src="<?php echo base_url('barcode.png') ?>" />
            </div>
            <div calss="row" style="text-align: center;">
               <span class="text-white">Download aplikasi dengan scan barcode atau <a href="<?php echo base_url('barcode.png') ?>" target="_blank" style="color: #fff9;">klik disini</a>.</span>
            </div>
        </div>
    
    </div>
</div>
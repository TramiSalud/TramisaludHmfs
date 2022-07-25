<?php

$view_config = array('actions' => array('popup' => array('show_header' => false,
                                                         'show_subpanels' => false,
                                                         'show_search' => false,
                                                         'show_footer' => false,
                                                         'show_javascript' => true,
                                                        ),
                                       ),
                     'req_params' => array('export_trigger' => array('param_value' => true,
                                                             'config' => array('show_all' => false),
                                                            ),
                                          ),
                    );

/*
What this means is if the system has the action popup then go to the actions entry within 
the view_config and determine the proper configuration. Also if the request contains the 
parameter 'export_trigger' and is set to be true then it will automatically cause the show_all 
configuration parameter to be set false, which means do not show any of the options. 
*/

?>
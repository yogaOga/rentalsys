<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MenuModules
 *
 * @author TAMARO-IND
 */
class MenuModules {

    //put your code here
    public static function menuModule() {
        return array(
            // App
            array(
                'label' => '<img src="img/icons/menu/layout.png" alt="" /> Module',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Marketing',
                        'url' => Yii::app()->createUrl('marketing'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Human Resource',
                        'url' => Yii::app()->createUrl('hrd'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Administrator</a>',
                        'url' => Yii::app()->createUrl('administrator'),
                    ),
                    array(
                        'label' => '',
                        array(
                            'class' => 'divider',
                        )
                    ),
                    array(
                        'label' => '<i class="icon-key"></i> Log Out',
                        'url' => Yii::app()->createUrl('site/logout'),
                    ),
                )
            ),
        );
    }

    public static function menuModuleMarketing() {
        return array(
            // App
            array(
                'label' => '<img src="img/icons/menu/layout.png" alt="" /> Module',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Marketing',
                        'url' => Yii::app()->createUrl('marketing'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Human Resource',
                        'url' => Yii::app()->createUrl('hrd'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Administrator</a>',
                        'url' => Yii::app()->createUrl('administrator'),
                    ),
                    array(
                        'label' => '',
                        array(
                            'class' => 'divider',
                        )
                    ),
                    array(
                        'label' => '<i class="icon-key"></i> Log Out',
                        'url' => Yii::app()->createUrl('site/logout'),
                    ),
                )
            ),
            // Prospect
            array(
                'label' => '<img src="img/icons/menu/directions.png" alt="" /> Prospect Customer',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Prospect',
                        'url' => Yii::app()->createUrl('marketing/TProspect/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Lookup Prospect',
                        'url' => Yii::app()->createUrl('marketing/TProspect/Lookup'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Prospect',
                        'url' => Yii::app()->createUrl('marketing/TProspect/Admin'),
                    ),
                )
            ),
            // CMD
            array(
                'label' => '<img src="img/icons/menu/pages.png" alt="" /> Customer Master Data',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Customer',
                        'url' => Yii::app()->createUrl('marketing/MCostumerData/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Customer',
                        'url' => Yii::app()->createUrl('marketing/MCostumerData/Admin'),
                    ),
                )
            ),
            // Purcahse Order
            array(
                'label' => '<img src="img/icons/menu/clipboard.png" alt="" /> Purchase Order',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Purchase Order',
                        'url' => Yii::app()->createUrl('marketing/PurchaseOrder/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Purchase Order',
                        'url' => Yii::app()->createUrl('marketing/PurchaseOrder/Admin'),
                    ),
                )
            ),
            // Contract Order
            array(
                'label' => '<img src="img/icons/menu/lock.png" alt="" /> Contract Order',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Contract Order',
                        'url' => Yii::app()->createUrl('marketing/ContractOrder/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Contract Order',
                        'url' => Yii::app()->createUrl('marketing/ContractOrder/Create'),
                    ),
                )
            ),
            // Booking GS
            array(
                'label' => '<img src="img/icons/menu/flag.png" alt="" /> Booking GS',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Crete Booking GS',
                        'url' => Yii::app()->createUrl('marketing/TBookingKendaraan/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Booking GS',
                        'url' => Yii::app()->createUrl('marketing/TBookingKendaraan/Admin'),
                    ),
                )
            ),
            // Booking Unit
            array(
                'label' => '<img src="img/icons/menu/flag.png" alt="" /> Booking Unit',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Booking Unit',
                        'url' => Yii::app()->createUrl('marketing/TBookingStock/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Booking Unit',
                        'url' => Yii::app()->createUrl('marketing/TBookingStock/Admin'),
                    ),
                )
            ),
            // Vehicle Request
            array(
                'label' => '<img src="img/icons/menu/vimeo.png" alt="" /> Vehicle Request',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Vehicle Request',
                        'url' => Yii::app()->createUrl('marketing/TVehicleRequest/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Vehicle Request',
                        'url' => Yii::app()->createUrl('marketing/TVehicleRequest/Admin'),
                    ),
                )
            ),
            // Customer Complaint
            array(
                'label' => '<img src="img/icons/menu/pacman.png" alt="" /> Customer Complaint',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Customer Complaint',
                        'url' => Yii::app()->createUrl('marketing/MComplainExistingCustomer/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Manage Customer Complaint',
                        'url' => Yii::app()->createUrl('marketing/MComplainExistingCustomer/Admin'),
                    ),
                )
            ),
            // Activity Plan
            array(
                'label' => '<img src="img/icons/menu/list.png" alt="" /> Activity Plan',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Activity Plan',
                        'url' => Yii::app()->createUrl('marketing/TActivityPlan/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Admin Activity Plan',
                        'url' => Yii::app()->createUrl('marketing/TActivityPlan/Admin'),
                    ),
                )
            ),
            // Setting
            array(
                'label' => '<img src="img/icons/menu/settings.png" alt="" /> Setting',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create Ownership',
                        'url' => Yii::app()->createUrl('marketing/LOwnership/create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Create Business Type',
                        'url' => Yii::app()->createUrl('marketing/LBusinesstype/create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Create Vehicle',
                        'url' => Yii::app()->createUrl('marketing/mVehicle/create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Create Car Model',
                        'url' => Yii::app()->createUrl('marketing/mCarsModels/create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Create Car Type',
                        'url' => Yii::app()->createUrl('marketing/mTypeCars/create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Create MO Booking',
                        'url' => Yii::app()->createUrl('marketing/MoBooking/create'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Create Vehicle',
                        'url' => Yii::app()->createUrl('marketing/Vehicle/create'),
                    ),
                )
            ),
        );
    }

    public static function menuModuleHRD() {
        return array(
            array(
                'label' => '<img src="img/icons/menu/layout.png" alt="" /> Module',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Marketing',
                        'url' => Yii::app()->createUrl('marketing'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Human Resource',
                        'url' => Yii::app()->createUrl('hrd'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Administrator</a>',
                        'url' => Yii::app()->createUrl('administrator'),
                    ),
                    array(
                        'label' => '',
                        array(
                            'class' => 'divider',
                        )
                    ),
                    array(
                        'label' => '<i class="icon-key"></i> Log Out',
                        'url' => Yii::app()->createUrl('site/logout'),
                    ),
                )
            ),
            // Applicant Menu
            array(
                'label' => '<img src="img/icons/menu/list.png" alt="" /> Applicant',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Applicant',
                        'url' => Yii::app()->createUrl('hrd/MApplicant/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Applicant</a>',
                        'url' => Yii::app()->createUrl('hrd/MApplicant/Admin'),
                    ),
                )
            ),
			//Penerimaan Pegawai Baru
			array(
				'label' => '<img src="img/icons/menu/list.png" alt="" /> Recruitment',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i>Create Recruitment',
                        'url' => Yii::app()->createUrl('hrd/MRecruitment/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i>Manage Recruitment</a>',
                        'url' => Yii::app()->createUrl('hrd/MRecruitment/Admin'),
                    ),
                )
			),
			
			//Kepegawaian
			array(
				
				'label' => '<img src="img/icons/menu/list.png" alt="" /> Kepegawaian',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i>Manage Kepegawaian',
                        'url' => Yii::app()->createUrl('hrd/MGajiPokok/Create'),
                    ),
                )
			),
            // Employee Menu
            array(
                'label' => '<img src="img/icons/menu/users.png" alt="" /> Employee',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Employee',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Employee</a>',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Admin'),
                    ),
                )
            ),
            // Employee Payroll
            array(
                'label' => '<img src="img/icons/menu/dollar.png" alt="" /> Payroll',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Payroll',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Payroll</a>',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Admin'),
                    ),
                )
            ),
            // Employee Atend
            array(
                'label' => '<img src="img/icons/menu/timer.png" alt="" /> Timesheet',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Timesheet',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Timesheet</a>',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Admin'),
                    ),
                )
            ),
            // Employee Overtime
            array(
                'label' => '<img src="img/icons/menu/timer.png" alt="" /> Overtime',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Overtime',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Overtime</a>',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Admin'),
                    ),
                )
            ),
            // Employee Leave
            array(
                'label' => '<img src="img/icons/menu/plane.png" alt="" /> Leave',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Leave',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Leave</a>',
                        'url' => Yii::app()->createUrl('hrd/MEmployee/Admin'),
                    ),
                )
            ),
            // Employee Warning Letter
            array(
                'label' => '<img src="img/icons/menu/idea.png" alt="" /> Warning Letter',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> New Warning Letter',
                        'url' => Yii::app()->createUrl('hrd/HWarningLetter/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage Warning Letter</a>',
                        'url' => Yii::app()->createUrl('hrd/HWarningLetter/Admin'),
                    ),
                )
            ),
        );
    }

    public static function menuModuleAdministrator() {
        return array(
            array(
                'label' => '<img src="img/icons/menu/inbox.png" alt="" /> Module',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Marketing',
                        'url' => Yii::app()->createUrl('marketing'),
                    ),
                    array(
                        'label' => '<i class="icon-user"></i> Human Resource',
                        'url' => Yii::app()->createUrl('hrd'),
                    ),
                    
                    array(
                        'label' => '<i class="icon-tasks"></i> Administrator</a>',
                        'url' => Yii::app()->createUrl('administrator'),
                    ),
                    array(
                        'label' => '',
                        array(
                            'class' => 'divider',
                        )
                    ),
                    array(
                        'label' => '<i class="icon-key"></i> Log Out',
                        'url' => Yii::app()->createUrl('site/logout'),
                    ),
                )
            ),
            // For User management Menu Items
            array(
                'label' => '<img src="img/icons/menu/inbox.png" alt="" /> User Management',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => '<i class="icon-user"></i> Create User',
                        'url' => Yii::app()->createUrl('administrator/SUser/Create'),
                    ),
                    array(
                        'label' => '<i class="icon-tasks"></i> Manage User</a>',
                        'url' => Yii::app()->createUrl('administrator/SUser/Admin'),
                    ),
                )
            ),
            // For Privillage Menu Items
            array(
                'label' => '<img src="img/icons/menu/inbox.png" alt="" /> Privileges',
                'url' => '#',
                'linkOptions' => array(
                    'class' => 'dropdown-toggle',
                    'data-toggle' => 'dropdown',
                ),
                'itemOptions' => array('class' => 'dropdown user'),
                'items' => array(
                    array(
                        'label' => Rights::t('core', 'Assignments'),
                        'url' => Yii::app()->createUrl('rights/assignment/view'),
                        'itemOptions' => array('class' => 'item-assignments'),
                    ),
                    array(
                        'label' => Rights::t('core', 'Permissions'),
                        'url' => Yii::app()->createUrl('rights/authItem/permissions'),
                        'itemOptions' => array('class' => 'item-permissions'),
                    ),
                    array(
                        'label' => Rights::t('core', 'Roles'),
                        'url' => Yii::app()->createUrl('rights/authItem/roles'),
                        'itemOptions' => array('class' => 'item-roles'),
                    ),
                    array(
                        'label' => Rights::t('core', 'Tasks'),
                        'url' => Yii::app()->createUrl('rights/authItem/tasks'),
                        'itemOptions' => array('class' => 'item-tasks'),
                    ),
                    array(
                        'label' => Rights::t('core', 'Operations'),
                        'url' => Yii::app()->createUrl('rights/authItem/operations'),
                        'itemOptions' => array('class' => 'item-operations'),
                    ),
                )
            ),
        );
    }

}

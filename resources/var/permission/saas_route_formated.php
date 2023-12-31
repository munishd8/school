<?php return array(
    
    'ticket_system' => array(
        'module' => 'Saas',
        'sidebar_menu' => null,
        'name' => 'Ticket System',
        'lang_name' => 'saas::saas.ticket_system',
        'icon' => 'flaticon-settings',
        'svg' => null,
        'route' => 'ticket_system',
        'parent_route' => null,
        'is_admin' => 1,
        'is_teacher' => 0,
        'is_student' => 0,
        'is_parent' => 0,
        'position' => 1,
        'is_saas' => 0,
        'is_menu' => 1,
        'status' => 1,
        'menu_status' => 1,
        'relate_to_child' => 0,
        'alternate_module' => null,
        'permission_section' => 0,
        'user_id' => null,
        'type' => 1,
        'old_id' => null,
        'child' => array(
            'ticket.category' => array(
                'module' => 'Saas',
                'sidebar_menu' => null,
                'name' => 'Ticket Category',
                'lang_name' => 'system_settings.ticket_category',
                'icon' => null,
                'svg' => null,
                'route' => 'ticket.category',
                'parent_route' => 'ticket_system',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 3,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => null,
                'child'=>array(
                    'ticket.category_store' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Add',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'ticket.category_store',
                        'parent_route' => 'ticket.category',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                    'ticket.category_edit' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Edit',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'ticket.category_edit',
                        'parent_route' => 'ticket.category',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                    'ticket.category_delete' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Delete',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'ticket.category_delete',
                        'parent_route' => 'ticket.category',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                )
            ),
            'ticket.priority' => array(
                'module' => 'Saas',
                'sidebar_menu' => null,
                'name' => 'Ticket Priority',
                'lang_name' => 'system_settings.ticket_priority',
                'icon' => null,
                'svg' => null,
                'route' => 'ticket.priority',
                'parent_route' => 'ticket_system',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 3,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => null,
                'child'=>array(
                    'ticket.priority_store' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Add',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'ticket.priority_store',
                        'parent_route' => 'ticket.priority',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1919,
                    ),
                    'ticket.priority_edit' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Edit',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'ticket.priority_edit',
                        'parent_route' => 'ticket.priority',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1919,
                    ),
                    'ticket.priority_delete' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Delete',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'ticket.priority_delete',
                        'parent_route' => 'ticket.priority',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1919,
                    ),
                )
            ),
            'school/ticket-view' => array(
                'module' => 'Saas',
                'sidebar_menu' => null,
                'name' => 'Ticket List',
                'lang_name' => 'saas::saas.ticket_list',
                'icon' => null,
                'svg' => null,
                'route' => 'school/ticket-view',
                'parent_route' => 'ticket_system',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 3,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => null,
                'child'=>array(
                    'admin.ticket_store' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Add',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'admin.ticket_store',
                        'parent_route' => 'school/ticket-view',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                    'admin.ticket_edit' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Edit',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'admin.ticket_edit',
                        'parent_route' => 'school/ticket-view',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                    'admin.ticket_delete_view' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Delete',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'admin.ticket_delete_view',
                        'parent_route' => 'school/ticket-view',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                    'user.ticket_view' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Reply',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'user.ticket_view',
                        'parent_route' => 'school/ticket-view',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                    'admin.assign_ticket' => array(
                        'module' => 'Saas',
                        'sidebar_menu' => null,
                        'name' => 'Assign',
                        'lang_name' => null,
                        'icon' => null,
                        'svg' => null,
                        'route' => 'admin.assign_ticket',
                        'parent_route' => 'school/ticket-view',
                        'is_admin' => 1,
                        'is_teacher' => 0,
                        'is_student' => 0,
                        'is_parent' => 0,
                        'position' => 67,
                        'is_saas' => 0,
                        'is_menu' => 0,
                        'status' => 1,
                        'menu_status' => 1,
                        'relate_to_child' => 0,
                        'alternate_module' => null,
                        'permission_section' => 0,
                        'user_id' => null,
                        'type' => 3,
                        'old_id' => 1912,
                    ),
                )
            ),
            'school/ticket-unassign-list' => array(
                'module' => 'Saas',
                'sidebar_menu' => null,
                'name' => 'Ticket Unassign List',
                'lang_name' => 'saas::saas.un_assign_ticket',
                'icon' => null,
                'svg' => null,
                'route' => 'school/ticket-unassign-list',
                'parent_route' => 'ticket_system',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 4,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => null,
                'child'=>array(
                    
                )
            ),
        ),

    ),
    'subscription' => array(
        'module' => 'Saas',
        'sidebar_menu' => null,
        'name' => 'Subscription',
        'lang_name' => 'saas::saas.subscription',
        'icon' => 'flaticon-analytics',
        'svg' => null,
        'route' => 'subscription',
        'parent_route' => null,
        'is_admin' => 1,
        'is_teacher' => 0,
        'is_student' => 0,
        'is_parent' => 0,
        'position' => 1,
        'is_saas' => 0,
        'is_menu' => 1,
        'status' => 1,
        'menu_status' => 1,
        'relate_to_child' => 0,
        'alternate_module' => null,
        'permission_section' => 0,
        'user_id' => null,
        'type' => 1,
        'old_id' => null,
        'child' => array(
            'subscription/package-list' => array(
                'module' => 'Saas',
                'sidebar_menu' => null,
                'name' => 'Packages',
                'lang_name' => 'saas::saas.packages',
                'icon' => null,
                'svg' => null,
                'route' => 'subscription/package-list',
                'parent_route' => 'subscription',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 3,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => null,
            ),
            'subscription/history' => array(
                'module' => 'Saas',
                'sidebar_menu' => null,
                'name' => 'Payment History',
                'lang_name' => 'saas::saas.payment_history',
                'icon' => null,
                'svg' => null,
                'route' => 'subscription/history',
                'parent_route' => 'subscription',
                'is_admin' => 1,
                'is_teacher' => 0,
                'is_student' => 0,
                'is_parent' => 0,
                'position' => 4,
                'is_saas' => 0,
                'is_menu' => 1,
                'status' => 1,
                'menu_status' => 1,
                'relate_to_child' => 0,
                'alternate_module' => null,
                'permission_section' => 0,
                'user_id' => null,
                'type' => 2,
                'old_id' => null,
            ),
        ),

    ),
);

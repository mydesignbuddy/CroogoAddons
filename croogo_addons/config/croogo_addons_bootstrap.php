<?php
/**
 * Routes
 *
 * events_manager_routes.php will be loaded in main app/config/routes.php file.
 */
    Croogo::hookRoutes('CroogoAddons');
/**
 * Behavior
 *
 * This plugin's CroogoAddons behavior will be attached whenever Node model is loaded.
 */
    //Croogo::hookBehavior('Node', 'CroogoAddons.CroogoAddons', array());
/**
 * Component
 *
 * This plugin's CroogoAddons component will be loaded in ALL controllers.
 */
    //Croogo::hookComponent('*', 'CroogoAddons.CroogoAddons');
/**
 * Helper
 *
 * This plugin's CroogoAddons helper will be loaded via NodesController.
 */
    //Croogo::hookHelper('Nodes', 'CroogoAddons.CroogoAddons');
/**
 * Admin menu (navigation)
 *
 * This plugin's admin_menu element will be rendered in admin panel under Extensions menu.
 */
    //Croogo::hookAdminMenu('CroogoAddons');
/**
 * Admin row action
 *
 * When browsing the content list in admin panel (Content > List),
 * an extra link called 'CroogoAddons' will be placed under 'Actions' column.
 */
    //Croogo::hookAdminRowAction('Nodes/admin_index', 'CroogoAddons', 'plugin:croogo_addons/controller:croogo_addons/action:index/:id');
/**
 * Admin tab
 *
 * When adding/editing Content (Nodes),
 * an extra tab with title 'CroogoAddons' will be shown with markup generated from the plugin's admin_tab_node element.
 *
 * Useful for adding form extra form fields if necessary.
 */
    //Croogo::hookAdminTab('Nodes/admin_add', 'CroogoAddons', 'croogo_addons.admin_tab_node');
   // Croogo::hookAdminTab('Nodes/admin_edit', 'CroogoAddons', 'croogo_addons.admin_tab_node');
?>
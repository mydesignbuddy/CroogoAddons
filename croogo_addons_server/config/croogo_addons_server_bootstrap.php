<?php
/**
 * Routes
 *
 * events_manager_routes.php will be loaded in main app/config/routes.php file.
 */
    Croogo::hookRoutes('CroogoAddonsServer');
/**
 * Behavior
 *
 * This plugin's CroogoAddonsServer behavior will be attached whenever Node model is loaded.
 */
    //Croogo::hookBehavior('Node', 'CroogoAddonsServer.CroogoAddonsServer', array());
/**
 * Component
 *
 * This plugin's CroogoAddonsServer component will be loaded in ALL controllers.
 */
    //Croogo::hookComponent('*', 'CroogoAddonsServer.CroogoAddonsServer');
/**
 * Helper
 *
 * This plugin's CroogoAddonsServer helper will be loaded via NodesController.
 */
    //Croogo::hookHelper('Nodes', 'CroogoAddonsServer.CroogoAddonsServer');
/**
 * Admin menu (navigation)
 *
 * This plugin's admin_menu element will be rendered in admin panel under Extensions menu.
 */
    //Croogo::hookAdminMenu('CroogoAddonsServer');
/**
 * Admin row action
 *
 * When browsing the content list in admin panel (Content > List),
 * an extra link called 'CroogoAddonsServer' will be placed under 'Actions' column.
 */
    //Croogo::hookAdminRowAction('Nodes/admin_index', 'CroogoAddonsServer', 'plugin:croogo_addons_server/controller:croogo_addons_server/action:index/:id');
/**
 * Admin tab
 *
 * When adding/editing Content (Nodes),
 * an extra tab with title 'CroogoAddonsServer' will be shown with markup generated from the plugin's admin_tab_node element.
 *
 * Useful for adding form extra form fields if necessary.
 */
    //Croogo::hookAdminTab('Nodes/admin_add', 'CroogoAddonsServer', 'croogo_addons_server.admin_tab_node');
   // Croogo::hookAdminTab('Nodes/admin_edit', 'CroogoAddonsServer', 'croogo_addons_server.admin_tab_node');
?>
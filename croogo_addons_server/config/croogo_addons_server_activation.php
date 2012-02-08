<?php
/**
 * CroogoAddonsServer Activation
 *
 * Activation class for CroogoAddonsServer plugin.
 * This is optional, and is required only if you want to perform tasks when your plugin is activated/deactivated.
 *
 * @package  Croogo
 * @author   Buddy Toups <me@mydesignbuddy.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class CroogoAddonsServerActivation {
/**
 * onActivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
    public function beforeActivation(&$controller) {
        return true;
    }
/**
 * Called after activating the plugin in ExtensionsPluginsController::admin_toggle()
 *
 * @param object $controller Controller
 * @return void
 */
    public function onActivation(&$controller) {
        // ACL: set ACOs with permissions
        $controller->Croogo->addAco('CroogoAddonsServer'); // CroogoAddonsServerController
        $controller->Croogo->addAco('CroogoAddonsServer/admin_index'); // CroogoAddonsServerController::admin_index()
        //$controller->Croogo->addAco('CroogoAddonsServer/index', array('registered', 'public')); // CroogoAddonsServerController::index()

        // Main menu: add an Example link
        $mainMenu = $controller->Link->Menu->findByAlias('main');
        $controller->Link->Behaviors->attach('Tree', array(
            'scope' => array(
                'Link.menu_id' => $mainMenu['Menu']['id'],
            ),
        ));
        $controller->Link->save(array(
            'menu_id' => $mainMenu['Menu']['id'],
            'title' => 'CroogoAddonsServer',
            'link' => 'plugin:croogo_addons_server/controller:croogo_addons_server/action:index',
            'status' => 1,
        ));
    }
/**
 * onDeactivate will be called if this returns true
 *
 * @param  object $controller Controller
 * @return boolean
 */
    public function beforeDeactivation(&$controller) {
        return true;
    }
/**
 * Called after deactivating the plugin in ExtensionsPluginsController::admin_toggle()
 *
 * @param object $controller Controller
 * @return void
 */
    public function onDeactivation(&$controller) {
        // ACL: remove ACOs with permissions
        $controller->Croogo->removeAco('CroogoAddonsServer'); // CroogoAddonsServerController ACO and it's actions will be removed

        // Main menu: delete link
        $link = $controller->Link->find('first', array(
            'conditions' => array(
                'Menu.alias' => 'main',
                'Link.link' => 'plugin:croogo_addons_server/controller:croogo_addons_server/action:index',
            ),
        ));
        $controller->Link->Behaviors->attach('Tree', array(
            'scope' => array(
                'Link.menu_id' => $link['Link']['menu_id'],
            ),
        ));
        if (isset($link['Link']['id'])) {
            $controller->Link->delete($link['Link']['id']);
        }
    }
}
?>
<?php

namespace OpenOrchestra\WorkflowFunctionBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('open_orchestra_workflow_function');

        $rootNode->children()
            ->arrayNode('document')
                ->addDefaultsIfNotSet()
                ->children()
                    ->arrayNode('workflow_function')
                        ->addDefaultsIfNotSet()
                        ->children()
                            ->scalarNode('class')->defaultValue('OpenOrchestra\WorkflowFunctionBundle\Document\WorkflowFunction')->end()
                            ->scalarNode('repository')->defaultValue('OpenOrchestra\WorkflowFunctionBundle\Repository\WorkflowFunctionRepository')->end()
                        ->end()
                    ->end()
                ->end()
            ->end()
        ->end();

        return $treeBuilder;
    }
}
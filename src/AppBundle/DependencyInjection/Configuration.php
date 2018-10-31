<?php

namespace AppBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * @package AppBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $rootNode = $treeBuilder->root('app');

        $rootNode
            ->children()
                ->arrayNode('client')
                    ->children()
                        ->arrayNode('bitstamp')
                            ->children()
                                ->scalarNode('base_uri')->end()
                            ->end()
                            ->children()
                                ->scalarNode('api_key')->end()
                            ->end()
                            ->children()
                                ->scalarNode('api_secret')->end()
                            ->end()
                            ->children()
                                ->scalarNode('client_id')->end()
                            ->end()
                        ->end()
                        ->arrayNode('itbit')
                            ->children()
                                ->scalarNode('base_uri')->end()
                            ->end()
                            ->children()
                                ->scalarNode('api_key')->end()
                            ->end()
                            ->children()
                                ->scalarNode('api_secret')->end()
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}

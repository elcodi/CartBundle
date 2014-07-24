<?php

/**
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\CartBundle\Tests\Functional\app;

use Elcodi\CoreBundle\Tests\Functional\app\Abstracts\AbstractElcodiKernel;

/**
 * Class AppKernel
 */
class AppKernel extends AbstractElcodiKernel
{
    /**
     * Register application bundles
     *
     * @return array Array of bundles instances
     */
    public function registerBundles()
    {
        $bundles = array(

            /**
             * Symfony bundles
             */
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),

            /**
             * Doctrine bundles
             */
            new \Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new \Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new \Doctrine\Bundle\DoctrineCacheBundle\DoctrineCacheBundle(),

            /**
             * Storage bundles
             */
            new \Knp\Bundle\GaufretteBundle\KnpGaufretteBundle(),

            /**
             * Elcodi core bundles
             */
            new \Elcodi\CoreBundle\ElcodiCoreBundle(),
            new \Elcodi\LanguageBundle\ElcodiLanguageBundle(),
            new \Elcodi\CartBundle\ElcodiCartBundle(),
            new \Elcodi\UserBundle\ElcodiUserBundle(),
            new \Elcodi\GeoBundle\ElcodiGeoBundle(),
            new \Elcodi\AttributeBundle\ElcodiAttributeBundle(),
            new \Elcodi\ProductBundle\ElcodiProductBundle(),
            new \Elcodi\CurrencyBundle\ElcodiCurrencyBundle(),
            new \Elcodi\MediaBundle\ElcodiMediaBundle(),
        );

        return $bundles;
    }

    /**
     * Gets the container class.
     *
     * @return string The container class
     */
    protected function getContainerClass()
    {
        return  $this->name .
                ucfirst($this->environment) .
                'DebugProjectContainerCart';
    }
}

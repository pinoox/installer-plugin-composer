<?php
/**
 *      ****  *  *     *  ****  ****  *    *
 *      *  *  *  * *   *  *  *  *  *   *  *
 *      ****  *  *  *  *  *  *  *  *    *
 *      *     *  *   * *  *  *  *  *   *  *
 *      *     *  *    **  ****  ****  *    *
 * @author   Pinoox
 * @link https://www.pinoox.com/
 * @license  https://opensource.org/licenses/MIT MIT License
 */


namespace Pinoox\Composer;


use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class CoreInstaller extends LibraryInstaller
{
    /**
     * @inheritDoc
     */
    public function getInstallPath(PackageInterface $package)
    {
        return 'pincore';
    }

    /**
     * @inheritDoc
     */
    public function supports($packageType)
    {
        return 'pinoox-core' === $packageType;
    }
}
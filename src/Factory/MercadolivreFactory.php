<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/markethub-bundle
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\MarkethubBundle\Factory;

use Gpupo\MercadolivreSdk\Factory;

class MercadolivreFactory extends Factory implements FactoryInterface
{
    const id = 'markethub.mercadolivre.factory';

    public function setClient(array $clientOptions = null)
    {
        $clientOptions = [
            'client_id' => $this->options['client_id'],
            'access_token' => $this->options['access_token'],
            'verbose' => $this->options['verbose'],
        ];

        return parent::setClient($clientOptions);
    }
}

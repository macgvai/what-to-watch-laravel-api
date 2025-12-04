<?php

namespace App\Http\Responses;

class Success extends Base
{
    /**
     * Формирование содержимого ответа.
     *
     * @return array|null
     */
    protected function makeResponseData(): ?array
    {
        $preparedData = $this->prepareData();

        return $this->data ? [
            'data' => $preparedData,
            'count' => is_countable($preparedData) ? count($preparedData) : 0,
        ] : null;
    }
}

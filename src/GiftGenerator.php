<?php

enum GiftType: string
{
    case ROSE = "Rosa";
    case BOOK = "Llibre";
}

class GiftGenerator
{
    private array $roses = ['vermell', 'rosa', 'groc', 'blanc', 'blau'];
    private array $books = ['La plaça del Diamant', 'Tirant lo Blanc', "El zoo d'en Pitus", 'Solitud', 'Aloma'];

    public function generateGift(GiftType $giftType): void
    {
        $giftMessage = match ($giftType) {
            GiftType::ROSE => "T'ha tocat una rosa de color " . $this->getRandomItem($this->roses) . '!' . PHP_EOL,
            GiftType::BOOK => "Has guanyat el llibre " . $this->getRandomItem($this->books) . '!' . PHP_EOL,
        };

        echo $giftMessage;
    }

    private function getRandomItem(array $items): string
    {
        $key = array_rand($items);
        return $items[$key];
    }
}

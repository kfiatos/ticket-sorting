<?php
namespace App\Interfaces;

/**
 * Interface TicketInterface
 * @package App\Interfaces
 */
interface TicketInterface
{
    /**
     * @return string
     */
    public function getDepartureLocation(): string;

    /**
     * @return string
     */
    public function getArrivalLocation(): string;

    /**
     * @return string
     */
    public function getAccommodationDescription(): string;

    /**
     * @return string
     */
    public function getMeansOfTransportation(): string;

    /**
     * @return string|null
     */
    public function getLuggageInfo(): ?string;
}
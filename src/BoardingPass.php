<?php
namespace App;


use App\Interfaces\TicketInterface;

/**
 * Class BoardingPass
 * @package App
 */
class BoardingPass implements TicketInterface
{
    /**
     * @var string
     */
    private $departureLocation;

    /**
     * @var string
     */
    private $arrivalLocation;

    /**
     * @var string
     */
    private $accommodationDescription;

    /**
     * @var string
     */
    private $meansOfTransportation;

    /**
     * @var string
     */
    private $luggageInfo;

    /**
     * BoardingPass constructor.
     * @param string $departureLocation
     * @param string $arrivalLocation
     * @param string $accommodationDescription
     * @param string $meansOfTransportation
     * @param string $luggageInfo
     */
    public function __construct(
        string $departureLocation,
        string $arrivalLocation,
        string $accommodationDescription,
        string $meansOfTransportation,
        string $luggageInfo = null
    )
    {
        $this->departureLocation = $departureLocation;
        $this->arrivalLocation = $arrivalLocation;
        $this->accommodationDescription = $accommodationDescription;
        $this->meansOfTransportation = $meansOfTransportation;
        $this->luggageInfo = $luggageInfo;
    }

    /**
     * @return string
     */
    public function getDepartureLocation(): string
    {
        return $this->departureLocation;
    }

    /**
     * @return string
     */
    public function getArrivalLocation(): string
    {
        return $this->arrivalLocation;
    }

    /**
     * @return string
     */
    public function getAccommodationDescription(): string
    {
        return $this->accommodationDescription;
    }

    /**
     * @return string
     */
    public function getMeansOfTransportation(): string
    {
        return $this->meansOfTransportation;
    }

    /**
     * @return string|null
     */
    public function getLuggageInfo(): ?string
    {
        return $this->luggageInfo;
    }

}
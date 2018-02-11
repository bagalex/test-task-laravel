<?php

namespace App\Console\Commands;

use App\Repositories\OfferRepository;
use App\Service\Adapter\IdOfferAdapter;
use App\Service\Adapter\UidOfferAdapter;
use App\Service\Request\OfferApiRequest;
use Illuminate\Console\Command;


class CreateOfferCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:offer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new offer';

    /**
     * @var OfferApiRequest
     */
    private $offerApi;

    /**
     * @var OfferRepository
     */
    private $offerRepository;

    /**
     * Create a new command instance.
     *
     * @param OfferApiRequest $offerApi
     * @param OfferRepository $offerRepository
     */
    public function __construct(OfferApiRequest $offerApi, OfferRepository $offerRepository)
    {
        parent::__construct();

        $this->offerApi = $offerApi;
        $this->offerRepository = $offerRepository;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function handle()
    {
        $offers = $this->offerApi->getOffers();
        $countries = $this->offerApi->getCountriesCodes();

        foreach ($offers as $key => $item) {
            $item = $item[0];

            if (isset($item['uid'])) {
                $offer = new UidOfferAdapter($item);
                $offer->transformCountriesFormat($countries);
            } else {
                $offer = new IdOfferAdapter($item);
            }
            $offerData = $offer->toArray();

            $this->offerRepository->updateOrCreate(['application_id' => $offerData['application_id']], $offerData);
        }
    }
}

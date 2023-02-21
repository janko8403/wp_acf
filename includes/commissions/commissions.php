<?php

class Offers
{



    function getOffers()
    {
        // $days = [1, 4, 4, 7, 10, 12, 14];
        // $offers = $this->fetchOffers()
        // ?? [
        //     [
        //         'start_date' => $this->dateForward(array_shift($days)),
        //     ],
        // ];
        // foreach ($offers as $i => $offer) {
        //     echo generateOffer($i + 1, $offer);
        // }
    }

    function dateForward($days)
    {
        $dt = new DateTime();
        $dt->modify("+$days days");

        return $dt->format('d.m.Y');
    }

    function fetchOffers()
    {
        $client = new \Zend\Http\Client(
            // '',
            ['adapter' => new \Zend\Http\Client\Adapter\Curl()]
        );
        $client->setHeaders(['Accept' => '*/*']);

        $response = $client->send();
        if ($response->getStatusCode() == 200) {
            $offers = json_decode($response->getBody());

            return $offers->_embedded->commissions;
        }

        return null;
    }

    function generateOffer($i, $offer)
    {
        $startDate = new \DateTime();
        $startDate->setTimestamp($offer->start_date);
        $endDate = new \DateTime();
        $endDate->setTimestamp($offer->end_date);
        // $offer->rate_total = money_format('%i', $offer->rate_total);

        $logo = $offer->logo
            ? "<div class=\"tikrow-job-logo\">
                    <img src=\"https://app.tikrow.com/api/files/logo/{$offer->logo}/show\" alt=\"logo\">
                </div>"
            : '<div class="logo-placeholder"><div class="svg-wrapper"><svg class="icon" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 8.33331H1" stroke-linecap="round" stroke-linejoin="round"></path><path d="M15.6667 8.33331H9.66666" stroke-linecap="round" stroke-linejoin="round"></path><path d="M5.66666 3.66667V2.33333C5.66666 1.6 6.26599 1 6.99999 1H9.66666C10.4 1 11 1.6 11 2.33333V3.66667" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M15.6667 14.3333C15.6667 14.7 15.3667 15 15 15H1.66667C1.3 15 1 14.7 1 14.3333V4.33329C1 3.96663 1.3 3.66663 1.66667 3.66663H15C15.3667 3.66663 15.6667 3.96663 15.6667 4.33329V14.3333Z" stroke-linecap="round" stroke-linejoin="round"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M9.66667 8.99998C9.66667 9.73331 9.06733 10.3333 8.33333 10.3333C7.96733 10.3333 7.63333 10.1793 7.39267 9.93998C7.15267 9.69998 7 9.36665 7 8.99998V7.66665C7 6.93398 7.59933 6.33331 8.33333 6.33331C8.69933 6.33331 9.03333 6.48731 9.274 6.72665C9.514 6.96665 9.66667 7.29998 9.66667 7.66665V8.99998Z" stroke-linecap="round" stroke-linejoin="round"></path></svg></div></div>';

        $html = <<<HTML
    <div class="job-wrapper">
    <div class="tikrow-job">
        <a target="_blank" href="https://farmaceuta.medivacant.com/job/{$offer->id}">
            <div class="tikrow-job-main">
                {$logo}
                <div class="tikrow-job-info">
                    <div class="position">{$offer->position}</div>
                    <div class="employer">
                        <span class="item">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path
                                    d="M3.3335 3.14286V1H6.66683V3.14286" stroke="#92C655" stroke-linecap="round"
                                    stroke-linejoin="round"></path><path
                                    d="M4 7.42857H0V3.85714C0 3.6677 0.0702379 3.48602 0.195262 3.35206C0.320286 3.21811 0.489856 3.14285 0.666667 3.14285H9.33333C9.51014 3.14285 9.67971 3.21811 9.80474 3.35206C9.92976 3.48602 10 3.6677 10 3.85714V7.42857H6"
                                    stroke="#92C655" stroke-linecap="round" stroke-linejoin="round"></path><path
                                    d="M9.33366 8.85715V10.2857C9.33366 10.4752 9.26342 10.6568 9.1384 10.7908C9.01337 10.9247 8.8438 11 8.66699 11H1.33366C1.15685 11 0.987279 10.9247 0.862254 10.7908C0.73723 10.6568 0.666992 10.4752 0.666992 10.2857V8.85715"
                                    stroke="#92C655" stroke-linecap="round" stroke-linejoin="round"></path><path
                                    d="M5.99951 6H3.99951V8.85714H5.99951V6Z" stroke="#92C655" stroke-linecap="round"
                                    stroke-linejoin="round"></path></svg>
                                {$offer->customer}
                            </span><span
                            class="item"><svg width="10" height="12" viewBox="0 0 10 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg"><path
                            d="M9 4.63636L5 1L1 4.63636V10.0909C1 10.332 1.09365 10.5632 1.26035 10.7337C1.42705 10.9042 1.65314 11 1.88889 11H8.11111C8.34686 11 8.57295 10.9042 8.73965 10.7337C8.90635 10.5632 9 10.332 9 10.0909V4.63636Z"
                            stroke="#E30613" stroke-linecap="round" stroke-linejoin="round"></path><path
                            d="M5.88862 7.81818H4.11084V10.5455H5.88862V7.81818Z" fill="#E30613"></path></svg> 
                                {$offer->customer_city}, {$offer->customer_address}</span>
                    </div>
                </div>
            </div>
            <div class="job-header-footer">
                <div class="footer-item">
                    <svg class="icon" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1 10.9998H6.09159V8.33319H1V10.9998Z"
                            stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M2.27264 8.21212V5.30351C2.27264 4.76952 2.68183 4.33353 3.18202 4.33353H14.0907C14.5908 4.33353 15 4.76952 15 5.30351V14.03C15 14.5633 14.5908 15 14.0907 15H3.18202C2.68183 15 2.27264 14.5633 2.27264 14.03V11.1207"
                            stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.5 4.33327L6.13286 1L4.49994 4.33327" stroke="#002f4a" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <figcaption class="footer-item-desc"><span class="rate-total">{$offer->rate_total} </span><br> PLN
                    </figcaption>
                </div>
                <div class="footer-item">
                    <svg class="icon" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.93355 4.81818C1.36464 5.83 1 6.75718 1 8C1 11.8653 4.13345 15 8 15C11.8653 15 15 11.8653 15 8C15 4.13345 11.8653 1 8 1"
                            stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.63637 8.00001C8.63637 8.35192 8.35192 8.63637 8.00001 8.63637C7.6481 8.63637 7.36365 8.35192 7.36365 8.00001C7.36365 7.6481 7.6481 7.36365 8.00001 7.36365C8.35192 7.36365 8.63637 7.6481 8.63637 8.00001Z"
                            stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M7.99999 8L4.81818 6.09091" stroke="#002f4a" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                        <path d="M8 2.90909V1" stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <figcaption class="footer-item-desc">{$startDate->format('H:i')} - {$endDate->format('H:i')} <br> {$offer->rate_hour} PLN/h</figcaption>
                </div>
                <div class="footer-item">
                    <svg class="icon" width="16" height="16" viewBox="0 0 16 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M15 14.3636C15 14.7136 14.7136 15 14.3636 15H1.63636C1.28636 15 1 14.7136 1 14.3636V2.9091C1 2.5591 1.28636 2.27274 1.63636 2.27274H14.3636C14.7136 2.27274 15 2.5591 15 2.9091V14.3636Z"
                            stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M4.81818 1V3.54545" stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.1818 1V3.54545" stroke="#002f4a" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.5455 7.36365L7.26504 11.1818L5.45459 9.26256" stroke="#002f4a" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <figcaption class="footer-item-desc">{$startDate->format('d.m.Y')}</figcaption>
                </div>
            </div>
        </a></div>
    </div>
    HTML;

        return $html;
    }
}
